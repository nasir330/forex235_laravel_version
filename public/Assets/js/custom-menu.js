
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
    
    // Common function to handle mouse enter and mouse leave events
    function handleMenuEvents(content) {
        $('#menuListContainer').html(content).fadeIn();
        $('.container-fluid').css('z-index', '1'); // Set a high z-index for the container
    }

    // Mouse enter event for #tradingMenu
    // $('#tradingMenu').mouseenter(function () {
    //     handleMenuEvents($('#trading').html());
    // });

    // Mouse enter event for #platformMenu
    $('#platformMenu').mouseenter(function () {
        handleMenuEvents($('#platforms').html());
    });
    // Mouse enter event for #marketsMenu
    $('#marketsMenu').mouseenter(function () {
        handleMenuEvents($('#markets').html());
    });
    // Mouse enter event for #newsAnalysisMenu
    $('#newsAnalysisMenu').mouseenter(function () {
        handleMenuEvents($('#newsAnalysis').html());
    });

    // Mouse leave event for both menus
    $('#menuListContainer').mouseleave(function () {
        $('#menuListContainer').html('').fadeOut();
        $('.container-fluid').css('z-index', 'auto'); // Reset z-index to default
    });

    // Mouse enter event for #educationMenu
    $('#educationMenu').mouseenter(function () {
        handleMenuEvents($('#education').html());
    });

    // Mouse leave event for both menus
    $('#menuListContainer').mouseleave(function () {
        $('#menuListContainer').html('').fadeOut();
        $('.container-fluid').css('z-index', 'auto'); // Reset z-index to default
    });

    // ############ Start of the  PC version login and register sidenav handler ################# 
    //define pcAuthLogin function
    function pcAuthLogin() {
        // click open handler

        $('.pcAuthLoginBtn').on('click', function () {
            $('.pcLoginSideNav').toggleClass('menu-open');
        });
        //click close handler
        $('.pcAuthClosebtn').on('click', function () {
            $('.pcLoginSideNav').removeClass('menu-open');
        });

        //login register switch
        $('.switchSignUp').on('click', function () {
            $('.pcLoginSideNav').removeClass('menu-open');
            $('.pcRegisterSideNav').toggleClass('menu-open');
        });
    }
    pcAuthLogin(); //call pcAuthLogin function  

    //define pcAuthRegister function
    function pcAuthRegister() {

        $('.pcAuthRegisterBtn').on('click', function () {
            $('.pcRegisterSideNav').toggleClass('menu-open');
        });
        //click close handler
        $('.pcAuthClosebtn').on('click', function () {
            $('.pcRegisterSideNav').removeClass('menu-open');
        });

        // switch register to  login
        $('.switchLogin').on('click', function () {
            $('.pcRegisterSideNav').removeClass('menu-open');
            $('.pcLoginSideNav').toggleClass('menu-open');
        });


    }
    pcAuthRegister(); //call pcAuthRegister function   
    // ############ End of the PC version login and register sidenav handler ################# 


    // ############ Start of the  respnnsive version login and register sidenav handler ################# 
    //Define responsiveAuthLogin function
    function responsiveAuthLogin() {

        // Function to toggle the right side auth-login menu
        function toggleLoginAuthNav() {
            $('#authSidenav').toggleClass('menu-open');
        }

        // Use the function in both click event for auth-login handlers
        $('.authMenuBtn, .authClosebtn').on('click', function () {
            toggleLoginAuthNav();
        });
    }
    responsiveAuthLogin(); //call responsiveAuthLogin function

    //Define responsiveAuthRegister function
    function responsiveAuthRegister() {

        // Function to toggle the right side auth menu
        function toggleRegisterhNav() {
            $('#authRegisterResponsive').toggleClass('menu-open');
        }

        // Use the function in both click event handlers
        $('#signup-btn, #authClosebtn').on('click', function () {
            toggleRegisterhNav();
        });
    }
    responsiveAuthRegister(); //call responsiveAuthRegister function  

    // ############ left side menu handler  of the respnnsive version end ################# 


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
