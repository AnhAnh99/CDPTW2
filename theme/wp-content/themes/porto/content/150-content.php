<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-150">
<div class="col-lg-4">
    <div class="cart-summary">
        <h3>Summary</h3>

        <h4>
            <a data-toggle="collapse" href="#total-estimate-section" class="collapsed" role="button"
                aria-expanded="false" aria-controls="total-estimate-section">Estimate Shipping and Tax</a>
        </h4>

        <div class="collapse" id="total-estimate-section">
            <form action="#">
                <div class="form-group form-group-sm">
                    <label>Country</label>
                    <div class="select-custom">
                        <select class="form-control form-control-sm">
                            <option value="USA">United States</option>
                            <option value="Turkey">Turkey</option>
                            <option value="China">China</option>
                            <option value="Germany">Germany</option>
                        </select>
                    </div><!-- End .select-custom -->
                </div><!-- End .form-group -->

                <div class="form-group form-group-sm">
                    <label>State/Province</label>
                    <div class="select-custom">
                        <select class="form-control form-control-sm">
                            <option value="CA">California</option>
                            <option value="TX">Texas</option>
                        </select>
                    </div><!-- End .select-custom -->
                </div><!-- End .form-group -->

                <div class="form-group form-group-sm">
                    <label>Zip/Postal Code</label>
                    <input type="text" class="form-control form-control-sm">
                </div><!-- End .form-group -->

                <div class="form-group form-group-custom-control">
                    <label>Flat Way</label>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="flat-rate">
                        <label class="custom-control-label" for="flat-rate">Fixed $5.00</label>
                    </div><!-- End .custom-checkbox -->
                </div><!-- End .form-group -->

                <div class="form-group form-group-custom-control">
                    <label>Best Rate</label>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="best-rate">
                        <label class="custom-control-label" for="best-rate">Table Rate $15.00</label>
                    </div><!-- End .custom-checkbox -->
                </div><!-- End .form-group -->
            </form>
        </div><!-- End #total-estimate-section -->

        <table class="table table-totals">
            <tbody>
                <tr>
                    <td>Subtotal</td>
                    <td>$17.90</td>
                </tr>

                <tr>
                    <td>Tax</td>
                    <td>$0.00</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>Order Total</td>
                    <td>$17.90</td>
                </tr>
            </tfoot>
        </table>

        <div class="checkout-methods">
            <a href="checkout-shipping.html" class="btn btn-block btn-sm btn-primary">Go to Checkout</a>
            <a href="#" class="btn btn-link btn-block">Check Out with Multiple Addresses</a>
        </div><!-- End .checkout-methods -->
    </div><!-- End .cart-summary -->
</div><!-- End .col-lg-4 -->

</div>