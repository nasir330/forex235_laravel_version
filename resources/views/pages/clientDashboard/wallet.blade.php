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
                        <h2 class="text-white">My Wallet</h2>
                    </div>
                    <div class="card-body text-white">
                        <div class="row">
                            <div class="col-md-9">
                                <span>Total Balance</span>
                                <h2> <strong> 1000</strong>.00 USD</h2>
                            </div>
                            <div class="col-md-3 mt-3">
                                <a href="#" class="btn client_dashboar-btn">
                                    <i class="fa-duotone fa-sack-dollar"></i>
                                    Deposit Now
                                </a>
                            </div>
                        </div>
                    </div>
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
                    <div class="card">
                        <div class="">
                            <table id="" class="table table-dark table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>Account ID</th>
                                        <th>Leverage</th>
                                        <th>Balance</th>
                                        <th>Trade</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>41293175</td>
                                        <td>1:400</td>
                                        <td>1,000</td>
                                        <td>Trade</td>
                                        <td>
                                            <div class="db-card-item dropstart">
                                                <a href="#" class="btn client_dashboar-btn dropdown-toggle p-1"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa-solid fa-cog"></i></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Add Fund</a></li>
                                                            <li><a class="dropdown-item" href="#">Withdraw Fund</a></li>
                                                            <li><a class="dropdown-item" href="#">Trades</a></li>
                                                            <li><a class="dropdown-item" href="#">Reset Password</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Change Leverage</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Archive Account</a>
                                                            </li>
        
                                                        </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>41293175</td>
                                        <td>1:400</td>
                                        <td>1,000</td>
                                        <td>Trade</td>
                                        <td>
                                            <div class="db-card-item dropstart">
                                                <a href="#" class="btn client_dashboar-btn dropdown-toggle p-1"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa-solid fa-cog"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Account Information</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Fund Transfer</a></li>
                                                    <li><a class="dropdown-item" href="#">Change Leverage</a></li>
                                                    <li><a class="dropdown-item" href="#">Change Trading
                                                            Password</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Change Trading
                                                            Password</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Archive Account</a></li>

                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="demo">
                    <div class="card">
                        <div class="">
                            <table id="" class="table table-dark table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>Account ID</th>
                                        <th>Leverage</th>
                                        <th>Balance</th>
                                        <th>Trade</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>41293175</td>
                                        <td>1:400</td>
                                        <td>1,000</td>
                                        <td>Trade</td>
                                        <td>
                                            <div class="db-card-item dropstart">
                                                <a href="#" class="btn client_dashboar-btn dropdown-toggle p-1"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa-solid fa-cog"></i></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Add Fund</a></li>
                                                            <li><a class="dropdown-item" href="#">Withdraw Fund</a></li>
                                                            <li><a class="dropdown-item" href="#">Trades</a></li>
                                                            <li><a class="dropdown-item" href="#">Reset Password</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Change Leverage</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Archive Account</a>
                                                            </li>
        
                                                        </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>41293175</td>
                                        <td>1:400</td>
                                        <td>1,000</td>
                                        <td>Trade</td>
                                        <td>
                                            <div class="db-card-item dropstart">
                                                <a href="#" class="btn client_dashboar-btn dropdown-toggle p-1"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa-solid fa-cog"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Add Fund</a></li>
                                                    <li><a class="dropdown-item" href="#">Withdraw Fund</a></li>
                                                    <li><a class="dropdown-item" href="#">Trades</a></li>
                                                    <li><a class="dropdown-item" href="#">Reset Password</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Change Leverage</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Archive Account</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
