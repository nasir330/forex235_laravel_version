<x-header />

<body>
    <div class="row db-menu py-4">
        <div class="col-md-3">
            <img class="img-fluid" src="Assets/images/forex235_logo.svg" alt="Forex 235">
        </div>
        <div class="col-md-9 text-white d-flex justify-content-end">
            <ul>
                <!--notification-->
                <li class="dropstart">
                    <i class="fa-regular fa-bell dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></i>
                    <div class="dropdown-menu">
                        <span>
                            <a href="#" class="dropdown-item">
                                New Trading Account Created <br>
                                <em>5 minutes ago</em>
                            </a>
                        </span>
                        <span>
                            <a href="#" class="dropdown-item">
                                Payment Method added successfully..! <br>
                                <em>1 hour ago</em>
                            </a>
                        </span>
                    </div>
                </li>
                <!--external menu-->
                <li class="dropstart">
                    <i class="fa-regular fa-grid dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></i>
                    <ul class="dropdown-menu">
                        <span>
                            <a href="#" class="dropdown-item">
                                <i class="fa-regular fa-grid-2-plus"></i>
                                Client Dashboard
                            </a>
                        </span>
                        <span>
                            <a href="#" class="dropdown-item">
                                <i class="fa-light fa-globe"></i>
                                Our website
                            </a>
                        </span>

                        <span>
                            <a href="#" class="dropdown-item">
                                <i class="fa-regular fa-handshake"></i>
                                Partner Program
                            </a>
                        </span>
                    </ul>
                </li>
                <li class="dropstart">
                    <i class="fa-regular fa-circle-user dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"></i>
                    <ul class="dropdown-menu">
                        <span class="dropdown-item">
                            <i class="fa-regular fa-circle-user"></i>
                            Username <br>
                            user@email.com
                        </span>
                        <span>
                            <a href="#" class="dropdown-item">
                                <i class="fa-regular fa-gear"></i>
                                Settings
                            </a>
                        </span>
                        <span>
                            <a href="#" class="dropdown-item">
                                <i class="fa-regular fa-right-from-bracket"></i>
                                Logout
                            </a>
                        </span>
                    </ul>
                </li>

                <li class="dropstart">
                    <i class="fa-regular fa-wallet dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></i>
                    <span> 0.00 USD </span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>


    <section id="client_dashboard" class="d-flex justify-content">
        <aside id="client_sidebar" class="text-center">
            <ul>
                <li>
                    <a href="#">
                        <i class="icon fa-duotone fa-house"></i><br>
                        My Accounts
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon fa-duotone fa-sack-dollar"></i><br>

                        Deposit
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon fa-duotone fa-building-columns"></i> <br>
                        Withdrawal
                    </a>

                </li>
                <li>
                    <a href="#">
                        <i class="icon fa-duotone fa-money-bill-transfer"></i><br>
                        Transaction history
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon fa-duotone fa-wallet"></i> <br>
                        Wallet
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon fa-duotone fa-gears"></i> <br>
                        Setting
                    </a>
                </li>

            </ul>
        </aside>
        <div id="client_dashboard_content">
            <div class="row">
                <div class="col">
                    <h2 class="text-white mb-3">My Accounts</h2>
                </div>
                <div class="col db-card-item d-flex justify-content-end">
                    <a href="#" class="btn client_dashboar-btn"><i class="fa-regular fa-plus"></i> Create New Account</a>                   
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
                        <li class="nav-item">
                            <a class="myLink" id="archived-tab" data-bs-toggle="tab" href="#archived">
                                Archived
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
                                <li><span>Vip</span></li>
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
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a></li>
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a></li>
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
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a></li>
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a></li>
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
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a></li>
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a></li>
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
                                <li><span>Vip</span></li>
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
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a></li>
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a></li>
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
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a></li>
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a></li>
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
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a></li>
                                            <li><a class="dropdown-item" href="#">Change Trading Password</a></li>
                                            <li><a class="dropdown-item" href="#">Archive Account</a></li>
                                           
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="archived">
                    <div class="card border border-dark">
                        <div class="card-header">
                            <ul>
                                <li><span class="text-warning">Real</span></li>
                                <li><span>MT4</span></li>
                                <li><span>Vip</span></li>
                                <li><span>#14235235</span></li>
                            </ul>
                        </div>
                        <div class="card-body text-white bg-transparent">
                            <div class="row">
                                <div class="col-md-6">
                                    <span> <strong> 0</strong>.00 USD</span>
                                    &nbsp; <span class="text-warning">You archived this account</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">                                    
                                    <div class="db-card-item">
                                        <a href="#" class="btn client_dashboar-btn"><i class="fa-solid fa-arrows-rotate"></i> Re-active</a>
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
                                    <span> <strong> 50</strong>.00 USD</span>
                                    &nbsp; <span class="text-warning">You archived this account</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">                                    
                                    <div class="db-card-item">
                                        <a href="#" class="btn client_dashboar-btn"><i class="fa-solid fa-arrows-rotate"></i> Re-active</a>
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
                                    <span> <strong> 100</strong>.00 USD</span>
                                    &nbsp; <span class="text-warning">You archived this account</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">                                    
                                    <div class="db-card-item">
                                        <a href="#" class="btn client_dashboar-btn"><i class="fa-solid fa-arrows-rotate"></i> Re-active</a>
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
