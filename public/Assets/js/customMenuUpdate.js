
$(document).ready(function () {

    $('.dropdown-item').css({ 'color': '#fff' });
    /* Change the color on hover */
    $('.dropdown-item').hover(
        function () {
            $(this).css({ 'color': '#222' });
        },
        function () {
            $(this).css({ 'color': '#fff' });
        }
    );


    //Define Desktop OctaStyle Menu function
    function octaDesktopMenu() {
        // Common function to handle mouse enter and mouse leave events
        function handleMenuEvents(content) {
            $('#menuListContainer').html(content).fadeIn();
            $('.container-fluid').css('z-index', '2'); // Set a high z-index for the container
        }
        // Define a variable to keep track of the currently active menu
        var currentMenu = null;
        function resetMenuStyles() {
            // Reset background color for all menu items
            $('.container-fluid li').css('background-color', 'transparent');
        }

        // Mouse enter event for #tradingMenu
        $('#tradingMenu').mouseenter(function () {
            resetMenuStyles();
            $(this).css('background-color', '#222');
            handleMenuEvents($('#trading').html());
            currentMenu = 'trading';
        });
        // Mouse enter event for #platformMenu
        $('#platformMenu').mouseenter(function () {
            resetMenuStyles();
            $(this).css('background-color', '#222');
            handleMenuEvents($('#platforms').html());
            currentMenu = 'platforms';
        });
        // Mouse enter event for #marketsMenu
        $('#marketsMenu').mouseenter(function () {
            resetMenuStyles();
            $(this).css('background-color', '#222');
            handleMenuEvents($('#markets').html());
            currentMenu = 'markets';
        });
        // Mouse enter event for #newsAnalysisMenu
        $('#newsAnalysisMenu').mouseenter(function () {
            resetMenuStyles();
            $(this).css('background-color', '#222');
            handleMenuEvents($('#newsAnalysis').html());
            currentMenu = 'newsAnalysis';
        });
        // Mouse enter event for #educationMenu
        $('#educationMenu').mouseenter(function () {
            resetMenuStyles();
            $(this).css('background-color', '#222');
            handleMenuEvents($('#education').html());
            currentMenu = 'education';
        });



        //  hide menu when mouse goes #homeMenu
        $('#homeMenu').mouseenter(function () {
            resetMenuStyles();
            $(this).css('background-color', '#222'); 
            $('#menuListContainer').html('').fadeOut();          
        });
        //  hide menu when mouse goes up
        $('#topMenu').mouseenter(function () {
            $('#menuListContainer').html('').fadeOut();
            $('.container-fluid').css('z-index', 'auto');
            resetMenuStyles();
            currentMenu = null;
        });
        //  hide menu when mouse goes down
        $('#menuListContainer').on('mouseleave', function (e) {
            var menuListContainer = $('#menuListContainer');
            var mouseY = e.clientY;

            if (mouseY > menuListContainer.offset().top + menuListContainer.outerHeight()) {
                menuListContainer.html('').fadeOut();
                $('.container-fluid').css('z-index', 'auto');
                resetMenuStyles();
                currentMenu = null;
            }
        });

    }
    octaDesktopMenu(); //call  Desktop OctaStyle Menu function


    // Define responsive octaStyle menu function
    function octaStyleMenu() {

        /* ######## responsive menu handler start #########*/
        $('.menuBtn').on('click', function () {
            $('#mySidenav').toggleClass('menu-open');
        });
        //click close handler
        $('.closebtn').on('click', function () {
            $('#mySidenav').removeClass('menu-open');
        });
        /* ######## responsive menu handler end #########*/

        /* ######## Sub-menu handler start #########*/
        // tradingDataMenu open handler
        $('#tradingMobileMenu').on('click', function () {
            $('.tradingDataMenu').toggleClass('menu-open');
        });
        //tradingDataMenu back handler
        $('.backBtn').on('click', function () {
            $('.tradingDataMenu').removeClass('menu-open');
        });
        //tradingDataMenu close handler
        $('.menuClosebtn').on('click', function () {
            $('.tradingDataMenu,#mySidenav').removeClass('menu-open');
        });

        // platformMobilemenu open handler
        $('#platformMobilemenu').on('click', function () {
            $('.platformDataMenu').toggleClass('menu-open');
        });
        //platformMobilemenu back handler
        $('.backBtn').on('click', function () {
            $('.platformDataMenu').removeClass('menu-open');
        });
        //platformMobilemenu close handler
        $('.menuClosebtn').on('click', function () {
            $('.platformDataMenu,#mySidenav').removeClass('menu-open');
        });
        // marketDataMenu open handler
        $('#marketsMobileMenu').on('click', function () {
            $('.marketDataMenu').toggleClass('menu-open');
        });
        //marketDataMenu back handler
        $('.backBtn').on('click', function () {
            $('.marketDataMenu').removeClass('menu-open');
        });
        //marketDataMenu close handler
        $('.menuClosebtn').on('click', function () {
            $('.marketDataMenu,#mySidenav').removeClass('menu-open');
        });
        // newsAnalysisDataMenu open handler
        $('#newsAnalysisMobileMenu').on('click', function () {
            $('.newsAnalysisDataMenu').toggleClass('menu-open');
        });
        //newsAnalysisDataMenu back handler
        $('.backBtn').on('click', function () {
            $('.newsAnalysisDataMenu').removeClass('menu-open');
        });
        //newsAnalysisDataMenu close handler
        $('.menuClosebtn').on('click', function () {
            $('.newsAnalysisDataMenu,#mySidenav').removeClass('menu-open');
        });
        // toolsEducationDataMenu open handler
        $('#toolsEducationMobileMenu').on('click', function () {
            $('.toolsEducationDataMenu').toggleClass('menu-open');
        });
        //toolsEducationDataMenu back handler
        $('.backBtn').on('click', function () {
            $('.toolsEducationDataMenu').removeClass('menu-open');
        });
        //toolsEducationDataMenu close handler
        $('.menuClosebtn').on('click', function () {
            $('.toolsEducationDataMenu,#mySidenav').removeClass('menu-open');
        });
        /* ######## Sub-menu handler end #########*/
    }
    octaStyleMenu(); // call octaStyle menu function

});
