<div class="noo-header row-fluid">
    <!-- top header -->
    <div class="top-header">
        <div class="top-header-inner">
            <ul class="social-top">
                <li><a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#" title="RSS" target="_blank"><i class="fa fa-rss"></i></a></li>
            </ul>

            <div class="top-header-content">
                <?php if($this->session->userdata('username')== null){ ?>
                <div class="emailto content-item">
                    <a href="mailto:info@citilights.com"><i class="fa fa-envelope-o"></i>&nbsp;Email:info@ampia.com</a>
                </div>
                <div class="register content-item">
                    <a href="<?php echo base_url('c_auth') ?>"><i class="fa fa-key"></i>&nbsp;Register</a>
                </div>
                <div class="login content-item">
                    <a href="<?php echo base_url('c_auth') ?>"><i class="fa fa-sign-in"></i>&nbsp;Login</a>
                </div>
                <div class="header-search">
                    <label for="input-header-search"><i class="fa fa-search"></i></label>
                    <input type="text" id="input-header-search" placeholder="Cari">
                </div>
                
                <?php } else { ?>
                
                <div class="register content-item">
                    <a href="<?php echo base_url('c_profile') ?>"><i class="fa fa-user"></i>&nbsp;Profil</a>
                </div>
                <div class="logout content-item">
                    <a href="<?php echo base_url();?>c_auth/logout"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- end top header -->

    <!-- main navigation wrap -->
    <div class="main-nav-wrap container">

        <!-- start main navigation -->
        <div class="main-navigation">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar navbar-nav navbar-static-top">
                    <div class="container">
                        <div class="navbar-header col-md-20">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <div class="logo">
                                <div class="logo-image">
                                    <a href="<?php echo base_url('/') ?>" title="amapia.com"></a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-collapse collapse col-md-80">
                            <ul class="nav navbar-nav">
                                <li><a href="#">Home</a></li>
                                <li class="dropdown menu-large">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Product Listing </a>
                                    <ul class="dropdown-menu megamenu row">
                                        <li>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="dropdown-header-2">Judul</div>
                                                <a href="#">
                                                    <img class="img-responsive" src="http://placehold.it/150x120">
                                                </a>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="dropdown-header-2">Judul</div>
                                                <a href="#">
                                                    <img class="img-responsive" src="http://placehold.it/150x120">
                                                </a>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="dropdown-header-2">Judul</div>
                                                <a href="#">
                                                    <img class="img-responsive" src="http://placehold.it/150x120">
                                                </a>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="dropdown-header-2">Judul</div>
                                                <a href="#">
                                                    <img class="img-responsive" src="http://placehold.it/150x120">
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown menu-large">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories </a>             
                                    <ul class="dropdown-menu megamenu row">
                                        <li class="col-sm-3">
                                            <ul>
                                                <li class="dropdown-header">Glyphicons</li>
                                                <li><a href="#">Available glyphs</a></li>
                                                <li class="disabled"><a href="#">How to use</a></li>
                                                <li><a href="#">Examples</a></li>
                                                <li class="divider"></li>
                                                <li class="dropdown-header">Dropdowns</li>
                                                <li><a href="#">Example</a></li>
                                                <li><a href="#">Aligninment options</a></li>
                                                <li><a href="#">Headers</a></li>
                                                <li><a href="#">Disabled menu items</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-3">
                                            <ul>
                                                <li class="dropdown-header">Button groups</li>
                                                <li><a href="#">Basic example</a></li>
                                                <li><a href="#">Button toolbar</a></li>
                                                <li><a href="#">Sizing</a></li>
                                                <li><a href="#">Nesting</a></li>
                                                <li><a href="#">Vertical variation</a></li>
                                                <li class="divider"></li>
                                                <li class="dropdown-header">Button dropdowns</li>
                                                <li><a href="#">Single button dropdowns</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-3">
                                            <ul>
                                                <li class="dropdown-header">Input groups</li>
                                                <li><a href="#">Basic example</a></li>
                                                <li><a href="#">Sizing</a></li>
                                                <li><a href="#">Checkboxes and radio addons</a></li>
                                                <li class="divider"></li>
                                                <li class="dropdown-header">Navs</li>
                                                <li><a href="#">Tabs</a></li>
                                                <li><a href="#">Pills</a></li>
                                                <li><a href="#">Justified</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-3">
                                            <ul>
                                                <li class="dropdown-header">Navbar</li>
                                                <li><a href="#">Default navbar</a></li>
                                                <li><a href="#">Buttons</a></li>
                                                <li><a href="#">Text</a></li>
                                                <li><a href="#">Non-nav links</a></li>
                                                <li><a href="#">Component alignment</a></li>
                                                <li><a href="#">Fixed to top</a></li>
                                                <li><a href="#">Fixed to bottom</a></li>
                                                <li><a href="#">Static top</a></li>
                                                <li><a href="#">Inverted navbar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <!-- calling info -->
                            <div class="calling-info">
                                <div class="calling-content">
                                    <div class="calling-desc pull-right">
                                        <a href="<?php echo base_url('c_property/add') ?>" class="btn btn-secondary">Submit Properti</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end calling info -->
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- end main navigation -->
    </div>
    <!-- end main navigation wrap -->
</div>
<!-- end header -->