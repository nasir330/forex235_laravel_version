<x-header />

<body>
    <x-octa-menu />
    {{-- <x-exness-menu /> --}}
    {{-- <x-menu /> --}}
    <!--ticker tape-->
    @include('templates.tickerTape')
   
    <!--Economic Calender start-->
    <div class="row">
      <div class="col-md-12 calender p-4 vh-100">
          <div id="economicCalendarWidget"></div>
          <script async type="text/javascript" data-type="calendar-widget" src="https://www.tradays.com/c/js/widgets/calendar/widget.js?v=13">
              {
                  "width": "100%",
                  "height": "100%",
                  "mode": "1"
              }
          </script>
      </div>
  </div>
    <!--Economic Calender end-->

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