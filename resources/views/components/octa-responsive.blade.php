<div class="row responsive-menu">
    <!--menu from left sidebar start-->
    <div id="mySidenav" class="sidenav">
        <div class="justify-content-start btn lang-btn">
            <a class="" href="#" id="navbarDropdownMenuLink78" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-us"></span></a>
        </div>
        <a href="javascript:void(0)" class="closebtn">&times;</a>
        <ul>
            <li class="px-3">
                <a href="#">Home</a>
            </li>
            <li id="tradingMobileMenu" class="px-3 d-flex justify-content-between align-items-center">
                <a href="#" class="text-decoration-none">Trading</a>
                <i class="menuArrow fa-regular fa-chevron-right text-white"></i>
            </li>
            <li id="platformMobilemenu" class="px-3 d-flex justify-content-between align-items-center">
                <a href="#" class="text-decoration-none">Platforms</a>
                <i class="menuArrow fa-regular fa-chevron-right text-white"></i>
            </li>
            <li id="marketsMobileMenu" class="px-3 d-flex justify-content-between align-items-center">
                <a href="#" class="text-decoration-none">Markets</a>
                <i class="menuArrow fa-regular fa-chevron-right text-white"></i>
            </li>
            <li id="newsAnalysisMobileMenu" class="px-3 d-flex justify-content-between align-items-center">
                <a href="#" class="text-decoration-none">News And Analysis</a>
                <i class="menuArrow fa-regular fa-chevron-right text-white"></i>
            </li>
            <li id="toolsEducationMobileMenu" class="px-3 d-flex justify-content-between align-items-center">
                <a href="#" class="text-decoration-none">Tools & Educatiion</a>
                <i class="menuArrow fa-regular fa-chevron-right text-white"></i>
            </li>
        </ul>
    </div>
    <!--menu from left sidebar end-->

    <!--responsive menu list item section start-->
    <!--tradingDataMenu start-->
    <div id="tradingDataMenu" class="tradingDataMenu">
        <a href="javascript:void(0)" class="backBtn"><i
                class="topMenuIcon fa-regular fa-left-long-to-line"></i></a>
        <a href="javascript:void(0)" class="menuClosebtn">&times;</a>
        <ul>
            <li class="px-3 d-flex justify-content-between align-items-center text-white"
                data-bs-toggle="collapse" data-bs-target="#finance" aria-expanded="false"
                aria-controls="finance">
                <span class="text-warning">
                    Finance
                </span>
                <i class="menuArrow fa-regular fa-chevron-down"></i>
            </li>
            <!--finance submemne items-->
            <div class="collapse" id="finance">
                <ul>
                    <li><a class="menu-data" href="{% url 'deposits-withdrawals' %}">Deposits & Withdrawals</a>
                    </li>
                    <li><a class="menu-data" href="#">Payments Options</a></li>
                    <li><a class="menu-data" href="{% url 'funds-security' %}">Funds Security</a></li>
                    <li><a href="https://ib.forex235.com/" target="_blank"  class="menu-data">Partner Program</a></li>
                        <li><a href="#"  class="menu-data">Referral Program</a></li>

                </ul>
            </div>
            <li class="px-3 d-flex justify-content-between align-items-center text-white"
                data-bs-toggle="collapse" data-bs-target="#tradingCondition" aria-expanded="false"
                aria-controls="tradingCondition">
                <span class="text-warning">
                    Trading Conditions
                </span>
                <i class="menuArrow fa-regular fa-chevron-down"></i>
            </li>
            <div class="collapse" id="tradingCondition">
                <ul>
                    <li><a class="menu-data" href="#">Account Types</a></li>
                    <li><a class="menu-data" href="#">Standard Account</a></li>
                    <li><a class="menu-data" href="#">Premium Account</a></li>
                    <li><a class="menu-data" href="#">VIP Account</a></li>
                    <li><a class="menu-data" href="#">Demo Account</a></li>                       
                </ul>
            </div>
            <li class="px-3 d-flex justify-content-between align-items-center text-white"
                data-bs-toggle="collapse" data-bs-target="#instrument" aria-expanded="false"
                aria-controls="instrument">
                <span class="text-warning">
                    Instruments
                </span>
                <i class="menuArrow fa-regular fa-chevron-down"></i>
            </li>
            <div class="collapse" id="instrument">
                <ul>
                    <li><a class="menu-data" href="#">Forex</a></li>
                    <li><a class="menu-data" href="#">Commodities</a></li>
                    <li><a class="menu-data" href="#">CFD</a></li>
                    <li><a class="menu-data" href="#">Crypto</a></li>
                </ul>
            </div>
        </ul>
    </div>
    <!--tradingDataMenu end-->

    <!--platformDataMenu start-->
    <div id="platformDataMenu" class="platformDataMenu">
        <a href="javascript:void(0)" class="backBtn"><i
                class="topMenuIcon fa-regular fa-left-long-to-line"></i></a>
        <a href="javascript:void(0)" class="menuClosebtn">&times;</a>
        <ul>
            <li class="px-3 d-flex justify-content-between align-items-center text-white"
                data-bs-toggle="collapse" data-bs-target="#finance" aria-expanded="false"
                aria-controls="finance">
                <span class="text-warning">
                    Web Platform
                </span>
                <i class="menuArrow fa-regular fa-chevron-down"></i>
            </li>
            <!--finance submemne items-->
            <div class="collapse" id="finance">
                <ul>
                    <li><a class="menu-data" href="{% url 'web-terminal' %}">Web Platform</a></li>

                </ul>
            </div>
            <li class="px-3 d-flex justify-content-between align-items-center text-white"
                data-bs-toggle="collapse" data-bs-target="#tradingCondition" aria-expanded="false"
                aria-controls="tradingCondition">
                <span class="text-warning">
                    MT4
                </span>
                <i class="menuArrow fa-regular fa-chevron-down"></i>
            </li>
            <div class="collapse" id="tradingCondition">
                <ul>
                    <li><a class="menu-data" href="#">Android</a></li>
                    <li><a class="menu-data" href="#">iOS</a></li>
                    <li><a class="menu-data" href="{% static 'platforms/forex235MT4setup.exe' %}">Windows</a></li>
                </ul>
            </div>
            <li class="px-3 d-flex justify-content-between align-items-center text-white"
                data-bs-toggle="collapse" data-bs-target="#instrument" aria-expanded="false"
                aria-controls="instrument">
                <span class="text-warning">
                    MT5
                </span>
                <i class="menuArrow fa-regular fa-chevron-down"></i>
            </li>
            <div class="collapse" id="instrument">
                <ul>
                    <li><a class="menu-data" href="#">Android</a></li>
                    <li><a class="menu-data" href="#">iOS</a></li>
                    <li><a class="menu-data" href="{% static 'platforms/forex235MT5setup.exe' %}">Windows</a></li>
                </ul>
            </div>
        </ul>
    </div>
    <!--platformDataMenu end-->

    <!--marketDataMenu start-->
    <div id="marketDataMenu" class="marketDataMenu">
        <a href="javascript:void(0)" class="backBtn"><i
                class="topMenuIcon fa-regular fa-left-long-to-line"></i></a>
        <a href="javascript:void(0)" class="menuClosebtn">&times;</a>
        <ul>
            <li class="px-3 d-flex justify-content-between align-items-center text-white"
                data-bs-toggle="collapse" data-bs-target="#forex" aria-expanded="false" aria-controls="forex">
                <span class="text-warning">
                    Forex
                </span>
                <i class="menuArrow fa-regular fa-chevron-down"></i>
            </li>
            <!--finance submemne items-->
            <div class="collapse" id="forex">
                <ul>
                    <li><a class="menu-data" href="{% url 'eur-usd-market' %}">EURUSD</a></li>
                    <li><a class="menu-data" href="{% url 'gbp-usd-market' %}">GBPUSD</a></li>
                    <li><a class="menu-data" href="{% url 'gbp-jpy-market' %}">GBPJPY</a></li>
                    <li><a class="menu-data" href="{% url 'aud-usd-market' %}">AUDUSD</a></li>
                    <li><a class="menu-data" href="{% url 'usd-jpy-market' %}">USDJPY</a></li>
                    <li><a class="menu-data" href="{% url 'forex-market' %}">More</a></li>
                </ul>
            </div>
            <li class="px-3 d-flex justify-content-between align-items-center text-white"
                data-bs-toggle="collapse" data-bs-target="#commodities" aria-expanded="false"
                aria-controls="commodities">
                <span class="text-warning">
                    Commodities
                </span>
                <i class="menuArrow fa-regular fa-chevron-down"></i>
            </li>
            <div class="collapse" id="commodities">
                <ul>
                    <li><a class="menu-data" href="{% url 'xag-eur-market' %}">XAGUER</a></li>
                    <li><a class="menu-data" href="{% url 'xag-usd-market' %}">XAGUSD</a></li>
                    <li><a class="menu-data" href="{% url 'xau-eur-market' %}">XAUEUR</a></li>
                    <li><a class="menu-data" href="{% url 'xau-usd-market' %}">XAUUSD</a></li>
                    <li><a class="menu-data" href="{% url 'oil-usd-market' %}">OILUSD</a></li>
                    <li><a class="menu-data" href="{% url 'commodities-market' %}">More</a></li>
                </ul>
            </div>
            <li class="px-3 d-flex justify-content-between align-items-center text-white"
                data-bs-toggle="collapse" data-bs-target="#cfd" aria-expanded="false" aria-controls="cfd">
                <span class="text-warning">
                    CFD
                </span>
                <i class="menuArrow fa-regular fa-chevron-down"></i>
            </li>
            <div class="collapse" id="cfd">
                <ul>
                    <li><a class="menu-data" href="{% url 'apple-inc-market' %}">#AAPL</a></li>
                    <li><a class="menu-data" href="{% url 'uk-100-market' %}">UK.100</a></li>
                    <li><a class="menu-data" href="{% url 'usa-30-market' %}">USA.30</a></li>
                    <li><a class="menu-data" href="{% url 'uk-oil-market' %}">UK.OIL</a></li>
                    <li><a class="menu-data" href="{% url 'ger-30-market' %}">GER.30</a></li>
                    <li><a class="menu-data" href="{% url 'cfd-market' %}">More</a></li>
                </ul>
            </div>
            <li class="px-3 d-flex justify-content-between align-items-center text-white"
                data-bs-toggle="collapse" data-bs-target="#crypto" aria-expanded="false" aria-controls="crypto">
                <span class="text-warning">
                    Crypto
                </span>
                <i class="menuArrow fa-regular fa-chevron-down"></i>
            </li>
            <div class="collapse" id="crypto">
                <ul>
                    <li><a class="menu-data" href="{% url 'btc-usd-market' %}">BTCUSD</a></li>
                    <li><a class="menu-data" href="{% url 'btc-eur-market' %}">BTCEUR</a></li>
                    <li><a class="menu-data" href="{% url 'ltc-usd-market' %}">LTCUSD</a></li>
                    <li><a class="menu-data" href="{% url 'eth-usd-market' %}">ETHUSD</a></li>
                    <li><a class="menu-data" href="{% url 'xrp-usd-market' %}">XRPUSD</a></li>
                    <li><a class="menu-data" href="{% url 'crypto-market' %}">More</a></li>
                </ul>
            </div>
        </ul>
    </div>
    <!--marketDataMenu end-->

    <!--newsAnalysisDataMenu start-->
    <div id="newsAnalysisDataMenu" class="newsAnalysisDataMenu">
        <a href="javascript:void(0)" class="backBtn"><i
                class="topMenuIcon fa-regular fa-left-long-to-line"></i></a>
        <a href="javascript:void(0)" class="menuClosebtn">&times;</a>
        <ul>
            <li class="px-3 d-flex justify-content-between align-items-center text-white"
                data-bs-toggle="collapse" data-bs-target="#technicalAnalysis" aria-expanded="false"
                aria-controls="technicalAnalysis">
                <span class="text-warning">
                    Technical Analysis
                </span>
                <i class="menuArrow fa-regular fa-chevron-down"></i>
            </li>
            <!--finance submemne items-->
            <div class="collapse" id="technicalAnalysis">
                <ul>
                    <li><a class="menu-data" href="{% url 'technical-analysis' %}">Technical Analysis</a></li>
                </ul>
            </div>
            <li class="px-3 d-flex justify-content-between align-items-center text-white"
                data-bs-toggle="collapse" data-bs-target="#fundamentalAnalysis" aria-expanded="false"
                aria-controls="fundamentalAnalysis">
                <span class="text-warning">
                    Fundamental Analysis
                </span>
                <i class="menuArrow fa-regular fa-chevron-down"></i>
            </li>
            <div class="collapse" id="fundamentalAnalysis">
                <ul>
                    <li><a class="menu-data" href="{% url 'economic-calendar' %}">Economic Calendar</a></li>
                </ul>
            </div>
            <li class="px-3 d-flex justify-content-between align-items-center text-white"
                data-bs-toggle="collapse" data-bs-target="#newsCalendar" aria-expanded="false"
                aria-controls="newsCalendar">
                <span class="text-warning">
                    News & Calendar
                </span>
                <i class="menuArrow fa-regular fa-chevron-down"></i>
            </li>
            <div class="collapse" id="newsCalendar">
                <ul>
                    <li><a class="menu-data" href="#">Holiday Calendar</a></li>
                </ul>
            </div>
        </ul>
    </div>
    <!--newsAnalysisDataMenu end-->

    <!--toolsEducationDataMenu start-->
    <div id="toolsEducationDataMenu" class="toolsEducationDataMenu">
        <a href="javascript:void(0)" class="backBtn"><i
                class="topMenuIcon fa-regular fa-left-long-to-line"></i></a>
        <a href="javascript:void(0)" class="menuClosebtn">&times;</a>
        <ul>
            <li class="px-3 d-flex justify-content-between align-items-center text-white"
                data-bs-toggle="collapse" data-bs-target="#tradingTools" aria-expanded="false"
                aria-controls="tradingTools">
                <span class="text-warning">
                    Trading Tools
                </span>
                <i class="menuArrow fa-regular fa-chevron-down"></i>
            </li>
            <!--finance submemne items-->
            <div class="collapse" id="tradingTools">
                <ul>
                    <li><a href="#">Forex Tools </a></li>
                    <li><a href="#">Forex Calculator </a></li>
                    <li><a href="#">Profit Calculator </a></li>
                </ul>
            </div>
            <li class="px-3 d-flex justify-content-between align-items-center text-white"
                data-bs-toggle="collapse" data-bs-target="#educatioin" aria-expanded="false"
                aria-controls="educatioin">
                <span class="text-warning">
                    Education
                </span>
                <i class="menuArrow fa-regular fa-chevron-down"></i>
            </li>
            <div class="collapse" id="educatioin">
                <ul>
                    <li><a href="{{route('education.forex')}}">What is Forex ? </a></li>
                    <li><a href="{{route('education.become.trader')}}">Become a Trader</a></li>
                    <li><a href="#">Forex Guid</a></li>
                </ul>
            </div>
            <li class="px-3 d-flex justify-content-between align-items-center text-white"
                data-bs-toggle="collapse" data-bs-target="#tradingGuide" aria-expanded="false"
                aria-controls="tradingGuide">
                <span class="text-warning">
                    Trading Guide's
                </span>
                <i class="menuArrow fa-regular fa-chevron-down"></i>
            </li>
            <div class="collapse" id="tradingGuide">
                <ul>
                    <li><a href="#">New To Forex ? </a></li>
                    <li><a href="#">Learn Forex Trading </a></li>
                </ul>
            </div>
        </ul>
    </div>
    <!--toolsEducationDataMenu end-->
    <!--responsive menu list item section end-->

    <!--auth Login menu from right sidebar start-->
    <div id="authSidenav" class="authsidenav">
        <a href="javascript:void(0)" class="authClosebtn">&times;</a>
        <div class="card">
            <h2 class="align-self-center text-white">Login</h2>
            <div class="card-header text-center">
                <img class="img-fluid" src="Assets/images/forex235_logo.svg" alt="Forex trading">
            </div>
            <div class="card-body bg-transparent">
                <form action="" class="loginForm">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control"
                            placeholder="name@example.com">
                        <label>Email address</label>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="password" class="form-control"
                            placeholder="Password">
                        <label>Password</label>
                    </div>
                    <div class="col text-center">
                        <p>
                            <a href="#">Forgot password ?</a>
                        </p>
                    </div>
                    <div class="col-6 text-center mx-auto mb-3">
                        <button class="btn platform-btn form-control" type="button">Login</button>
                    </div>
                    <div class="col text-center">
                        <span class="signup-link"> Don't have an account ? &nbsp; <strong id="signup-btn">Sign-up
                                Now</strong></span>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--auth Login menu from right sidebar end-->

    <!--auth register-menu from right sidebar start-->
    <div id="authRegisterResponsive" class="authsidenav">
        <a href="javascript:void(0)" id="authClosebtn" class="authClosebtn">&times;</a>
        <div class="card">
            <h2 class="align-self-center text-white">Sign-Up</h2>
            <div class="card-header text-center">
                <img class="img-fluid" src="Assets/images/forex235_logo.svg" alt="Forex Markets">
            </div>
            <div class="card-body bg-transparent">
                <form action="" class="loginForm registerform">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" 
                            placeholder="name@example.com">
                        <label>Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control"
                            placeholder="Password">
                        <label>Password</label>
                    </div>

                    <div class="col-6 text-center mx-auto mb-3">
                        <button class="btn platform-btn form-control" type="button">Sign Up</button>
                    </div>
                    <div class="col text-center">
                        <span class="signup-link"> Already have an account ? &nbsp; <strong id="signup-btn">Login
                                Now</strong></span>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--auth register-menu from right sidebar end-->

    <!--top navigation start-->
    <nav class="navbar navbar-expand-lg text-light theme-bg-color">
        <div class="col-3">
            <!--left menu button start-->
            <button class="btn btn-sm menuBtn" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
            <!--left menu button end-->
        </div>
        <div class="col-6 text-center">
            <!--Logo start-->
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class="img-fluid" src="Assets/images/forex235_logo.svg" alt="Forex market analysis">
            </a>
            <!--Logo end-->
        </div>
        <div class="col-3 d-flex justify-content-end">
            <!-- right auth menu button start-->
            <button class="btn btn-sm authMenuBtn mx-2 lang-btn" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="autIcon fa-duotone fa-right-to-bracket"></span>
            </button>
            <!-- right auth menu button end-->
        </div>
    </nav>
    <!--top navigation end-->
</div>