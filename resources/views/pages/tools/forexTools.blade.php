<x-header />

<body>
    <x-octa-menu />
    {{-- <x-exness-menu /> --}}
    {{-- <x-menu /> --}}
    <!--ticker tape-->
    @include('templates.tickerTape')


    <!-- Forex tools page header  section start  -->
    <div class="container-fluid">
        <div class="row text-right">
            <div class="col-md-12 forexTools align-self-right">
                <h1 class="ml-auto">Forex Tools</h1>
            </div>
        </div>
    </div>
    <!-- ForForex tools page header section end  -->

    <!-- Forex tools  section start  -->
    <div class="container-fluid">
        <div class="row marginCalculator text-white">
            <div class="col-md-6 p-4 align-self-center">
                <img class="img-fluid" src="Assets/images/forex margin calculator.webp" alt="Forex Margin Calculator">
            </div>
            <div class="col-md-6 p-4">
                <h2 class="text-center">Forex Margin Calculator</h2>
                <p>
                    Forex 235's Margin Calculator empowers traders by swiftly computing margin requirements for their
                    desired positions. This user-friendly tool ensures accurate risk assessment, aiding in informed
                    decision-making. By inputting trade parameters, users gain insights into potential leverage and
                    margin levels, promoting responsible trading practices. Stay ahead in the dynamic forex market with
                    Forex 235's Margin Calculator, a vital ally for managing risk and optimizing trading strategies.
                </p>
                <p class="text-center"><a href="{{ route('forex.calculator') }}" class="btn platform-btn">Calculate
                        Now</a></p>
            </div>
        </div>
        <div class="row profitCalculator text-white">
            <div class="col-md-6 p-4 align-self-center">
                <img class="img-fluid" src="Assets/images/forex profit calculator.webp" alt="forex profit calculator">
            </div>
            <div class="col-md-6 p-4">
                <h2 class="text-center">Profit Calculator</h2>
                <p>
                    Forex 235 offers a user-friendly Profit Calculator tool, empowering traders to swiftly assess
                    potential earnings. This essential feature enables users to input trade parameters such as currency
                    pair, trade size, and leverage, providing instant calculations of potential profits. The tool
                    ensures transparency and aids in strategic decision-making by allowing traders to anticipate returns
                    based on their specific trading preferences. With Forex 235's Profit Calculator, users can optimize
                    risk management and tailor their trading strategies for a more informed and profitable trading
                    experience.
                </p>
                <p class="text-center"><a href="{{ route('profit.calculator') }}" class="btn platform-btn">Calculate
                        Profit</a></p>
            </div>
        </div>
        <div class="row technicalTools text-white">
            <div class="col-md-6 p-4 align-self-center">
                <img class="img-fluid" src="Assets/images/forex technical tools.webp" alt="forex technical tools">
            </div>
            <div class="col-md-6 p-4">
                <h2 class="text-center">Market Technical Analysis</h2>
                <p>
                    Forex 235 employs sophisticated Market Technical Analysis techniques to evaluate price charts and
                    historical market data. Utilizing advanced chart patterns, indicators, and statistical models, they
                    analyze market trends and potential price movements. This enables informed decision-making for
                    traders, helping them identify entry and exit points in the dynamic forex market. With a focus on
                    technical indicators, Forex 235 ensures traders stay ahead by harnessing the power of data-driven
                    insights in their trading strategies.
                </p>
                <p class="text-center">
                    <a href="{{ route('technical.analysis') }}" class="btn platform-btn">
                        Market Analysis
                    </a>
                </p>
            </div>
        </div>
        <div class="row indicators text-white p-4">
            <h2 class="text-center py-2">Most Popular Indicators</h2>
            <div class="col-md-4">
                <div class="col">
                    <img class="img-fluid" src="Assets/images/RSI.webp" alt="Relative Strength Index">
                </div>
                <div class="col">
                    <h3>Relative Strength Index (RSI): </h3>
                    <p>
                        RSI, a key tool in technical analysis, gauges price movement speed and change. Developed by J.
                        Welles Wilder, it helps identify overbought/oversold conditions, aiding traders in predicting
                        trend reversals.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col">
                    <img class="img-fluid" src="Assets/images/Bollinger Band.webp" alt="Bollinger Bands">
                </div>
                <div class="col">
                    <h3>Bollinger Bands: </h3>
                    <p>
                        Bollinger Bands: Traders use this tool to gauge volatility and potential price levels. Created
                        by John Bollinger, it involves a middle band (N-period SMA) and two outer bands (N-period SDs).
                        Adjust N for analysis timeframe.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col">
                    <img class="img-fluid" src="Assets/images/MCAD Moving Average.webp" alt="MCAD Moving Average">
                </div>
                <div class="col">
                    <h3>MACD (Moving Average): </h3>
                    <p>
                        MACD, by Gerald Appel, gauges stock trend changes, revealing strength, direction, momentum, and
                        duration in a concise 160 characters.
                    </p>
                </div>
            </div>

        </div>
    </div>
    <!-- Forex tools section end  -->



    <!--- midfooer shortcut link start --->
    @include('templates.midfooter')
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
