<x-header />

<body>
    <x-octa-menu />
    {{-- <x-exness-menu /> --}}
    {{-- <x-menu /> --}}
    <!--ticker tape-->
    @include('templates.tickerTape')


    <!-- deposit and withdrawal card section start  -->
    <div class="container-fluid">
        <div class="row text-right">
            <div class="col-md-12 depositWithdrawalSection align-self-right">
                <h1 class="ml-auto">Deposit and Withdrawal</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 aboutUs align-self-right text-white">
                <h1 class="text-capitalize text-center">"Fast Track Your Finances"</h1>
                <h3 class="text-capitalize text-center">
                    Deposit Swiftly, Withdraw Smoothly
                </h3>
                <p class="mb-3">
                    Forex235 offer- your premier destination for seamless trading experiences! Our Deposit and
                    Withdrawal page is designed with your convenience in mind. Managing your Forex account has never
                    been easier.
                    Explore a plethora of secure options for swift deposits and hassle-free withdrawals. We understand
                    the importance of efficient transactions in the fast-paced world of online trading. With our
                    user-friendly tools, you can seamlessly navigate the markets, whether you're into Forex,
                    commodities, or cryptocurrencies.
                </p>
                <p class="mb-3">
                    At Forex235, we prioritize your financial journey. Our diverse range of account types caters to
                    traders of all levels. From beginners seeking the best trading tools to seasoned investors employing
                    advanced CFD techniques, we've got you covered.
                    Benefit from our expertise in technical analysis and stay ahead with our market insights. Discover
                    Forex trading strategies, commodity tips, and cryptocurrency analysis techniques that empower you to
                    make informed decisions. Our commitment extends to effective account management, ensuring your funds
                    are in safe hands.
                </p>
                <p class="mb-3">
                    Join Forex235 for an unparalleled trading experience, where every deposit and withdrawal is a
                    seamless step toward your financial goals. Trust us to provide the tools, analysis, and support you
                    need to thrive in the dynamic world of online trading.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="card-container">
                <div class="box-container">
                    <div class="col box-item">
                        <div class="flip-box">
                            <div class="flip-box-front flipbox-bg text-center">
                                <div class="inner color-white">
                                    <h2 class="flip-box-header">Free Deposit & Withdrawal</h2>
                                    <p><br></p>

                                    <i class="flipboxIcon fa-solid fa-circle-chevron-right"></i>
                                </div>
                            </div>
                            <div class="flip-box-back flipbox-bg text-center">
                                <div class="inner color-white">
                                    <h3 class="flip-box-header">Make Your Deposit</h3>
                                    <p>No hidden charges <br> No Commission</p>

                                    <button class="btn platform-btn">Deposit Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col box-item">
                        <div class="flip-box">
                            <div class="flip-box-front flipbox-bg text-center">
                                <div class="inner color-white">
                                    <h2 class="flip-box-header">Perfect Rates</h2>
                                    <p><br></p>

                                    <i class="flipboxIcon fa-solid fa-circle-chevron-right"></i>
                                </div>
                            </div>
                            <div class="flip-box-back flipbox-bg text-center">
                                <div class="inner color-white">
                                    <h3 class="flip-box-header">Calculator</h3>
                                    <p>Convert your currencies <br> on your best choice</p>

                                    <button class="btn platform-btn">Calculate Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col box-item">
                        <div class="flip-box">
                            <div class="flip-box-front flipbox-bg text-center">
                                <div class="inner color-white">
                                    <h2 class="flip-box-header">Deposit Bonus</h2>
                                    <p><br></p>

                                    <i class="flipboxIcon fa-solid fa-circle-chevron-right"></i>
                                </div>
                            </div>
                            <div class="flip-box-back flipbox-bg text-center">
                                <div class="inner color-white">
                                    <h3 class="flip-box-header">Deposit Boosting</h3>
                                    <p>Get upto 50% Deposit bonus <br> on your 1st deposit</p>

                                    <button class="btn platform-btn">Deposit Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- deposit and withdrawal card section end  -->



    <!-- payment method and fees section start  -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 paymentFeesSection">
                <div class="row">
                    <div class="col-md-12 text-center bg-dark text-light my-1">
                        <h1 class="text-uppercase">Payment methods and fees</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 tableContainer">
                        <table class="table table-dark table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th style="width:20%;">Method</th>
                                    <th>Minimum amount</th>
                                    <th>Commission</th>
                                    <th>Execution Time</th>
                                </tr>
                            </thead>
                            <tbody class="payments">
                                <tr>
                                    <td style="text-align: center;" class="px-1"> <img class="img-fluid"
                                            src="Assets/images/Binance-pay.webp" alt="crypto funding Binance Pay"></td>
                                    <td>100.00USDT</td>
                                    <td><strong>free</strong></td>                                    
                                    <td> <i class="fa-solid fa-bolt text-warning"></i> Instant</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;" class="px-1"> <img class="img-fluid"
                                            src="Assets/images/skrill-payment.webp" alt="Skrill Payment Wallet"></td>
                                    <td>100.00USDT</td>
                                    <td><strong>free</strong></td>
                                    <td> <i class="fa-solid fa-bolt text-warning"></i> Instant</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;"> <img class="img-fluid"
                                            src="Assets/images/neteller-payment.webp" alt="Neteller Payment Wallet">
                                    </td>
                                    <td>100.00USDT</td>
                                    <td><strong>free</strong></td>
                                    <td> <i class="fa-solid fa-bolt text-warning"></i> Instant</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- payment method and fees section end  -->

    <!-- mid footer section start  -->
    @include('templates.midfooter')
    <!-- mid footer section end  -->

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
