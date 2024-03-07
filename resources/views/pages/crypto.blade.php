<x-header />

<body>
    <x-octa-menu />
     <!-- marquee start -->
     <div class="row">
        <div class="marqueeSection col-md-12">
            <marquee direction="left">
                We are working hard to meet our deadlines. Our team is dedicated and motivated to achieve our goals. We have a clear plan and are making progress every day. Our efforts are paying off, and we are seeing positive results. We will continue to work diligently to ensure success.
            </marquee>
        </div>
    </div>
    <!-- marquee end -->

    <!-- forex market start  -->
    <section>
        <div class="row p-4">
            <div class="col-md-8 border text-center p-4">
                <h2 class="border-bottom">Trading Crypto</h1>
                    <p class="forex-market">
                        Trading crypto with <strong>Forex 235</strong> has gained significant popularity due to the allure of high
                        profits and the volatile nature of the crypto market. However, it is crucial to comprehend the
                        inherent risks and approach crypto trading with caution. Leveraging trades is a notable
                        advantage when trading crypto with <strong>Forex 235</strong>, enabling control of larger positions with a
                        smaller capital outlay. Moreover, <strong>Forex 235</strong> offers a range of tools and indicators that aid in
                        making informed trading decisions. These tools can assist in analyzing market trends,
                        identifying potential entry and exit points, and managing risk effectively. Nonetheless, it is
                        vital to remember that crypto trading involves substantial risk, including potential losses.
                        Traders must thoroughly educate themselves, develop a robust trading strategy, and exercise
                        discipline to mitigate risks and maximize potential profits.
                    </p>
            </div>
            <div class="col-md-4 border text-center p-4">
                <img class="img-fluid" src="Assets/images/trading-crypto.webp" alt="trading on crypto">
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 paymentFeesSection">
                <div class="row">
                    <div class="col-md-12 text-center bg-dark text-light m-1">
                        <h1 class="text-uppercase">Crypto major pair's list table</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-dark table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Instrument/Symbol</th>
                                    <th>Description</th>
                                    <th>Opening Time</th>
                                    <th>Closing Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>BTCUSD</td>
                                    <td>Bitcoin <strong class="text-danger">VS</strong> US Dollar</td>
                                    <td>24/7</td>
                                    <td>24/7</td>
                                </tr>
                                <tr>
                                    <td>BTCEUR</td>
                                    <td>Bitcoin <strong class="text-danger">VS</strong> Euro</td>
                                    <td>24/7</td>
                                    <td>24/7</td>
                                </tr>
                                <tr>
                                    <td>LTCUSD</td>
                                    <td>Litecoin <strong class="text-danger">VS</strong> US Dollar</td>
                                    <td>24/7</td>
                                    <td>24/7</td>
                                </tr>
                                <tr>
                                    <td>ETHUSD</td>
                                    <td>Ethereum <strong class="text-danger">VS</strong> US Dollar</td>
                                    <td>24/7</td>
                                    <td>24/7</td>
                                </tr>
                                <tr>
                                    <td>XRPUSD</td>
                                    <td>Ripple <strong class="text-danger">VS</strong> US Dollar</td>
                                    <td>24/7</td>
                                    <td>24/7</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    
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
