        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-6"><i class="icon-phone"></i><strong>(+66)2-000-6649</strong></div>
                    <div class="col-6">
                        <ul id="top_links">
                            <li><a href="#sign-in-dialog" id="access_link">Sign in</a></li>
                            <li><a href="<?=base_url('Checkout'); ?>">Checkout</a></li>
                            <li><a href="#sign-in-dialog"><i class="icon_cart"></i> Your Cart</a></li>
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->

        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div id="logo_home">
                    	<h1><a href="<?=base_url('Home'); ?>" title="City tours travel template">City Tours travel template</a></h1>
                    </div>
                </div>
                <nav class="col-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="<?=base_url(); ?>assets_fe/img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul>
                            <li>
                                <a href="<?=base_url('Home'); ?>" class="show-submenu">หน้าหลัก </a>
                            </li>
                                <?php
                                    $category_info = $this->Superadmin_model->selectAllPublishedCategory();
                                    foreach($category_info as $v_category):
                                ?>
                            <li>
                                <a href="#" class="show-submenu"><?=$v_category->category_name; ?> </a>
                            </li>
                                <?php endforeach; ?>
                        </ul>
                    </div><!-- End main-menu -->
                    <ul id="top_tools">
                        <li>
                            <a href="javascript:void(0);" class="search-overlay-menu-btn"><i class="icon_search"></i></a>
                        </li>
                        <li>
                            <div class="dropdown dropdown-cart">
                                <a href="#" data-toggle="dropdown" class="cart_bt"><i class="icon_bag_alt"></i><strong>3</strong></a>
                                <ul class="dropdown-menu" id="cart_items">
                                    <li>
                                        <div class="image"><img src="<?=base_url(); ?>assets_fe/img/thumb_cart_1.jpg" alt="image"></div>
                                        <strong><a href="#">Louvre museum</a>1x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div class="image"><img src="<?=base_url(); ?>assets_fe/img/thumb_cart_2.jpg" alt="image"></div>
                                        <strong><a href="#">Versailles tour</a>2x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div class="image"><img src="<?=base_url(); ?>assets_fe/img/thumb_cart_3.jpg" alt="image"></div>
                                        <strong><a href="#">Versailles tour</a>1x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div>Total: <span>$120.00</span></div>
                                        <a href="cart.html" class="button_drop">Go to cart</a>
                                        <a href="payment.html" class="button_drop outline">Check out</a>
                                    </li>
                                </ul>
                            </div><!-- End dropdown-cart-->
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!-- container -->