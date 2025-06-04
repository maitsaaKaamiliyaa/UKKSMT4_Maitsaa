@extends('backend.master')
@section('content')
    <!-- App hero header starts -->
    <div class="app-hero-header">
        <h5 class="fw-light">Welcome Bradford,</h5>
        <h3 class="fw-light mb-5">
            <span>Home</span> / <span>Create Invoice</span>
        </h3>
    </div>
    <!-- App Hero header ends -->

    <!-- App body starts -->
    <div class="app-body">

        <!-- Row start -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Invoice - #MER009985</h5>
                    </div>
                    <div class="card-body">
                        <!-- Row start -->
                        <div class="row">
                            <div class="col-sm-3 col-12">
                                <img src="assets/images/logo.svg" alt="Bootstrap Admin Dashboard" class="img-fluid" />
                            </div>
                            <div class="col-sm-9 col-12">
                                <p class="text-end m-0">
                                    Nyke Llc, 9990 St. <br />
                                    5000 Church Street, Suite 550<br />
                                    Huntsville, Alabama, 99990
                                </p>
                            </div>
                        </div>
                        <!-- Row end -->

                        <!-- Row start -->
                        <div class="row">
                            <div class="col-sm-12 col-12">
                                <div class="d-flex justify-content-between my-4">
                                    <p class="m-0">
                                        Alice Williams,<br />
                                        7500 Oakdale Ave,<br />
                                        San Francisco, California(CA), 94500
                                    </p>

                                    <div class="text-end">
                                        <p class="m-0">
                                            Invoice - <span class="text-danger">#010</span>
                                        </p>
                                        <p class="m-0">January 20th 2023</p>
                                        <span class="badge rounded-pill bg-danger">Overdue</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->

                        <!-- Row start -->
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Items</th>
                                                <th>Product ID</th>
                                                <th>Hours</th>
                                                <th>Amount (Net)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h6>Bootstrap Admin Template</h6>
                                                    <p>
                                                        Create quality mockups and prototypes and
                                                        Design mobile based features.
                                                    </p>
                                                </td>
                                                <td>
                                                    <h6>#651</h6>
                                                </td>
                                                <td>
                                                    <h6>40</h6>
                                                </td>
                                                <td>
                                                    <h6>$450.00</h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Admin Themes</h6>
                                                    <p>
                                                        Best Bootstrap Admin Dashboards and Admin
                                                        Themes
                                                    </p>
                                                </td>
                                                <td>
                                                    <h6>#429</h6>
                                                </td>
                                                <td>
                                                    <h6>60</h6>
                                                </td>
                                                <td>
                                                    <h6>$550.00</h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">&nbsp;</td>
                                                <td>
                                                    <p>Subtotal</p>
                                                    <p>Discount</p>
                                                    <p>VAT</p>
                                                    <h5 class="mt-4 text-blue">Total USD</h5>
                                                </td>
                                                <td>
                                                    <p>$1000.00</p>
                                                    <p>$10.00</p>
                                                    <p>$5.00</p>
                                                    <h5 class="mt-4 text-blue">$1015.00</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <h6 class="text-red">NOTES</h6>
                                                    <small>
                                                        We really appreciate your business and if
                                                        there’s anything else we can do, please let
                                                        us know! Also, should you need us to add VAT
                                                        or anything else to this order, it’s super
                                                        easy since this is a template, so just ask!
                                                    </small>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->

                        <!-- Row start -->
                        <div class="row">
                            <div class="col-sm-12 col-12">
                                <div class="text-end">
                                    <button class="btn btn-outline-success">
                                        Download
                                    </button>
                                    <button class="btn btn-outline-secondary ms-1">
                                        Print
                                    </button>
                                    <button class="btn btn-primary ms-1">Pay Now</button>
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- App body ends -->
@endsection