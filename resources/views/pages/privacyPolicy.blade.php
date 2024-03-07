<x-header />

<body>
    <x-octa-menu />
    {{-- <x-exness-menu /> --}}
    {{-- <x-menu /> --}}
    <!--ticker tape-->
    @include('templates.tickerTape')


    <!-- contact page header  section start  -->
    <div class="container-fluid">
        <div class="row text-right">
            <div class="col-md-12 privacyPolicyHeader align-self-right">
                <h1 class="ml-auto">Privacy Policy</h1>
            </div>
        </div>
    </div>
    <!-- contact page header section end  -->

    <!--Module content start-->
    <div class="container-fluid">
        <div class="privacyContent">
            <div class="row privacyPolicy px-4">
                <h1>Privacy Policy</h1>
                <p>
                    At Forex 235, safeguarding your privacy is paramount, and this Privacy Policy serves as our
                    commitment
                    to preserving the confidentiality of your personal and financial information. We prioritize online
                    security by employing cutting-edge technology to uphold your privacy and instill confidence in our
                    clients.
                </p>
            </div>
            <div class="row privacyPolicy px-4">
                <p>
                    When utilizing our applications, Forex 235, may gather the following information through various
                    online
                    forms tailored for specific services:
                </p>
                <ul>
                    <li>
                        Complete name, residential address,
                    </li>
                    <li>
                        contact details encompassing landline, mobile phone numbers, and email addresses.
                    </li>
                    <li>
                        Valid proof of identification.
                    </li>
                    <li>
                        Professional and employment particulars.
                    </li>
                    <li>
                        Financial details crucial for comprehensive service provision.
                    </li>
                    <li>
                        A comprehensive record of your trading history.
                    </li>
                </ul>
                <p>
                    Rest assured, our dedication to the security and privacy of your data remains unwavering, and we
                    continually strive to maintain the trust you place in Forex 235.
                </p>
            </div>
            <div class="row privacyPolicy px-4">
                <h4>Your Consent</h4>
                <p>
                    By accessing the Forex 235 website or furnishing personal information to us, you affirmatively
                    consent
                    to the gathering, utilization, and disclosure of your personal details in accordance with the terms
                    delineated in this Policy.
                </p>
            </div>
            <div class="row privacyPolicy px-4">
                <h4>How Your Information is Utilized</h4>
                <p>
                    At Forex 235, we uphold a strict policy against selling, leasing, licensing, or disclosing any
                    personal
                    information to external third-party entities or non-affiliates. However, there are specific
                    instances
                    where disclosure is deemed necessary, including:
                </p>
            </div>
            <div class="row privacyPolicy px-4">
                <p>
                    Compliance with legal obligations, wherein information may be shared with governmental or law
                    enforcement authorities as mandated by applicable laws.
                    Limited disclosure to our internal administrative, IT, and financial teams for operational purposes.
                    Collaboration with professional advisors such as solicitors, auditors, and accountants for
                    regulatory
                    compliance.
                    Engagement with credit reporting agencies for essential financial assessments.
                    Sharing within our corporate family, including subsidiaries and affiliates within the Forex 235
                    Group,
                    ensuring cohesive service provision.
                    Utilization for marketing purposes, enabling us to furnish you with relevant information about our
                    products and services.
                </p>
            </div>
            <div class="row privacyPolicy px-4">
                <p>
                    Your privacy is of utmost importance to us, and we welcome any inquiries or concerns you may have
                    regarding Forex 235' commitment to safeguarding your information. Feel free to reach out to us for
                    further clarification or assistance.
                </p>
            </div>
        </div>
    </div>


    <!--Module content end-->


    <!--- midfooer shortcut link start --->
    <div class="shortcut-links theme-bg">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="text-white mb-3"> <span class="border-bottom">Find us on</span></h5>
                    <a href="https://www.facebook.com/forex235t" target="_blank">
                        <i class="icons fa-brands fa-square-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="icons fa-brands fa-square-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="icons fa-brands fa-linkedin"></i>
                    </a>
                    <a href="#">
                        <i class="icons fa-brands fa-youtube"></i>
                    </a>
                    <br>
                    <a href="{{ route('contact') }}">Contact Us</a>
                </div>
                <div class="col-md-3">
                    <h5 class="text-white mb-3"> <span class="border-bottom">Our Markets</span></h5>
                    <ul>
                        <li><a href="{% url 'forex-market' %}">Forex</a></li>
                        <li><a href="{% url 'commodities-market' %}">Commodities</a></li>
                        <li><a href="{% url 'cfd-market' %}">CFD</a></li>
                        <li><a href="{% url 'crypto-market' %}">Crypto</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="text-white mb-3"> <span class="border-bottom">Trading Platforms</span></h5>
                    <ul>
                        <li><a href="https://web.forex235.com/">Web Platform</a></li>
                        <li><a href="{% url 'mt4-platform' %}">MT4</a></li>
                        <li><a href="{% url 'mt5-platform' %}">MT5</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="text-white mb-3"> <span class="border-bottom">Legal Info</span></h5>
                    <ul>
                        <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
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
