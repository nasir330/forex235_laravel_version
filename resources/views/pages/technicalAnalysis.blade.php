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
    
    <!-- technical section start  -->
    <section>
        <div class="row p-4">
            <div style="height:450px;" class="col-md-9 border">
                <h4>Screener Widget</h4>
            </div>
            <div style="height:450px;" class="col-md-3 border">
                <h4>Top Stories Widget</h4>
            </div>
        </div>
    </section>
    <!-- technical section  end -->

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

<x-footer/>