<x-header />

<body>
    <x-octa-menu />
    {{-- <x-exness-menu /> --}}
    {{-- <x-menu /> --}}



    <!-- AI Robot package  section start  -->
    <div class="container">
        <div style="border:1px solid black; margin-top:30px;">
            <div class="row bg-dark text-white">
                <h2 class="text-uppercase text-center mt-3 py-3">Checkout</h2>
            </div>
            <!--Checkout detils start-->
            <div class="row">
                <div class="col-md-6 card mt-3 px-4">
                    <div class="card card-header">
                        <h5 class="text-capitalize">Billing Details</h5>
                    </div>
                    <div class="card-body">
                        <form class="" action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label mb-1">First Name</label>
                                    <strong class="text-danger">*</strong>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="firstName"
                                            placeholder="Enter first name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label mb-1">Last Name</label>
                                    <strong class="text-danger">*</strong>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="lastName"
                                            placeholder="Enter last name" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="state" class="form-label mb-1">State</label>
                                    <strong class="text-danger">*</strong>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="state"
                                            placeholder="Enter State" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="country" class="form-label mb-1">Country</label>
                                    <strong class="text-danger">*</strong>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="country"
                                            placeholder="Enter Country" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label mb-1">Email</label>
                                    <strong class="text-danger">*</strong>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Enter email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label mb-1">Phone</label>
                                    <strong class="text-danger">*</strong>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" id="phone"
                                            placeholder="Enter phone number" required>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 mt-3 px-4">
                    <img style="width:100%; height:auto;" class="img-fluid" src="Assets/images/robotPayment.webp">
                </div>
            </div>
            <!--Checkout detils end-->
            <div class="row mb-3">
                <div class="col-md-12 card px-4">
                    <div class="col-md-6 card card-header">
                        <h3>Order detils</h3>
                    </div>
                    <div class="col-md-12 tableItems">
                        <table class="table table-secondary table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Product Details</th>
                                    <th>Rate</th>
                                    <th>Quantity</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width:40%;">TRADING ROBOT FOREX <span class="text-warning">*</span>
                                        <strong>1</strong></td>
                                    <td>$499.00 </td>
                                    <td>1 </td>
                                    <td>$499.00 </td>
                                </tr>
                                <tr>
                                    <td colspan="3" style="width:40%; text-align:right">Subtotal</td>
                                    <td>$499.00 </td>
                                </tr>
                                <tr>
                                    <td colspan="3" style="width:40%; text-align:right">Total</td>
                                    <td><strong>$499.00</strong> </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <!--payment methdo section start-->
                @include('pages.checkout.paymentMethod')
                <!--payment methdo section end-->
            </div>
        </div>

    </div>
    <!-- AI Robot package section end  -->

    <!-- footer start -->
    @include('templates.pagefooter')
    <!-- footer end -->

    <!-- modal start -->
    <section>
        @include('templates.modal.loginmodal')
        @include('templates.modal.registermodal')
    </section>
    <!-- modal end -->

    <x-footer />
