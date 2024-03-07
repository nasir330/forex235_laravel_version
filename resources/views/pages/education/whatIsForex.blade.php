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
            <div class="col-md-12 depositWithdrawalSection align-self-right">
                <h1 class="ml-auto">What is Forex ?</h1>
            </div>
        </div>
    </div>
    <!-- Forex Education section end  -->

    <!--Module content start-->
    <div class="container-fluid">
        <div class="row p-4">
            <!--content box start -->
            <div class="col-md-8 p-2">
                <div class="contentBox mb-2">
                    <div class="row">
                        <div class="col-auto text-center">
                            <h4 class="p-2">1</h4>
                        </div>
                        <div class="col">
                            <strong>Introduction to Forex</strong>
                            <p>
                                The forex market, or foreign exchange market, is a global decentralized marketplace
                                where the trading of currencies takes place. It is considered the largest and most
                                liquid financial market in the world. In the forex market, participants, including
                                banks, financial institutions, corporations, governments, and individual traders, engage
                                in the buying and selling of currencies.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="contentBox mb-2">
                    <div class="row">
                        <div class="col-auto text-center">
                            <h4 class="p-2">2</h4>
                        </div>
                        <div class="col">
                            <strong>Participants in the Forex Market</strong>
                            <p><strong>major participants :</strong>
                                The forex market has a diverse range of participants, including institutions,
                                corporations, governments, and individual traders. Here are the main categories of
                                participants in the forex market. As below Central Banks, Commercial and Investment
                                Banks, Hedge Funds, Corporations, Retail Traders, Investment Manager, Governments,
                                Brokerage Firms, Speculators, Market Markets etc.
                            </p>
                            <p><strong>major participants :</strong>
                                The forex market has a diverse range of participants, including institutions,
                                corporations, governments, and individual traders. Here are the main categories of
                                participants in the forex market. As below Central Banks, Commercial and Investment
                                Banks, Hedge Funds, Corporations, Retail Traders, Investment Manager, Governments,
                                Brokerage Firms, Speculators, Market Markets etc.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="contentBox mb-2">
                    <div class="row">
                        <div class="col-auto text-center">
                            <h4 class="p-2">3</h4>
                        </div>
                        <div class="col">
                            <strong>Currency Pairs</strong>
                            <p>
                                In the forex market, currencies are traded in pairs, where one currency is exchanged for
                                another. Each currency pair consists of a base currency and a quote currency. The
                                exchange rate indicates how much of the quote currency is needed to purchase one unit of
                                the base currency. The two currencies are separated by a slash, and the exchange rate is
                                expressed as follows:
                            </p>
                            <p>
                                <strong> Base Currency/Quote Currency :</strong>
                                For example, in the currency pair EUR/USD, the euro (EUR) is the base currency, and the
                                U.S. dollar (USD) is the quote currency. If the EUR/USD exchange rate is 1.20, it means
                                1 euro is equivalent to 1.20 U.S. dollars.

                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <!--content box end -->

            <!--board Card start-->
            <div class="col-md-4 boardCard">
                <div class="boardCard-header">
                    <h4>What is Forex ?</h4>
                </div>
                <div class="boardCard-body">
                    <ol>
                        <li class="px-3 d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                            data-bs-target="#lesson1" aria-expanded="false" aria-controls="lesson1">
                            1. Forex Markets
                            <i class="fa-regular fa-chevron-down"></i>
                        </li>
                        <div class="collapse" id="lesson1">
                            <ul class="p-2">
                                <li><a href="#"> <i class="fa-duotone fa-chevrons-right"></i> Introduction to
                                        Forex</a></li>
                                <li><a href="#"> <i class="fa-duotone fa-chevrons-right"></i> Participants in the
                                        Forex Market </a></li>
                                <li><a href="#"> <i class="fa-duotone fa-chevrons-right"></i> Currency Pairs </a>
                                </li>
                            </ul>
                        </div>
                        <li class="px-3 d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                            data-bs-target="#lesson2" aria-expanded="false" aria-controls="lesson2">
                            2. Basics of Currency Trading
                            <i class="fa-regular fa-chevron-down"></i>
                        </li>
                        <div class="collapse" id="lesson2">
                            <ul class="p-2">
                                <li><a href="#"><i class="fa-duotone fa-chevrons-right"></i> How Currency Prices
                                        are Determined</a></li>
                                <li><a href="#"><i class="fa-duotone fa-chevrons-right"></i> Reading Forex Quotes
                                    </a></li>
                                <li><a href="#"><i class="fa-duotone fa-chevrons-right"></i> Market Order and
                                        Limit Order </a></li>
                            </ul>
                        </div>
                        <li class="px-3 d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                            data-bs-target="#lesson3" aria-expanded="false" aria-controls="lesson3">
                            3. Forex Trading Platforms
                            <i class="fa-regular fa-chevron-down"></i>
                        </li>
                        <div class="collapse" id="lesson3">
                            <ul class="p-2">
                                <li><a href="#"><i class="fa-duotone fa-chevrons-right"></i> Introduction to
                                        Trading Platforms</a></li>
                                <li><a href="#"><i class="fa-duotone fa-chevrons-right"></i> Basic Functions of
                                        Trading Platforms </a></li>
                                <li><a href="#"><i class="fa-duotone fa-chevrons-right"></i> Risk Management in
                                        Trading </a></li>
                            </ul>
                        </div>
                        <li class="px-3 d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                            data-bs-target="#lesson4" aria-expanded="false" aria-controls="lesson4">
                            4. Fundamental and Technical Analysis
                            <i class="fa-regular fa-chevron-down"></i>
                        </li>
                        <div class="collapse" id="lesson4">
                            <ul class="p-2">
                                <li><a href="#"> <i class="fa-duotone fa-chevrons-right"></i> Fundamental
                                        Analysis</a></li>
                                <li><a href="#"> <i class="fa-duotone fa-chevrons-right"></i> Technical Analysis
                                    </a></li>
                                <li><a href="#"> <i class="fa-duotone fa-chevrons-right"></i> Create Strategy </a>
                                </li>
                            </ul>
                        </div>
                        <li class="px-3 d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                            data-bs-target="#lesson5" aria-expanded="false" aria-controls="lesson5">
                            5. Building a Forex Trading Plan
                            <i class="fa-regular fa-chevron-down"></i>
                        </li>
                        <div class="collapse" id="lesson5">
                            <ul class="p-2">
                                <li><a href="#"><i class="fa-duotone fa-chevrons-right"></i> Importance of a
                                        Trading Plan</a></li>
                                <li><a href="#"><i class="fa-duotone fa-chevrons-right"></i> Components of a
                                        Trading Plan </a></li>
                                <li><a href="#"><i class="fa-duotone fa-chevrons-right"></i> Create Strategy
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </ol>
                </div>

            </div>
            <!--board Card end-->

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
