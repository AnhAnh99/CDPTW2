<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-114">
<main class="main sidebar-opened">
    <div class="sidebar-overlay"></div>
    <div class="sidebar-toggle"><i class="fa fa-sliders" aria-hidden="true"></i></div>
    <aside class="sidebar-product col-lg-3 padding-left-lg mobile-sidebar">
        <div class="sidebar-wrapper">
            <div class="widget widget-brand">
                <a href="#">
                    <img src="images/product-brand.png" alt="brand name">
                </a>
            </div><!-- End .widget -->

            <div class="widget widget-info">
                <ul>
                    <li>
                        <i class="icon-shipping"></i>
                        <h4>FREE<br>SHIPPING</h4>
                    </li>
                    <li>
                        <i class="icon-us-dollar"></i>
                        <h4>100% MONEY<br>BACK GUARANTEE</h4>
                    </li>
                    <li>
                        <i class="icon-online-support"></i>
                        <h4>ONLINE<br>SUPPORT 24/7</h4>
                    </li>
                </ul>
            </div><!-- End .widget -->

            <div class="widget widget-banner">
                <div class="banner banner-image">
                    <a href="#">
                        <img src="images/banners/banner-sidebar.jpg" alt="Banner Desc">
                    </a>
                </div><!-- End .banner -->
            </div><!-- End .widget -->

            <div class="widget widget-featured">
                <h3 class="widget-title">Featured Products</h3>

                <div class="swiper-container widget-body">
                    <div class="swiper-wrapper  featured-col">
                        <div class="swiper-slide product product-sm">
                            <figure class=" product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="images/products/small/product-1.jpg" alt="product">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="product.html">Ring</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$45.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                        <div class="swiper-slide product product-sm">
                            <figure class=" product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="images/products/small/product-4.jpg" alt="product">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="product.html">Watch-Black</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$50.00</span>
                                    <span class="product-price">$35.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div>
                </div>
                <div class="swiper-container widget-body">
                    <div class="swiper-wrapper  featured-col">
                        <div class="swiper-slide product product-sm">
                            <figure class=" product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="images/products/small/product-2.jpg" alt="product">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="product.html">Headphone</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$60.00</span>
                                    <span class="product-price">$45.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->

                        <div class="swiper-slide product product-sm">
                            <figure class=" product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="images/products/small/product-6.jpg" alt="product">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="product.html">Hat</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:20%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$40.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div>
                </div>
                <div class="swiper-container widget-body">
                    <div class="swiper-wrapper  featured-col">
                        <div class="swiper-slide  product product-sm">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="images/products/small/product-3.jpg" alt="product">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="product.html">Shoes</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$50.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->

                        <div class="swiper-slide product product-sm">
                            <figure class=" product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="images/products/small/product-5.jpg" alt="product">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="product.html">Watch-Gray</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$29.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination owl-nav">
            <i class="icon-angle-left owl-prev"></i>
            <i class="icon-angle-right owl-next"></i>
        </div>
        <div class="owl-dots disabled"></div>
    </aside><!-- End .col-md-3 -->
</main><!-- End .main -->
</div>