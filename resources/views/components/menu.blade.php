<nav class="navbar navbar-expand-lg text-light">
    <div class="container-fluid">
        <div class="col-md-3 col-6">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class="img-fluid" src="Assets/images/LOGO_02-ai.png" alt="">
            </a>
        </div>
        <button class="navbar-toggler menuBtn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-md-9 col-12 d-flex justify-content-end">

            <div class="collapse navbar-collapse menu" id="navbarScroll">
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
                                        <li><a href="{{route('deposit.withdrawal')}}">Deposits & Withdrawals</a></li>
                                        <li><a href="{{route('payment.optiions')}}">Payments Options</a></li>
                                        <li><a href="{{route('fund.security')}}">Funds Security</a></li>
                                       
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
                                        <li><a href="{{ route('platform.web') }}">Web Platform</a></li>
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
                                        <li class="border-top pb-2"><a href="{{ route('market.commodities') }}">more <i
                                                    class="menu-icon fa-solid fa-circle-chevron-right"></i></a></li>
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
                <form class="d-flex" role="search">

                    <button type="button" class="btn auth-btn m-1" data-bs-toggle="modal"
                        data-bs-target="#loginBox">
                        Login
                    </button>
                    <button type="button" class="btn auth-btn m-1" data-bs-toggle="modal"
                        data-bs-target="#registerBox">
                        Register
                    </button>

                </form>
            </div>
        </div>

    </div>
</nav>
