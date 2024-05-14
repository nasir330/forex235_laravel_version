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
                <div class="card">
                    <div class="card-header mb-1">
                        <h2 class="text-white">Change 2FA Settings</h2>
                    </div>
                    <div class="card-body text-white">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <span>Chose a method</span>
                                    <h3> <i class="fa-duotone fa-arrow-progress"></i></h3>
                                    Email or 2FA Authenticator App
                                </div>
                                <div>
                                    <span>Scan the QR Code</span>
                                    <h3> <i class="fa-duotone fa-qrcode"></i></h3>
                                    <p>Scan the QR Code with your 2FA App</p>
                                </div>
                            </div>
                            <div class="col-md-7 mt-3">
                                <h4>Scan the below QR code with your Authenticator app:</h4>
                                <form action="{{route('two.fa.app.code')}}">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <img class="img-fluid" src="Assets/images/clientDashboard/two-fa.jpg" alt="two factor auth">
                                        </div>
                                        <div class="col-md-6">
                                            Or enter the setup key manually
                                            <h5>SV5KQ3GE4MV3NYNXUA6GRJ7QPNQDWQXK</h5>
                                        </div>
                                    </div>
                                    <div class="row mb-3 d-flex justify-content-between">
                                        <div class="col">
                                            <a href="{{route('two.fa')}}" class="btn btn-secondary">Previous</a>
                                        </div>
                                        <div class="col">
                                            <button class="btn btn-warning">Next</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
