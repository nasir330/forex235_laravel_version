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
            <div class="col-md-5 border text-center p-4">
                <h2 class="border-bottom">Forex 235 <br>Web Platform</h1>
                    <p class="forex-market">
                        Explore the world of forex seamlessly with Forex 235's web terminal. Packed with real-time data
                        and advanced tools, it offers a user-friendly interface for precise trade execution. Enjoy
                        secure access from any device, ensuring flexibility and efficiency in managing your forex
                        portfolio. Elevate your trading experience with Forex 235's cutting-edge web terminal.
                    </p>
            </div>
            <div class="col-md-7 border text-center p-4">
                <img class="img-fluid" src="Assets/images/webterminal.jpg" alt="">
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-md-6 platform-slogan">
               <h2>Trade with Precision, Anywhere, Anytime-Forex 235 Web Terminal: Your Gateway to Seamless Success in the Forex World.</h2>               
            </div>
            <div class="col-md-6 platform-slogan">
              <a id="weblink" href="#" class="btn platform-btn web-platform-btn">Coming Soon</a>
            </div>
           
        </div>
       
    </section>
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
