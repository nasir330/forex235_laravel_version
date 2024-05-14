<x-header />

<body>
    <!--Top Nav-->
    @include('pages.clientDashboard.topNav')


    <section id="client_dashboard" class="d-flex justify-content">
        <!--sidenave-->
        @include('pages.clientDashboard.sidenav')

        <!--main content-->
        <div id="client_dashboard_content">
            <div class="row">
                <div class="col">
                    <h2 class="text-white mb-3">Settings</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-between">
                <div class="col-md-12">
                    <ul class="nav nav-tabs" id="myTabs">
                        <li class="nav-item">
                            <a class="myLink active" id="real-tab" data-bs-toggle="tab" href="#profile">
                                Profile Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="myLink" id="demo-tab" data-bs-toggle="tab" href="#security">
                                Security Settings
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content mt-2 justify-content-between">
                <div class="tab-pane fade show active" id="profile">
                    <div class="card">
                        <div class="card-header">
                            <h4>Account</h4>
                        </div>
                        <div class="card-body text-white">
                            <div class="row">
                                <div class="col-md-6">
                                    <span>Verification Status</span> <br>
                                    <h3 class="text-success"> Fully verified</h3>
                                    3/3 steps complete
                                </div>
                                <div class="col-md-6">
                                    <span>Deposit Limit</span> <br>
                                    <h3 class="text-success"> Unlimited</h3>
                                    <p>Depending on payment method</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Verification steps</h4>
                        </div>
                        <div class="card-body text-white">
                            <ul>
                                <li>
                                    <a class="form-control" data-bs-toggle="collapse" href="#personalDetails"
                                        role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <i class="mx-2 fa-duotone fa-circle-check"></i>
                                        Verificaton Personal Details
                                        <i class="mx-4 fa-regular fa-chevron-down"></i>
                                    </a>
                                    <div class="collapse" id="personalDetails">
                                        <h6 class="mt-3 mx-4 mb-0"> Confirmed Personal Details</h6>
                                        <span class="collapse-item">
                                            <i class="fa-regular fa-envelope"></i> &nbsp;
                                            example@email.com
                                        </span>
                                        <span class="collapse-item">
                                            <i class="fa-regular fa-phone"></i> &nbsp;
                                            +880 1857-797647
                                        </span>
                                        <span class="collapse-item">
                                            <i class="fa-regular fa-file-lines"></i> &nbsp;
                                            Md. Nasirul Islam
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <a class="form-control" data-bs-toggle="collapse" href="#identity" role="button"
                                        aria-expanded="false" aria-controls="collapseExample">
                                        <i class="mx-2 fa-duotone fa-circle-check"></i>
                                        Identity Verification
                                        <i class="mx-4 fa-regular fa-chevron-down"></i>
                                    </a>
                                    <div class="collapse" id="identity">
                                        <h6 class="mt-3 mx-4 mb-0"> Verified Details</h6>
                                        <span class="collapse-item">
                                            <i class="fa-duotone fa-id-card"></i> &nbsp;
                                            Md. Nasirul Islam
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <a class="form-control" data-bs-toggle="collapse" href="#address" role="button"
                                        aria-expanded="false" aria-controls="collapseExample">
                                        <i class="mx-2 fa-duotone fa-circle-check"></i>
                                        Address Verification
                                        <i class="mx-4 fa-regular fa-chevron-down"></i>
                                    </a>
                                    <div class="collapse" id="address">
                                        <h6 class="mt-3 mx-4 mb-0"> Verified Address</h6>
                                        <span class="collapse-item">
                                            <i class="fa-duotone fa-location-dot"></i> &nbsp;
                                            Fultola, Bogra Sadar, Bogra
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="security">
                    <div class="card">
                        <div class="card-header">
                            <h4>Authorization</h4>
                        </div>
                        <div class="card-body text-white">
                            <div class="row">
                                <div class="col-md-6">
                                    <span>Client Login Password</span> <br>
                                    <strong class="mx-4"> <i class="fa-duotone fa-lock-keyhole"></i></strong>
                                    <p class="text-warning">Change Password of your client portal</p>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('settings.change.password')}}" class="btn client_dashboar-btn mt-4">
                                        <i class="fa-duotone fa-key"></i> &nbsp;
                                        Change Password
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Two-Factor Authentication</h4>
                        </div>
                        <div class="card-body text-white">
                            <div class="row">
                                <div class="col-md-6">
                                    <span>(2FA)</span> <br>
                                    <strong class="mx-4"> 
                                        <i class="fa-duotone fa-qrcode"></i>
                                    </strong>
                                    <p class="text-warning">Change Password of your client portal</p>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('two.fa')}}" class="btn client_dashboar-btn mt-4">
                                        <i class="fa-duotone fa-shield-halved"></i> &nbsp;
                                       Activate
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
