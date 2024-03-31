<x-header />

<body>
    <x-octa-menu />
    {{-- <x-exness-menu /> --}}
    {{-- <x-menu /> --}}
    <!--ticker tape-->
    @include('templates.tickerTape')


    <!-- AI Robot page header  section start  -->
    <div class="container-fluid">
        <div class="row text-right">
            <div class="col-md-12 aiRobot align-self-right">
                <h1 class="ml-auto">Trade on AI Robot</h1>
            </div>
        </div>
    </div>
    <!-- AI Robot page header section end  -->

    <!-- AI Robot package  section start  -->
    <div class="container">
        <div style="border:1px solid black; margin-top:30px;">
            <div class="row bg-dark text-white">
                <h2 class="text-center mt-3 py-3">Choose your Expert Advisor</h2>
            </div>
            <!--forex EA start-->
            <div class="row robotCurrencyBg">
                <div class="col-md-6 p-4 text-center zoom-in">
                    <img style="width:80%;" class="img-fluid" src="Assets/images/aiRobot02.jpg"
                        alt="Forex Margin Calculator">
                </div>
                <div class="col-md-6 p-4 align-self-center text-center text-white zoom-in">
                    <img style="width:80%;" class="img-fluid" src="Assets/images/bannerCurrencyBot.webp"
                        alt="Forex Margin Calculator">
                    <h1 class="text-center">Trading Robot <em class="text-primary">Forex</em></h1>
                    <h5 class="px-2 text-justify">
                        "Automated Forex trading robots execute trades based on programmed algorithms, aiming to
                        maximize profits in currency markets efficiently."
                    </h5>
                    <h5 class="text-center text-white bg-primary px-2 py-1">
                        Price $499.00 - $3000.00
                    </h5>
                    <p class="text-center">
                        <a href="{{ route('aiRobot.shopCurency') }}" class="btn btn-outline-warning">
                            Make Your Choise
                        </a>
                    </p>
                </div>
            </div>
            <!--forex EA end-->

            <!--Gold EA start-->
            <div class="row robotGoldBg">
                <div class="col-md-6 p-4 text-center zoom-in">
                    <img style="width:80%;" class="img-fluid" src="Assets/images/aiRobot03.jpg"
                        alt="Forex Margin Calculator">
                </div>
                <div class="col-md-6 p-4 align-self-center text-center text-white zoom-in">
                    <img style="width:80%;" class="img-fluid" src="Assets/images/bannerGoldBot.webp"
                        alt="Forex Margin Calculator">
                    <h1 class="text-center">Trading Robot <em class="text-warning">Gold</em></h1>
                    <h5 class="px-2 text-justify">
                        "Automated Forex trading robots execute trades based on programmed algorithms, aiming to
                        maximize profits in currency markets efficiently."
                    </h5>
                    <h5 class="text-center text-white bg-primary px-2 py-1">
                        Price  $999.00 - $5000.00
                    </h5>
                    <p class="text-center">
                        <a href="{{ route('aiRobot.shopGold') }}" class="btn btn-outline-warning">
                            Make Your Choise
                        </a>
                    </p>
                </div>
            </div>
            <!--Gold EA end-->

            <!--Crypto EA start-->
            <div class="row robotCryptoBg">
                <div class="col-md-6 p-4 text-center zoom-in">
                    <img style="width:80%;" class="img-fluid" src="Assets/images/aiRobot04.jpg"
                        alt="Forex Margin Calculator">
                </div>
                <div class="col-md-6 p-4 align-self-center text-center text-white zoom-in">
                    <img style="width:80%;" class="img-fluid" src="Assets/images/bannerCryptoBg.webp"
                        alt="Forex Margin Calculator">
                    <h1 class="text-center">Trading Robot <em class="text-white">Crypto</em></h1>
                    <h5 class="px-2 text-justify">
                        "Automated Forex trading robots execute trades based on programmed algorithms, aiming to
                        maximize profits in currency markets efficiently."
                    </h5>
                    <h5 class="text-center text-white bg-primary px-2 py-1">
                        Price $499.00 - $3000.00
                    </h5>
                    <p class="text-center">
                        <a href="{{ route('aiRobot.shopCrypto') }}" class="btn btn-outline-warning">
                            Make Your Choise
                        </a>
                    </p>
                </div>
            </div>
            <!--Crypto EA end-->
        </div>

    </div>
    <!-- AI Robot package section end  -->



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
