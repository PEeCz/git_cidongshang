		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover with-shadow"></div>
							<div class="image">
								<img src="<?=base_url(); ?>assets_be/img/user/user-13.jpg" alt="" />
							</div>
							<div class="info">
								<b class="caret pull-right"></b>
								Sean Ngu
								<small>Front end developer</small>
							</div>
						</a>
					</li>
					<li>
						<ul class="nav nav-profile">
							<li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
							<li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
							<li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
						</ul>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="active">
						<a href="<?=base_url('Dashboard'); ?>">
							<i class="fa fa-th-large"></i>
							<span>หน้าหลัก</span>
						</a>
					</li>
					<li>
						<a href="<?=base_url('operationData'); ?>">
							<i class="fab fa-simplybuilt"></i>
							<span>บอร์ดกรุ๊ป</span>
						</a>
					</li>
					<li>
						<a href="<?=base_url('accountingData'); ?>">
							<i class="fab fa-simplybuilt"></i>
							<span>ยอดช็อปปิ้ง</span>
						</a>
					</li>
					<li>
						<a href="<?=base_url('AddCategory'); ?>">
							<i class="fab fa-simplybuilt"></i>
							<span>เพิ่มหมวดหมู่</span>
						</a>
					</li>
					<li>
						<a href="<?=base_url('AddManufacture'); ?>">
							<i class="fab fa-simplybuilt"></i>
							<span>เพิ่มสินค้า</span>
						</a>
					</li>
					
					<!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
					<!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>