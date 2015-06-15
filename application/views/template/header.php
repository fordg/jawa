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
                                <?php 
                                /*
                                <li><a href="#">Home</a></li>
                                */
                                ?>
                                <?php foreach($category as $row): ?>
                                <li class="dropdown menu-large">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $row->nama_kategori ?> </a>
                                    <ul class="dropdown-menu megamenu row">
                                        <?php 
                                            $subcategory = $this->m_category->getSK($row->nID);
                                            foreach($subcategory as $sk): 
                                        ?>
                                        <li>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="dropdown-header-2"><?php echo $sk->nama_subkat ?></div>
                                                <a href="<?php echo base_url('c_category/detail_category') ?>/<?php echo $row->nama_kategori.'/' ?><?php echo $sk->nama_subkat.'.html' ?>">
                                                    <img class="img-responsive" src="http://placehold.it/150x120">
                                                </a>
                                            </div>
                                        </li>
                                        <?php endforeach ?>
                                    </ul>
                                </li>
                                <?php endforeach ?>
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