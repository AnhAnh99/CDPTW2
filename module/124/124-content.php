 <?php
 $url_host = 'http://'.$_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
 ?>

<div class="type-124">
    <div class="page-wrapper">
        <main class="main sidebar-opened">
            <div class="banner banner-cat" style="background-image: url('images/banners/banner-top.jpg');">
                <div class="banner-content container">
                    <h2 class="banner-subtitle">check out over <span>200+</span></h2>
                    <h1 class="banner-title">
                        INCREDIBLE deals
                    </h1>
                    <a href="#" class="btn btn-dark">Shop Now</a>
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->

            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb mt-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="category.html">Categories</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Default</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container products-body">
                <nav class="toolbox horizontal-filter filter-sorts">
                    <div class="filter-toggle">
                        <span>Filters:</span>
                        <a href=#>&nbsp;</a>
                    </div>

                    <div class="sidebar-overlay"></div>
                    <aside class="toolbox-left sidebar-shop mobile-sidebar">
                        <div class="toolbox-item toolbox-sort select-custom">
                            <a class="sort-menu-trigger" href="#">Size</a>
                            <ul class="sort-list">
                                <li>Extra Large</li>
                                <li>Large</li>
                                <li>Medium</li>
                                <li>Small</li>
                            </ul>
                        </div><!-- End .toolbox-item -->

                        <div class="toolbox-item toolbox-sort select-custom">
                            <a class="sort-menu-trigger" href="#">Color</a>
                            <ul class="sort-list">
                                <li>Black</li>
                                <li>Blue</li>
                                <li>Brown</li>
                                <li>Green</li>
                                <li>Indigo</li>
                                <li>Light Blue</li>
                                <li>Red</li>
                                <li>Yellow</li>
                            </ul>
                        </div><!-- End .toolbox-item -->

                        <div class="toolbox-item toolbox-sort price-sort select-custom">
                            <a class="sort-menu-trigger" href="#">Price</a>
                            <form class="filter-price-form">
                                <div>Price: <span>$55.00</span> — <span>$111.00</span></div>
                                <label>Min price</label>
                                <input class="input-price" name="min_price"/>
                                <label>Max price</label>
                                <input class="input-price" name="max_price"/>
                                <div class="filter-price-action mt-0">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </form>
                        </div><!-- End .toolbox-item -->

                    </aside><!-- End .toolbox-left -->

                    <div class="toolbox-item toolbox-sort">
                        <div class="select-custom">
                            <select name="orderby" class="form-control">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </div><!-- End .select-custom -->
                    </div><!-- End .toolbox-item -->

                    <div class="toolbox-item ml-lg-auto">
                        <div class="toolbox-item toolbox-show">
                            <label>Showing 1–9 of 60 results</label>
                        </div><!-- End .toolbox-item -->

                        <div class="layout-modes">
                            <a href="category.html" class="layout-btn active" title="Grid">
                                <i class="icon-mode-grid"></i>
                            </a>
                            <a href="category-list.html" class="layout-btn" title="List">
                                <i class="icon-mode-list"></i>
                            </a>
                        </div><!-- End .layout-modes -->
                    </div>
                </nav>

                <div class="row row-sm">
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="images/products/product-1.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview">Quickview</a>
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
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="images/products/product-2.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview">Quickview</a>
                                <span class="product-label label-sale">-20%</span>
                                <span class="product-label label-hot">New</span>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Zippered Jacket</a>
                                </h2>
                                <div class="price-box">
                                    <span class="old-price">$60.00</span>
                                    <span class="product-price">$48.00</span>
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
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="images/products/product-3.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview">Quickview</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:60%"></span><!-- End .ratings -->
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
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="images/products/product-4.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview">Quickview</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:40%"></span><!-- End .ratings -->
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
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="images/products/product-5.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview">Quickview</a>
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
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="images/products/product-6.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview">Quickview</a>
                                <span class="product-label label-hot">Hot</span>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Cotton Sweatshirt</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$67.00</span>
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
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="images/products/product-7.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview">Quickview</a>
                                <span class="product-label label-hot">Hot</span>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Classic Glasses</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$299.00</span>
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
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="images/products/product-8.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview">Quickview</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Leather Shoes Brown</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$58.00</span>
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
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="images/products/product-9.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview">Quickview</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:70%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Shoulder Bag</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$159.00</span>
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
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="images/products/product-10.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview">Quickview</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Polo White</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$63.00</span>
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
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="images/products/product-11.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview">Quickview</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Blue Jacket</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$13.99</span>
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
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="images/products/product-12.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview">Quickview</a>
                                <span class="product-label label-hot">Hot</span>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Baseball Cap</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$4.99</span>
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
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->

                <nav class="toolbox toolbox-pagination">
                    <div class="toolbox-item toolbox-show">
                        <label>Showing 1–9 of 60 results</label>
                    </div><!-- End .toolbox-item -->

                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><span>...</span></li>
                        <li class="page-item"><a class="page-link" href="#">15</a></li>
                        <li class="page-item">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div><!-- End .container -->

            <div class="mb-5"></div><!-- margin -->
        </main><!-- End .main -->
    </div><!-- End .page-wrapper -->

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
    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>
</div>