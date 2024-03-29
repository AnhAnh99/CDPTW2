<div class="type-113">
    <div class="col-lg-8 order-lg-first">
        <div class="checkout-payment">
            <h2 class="step-title">Payment Method:</h2>

            <h4>Check / Money order</h4>
            
            <div class="form-group-custom-control">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="change-bill-address" value="1">
                    <label class="custom-control-label" for="change-bill-address">My billing and shipping address are the same</label>
                </div><!-- End .custom-checkbox -->
            </div><!-- End .form-group -->

            <div id="checkout-shipping-address">
                <address>
                    Desmond Mason <br>
                    123 Street Name, City, USA <br>
                    Los Angeles, California 03100 <br>
                    United States <br>
                    (123) 456-7890
                </address>
            </div><!-- End #checkout-shipping-address -->

            <div id="new-checkout-address" class="show">
                <form action="#">
                    <div class="form-group required-field">
                        <label>First Name </label>
                        <input type="text" class="form-control" required>
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label>Last Name </label>
                        <input type="text" class="form-control" required>
                    </div><!-- End .form-group -->

                    <div class="form-group">
                        <label>Company </label>
                        <input type="text" class="form-control">
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label>Street Address </label>
                        <input type="text" class="form-control" required>
                        <input type="text" class="form-control" required>
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label>City  </label>
                        <input type="text" class="form-control" required>
                    </div><!-- End .form-group -->

                    <div class="form-group">
                        <label>State/Province</label>
                        <div class="select-custom">
                            <select class="form-control">
                                <option value="CA">California</option>
                                <option value="TX">Texas</option>
                            </select>
                        </div><!-- End .select-custom -->
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label>Zip/Postal Code </label>
                        <input type="text" class="form-control" required>
                    </div><!-- End .form-group -->

                    <div class="form-group">
                        <label>Country</label>
                        <div class="select-custom">
                            <select class="form-control">
                                <option value="USA">United States</option>
                                <option value="Turkey">Turkey</option>
                                <option value="China">China</option>
                                <option value="Germany">Germany</option>
                            </select>
                        </div><!-- End .select-custom -->
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label>Phone Number </label>
                        <div class="form-control-tooltip">
                            <input type="tel" class="form-control" required>
                            <span class="input-tooltip" data-toggle="tooltip" title="For delivery questions." data-placement="right"><i class="icon-question-circle"></i></span>
                        </div><!-- End .form-control-tooltip -->
                    </div><!-- End .form-group -->

                    <div class="form-group-custom-control">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="address-save">
                            <label class="custom-control-label" for="address-save">Save in Address book</label>
                        </div><!-- End .custom-checkbox -->
                    </div><!-- End .form-group -->
                </form>
            </div><!-- End #new-checkout-address -->

            <div class="clearfix">
                <a href="#" class="btn btn-primary float-right">Place Order</a>
            </div><!-- End .clearfix -->
        </div><!-- End .checkout-payment -->

        <div class="checkout-discount">
            <h4>
                <a data-toggle="collapse" href="#checkout-discount-section" class="collapsed" role="button" aria-expanded="false" aria-controls="checkout-discount-section">Apply Discount Code</a>
            </h4>

            <div class="collapse" id="checkout-discount-section">
                <form action="#">
                    <input type="text" class="form-control form-control-sm" placeholder="Enter discount code"  required>
                    <button class="btn btn-sm btn-outline-secondary" type="submit">Apply Discount</button>
                </form>
            </div><!-- End .collapse -->
        </div><!-- End .checkout-discount -->
    </div><!-- End .col-lg-8 -->
</div>