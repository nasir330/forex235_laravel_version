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
                <h2 class="border-bottom">Trading Forex</h1>
                    <p class="forex-market">
                        <strong>Forex 235</strong> presents an excellent opportunity to trade forex and engage in the dynamic global
                        currency market. With a wide selection of currency pairs, including major, minor, and exotic
                        currencies, traders can diversify their portfolios and capitalize on diverse market trends.
                        <strong>Forex 235</strong> offers highly competitive spreads and low transaction costs, ensuring a cost-effective
                        trading experience for traders of all levels. Whether you are a novice or a seasoned trader,
                        <strong>Forex 235</strong> provides the necessary tools and resources to assist you in achieving success in the
                        forex market. With their extensive range of currency pairs and commitment to providing a
                        supportive trading environment, <strong>Forex 235</strong> is a reliable platform for traders looking to enter or
                        enhance their presence in the forex market. Start trading with <strong>Forex 235</strong> and take advantage of
                        the opportunities presented by the global currency market.
                    </p>
            </div>
            <div class="col-md-4 border text-center p-4">
                <img class="img-fluid" src="Assets/images/trading-forex.webp" alt="Trade on Forex">
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 paymentFeesSection">
                <div class="row">
                    <div class="col-md-12 text-center bg-dark text-light m-1">
                        <h1 class="text-uppercase">forex major pair's list table</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 tableContainer">
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
                                    <td>EURUSD</td>
                                    <td>Euro <strong class="text-danger">VS</strong> US Dollar</td>
                                    <td>Monday | 5:00</td>
                                    <td>Friday | 23:59</td>
                                </tr>
                                <tr>
                                    <td>GBPUSD</td>
                                    <td>Great Britain Pound <strong class="text-danger">VS</strong> US Dollar</td>
                                    <td>Monday | 5:00</td>
                                    <td>Friday | 23:59</td>
                                </tr>
                                <tr>
                                    <td>GBPJPY</td>
                                    <td>Great Britain Pound <strong class="text-danger">VS</strong> Japanese Yen</td>
                                    <td>Monday | 5:00</td>
                                    <td>Friday | 23:59</td>
                                </tr>
                                <tr>
                                    <td>AUDUSD</td>
                                    <td>Australian Dollar <strong class="text-danger">VS</strong> US Dollar</td>
                                    <td>Monday | 5:00</td>
                                    <td>Friday | 23:59</td>
                                </tr>
                                <tr>
                                    <td>USDJPY</td>
                                    <td>US Dollar <strong class="text-danger">VS</strong> Japanese Yen</td>
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
