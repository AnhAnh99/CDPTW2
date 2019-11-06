<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-343">
    <div class="container">
        <div class="page-wrapper">
            <div class="tab-pane" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                <div class="product-reviews-content">
                    <div class="collateral-box">
                        <ul>
                            <li>Be the first to review this product</li>
                        </ul>
                    </div><!-- End .collateral-box -->

                    <div class="add-product-review">
                        <h3 class="text-uppercase heading-text-color font-weight-semibold">WRITE YOUR OWN REVIEW</h3>
                        <p>How do you rate this product? *</p>

                        <form action="#">
                            <table class="ratings-table">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>1 star</th>
                                        <th>2 stars</th>
                                        <th>3 stars</th>
                                        <th>4 stars</th>
                                        <th>5 stars</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Quality</td>
                                        <td>
                                            <input type="radio" name="ratings[1]" id="Quality_1" value="1"
                                                class="radio">
                                        </td>
                                        <td>
                                            <input type="radio" name="ratings[1]" id="Quality_2" value="2"
                                                class="radio">
                                        </td>
                                        <td>
                                            <input type="radio" name="ratings[1]" id="Quality_3" value="3"
                                                class="radio">
                                        </td>
                                        <td>
                                            <input type="radio" name="ratings[1]" id="Quality_4" value="4"
                                                class="radio">
                                        </td>
                                        <td>
                                            <input type="radio" name="ratings[1]" id="Quality_5" value="5"
                                                class="radio">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Value</td>
                                        <td>
                                            <input type="radio" name="value[1]" id="Value_1" value="1" class="radio">
                                        </td>
                                        <td>
                                            <input type="radio" name="value[1]" id="Value_2" value="2" class="radio">
                                        </td>
                                        <td>
                                            <input type="radio" name="value[1]" id="Value_3" value="3" class="radio">
                                        </td>
                                        <td>
                                            <input type="radio" name="value[1]" id="Value_4" value="4" class="radio">
                                        </td>
                                        <td>
                                            <input type="radio" name="value[1]" id="Value_5" value="5" class="radio">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td>
                                            <input type="radio" name="price[1]" id="Price_1" value="1" class="radio">
                                        </td>
                                        <td>
                                            <input type="radio" name="price[1]" id="Price_2" value="2" class="radio">
                                        </td>
                                        <td>
                                            <input type="radio" name="price[1]" id="Price_3" value="3" class="radio">
                                        </td>
                                        <td>
                                            <input type="radio" name="price[1]" id="Price_4" value="4" class="radio">
                                        </td>
                                        <td>
                                            <input type="radio" name="price[1]" id="Price_5" value="5" class="radio">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="form-group">
                                <label>Nickname <span class="required">*</span></label>
                                <input type="text" class="form-control form-control-sm" required>
                            </div><!-- End .form-group -->
                            <div class="form-group">
                                <label>Summary of Your Review <span class="required">*</span></label>
                                <input type="text" class="form-control form-control-sm" required>
                            </div><!-- End .form-group -->
                            <div class="form-group mb-2">
                                <label>Review <span class="required">*</span></label>
                                <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                            </div><!-- End .form-group -->

                            <input type="submit" class="btn btn-primary" value="Submit Review">
                        </form>
                    </div><!-- End .add-product-review -->
                </div><!-- End .product-reviews-content -->
            </div><!-- End .tab-pane -->

        </div><!-- End .page-wrapper -->
    </div>
</div>