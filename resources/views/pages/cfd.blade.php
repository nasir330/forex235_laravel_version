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

    <!-- CFD's market start  -->
    <section>
        <div class="row p-4">
            <div class="col-md-8 border text-center p-4">
                <h2 class="border-bottom">Trading CFD's</h1>
                    <p class="forex-market">
                        Trading CFDs with <strong>Forex 235</strong> can be a lucrative investment strategy due to its ability to
                        speculate on various financial instruments without owning the underlying assets. <strong>Forex 235</strong>, a
                        popular online broker, offers a wide range of CFDs like currencies, commodities, stocks, and
                        indices. Leverage is a key advantage, allowing traders to control larger positions with less
                        capital, but it also magnifies both profits and losses, necessitating a solid risk management
                        strategy. <strong>Forex 235</strong> provides advanced trading tools such as MetaTrader 4, offering real-time
                        market data, charting capabilities, and customizable indicators. With these tools, traders can
                        analyze market trends, identify entry and exit points, and execute precise trades. This form of
                        trading allows investors to diversify their portfolios and potentially generate profits in both
                        rising and falling markets. It is important, however, to fully understand the risks involved and
                        develop a comprehensive trading plan before engaging in CFD trading with <strong>Forex 235</strong>.
                    </p>
            </div>
            <div class="col-md-4 border text-center p-4">
                <img class="img-fluid" src="Assets/images/trading-cfd.webp" alt="Trading on CFD">
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 paymentFeesSection">
                <div class="row">
                    <div class="col-md-12 text-center bg-dark text-light m-1">
                        <h1 class="text-uppercase">CFD's major pair's list table</h1>
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
                                    <td>#AAPL</td>
                                    <td>NASDAQ - APPLE</td>
                                    <td>Monday | 16:35</td>
                                    <td>Friday | 22:55</td>
                                </tr>
                                <tr>
                                    <td>UK.100</td>
                                    <td>FTSE 100 Index</td>
                                    <td>Monday | 8:00</td>
                                    <td>Friday | 4:30</td>
                                </tr>
                                <tr>
                                    <td>USA.30</td>
                                    <td>Dow Jones Industrial Average</td>
                                    <td>Monday | 9:30</td>
                                    <td>Friday | 4:00</td>
                                </tr>
                                <tr>
                                    <td>UK.OIL</td>
                                    <td>Brent Crude Oil</td>
                                    <td>Monday | 11:00</td>
                                    <td>Friday | 10:59</td>
                                </tr>
                                <tr>
                                    <td>GER.30</td>
                                    <td>DAX</td>
                                    <td>Monday | 9:00</td>
                                    <td>Friday | 5:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CFD's market  end -->

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
