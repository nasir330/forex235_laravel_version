<div class="container-fluid">
    <!--custom menu start-->
    <div class="custom-menu">
        <div class="row theme-bg-color">
            <div class="col-2 logo d-flex justify-content-start">
                <img class="img-fluid" src="Assets/images/LOGO_02.svg" alt="">
            </div>

            <div class="col d-flex justify-content-end align-self-center">
                <a href="#" class="btn auth-btn pcAuthLoginBtn mx-1">Login</a>
                <a href="#" class="btn auth-btn pcAuthRegisterBtn mx-1">Register</a>
                <div class="d-lg-block d-none dropdown btn lang-btn me-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink78"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                            class="flag-icon flag-icon-us"></span> English</a>
                    <div class="dropdown-menu theme-bg-color" aria-labelledby="navbarDropdownMenuLink78">
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-us"></span> English</a>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-sa"></span> Arabic</a>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-in"></span>
                            Hindi</a>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-pk"></span>
                            Urdu</a>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-bd"></span>
                            Bangle</a>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-id"></span>
                            Indonesian</a>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-my"></span>
                            Malay</a>
                    </div>
                </div>
            </div>
            <!--PC Login and register section start-->
            @include('templates.login')
            @include('templates.register')
            <!--PC Login and register section end-->

        </div>
        <!--Mouse hoverable desktop menu item start-->
        <div class="row theme-bg-color">
            <div class="col menu-items align-self-center text-center">
                <nav>
                    <ul>
                        <li class="px-3">
                            <a href="#">Home</a>
                        </li>
                        <li id="tradingMenu" class="px-3">
                            <a href="">Trading</a>
                        </li>
                        <li id="platformMenu" class="px-3">
                            <a href="">Platforms</a>
                        </li>
                        <li id="marketsMenu" class="px-3">
                            <a href="">Markets</a>
                        </li>
                        <li id="newsAnalysisMenu" class="px-3">
                            <a href="">News And Analysis</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--Mouse hoverable desktop menu item end-->


        <!--menu list container start-->
        <div id="menuListContainer" class="container-fluid">

        </div>
        <!--menu list container end-->

        <div id="trading" class="menu-list">
            <div class="row d-flex justify-content-center submenu-bg">
                <div class="menu-data col-3">
                    <strong> Finance</strong>
                    <ul>
                        <li><a href="{{ route('deposit.withdrawal') }}">Deposits & Withdrawals</a></li>
                        <li><a href="{{ route('payment.optiions') }}">Payments Options</a></li>
                        <li><a href="{{ route('fund.security') }}">Funds Security</a></li>

                    </ul>
                </div>
                <div class="menu-data col-3">
                    <strong> Trading Conditions </strong>
                    <ul>
                        <li><a href="#">Account Types</a></li>
                        <li><a href="#">Standard Account</a></li>
                        <li><a href="#">Premium Account</a></li>
                        <li><a href="#">VIP Account</a></li>
                        <li><a href="#">Demo Account</a></li>
                        <li><a href="xauusd.html">Spread & Conditions</a></li>
                    </ul>
                </div>
                <div class="menu-data col-3">
                    <strong> Instruments</strong>
                    <ul>
                        <li><a href="{{ route('market.forex') }}">Forex</a></li>
                        <li><a href="{{ route('market.commodities') }}">Comodities</a></li>
                        <li><a href="{{ route('market.cfd') }}">CFD</a></li>
                        <li><a href="{{ route('market.crypto') }}">Crypto</a></li>
                    </ul>
                </div>
                <div class="menu-data col-3 text-center">
                    <img class="img-fluid" src="Assets/images/trading.png" alt="">
                </div>
            </div>
        </div>
        <div id="platforms" class="menu-list">
            <div class="row d-flex justify-content-around submenu-bg">
                <div class="menu-data col-3">
                    <strong> Web Platform</strong>
                    <ul>
                        <li><a href="https://web.forex235.com/" target="_blank">Web Platform </a></li>

                    </ul>
                </div>
                <div class="menu-data col-3">
                    <strong> MT4 </strong>
                    <ul>
                        <li><a href="#">Android</a></li>
                        <li><a href="#">iOS</a></li>
                        <li><a href="#">Windows</a></li>
                    </ul>
                </div>
                <div class="menu-data col-3">
                    <strong> MT5</strong>
                    <ul>
                        <li><a href="#">Android</a></li>
                        <li><a href="#">iOS</a></li>
                        <li><a href="#">Windows</a></li>
                    </ul>
                </div>
                <div class="menu-data col-3 text-center">
                    <img class="img-fluid" src="Assets/images/platforms.png" alt="">
                </div>
            </div>
        </div>
        <div id="markets" class="menu-list">
            <div class="row d-flex justify-content-around submenu-bg">
                <div class="menu-data col-3">
                    <strong> Forex</strong>
                    <ul>
                        <li><a href="eurusd.html">EURUSD</a></li>
                        <li><a href="#">GBPUSD</a></li>
                        <li><a href="#">GBPJPY</a></li>
                        <li><a href="audusd.html">AUDUSD</a></li>
                        <li><a href="#">USDJPY</a></li>
                        <li class="text-capitalize">
                            <a href="{{ route('market.forex') }}">
                                more <i class="fas fa-chevron-double-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="menu-data col-3">
                    <strong> Comodities</strong>
                    <ul>
                        <li><a href="#">XAGEUR</a></li>
                        <li><a href="#">XAGUSD</a></li>
                        <li><a href="#">XAUEUR</a></li>
                        <li><a href="xauusd.html">XAUUSD</a></li>
                        <li><a href="#">OILUSD</a></li>
                        <li class="text-capitalize">
                            <a href="{{ route('market.commodities') }}">
                                more <i class="fas fa-chevron-double-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="menu-data col-3">
                    <strong> CFD</strong>
                    <ul>
                        <li><a href="#">#AAPL</a></li>
                        <li><a href="#">UK.100</a></li>
                        <li><a href="#">USA.30</a></li>
                        <li><a href="#">UK.OIL</a></li>
                        <li><a href="#">GER.30</a></li>
                        <li class="text-capitalize">
                            <a href="{{ route('market.cfd') }}">
                                more <i class="fas fa-chevron-double-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="menu-data col-3">
                    <strong> Crypto</strong>
                    <ul>
                        <li><a href="#">BTCUSD</a></li>
                        <li><a href="#">BTCEUR</a></li>
                        <li><a href="#">LTCUSD</a></li>
                        <li><a href="#">ETHUSD</a></li>
                        <li><a href="#">XRPUSD</a></li>
                        <li class="text-capitalize">
                            <a href="{{ route('market.crypto') }}">
                                more <i class="fas fa-chevron-double-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="newsAnalysis" class="menu-list">
            <div class="row d-flex justify-content-around submenu-bg">
                <div class="menu-data col-3">
                    <strong> Technical Analysis</strong>
                    <ul>
                        <li><a href="#">Technical Analysis </a></li>

                    </ul>
                </div>
                <div class="menu-data col-3">
                    <strong> Fundamental Analysis </strong>
                    <ul>
                        <li><a href="#">Economic Calender </a></li>
                    </ul>
                </div>
                <div class="menu-data col-3">
                    <strong> News & Calender</strong>
                    <ul>
                        <li><a href="#">Holiday Calender </a></li>
                    </ul>
                </div>
                <div class="menu-data col-3">
                    item -1
                </div>
            </div>
        </div>
    </div>
    <!--custom menu end-->

    <!--responsive menu start-->
    <div class="row responsive-menu">
        <!--menu from left sidebar start-->
        <div id="mySidenav" class="sidenav">
            <div class="justify-content-start btn lang-btn">
                <a class="" href="#" id="navbarDropdownMenuLink78" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-us"></span></a>
            </div>
            <a href="javascript:void(0)" class="closebtn">&times;</a>
            <div class="" id="">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Trading
                        </a>
                        <div class="dropdown-menu">
                            <div class="row">
                                <div class="dropdown-data col-md-4">
                                    <strong> Finance</strong>
                                    <ul>
                                        <li><a href="{{ route('deposit.withdrawal') }}">Deposits & Withdrawals</a>
                                        </li>
                                        <li><a href="{{ route('payment.optiions') }}">Payments Options</a></li>
                                        <li><a href="{{ route('fund.security') }}">Funds Security</a></li>

                                    </ul>
                                </div>
                                <div class="dropdown-data col-md-4">
                                    <strong> Trading Accounts</strong>
                                    <ul>
                                        <li><a href="#">Account Types</a></li>
                                        <li><a href="#">Islamic account</a></li>
                                        <li><a href="#">Demo Account</a></li>
                                        <li><a href="xauusd.html">Spread & Conditions</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown-data col-md-4">
                                    <strong> Instruments</strong>
                                    <ul>
                                        <li><a href="#">Forex</a></li>
                                        <li><a href="#">CFD</a></li>
                                        <li><a href="#">Crypto</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Products and services
                        </a>
                        <div class="col dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <div class="row">
                                <div class="dropdown-data col-md-6">
                                    <strong> Trading Instruments</strong>
                                    <ul>
                                        <li><a href="{{ route('market.forex') }}">Forex</a></li>
                                        <li><a href="{{ route('market.commodities') }}">Comodities</a></li>
                                        <li><a href="{{ route('market.cfd') }}">CFD</a></li>
                                        <li><a href="{{ route('market.crypto') }}">Crypto</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown-data col-md-6">
                                    <strong> Platforms</strong>
                                    <ul>
                                        <li><a href="https://web.forex235.com/" target="_blank">Web Platform</a></li>
                                        <li><a href="{{ route('platform.mt4') }}">MT4</a></li>
                                        <li><a href="{{ route('platform.mt5') }}">MT5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Markets
                        </a>
                        <div class="dropdown-menu">
                            <div class="row">
                                <div class="dropdown-data col-md-3">
                                    <strong> Forex</strong>
                                    <ul>
                                        <li><a href="eurusd.html">EURUSD</a></li>
                                        <li><a href="#">GBPUSD</a></li>
                                        <li><a href="#">GBPJPY</a></li>
                                        <li><a href="audusd.html">AUDUSD</a></li>
                                        <li><a href="#">USDJPY</a></li>
                                        <li class="border-top pb-2"><a href="{{ route('market.forex') }}">more <i
                                                    class="menu-icon fa-solid fa-circle-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                                <div class="dropdown-data col-md-3">
                                    <strong> Comodities</strong>
                                    <ul>
                                        <li><a href="#">XAGEUR</a></li>
                                        <li><a href="#">XAGUSD</a></li>
                                        <li><a href="#">XAUEUR</a></li>
                                        <li><a href="xauusd.html">XAUUSD</a></li>
                                        <li><a href="#">OILUSD</a></li>
                                        <li class="border-top pb-2"><a href="{{ route('market.commodities') }}">more
                                                <i class="menu-icon fa-solid fa-circle-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                                <div class="dropdown-data col-md-3">
                                    <strong> CFD</strong>
                                    <ul>
                                        <li><a href="#">#AAPL</a></li>
                                        <li><a href="#">UK.100</a></li>
                                        <li><a href="#">USA.30</a></li>
                                        <li><a href="#">UK.OIL</a></li>
                                        <li><a href="#">GER.30</a></li>
                                        <li class="border-top pb-2"><a href="{{ route('market.cfd') }}">more <i
                                                    class="menu-icon fa-solid fa-circle-chevron-right"></i></a></li>

                                    </ul>
                                </div>
                                <div class="dropdown-data col-md-3">
                                    <strong> Crypto</strong>
                                    <ul>
                                        <li><a href="#">BTCUSD</a></li>
                                        <li><a href="#">BTCEUR</a></li>
                                        <li><a href="#">LTCUSD</a></li>
                                        <li><a href="#">ETHUSD</a></li>
                                        <li><a href="#">XRPUSD</a></li>
                                        <li class="border-top pb-2"><a href="{{ route('market.crypto') }}">more <i
                                                    class="menu-icon fa-solid fa-circle-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            News And Analysis
                        </a>
                        <div class="col dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <div class="row">
                                <div class="dropdown-data col-md-6">
                                    <ul>
                                        <li><a href="{{ route('technical.analysis') }}">Technical Analysis</a></li>
                                        <li><a href="{{ route('market.commodities') }}">Fundamental Analysis</a></li>
                                        <li><a href="{{ route('market.cfd') }}">News Calender</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--menu from left sidebar end-->

        <!--auth Login menu from right sidebar start-->
        <div id="authSidenav" class="authsidenav">
            <a href="javascript:void(0)" class="authClosebtn">&times;</a>
            <div class="card">
                <h2 class="align-self-center text-white">Login</h2>
                <div class="card-header text-center">
                    <img class="img-fluid" src="Assets/images/LOGO_02-ai.png" alt="">
                </div>
                <div class="card-body bg-transparent">
                    <form action="" class="loginForm">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="password" class="form-control" id="floatingPassword"
                                placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="col text-center">
                            <p>
                                <a href="#">Forgot password ?</a>
                            </p>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto mb-3">
                            <button class="btn btn-primary form-control" type="button">Login</button>
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
                    <img class="img-fluid" src="Assets/images/LOGO_02-ai.png" alt="">
                </div>
                <div class="card-body bg-transparent">
                    <form action="" class="loginForm registerform">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword"
                                placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto mb-3">
                            <button class="btn btn-primary form-control" type="button">Sign Up</button>
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

        <!--dorpdown navigation menu container start-->
        <div id="authSidenav" class="authsidenav">
            <a href="javascript:void(0)" class="authClosebtn">&times;</a>
            <h1>menu regardin items</h1>
        </div>
        <!--dorpdown navigation menu container end-->

        <!--top navigation start-->
        <nav class="navbar navbar-expand-lg text-light theme-bg-color">
            <div class="col-3">
                <!--left menu button start-->
                <button class="btn btn-sm navbar-toggler menuBtn mx-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fas fa-bars"></span>
                </button>
                <!--left menu button end-->
            </div>
            <div class="col-6 text-center">
                <!--Logo start-->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img class="img-fluid" src="Assets/images/LOGO_02.svg" alt="">
                </a>
                <!--Logo end-->
            </div>
            <div class="col-3 d-flex justify-content-end">
                <!-- right auth menu button start-->
                <button class="btn btn-sm navbar-toggler authMenuBtn mx-2 lang-btn" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="autIcon fa-duotone fa-right-to-bracket"></span>
                </button>
                <!-- right auth menu button end-->
            </div>
        </nav>
        <!--top navigation end-->
    </div>
    <!--responsive menu end-->
</div>
