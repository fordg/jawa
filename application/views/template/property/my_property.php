<!-- start noo wrapper -->
<div class="noo-wrapper">
    <!-- start noo mainbody -->
    <div class="container noo-mainbody">
        <div class="noo-mainbody-inner">
            <div class="row clearfix">
                <!-- start sidebar -->
                <div class="noo-sidebar noo-sidebar-left col-xs-12 col-md-4">
                    <div class="noo-sidebar-inner">
                        <div class="user-sidebar-menu dashboard-sidebar">
                            <div class="user-avatar content-thumb">
                                <?php if($profil['photo'] == null ) {?>
                                <img src="<?php echo base_url('fe/images/agent/agent1.jpg') ?>" alt="">
                                <?php } else { ?>
                                <img src="<?php echo base_url('upload/profile/') ?>/<?php echo $profil['photo'] ?>" class="img-responsive" alt="">
                                <?php }?>
                            </div>
                            <div class="user-menu-links">
                                <a href="<?php echo base_url() ?>c_profile" class="user-link">
                                    <i class="fa fa-user"></i>
                                    Profil Saya
                                </a>
                                <a href="<?php echo base_url() ?>c_property" class="user-link active">
                                    <i class="fa fa-home"></i>
                                    Properti Saya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end sidebar -->

                <!-- start main content -->
                <div class="noo-content col-xs-12 col-md-8">
                    <div class="properties list my-properties">
                        <div class="properties-content">
                            <?php foreach($properti as $result): ?>
                            <article class="hentry">
                                <div class="property-featured">
                                    <span class="featured"><i class="fa fa-star"></i></span>
                                    <a class="content-thumb" href="<?php echo base_url() ?>c_property/detail_property/<?php echo $result['nID'].'/'.url_title($result['nama'], '-', TRUE).'.html' ?>">
                                        <img class="img-responsive" src="<?php echo base_url('upload/property/') ?>/<?php echo $result['photo'] ?>" alt="">
                                    </a>
                                    <span class="property-label sold"><?php echo $result['status'] ?></span>
                                    <span class="property-category">
                                        <a href="#"><?php echo $result['jenis_properti'] ?></a>
                                    </span>
                                </div>
                                <div class="property-wrap">
                                    <h2 class="property-title">
                                        <a href="property-details.html" title="<?php echo $result['nama'] ?>">
                                            <?php echo $result['nama'] ?>
                                        </a>
                                    </h2>
                                    <div class="property-labels"></div>
                                    <div class="property-excerpt">
                                        <p class="property-fullwidth-excerpt">
                                            Berlokasi di <?php echo $result['alamat'] ?>
                                        </p>
                                    </div>
                                    <div class="property-summary">
                                        <div class="property-detail">
                                            <div class="size">
                                                <span>762 sqft</span>
                                            </div>
                                            <div class="bathrooms">
                                                <span>3</span>
                                            </div>
                                            <div class="bedrooms">
                                                <span>3</span>
                                            </div>
                                        </div>
                                        <div class="property-info">
                                            <div class="property-price">
                                                <span><span class="amount">&#36;3,515</span> /month</span>
                                            </div>
                                            <div class="property-action">
                                                <div class="agent-action four-buttons">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Edit this Property">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a class="status-property active" href="#" data-toggle="tooltip" data-placement="top" title="Sold/Rent">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                    <a class="featured-property active" data-toggle="tooltip" data-placement="top" title="Featured Property" href="#">
                                                        <i class="fa fa-star"></i>
                                                    </a>
                                                    <a class="delete-property" data-toggle="tooltip" data-placement="top" title="Delete this Property" href="#">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <?php endforeach ?>
                        </div>
                    </div>                                          
                </div>          
                <!-- end main content -->             
            </div>
            <!-- end noo mainbody -->
        </div>
        <!-- end noo wrapper -->
    </div>
</div>
