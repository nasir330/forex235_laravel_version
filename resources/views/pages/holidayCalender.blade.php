<x-header />

<body>
    <x-octa-menu />
    {{-- <x-exness-menu /> --}}
    {{-- <x-menu /> --}}
    <!--ticker tape-->
    @include('templates.tickerTape')

    <!--Holiday Calender start-->
    <div class="row">
        <div class="col-md-12 calender p-4 vh-100">
            <div id="economicCalendarWidget"></div>
            <script type="text/javascript">
                DukascopyApplet = {
                    "type": "holiday_calendar",
                    "params": {
                        "showHeader": false,
                        "tableBorderColor": "#D92626",
                        "showPastItems": false,
                        "defaultRegion": 0,
                        "width": "100%",
                        "height": "100%",
                        "adv": "popup"
                    }
                };
            </script>
            <script type="text/javascript" src="https://freeserv-static.dukascopy.com/2.0/core.js"></script>
        </div>
    </div>
    <!--Holiday Calender end-->

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
