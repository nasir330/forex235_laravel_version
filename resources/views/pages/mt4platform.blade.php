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
                <h1 class="border-bottom">Forex 235 <br>MT4 Platform</h1>
                    <p class="forex-market">
                        Forex 235 introduces a cutting-edge trading experience with its MT4 Terminal, setting new
                        standards for efficiency in the forex market. This platform empowers traders with real-time data
                        and a suite of advanced tools, elevating the entire trading process.

                        The MT4 Terminal from Forex 235 enables users to seamlessly execute trades with precision. This
                        is made possible by the integration of real-time data, allowing traders to make informed
                        decisions at the right moment. The platform goes beyond mere execution, providing a
                        comprehensive toolset to analyze market trends. Traders can delve into in-depth analysis,
                        gaining insights that aid in making strategic and well-informed decisions.

                        Managing a portfolio becomes a streamlined and intuitive process with the MT4 Terminal. Forex
                        235 has crafted a user-friendly interface that ensures ease of use without compromising on
                        sophistication. This gateway to the dynamic world of forex opens up possibilities for traders to
                        navigate the markets with confidence and success.

                        Forex 235's commitment to a seamless and intuitive trading experience is underscored by the
                        integration of the MT4 Terminal. As traders embrace the power of this platform, they gain a
                        competitive edge in the ever-evolving forex landscape. With Forex 235, embark on a journey where
                        precision, efficiency, and success converge in the exciting realm of forex trading.
                    </p>
            </div>
            <div class="col-md-6 border text-center p-4">
                <img class="img-fluid" src="Assets/images/MetaTrader-4.webp" alt="MetaTrader 4 Terminal">
            </div>
        </div>
    </section>
    <section>
        <div class="row platform-slogan">
            <div class="col-md-6 align-self-center text-center">
                <h2>"MT4 Mastery Unleashed: Empowering Your Trades, Elevating Your Potential in Every Market Move."</h2>
            </div>
            <div class="col-md-6 align-self-center">
                <div class="collapse" id="collapseExample">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4&hl=en&pli=1"
                                target="_blank" class="btn icon-btn">
                                <img class="img-fluid" src="Assets/images/playstore.svg" alt="">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="https://apps.apple.com/us/app/metatrader-4/id496212596" target="_blank"
                                class="btn icon-btn"> <img src="Assets/images/appstore-btn.svg" alt=""></a>
                        </div>
                        <div class="col-md-4">
                            <a href="/Assets/platforms/forex235MT4setup.exe" download="forex235MT4setup.exe"
                                target="_blank" class="btn icon-btn"> <img src="Assets/images/windows.svg"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn platform-btn" data-bs-toggle="collapse"
                    data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Download MT4
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
