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
                <div class="col text-white">
                    <h2 class="mb-3">Create New Account</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="card account-card col-md-4">
                   <form action="{{route('trading.account.create')}}">
                    <div class="card-header mb-1 text-center">
                        <h2 class="text-white">Standard</h2>
                        <p>
                            Most Popular! <br> Best suits for All Types of Traders
                        </p>
                    </div>
                    <div class="card-body text-white">
                        <div class="row card-content">
                            <div class="col">Minimum Deposit</div>
                            <div class="col d-flex justify-content-end">$100 USD</div>
                        </div>
                        <div class="row card-content">
                            <div class="col">Spread Type</div>
                            <div class="col d-flex justify-content-end">Floating</div>
                        </div>
                        <div class="row card-content">
                            <div class="col">Spread</div>
                            <div class="col d-flex justify-content-end">Low</div>
                        </div>
                        <div class="row card-content">
                            <div class="col">Commission</div>
                            <div class="col d-flex justify-content-end">$7.5 USD</div>
                        </div>
                        <div class="row card-content">
                            <div class="col">Leverage</div>
                            <div class="col d-flex justify-content-end">Up to 1:400</div>
                        </div>
                        <div class="row card-content">
                           <button class="btn btn-warning">Continue</button>
                        </div>
                    </div>
                   </form>
                </div>
                <div class="card account-card col-md-4">
                   <form action="{{route('trading.account.create')}}">
                    <div class="card-header mb-1 text-center">
                        <h2 class="text-white">Premier</h2>
                        <p>
                           Low Commission and Low Spread with both instant and market execution
                        </p>
                    </div>
                    <div class="card-body text-white">
                        <div class="row card-content">
                            <div class="col">Minimum Deposit</div>
                            <div class="col d-flex justify-content-end">$1000 USD</div>
                        </div>
                        <div class="row card-content">
                            <div class="col">Spread Type</div>
                            <div class="col d-flex justify-content-end">Floating</div>
                        </div>
                        <div class="row card-content">
                            <div class="col">Spread</div>
                            <div class="col d-flex justify-content-end">Low</div>
                        </div>
                        <div class="row card-content">
                            <div class="col">Commission</div>
                            <div class="col d-flex justify-content-end">$5 USD</div>
                        </div>
                        <div class="row card-content">
                            <div class="col">Leverage</div>
                            <div class="col d-flex justify-content-end">Up to 1:400</div>
                        </div>
                        <div class="row card-content">
                           <button class="btn btn-warning">Continue</button>
                        </div>
                    </div>
                   </form>
                </div>
                <div class="card account-card col-md-4">
                   <form<form action="{{route('trading.account.create')}}">
                    <div class="card-header mb-1 text-center">
                        <h2 class="text-white">VIP</h2>
                        <p>
                          Commission free and Low spread! <br> Best match for professional traders
                        </p>
                    </div>
                    <div class="card-body text-white">
                        <div class="row card-content">
                            <div class="col">Minimum Deposit</div>
                            <div class="col d-flex justify-content-end">$100 USD</div>
                        </div>
                        <div class="row card-content">
                            <div class="col">Spread Type</div>
                            <div class="col d-flex justify-content-end">Floating</div>
                        </div>
                        <div class="row card-content">
                            <div class="col">Spread</div>
                            <div class="col d-flex justify-content-end">Low</div>
                        </div>
                        <div class="row card-content">
                            <div class="col">Commission</div>
                            <div class="col d-flex justify-content-end">Free</div>
                        </div>
                        <div class="row card-content">
                            <div class="col">Leverage</div>
                            <div class="col d-flex justify-content-end">Up to 1:400</div>
                        </div>
                        <div class="row card-content">
                           <button class="btn btn-warning">Continue</button>
                        </div>
                    </div>
                   </form>
                </div>
            </div>



        </div>
    </section>

    <x-footer />
