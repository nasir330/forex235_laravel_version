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
                <h1 class="ml-auto">Profit Calculator</h1>
            </div>
        </div>
    </div>
    <!-- Forex Education section end  -->

    <!-- Forex calculator  section start  -->
    <div class="container-fluid">
        <div class="row calculatorSection bg-dark text-white p-4">
            <div class="row d-flex justify-content-center">
                <div class="col-md-3 calHeader">
                    <h2 class="text-center">Profit Calculator</h2>
                </div>
            </div>
            <!--calculator form start-->
            <div class="col-md-6">
                <form id="marginCalculatorForm">
                    <div class="row mb-3 itemCell">
                        <div class="col">
                            <label for="symbolList">Symbol</label>
                        </div>
                        <div class="col input-group">
                            <select class="form-select form-control" id="symbolList" required>
                                <option value="EURUSD">EURUSD</option>
                                <option value="GBPUSD">GBPUSD</option>
                                <option value="GBPJPY">GBPJPY</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="currencyList">Currency</label>
                        </div>
                        <div class="col input-group">
                            <select class="form-select form-control" id="currencyList" required>
                                <option value="USD">USD</option>
                                <option value="EUR">EUR</option>
                                <option value="USDT">USDT</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="lotSize">Lot Size</label>
                        </div>
                        <div class="col input-group">
                            <span onclick="decValue()" class="input-group-text btn decBtn" id="decBtn">
                                <i class="fa-solid fa-minus"></i>
                            </span>
                            <input class="form-control" type="text" id="lotSize" value="1.00">
                            <span onclick="incValue()" class="input-group-text btn incBtn" id="incValue">
                                <i class="fa-solid fa-plus"></i>
                            </span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="openPrice">Open Price</label>
                        </div>
                        <div class="col input-group">
                            <input class="form-control" type="text" id="openPrice" value="1.08754">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="closePrice">Close Price</label>
                        </div>
                        <div class="col input-group">
                            <input class="form-control" type="text" id="closePrice" value="1.08744">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="tradeDirection">Trade Direction</label>
                        </div>
                        <div class="col btn-group" role="group" aria-label="Basic mixed styles example">

                            <div class="col btn-group btn-group-toggle" data-toggle="buttons" role="group"
                                aria-label="Basic mixed styles example">
                                <label class="form-control btn btn-success active">
                                    <input type="radio" name="buySell" id="buyDirectionBuy" value="buy"> Buy
                                </label>
                                <label class="form-control btn btn-danger">
                                    <input type="radio" name="buySell" id="buyDirectionSell" value="sell"> Sell
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="row mb-3 d-flex justify-content-center">
                        <button type="button" class="btn platform-btn" onclick="calculateProfit()">
                            Calculate Profit
                        </button>
                    </div>
                </form>
            </div>
            <!--calculator form end-->

            <!--calculator result start-->
            <div class="col-md-6">
                <h4 class="text-center">Profit Result</h4>
                <div id="mycontainer">
                    <p id="marginResult">Result will be displayed here.</p>
                </div>

                <div id="resultContainer">
                    <div class="row text-center">
                        <div class="col">
                            <span>Instrument : </span>
                        </div>
                        <div class="col">
                            <span id="resultInstrument">EURUSD</span>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col">
                            <span>Lot Size : </span>
                        </div>
                        <div class="col">
                            <span id="resultLotSize">1.00</span>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col">
                            <span>Open Price : </span>
                        </div>
                        <div class="col">
                            <span id="resultOpenPrice">1.00</span>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col">
                            <span>Close Price : </span>
                        </div>
                        <div class="col">
                            <span id="resultClosePrice">1.00</span>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col">
                            <span>Trade Direction : </span>
                        </div>
                        <div class="col">
                            <span id="resultDirection">1.00</span>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col mt-3">
                            <span>Profit : </span> <strong id="resultProfit">$262</strong>
                        </div>

                    </div>
                </div>
            </div>
            <!--calculator result end-->
        </div>
    </div>
    <!-- Forex calculator section end  -->



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
