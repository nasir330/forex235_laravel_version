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

    <!-- Commodities market start  -->
    <section>
        <div class="row p-4">
            <div class="col-md-8 border text-center p-4">
                <h2 class="border-bottom">Trading Commodities</h1>
                    <p class="forex-market">
                        Trading commodities with <strong>Forex 235</strong> offers numerous benefits for traders. One major advantage is
                        portfolio diversification, as including commodities reduces overall risk and potentially
                        enhances profitability. <strong>Forex 235</strong> also grants access to global markets, enabling traders to
                        capitalize on price fluctuations in various regions. Moreover, trading commodities with Forex
                        235 allows for leveraged trading, which can magnify potential profits. Additionally, <strong>Forex 235</strong>
                        provides advanced trading tools and technologies, empowering traders to analyze and execute
                        commodity trades efficiently. These tools assist in effective decision-making and enhance the
                        overall trading experience. In summary, by trading commodities with <strong>Forex 235</strong>, traders can
                        diversify their portfolios, access global markets, utilize leverage, and leverage advanced
                        trading tools to optimize their trading strategies and achieve their financial goals.
                    </p>
            </div>
            <div class="col-md-4 border text-center p-4">
                <img class="img-fluid" src="Assets/images/trading-commodities.webp" alt="Trade on Commdities">
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 paymentFeesSection">
                <div class="row">
                    <div class="col-md-12 text-center bg-dark text-light m-1">
                        <h1 class="text-uppercase">Commodities major pair's list table</h1>
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
                                    <td>XAGEUR</td>
                                    <td>Silver <strong class="text-danger">VS</strong> Euro / Spot</td>
                                    <td>Monday | 5:00</td>
                                    <td>Friday | 23:59</td>
                                </tr>
                                <tr>
                                    <td>XAGUSD</td>
                                    <td>Silver</td>
                                    <td>Monday | 5:00</td>
                                    <td>Friday | 23:59</td>
                                </tr>
                                <tr>
                                    <td>XAUEUR</td>
                                    <td>Gold <strong class="text-danger">VS</strong> Euro / Spot</td>
                                    <td>Monday | 5:00</td>
                                    <td>Friday | 23:59</td>
                                </tr>
                                <tr>
                                    <td>XAUUSD</td>
                                    <td>Gold</td>
                                    <td>Monday | 5:00</td>
                                    <td>Friday | 23:59</td>
                                </tr>
                                <tr>
                                    <td>XPDUSD</td>
                                    <td>Palladium</td>
                                    <td>Monday | 5:00</td>
                                    <td>Friday | 23:59</td>
                                </tr>
                                <tr>
                                    <td>XPTUSD</td>
                                    <td>Platinum</td>
                                    <td>Monday | 5:00</td>
                                    <td>Friday | 23:59</td>
                                </tr>
                                <tr>
                                    <td>Oilusd</td>
                                    <td>OIL <strong class="text-danger">VS</strong> United States Dollar</td>
                                    <td>Monday | 5:00</td>
                                    <td>Friday | 23:59</td>
                                </tr>                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Commodities market  end -->

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
