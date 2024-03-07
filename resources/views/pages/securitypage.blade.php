<x-header />

<body>
    <x-octa-menu />
    {{-- <x-exness-menu /> --}}
    {{-- <x-menu /> --}}
    <!--ticker tape-->
    @include('templates.tickerTape')

    <!-- deposit and withdrawal banner start  -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 securitySection">
                <h1>Top Priority of Fund Security</h1>
            </div>
        </div>
    </div>
    <!-- deposit and withdrawal banner end  -->

    <!-- security page content section-1 start  -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="securitypage col-md-8 align-self-center px-4">
                    <h1 class="mb-3">Secure Trading with Forex 235's Segregated Accounts</h1>
                    <p class="mb-3">
                        At Forex 235, safeguarding your investments is our top priority. Our Segregated Accounts feature
                        is designed to prioritize the safety of your funds by ensuring they are held separately from the
                        company's operational accounts. This extra layer of security provides reassurance, protecting
                        your capital even in unforeseen circumstances. With segregated accounts, you can trade with
                        confidence, knowing that your funds are ring-fenced and thoroughly protected.
                    </p>
                    <p class="mb-3">
                        This risk management practice not only enhances transparency but also prevents any potential
                        misuse of client funds. We understand the importance of a secure trading environment, and that's
                        why at Forex 235, your financial well-being is our utmost concern. Trust us to provide you with
                        the peace of mind you deserve while navigating the dynamic world of forex trading.
                    </p>
                    <p class="mb-3">
                        Invest wisely, trade securely, and choose Forex 235 for a reliable partner in your financial
                        journey. With our commitment to safety and transparency, we aim to create an environment where
                        you can focus on your trades without worrying about the security of your investments. Join us at
                        Forex 235 and experience the confidence that comes with a broker dedicated to your financial
                        success.
                    </p>
                </div>
                <div class="col-md-4 text-center p-4 align-self-center">
                    <img class="img-fluid" src="Assets/images/secure-trading.webp" alt="Secure Trading">
                </div>
            </div>
        </div>
    </section>
    <!-- security page content section-1 end  -->

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
