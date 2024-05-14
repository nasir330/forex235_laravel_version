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
                            <div class="col-md-6">
                                <span>Chose a method</span>
                                <h3> <i class="fa-duotone fa-arrow-progress"></i></h3>
                                <p>Email or 2FA Authenticator App</p>
                            </div>
                            <div class="col-md-6 mt-3">
                                <h4>Choose a method for the 2 Factor Authentication</h4>
                                <form action="{{route('two.fa.email')}}">
                                    <div class="input-group mb-3">
                                        <select name="" id="" class="from-select form-control">
                                            <option value="">-- Select an option --</option>
                                            <option value="tfa_app">2FA Authenticator App</option>
                                            <option value="tfa_email">2FA Email</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <button class="btn btn-warning">Next</button>
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
