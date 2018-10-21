<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data = array();
		$data['Navheaders'] = $this->load->view('srcfe/topnavbar_v','',true);
		$data['Searchbooking'] = $this->load->view('srcfe/searchbooking_v','',true);
		$data['mainPackage'] = $this->load->view('srcfe/package_v','',true);
		$data['mainTravels'] = $this->load->view('srcfe/travels_v','',true);
		$data['mainRentcar'] = $this->load->view('srcfe/rentcar_v','',true);
		$data['mainContents'] = $this->load->view('srcfe/contents_v','',true);
		$data['Footer'] = $this->load->view('srcfe/footer_v','',true);

		$this->load->view('master', $data);
	}

	public function Checkout()
	{
		$data = array();
		$data['Navheaders'] = $this->load->view('srcfe/topnavbar_v','',true);
		$data['mainContents'] = $this->load->view('srcfe/Checkout_v','',true);
		$data['Footer'] = $this->load->view('srcfe/footer_v','',true);

		$this->load->view('master', $data);
	}
}
