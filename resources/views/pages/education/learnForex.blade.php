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
                <h1 class="ml-auto">Learn Forex Trading ?</h1>
            </div>
        </div>
    </div>
    <!-- Forex Education section end  -->

    <!--Module content start-->
    <div class="container-fluid">
        <div class="row p-2">
            <!--board Card start-->
            <div class="col-md-3 boardCard">
                <div class="boardCard-header">
                    <h4>Learn Forex</h4>
                </div>
                <div class="lessonsList">
                    <ul>
                        <li class="p-2">
                            <a href="#topic-1" onclick="showTopic('topic-1', this)"> <i
                                    class="fa-regular fa-chevron-right mx-2"></i> Market Structure </a>
                        </li>
                        <li class="p-2">
                            <a href="#topic-2" onclick="showTopic('topic-2', this)"> <i
                                    class="fa-regular fa-chevron-right mx-2"></i> Supply and Demand Zone</a>
                        </li>
                        <li class="p-2">
                            <a href="#topic-3" onclick="showTopic('topic-3', this)"> <i
                                    class="fa-regular fa-chevron-right mx-2"></i> Order Blocks</a>
                        </li>
                        <li class="p-2">
                            <a href="#topic-4" onclick="showTopic('topic-4', this)"> <i
                                    class="fa-regular fa-chevron-right mx-2"></i> Liquidity Concept</a>
                        </li>
                        <li class="p-2">
                            <a href="#topic-5" onclick="showTopic('topic-5', this)"> <i
                                    class="fa-regular fa-chevron-right mx-2"></i> Price Action Imbalance </a>
                        </li>
                        <li class="p-2">
                            <a href="#topic-6" onclick="showTopic('topic-6', this)"> <i
                                    class="fa-regular fa-chevron-right mx-2"></i> Entry Type</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--board Card end-->

            <!--content box start -->
            <div class="col-md-9 content-box">
                <!--topic-1 start-->
                <div class="section active" id="topic-1">
                    <div class="row">
                        <h2 class="text-capitalize">Up Trend</h2>
                        <div class="col-md-8">
                            <p>
                                Normally we discuss a little about the market structures that we see. If the market is
                                in an
                                uptrend, let's take a look at its movement. The market will first make a high with an up
                                move. The price then pulls back and makes a higher low that will stay above the lower
                                low.
                                After the pullback, the market pushes up again breaking the above and the previous high
                                and
                                making a new high which we call the higher high. This is how an uptrend market
                                continues.
                            </p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <img class="img-fluid" src="Assets/images/candlestics/upTrend.webp" alt="Trending Market">
                        </div>
                    </div>
                    <div class="row">
                        <h2 class="text-capitalize">Downtrend</h2>
                        <div class="col-md-8">
                            <p>
                                Now let's take the concept of downtrend. In the case of a downtrend, the market will
                                initially push downwards and form a low. It will then pullback and make a lower high
                                below the previous high. After that, the price will push down again and break the
                                previous low and make a new lower low. Thus the downtrend market continues.
                            </p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <img class="img-fluid" src="Assets/images/candlestics/downTrend.webp" alt="down trend market">
                        </div>
                    </div>
                </div>
                <!--topic-1 end-->

                <!--topic-2 start-->
                <div class="section" id="topic-2">
                    <div class="row">
                        <h2 class="text-capitalize">Supply and Demand Zone</h2>
                        <p>
                            Three conditions have to be fulfilled to create a supply and demand zone. We will first know
                            the issues that are seen in the market, then we will understand that the supply and demand
                            zone is being created in the market.
                        </p>
                        <p>
                            1. Inefficiency Movement <br>
                            2. The structure must be broken. <br>
                            3. Liquidity must be collected.
                        </p>
                    </div>
                    <div class="row">
                        <h2 class="text-capitalize">Inefficiency Movement</h2>
                        <div class="col-md-8">
                            <p>
                                The market is seen to move slowly and suddenly the market goes up or makes a huge move
                                down.
                                If such a move is seen in the market, it is called an inefficiency move.
                            </p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <img class="img-fluid" src="Assets/images/candlestics/Inefficiency Movement.webp" alt="Market Movement">
                        </div>
                    </div>
                    <div class="row">
                        <h2 class="text-capitalize">Structure Broken</h2>
                        <div class="col-md-8">
                            <p>
                                To break the structure means to break a point. That is, in the case of an uptrend, it
                                will break the previous high and create a new higher high, and in the case of a
                                downtrend, it will break the lower low and create a new lower low.
                            </p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <img class="img-fluid" src="Assets/images/candlestics/Structure Broken.webp" alt="Market Structure">
                        </div>
                    </div>
                    <div class="row">
                        <h2 class="text-capitalize">Liquidity</h2>
                        <div class="col-md-8">
                            <p>
                                Liquidity refers to how active a market is. It is determined by how many traders are
                                actively trading and the total volume they're trading. One reason the foreign exchange
                                market is so liquid is because it is tradable 24 hours a day during weekdays.
                            </p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <img class="img-fluid" src="Assets/images/candlestics/Liquidity.webp" alt="Market Liquidity">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <img class="img-fluid" src="Assets/images/candlestics/Demand zone.webp" alt="Forex Market Demand Zone">
                        </div>
                        <div class="col-md-6 mb-3">
                            <img class="img-fluid" src="Assets/images/candlestics/Supply Zone.webp" alt="Forex Market Supply Zone">
                        </div>
                    </div>
                </div>
                <!--topic-2 end-->

                <!--topic-3 start-->
                <div class="section" id="topic-3">
                    <div class="row">
                        <h2 class="text-capitalize">Order blocks</h2>
                        <p>
                            Through order block we can know where we will take entry. We see two hold order blocks in
                            the market. One is a bearish order block and the other is a bullish order block. Let's know
                            the things that need to be fulfilled to create the order block.
                            1. In order to create an order block, the market must touch a supply or demand label. <br>
                            2. There will be inefficient movement. <br>
                            3. The order block candlestick will be a spinning top type candle.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <img class="img-fluid" src="Assets/images/candlestics/Bearish Order block.webp" alt="Bearish Order Block">
                        </div>
                        <div class="col-md-6 mb-3">
                            <img class="img-fluid" src="Assets/images/candlestics/Bullish Order block.webp" alt="Bulish Order Block">
                        </div>
                    </div>

                </div>
                <!--topic-3 end-->

                <!--topic-4 start-->
                <div class="section" id="topic-4">
                    <div class="row">
                        <h2 class="text-capitalize">What is Liquidity</h2>
                        <div class="col-md-8">
                            <p>
                                Normally we retail traders use stop loss. Suppose you opened a buy trade by holding a
                                label and then it was seen that your stop loss was hit and the market went up again,
                                this is called liquidity hunting. Big companies hunt these stop losses. Note the image
                                adjacent. We retail traders usually open a trade based on a label such as a double top,
                                triple top or other confirmation and use a stop loss below it. These stop loss labels
                                have a lot of liquidity.
                            </p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <img class="img-fluid" src="Assets/images/candlestics/Liquidity Concept.webp" alt="Forex Market Liquidity">
                        </div>
                    </div>
                </div>
                <!--topic-4 end-->

                <!--topic-5 start-->
                <div class="section" id="topic-5">
                    <div class="row">
                        <h2 class="text-capitalize">Imbalance Candlesticks</h2>
                        <div class="col-md-8">
                            <p>
                                Basically imbalance candlesticks in the market are made up of three candles. First we
                                will look at how balance and imbalance candlesticks are made. Note the image adjacent.
                                It is a bearish movement. First a bearish candle is formed followed by a second
                                candlestick and when the wick point of the first candlestick is touched by the wick of
                                the third candle it is called the balance price. Imbalance candlestick pattern is the
                                wick point of the first candle cannot be touched by the wick of the third candle with a
                                gap in between. Order blocks have a correlation with imbalance price action. If an
                                imbalance candle is formed somewhere, if there is an order block above it, the market
                                will slowly go there and then the price will fall again from there.
                            </p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <img class="img-fluid" src="Assets/images/candlestics/Imbalacne Candlesthiks.webp" alt="Forex Imbalancing Market">
                        </div>
                    </div>
                </div>
                <!--topic-5 end-->

                <!--topic-6 start-->
                <div class="section" id="topic-6">
                    <div class="row">
                        <h2 class="text-capitalize">Entry Type</h2>
                        <p>
                            Normally there are two types of entry in the market. One is the risky entry and the other is
                            the confirmation entry. If we draw an order block somewhere and place a pending order there
                            it will be a risk entry. Because after our order is executed, the market can go against us
                            or in our favor. Confirmation entry is the opening of a trade with confirmation in a lower
                            time frame after the price moves to the order block area. We will always try to take
                            confirmation entries.
                        </p>
                    </div>                   
                </div>
                <!--topic-6 end-->

            </div>
            <!--content box end -->
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
