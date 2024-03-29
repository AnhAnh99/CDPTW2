<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-153">
<div class="page-wrapper">


    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </div><!-- End .container -->
        </nav>

        <div class="container">
            <ul class="checkout-progress-bar">
                <li class="active">
                    <span>Shipping</span>
                </li>
                <li>
                    <span>Review &amp; Payments</span>
                </li>
            </ul>
            <div class="row">
                <div class="col-lg-8">
                    <ul class="checkout-steps">
                        <li>
                            <h2 class="step-title">Shipping Address</h2>

                            <div class="shipping-step-addresses">
                                <div class="shipping-address-box active">
                                    <address>
                                        Desmond Mason <br>
                                        123 Street Name, City Name <br>
                                        Los Angeles, California 03100 <br>
                                        United States <br>
                                        (123) 456-7890 <br>
                                    </address>

                                    <div class="address-box-action clearfix">
                                        <a href="#" class="btn btn-sm btn-link">
                                            Edit
                                        </a>

                                        <a href="#" class="btn btn-sm btn-outline-secondary float-right">
                                            Ship Here
                                        </a>
                                    </div><!-- End .address-box-action -->
                                </div><!-- End .shipping-address-box -->
                                <div class="shipping-address-box">
                                    <address>
                                        Susan Mason <br>
                                        123 Street Name, City Name <br>
                                        Los Angeles, California 03100 <br>
                                        United States <br>
                                        (123) 789-6150 <br>
                                    </address>

                                    <div class="address-box-action clearfix">
                                        <a href="#" class="btn btn-sm btn-link">
                                            Edit
                                        </a>

                                        <a href="#" class="btn btn-sm btn-outline-secondary float-right">
                                            Ship Here
                                        </a>
                                    </div><!-- End .address-box-action -->
                                </div><!-- End .shipping-address-box -->
                            </div><!-- End .shipping-step-addresses -->
                            <a href="#" class="btn btn-sm btn-outline-secondary btn-new-address" data-toggle="modal"
                                data-target="#addressModal">+ New Address</a>
                        </li>
                        <li>
                            <div class="checkout-step-shipping">
                                <h2 class="step-title">Shipping Methods</h2>

                                <table class="table table-step-shipping">
                                    <tbody>
                                        <tr>
                                            <td><input type="radio" name="shipping-method" value="flat"></td>
                                            <td><strong>$20.00</strong></td>
                                            <td>Fixed</td>
                                            <td>Flat Rate</td>
                                        </tr>

                                        <tr>
                                            <td><input type="radio" name="shipping-method" value="best"></td>
                                            <td><strong>$15.00</strong></td>
                                            <td>Table Rate</td>
                                            <td>Best Way</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- End .checkout-step-shipping -->
                        </li>
                    </ul>
                </div><!-- End .col-lg-8 -->
            </div><!-- End .row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-steps-action">
                        <a href="checkout-review.html" class="btn btn-primary float-right">NEXT</a>
                    </div><!-- End .checkout-steps-action -->
                </div><!-- End .col-lg-8 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </main><!-- End .main -->


</div><!-- End .page-wrapper -->


<!-- Modal -->
<div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel"
    aria-hidden="true">
    <div class="modal-dialog dialog" role="document">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <h3 class="modal-title" id="addressModalLabel">Shipping Address</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><!-- End .modal-header -->

                <div class="modal-body">
                    <div class="form-group required-field">
                        <label>First Name </label>
                        <input type="text" class="form-control form-control-sm" required>
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label>Last Name </label>
                        <input type="text" class="form-control form-control-sm" required>
                    </div><!-- End .form-group -->

                    <div class="form-group">
                        <label>Company </label>
                        <input type="text" class="form-control form-control-sm">
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label>Street Address </label>
                        <input type="text" class="form-control form-control-sm" required>
                        <input type="text" class="form-control form-control-sm" required>
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label>City </label>
                        <input type="text" class="form-control form-control-sm" required>
                    </div><!-- End .form-group -->

                    <div class="form-group">
                        <label>State/Province</label>
                        <div class="select-custom">
                            <select class="form-control form-control-sm">
                                <option value="CA">California</option>
                                <option value="TX">Texas</option>
                            </select>
                        </div><!-- End .select-custom -->
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label>Zip/Postal Code </label>
                        <input type="text" class="form-control form-control-sm" required>
                    </div><!-- End .form-group -->

                    <div class="form-group">
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

                    <div class="form-group required-field">
                        <label>Phone Number </label>
                        <div class="form-control-tooltip">
                            <input type="tel" class="form-control form-control-sm" required>
                            <span class="input-tooltip" data-toggle="tooltip" title="For delivery questions."
                                data-placement="right"><i class="icon-question-circle"></i></span>
                        </div><!-- End .form-control-tooltip -->
                    </div><!-- End .form-group -->

                    <div class="form-group-custom-control">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="address-save">
                            <label class="custom-control-label" for="address-save">Save in Address book</label>
                        </div><!-- End .custom-checkbox -->
                    </div><!-- End .form-group -->
                </div><!-- End .modal-body -->

                <div class="modal-footer">
                    <button type="button" class="btn btn-link btn-sm cancel" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                </div><!-- End .modal-footer -->
            </form>
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
</div><!-- End .modal -->
</div>