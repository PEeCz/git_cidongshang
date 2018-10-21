<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Superadmin_model');
		$admin_id = $this->session->userdata('admin_id');
		if($admin_id == NULL)
		{
			redirect('LoginBackend');
		}
	}

	public function operationData()
	{
		$data = array();
		$data['selectallopdata'] = $this->Backend_model->selectAllOpData();

		$data['header'] = $this->load->view('srcbe/header_v','',true);
		$data['sidebar'] = $this->load->view('srcbe/sidebar_v','',true);
		$data['content1'] = $this->load->view('srcbe/backend/operation_table',$data,true);


		$this->load->view('admin', $data);
	}

	public function addOperationData()
	{
		$data = array();

		$data['header'] = $this->load->view('srcbe/header_v','',true);
		$data['sidebar'] = $this->load->view('srcbe/sidebar_v','',true);
		$data['content1'] = $this->load->view('srcbe/backend/operation/add','',true);


		$this->load->view('admin', $data);
	}

	public function saveAddOperationData()
	{
		$this->Backend_model->saveAddOperationData();
	}

	public function accountingData()
	{
		$data = array();
		$data['selectallaccdata'] = $this->Backend_model->selectAllAccountingData();

		$data['header'] = $this->load->view('srcbe/header_v','',true);
		$data['sidebar'] = $this->load->view('srcbe/sidebar_v','',true);
		$data['content1'] = $this->load->view('srcbe/backend/accounting_table',$data,true);

		$this->load->view('admin', $data);
	}

	public function addAccountingData()
	{
		$data = array();

		$data['header'] = $this->load->view('srcbe/header_v','',true);
		$data['sidebar'] = $this->load->view('srcbe/sidebar_v','',true);
		$data['content1'] = $this->load->view('srcbe/backend/accounting/add',$data,true);


		$this->load->view('admin', $data);
	}
}