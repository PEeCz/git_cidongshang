<?php
	class Superadmin_model extends CI_Model
	{
	    public function saveCategoryInfo()
	    {
	        /*$data = array();
	        $data['category_name'] = $this->input->post('category_name',true);
	        $data['category_description'] = $this->input->post('category_description',true);
	        $data['published_status'] = $this->input->post('published_status',true);*/

	        $data = array(
		            'category_id' => NULL,
					'category_name' => $this->input->post('category_name'),
					'category_description' => $this->input->post('category_description'),
					'published_status' => $this->input->post('published_status')
		        );

	        $this->db->insert('tb_category', $data);
	    }

	    public function selectAllPublishedCategory()
	    {
	    	$this->db->select('*');
	    	$this->db->from('tb_category');
	    	$this->db->where('published_status',1);

	    	$qryRes = $this->db->get();
	    	$category_info = $qryRes->result();
	    	/*echo "<pre>";
	    	print_r($category_info);
	    	exit();*/

	    	return $category_info;
	    }

	    public function allCategoryInfo()
	    {
	    	$this->db->select('*');
	    	$this->db->from('tb_category');

	    	$qryRes = $this->db->get();
	    	$category_info = $qryRes->result();

			return $category_info;
	    }

	    public function unpublishedCategoryInfo($category_id)
	    {
	    	$this->db->set('published_status',0);
	    	$this->db->where('category_id',$category_id);
	    	$this->db->update('tb_category');
	    }

	    public function publishedCategoryInfo($category_id)
	    {
	    	$this->db->set('published_status',1);
	    	$this->db->where('category_id',$category_id);
	    	$this->db->update('tb_category');
	    }

	    public function selectCategoryById($category_id)
	    {
	    	$this->db->select('*');
	    	$this->db->from('tb_category');
	    	$this->db->where('category_id',$category_id);

	    	$qryRes = $this->db->get();
	    	$result = $qryRes->row();

	    	return $result;
	    }

	    public function updateCategoryInfo()
	    {
	    	$data = array();
	    	$category_id = $this->input->post('category_id',TRUE);
	    	$data['category_name'] = $this->input->post('category_name',TRUE);
	    	$data['category_description'] = $this->input->post('category_description',TRUE);

	    	$this->db->where('category_id',$category_id);
	    	$this->db->update('tb_category');

	    }

	    public function deleteCategoryInfo($category_id)
	    {
	    	$this->db->where('category_id',$category_id);
	    	$this->db->delete('tb_category');
	    }

	    public function saveManufactureInfo()
	    {
	        /*$data = array();
	        $data['category_name'] = $this->input->post('category_name',true);
	        $data['category_description'] = $this->input->post('category_description',true);
	        $data['published_status'] = $this->input->post('published_status',true);*/

	        $data = array(
		            'manufacture_id' => NULL,
					'manufacture_name' => $this->input->post('manufacture_name'),
					'manufacture_description' => $this->input->post('manufacture_description'),
					'published_status' => $this->input->post('published_status')
		        );

	        $this->db->insert('tb_manufacture', $data);
	    }

	    public function allManufactureInfo()
	    {
	    	$this->db->select('*');
	    	$this->db->from('tb_manufacture');

	    	$qryRes = $this->db->get();
	    	$manufacture_info = $qryRes->result();

			return $manufacture_info;
	    }

	    public function unpublishedManufactureInfo($manufacture_id)
	    {
	    	$this->db->set('published_status',0);
	    	$this->db->where('manufacture_id',$manufacture_id);
	    	$this->db->update('tb_manufacture');
	    }

	    public function publishedManufactureInfo($manufacture_id)
	    {
	    	$this->db->set('published_status',1);
	    	$this->db->where('manufacture_id',$manufacture_id);
	    	$this->db->update('tb_manufacture');
	    }

	    public function deleteManufactureInfo($manufacture_id)
	    {
	    	$this->db->where('manufacture_id',$manufacture_id);
	    	$this->db->delete('tb_manufacture');
	    }
	}