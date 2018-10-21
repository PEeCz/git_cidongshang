<?php
	class Backend_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
			$this->db2 = $this->load->database('dongshang', TRUE);
		}
		public function selectAllOpData()
	    {
	    	$minvalue = 'DS 180301 FITA (ART)';
	    	$maxvalue = 'DS 191231 A';

	    	return $opdata = $this->db2->select('*')
						    			->from('report_group')
						    			->where("re_group_code BETWEEN '$minvalue' AND '$maxvalue'")
						    			->order_by('re_group_code','asc')
						    			->get()
						    			->result();
	    	/*echo "<pre>";
	    	print_r($opdata);
	    	exit();*/

	    }

	    public function saveAddOperationData()
	    {
	    	foreach($this->input->post('final') as $final){
	    		$final;
	    	}

	    	foreach($this->input->post('normal_noshop') as $normal_noshop){
	    		$normal_noshop;
	    	}

	    	foreach($this->input->post('p_t_c_f_con') as $p_t_c_f_con){
	    		$p_t_c_f_con;
	    	}
	    	$data = array(
	    				're_group_code' => $this->input->post('re_group_code'),
	    				're_group_agent' => $this->input->post('re_group_agent'),
	    				're_group_personqty' => $this->input->post('re_group_personqty'),
	    				're_group_leadertour' => $this->input->post('re_group_leadertour'),
	    				're_group_final'=>$final,
	    				're_group_normal_noshop' => $normal_noshop,
	    				're_group_nameagent' => $this->input->post('re_group_nameagent'),
	    				're_group_in_date' => $this->input->post('re_group_in_date'),
	    				're_group_in_time' => $this->input->post('re_group_in_time'),
	    				're_group_flight_in' => $this->input->post('re_group_flight_in'),
	    				're_group_out_date' => $this->input->post('re_group_out_date'),
	    				're_group_out_time' => $this->input->post('re_group_out_time'),
	    				're_group_flight_out' => $this->input->post('re_group_flight_out'),
	    				're_group_program' => $this->input->post('re_group_program'),
	    				're_group_description' => $this->input->post('re_group_description'),
	    				're_group_nameguide_th' => $this->input->post('re_group_nameguide_th'),
	    				're_group_nameguide_cn' => $this->input->post('re_group_nameguide_cn'),
	    				're_group_p_t_c_f_con' => $p_t_c_f_con,
	    				're_group_kb' => $this->input->post('re_group_kb'),
	    				're_group_hotel1' => $this->input->post('re_group_hotel1'),
	    				're_group_hotel2' => $this->input->post('re_group_hotel2'),
	    				're_group_hotel3' => $this->input->post('re_group_hotel3'),
	    				're_group_hotel4' => $this->input->post('re_group_hotel4')
	    				);
	    	$this->db2->insert('report_group',$data);

	    }

	    public function selectAllAccountingData()
	    {
	    	$minvalue = 'DS 171223 A(BT)';
	    	$maxvalue = 'DS 191231 A';

	    	$this->db2->select('
								report_group.re_group_id,
								report_group.re_group_code,
								report_group.re_group_nameagent,
                        		report_group.re_group_personqty,
                        		report_group.re_group_in_date,
                        		report_group.re_group_in_time,
                        		report_group.re_group_out_date,
                        		report_group.re_group_out_time,
                        		report_group.re_group_edit_cancel_group,
                        		report_group.re_group_nameguide_th,
                        		report_group.re_group_program,
                        		report_group.re_group_final,
                        		report_group.re_group_kb,
                        		report_group.re_group_p_t_c_f_con,
                        		report_shopping.re_shopping_id,
                        		report_shopping.re_shopping_option_money,
                                report_shopping.re_shopping_complete,
                                report_shopping.re_shopping_option_percent,
                                report_shopping.re_shopping_personqty,
                                report_shopping.re_shopping_personqty_color,
                                report_shopping.re_shopping_jewelry,
                                report_shopping.re_shopping_jewelry_color,
                                report_shopping.re_shopping_leather,
                                report_shopping.re_shopping_leather_color,
                                report_shopping.re_shopping_snake_park,
                                report_shopping.re_shopping_snake_park_color,
                                report_shopping.re_shopping_rubber,
                                report_shopping.re_shopping_rubber_color,
                                report_shopping.re_shopping_gm,
                                report_shopping.re_shopping_gm_color,
                                report_shopping.re_shopping_red88,
                                report_shopping.re_shopping_red88_color,
                                report_shopping.re_shopping_silk,
                                report_shopping.re_shopping_silk_color,
                                report_shopping.re_shopping_watprachum,
                                report_shopping.re_shopping_watprachum_color,
                                report_shopping.re_shopping_overall_1,
                                report_shopping.re_shopping_overall_2,
                                report_shopping.re_shopping_overall_3,
                                report_shopping.re_shopping_overall_4,
                                report_shopping.re_shopping_comment,
                                report_shopping.re_shopping_overall_5gm,
                                report_shopping.re_shopping_overall_6gm,
                                report_shopping.re_shopping_overall_7gm,
                                report_shopping.re_shopping_overall_8gm');
	    	$this->db2->from('report_group');
	    	$this->db2->join('report_shopping','report_shopping.re_group_id=report_group.re_group_id','left outer');
	    	$this->db2->where("report_group.re_group_id AND report_group.re_group_code BETWEEN '$minvalue' AND 'maxvalue'");
	    	$this->db2->order_by('report_group.re_group_code','desc');
	    	return $accdata = $this->db2->get()->result();
            /*echo "<pre>";
            print_r($accdata);
            exit();*/
	    }
	}
?>