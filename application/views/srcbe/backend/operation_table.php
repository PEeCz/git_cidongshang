		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="<?=base_url('Dashboard'); ?>">Dashboard</a></li>
				<li class="breadcrumb-item active"><a href="<?=base_url('operationData'); ?>">บอร์ดกรุ๊ป</a></li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">บอร์ดกรุ๊ป <small>ข้อมูลฝ่าย OP</small></h1>
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
							<h4 class="panel-title">รายงานข้อมูล Group</h4>
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
									<div class="col-md-3">
							    		<p style="color: #2dd03f;font-size: 15px;"><strong>สีเขียว = Confirm</strong></p>
									</div>
									<div class="col-md-3">
							    		<p style="color: #ffb3e5;font-size: 15px;"><strong>สีชมพูอ่อน = FIT</strong></p>
							    	</div>
									<div class="col-md-3">
										<p style="color: #9F79ED;font-size: 15px;"><strong>สีม่วง = มีการแก้ไข</strong></p>
									</div>
									<div class="col-md-3">
										<a href="<?=base_url('AddOperationData'); ?>" class="btn btn-block btn-success">เพิ่มข้อมูลกรุ๊ป</a>
									</div>
							    </div>
							    <div class="row f-s-14">
									<div class="col-md-3">
							    		<p style="color: #f5ca0a;font-size: 15px;"><strong>สีเหลืองอ่อน = Call</strong></p>
									</div>
									<div class="col-md-3">
							    		<p style="color: #FFFFFF;font-size: 15px;"><strong>สีขาว = Plan / No Final</strong></p>
							    	</div>
									<div class="col-md-3">
										<p style="color: #FF9933;font-size: 15px;"><strong>สีส้ม = Final</strong></p>
									</div>
									<div class="col-md-3">
										<a href="#" class="btn btn-block btn-info">ดูข้อมูลกรุ๊ปเก่า</a>
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
										<th class="text-nowrap">No.</th>
										<th class="text-nowrap">No. Group</th>
										<th class="text-nowrap">ชื่อไกด์</th>
										<th class="text-nowrap">ชื่อหัวหน้าทัวร์</th>
										<th class="text-nowrap">ชื่อเอเย่น</th>
										<th class="text-nowrap">ชื่อรายการ</th>
										<th class="text-nowrap">จำนวน(คน)</th>
										<th class="text-nowrap">รับ</th>
										<th class="text-nowrap">ส่ง</th>
										<th class="text-nowrap">โรงแรม 1</th>
										<th class="text-nowrap">โรงแรม 2</th>
										<th class="text-nowrap">โรงแรม 3</th>
										<th class="text-nowrap">โรงแรม 4</th>
										<th class="text-nowrap">รายละเอียด</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($selectallopdata as $v_selectallopdata): ?>
									<tr class="odd gradeX" style="background-color:
							          <?php
							            if($v_selectallopdata->re_group_edit_cancel_group=='10'){
							              echo "#8c8a8a";
							            }elseif($v_selectallopdata->re_group_p_t_c_f_con=='40' && $v_selectallopdata->re_group_p_t_c_f_con!='10'){
							              echo "#ffb3e5";
							            }
							          ?>
							        ">
										<td class="text-center"><strong><?=$v_selectallopdata->re_group_id; ?></strong></td>
										<td class="text-center" style="background :
											<?php 
												if($v_selectallopdata->re_group_edit_cancel_group=='10'){
													echo "#8c8a8a";
												}else if($v_selectallopdata->re_group_p_t_c_f_con=='40' && !empty($v_selectallopdata->re_group_kb)!=''){
													echo "linear-gradient(to bottom, #ff9999 0%, #ff3300 100%)";
												}else if(!empty($v_selectallopdata->re_group_kb)!=''){
													echo "linear-gradient(to bottom, #ff9999 0%, #ff3300 100%)";
												}
											?>
										">
											<strong><?=$v_selectallopdata->re_group_code; ?></strong>
										</td>
										<td class="text-center" style="background-color:
											<?php
												if($v_selectallopdata->re_group_edit_cancel_group=='10'){
													echo "#8c8a8a;";
												}elseif($v_selectallopdata->re_group_p_t_c_f_con=='10'){
													echo "#FFFFF;";
												}elseif($v_selectallopdata->re_group_p_t_c_f_con=='20'){
													echo "";
												}elseif($v_selectallopdata->re_group_p_t_c_f_con=='30'){
													echo "#f5ca0a;";
												}elseif($v_selectallopdata->re_group_p_t_c_f_con=='40'){
													echo "#ffb3e5;";
												}elseif($v_selectallopdata->re_group_p_t_c_f_con=='50'){
													echo "#2dd03f;";
												}
											?>
										">
											<strong><?=$v_selectallopdata->re_group_nameguide_th; ?></strong>
										</td>
										<td class="text-center"><strong><?=$v_selectallopdata->re_group_leadertour; ?></strong></td>
										<td class="text-center"><strong><?=$v_selectallopdata->re_group_nameagent; ?></strong></td>
										<td class="text-center"><strong><?=$v_selectallopdata->re_group_program; ?></strong></td>
										<td class="text-center" style="background-color:
											<?php
												if($v_selectallopdata->re_group_edit_cancel_group=='10'){
													echo "#8c8a8a;";
												}elseif($v_selectallopdata->re_group_final=='10'){
													echo "#FF9933;";
												}elseif($v_selectallopdata->re_group_final=='20'){
													echo "#FFFFFF;";
												}elseif($v_selectallopdata->re_group_final=='30'){
													echo "#9f79ef;";
												}
											?>
										">
											<strong><?=$v_selectallopdata->re_group_personqty; ?></strong>
										</td>
										<td class="text-center"><strong><?=substr($v_selectallopdata->re_group_in_date,2).'<BR/>'.$v_selectallopdata->re_group_in_time.'<BR/>'.$v_selectallopdata->re_group_flight_in; ?></strong></td>
										<td class="text-center"><strong><?=substr($v_selectallopdata->re_group_out_date,2).'<BR/>'.$v_selectallopdata->re_group_out_time.'<BR/>'.$v_selectallopdata->re_group_flight_out; ?></strong></td>
										<td class="text-center"><strong><?=$v_selectallopdata->re_group_hotel1; ?></strong></td>
										<td class="text-center"><strong><?=$v_selectallopdata->re_group_hotel2; ?></strong></td>
										<td class="text-center"><strong><?=$v_selectallopdata->re_group_hotel3; ?></strong></td>
										<td class="text-center"><strong><?=$v_selectallopdata->re_group_hotel4; ?></strong></td>
										<td class="text-center"></td>
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