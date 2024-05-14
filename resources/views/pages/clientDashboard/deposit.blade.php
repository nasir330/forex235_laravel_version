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
                    <h2 class="mb-3">Deposit</h2>
                    <h5>All Payment Methods</h5>
                </div>
            </div>

            <div class="row mb-3 d-flex justify-content-between">
                <div class="col-md-6 text-white">
                    <div class="logo">
                        <a href="{{route('deposit.checkout')}}" target="_blank">
                            <img class="img-fluid" src="Assets/images/Binance Pay.webp" alt="Binance Pay Funding">
                        </a>
                    </div>
                    <div class="description">
                        <ul>
                            <li> Processing Time <strong>Instant - 24 Hrs</strong> </li>
                            <li> Fee <strong>0 %</strong> </li>
                            <li> Limits <strong>100 - 8,000,000 USD</strong> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 text-white">
                    <div class="logo">
                        <a href="#" target="_blank">
                            <img class="img-fluid" src="Assets/images/paypal.webp" alt="Paypal Funding">
                        </a>
                    </div>
                    <div class="description">
                        <ul>
                            <li> Processing Time <strong>Instant - 24 Hrs</strong> </li>
                            <li> Fee <strong>0 %</strong> </li>
                            <li> Limits <strong>100 - 50,000 USD</strong> </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row mb-3 d-flex justify-content-between">                
                <div class="col-md-6 text-white">
                    <div class="logo">
                        <a href="#" target="_blank">
                            <img class="img-fluid" src="Assets/images/skrill payment.webp" alt="Skrill Payment">
                        </a>
                    </div>
                    <div class="description">
                        <ul>
                            <li> Processing Time <strong>Instant - 24 Hrs</strong> </li>
                            <li> Fee <strong>0 %</strong> </li>
                            <li> Limits <strong>100 - 20,000 USD</strong> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 text-white">
                    <div class="logo">
                        <a href="#" target="_blank">
                            <img class="img-fluid" src="Assets/images/neteller Payment.webp" alt="Forex funding Neteller">
                        </a>
                    </div>
                    <div class="description">
                        <ul>
                            <li> Processing Time <strong>Instant - 24 Hrs</strong> </li>
                            <li> Fee <strong>0 %</strong> </li>
                            <li> Limits <strong>100 - 20,000 USD</strong> </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <x-footer />
