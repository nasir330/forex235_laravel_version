<x-header />

<body>
    <x-octa-menu />
    <!-- marquee start -->
    <div class="row">
        <div class="marqueeSection col-md-12">
            <marquee direction="left">
                We are working hard to meet our deadlines. Our team is dedicated and motivated to achieve our goals. We
                have a clear plan and are making progress every day. Our efforts are paying off, and we are seeing
                positive results. We will continue to work diligently to ensure success.
            </marquee>
        </div>
    </div>
    <!-- marquee end -->

    <!-- forex market start  -->
    <section>
        <div class="row p-4">
            <div class="col-md-6 border text-center p-4">
                <h2 class="border-bottom">Forex 235 <br>MT5 Platform</h1>
                    <p class="forex-market">
                        Embark on a new era of trading excellence with Forex 235's MT5 Terminal, redefining the
                        landscape of forex trading with unparalleled features and sophistication. Seamlessly blending
                        cutting-edge technology with user-friendly design, the MT5 Terminal from Forex 235 provides
                        traders with an advanced and intuitive platform for navigating the dynamic world of financial
                        markets.

                        Experience real-time data at your fingertips, empowering you to make informed decisions with
                        precision. Forex 235's MT5 Terminal is not just a tool for executing trades; it's a
                        comprehensive ecosystem that equips traders with the tools needed to analyze market trends
                        in-depth. Stay ahead of the curve by gaining valuable insights, enabling strategic
                        decision-making that aligns with your trading objectives.

                        Executing trades on the MT5 Terminal is a seamless and efficient process, thanks to its robust
                        architecture and lightning-fast execution speeds. Whether you're a seasoned trader or just
                        starting, the user-friendly interface ensures a smooth experience without compromising on the
                        depth of features.

                        Managing your portfolio reaches new heights of efficiency and control with the MT5 Terminal.
                        Forex 235's commitment to providing a gateway to success is evident in the platform's ability to
                        simplify complex tasks, allowing traders to focus on what matters most – making profitable
                        decisions in the ever-evolving financial markets.

                        Step into the future of forex trading with Forex 235's MT5 Terminal, where innovation meets
                        intuition, and success becomes a tangible reality. Unleash the power of MT5 in your trading
                        journey, and elevate your strategies in the competitive and dynamic world of financial markets.
                    </p>
            </div>
            <div class="col-md-6 border text-center p-4">
                <img class="img-fluid" src="Assets/images/MetaTrader-5.webp" alt="MetaTrader 5 Terminal">
            </div>
        </div>
    </section>
    <section>
        <div class="row platform-slogan">
            <div class="col-md-6 align-self-center">
                <h2>"MT5 Terminal: Unleash the Power of Precision Trading – Where Every Market Move is Your
                    Opportunity."</h2>
            </div>
            <div class="col-md-6 align-self-center">
                <div class="collapse" id="collapseExample">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-4">
                            <a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader5&hl=en&referrer=ref_id=5188659529960571285&server=DirectTradingTechUK-Demo.DirectTradingTechUK-Live"
                                target="_blank" class="btn icon-btn">
                                <img class="img-fluid" src="Assets/images/playstore.svg" alt="">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="https://apps.apple.com/us/app/metatrader-5/id413251709" target="_blank"
                                class="btn icon-btn"> <img src="Assets/images/appstore-btn.svg" alt=""></a>
                        </div>
                        <div class="col-md-4">
                            <a href="/Assets/platforms/forex235MT5setup.exe" download="forex235MT5setup.exe"
                                target="_blank" class="btn icon-btn"> <img src="Assets/images/windows.svg"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn platform-btn" data-bs-toggle="collapse"
                    data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Download MT5
                </button>
            </div>

        </div>

    </section>
    <!-- forex market  end -->

    <!-- mid footer start -->
    @include('templates.midfooter')
    <!-- mid footer end -->

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
