<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-336">
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table-container">
                    <table class="table table-cart">
                        <thead>
                            <tr>
                                <th class="product-col">Product</th>
                                <th class="price-col">Price</th>
                                <th class="qty-col">Qty</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="product-row">
                                <td class="product-col">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="images/products/product-4.jpg" alt="product">
                                        </a>
                                    </figure>
                                    <h2 class="product-title">
                                        <a href="product.html">Black Slippers</a>
                                    </h2>
                                </td>
                                <td>$17.90</td>
                                <td>
                                    <input class="vertical-quantity form-control" type="text">
                                </td>
                                <td>$17.90</td>
                            </tr>
                            <tr class="product-action-row">
                                <td colspan="4" class="clearfix">
                                    <div class="float-left">
                                        <a href="#" class="btn-move">Move to Wishlist</a>
                                    </div><!-- End .float-left -->

                                    <div class="float-right">
                                        <a href="#" title="Edit product" class="btn-edit"><span
                                                class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                                        <a href="#" title="Remove product" class="btn-remove"><span
                                                class="sr-only">Remove</span></a>
                                    </div><!-- End .float-right -->
                                </td>
                            </tr>

                            <tr class="product-row">
                                <td class="product-col">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="images/products/product-3.jpg" alt="product">
                                        </a>
                                    </figure>
                                    <h2 class="product-title">
                                        <a href="product.html">Brown Slippers</a>
                                    </h2>
                                </td>
                                <td>$12.90</td>
                                <td>
                                    <input class="vertical-quantity form-control" type="text">
                                </td>
                                <td>$12.90</td>
                            </tr>
                            <tr class="product-action-row">
                                <td colspan="4" class="clearfix">
                                    <div class="float-left">
                                        <a href="#" class="btn-move">Move to Wishlist</a>
                                    </div><!-- End .float-left -->

                                    <div class="float-right">
                                        <a href="#" title="Edit product" class="btn-edit"><span
                                                class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                                        <a href="#" title="Remove product" class="btn-remove"><span
                                                class="sr-only">Remove</span></a>
                                    </div><!-- End .float-right -->
                                </td>
                            </tr>
                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="4" class="clearfix">
                                    <div class="float-left">
                                        <a href="category.html" class="btn btn-outline-secondary">Continue Shopping</a>
                                    </div><!-- End .float-left -->

                                    <div class="float-right btn-cart">
                                        <a href="#" class="btn btn-outline-secondary btn-clear-cart">Clear Shopping
                                            Cart</a>
                                        <a href="#" class="btn btn-outline-secondary btn-update-cart">Update Shopping
                                            Cart</a>
                                    </div><!-- End .float-right -->
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- End .cart-table-container -->

                <div class="cart-discount">
                    <h4>Apply Discount Code</h4>
                    <form action="#">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Enter discount code"
                                required>
                            <div class="input-group-append">
                                <button class="btn btn-sm btn-primary" type="submit">Apply Discount</button>
                            </div>
                        </div><!-- End .input-group -->
                    </form>
                </div><!-- End .cart-discount -->
            </div><!-- End .col-lg-8 -->

            
        </div><!-- End .row -->
    </div><!-- End .container -->

</main><!-- End .main -->
</div>