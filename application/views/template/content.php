<!-- noo wrapper -->
<div class="noo-wrapper">
    <!-- slideshow -->
    <section id="slideshow-home" class="wrap noo-slideshow slideshow-home row-fluid">
        <div class="property-slider">
            <div id="noo-slider-1" class="noo-slider noo-property-slide-wrap">
                <?php echo $map['js']; ?>
                <?php echo $map['html']; ?>
            </div>
        </div>
    </section>
    <!-- end slideshow -->

    <!-- search box -->
    <section id="search-box" class="wrap search-box">
        <div class="gsearch">
            <div class="container">
                <!-- gsearch wrap -->
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
                <!-- end gsearch wrap -->
            </div>
        </div>
    </section>
    <!-- end search box -->

    <!-- recent properties -->
    <section id="recent-properties-slider" class="wrap recent-properties recent-properties-slider">
        <div class="container">
            <div class="recent-properties-inner">
                <div class="section-title">
                    <h3>Recent Properties</h3>
                </div>
                <div class="recent-properties-content">
                    <div class="caroufredsel-wrap">
                        <ul>
                            <li>
                                <div class="property-row">
                                    <article class="hentry has-featured">
                                        <div class="property-featured">
                                            <a class="content-thumb" href="property-details.html">
                                                <img src="<?php echo base_url('fe/images/property/property1.jpg') ?>" class="attachment-property-thumb" alt="" />
                                            </a>
                                            <span class="property-category">
                                                <a href="type-single-family-home.html">Single Family Home</a>
                                            </span>
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
                                        </div>
                                        <div class="property-wrap">
                                            <h2 class="property-title"><a href="property-details.html" title="Visalia, NJ 93277">Visalia, NJ 93277</a></h2>
                                            <div class="property-excerpt">
                                                <p>This 4 bedroom home sits on an oversized lot at the end of a cul-de-sac...</p>
                                            </div>
                                        </div>
                                        <div class="property-summary">
                                            <div class="property-info">
                                                <div class="property-price">
                                                    <span><span class="amount">&#36;154,500</span></span>
                                                </div>
                                                <div class="property-action">
                                                    <a href="property-details.html">More Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="hentry has-featured">
                                        <div class="property-featured">
                                            <a class="content-thumb" href="property-details.html">
                                                <img src="<?php echo base_url('fe/images/property/property1.jpg') ?>" class="attachment-property-thumb" alt="" />
                                            </a>
                                            <span class="property-category"><a href="type-single-family-home.html">Single Family Home</a></span>
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
                                        </div>
                                        <div class="property-wrap">
                                            <h2 class="property-title"><a href="property-details.html" title="Single Family Residential, NJ">Single Family Residential, NJ</a></h2>
                                            <div class="property-excerpt">
                                                <p>Classic 60's ranch living. House has hardwood floors and hard coat plaster walls and ceilings...</p>
                                            </div>
                                        </div>
                                        <div class="property-summary">
                                            <div class="property-info">
                                                <div class="property-price">
                                                    <span><span class="amount">&#36;299,000</span></span>
                                                </div>
                                                <div class="property-action">
                                                    <a href="property-details.html">More Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="property-row">
                                    <article class="hentry has-featured">
                                        <div class="property-featured">
                                            <a class="content-thumb" href="property-details.html">
                                                <img src="<?php echo base_url('fe/images/property/property1.jpg') ?>" class="attachment-property-thumb" alt="" /> 
                                            </a>
                                            <span class="property-category"><a href="type-apartment.html">Apartment</a></span>
                                            <div class="property-detail">
                                                <div class="size">
                                                    <span>1304 sqft</span>
                                                </div>
                                                <div class="bathrooms">
                                                    <span>2</span>
                                                </div>
                                                <div class="bedrooms">
                                                    <span>3</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="property-wrap">
                                            <h2 class="property-title">
                                                <a href="property-details.html" title="Peter Cooper Village">Peter Cooper Village</a>
                                            </h2>
                                            <div class="property-excerpt">
                                                <p>
                                                    Peter Cooper Village/ Stuyvesant Town provides an unbeatable combination of city energy and community tranquility,...
                                                </p>
                                            </div>
                                        </div>
                                        <div class="property-summary">
                                            <div class="property-info">
                                                <div class="property-price">
                                                    <span><span class="amount">&#36;5,109</span></span>
                                                </div>
                                                <div class="property-action">
                                                    <a href="property-details.html">More Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="hentry has-featured">
                                        <div class="property-featured">
                                            <a class="content-thumb" href="property-details.html">
                                                <img src="<?php echo base_url('fe/images/property/property1.jpg') ?>" class="attachment-property-thumb" alt="" /> 
                                            </a>
                                            <span class="property-category"><a href="type-condo.html">Condo</a></span>
                                            <div class="property-detail">
                                                <div class="size">
                                                    <span>1,856 sqft</span>
                                                </div>
                                                <div class="bathrooms">
                                                    <span>2</span>
                                                </div>
                                                <div class="bedrooms">
                                                    <span>2</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="property-wrap">
                                            <h2 class="property-title">
                                                <a href="property-details.html" title="Ocala, FL34481">Ocala, FL34481</a>
                                            </h2>
                                            <div class="property-excerpt">
                                                <p>
                                                    Wonderful expanded end-unit Augusta featuring 2 bedrooms in split-bedroom plan, study/den/library off of cathedral-ceilinged HUGE...
                                                </p>
                                            </div>
                                        </div>
                                        <div class="property-summary">
                                            <div class="property-info">
                                                <div class="property-price">
                                                    <span><span class="amount">&#36;95,000</span></span>
                                                </div>
                                                <div class="property-action">
                                                    <a href="property-details.html">More Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </li>
                            <li>
                                <div class="property-row">
                                    <article class="hentry has-featured">
                                        <div class="property-featured">
                                            <a class="content-thumb" href="property-details.html">
                                                <img src="<?php echo base_url('fe/images/property/property1.jpg') ?>" class="attachment-property-thumb" alt="" /> 
                                            </a>
                                            <span class="property-category"><a href="type-single-family-home.html">Single Family Home</a></span>
                                            <div class="property-detail">
                                                <div class="size">
                                                    <span>123 sqft</span>
                                                </div>
                                                <div class="bathrooms">
                                                    <span>1</span>
                                                </div>
                                                <div class="bedrooms">
                                                    <span>1</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="property-wrap">
                                            <h2 class="property-title">
                                                <a href="property-details.html" title="New York Upper West Side">New York Upper West Side</a>
                                            </h2>
                                            <div class="property-excerpt">
                                                <p>Fantastic One Bedroom Facing East In This Amazing Trump Place Doorman Building. There Is A...</p>
                                            </div>
                                        </div>
                                        <div class="property-summary">
                                            <div class="property-info">
                                                <div class="property-price">
                                                    <span><span class="amount">&#36;3,350</span></span>
                                                </div>
                                                <div class="property-action">
                                                    <a href="property-details.html">More Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="hentry has-featured">
                                        <div class="property-featured">
                                            <a class="content-thumb" href="property-details.html">
                                                <img src="<?php echo base_url('fe/images/property/property1.jpg') ?>" class="attachment-property-thumb" alt="" /> 
                                            </a>
                                            <span class="property-category"><a href="type-apartment.html">Apartment</a></span>
                                            <div class="property-detail">
                                                <div class="size">
                                                    <span> 1752 sqft</span>
                                                </div>
                                                <div class="bathrooms">
                                                    <span>2</span>
                                                </div>
                                                <div class="bedrooms">
                                                    <span>2</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="property-wrap">
                                            <h2 class="property-title">
                                                <a href="property-details.html" title="AVA High Line">AVA High Line</a>
                                            </h2>
                                            <div class="property-excerpt">
                                                <p>Special pricing for immediate move-ins! Call for details! AVA is a first. Our apartments are...</p>
                                            </div>
                                        </div>
                                        <div class="property-summary">
                                            <div class="property-info">
                                                <div class="property-price">
                                                    <span><span class="amount">&#36;3,410</span></span>
                                                </div>
                                                <div class="property-action">
                                                    <a href="property-details.html">More Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a class="caroufredsel-prev" href="#"></a>
                    <a class="caroufredsel-next" href="#"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- end recent properties -->
</div>
<!-- end noo wrapper -->