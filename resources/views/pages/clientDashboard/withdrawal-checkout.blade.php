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
                    <h2 class="mb-3">Withdrawal Funds</h2>
                    <h5>All Payment Methods</h5>
                </div>
            </div>

            <div class="row mb-3 text-white">
                <div class="col-md-6">
                    <form action="">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-9">
                                    <label for="depositMethod">Payment Method</label>
                                    <div class="input-group mb-3">
                                        <select class="form-select" name="paymentMethod">
                                            <option value="binancePay">Binance Pay</option>
                                            <option value="paypal">Paypal</option>
                                            <option value="skrill">Skrill</option>
                                            <option value="neteller">Neteller</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="depositMethod">Currency</label>
                                    <div class="input-group mb-3">
                                        <select class="form-select" name="currency">
                                            <option value="usd">USD</option>
                                            <option value="eur">EUR</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label for="depositMethod">From account</label>
                                <div class="input-group mb-3">
                                    <select class="form-select" name="fromAccount">
                                        <option value="wallet">Personal Wallet</option>
                                        <option value="mt4_51217797" selected>MT4 - 51217797</option>
                                        <option value="mt4_51217797">MT4 - 33427734</option>
                                        <option value="mt4_51217797">MT4 - 67717722</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <label for="depositMethod">Amount</label>
                            <div class="input-group mb-3">
                                <input class="form-control" type="text" name="amount" placeholder="00.00">
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-warning">Continue</button>
                        </div>

                    </form>
                </div>
                <div class="col-md-6 p-4">
                    <h4>Important Instrunctions before making the payment</h4>
                    <div class="mt-3">
                        <ul>
                            <li>
                                Please always check the Skrill <span class="text-warning">Non-serviced countries</span>
                                before depositing
                            </li>
                            <li>
                                Maximum deposit amount varies based on the local deosit channel selected
                            </li>
                            <li>
                                Local deposit channels availability depends on your country of residence
                            </li>
                        </ul>
                    </div>
                </div>

            </div>



        </div>
    </section>

    <x-footer />
