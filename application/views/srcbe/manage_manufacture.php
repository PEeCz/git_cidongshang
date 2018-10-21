<script type="text/javascript">
	function checkDelete()
	{
		var chk = confirm("คุณต้องลบหรือไม่");
		if(chk){
			return true;
		}else{
			return false;
		}
	}
</script>
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
				<li class="breadcrumb-item active"><a href="javascript:;">Add Manufacture</a></li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">ตารางสินค้า</h1>
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
							<h4 class="panel-title">DataTable Manufacture</h4>
						</div>
						<!-- end panel-heading -->
						<!-- begin alert -->
						<div class="alert alert-warning fade show">
							<button type="button" class="close" data-dismiss="alert">
							<span aria-hidden="true">&times;</span>
							</button>
							The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
						</div>
						<!-- end alert -->
						<!-- begin panel-body -->
						<div class="panel-body">
							<table id="data-table-buttons" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th class="text-nowrap">#</th>
										<th class="text-nowrap">ชื่อสินค้า</th>
										<th class="text-nowrap">Status</th>
										<th class="text-nowrap">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($all_manufacture_info as $v_manufacture): ?>
									<tr class="odd gradeX">
										<td><?php echo $v_manufacture->manufacture_id; ?></td>
										<td><?php echo $v_manufacture->manufacture_name; ?></td>
										<td class="text-center">
											<?php if($v_manufacture->published_status==1){ ?>
												<span class="label label-green">Active</span>
											<?php }else{ ?>
												<span class="label label-warning">Inactive</span>
											<?php } ?>
										</td>
										<td class="text-center">
											<?php if($v_manufacture->published_status==1){ ?>
											<a class="btn btn-xs btn-green" href="<?=base_url(); ?>unpublishedManufacture/<?=$v_manufacture->manufacture_id; ?>">
												<i class="fas fa-md fa-thumbs-up"></i>
											</a>
											<?php }else{ ?>
											<a class="btn btn-xs btn-warning" href="<?=base_url(); ?>publishedManufacture/<?=$v_manufacture->manufacture_id; ?>">
												<i class="fas fa-md fa-thumbs-down"></i>
											</a>
											<?php } ?>
											<a class="btn btn-xs btn-warning" href="<?=base_url(); ?>editManufacture/<?=$v_manufacture->manufacture_id; ?>">
												<i class="icon-note"></i>
											</a>
											<a class="btn btn-xs btn-danger" href="<?=base_url(); ?>deleteManufacture/<?=$v_manufacture->manufacture_id; ?>" onclick="return checkDelete();">
												<i class="fas fa-md fa-trash-alt"></i>
											</a>
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