<!-- start noo wrapper -->
<div class="noo-wrapper">
    <!-- start noo mainbody -->
    <div class="container noo-mainbody">
        <div class="noo-mainbody-inner">
            <div class="row clearfix">
                <!-- start main content -->
                <div class="noo-content col-xs-12 col-md-8">
                    <!-- start article property -->
                    <article class="property">
                        <h1 class="property-title">
                            <?php echo $detail['username'] ?>
                        </h1>

                        <div class="property-featured clearfix">
                            <div class="images">
                                <div class="caroufredsel-wrap">
                                <ul>
                                    <li><a href="images/property/property-details1.jpg"><img src="images/property/property-details1.jpg" alt="" /></a></li>
                                    <li><a href="images/property/property-details1.jpg"><img src="images/property/property-details1.jpg" alt="" /></a></li>
                                    <li><a href="images/property/property-details1.jpg"><img src="images/property/property-details1.jpg" alt="" /></a></li>
                                    <li><a href="images/property/property-details1.jpg"><img src="images/property/property-details1.jpg" alt="" /></a></li>
                                    <li><a href="images/property/property-details1.jpg"><img src="images/property/property-details1.jpg" alt="" /></a></li>
                                    <li><a href="images/property/property-details1.jpg"><img src="images/property/property-details1.jpg" alt="" /></a></li>
                                </ul>
                                </div>
                            </div>
                            <div class="thumbnails">
                                <div class="thumbnails-wrap">
                                    <ul>
                                        <li><a href="#"><img src="images/property/property-details1-thumbs.jpg" alt="" /></a></li>
                                        <li><a href="#"><img src="images/property/property-details1-thumbs.jpg" alt="" /></a></li>
                                        <li><a href="#"><img src="images/property/property-details1-thumbs.jpg" alt="" /></a></li>
                                        <li><a href="#"><img src="images/property/property-details1-thumbs.jpg" alt="" /></a></li>
                                        <li><a href="#"><img src="images/property/property-details1-thumbs.jpg" alt="" /></a></li>
                                        <li><a href="#"><img src="images/property/property-details1-thumbs.jpg" alt="" /></a></li>
                                    </ul>
                                </div>
                                <a class="caroufredsel-prev" href="#"></a>
                                <a class="caroufredsel-next" href="#"></a>
                            </div>
                        </div>

                        <div class="property-summary">
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="property-detail">
                                        <h4 class="property-detail-title">Detail Properti</h4>
                                        <div class="property-detail-content">
                                            <div class="detail-field row">
                                                <span class="col-xs-6 col-md-5 detail-field-label">Tipe</span>
                                                <span class="col-xs-6 col-md-7 detail-field-value">
                                                    <a href="#" rel="tag">
                                                        <?php echo $detail['jenis_properti'] ?>
                                                    </a>
                                                </span>

                                                <span class="col-xs-6 col-md-5 detail-field-label">Status</span>
                                                <span class="col-xs-6 col-md-7 detail-field-value">
                                                    <a href="#" rel="tag">
                                                        <?php echo $detail['status'] ?>
                                                    </a>
                                                </span>

                                                <span class="col-xs-6 col-md-5 detail-field-label">Harga</span>
                                                <span class="col-xs-6 col-md-7 detail-field-value">
                                                    <span class="amount"><?php echo $detail['harian'] ?></span> /hari <br />
                                                    <span class="amount"><?php echo $detail['mingguan'] ?></span> /minggu <br />
                                                    <span class="amount"><?php echo $detail['bulanan'] ?></span> /bulan <br />
                                                    <span class="amount"><?php echo $detail['tahunan'] ?></span> /tahun <br />
                                                </span>

                                                <span class="col-xs-6 col-md-5 detail-field-label">Luas</span>
                                                <span class="col-xs-6 col-md-7 detail-field-value">
                                                    <?php echo $detail['luas_kamar'] ?>
                                                </span>

                                                <span class="col-xs-6 col-md-5 detail-field-label">Jumlah Kamar</span>
                                                <span class="col-xs-6 col-md-7 detail-field-value">
                                                    <?php echo $detail['jumlah_kamar'] ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="property-desc">
                                        <h4 class="property-detail-title">Deskripsi Properti</h4>
                                        <p>
                                            Located on <?php echo $detail['alamat'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="property-feature">
                            <h4 class="property-feature-title">Property Features</h4>
                            <div class="property-feature-content clearfix">
                                <div class="has">
                                    <i class="fa fa-check-circle"></i> attic
                                </div>

                                <div class="has">
                                    <i class="fa fa-check-circle"></i> gas heat
                                </div>

                                <div class="no-has">
                                    <i class="fa fa-times-circle"></i> balcony
                                </div>

                                <div class="no-has">
                                    <i class="fa fa-times-circle"></i> wine cellar
                                </div>

                                <div class="has">
                                    <i class="fa fa-check-circle"></i> basketball court
                                </div>

                                <div class="has">
                                    <i class="fa fa-check-circle"></i> trash compactors
                                </div>

                                <div class="has">
                                    <i class="fa fa-check-circle"></i> gym
                                </div>

                                <div class="no-has">
                                    <i class="fa fa-times-circle"></i> fireplace
                                </div>

                                <div class="has">
                                    <i class="fa fa-check-circle"></i> pool
                                </div>

                                <div class="no-has">
                                    <i class="fa fa-times-circle"></i> lake view
                                </div>

                                <div class="has">
                                    <i class="fa fa-check-circle"></i> solar Heat
                                </div>

                                <div class="has">
                                    <i class="fa fa-check-circle"></i> storm Windows
                                </div>

                                <div class="has">
                                    <i class="fa fa-check-circle"></i> separate Shower
                                </div>

                                <div class="no-has">
                                    <i class="fa fa-times-circle"></i> wet bar
                                </div>

                                <div class="no-has">
                                    <i class="fa fa-times-circle"></i> remodeled
                                </div>

                                <div class="no-has">
                                    <i class="fa fa-times-circle"></i> skylights
                                </div>

                                <div class="has">
                                    <i class="fa fa-check-circle"></i> stone Surfaces
                                </div>

                                <div class="no-has">
                                    <i class="fa fa-times-circle"></i> open entertaining Kitchen
                                </div>

                                <div class="has">
                                    <i class="fa fa-check-circle"></i> golf course
                                </div>

                                <div class="no-has">
                                    <i class="fa fa-times-circle"></i> health club
                                </div>

                                <div class="no-has">
                                    <i class="fa fa-times-circle"></i> backyard
                                </div>

                                <div class="has">
                                    <i class="fa fa-check-circle"></i> pet allowed
                                </div>

                                <div class="has">
                                    <i class="fa fa-check-circle"></i> office/den
                                </div>

                                <div class="has">
                                    <i class="fa fa-check-circle"></i> laundry
                                </div>

                            </div>
                        </div>

                        <div class="property-map">
                            <h4 class="property-map-title">Find this property on map</h4>
                            <div class="property-map-content">
                                <div class="property-map-search">
                                    <input placeholder="Search your map" type="text" autocomplete="off" id="property_map_search_input">
                                </div>
                                <div id="property-map-7292" class="property-map-box" data-latitude="40.760605053506126" data-longitude="-73.9962237328291"></div>
                            </div>
                        </div>
                    </article>
                    <!-- END ARTICLE PROPERTY -->

                    <!-- START AGENT PROPERTY -->
                    <div class="agent-property">
                        <div class="agent-property-title">
                            <h3>Contact Agent</h3>
                        </div>
                        <div class="agents grid clearfix">
                            <article class="hentry">
                                <div class="agent-featured">
                                    <a class="content-thumb" href="http://wp.nootheme.com/citilights/agents/john-doe/">
                                        <img src="images/agent/agent1.jpg" class="attachment-agent-thumb" alt="">
                                    </a>
                                </div>
                                <div class="agent-wrap">
                                    <div class="agent-summary">
                                        <div class="agent-info">
                                            <div><i class="fa fa-phone"></i>&nbsp;(342) 739538</div>
                                            <div><i class="fa fa-tablet"></i>&nbsp;(324) 478932</div>
                                            <div><i class="fa fa-envelope-square"></i>&nbsp;Johndoe@gmail.com</div>
                                            <div><i class="fa fa-skype"></i>&nbsp;john.doe</div>
                                        </div>
                                        <div class="agent-desc">
                                            <ul class="social-list agent-social clearfix">
                                                <li><a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                            <div class="agent-action">
                                                <a href="#"><?php echo $detail['username'] ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <div class="conact-agent">
                                <form role="form" id="conactagentform" method="post">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name *">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Your Email *">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" placeholder="Message *"></textarea>
                                    </div>
                                    <div class="form-action">
                                        <button type="submit" class="btn btn-default">Send a Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end agent property -->
                </div>          
                <!-- end main content -->

                <!-- start sidebar -->
                <div class="noo-sidebar noo-sidebar-right col-xs-12 col-md-4">
                    <div class="noo-sidebar-inner">
                        <!-- start find property -->
                        <div class="block-sidebar find-property">
                            <h3 class="title-block-sidebar">Find Property</h3>
                            <div class="gsearch">
                                <div class="gsearch-wrap">
                                    <form class="gsearchform" method="get" role="search">
                                        <div class="gsearch-content">
                                            <div class="gsearch-field">
                                                <div class="form-group glocation">
                                                    <div class="label-select">
                                                        <select class="form-control">
                                                            <option>All Locations</option>
                                                            <option>New Jersey</option>
                                                            <option>New York</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group gsub-location">
                                                    <div class="label-select">
                                                        <select class="form-control">
                                                            <option>All Sub-locations</option>
                                                            <option>Central New York</option>
                                                            <option>GreenVille</option>
                                                            <option>Long Island</option>
                                                            <option>New York City</option>
                                                            <option>West Side</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group gstatus">
                                                    <div class="label-select">
                                                        <select class="form-control">
                                                            <option>All Status</option>
                                                            <option>Open house</option>
                                                            <option>Rent</option>
                                                            <option>Sale</option>
                                                            <option>Sold</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group gtype">
                                                    <div class="label-select">
                                                        <select class="form-control">
                                                            <option>All Type </option>
                                                            <option>Apartment</option>
                                                            <option>Co-op</option>
                                                            <option>Condo</option>
                                                            <option>Single Family Home</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group gbed">
                                                    <div class="label-select">
                                                        <select class="form-control">
                                                            <option>No. of Bedrooms</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group gbath">
                                                    <div class="label-select">
                                                        <select class="form-control">
                                                            <option>No. of Bathrooms</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group gprice">
                                                    <span class="gprice-label">Price</span>
                                                    <div class="gslider-range gprice-slider-range"></div>
                                                    <span class="gslider-range-value gprice-slider-range-value-min"></span>
                                                    <span class="gslider-range-value gprice-slider-range-value-max"></span>
                                                </div>

                                                <div class="form-group garea">
                                                    <span class="garea-label">Area</span>
                                                    <div class="gslider-range garea-slider-range"></div>
                                                    <span class="gslider-range-value garea-slider-range-value-min"></span>
                                                    <span class="gslider-range-value garea-slider-range-value-max"></span>
                                                </div>
                                            </div>

                                            <div class="gsearch-action">
                                            <div class="gsubmit">
                                                <a class="btn btn-deault" href="#">Search Property</a>
                                            </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end find property -->
                    </div>
                </div>
                <!-- end sidebar -->
            </div>
        </div>
    </div>
    <!-- end noo mainbody -->
</div>
<!-- end noo wrapper -->