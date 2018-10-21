<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$admin_id = $this->session->userdata('admin_id');
		if($admin_id != NULL)
		{
			redirect('Dashboard');
		}
	}

	public function index()
	{
		$this->load->view('srcbe/adminlogin', $data);
	}

	public function login_adminchk()
	{
		$email = $this->input->post('email',true);
		$password = $this->input->post('password',true);

		$result = $this->Admin_model->chkAdminLoginInfo($email,$password);
		$sdata = array();
		if($result){
			$sdata['admin_id'] = $result->admin_id;
			$sdata['admin_name'] = $result->admin_name;
			$sdata['admin_email'] = $result->admin_email;
			$sdata['admin_firstname'] = $result->admin_firstname;

			$this->session->set_userdata($sdata);
			redirect('Dashboard');
		}else{
			$sdata['message'] = "Email หรือ Password ของคุณไม่ถูกต้อง !";

			$this->session->set_userdata($sdata);
			redirect('LoginBackend');
		}
	}


}