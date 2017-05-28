<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_manage_comment extends CI_Controller 
{

		public function __construct()
		{
				parent::__construct();
	            if(!isset($_SESSION['username']))
	            {
	                $this->session->set_flashdata("error","คุณยังไม่ได้เข้าสู่ระบบ !!");
	                redirect('home/login');
	            } 
				$this->load->model('manage_comment_model','comment_model');
		}

	    public function index($offset = 0) {
		        $array = $this->comment_model->get_all($offset);
		        $data['query'] = $array['query'];
		        $data['pagination'] = $array['pagination'];
		        $data['content'] = 'backend/page_comment_view';
		        $this->load->view('backend/herder');
		        $this->load->view('backend/menu');
		        $this->load->view('backend/manage_comment_view', $data);
		        $this->load->view('backend/footer');
	    }


}
