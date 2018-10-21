		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="<?=base_url('Dashboard'); ?>">Dashboard</a></li>
				<li class="breadcrumb-item active"><a href="<?=base_url('accountingData'); ?>">ยอดช็อปปิ้ง</a></li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">ยอดช็อปปิ้ง <small>ข้อมูลฝ่าย บัญชี</small></h1>
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-10 -->
				<div class="col-lg-12">
					<!-- begin panel -->
					<div class="panel panel-inverse">
						<!-- begin panel-heading -->
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">รายงานข้อมูล Shopping</h4>
						</div>
						<!-- end panel-heading -->
						<!-- begin alert -->
						<div class="alert alert-warning fade show">
							  	<div class="row f-s-14">
									<button type="button" class="close" data-dismiss="alert">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
							<div class="note note-dark note-inverse">
							  <div class="note-icon"><i class="fa fa-sticky-note"></i></div>
							  <div class="note-content">
							  	<div class="row f-s-14">
									<div class="col-md-4" style="background: linear-gradient(to bottom, #ff9999 0%, #ff3300 100%)">
							    		<p style="color: #000000;font-size: 15px;"><strong>สีแดงกรุ๊ปโค๊ด = KB ไม่ปกติ</strong></p>
									</div>
									<div class="col-md-4" style="background: linear-gradient(to bottom, #ff9999 0%, #ff3300 100%)">
							    		<p style="color: #000000;font-size: 15px;"><strong>สีแดงเลขแถว = Comment จากบัญชี</strong></p>
							    	</div>
									<div class="col-md-4">
										<p style="color: #F0F;font-size: 15px;"><strong>สีม่วง = มีการแก้ไข</strong></p>
									</div>
							    </div>
							    <div class="row f-s-14">
									<div class="col-md-4">
							    		<p style="color: #FFCC66;font-size: 15px;"><strong>สีเหลือง = ยังไม่เข้าร้าน</strong></p>
									</div>
									<div class="col-md-4">
							    		<p style="color: #FFFFFF;font-size: 15px;"><strong>สีขาว = เข้าร้าน</strong></p>
							    	</div>
									<div class="col-md-4">
										<p style="color: #999966;font-size: 15px;"><strong>สีเขียวขี้ม้า = ไม่เข้าร้านเลย</strong></p>
									</div>
							    </div>
							  </div>
							</div>
						</div>
						<!-- end alert -->
						<!-- begin panel-body -->
						<div class="panel-body table-responsive">
							<table id="data-table-buttons" class="table table-bordered">
								<thead>
									<tr>
										<th class="text-nowrap"></th>
										<th class="text-nowrap">No.</th>
										<th class="text-nowrap">No. Group<hr style="border: solid 0.5px">ชื่อไกด์</th>
										<th class="text-nowrap">ชื่อเอเย่นต์<hr style="border: solid 0.5px">รายการทัวร์</th>
										<th class="text-nowrap">จำนวน<br/>(คน)</th>
										<th class="text-nowrap">รับ</th>
										<th class="text-nowrap">ส่ง</th>
										<th class="text-nowrap">จำนวน<br/>(คนเข้าร้าน)</th>
										<th class="text-nowrap">จิวเวอรี่</th>
										<th class="text-nowrap">กระเป๋า</th>
										<th class="text-nowrap">สวนงู</th>
										<th class="text-nowrap">ยางพารา</th>
										<th class="text-nowrap">รังนก</th>
										<th class="text-nowrap">ผ้าไหม</th>
										<th class="text-nowrap">วัดประชุม</th>
										<th class="text-nowrap">Option<br/>(ไม่คืน)</th>
										<th class="text-nowrap">Option<br/>(10%)</th>
										<th class="text-nowrap">Option<br/>(50%)</th>
										<th class="text-nowrap">เฉลี่ย</th>
										<th class="text-nowrap">เฉลี่ย<br/>ไม่รวมผ้าไหม</th>
										<th class="text-nowrap">เฉลี่ย<br/>รวมผ้าไหม</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($selectallaccdata as $v_selectallaccdata): ?>
									<tr class="odd gradeX"
										<?php
											if($v_selectallaccdata->re_group_edit_cancel_group=='10'){

											}else{

											}
										?>
									>
										<td class="with-btn">
											<a href="<?=base_url(); ?>AddAccountingData/<?=$v_selectallaccdata->re_group_id; ?>" class="btn btn-sm btn-success width-60 m-r-2">Add</a>
											<hr>
					                        <a href="#" class="btn btn-sm btn-warning width-60">อัพเดท</a>
					                    </td>
										<td class="text-center" style="background:
											<?php
												if($v_selectallaccdata->re_shopping_comment!=''){
													echo "linear-gradient(to bottom, #ff9999 0%, #ff3300 100%);";
												}
											?>
										">
											<strong><?=$v_selectallaccdata->re_shopping_id; ?></strong>
										</td>
										<td class="text-center" style="background:
											<?php
												if($v_selectallaccdata->re_group_kb!=''){
        											echo "linear-gradient(to bottom, #ff9999 0%, #ff3300 100%);";
        										}
											?>
										">
											<strong><?=$v_selectallaccdata->re_group_code.'<hr style="border: solid 0.5px">'.$v_selectallaccdata->re_group_nameguide_th; ?></strong>
										</td>
										<td class="text-center">
											<strong><span style="color: #F00;"><?=$v_selectallaccdata->re_group_nameagent.'</span>'.'<hr style="border: solida 0.5px">'.'<span style="color: #2B63C1">'.$v_selectallaccdata->re_group_program.'</span>'; ?></strong>
										</td>
										<td class="text-center" style="background-color:
											<?php
												if($v_selectallaccdata->re_group_final=='10'){
													echo "#FF9933";
												}else if($v_selectallaccdata->re_group_final=='20'){
													echo "#FFFFFF";
												}else if($v_selectallaccdata->re_group_final=='30'){
													echo "#9f79ef";
												}
											?>
										">
											<strong><?=$v_selectallaccdata->re_group_personqty; ?></strong>
										</td>
										<td class="text-center">
											<strong><?=substr($v_selectallaccdata->re_group_in_date,2).'<hr>'.$v_selectallaccdata->re_group_in_time; ?></strong>
										</td>
										<td class="text-center">
											<strong><?=substr($v_selectallaccdata->re_group_out_date,2).'<hr>'.$v_selectallaccdata->re_group_out_time; ?></strong>
										</td>
										<td class="text-center" style="background-color:
											<?php
												if($v_selectallaccdata->re_shopping_personqty=='' && $v_selectallaccdata->re_shopping_personqty_color=='0'){
													echo "#FFFFFF";
												}else if($v_selectallaccdata->re_shopping_personqty_color=='10'){
													echo "#FFFFFF";
												}else if($v_selectallaccdata->re_shopping_personqty_color=='20'){
													echo "#9f79ef";
												}
											?>
										">
											<strong><?=$v_selectallaccdata->re_shopping_personqty; ?></strong>
										</td>
										<td class="text-center" style="background-color:
											<?php
												if($v_selectallaccdata->re_group_p_t_c_f_con=='40'){
													echo "#FFCC66";
												}else if($v_selectallaccdata->re_shopping_jewelry=='' && $v_selectallaccdata->re_group_p_t_c_f_con!='40'){
													echo "#FFCC66";
												}else if($v_selectallaccdata->re_shopping_jewelry_color=='10'){
													echo "#FFCC66";
												}else if($v_selectallaccdata->re_shopping_jewelry_color=='20'){
													echo "#FFFFFF";
												}else if($v_selectallaccdata->re_shopping_jewelry_color=='30'){
													echo "#9f79ef";
												}else if($v_selectallaccdata->re_shopping_jewelry_color=='40'){
													echo "#999966";
												}
											?>
										">
											<strong><?=number_format(round($v_selectallaccdata->re_shopping_jewelry)); ?></strong>
										</td>
										<td class="text-center" style="background-color:
											<?php
												if($v_selectallaccdata->re_group_p_t_c_f_con=='40'){
													echo "#FFCC66";
												}else if($v_selectallaccdata->re_shopping_leather=='' && $v_selectallaccdata->re_group_p_t_c_f_con!='40'){
													echo "#FFCC66";
												}else if($v_selectallaccdata->re_shopping_leather_color=='10'){
													echo "#FFCC66";
												}else if($v_selectallaccdata->re_shopping_leather_color=='20'){
													echo "#FFFFFF";
												}else if($v_selectallaccdata->re_shopping_leather_color=='30'){
													echo "#9f79ef";
												}else if($v_selectallaccdata->re_shopping_leather_color=='40'){
													echo "#999966";
												}
											?>
										">
											<strong><?=number_format(round($v_selectallaccdata->re_shopping_leather)); ?></strong>
										</td>
										<td class="text-center" style="background-color:
											<?php
												if($v_selectallaccdata->re_group_p_t_c_f_con=='40'){
													echo "#FFCC66";
												}else if($v_selectallaccdata->re_shopping_snake_park=='' && $v_selectallaccdata->re_group_p_t_c_f_con!='40'){
													echo "#FFCC66";
												}else if($v_selectallaccdata->re_shopping_snake_park_color=='10'){
													echo "#FFCC66";
												}else if($v_selectallaccdata->re_shopping_snake_park_color=='20'){
													echo "#FFFFFF";
												}else if($v_selectallaccdata->re_shopping_snake_park_color=='30'){
													echo "#9f79ef";
												}else if($v_selectallaccdata->re_shopping_snake_park_color=='40'){
													echo "#999966";
												}
											?>
										">
											<strong><?=number_format(round($v_selectallaccdata->re_shopping_snake_park)); ?></strong>
										</td>
										<td class="text-center" style="background-color:
											<?php
												if($v_selectallaccdata->re_group_p_t_c_f_con=='40'){
													echo "#FFCC66";
												}else if($v_selectallaccdata->re_shopping_rubber=='' && $v_selectallaccdata->re_group_p_t_c_f_con!='40'){
													echo "#FFCC66";
												}else if($v_selectallaccdata->re_shopping_rubber_color=='10'){
													echo "#FFCC66";
												}else if($v_selectallaccdata->re_shopping_rubber_color=='20'){
													echo "#FFFFFF";
												}else if($v_selectallaccdata->re_shopping_rubber_color=='30'){
													echo "#9f79ef";
												}else if($v_selectallaccdata->re_shopping_rubber_color=='40'){
													echo "#999966";
												}
											?>
										">
											<strong><?=number_format(round($v_selectallaccdata->re_shopping_rubber)); ?></strong>
										</td>
										<td class="text-center" background-color:
			                              	<?php
			                                  	if($v_selectallaccdata->re_group_p_t_c_f_con=='40'){
			                                    	echo "#FFCC66";
			                                  	}else if($v_selectallaccdata->re_shopping_red88==''){
			                                    	echo "#FFCC66";
			                                  	}
			                              	?>
				                        ">
				                        <div class="panel-body" style="background-color:
				                            <?php
			                                    if(!empty($v_selectallaccdata->re_shopping_red88!='') && !empty($v_selectallaccdata->re_shopping_red88_color=='10')){
			                                        echo "#FFCC66";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_red88!='') && !empty($v_selectallaccdata->re_shopping_red88_color=='20')){
			                                        echo "#FFFFFF";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_red88!='') && !empty($v_selectallaccdata->re_shopping_red88_color=='30')){
			                                        echo "#9f79ef";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_red88!='') && !empty($v_selectallaccdata->re_shopping_red88_color=='40')){
			                                        echo "#999966";
			                                    }
				                            ?>
				                        ">
											<strong><?=number_format(round($v_selectallaccdata->re_shopping_red88)); ?></strong>
										</div>
										</td>
										<td class="text-center" style="background-color:
			                              	<?php
			                                  	if($v_selectallaccdata->re_group_p_t_c_f_con=='40'){
			                                    	echo "#FFCC66";
			                                  	}else if($v_selectallaccdata->re_shopping_silk==''){
			                                    	echo "#FFCC66";
			                                  	}
			                              	?>
				                        ">
										<div class="panel-body" style="background-color:
				                            <?php
			                                    if(!empty($v_selectallaccdata->re_shopping_silk!='') && !empty($v_selectallaccdata->re_shopping_silk_color=='10')){
			                                        echo "#FFCC66";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_silk!='') && !empty($v_selectallaccdata->re_shopping_silk_color=='20')){
			                                        echo "#FFFFFF";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_silk!='') && !empty($v_selectallaccdata->re_shopping_silk_color=='30')){
			                                        echo "#9f79ef";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_silk!='') && !empty($v_selectallaccdata->re_shopping_silk_color=='40')){
			                                        echo "#999966";
			                                    }
				                            ?>
				                        ">
				                        	<strong><?=number_format(round($v_selectallaccdata->re_shopping_silk)); ?></strong>
				                        </div>
										</td>
										<td class="text-center" style="background-color:
			                              	<?php
			                                  	if($v_selectallaccdata->re_group_p_t_c_f_con=='40'){
			                                    	echo "#FFCC66";
			                                  	}else if($v_selectallaccdata->re_shopping_watprachum==''){
			                                    	echo "#FFCC66";
			                                  	}
			                              	?>
				                        ">
										<div class="panel-body" style="background-color:
				                            <?php
			                                    if(!empty($v_selectallaccdata->re_shopping_watprachum!='') && !empty($v_selectallaccdata->re_shopping_watprachum_color=='10')){
			                                        echo "#FFCC66";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_watprachum!='') && !empty($v_selectallaccdata->re_shopping_watprachum_color=='20')){
			                                        echo "#FFFFFF";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_watprachum!='') && !empty($v_selectallaccdata->re_shopping_watprachum_color=='30')){
			                                        echo "#9f79ef";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_watprachum!='') && !empty($v_selectallaccdata->re_shopping_watprachum_color=='40')){
			                                        echo "#999966";
			                                    }
				                            ?>
				                        ">
				                        	<strong><?=number_format(round($v_selectallaccdata->re_shopping_watprachum)); ?></strong>
				                        </div>
										</td>
										<td class="text-center" style="background-color: #CCCCCC;
			                              	<?php
			                                  	if(!empty($v_selectallaccdata->re_shopping_option_percent=='0') && !empty($v_selectallaccdata->re_shopping_complete=='0')){
			                                    	echo "#CCCCCC";
			                                  	}
			                              	?>
				                        ">
				                        <div class="panel-body" style="background-color:
				                            <?php
			                                    if(!empty($v_selectallaccdata->re_shopping_complete=='0')){
			                                        echo "#CCCCCC";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_option_percent=='5') && !empty($v_selectallaccdata->re_shopping_complete=='30')){
			                                        echo "#66FF99";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_option_money!='')){
			                                        echo "#66FF99";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_option_money=='') && !empty($v_selectallaccdata->re_shopping_complete=='30')){
			                                        echo "#66FF99";
			                                    }
				                            ?>
				                        ">
				                        	<strong style="color: #000000">
				                        		<?php
				                        			if(!empty($v_selectallaccdata->re_shopping_option_percent=='5')){
				                        				echo number_format(round($v_selectallaccdata->re_shopping_option_money));
				                        			}else{
				                        				echo "-";
				                        			}
				                        		?>
				                        	</strong>
				                        </div>
				                        <hr style="border: solid 0.5px">
				                        <div class="panel-body" style="background-color:
				                            <?php
			                                    if(!empty($v_selectallaccdata->re_shopping_complete=='0')){
			                                        echo "#CCCCCC";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_option_percent=='5') && !empty($v_selectallaccdata->re_shopping_complete=='30')){
			                                        echo "#66FF99";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_option_money!='')){
			                                        echo "#66FF99";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_option_money=='') && !empty($v_selectallaccdata->re_shopping_complete=='30')){
			                                        echo "#66FF99";
			                                    }
				                            ?>
				                        ">
				                        	<strong style="color: #000000">
				                        		<?php
				                        			if(!empty($v_selectallaccdata->re_shopping_option_percent=='5')){
				                        				$percent5 = $v_selectallaccdata->re_shopping_option_money;
				                        				$re_group_personqty = $v_selectallaccdata->re_group_personqty;
				                        				$calc_percent5 = $percent5/$re_group_personqty;

				                        				echo number_format(round($calc_percent5));
				                        			}else{
				                        				echo "-";
				                        			}
				                        		?>
				                        	</strong>
				                        </div>
										</td>
										<td class="text-center" style="background-color: #CCCCCC;
			                              	<?php
			                                  	if(!empty($v_selectallaccdata->re_shopping_option_percent=='10') && !empty($v_selectallaccdata->re_shopping_complete=='10')){
			                                    	echo "#CCCCCC";
			                                  	}
			                              	?>
				                        ">
				                        <div class="panel-body" style="background-color:
				                            <?php
			                                    if(!empty($v_selectallaccdata->re_shopping_complete=='0')){
			                                        echo "#CCCCCC";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_option_percent=='10') && !empty($v_selectallaccdata->re_shopping_complete=='30')){
			                                        echo "#FF33CC";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_option_money!='')){
			                                        echo "#FF33CC";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_option_money=='') && !empty($v_selectallaccdata->re_shopping_complete=='30')){
			                                        echo "#FF33CC";
			                                    }
				                            ?>
				                        ">
				                        	<strong style="color: #000000">
				                        		<?php
				                        			if(!empty($v_selectallaccdata->re_shopping_option_percent=='10')){
				                        				echo number_format(round($v_selectallaccdata->re_shopping_option_money));
				                        			}else{
				                        				echo "-";
				                        			}
				                        		?>
				                        	</strong>
				                        </div>
				                        <hr style="border: solid 0.5px">
				                        <div class="panel-body" style="background-color:
				                            <?php
			                                    if(!empty($v_selectallaccdata->re_shopping_complete=='0')){
			                                        echo "#CCCCCC";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_option_percent=='10') && !empty($v_selectallaccdata->re_shopping_complete=='30')){
			                                        echo "#FF33CC";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_option_money!='')){
			                                        echo "#FF33CC";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_option_money=='') && !empty($v_selectallaccdata->re_shopping_complete=='30')){
			                                        echo "#FF33CC";
			                                    }
				                            ?>
				                        ">
				                        	<strong style="color: #000000">
				                        		<?php
				                        			if(!empty($v_selectallaccdata->re_shopping_option_percent=='10')){
				                        				$percent10 = $v_selectallaccdata->re_shopping_option_money;
				                        				$re_group_personqty = $v_selectallaccdata->re_group_personqty;
				                        				$calc_percent10 = $percent10/$re_group_personqty;

				                        				echo number_format(round($calc_percent10));
				                        			}else{
				                        				echo "-";
				                        			}
				                        		?>
				                        	</strong>
				                        </div>
										</td>
										<td class="text-center" style="background-color: #CCCCCC;
			                              	<?php
			                                  	if(!empty($v_selectallaccdata->re_shopping_option_percent=='50') && !empty($v_selectallaccdata->re_shopping_complete=='10')){
			                                    	echo "#CCCCCC";
			                                  	}
			                              	?>
				                        ">
				                        <div class="panel-body" style="background-color:
				                            <?php
			                                    if(!empty($v_selectallaccdata->re_shopping_complete=='0')){
			                                        echo "#CCCCCC";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_option_percent=='50') && !empty($v_selectallaccdata->re_shopping_complete=='30')){
			                                        echo "#FF99FF";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_option_money!='')){
			                                        echo "#FF99FF";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_option_money=='') && !empty($v_selectallaccdata->re_shopping_complete=='30')){
			                                        echo "#FF99FF";
			                                    }
				                            ?>
				                        ">
				                        	<strong style="color: #000000">
				                        		<?php
				                        			if(!empty($v_selectallaccdata->re_shopping_option_percent=='50')){
				                        				echo number_format(round($v_selectallaccdata->re_shopping_option_money));
				                        			}else{
				                        				echo "-";
				                        			}
				                        		?>
				                        	</strong>
				                        </div>
				                        <hr style="border: solid 0.5px">
				                        <div class="panel-body" style="background-color:
				                            <?php
			                                    if(!empty($v_selectallaccdata->re_shopping_complete=='0')){
			                                        echo "#CCCCCC";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_option_percent=='50') && !empty($v_selectallaccdata->re_shopping_complete=='30')){
			                                        echo "#FF33CC";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_option_money!='')){
			                                        echo "#FF33CC";
			                                    }else if(!empty($v_selectallaccdata->re_shopping_option_money=='') && !empty($v_selectallaccdata->re_shopping_complete=='30')){
			                                        echo "#FF33CC";
			                                    }
				                            ?>
				                        ">
				                        	<strong style="color: #000000">
				                        		<?php
				                        			if(!empty($v_selectallaccdata->re_shopping_option_percent=='50')){
				                        				$percent50 = $v_selectallaccdata->re_shopping_option_money;
				                        				$re_group_personqty = $v_selectallaccdata->re_group_personqty;
				                        				$calc_percent50 = $percent50/$re_group_personqty;

				                        				echo number_format(round($calc_percent50));
				                        			}else{
				                        				echo "-";
				                        			}
				                        		?>
				                        	</strong>
				                        </div>
										</td>
										<td class="text-center">
											<div class="panel-body" style="background-color: #FCF">
												<strong style="color: #000000">
												<?php
					                                $jewelry = $v_selectallaccdata->re_shopping_jewelry;
					                                $leather = $v_selectallaccdata->re_shopping_leather;
					                                $snakepark = $v_selectallaccdata->re_shopping_snake_park;
					                                $rubber = $v_selectallaccdata->re_shopping_rubber;
					                                $red88 = $v_selectallaccdata->re_shopping_red88;
					                                $silk = $v_selectallaccdata->re_shopping_silk;
					                                $watprachum = $v_selectallaccdata->re_shopping_watprachum;
					                                $personqty = $v_selectallaccdata->re_shopping_personqty;
					                                $allperson = $v_selectallaccdata->re_group_personqty;
					                                $gm = $v_selectallaccdata->re_shopping_gm;
					                              	if($gm=='' || $gm=='0'){
					                                	echo number_format(round($v_selectallaccdata->re_shopping_overall_1));
					                              	}else if($gm!='' || $gm>0){
					                                	echo number_format(round($v_selectallaccdata->re_shopping_overall_5gm));
					                              	}
					                            ?>
				                        		</strong>
				                        	</div>
				                        	<div class="panel-body">
				                        		<strong style="color: #000000">
												<?php
					                                $jewelry = $v_selectallaccdata->re_shopping_jewelry;
					                                $leather = $v_selectallaccdata->re_shopping_leather;
					                                $snakepark = $v_selectallaccdata->re_shopping_snake_park;
					                                $rubber = $v_selectallaccdata->re_shopping_rubber;
					                                $red88 = $v_selectallaccdata->re_shopping_red88;
					                                $silk = $v_selectallaccdata->re_shopping_silk;
					                                $watprachum = $v_selectallaccdata->re_shopping_watprachum;
					                                $personqty = $v_selectallaccdata->re_shopping_personqty;
					                                $allperson = $v_selectallaccdata->re_group_personqty;
					                                $gm = $v_selectallaccdata->re_shopping_gm;
					                              	if($gm=='' || $gm=='0'){
					                                	echo number_format(round($v_selectallaccdata->re_shopping_overall_2));
					                              	}else if($gm!=0 || $gm>0){
					                                	echo number_format(round($v_selectallaccdata->re_shopping_overall_6gm));
					                              	}
					                            ?>
					                        	</strong>
				                        	</div>
										</td>
										<td class="text-center">
											<div class="panel-body" style="color:
			                                    <?php
			                                      	if($v_selectallaccdata->re_shopping_overall_3<=18000){
			                                        	echo "#1703af";
			                                      	}else{
			                                        	echo "#FFFFFF";
			                                      	}
			                                    ?>;
						                        background-color:
			                                    <?php
			                                      	if($v_selectallaccdata->re_shopping_overall_3<=18000){
			                                      		echo "#33CC66";
			                                      	}else{
			                                        	echo "#039";
			                                      	}
			                                    ?>
						                    ">
						                    <strong style="color: #000000">
											<?php
				                                $jewelry = $v_selectallaccdata->re_shopping_jewelry;
				                                $leather = $v_selectallaccdata->re_shopping_leather;
				                                $snakepark = $v_selectallaccdata->re_shopping_snake_park;
				                                $rubber = $v_selectallaccdata->re_shopping_rubber;
				                                $red88 = $v_selectallaccdata->re_shopping_red88;
				                                $silk = $v_selectallaccdata->re_shopping_silk;
				                                $watprachum = $v_selectallaccdata->re_shopping_watprachum;
				                                $personqty = $v_selectallaccdata->re_shopping_personqty;
				                                $allperson = $v_selectallaccdata->re_group_personqty;
				                                $gm = $v_selectallaccdata->re_shopping_gm;
				                              	if($gm=='' || $gm==0){
				                                	if($jewelry!=0 || $leather!=0 || $snakepark!=0 || $rubber!=0 || $red88!=0 || $personqty!=0){
				                                		echo number_format(round($v_selectallaccdata->re_shopping_overall_3));
				                                	}else{
				                                		echo "0";
				                                	}
				                                }else if($gm!='' || $gm>0){
				                                	echo number_format(round($v_selectallaccdata->re_shopping_overall_7gm));
				                                }
				                            ?>
				                        	</strong>
				                        	</div>
										</td>
										<td class="text-center">
											<div class="panel-body" style="background-color:
			                                    <?php
			                                      	if($v_selectallaccdata->re_shopping_overall_4<=18000){
			                                      		echo "#FF0000";
			                                      	}else{
			                                        	echo "#039";
			                                      	}
			                                    ?>
						                    ">
						                    <strong style="color: #000000">
											<?php
				                                $jewelry = $v_selectallaccdata->re_shopping_jewelry;
				                                $leather = $v_selectallaccdata->re_shopping_leather;
				                                $snakepark = $v_selectallaccdata->re_shopping_snake_park;
				                                $rubber = $v_selectallaccdata->re_shopping_rubber;
				                                $red88 = $v_selectallaccdata->re_shopping_red88;
				                                $silk = $v_selectallaccdata->re_shopping_silk;
				                                $watprachum = $v_selectallaccdata->re_shopping_watprachum;
				                                $personqty = $v_selectallaccdata->re_shopping_personqty;
				                                $allperson = $v_selectallaccdata->re_group_personqty;
				                                $gm = $v_selectallaccdata->re_shopping_gm;
				                              	if($gm=='' || $gm==0){
				                                	if($jewelry!=0 || $leather!=0 || $snakepark!=0 || $rubber!=0 || $red88!=0 || $personqty!=0){
				                                		echo number_format(round($v_selectallaccdata->re_shopping_overall_4));
				                                	}else{
				                                		echo "0";
				                                	}
				                                }else if($gm!='' || $gm>0){
				                                	echo number_format(round($v_selectallaccdata->re_shopping_overall_8gm));
				                                }
				                            ?>
				                            </strong>
				                        	</div>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
						<!-- end panel-body -->
					</div>
					<!-- end panel -->
				</div>
				<!-- end col-10 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->