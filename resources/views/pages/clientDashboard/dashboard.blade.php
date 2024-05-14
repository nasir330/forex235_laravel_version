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
                    <h2 class="text-white mb-3">My Accounts</h2>
                </div>
                <div class="col db-card-item d-flex justify-content-end">
                    <a href="{{route('account.create')}}" class="btn client_dashboar-btn"><i class="fa-regular fa-plus"></i> Create New
                        Account</a>
                </div>

            </div>
            <div class="row d-flex justify-content-between">
                <div class="col-md-12">
                    <ul class="nav nav-tabs" id="myTabs">
                        <li class="nav-item">
                            <a class="myLink active" id="real-tab" data-bs-toggle="tab" href="#real">
                                Real
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="myLink" id="demo-tab" data-bs-toggle="tab" href="#demo">
                                Demo
                            </a>
                        </li> 
                    </ul>
                </div>
            </div>
            <div class="tab-content mt-2 justify-content-between">
                <div class="tab-pane fade show active" id="real">
                    <div class="card border border-dark">
                        <div class="card-header">
                            <ul>
                                <li><span class="text-warning">Real</span></li>
                                <li><span>MT4</span></li>
                                <li><span>VIP</span></li>
                                <li><span>#14235235</span></li>
                            </ul>
                        </div>
                        <div class="card-body text-white bg-transparent">
                            <div class="row">
                                <div class="col-md-6">
                                    <span> <strong> 1000</strong>.00 USD</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="db-card-item">
                                        <a href="{{route('deposit.checkout')}}" class="btn client_dashboar-btn"><i
                                                class="fa-duotone fa-sack-dollar"></i> Deposit</a>
                                    </div>
                                    <div class="db-card-item">
                                        <a href="{{route('withdraw.checkout')}}" class="btn client_dashboar-btn"><i
                                                class="fa-duotone fa-building-columns"></i> Withdraw</a>
                                    </div>
                                    <div class="db-card-item">
                                        <a href="https://webpro.forex235.com/wt/login" target="_blank" class="btn client_dashboar-btn"><i
                                                class="fa-duotone fa-earth-europe"></i> WebTrade</a>
                                    </div>
                                    <div class="db-card-item dropstart">
                                        <a href="#" class="btn client_dashboar-btn dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="fa-solid fa-ellipsis"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Account Information</a></li>
                                            <li><a class="dropdown-item" href="#">Fund Transfer</a></li>
                                            <li><a class="dropdown-item" href="#">Change Leverage</a></li>                                           
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a>
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border border-dark">
                        <div class="card-header">
                            <ul>
                                <li><span class="text-warning">Real</span></li>
                                <li><span>MT4</span></li>
                                <li><span>Premier</span></li>
                                <li><span>#14235235</span></li>
                            </ul>
                        </div>
                        <div class="card-body text-white bg-transparent">
                            <div class="row">
                                <div class="col-md-6">
                                    <span> <strong> 500</strong>.00 USD</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="db-card-item">
                                        <a href="#" class="btn client_dashboar-btn"><i
                                                class="fa-duotone fa-sack-dollar"></i> Deposit</a>
                                    </div>
                                    <div class="db-card-item">
                                        <a href="#" class="btn client_dashboar-btn"><i
                                                class="fa-duotone fa-building-columns"></i> Withdraw</a>
                                    </div>
                                    <div class="db-card-item">
                                        <a href="#" class="btn client_dashboar-btn"><i
                                                class="fa-duotone fa-earth-europe"></i> WebTrade</a>
                                    </div>
                                    <div class="db-card-item dropstart">
                                        <a href="#" class="btn client_dashboar-btn dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="fa-solid fa-ellipsis"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Account Information</a></li>
                                            <li><a class="dropdown-item" href="#">Fund Transfer</a></li>
                                            <li><a class="dropdown-item" href="#">Change Leverage</a></li>
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Archive Account</a></li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border border-dark">
                        <div class="card-header">
                            <ul>
                                <li><span class="text-warning">Real</span></li>
                                <li><span>MT4</span></li>
                                <li><span>Standard</span></li>
                                <li><span>#14235235</span></li>
                            </ul>
                        </div>
                        <div class="card-body text-white bg-transparent">
                            <div class="row">
                                <div class="col-md-6">
                                    <span> <strong> 100</strong>.00 USD</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="db-card-item">
                                        <a href="#" class="btn client_dashboar-btn"><i
                                                class="fa-duotone fa-sack-dollar"></i> Deposit</a>
                                    </div>
                                    <div class="db-card-item">
                                        <a href="#" class="btn client_dashboar-btn"><i
                                                class="fa-duotone fa-building-columns"></i> Withdraw</a>
                                    </div>
                                    <div class="db-card-item">
                                        <a href="#" class="btn client_dashboar-btn"><i
                                                class="fa-duotone fa-earth-europe"></i> WebTrade</a>
                                    </div>
                                    <div class="db-card-item dropstart">
                                        <a href="#" class="btn client_dashboar-btn dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="fa-solid fa-ellipsis"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Account Information</a></li>
                                            <li><a class="dropdown-item" href="#">Fund Transfer</a></li>
                                            <li><a class="dropdown-item" href="#">Change Leverage</a></li>
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Archive Account</a></li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="demo">
                    <div class="card border border-dark">
                        <div class="card-header">
                            <ul>
                                <li><span class="text-primary">Demo</span></li>
                                <li><span>MT4</span></li>
                                <li><span>VIP</span></li>
                                <li><span>#14235235</span></li>
                            </ul>
                        </div>
                        <div class="card-body text-white bg-transparent">
                            <div class="row">
                                <div class="col-md-6">
                                    <span> <strong> 10000</strong>.00 USD</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="db-card-item">
                                        <a href="#" class="btn client_dashboar-btn"><i
                                                class="fa-duotone fa-earth-europe"></i> WebTrade</a>
                                    </div>
                                    <div class="db-card-item dropstart">
                                        <a href="#" class="btn client_dashboar-btn dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="fa-solid fa-ellipsis"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Account Information</a></li>
                                            <li><a class="dropdown-item" href="#">Fund Transfer</a></li>
                                            <li><a class="dropdown-item" href="#">Change Leverage</a></li>
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Archive Account</a></li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border border-dark">
                        <div class="card-header">
                            <ul>
                                <li><span class="text-primary">Demo</span></li>
                                <li><span>MT4</span></li>
                                <li><span>Premier</span></li>
                                <li><span>#14235235</span></li>
                            </ul>
                        </div>
                        <div class="card-body text-white bg-transparent">
                            <div class="row">
                                <div class="col-md-6">
                                    <span> <strong> 5000</strong>.00 USD</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="db-card-item">
                                        <a href="#" class="btn client_dashboar-btn"><i
                                                class="fa-duotone fa-earth-europe"></i> WebTrade</a>
                                    </div>
                                    <div class="db-card-item dropstart">
                                        <a href="#" class="btn client_dashboar-btn dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="fa-solid fa-ellipsis"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Account Information</a></li>
                                            <li><a class="dropdown-item" href="#">Fund Transfer</a></li>
                                            <li><a class="dropdown-item" href="#">Change Leverage</a></li>
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Archive Account</a></li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border border-dark">
                        <div class="card-header">
                            <ul>
                                <li><span class="text-primary">Demo</span></li>
                                <li><span>MT4</span></li>
                                <li><span>Standard</span></li>
                                <li><span>#14235235</span></li>
                            </ul>
                        </div>
                        <div class="card-body text-white bg-transparent">
                            <div class="row">
                                <div class="col-md-6">
                                    <span> <strong> 1000</strong>.00 USD</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="db-card-item">
                                        <a href="#" class="btn client_dashboar-btn"><i
                                                class="fa-duotone fa-earth-europe"></i> WebTrade</a>
                                    </div>
                                    <div class="db-card-item dropstart">
                                        <a href="#" class="btn client_dashboar-btn dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="fa-solid fa-ellipsis"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Account Information</a></li>
                                            <li><a class="dropdown-item" href="#">Fund Transfer</a></li>
                                            <li><a class="dropdown-item" href="#">Change Leverage</a></li>
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Archive Account</a></li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>

<x-footer />
