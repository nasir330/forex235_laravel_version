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
            <div class="col-md-12 vipAccount align-self-right">
                <h1 class="ml-auto">VIP Account</h1>
            </div>
        </div>
    </div>
    <!-- Forex Education section end  -->

    <!--Module content start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 accountFeatures">
                <h1>VIP </h1>
                <p>
                    Upgrade to a VIP account today and elevate your trading experience with enhanced benefits and
                    exclusive features tailored to meet the needs of discerning traders like you.
                </p>
            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid" src="Assets/images/vip-account.webp" alt="VIP Trading Account">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 paymentFeesSection">
                <div class="row">
                    <div class="col-md-12 text-center bg-dark text-light m-1">
                        <h1 class="text-uppercase">VIP Account Features</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-dark table-striped table-bordered text-center">
                            <tbody>
                                <tr>
                                    <td style="width:40%;">Trading platform</td>
                                    <td><strong class="text-warning">MetaTrader 4, MetaTrader 5, Web-Trader</strong> </td>
                                </tr>
                                <tr>
                                    <td style="width:40%;">Spread</td>
                                    <td><strong class="text-warning">Low</strong> </td>
                                </tr>
                                <tr>
                                    <td style="width:40%;">Spread Type</td>
                                    <td><strong class="text-warning">Floating </strong> </td>
                                </tr>
                                <tr>
                                    <td style="width:40%;">Commission</td>
                                    <td><strong class="text-danger">No </strong> </td>
                                </tr>
                                <tr>
                                    <td style="width:40%;">Swap-Free</td>
                                    <td><strong class="text-success">Yes </strong> </td>
                                </tr>
                                <tr>
                                    <td style="width:40%;">Account Currency</td>
                                    <td><strong class="text-warning">USD </strong> </td>
                                </tr>
                                <tr>
                                    <td style="width:40%;">Min. Deposit</td>
                                    <td><strong class="text-warning">10,000 USD </strong> </td>
                                </tr>
                                <tr>
                                    <td style="width:40%;">Leverage</td>
                                    <td><strong class="text-warning">Up to 1:400 </strong> </td>
                                </tr>
                                <tr>
                                    <td style="width:40%;">Contract Size:</td>
                                    <td><strong class="text-warning">1 Lot = 100 units </strong> </td>
                                </tr>
                                <tr>
                                    <td style="width:40%;">Margin Call / Stop out level:</td>
                                    <td><strong class="text-warning">30% / 15% </strong> </td>
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
