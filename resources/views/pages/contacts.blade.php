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
            <div class="col-md-12 standardAccount align-self-right">
                <h1 class="ml-auto">Contact Us</h1>
            </div>
        </div>
    </div>
    <!-- contact page header section end  -->

    <!--Module content start-->
    <div class="container-fluid">
        <div class="row p-4">
            <div class="col-md-6 contactUs mb-3">
                <div class="col">
                    <i class="flipboxIcon fa-duotone fa-envelope"></i>
                </div>
                <div class="col">
                    <h4>Send your Inquiry Via Email</h4>
                    <p>
                        Get us via <a href="mailto:contact@forex235.com">contact@forex235.com</a> and we'll get back to
                        you in 24 hours.
                    </p>
                </div>
                <div class="col">
                    <strong>Address :</strong>
                    <address>
                        Al Khor St, Naif, Deira, Dubai. <br>
                        UAE
                    </address>
                </div>
            </div>
            <div class="col-md-6 px-lg-4">
               <div class="col mb-3">
                <h4 class="text-capitalize">Fill the following information & Send us Your Inquiry</h4>
               
               </div>
                <form class="contactform" action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label mb-1">First Name</label>
                            <div class="input-group mb-3">                               
                                <input type="text" class="form-control" id="firstName"
                                    placeholder="Enter first name">
                            </div>
                        </div>                        
                        <div class="col-md-6">
                            <label for="lastName" class="form-label mb-1">Last Name</label>
                            <div class="input-group mb-3">                               
                                <input type="text" class="form-control" id="lastName"
                                    placeholder="Enter last name">
                            </div>
                        </div>                        
                        <div class="col-md-6">
                            <label for="country" class="form-label mb-1">Country</label>
                            <div class="input-group mb-3">                               
                                <input type="text" class="form-control" id="country"
                                    placeholder="Enter Country">
                            </div>
                        </div>                        
                        <div class="col-md-6">
                            <label for="city" class="form-label mb-1">City</label>
                            <div class="input-group mb-3">                               
                                <input type="text" class="form-control" id="city"
                                    placeholder="Enter City">
                            </div>
                        </div>                        
                        <div class="col-md-6">
                            <label for="phone" class="form-label mb-1">Phone</label>
                            <div class="input-group mb-3">                               
                                <input type="text" class="form-control" id="phone"
                                    placeholder="Enter phone number">
                            </div>
                        </div>                        
                        <div class="col-md-6">
                            <label for="email" class="form-label mb-1">Email</label>
                            <div class="input-group mb-3">                               
                                <input type="email" class="form-control" id="email"
                                    placeholder="Enter email">
                            </div>
                        </div>                        
                        <div class="col-md-12">
                            <label for="subject" class="form-label mb-1">Subject</label>
                            <div class="input-group mb-3">                               
                                <input type="text" class="form-control" id="subject"
                                    placeholder="Enter email">
                            </div>
                        </div>                        
                        <div class="col-md-12">
                            <label for="subject" class="form-label mb-1">Message</label>
                           <textarea name="" id="" rows="5" class="form-control mb-3"></textarea>
                        </div>                        
                        <div class="col-md-6">                           
                            <div class="input-group mb-3">                               
                               <button class="btn btn-dark">Send Inquiry</button>
                            </div>
                        </div>                        
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--Module content end-->


    <!--- midfooer shortcut link start --->
    <div class="shortcut-links theme-bg">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                <div class="col-md-4">
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
                </div>
                {{-- <div class="col-md-4">
                    <h5 class="text-white mb-3"> <span class="border-bottom">Our Markets</span></h5>
                    <ul>
                        <li><a href="products/forex.html">Forex</a></li>
                        <li><a href="#">Comodities</a></li>
                        <li><a href="#">CFD</a></li>
                        <li><a href="#">Crypto</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="text-white mb-3"> <span class="border-bottom">Trading Platforms</span></h5>
                    <ul>
                        <li><a href="#">Web Platform</a></li>
                        <li><a href="#">MT4</a></li>
                        <li><a href="#">MT5</a></li>
                    </ul>
                </div> --}}
                <div class="col-md-4">
                    <h5 class="text-white mb-3"> <span class="border-bottom">Our Markets</span></h5>
                    <ul>
                        <li><a href="{% url 'forex-market' %}">Forex</a></li>
                        <li><a href="{% url 'commodities-market' %}">Commodities</a></li>
                        <li><a href="{% url 'cfd-market' %}">CFD</a></li>
                        <li><a href="{% url 'crypto-market' %}">Crypto</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="text-white mb-3"> <span class="border-bottom">Trading Platforms</span></h5>
                    <ul>
                        <li><a href="https://web.forex235.com/" target="_blank">Web Platform</a></li>
                        <li><a href="{% url 'mt4-platform' %}" target="_blank">MT4</a></li>
                        <li><a href="{% url 'mt5-platform' %}" target="_blank">MT5</a></li>
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
