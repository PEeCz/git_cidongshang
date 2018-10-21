<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superadmin extends CI_Controller
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

	public function index()
	{
		$data = array();
		$data['header'] = $this->load->view('srcbe/header_v','',true);
		$data['sidebar'] = $this->load->view('srcbe/sidebar_v','',true);
		$data['content1'] = $this->load->view('srcbe/content_v','',true);

		$this->load->view('admin', $data);
	}

	public function addCategory()
	{
		$data = array();

		$data['all_category_info'] = $this->Superadmin_model->allCategoryInfo();

		$data['header'] = $this->load->view('srcbe/header_v','',true);
		$data['sidebar'] = $this->load->view('srcbe/sidebar_v','',true);
		$data['content1'] = $this->load->view('srcbe/add_category','',true);
		$data['content2'] = $this->load->view('srcbe/manage_category',$data,true);

		$this->load->view('admin', $data);
	}

	public function saveCategory()
	{
		$this->Superadmin_model->saveCategoryInfo();

		$sdata = array();
		$sdata['message'] = "ทำการเพิ่มหมวดหมู่เรียบร้อย !";
		$this->session->set_userdata($sdata);

		redirect('AddCategory');
		/*$data = array();
		$data['category_name'] = $this->input->post('category_name',true);
		$data['category_description'] = $this->input->post('category_description',true);
		$data['published_status'] = $this->input->post('published_status',true);

		echo "<pre>";
		print_r($data);
		exit();*/
	}

    public function unpublishedCategory($category_id)
    {
    	$this->Superadmin_model->unpublishedCategoryInfo($category_id);
    	redirect('AddCategory');
    }

    public function publishedCategory($category_id)
    {
    	$this->Superadmin_model->publishedCategoryInfo($category_id);
    	redirect('AddCategory');
    }

    public function editCategory($category_id)
    {
    	$data = array();
		$data['all_category_info'] = $this->Superadmin_model->allCategoryInfo();
    	$data['category_info'] = $this->Superadmin_model->selectCategoryById($category_id);

    	$data['header'] = $this->load->view('srcbe/header_v','',true);
		$data['sidebar'] = $this->load->view('srcbe/sidebar_v','',true);
		$data['content1'] = $this->load->view('srcbe/edit_category',$data,true);
		$data['content2'] = $this->load->view('srcbe/manage_category',$data,true);

		$this->load->view('admin', $data);
    }

    public function Updatecategory()
    {
    	$this->Superadmin_model->updateCategoryInfo();
    	redirect('AddCategory');
    }

    public function deleteCategory($category_id)
    {
    	$this->Superadmin_model->deleteCategoryInfo($category_id);
    	redirect('AddCategory');
    }

    public function addManufacture()
    {
    	$data = array();

		$data['all_manufacture_info'] = $this->Superadmin_model->allManufactureInfo();

		$data['header'] = $this->load->view('srcbe/header_v','',true);
		$data['sidebar'] = $this->load->view('srcbe/sidebar_v','',true);
		$data['content1'] = $this->load->view('srcbe/add_manufacture','',true);
		$data['content2'] = $this->load->view('srcbe/manage_manufacture',$data,true);

		$this->load->view('admin', $data);
    }

    public function saveManufacture()
	{
		$this->Superadmin_model->saveManufactureInfo();

		$sdata = array();
		$sdata['message'] = "ทำการเพิ่มสินค้าเรียบร้อย !";
		$this->session->set_userdata($sdata);

		redirect('AddManufacture');
		/*$data = array();
		$data['category_name'] = $this->input->post('category_name',true);
		$data['category_description'] = $this->input->post('category_description',true);
		$data['published_status'] = $this->input->post('published_status',true);

		echo "<pre>";
		print_r($data);
		exit();*/
	}

	public function unpublishedManufacture($manufacture_id)
    {
    	$this->Superadmin_model->unpublishedManufactureInfo($manufacture_id);
    	redirect('AddManufacture');
    }

    public function publishedManufacture($manufacture_id)
    {
    	$this->Superadmin_model->publishedManufactureInfo($manufacture_id);
    	redirect('AddManufacture');
    }

    public function deleteManufacture($manufacture_id)
    {
    	$this->Superadmin_model->deleteManufactureInfo($manufacture_id);
    	redirect('AddManufacture');
    }

	public function logout()
	{
		$this->session->unset_userdata('admin_id');
		$this->session->unset_userdata('admin_name');
		$this->session->unset_userdata('admin_email');
		$this->session->unset_userdata('admin_firstname');

		$sdata = array();
		$sdata['message'] = "ล็อคเอ้าท์สำเร็จ !";
		$this->session->set_userdata($sdata);
		redirect('LoginBackend');
	}
}