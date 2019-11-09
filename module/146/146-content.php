<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-146">
<div class="featured-section">
    <div class="container">
        <h2 class="carousel-title">Featured Products</h2>

        <div class="featured-products owl-carousel owl-theme owl-dots-top">
            <div class="product">
                <figure class="product-image-container">
                    <a href="product.html" class="product-image">
                        <img src="images/products/product-1.jpg" alt="product">
                    </a>
                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                </figure>
                <div class="product-details">
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                        </div><!-- End .product-ratings -->
                    </div><!-- End .product-container -->
                    <h2 class="product-title">
                        <a href="product.html">Felt Hat</a>
                    </h2>
                    <div class="price-box">
                        <span class="product-price">$39.00</span>
                    </div><!-- End .price-box -->

                    <div class="product-action">
                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                            <span>Add to Wishlist</span>
                        </a>

                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                            <span>Add to Cart</span>
                        </a>

                        <a href="#" class="paction add-compare" title="Add to Compare">
                            <span>Add to Compare</span>
                        </a>
                    </div><!-- End .product-action -->
                </div><!-- End .product-details -->
            </div><!-- End .product -->

            <div class="product">
                <figure class="product-image-container">
                    <a href="product.html" class="product-image">
                        <img src="images/products/product-2.jpg" alt="product">
                    </a>
                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                </figure>
                <div class="product-details">
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                        </div><!-- End .product-ratings -->
                    </div><!-- End .product-container -->
                    <h2 class="product-title">
                        <a href="product.html">Zippered Jacket</a>
                    </h2>
                    <div class="price-box">
                        <span class="product-price">$55.00</span>
                    </div><!-- End .price-box -->

                    <div class="product-action">
                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                            <span>Add to Wishlist</span>
                        </a>

                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                            <span>Add to Cart</span>
                        </a>

                        <a href="#" class="paction add-compare" title="Add to Compare">
                            <span>Add to Compare</span>
                        </a>
                    </div><!-- End .product-action -->
                </div><!-- End .product-details -->
            </div><!-- End .product -->

            <div class="product">
                <figure class="product-image-container">
                    <a href="product.html" class="product-image">
                        <img src="images/products/product-3.jpg" alt="product">
                    </a>
                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                </figure>
                <div class="product-details">
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                        </div><!-- End .product-ratings -->
                    </div><!-- End .product-container -->
                    <h2 class="product-title">
                        <a href="product.html">Brown Slippers</a>
                    </h2>
                    <div class="price-box">
                        <span class="product-price">$12.90</span>
                    </div><!-- End .price-box -->

                    <div class="product-action">
                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                            <span>Add to Wishlist</span>
                        </a>

                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                            <span>Add to Cart</span>
                        </a>

                        <a href="#" class="paction add-compare" title="Add to Compare">
                            <span>Add to Compare</span>
                        </a>
                    </div><!-- End .product-action -->
                </div><!-- End .product-details -->
            </div><!-- End .product -->

            <div class="product">
                <figure class="product-image-container">
                    <a href="product.html" class="product-image">
                        <img src="images/products/product-4.jpg" alt="product">
                    </a>
                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                </figure>
                <div class="product-details">
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                        </div><!-- End .product-ratings -->
                    </div><!-- End .product-container -->
                    <h2 class="product-title">
                        <a href="product.html">Black Slippers</a>
                    </h2>
                    <div class="price-box">
                        <span class="product-price">$17.90</span>
                    </div><!-- End .price-box -->

                    <div class="product-action">
                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                            <span>Add to Wishlist</span>
                        </a>

                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                            <span>Add to Cart</span>
                        </a>

                        <a href="#" class="paction add-compare" title="Add to Compare">
                            <span>Add to Compare</span>
                        </a>
                    </div><!-- End .product-action -->
                </div><!-- End .product-details -->
            </div><!-- End .product -->

            <div class="product">
                <figure class="product-image-container">
                    <a href="product.html" class="product-image">
                        <img src="images/products/product-5.jpg" alt="product">
                    </a>
                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                </figure>
                <div class="product-details">
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:50%"></span><!-- End .ratings -->
                        </div><!-- End .product-ratings -->
                    </div><!-- End .product-container -->
                    <h2 class="product-title">
                        <a href="product.html">Dean Cap Grey</a>
                    </h2>
                    <div class="price-box">
                        <span class="product-price">$79.00</span>
                    </div><!-- End .price-box -->

                    <div class="product-action">
                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                            <span>Add to Wishlist</span>
                        </a>

                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                            <span>Add to Cart</span>
                        </a>

                        <a href="#" class="paction add-compare" title="Add to Compare">
                            <span>Add to Compare</span>
                        </a>
                    </div><!-- End .product-action -->
                </div><!-- End .product-details -->
            </div><!-- End .product -->
        </div><!-- End .featured-proucts -->
    </div><!-- End .container -->
</div><!-- End .featured-section -->
</div>