<x-header />

<body>
    <x-octa-menu />
    {{-- <x-menu /> --}}
    <!--ticker tape-->
    @include('templates.tickerTape')


    <!-- Forex Education  section start  -->
    <div class="container-fluid">
        <div class="row text-right">
            <div class="col-md-12 depositWithdrawalSection align-self-right">
                <h1 class="ml-auto">Become a Trader</h1>
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
                        <div class="col">
                            <strong>1. Currency Pair</strong>
                            <p>
                                A forex quote always involves two currencies, known as a currency pair. The first
                                currency is the base currency, and the second is the quote currency. For example, in the
                                currency pair EUR/USD, the euro (EUR) is the base currency, and the U.S. dollar (USD) is
                                the quote currency.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="contentBox mb-2">
                    <div class="row">
                        <div class="col">
                            <strong>2. Bid Price</strong>
                            <p>The bid price represents the maximum price that a buyer is willing to pay for the base
                                currency. It is the price at which the market (or your broker) will buy a specific
                                currency pair from you. Traders looking to sell a currency pair will generally receive
                                the bid price
                            </p>
                        </div>
                    </div>

                </div>
                <div class="contentBox mb-2">
                    <div class="row">
                        <div class="col">
                            <strong>3. Ask Price</strong>
                            <p>
                                The ask price is the minimum price that a seller is willing to accept for the base
                                currency. It is the price at which the market (or your broker) will sell a specific
                                currency pair to you. Traders looking to buy a currency pair will generally pay the ask
                                price.
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
                <div class="contentBox mb-2">
                    <div class="row">
                        <div class="col">
                            <strong>4. Spread:</strong>
                            <p>
                                The difference between the bid and ask prices is known as the spread. This represents
                                the transaction cost or the broker's profit. A lower spread is generally preferable for
                                traders, as it means a smaller cost to enter or exit a trade.
                            </p>
                            <p>
                                Here's an example of a forex quote
                                Currency Pair: EUR/USD <br>
                                Bid Price: 1.1200 <br>
                                Ask Price: 1.1205
                            </p>
                            <p>
                                In this example: <br>
                                The bid price is what a trader will receive when selling euros.
                                The ask price is what a trader will pay when buying euros.
                                The spread is 5 pips (the difference between 1.1205 and 1.1200).
                            </p>
                            <p>
                                If a trader believes that the euro will appreciate against the U.S. dollar, they might
                                buy the EUR/USD currency pair at the ask price. Conversely, if they
                                believe the euro will depreciate, they might sell the currency pair at the bid price.
                                Keep in mind that forex prices are constantly changing due to market fluctuations, and
                                it's crucial to stay updated with real-time quotes when actively trading. Additionally,
                                understanding other factors such as leverage, margin, and risk management is crucial for
                                successful forex trading

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--content box end -->

            <!--board Card start-->
            <div class="col-md-4 boardCard">
                <div class="boardCard-header">
                    <h4>Essential Lessons to Be a Trader</h4>
                </div>
                <div class="boardCard-body">
                    <ol>
                        <li class="px-3 d-flex justify-content-between align-items-center">
                            1. Reading Forex Quotes
                            <i class="fa-regular fa-chevron-right"></i>
                        </li>
                        <li class="px-3 d-flex justify-content-between align-items-center">
                            2. Understanding Leverage and Margin
                            <i class="fa-regular fa-chevron-right"></i>
                        </li>
                        <li class="px-3 d-flex justify-content-between align-items-center">
                            3. Risk Management
                            <i class="fa-regular fa-chevron-right"></i>
                        </li>
                        <li class="px-3 d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                            data-bs-target="#technical" aria-expanded="false" aria-controls="technical">
                            4. Introduction to Technical Analysis
                            <i class="fa-regular fa-chevron-down"></i>
                        </li>
                        <div class="collapse" id="technical">
                            <ul class="p-2">
                                <li><a href="#"> <i class="fa-duotone fa-chevrons-right"></i> Candlestick
                                        Patterns</a></li>
                                <li><a href="#"> <i class="fa-duotone fa-chevrons-right"></i> Indicators and
                                        Oscillators </a></li>
                                <li><a href="#"> <i class="fa-duotone fa-chevrons-right"></i> Chart Patterns and
                                        Trends </a>
                                </li>
                            </ul>
                        </div>
                        <li class="px-3 d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                            data-bs-target="#fundamental" aria-expanded="false" aria-controls="fundamental">
                            5. Fundamental Analysis
                            <i class="fa-regular fa-chevron-down"></i>
                        </li>
                        <div class="collapse" id="fundamental">
                            <ul class="p-2">
                                <li><a href="#"> <i class="fa-duotone fa-chevrons-right"></i> Economic
                                        Indicators:</a></li>
                                <li><a href="#"> <i class="fa-duotone fa-chevrons-right"></i> Central Bank
                                        Policies:</a></li>
                                <li><a href="#"> <i class="fa-duotone fa-chevrons-right"></i> News and Events:
                                    </a></li>
                            </ul>
                        </div>
                        <li class="px-3 d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                            data-bs-target="#strategy" aria-expanded="false" aria-controls="strategy">
                            6. Trading Strategies
                            <i class="fa-regular fa-chevron-down"></i>
                        </li>
                        <div class="collapse" id="strategy">
                            <ul class="p-2">
                                <li><a href="#"> <i class="fa-duotone fa-chevrons-right"></i> Scalping, Day
                                        Trading, Swing Trading</a></li>
                                <li><a href="#"> <i class="fa-duotone fa-chevrons-right"></i> Developing a Trading
                                        Plan</a></li>
                                <li><a href="#"> <i class="fa-duotone fa-chevrons-right"></i> Backtesting and
                                        Simulation</a></li>
                            </ul>
                        </div>
                        <li class="px-3 d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                            data-bs-target="#practical" aria-expanded="false" aria-controls="practical">
                            7. Practical Experience
                            <i class="fa-regular fa-chevron-down"></i>
                        </li>
                        <div class="collapse" id="practical">
                            <ul class="p-2">
                                <li><a href="#"> <i class="fa-duotone fa-chevrons-right"></i> Open a Demo
                                        Account:</a></li>
                                <li><a href="#"> <i class="fa-duotone fa-chevrons-right"></i> Live Trading with
                                        Small Capital</a></li>
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
