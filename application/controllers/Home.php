<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Home_model','home');
        }

        public function index($offset = 0) 
        {
                $array = $this->home->get_all($offset);
                $data['query'] = $array['query'];
                $data['pagination'] = $array['pagination'];
                $data['content'] = 'frontend/page_view';
                $this->load->view('frontend/herder');
                $this->load->view('frontend/home_view', $data);
                $this->load->view('frontend/footer');
        }
        public function addcomment()
        {
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                    $this->home->insert(array(
                        'c_id'=> (''),
                        'c_name'=> $this->input->post('txtName'),
                        'c_comment'=> $this->input->post('txtComment')
                    ));

                    $this->session->set_flashdata('successAdd','<b>เราได้รับคำติชมของคุณแล้ว</b>');
                    redirect('home/index');
                } 
        }
        public function login()
        {
                $this->load->view('frontend/login_view');
        }
        public function checklogin()
        {
                if($this->input->server('REQUEST_METHOD') == TRUE )
                {
                    if($this->home->check_login($this->input->post('txtusername'),$this->input->post('txtpassword')) == 1)
                    {
                        $rs = $this->home->check_login($this->input->post('txtusername'),$this->input->post('txtpassword'));
                        $this->session->set_userdata(array('username' => $rs -> m_username,'name' => $rs -> m_name,'type' => $rs -> m_type,'id' => $rs -> m_id));
                        redirect('admin_manage_status/index');
                    }
                    else
                    {
                        $this->session->set_flashdata('error','<strong>Username</strong> หรือ <strong>Password</strong> ผิดพลาด!');
                        redirect('home/login');
                    } 
                }
        }
        public function logout()
        {
                $this->session->sess_destroy();
                redirect('home/index');
        }


}
