<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-143">

    <div class="page-wrapper">
        <main class="main sidebar-opened">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                        <i class="fa fa-chevron-right"></i><a href="#">Electronics</a>
                        <li class="breadcrumb-item active" aria-current="page"><i
                                class="fa fa-chevron-right"></i>Headsets
                        </li>
                    </ol>
                </div><!-- End .container -->
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-single-container product-single-default">
                            <div class="row">
                                <div class="col-lg-7 col-md-6 product-single-gallery">
                                    <div class="swiper-container gallery-top">
                                        <div class="swiper-wrapper">
                                            <div class=" swiper-slide">
                                                <div class="swiper-zoom-container">
                                                    <img class="product-single-image"
                                                        src="images/products/zoom/product-1.jpg"
                                                        data-zoom-image="images/products/zoom/product-1-big.jpg" />
                                                </div>
                                            </div>

                                            <div class=" swiper-slide">
                                                <div class="swiper-zoom-container">
                                                    <img class="product-single-image"
                                                        src="images/products/zoom/product-2.jpg" />
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="swiper-zoom-container">
                                                    <img class="product-single-image"
                                                        src="images/products/zoom/product-3.jpg"
                                                        data-zoom-image="images/products/zoom/product-3-big.jpg" />
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="swiper-zoom-container">
                                                    <img class="product-single-image"
                                                        src="images/products/zoom/product-4.jpg"
                                                        data-zoom-image="images/products/zoom/product-4-big.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End .product-single-carousel -->
                                        <span class="prod-full-screen">
                                            <i class="icon-plus"></i>
                                        </span>
                                        <div class="swiper-button-next swiper-button-white"></div>
                                        <div class="swiper-button-prev swiper-button-white"></div>
                                    </div>
                                    <div class="swiper-container gallery-thumbs ">
                                        <div class="swiper-wrapper prod-thumbnail">
                                            <div class="swiper-slide active ">
                                                <img class="slide " src="images/products/zoom/product-1.jpg" />
                                            </div>
                                            <div class="swiper-slide ">
                                                <img class="slide" src="images/products/zoom/product-2.jpg" />
                                            </div>
                                            <div class="swiper-slide ">
                                                <img class="slide" src="images/products/zoom/product-3.jpg" />
                                            </div>
                                            <div class="swiper-slide ">
                                                <img class="slide" src="images/products/zoom/product-4.jpg" />
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End .col-lg-7 -->

                                <div class="col-lg-5 col-md-6">
                                    <div class="product-single-details">
                                        <h1 class="product-title">Silver Porto Headset</h1>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->

                                            <a href="#" class="rating-link">( 6 Reviews )</a>
                                        </div><!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="old-price">$81.00</span>
                                            <span class="product-price">$101.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-desc">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                dolore
                                                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>
                                        </div><!-- End .product-desc -->

                                        <div class="product-filters-container">
                                            <div class="product-single-filter">
                                                <label>Colors:</label>
                                                <ul class="config-swatch-list">
                                                    <li class="active">
                                                        <a href="#" style="background-color: #6085a5;"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" style="background-color: #ab6e6e;"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" style="background-color: #b19970;"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" style="background-color: #11426b;"></a>
                                                    </li>
                                                </ul>
                                            </div><!-- End .product-single-filter -->
                                        </div><!-- End .product-filters-container -->

                                        <div class="product-action product-all-icons">
                                            <div class="product-single-qty">

                                                <input class="horizontal-quantity form-control" type="text">

                                            </div><!-- End .product-single-qty -->

                                            <a href="cart.html" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a>
                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div><!-- End .product-action -->

                                        <div class="product-single-share">
                                            <label>Share:</label>
                                            <!-- www.addthis.com share plugin-->
                                            <div class="addthis_inline_share_toolbox"></div>
                                        </div><!-- End .product single-share -->
                                    </div><!-- End .product-single-details -->
                                </div><!-- End .col-lg-5 -->
                            </div><!-- End .row -->
                        </div><!-- End .product-single-container -->

                        <div class="product-single-tabs scrolling-box">
                            <div class="sticky-header" role="tablist">
                                <ul class="nav nav-tabs container">
                                    <li class="nav-item">
                                        <a class="nav-link" id="product-tab-desc" href="#product-desc-content"
                                            data-toggle="tab">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="product-tab-size" href="#product-size-content"
                                            data-toggle="tab">Size Guide</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="product-tab-tags" href="#product-tags-content"
                                            data-toggle="tab">Tags</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="product-tab-reviews" href="#product-reviews-content"
                                            data-toggle="tab">Reviews</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-pane" id="product-desc-content" role="tabpanel"
                                aria-labelledby="product-tab-desc">
                                <div class="product-desc-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla
                                        pariatur. Excepteur sint occaecat.</p>
                                    <ul>
                                        <li><i class="icon-ok"></i>Any Product types that You want - Simple,
                                            Configurable
                                        </li>
                                        <li><i class="icon-ok"></i>Downloadable/Digital Products, Virtual Products</li>
                                        <li><i class="icon-ok"></i>Inventory Management with Backordered items</li>
                                    </ul>
                                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim
                                        veniam, <br>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo
                                        consequat. </p>
                                </div><!-- End .product-desc-content -->
                            </div><!-- End .tab-pane -->
                        </div><!-- End .product-single-tabs -->
                    </div><!-- End .col-lg-9 -->

                    <div class="sidebar-overlay"></div>
                    <div class="sidebar-toggle"><i class="icon-sliders"></i></div>

                </div><!-- End .row -->
            </div><!-- End .container -->
        </main><!-- End .main -->

    </div><!-- End .page-wrapper -->
</div>