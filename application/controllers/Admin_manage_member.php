<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_manage_member extends CI_Controller 
{

        public function __construct()
        {
                parent::__construct();
                if(!isset($_SESSION['username']))
                {
                    $this->session->set_flashdata("error","คุณยังไม่ได้เข้าสู่ระบบ !!");
                    redirect('home/login');
                } 
                $this->load->model('manage_member_model','member_model');
        }

        public function index($offset = 0) {
                $array = $this->member_model->get_all($offset);
                $data['query'] = $array['query'];
                $data['pagination'] = $array['pagination'];
                $data['content'] = 'backend/page_member_view';
                $this->load->view('backend/herder');
                $this->load->view('backend/menu');
                $this->load->view('backend/manage_member_view', $data);
                $this->load->view('backend/footer');
        }
        public function add()
        {
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                    $check = $this->member_model->check_insert($this->input->post('txtUsername'));
                    if($check == TRUE)
                    {
                        $this->session->set_flashdata('Error','<b>Error !! Username ซ้ำกรุณาเปลี่ยนใหม่</b>');
                        redirect('admin_manage_member/index');
                    }
                    else
                    {
                        $this->member_model->insert(array(
                            'm_id'=> (''),
                            'm_name'=> $this->input->post('txtName'),
                            'm_username'=> $this->input->post('txtUsername'),
                            'm_password'=> $this->input->post('txtPassword'),
                            'm_type'=> ('2'),
                        ));

                        $this->session->set_flashdata('successAdd','<b>เพิ่มข้อมูลเรียบร้อย</b>');
                        redirect('Admin_manage_member/index');
                    } 
                }
        }
        public function view_edit($s_id)
        { 
                $this->rs= $this->member_model->get_one($s_id);
                $this->load->view('backend/herder');
                $this->load->view('backend/menu');
                $this->load->view('backend/manage_member_edit_view',$this);
                $this->load->view('backend/footer');
        }
        public function edit()
        {
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                    $this->member_model->update($this->input->post('txtID'));
                    $this->session->set_flashdata('success_edit','<b>แก้ไขข้อมูลเรียบร้อย</b>');
                    redirect('admin_manage_member/view_edit/'.$this->input->post('txtID'));
                } 
        }
        public function remove($s_id)
        {
                $this->member_model->drop($s_id);
                $this->session->set_flashdata('successRemove','<b>ลบข้อมูลเรียบร้อย</b>');
                redirect('admin_manage_member/index');
        }


}
