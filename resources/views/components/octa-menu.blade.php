<div class="container-fluid">
    <!--custom menu start-->
    <div class="custom-menu">
        <div id="topMenu" class="row theme-bg-color">
            <div class="col-2 logo d-flex justify-content-start">
                <img class="img-fluid" src="Assets/images/forex235_logo.svg" alt="Forex 235">
            </div>

            <div class="col d-flex justify-content-end align-self-center">
                <a href="#" class="btn auth-btn pcAuthLoginBtn mx-1">Login</a>
                <a href="#" class="btn auth-btn pcAuthRegisterBtn mx-1">Register</a>
                <div class="d-lg-block d-none dropdown btn lang-btn me-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink78"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                            class="flag-icon flag-icon-us"></span> English</a>
                    <div style="width:200px;" class="dropdown-menu theme-bg-color"
                        aria-labelledby="navbarDropdownMenuLink78">
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-us"></span> English</a>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-sa"></span> عربي</a>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-in"></span>
                            हिंदी</a>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-pk"></span>
                            اردو</a>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-bd"></span>
                            বাংলা</a>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-id"></span>
                            Bahasa Indonesia</a>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-my"></span>
                            Melayu</a>
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
                        <li id="homeMenu" class="px-3">
                            <span>
                                <a href="{{route('home')}}">Home</a>
                            </span>
                          
                        </li>
                        <li id="tradingMenu" class="px-3">
                           <span>Trading</span>
                        </li>
                        <li id="platformMenu" class="px-3">
                           <span>Platforms</span>
                        </li>
                        <li id="marketsMenu" class="px-3">
                           <span>Markets</span>
                        </li>
                        <li id="newsAnalysisMenu" class="px-3">
                           <span>News And Analysis</span>
                        </li>
                        <li id="educationMenu" class="px-3">
                           <span>Tools & Education</span>
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
                        <li><a href="{{route('page.ib')}}" target="_blank">Partner Program</a></li>
                        <li><a href="{{route('referal.program')}}">Referral Program</a></li>
                    </ul>
                </div>
                <div class="menu-data col-3">
                    <strong> Trading Conditions </strong>
                    <ul>
                        <li><a href="{{route('account.types')}}">Account Types</a></li>
                        <li><a href="{{route('account.standard')}}">Standard Account</a></li>
                        <li><a href="{{route('account.premium')}}">Premium Account</a></li>
                        <li><a href="{{route('account.vip')}}">VIP Account</a></li>
                        <li><a href="{{route('account.demo')}}">Demo Account</a></li>                       
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
                    <img class="img-fluid" src="Assets/images/updates/Traders House.webp" alt="Traders House">
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
                    <img class="img-fluid" src="Assets/images/trading-platforms.webp" alt="Trading Platforms">
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
                        <li><a href="{{route('economic.calender')}}">Economic Calender </a></li>
                    </ul>
                </div>
                <div class="menu-data col-3">
                    <strong> News & Calender</strong>
                    <ul>
                        <li><a href="{{route('holiday.calender')}}">Holiday Calender </a></li>
                    </ul>
                </div>
                <div class="menu-data col-3 text-center">
                    <img class="img-fluid" src="Assets/images/trading-platforms.webp" alt="Online Trading">
                </div>
            </div>
        </div>
        <div id="education" class="menu-list">
            <div class="row d-flex justify-content-around submenu-bg">
                <div class="menu-data col-3">
                    <strong> Trading Tools</strong>
                    <ul>
                        <li><a href="{{route('forex.tools')}}">Forex Tools </a></li>
                        <li><a href="{{route('forex.calculator')}}">Forex Calculator </a></li>
                        <li><a href="{{route('profit.calculator')}}">Profit Calculator </a></li>
                    </ul>
                </div>
                <div class="menu-data col-3">
                    <strong> Education </strong>
                    <ul>
                        <li><a href="{{route('education.forex')}}">What is Forex ? </a></li>
                        <li><a href="{{route('education.become.trader')}}">Become a Trader</a></li>
                        <li><a href="Assets/pdf/Candle Sticks Pattern.pdf" target="_blank">Learn Candlesticks</a></li>

                    </ul>
                </div>
                <div class="menu-data col-3">
                    <strong> Trading Guide's</strong>
                    <ul>
                        <li><a href="{{route('education.newToForex')}}">New To Forex ? </a></li>
                        <li><a href="{{route('education.learnForex')}}">Learn Forex Trading </a></li>
                    </ul>
                </div>
                <div class="menu-data col-3 text-center">
                    <img class="img-fluid" src="Assets/images/trading.webp" alt="Online Trading">
                </div>
            </div>
        </div>
    </div>
    <!--custom menu end-->

    <!--responsive menu start-->
    @include('components.octa-responsive')
    <!--responsive menu end-->
</div>
