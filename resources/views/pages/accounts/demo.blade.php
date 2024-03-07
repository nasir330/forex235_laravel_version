<x-header />

<body>
    <x-octa-menu />
    {{-- <x-exness-menu /> --}}
    {{-- <x-menu /> --}}
    <!--ticker tape-->
    @include('templates.tickerTape')


    <!-- Forex Demo accouont header  start  -->
    <div class="container-fluid bg-dark">
        <div class="row text-right">
            <div class="col-md-12 demoAccount">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-10 demoContent text-white">
                <div class="col demoSection">
                    <h2 class="text-center">Demo Account</h2>
                    <p>
                        Forex 235 offers a demo account allowing traders to practice trading strategies in a
                        risk-free environment with virtual funds, honing skills and gaining confidence before
                        entering the real markets. It's an invaluable tool for beginners and experienced traders
                        alike.
                    </p>
                </div>
                <div class="col text-center">
                    <a href="#" class="btn platform-btn">Start Now</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row demoStepper text-white text-center">
                <div class="col-md-4 mt-2">
                    <h3><i class="icon fa-duotone fa-user-plus"></i></h3>
                    <h5> Create Demo Account</h5>
                    <p>
                        Trade smart, learn fast with our Forex demo account
                    </p>
                </div>
                <div class="col-md-4 mt-2">
                    <h3><i class="icon fa-solid fa-chart-mixed-up-circle-dollar"></i></h3>
                    <h5> Experience Real Instruments</h5>
                    <p>
                        Diversify with Stocks, Crypto, Commodities - Trade Forex Instruments Now
                    </p>
                </div>
                <div class="col-md-4 mt-2">
                    <h3><i class="icon fa-duotone fa-chess-knight"></i></h3>
                    <h5> Build Forex Strategies</h5>
                    <p>
                        Emulate success: Learn from top investors, build winning strategies
                    </p>
                </div>

            </div>
        </div>
        <div class="row demoProcess text-white">
            <div class="col-md-6 p-4">
                <h2 class="text-center">Make Your Trading Confidence</h2>
                <p>
                    Boost your trading confidence with strategic analysis, risk management, and continuous learning. Empower your decisions for financial success. 📈 #TradingConfidence
                </p>
                <h5>
                    How to create Forex Demo Account ?
                </h5>
                <p>
                    <ol>
                        <li><a href="#">Register </a>a Free Acoount or <a href="#">Log in </a></li>
                        <li>Access the demo account by selecting Forex 235 Demo</li>
                        <li>Now do practise trading in live market without risking any capital in real market </li>
                    </ol>
                </p>
                <p class="text-center">
                    <a href="#" class="btn platform-btn">Get Started</a>
                </p>
            </div>
            <div class="col-md-6 p-4">
                <img class="img-fluid" src="Assets/images/Trading Confidence.webp" alt="Forex Trading Confidence">
            </div>
        </div>
    </div>

    <!-- Forex Demo accouont header end  -->

    <!-- footer start -->
    @include('templates.midfooter')
    <!-- footer end -->

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
