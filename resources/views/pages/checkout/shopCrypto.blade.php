<x-header />

<body>
    <x-octa-menu />
    {{-- <x-exness-menu /> --}}
    {{-- <x-menu /> --}}
    <!--ticker tape-->
    @include('templates.tickerTape')



    <!-- AI Robot package  section start  -->
    <div class="container">
        <div style="border:1px solid black; margin-top:30px;">
            <div class="row bg-dark text-white">
                <h2 class="text-center mt-3 py-3">Choose your Expert Advisor</h2>
            </div>
            <!--forex EA start-->
            <div class="row">
                <div class="col-md-6 p-4 align-self-center zoom-in">
                    <img style="width:100%;" class="img-fluid" src="Assets/images/bannerCurrencyBot.webp"
                        alt="Forex Margin Calculator">
                </div>
                <div class="col-md-6 p-4 text-left zoom-in">
                    <h3 class="text-uppercase">Trading Robot Crypto</h3>

                    <h1 class="px-2 py-1">
                        $499.00 -  $3000.00<sup style="font-size:14px; color:darkorange;">(Per Single Item)</sup>
                    </h1>
                    <p class="mt-4">
                        Maximize gains with our Crypto trading bot. Automate trades, gain insights, and optimize strategies for smarter investments in cryptocurrencies.
                    </p>
                    <div>
                        <form id="cryptoPackage" action="">
                            <div class="input-group mb-3">
                                <select onchange="packageSelector(this.form)"  name="" id="robotPackage" class="form-select form-control">
                                    <option value="">choose an Option</option>
                                    <option value="6m">6 months</option>
                                    <option value="1yr">One Year</option>
                                    <option value="lifetime">Lifetime</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <h4 id="priceContainer">$00.00</h4>
                            </div>
                            <div class="row">
                                <div style="width:100px;" class="input-group mb-3">
                                    <input type="number" name="itemPlus" value="1" class="form-control">
                                 </div>
                                 <div class="col input-group mb-3">
                                    <a href="{{route('aiRobot.checkout')}}" class="btn btn-outline-primary">
                                        Checkout
                                    </a>
                                 </div>
                            </div>
                            
                        </form>
                    </div>                   
                </div>

            </div>
            <!--forex EA end-->
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
