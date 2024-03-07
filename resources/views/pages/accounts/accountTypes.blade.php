<x-header />

<body>
    <x-octa-menu />
    {{-- <x-exness-menu /> --}}
    {{-- <x-menu /> --}}
    <!--ticker tape-->
    @include('templates.tickerTape')


    <!-- Forex Education  section start  -->
    <div class="container-fluid">
        <div class="row text-right">
            <div class="col-md-12 standardAccount align-self-right">
                <h1 class="ml-auto">Account Types</h1>
            </div>
        </div>
    </div>
    <!-- Forex Education section end  -->

    <!--Module content start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 accountFeatures">
                <h1 class="text-center">Choose Your Trading Account </h1>
                <p>
                    Empower your financial journey with our cutting-edge trading account. Seamlessly navigate the
                    dynamic world of investments and capitalize on opportunities with user-friendly features. Whether
                    you're a seasoned trader or just starting, our platform offers a tailored experience to suit your
                    needs. Gain access to real-time market data, advanced analysis tools, and a secure environment.
                    Choose the account that aligns with your goals and embark on a path to financial success. Elevate
                    your trading experience choose a trading account that empowers you to thrive in the markets
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 paymentFeesSection">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-dark table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Standard</th>
                                    <th>Premium</th>
                                    <th>VIP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Trading platform</td>
                                    <td>
                                        <strong class="text-warning">MetaTrader 4, MetaTrader 5, Web-Trader</strong>
                                    </td>
                                    <td>
                                        <strong class="text-warning">MetaTrader 4, MetaTrader 5, Web-Trader</strong>
                                    </td>
                                    <td>
                                        <strong class="text-warning">MetaTrader 4, MetaTrader 5, Web-Trader</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Spread</td>
                                    <td><strong class="text-warning">Low</strong> </td>
                                    <td><strong class="text-warning">Low</strong> </td>
                                    <td><strong class="text-warning">Low</strong> </td>
                                </tr>
                                <tr>
                                    <td>Spread Type</td>
                                    <td><strong class="text-warning">Floating </strong> </td>
                                    <td><strong class="text-warning">Floating </strong> </td>
                                    <td><strong class="text-warning">Floating </strong> </td>
                                </tr>
                                <tr>
                                    <td>Commission</td>
                                    <td><strong class="text-danger">No </strong> </td>
                                    <td><strong class="text-danger">No </strong> </td>
                                    <td><strong class="text-danger">No </strong> </td>
                                </tr>
                                <tr>
                                    <td>Swap-Free</td>
                                    <td><strong class="text-success">Yes </strong> </td>
                                    <td><strong class="text-success">Yes </strong> </td>
                                    <td><strong class="text-success">Yes </strong> </td>
                                </tr>
                                <tr>
                                    <td>Account Currency</td>
                                    <td><strong class="text-warning">USD </strong> </td>
                                    <td><strong class="text-warning">USD </strong> </td>
                                    <td><strong class="text-warning">USD </strong> </td>
                                </tr>
                                <tr>
                                    <td>Min. Deposit</td>
                                    <td><strong class="text-warning">100 USD </strong> </td>
                                    <td><strong class="text-warning">1,000 USD </strong> </td>
                                    <td><strong class="text-warning">10,000 USD </strong> </td>
                                </tr>
                                <tr>
                                    <td>Leverage</td>
                                    <td><strong class="text-warning">Up to 1:400 </strong> </td>
                                    <td><strong class="text-warning">Up to 1:400 </strong> </td>
                                    <td><strong class="text-warning">Up to 1:400 </strong> </td>
                                </tr>
                                <tr>
                                    <td>Contract Size:</td>
                                    <td><strong class="text-warning">1 Lot = 100 units </strong> </td>
                                    <td><strong class="text-warning">1 Lot = 100 units </strong> </td>
                                    <td><strong class="text-warning">1 Lot = 100 units </strong> </td>
                                </tr>
                                <tr>
                                    <td>Margin Call / Stop out level:</td>
                                    <td><strong class="text-warning">30% / 15% </strong> </td>
                                    <td><strong class="text-warning">30% / 15% </strong> </td>
                                    <td><strong class="text-warning">30% / 15% </strong> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><a href="https://portal.forex235.com/?r=registration" class="btn platform-btn">Get Started</a> </td>
                                    <td><a href="https://portal.forex235.com/?r=registration" class="btn platform-btn">Get Started</a> </td>
                                    <td><a href="https://portal.forex235.com/?r=registration" class="btn platform-btn">Get Started</a> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Module content end-->


    <!--- midfooer shortcut link start --->
    <div class="shortcut-links theme-bg">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="text-white mb-3"> <span class="border-bottom">Find us on</span></h5>
                    <a href="https://www.facebook.com/forex235t" target="_blank">
                        <i class="icons fa-brands fa-square-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="icons fa-brands fa-square-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="icons fa-brands fa-linkedin"></i>
                    </a>
                    <a href="#">
                        <i class="icons fa-brands fa-youtube"></i>
                    </a>
                </div>
                {{-- <div class="col-md-4">
                    <h5 class="text-white mb-3"> <span class="border-bottom">Our Markets</span></h5>
                    <ul>
                        <li><a href="products/forex.html">Forex</a></li>
                        <li><a href="#">Comodities</a></li>
                        <li><a href="#">CFD</a></li>
                        <li><a href="#">Crypto</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="text-white mb-3"> <span class="border-bottom">Trading Platforms</span></h5>
                    <ul>
                        <li><a href="#">Web Platform</a></li>
                        <li><a href="#">MT4</a></li>
                        <li><a href="#">MT5</a></li>
                    </ul>
                </div> --}}
                <div class="col-md-4">
                    <h5 class="text-white mb-3"> <span class="border-bottom">Our Markets</span></h5>
                    <ul>
                        <li><a href="{% url 'forex-market' %}">Forex</a></li>
                        <li><a href="{% url 'commodities-market' %}">Commodities</a></li>
                        <li><a href="{% url 'cfd-market' %}">CFD</a></li>
                        <li><a href="{% url 'crypto-market' %}">Crypto</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="text-white mb-3"> <span class="border-bottom">Trading Platforms</span></h5>
                    <ul>
                        <li><a href="https://web.forex235.com/" target="_blank">Web Platform</a></li>
                        <li><a href="{% url 'mt4-platform' %}" target="_blank">MT4</a></li>
                        <li><a href="{% url 'mt5-platform' %}" target="_blank">MT5</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--- midfooer shortcut link end --->

    <!-- footer start -->
    @include('templates.pagefooter')
    <!-- footer end -->

    <!-- modal start -->
    <section>
        @include('templates.modal.loginmodal')
        @include('templates.modal.registermodal')
    </section>
    <!-- modal end -->

    <x-footer />
