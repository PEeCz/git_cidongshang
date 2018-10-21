<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Dong Shang | Admin</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?=base_url(); ?>assets_be/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?=base_url(); ?>assets_be/plugins/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url(); ?>assets_be/plugins/font-awesome/5.3/css/all.min.css" rel="stylesheet" />
	<link href="<?=base_url(); ?>assets_be/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="<?=base_url(); ?>assets_be/css/default/style.css" rel="stylesheet" />
	<link href="<?=base_url(); ?>assets_be/css/default/style-responsive.min.css" rel="stylesheet" />
	<link href="<?=base_url(); ?>assets_be/css/default/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?=base_url(); ?>assets_be/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
	<link href="<?=base_url(); ?>assets_be/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
	<link href="<?=base_url(); ?>assets_be/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->

	<!-- ================== BEGIN Icon Line STYLE ================== -->
	<link href="<?=base_url(); ?>assets_be/plugins/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" />
	<!-- ================== END Icon Line STYLE ================== -->


	<!-- ================== BEGIN DataTable STYLE ================== -->
	<link href="<?=base_url(); ?>assets_be/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url(); ?>assets_be/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url(); ?>assets_be/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END DataTable STYLE ================== -->

	<!-- ================== BEGIN Time Picker STYLE ================== -->
	<link href="<?=base_url(); ?>assets_be/dist/bootstrap-clockpicker.min.css" rel="stylesheet" />
	<!-- ================== END Time Picker STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url(); ?>assets_be/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<?php echo $header; ?>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<?php echo $sidebar; ?>
		<!-- end #sidebar -->
		
		<!-- begin #content1 -->
		<?php echo $content1; ?>
		<!-- end #content1 -->

		<!-- begin #content2 -->
		<?php
			if(isset($content2)){
				echo $content2;
			}
		?>
		<!-- end #content2 -->
		
		<!-- begin theme-panel -->
		<div class="theme-panel theme-panel-lg">
			<a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
			<div class="theme-panel-content">
				<h5 class="m-t-0">Color Theme</h5>
				<ul class="theme-list clearfix">
					<li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="../assets/css/default/theme/red.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-pink" data-theme="pink" data-theme-file="../assets/css/default/theme/pink.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Pink">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="../assets/css/default/theme/orange.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-yellow" data-theme="yellow" data-theme-file="../assets/css/default/theme/yellow.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Yellow">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-lime" data-theme="lime" data-theme-file="../assets/css/default/theme/lime.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Lime">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-green" data-theme="green" data-theme-file="../assets/css/default/theme/green.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Green">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-teal" data-theme="default" data-theme-file="../assets/css/default/theme/default.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-aqua" data-theme="aqua" data-theme-file="../assets/css/default/theme/aqua.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Aqua">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="../assets/css/default/theme/blue.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="../assets/css/default/theme/purple.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-indigo" data-theme="indigo" data-theme-file="../assets/css/default/theme/indigo.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Indigo">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="../assets/css/default/theme/black.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
				</ul>
				<div class="divider"></div>
				<div class="row m-t-10">
					<div class="col-md-6 control-label text-inverse f-w-600">Header Styling</div>
					<div class="col-md-6">
						<select name="header-styling" class="form-control form-control-sm">
							<option value="1">default</option>
							<option value="2">inverse</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-6 control-label text-inverse f-w-600">Header</div>
					<div class="col-md-6">
						<select name="header-fixed" class="form-control form-control-sm">
							<option value="1">fixed</option>
							<option value="2">default</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-6 control-label text-inverse f-w-600">Sidebar Styling</div>
					<div class="col-md-6">
						<select name="sidebar-styling" class="form-control form-control-sm">
							<option value="1">default</option>
							<option value="2">grid</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-6 control-label text-inverse f-w-600">Sidebar</div>
					<div class="col-md-6">
						<select name="sidebar-fixed" class="form-control form-control-sm">
							<option value="1">fixed</option>
							<option value="2">default</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-6 control-label text-inverse f-w-600">Sidebar Gradient</div>
					<div class="col-md-6">
						<select name="content-gradient" class="form-control form-control-sm">
							<option value="1">disabled</option>
							<option value="2">enabled</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-6 control-label text-inverse f-w-600">Content Styling</div>
					<div class="col-md-6">
						<select name="content-styling" class="form-control form-control-sm">
							<option value="1">default</option>
							<option value="2">black</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-6 control-label text-inverse f-w-600">Direction</div>
					<div class="col-md-6">
						<select name="direction" class="form-control form-control-sm">
							<option value="1">LTR</option>
							<option value="2">RTL</option>
						</select>
					</div>
				</div>
				<div class="divider"></div>
				<h5>THEME VERSION</h5>
				<div class="theme-version">
					<a href="../template_html/index_v2.html" class="active">
						<span style="background-image: url(../assets/img/theme/default.jpg);"></span>
					</a>
					<a href="../template_transparent/index_v2.html">
						<span style="background-image: url(../assets/img/theme/transparent.jpg);"></span>
					</a>
				</div>
				<div class="theme-version">
					<a href="../template_apple/index_v2.html">
						<span style="background-image: url(../assets/img/theme/apple.jpg);"></span>
					</a>
					<a href="../template_material/index_v2.html">
						<span style="background-image: url(../assets/img/theme/material.jpg);"></span>
					</a>
				</div>
				<div class="divider"></div>
				<div class="row m-t-10">
					<div class="col-md-12">
						<a href="javascript:;" class="btn btn-inverse btn-block btn-rounded" data-click="reset-local-storage"><b>Reset Local Storage</b></a>
					</div>
				</div>
			</div>
		</div>
		<!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url(); ?>assets_be/plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/js-cookie/js.cookie.js"></script>
	<script src="<?=base_url(); ?>assets_be/js/theme/default.min.js"></script>
	<script src="<?=base_url(); ?>assets_be/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?=base_url(); ?>assets_be/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/flot/jquery.flot.min.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/flot/jquery.flot.time.min.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="<?=base_url(); ?>assets_be/js/demo/dashboard.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<!-- ================== BEGIN DataTable JS ================== -->
	<script src="<?=base_url(); ?>assets_be/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/DataTables/extensions/Buttons/js/jszip.min.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
	<script src="<?=base_url(); ?>assets_be/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?=base_url(); ?>assets_be/js/demo/table-manage-buttons.demo.min.js"></script>
	<!-- ================== END DataTable JS ================== -->

	<!-- ================== BEGIN Time Picker JS ================== -->
	<script src="<?=base_url(); ?>assets_be/dist/bootstrap-clockpicker.min.js"></script>
	<!-- ================== END Time Picker JS ================== -->

	<!-- ================== BEGIN CKEditorr JS ================== -->
	<script src="<?php echo base_url(); ?>assets_be/plugins/ckeditor/ckeditor.js"></script>
	<!-- ================== END CKEditor JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
			TableManageButtons.init();
		});
	</script>
	<script type="text/javascript">
	    $('.clockpicker1').clockpicker();
	    $('.clockpicker2').clockpicker();
	</script>
</body>
</html>
