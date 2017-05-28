<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_manage_status extends CI_Controller 
{

        public function __construct()
        {
                parent::__construct();
                if(!isset($_SESSION['username']))
                {
                    $this->session->set_flashdata("error","คุณยังไม่ได้เข้าสู่ระบบ !!");
                    redirect('home/login');
                } 
                $this->load->model('manage_status_model','status_model');
                $this->load->library('mpdf/mpdf');
        }

        public function index($offset = 0) 
        {
                $array = $this->status_model->get_all($offset);
                $data['query'] = $array['query'];
                $data['pagination'] = $array['pagination'];
                $data['content'] = 'backend/page_view';
                $this->load->view('backend/herder');
                $this->load->view('backend/menu');
                $this->load->view('backend/manage_status_view', $data);
                $this->load->view('backend/footer');
        }
        public function add()
        {
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                    $this->status_model->insert(array(
                        's_id'=> (''),
                        's_type'=> $this->input->post('txtType'),
                        's_name'=> $this->input->post('txtName'),
                        's_issue'=> $this->input->post('txtIssue'),
                        's_status'=> ('กำลังซ่อม'),
                        's_detail'=> ('-'),
                    ));

                    $this->session->set_flashdata('successAdd','<b>เพิ่มข้อมูลเรียบร้อย</b>');
                    redirect('Admin_manage_status/index');
                } 
        }
        public function view_edit($s_id)
        { 
                $this->rs= $this->status_model->get_one($s_id);
                $this->load->view('backend/herder');
                $this->load->view('backend/menu');
                $this->load->view('backend/manage_status_edit_view',$this);
                $this->load->view('backend/footer');
        }
        public function edit()
        {
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                    $this->status_model->update($this->input->post('txtID'));
                    $this->session->set_flashdata('success_edit','<b>แก้ไขข้อมูลเรียบร้อย</b>');
                    redirect('admin_manage_status/view_edit/'.$this->input->post('txtID'));
                } 
        }
        public function remove($s_id)
        {
                $this->status_model->drop($s_id);
                $this->session->set_flashdata('successRemove','<b>ลบข้อมูลเรียบร้อย</b>');
                redirect('admin_manage_status/index');
        }
	public function report($s_id)
	{
            $r = $this->status_model->get_one($s_id);
            $html = "
                <div style='text-align: right'>
                    (ส่วนของลูกค้า)
                </div>
                <br>
                <div>
                    084-5112207 | 093-4164422 | www.042IT.com
                </div>
                <b>ใบรับซ่อม</b> โปรดนำใบส่งซ่อมมาทุกครั้งเพื่อติดต่อรับเครื่อง &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br><br>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b>รหัสส่งซ่อม : $r->s_id </b><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b>วันที่เวลาส่งซ่อม : $r->s_created </b><br>
                
                <table align='center' style='border-collapse: collapse; border-top-color: rgb(136, 136, 136); border-right-color: rgb(136, 136, 136); border-bottom-color: rgb(136, 136, 136); border-left-color: rgb(136, 136, 136); border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; ' border='1' bordercolor='#888' cellspacing='0'>
                  <tr>
                    <td height='30' align='right'>ประเภท</td>
                    <td width='300'> <center><b>$r->s_type</b></center> </td>
                  </tr>
                  <tr>
                    <td height='30' align='right'>ชื่อรุ่น</td>
                    <td width='300'> <center><b>$r->s_name</b></center> </td>
                  </tr>
                  <tr>
                    <td height='30' align='right'>อาการเสีย</td>
                    <td width='300'> <center><b>$r->s_issue</b></center> </td>
                  </tr>
                  <tr>
                    <td height='30' align='right'>อุปกรณ์ที่มากับเครื่อง</td>
                    <td width='300'></td>
                  </tr>
                </table>
                <br>
                <div>
                    อุปกรณ์คอมพิวเตอร์ โปรแกรม (Solfware) และข้อมูลต่างๆที่มีอยู่ในเครื่องคอมพิวเตอร์เครื่องนี้เป็นของข้าพเจ้าทั้งหมด เนื่องจากอุปกรณ์ได้รับความเสียหายอันเนื่องมาจากปัจจัยหมายอย่าง จึงนำเครื่องมาเพื่อซ่อม
                </div>
                <p><b>เงื่อนไขการซ่อมของร้านเขตต์ปริ้นเตอร์</b></p>
                <p>1. รายการซ่อมปริ้นเตอร์,คอมพิวเตอร์ เสนอราคาซ่อมภายใน 1 วัน แต่ไม่เกิน 3 วัน<br>
                2. รายการที่เสนอซ่อมแล้วลูกค้าไม่ติดต่อทางร้านระยะเวลา 60 วันทุกกรณี ข้าพเจ้าได้อ่านข้อความ<br>
                &nbsp;&nbsp;&nbsp;&nbsp;ทั้งหมดแล้วและยินยอมให้ดำเนินการตามเงื่อนไขทุกประการ<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<font color='red'>ทางร้านจะถือว่าอุปกรณ์ที่นำมาซ่อมตกเป็นของร้านโดยทันทีจากวันที่ส่งซ่อม</font></p>

                <hr>

                <br>
                <br>
                <div style='text-align: right'>
                    (ส่วนของร้าน)
                </div>
                <br>
                <div>
                    084-5112207 | 093-4164422 | www.042IT.com
                </div>
                <b>ใบรับซ่อม</b> โปรดนำใบส่งซ่อมมาทุกครั้งเพื่อติดต่อรับเครื่อง &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b>รหัสส่งซ่อม : $r->s_id </b><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b>วันที่เวลาส่งซ่อม : $r->s_created </b><br>
                <table align='center' style='border-collapse: collapse; border-top-color: rgb(136, 136, 136); border-right-color: rgb(136, 136, 136); border-bottom-color: rgb(136, 136, 136); border-left-color: rgb(136, 136, 136); border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; ' border='1' bordercolor='#888' cellspacing='0'>
                  <tr>
                    <td height='30' align='right'>ประเภท</td>
                    <td width='300'> <center><b>$r->s_type</b></center> </td>
                  </tr>
                  <tr>
                    <td height='30' align='right'>ชื่อรุ่น</td>
                    <td width='300'> <center><b>$r->s_name</b></center> </td>
                  </tr>
                  <tr>
                    <td height='30' align='right'>อาการเสีย</td>
                    <td width='300'> <center><b>$r->s_issue</b></center> </td>
                  </tr>
                  <tr>
                    <td height='30' align='right'>อุปกรณ์ที่มากับเครื่อง</td>
                    <td width='300'></td>
                  </tr>
                </table>
                <br>
                <div>
                    อุปกรณ์คอมพิวเตอร์ โปรแกรม (Solfware) และข้อมูลต่างๆที่มีอยู่ในเครื่องคอมพิวเตอร์เครื่องนี้เป็นของข้าพเจ้าทั้งหมด เนื่องจากอุปกรณ์ได้รับความเสียหายอันเนื่องมาจากปัจจัยหมายอย่าง จึงนำเครื่องมาเพื่อซ่อม
                </div>
                <br>
                <b>ผู้ส่งซ่อม :</b> ............................... <b>เบอร์ติดต่อ :</b> ..................................<b> ที่อยู่ :</b> ................................................................. <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) </p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ลงชื่อ
            ";
            
            $this->mpdf = New mPDF('th');
            $this->mpdf->WriteHTML($html);
            $this->mpdf->Output();
        }


}
