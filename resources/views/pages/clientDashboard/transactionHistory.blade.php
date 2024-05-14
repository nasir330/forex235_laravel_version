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
                    <h2 class="mb-3">Transaction history</h2>
                </div>
                <ul class="trx_history">
                    <li>
                        <form action="">
                            <div class="input-group mb-3">
                                <select class="form-select">
                                    <option value="1">Last 3 Days</option>
                                    <option value="1">Last 7 Days</option>
                                    <option value="1" selected>Last 30 Days</option>
                                    <option value="1">Last 3 Months</option>
                                </select>
                                <button class="input-group-text btn search-btn"><i class="fa-regular fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </li>
                    <li>
                        <form action="">
                            <div class="input-group mb-3">
                                <select class="form-select">
                                    <option value="1" selected>All Transaction</option>
                                    <option value="1">Deposit</option>
                                    <option value="1">Withdrawal</option>
                                    <option value="1">Transfer</option>
                                </select>
                                <button class="input-group-text btn search-btn"><i class="fa-regular fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </li>
                    <li>
                        <form action="">
                            <div class="input-group mb-3">
                                <select class="form-select">
                                    <option value="1" selected>All Status</option>
                                    <option value="1">Processing</option>
                                    <option value="1">Approved</option>
                                    <option value="1">Rejected</option>
                                </select>
                                <button class="input-group-text btn search-btn"><i class="fa-regular fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </li>
                    <li>
                        <form action="">
                            <div class="input-group mb-3">
                                <select class="form-select">
                                    <option value="1" selected>All Accounts</option>
                                    <option value="1">1223456</option>
                                    <option value="1">1243758</option>
                                </select>
                                <button class="input-group-text btn search-btn"><i class="fa-regular fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </li>

                </ul>
            </div>
            


        </div>
    </section>

    <x-footer />
