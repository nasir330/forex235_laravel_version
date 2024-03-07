<x-header />

<body>
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MRF5244F"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <x-octa-menu />
    {{-- <x-exness-menu /> --}}
    {{-- <x-menu /> --}}
    <!--ticker tape-->
    @include('templates.tickerTape')
    <!--marquee-->
    {{-- @include('templates.marquee')    --}}

 <!-- slider start -->
   @include('templates.slider')
 <!-- slider end -->

  <!-- about start -->
  @include('templates.about')
  <!-- about end -->

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