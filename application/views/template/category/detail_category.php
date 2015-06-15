<!-- start noo wrapper -->
<div class="noo-wrapper">
    <!-- start map vertical -->
    <section id="search_map_vertical" class="wrap noo_advanced_search_property vertical">
        <div class="noo-map">
            <div id="gmap"></div>

            <div class="gmap-search">
                <input placeholder="Search your map" type="text" autocomplete="off" id="gmap_search_input">
            </div>
            <div class="gmap-control">
                <a class="gmap-mylocation" href="#"><i class="fa fa-map-marker"></i>My Location</a>
                <a class="gmap-full" href="#"><i class="fa fa-expand"></i></a>
                <a class="gmap-prev" href="#"><i class="fa fa-angle-left"></i></a>
                <a class="gmap-next" href="#"><i class="fa fa-angle-right"></i></a>
            </div>
            <div class="gmap-zoom">
                <a href="#" class="zoom-in"><i class="fa fa-plus"></i></a>
                <a href="#" class="zoom-out"><i class="fa fa-minus"></i></a>
            </div>
            <div class="gmap-loading">Loading Maps
                <div class="gmap-loader">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>

            <div class="gsearch">
                <div class="container">
                    <div class="gsearch-wrap">
                        <h3 class="gsearch-title"><i class="fa fa-search"></i><span>SEARCH FOR PROPERTY</span></h3>
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
        </div>
    </section>
    <!-- end map vertical -->

    <!-- start mainbody -->
    <div class="container noo-mainbody">
        <div class="noo-mainbody-inner">
            <div class="row clearfix">
                <!-- start main content -->
                <div class="noo-content col-xs-12">
                    <div class="recent-properties">
                        <div class="properties grid">
                            <!-- start properties content -->
                            <div class="properties-content">
                                <article class="hentry">
                                    <div class="property-featured">
                                        <span class="featured"><i class="fa fa-star"></i></span>
                                        <a class="content-thumb" href="property-details.html">
                                            <img src="<?php echo base_url('fe/images/property/property1.jpg') ?>" alt="">
                                        </a>
                                        <span class="property-label">Hot</span>
                                        <span class="property-category"><a href="#">Single Family Home</a></span>
                                    </div>
                                    <div class="property-wrap">
                                        <h2 class="property-title">
                                            <a href="property-details.html" title="Visalia, NJ 93277">Visalia, NJ 93277</a>
                                        </h2>
                                        <div class="property-excerpt">
                                            <p>This 4 bedroom home sits on an oversized lot at the end of a cul-de-sac...</p>
                                            <p class="property-fullwidth-excerpt">This 4 bedroom home sits on an oversized lot at the end of a cul-de-sac in an established neighborhood. It is in need of work...</p>
                                        </div>
                                        <div class="property-summary">
                                            <div class="property-detail">
                                                <div class="size">
                                                    <span>1913 sqft</span>
                                                </div>
                                                <div class="bathrooms">
                                                    <span>2</span>
                                                </div>
                                                <div class="bedrooms">
                                                    <span>4</span>
                                                </div>
                                            </div>
                                            <div class="property-info">
                                                <div class="property-price">
                                                    <span>
                                                        <span class="amount">&#36;154,500</span>
                                                    </span>
                                                </div>
                                                <div class="property-action">
                                                    <a href="property-details.html">More Details</a>
                                                </div>
                                            </div>
                                            <div class="property-info property-fullwidth-info">
                                                <div class="property-price">
                                                    <span><span class="amount">&#36;154,500</span> </span>
                                                </div>
                                                <div class="size"><span>1913 sqft</span></div>
                                                <div class="bathrooms"><span>2</span></div>
                                                <div class="bedrooms"><span>4</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="property-action property-fullwidth-action">
                                        <a href="property-details.html">More Details</a>
                                    </div>
                                </article>

                                <article class="hentry">
                                    <div class="property-featured">
                                        <a class="content-thumb" href="property-details.html">
                                            <img src="<?php echo base_url('fe/images/property/property1.jpg') ?>" alt="">
                                        </a>
                                        <span class="property-label">Hot</span>
                                            <span class="property-category"><a href="#">Apartment</a>
                                        </span>
                                    </div>
                                    <div class="property-wrap">
                                        <h2 class="property-title">
                                            <a href="property-details.html" title="The Helux">The Helux</a>
                                        </h2>
                                        <div class="property-excerpt">
                                            <p>Located on 43rd Street between 10th and 11th Avenue in the hot Midtown West neighborhood...</p>
                                            <p class="property-fullwidth-excerpt">Located on 43rd Street between 10th and 11th Avenue in the hot Midtown West neighborhood of Hell?s Kitchen is The Helux. These no-fee apartments feature...</p>
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
                                                    <span>
                                                        <span class="amount">&#36;3,515</span>
                                                    </span>
                                                </div>
                                                <div class="property-action">
                                                    <a href="property-details.html">More Details</a>
                                                </div>
                                            </div>
                                            <div class="property-info property-fullwidth-info">
                                                <div class="property-price">
                                                    <span><span class="amount">&#36;3,515</span> /month</span>
                                                </div>
                                                <div class="size"><span>762 sqft</span></div>
                                                <div class="bathrooms"><span>3</span></div>
                                                <div class="bedrooms"><span>4</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="property-action property-fullwidth-action">
                                        <a href="property-details.html">More Details</a>
                                    </div>
                                </article>

                                <article class="hentry">
                                    <div class="property-featured">
                                        <a class="content-thumb" href="property-details.html">
                                            <img src="<?php echo base_url('fe/images/property/property1.jpg') ?>" alt="">
                                        </a>
                                        <span class="property-category">
                                            <a href="#">Single Family Home</a>
                                        </span>
                                    </div>
                                    <div class="property-wrap">
                                        <h2 class="property-title">
                                            <a href="property-details.html" title="Single Family Residential, NJ">Single Family Residential, NJ</a>
                                        </h2>
                                        <div class="property-excerpt">
                                            <p>Classic 60's ranch living. House has hardwood floors and hard coat plaster walls and ceilings...</p>
                                            <p class="property-fullwidth-excerpt">Classic 60's ranch living. House has hardwood floors and hard coat plaster walls and ceilings in good condition. Intimate backyard for private gatherings. Full basement...</p>
                                        </div>
                                        <div class="property-summary">
                                            <div class="property-detail">
                                                <div class="size">
                                                    <span>1118 sqft</span>
                                                </div>
                                                <div class="bathrooms">
                                                    <span>2</span>
                                                </div>
                                                <div class="bedrooms">
                                                    <span>3</span>
                                                </div>
                                            </div>
                                            <div class="property-info">
                                                <div class="property-price">
                                                    <span>
                                                        <span class="amount">&#36;299,000</span>
                                                    </span>
                                                </div>
                                                <div class="property-action">
                                                    <a href="property-details.html">More Details</a>
                                                </div>
                                            </div>
                                            <div class="property-info property-fullwidth-info">
                                                <div class="property-price">
                                                    <span><span class="amount">&#36;299,000</span> </span>
                                                </div>
                                                <div class="size"><span>1118 sqft</span></div>
                                                <div class="bathrooms"><span>2</span></div>
                                                <div class="bedrooms"><span>3</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="property-action property-fullwidth-action">
                                    <a href="property-details.html">More Details</a>
                                    </div>
                                </article>

                                <div class="clearfix"></div>

                                <!-- start pagination navigation -->
                                <nav class="pagination-nav">
                                <ul class="pagination list-center">
                                <li><a class="prev page-numbers" href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li><span class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="#">2</a></li>
                                <li><span class="page-dots"><i class="fa fa-ellipsis-h"></i></span></li>
                                <li><a class="page-numbers" href="#">7</a></li>
                                <li><a class="page-numbers" href="#">8</a></li>
                                <li><a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                                </nav>
                                <!-- end pagination navigation -->
                            </div>
                            <!-- end properties content -->
                        </div>
                    </div>                              
                </div>        
                <!-- end main content -->
            </div>
        </div>
    </div>
    <!-- end mainbody -->
</div>
<!-- end noo wrapper -->