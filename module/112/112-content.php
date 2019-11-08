 <?php
 $url_host = 'http://'.$_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
 ?>
<!-- <div class="page-wrapper">
    <main class="main"> -->
        <div class="container">
            <div class="row">
                <div class="type-112">
                    <aside class="sidebar-shop col-lg-3 order-lg-first">
                        <div class="sidebar-wrapper">
                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-1" role="button" aria-expanded="true" aria-controls="widget-body-1">electronics</a>
                                </h3>

                                <div class="collapse show" id="widget-body-1">
                                    <div class="widget-body">
                                        <ul class="cat-list">
                                            <li><a href="#">Smart TVs</a></li>
                                            <li><a href="#">Cameras</a></li>
                                            <li><a href="#">Head Phones</a></li>
                                            <li><a href="#">Games</a></li>
                                        </ul>
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Price</a>
                                </h3>

                                <div class="collapse show" id="widget-body-2">
                                    <div class="widget-body">
                                        <form action="#">
                                            <div class="price-slider-wrapper">
                                                <div id="price-slider"></div><!-- End #price-slider -->
                                            </div><!-- End .price-slider-wrapper -->

                                            <div class="filter-price-action">
                                                <button type="submit" class="btn btn-primary">Filter</button>

                                                <div class="filter-price-text">
                                                    <span id="filter-price-range"></span>
                                                </div><!-- End .filter-price-text -->
                                            </div><!-- End .filter-price-action -->
                                        </form>
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Size</a>
                                </h3>

                                <div class="collapse show" id="widget-body-3">
                                    <div class="widget-body">
                                        <ul class="config-size-list">
                                            <li><a href="#">S</a></li>
                                            <li class="active"><a href="#">M</a></li>
                                            <li><a href="#">L</a></li>
                                            <li><a href="#">XL</a></li>
                                            <li><a href="#">2XL</a></li>
                                            <li><a href="#">3XL</a></li>
                                        </ul>
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-4" role="button" aria-expanded="true" aria-controls="widget-body-4">Brands</a>
                                </h3>

                                <div class="collapse show" id="widget-body-4">
                                    <div class="widget-body">
                                        <ul class="cat-list">
                                            <li><a href="#">Adidas <span>18</span></a></li>
                                            <li><a href="#">Camel <span>22</span></a></li>
                                            <li><a href="#">Seiko <span>05</span></a></li>
                                            <li><a href="#">Samsung Galaxy <span>68</span></a></li>
                                            <li><a href="#">Sony <span>03</span></a></li>
                                        </ul>
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-6" role="button" aria-expanded="true" aria-controls="widget-body-6">Color</a>
                                </h3>

                                <div class="collapse show" id="widget-body-6">
                                    <div class="widget-body">
                                        <ul class="config-swatch-list">
                                            <li>
                                                <a href="#" style="background-color: #4090d5;"></a>
                                            </li>
                                            <li class="active">
                                                <a href="#" style="background-color: #f5494a;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #fca309;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #11426b;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #f0f0f0;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #3fd5c9;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #979c1c;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #7d5a3c;"></a>
                                            </li>
                                        </ul>
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget widget-featured">
                                <h3 class="widget-title">Featured Products</h3>
                                
                                <div class="widget-body">
                                    <div class="owl-carousel widget-featured-products">
                                        <div class="featured-col">
                                            <div class="product product-sm">
                                                <figure class="product-image-container">
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

                                            <div class="product product-sm">
                                                <figure class="product-image-container">
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
                                                            <span class="ratings" style="width:20%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="old-price">$60.00</span>
                                                        <span class="product-price">$45.00</span>
                                                    </div><!-- End .price-box -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->

                                            <div class="product product-sm">
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
                                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$50.00</span>
                                                    </div><!-- End .price-box -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .featured-col -->

                                        <div class="featured-col">
                                            <div class="product product-sm">
                                                <figure class="product-image-container">
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
                                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="old-price">$50.00</span>
                                                        <span class="product-price">$35.00</span>
                                                    </div><!-- End .price-box -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->

                                            <div class="product product-sm">
                                                <figure class="product-image-container">
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

                                            <div class="product product-sm">
                                                <figure class="product-image-container">
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
                                        </div><!-- End .featured-col -->
                                    </div><!-- End .widget-featured-slider -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .widget -->

                            <div class="widget widget-block">
                                <h3 class="widget-title">Custom HTML Block</h3>
                                <h5>This is a custom sub-title.</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi. </p>
                            </div><!-- End .widget -->
                        </div><!-- End .sidebar-wrapper -->
                    </aside><!-- End .col-lg-3 -->
                </div>
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-5"></div><!-- margin -->
    <!-- </main>
</div> -->

<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li><a href="index.html">Home</a></li>
                <li>
                    <a href="category.html">Categories</a>
                    <ul>
                        <li><a href="category.html">Full Width Banner</a></li>
                        <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                        <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                        <li><a href="category.html">Left Sidebar</a></li>
                        <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                        <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                        <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                        <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                        <li><a href="#">Product List Item Types</a></li>
                        <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
                        <li><a href="category.html">3 Columns Products</a></li>
                        <li><a href="category-4col.html">4 Columns Products</a></li>
                        <li><a href="category-5col.html">5 Columns Products</a></li>
                        <li><a href="category-6col.html">6 Columns Products</a></li>
                        <li><a href="category-7col.html">7 Columns Products</a></li>
                        <li><a href="category-8col.html">8 Columns Products</a></li>
                    </ul>
                </li>
                <li>
                    <a href="product.html">Products</a>
                    <ul>
                        <li>
                            <a href="#">Variations</a>
                            <ul>
                                <li><a href="product.html">Horizontal Thumbnails</a></li>
                                <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                <li><a href="product.html">Inner Zoom</a></li>
                                <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Variations</a>
                            <ul>
                                <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                <li><a href="product-simple.html">Simple Product</a></li>
                                <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Layout Types</a>
                            <ul>
                                <li><a href="product.html">Default Layout</a></li>
                                <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                <li><a href="product-full-width.html">Full Width Layout</a></li>
                                <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                    <ul>
                        <li><a href="cart.html">Shopping Cart</a></li>
                        <li>
                            <a href="#">Checkout</a>
                            <ul>
                                <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                <li><a href="checkout-review.html">Checkout Review</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="#" class="login-link">Login</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                    </ul>
                </li>
                <li><a href="blog.html">Blog</a>
                    <ul>
                        <li><a href="single.html">Blog Post</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="#">Special Offer!<span class="tip tip-hot">Hot!</span></a></li>
                <li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
            </ul>
        </nav><!-- End .mobile-nav -->

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
            <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->
<!-- .noUi-state-drag *{cursor:inherit!important} -->