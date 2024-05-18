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
                        <div class="card-body text-white">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="">
                                        <div class="form-group">
                                            <label for="leverage">Max Leverage</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" name="leverage">
                                                    <option value="100">1:100</option>
                                                    <option value="200">1:200</option>
                                                    <option value="400" selected>1:400</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="currency">Currency</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" name="currency">
                                                    <option value="usd">USD</option>
                                                    <option value="usdt">USDT</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="depositMethod">Account Type Name</label>
                                            <div class="input-group mb-3">
                                                <input class="form-control" type="text" name="acc_type_name"
                                                    value="Standard">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-warning">Create Now</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6 align-self-center">
                                    <div class="text-center">
                                        <i style="font-size:56px; color:goldenrod;" class="fa-duotone fa-coins"></i>
                                    </div>
                                    <h3 class="mx-4 text-center">                                       
                                        Trading on real account with real money and take your profit <br> as you may make
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="demo">
                    <div class="card">
                        <div class="card-body text-white">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="">
                                        <div class="form-group">
                                            <label for="leverage">Max Leverage</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" name="leverage">
                                                    <option value="100">1:100</option>
                                                    <option value="200">1:200</option>
                                                    <option value="400" selected>1:400</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="balance">Starting Balance</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" name="balance">
                                                    <option value="1000">1000</option>
                                                    <option value="5000">5000</option>
                                                    <option value="10000">10000</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="currency">Currency</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" name="currency">
                                                    <option value="usd">USD</option>
                                                    <option value="usdt">USDT</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="depositMethod">Account Type Name</label>
                                            <div class="input-group mb-3">
                                                <input class="form-control" type="text" name="acc_type_name"
                                                    value="Standard">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-warning">Create Now</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6 align-self-center">
                                    <div class="text-center">
                                        <i style="font-size:56px; color:silver;" class="fa-duotone fa-coins"></i>
                                    </div>
                                    <h3 class="mx-4 text-center">
                                        You can practise on real market with virtual money with risk-free trade
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
