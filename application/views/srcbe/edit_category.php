        <!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
				<li class="breadcrumb-item active">แก้ไขหมวดหมู่</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header text-center">แก้ไขหมวดหมู่</h1>
			<!-- end page-header -->

                        <!-- begin row -->
            <div class="row">
			    <!-- begin col-12 -->
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
                            <h4 class="panel-title">แก้ไขหมวดหมู่</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="<?=base_url('Updatecategory'); ?>">
                                <div class="form-group">
                                    <label for="category_name">ชื่อหมวดหมู่ <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="category_name" name="category_name" value="<?php echo $category_info->category_name; ?>" />
                                    <input type="hidden" name="category_id" value="<?php echo $category_info->category_id; ?>"
                                </div>
                                <div class="form-group">
                                    <label for="category_description">รายละเอียดหมวดหมู่ <span class="text-danger">*</span></label>
                                    <?php //echo form_error('description','<small class="text-danger">','</small>'); ?>
                                    <textarea class="ckeditor" id="editor1" name="category_description" rows="20"><?php echo $category_info->category_description; ?></textarea>
                                </div>

                                <button type="submit" class="btn btn-sm btn-primary m-r-5">Save Changes</button>
                                <button type="reset" class="btn btn-sm btn-warning m-r-5">Cancel</button>
                            </form>
                            <p><h5 class="text-success">
                            <?php
                                $message = $this->session->userdata('message');
                                if($message){
                                    echo $message;
                                    $this->session->unset_userdata('message');
                                }
                            ?>
                            </h5></p>
                        </div>
                        <!-- end panel-body -->
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->