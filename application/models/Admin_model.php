<?php

	class Admin_model extends CI_Model
	{
		public function chkAdminLoginInfo($email,$password)
		{
			$this->db->select('*');
			$this->db->from('tb_admin');
			$this->db->where('admin_email',$email);
			$this->db->where('admin_password',md5($password));
			$qryRes = $this->db->get();
			$res = $qryRes->row();

			return $res;
		}
	}