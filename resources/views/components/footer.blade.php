@include('templates.supportBtn')


<script>
    // Function to show a specific topic and hide others
    function showTopic(topicId, clickedListItem) {
        // Remove highlight from all list items
        document.querySelectorAll('.lessonsList ul li').forEach(function(li) {
            li.classList.remove('highlighted');
        });

        // Highlight the clicked list item
        clickedListItem.parentElement.classList.add('highlighted');

        // Hide all topics
        document.querySelectorAll('.content-box .section').forEach(function(row) {
            row.classList.remove('active');
        });

        // Show the selected topic
        document.getElementById(topicId).classList.add('active');
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var h1Element = document.querySelector(".myCarrowselSlider h1");
        h1Element.classList.add("show");
    });
    document.addEventListener("DOMContentLoaded", function() {
        var h1Element = document.querySelector(".myCarrowselSlider h3");
        h1Element.classList.add("show");
    });
    document.addEventListener("DOMContentLoaded", function() {
        var h1Element = document.querySelector(".forexTools h1");
        h1Element.classList.add("show");
    });

    document.addEventListener("DOMContentLoaded", function() {
        var h1Element = document.querySelector(".depositWithdrawalSection h1");
        h1Element.classList.add("show");
    });
    document.addEventListener("DOMContentLoaded", function() {
        var h1Element = document.querySelector(".standardAccount h1");
        h1Element.classList.add("show");
    });
    document.addEventListener("DOMContentLoaded", function() {
        var h1Element = document.querySelector(".premiumAccount h1");
        h1Element.classList.add("show");
    });
    document.addEventListener("DOMContentLoaded", function() {
        var h1Element = document.querySelector(".vipAccount h1");
        h1Element.classList.add("show");
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var h1Element = document.querySelector(".privacyPolicyHeader h1");
        h1Element.classList.add("show");
    });
    document.addEventListener('DOMContentLoaded', function() {
        const elementsToAnimate = document.querySelectorAll(
            '.privacyPolicy h1, .privacyPolicy p, .privacyPolicy ul, .privacyPolicy h4');

        function checkScroll() {
            elementsToAnimate.forEach((element) => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenHeight = window.innerHeight;

                if (elementPosition < screenHeight * 0.75) {
                    element.classList.add('animate');
                }
            });
        }

        window.addEventListener('scroll', checkScroll);
        // Trigger checkScroll on page load
        checkScroll();
    });
</script>






<!--jQuery CDN Link -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

<!--Bootstrap JS CDN Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

<!--FontAwsome JS CDN -->
<script src="https://cdn.jsdelivr.net/gh/NOCNP/font-awesome-pro@main/fontawesome-pro-6.5.1-web/js/all.min.js"></script>

<!--custom menu js -->
{{-- <script src="Assets/js/custom-menu.js"></script> --}}
<script src="Assets/js/customMenuUpdate.js"></script>

<!--custom menu js -->
<script src="Assets/js/calculator.js"></script>
<!--Lcoal Bootstrap JS  Link -->
{{-- <script src="Assets/js/bootstrap.bundle.min.js"></script> --}}


<!--AI robot page script start-->
<script>
    //declare aiPageHeader function
    function aiPageHeader() {
        document.addEventListener("DOMContentLoaded", function() {
            var h1Element = document.querySelector(".aiRobot h1");
            h1Element.classList.add("show");
        });
    }
    aiPageHeader(); //call aiPageHeader function

    //declare contentZoomIn function
    function contentZoomIn() {
        // Function to check if an element is in the viewport
        function isInViewport(element) {
            var rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Function to add active class for zoom-in effect
        function zoomInOnScroll() {
            var elements = document.querySelectorAll('.zoom-in');
            elements.forEach(function(element) {
                if (isInViewport(element)) {
                    element.classList.add('active');
                }
            });
        }

        // Listen for scroll event
        window.addEventListener('scroll', function() {
            zoomInOnScroll();
        });

        // Initial check on page load
        zoomInOnScroll();

    }
    contentZoomIn(); //call contentZoomIn function

    //declare packageSelector function
    function packageSelector(form) {
        //define packagePrice object
        const packagePrice = {
            currencyPackage: {
                sixMonth: '$499.00',
                oneYear: '$750.00',
                lifeTime: '$3000.00'
            },
            goldPackage: {
                sixMonth: '$999.00',
                oneYear: '$1500.00',
                lifeTime: '$5000.00'
            },
            cryptoPackage: {
                sixMonth: '$499.00',
                oneYear: '$750.00',
                lifeTime: '$3000.00'
            }
        }
        //console.log(packagePrice.currencyCryptoPackage.sixMonth);

        // var currencyPackageValue = document.getElementById('robotPackage').value;
        // var goldPackageValue = document.getElementById('robotPackage').value;
        // var cryptoPackage = document.getElementById('robotPackage').value;
        var selectedValue = form.elements["robotPackage"].value;
        var showPrice = document.getElementById('priceContainer');

        console.log('form elements :' + packagePrice[form.id].sixMonth);
        if (selectedValue == '6m') {
            showPrice.innerHTML = packagePrice[form.id].sixMonth;
            console.log('package price ' + packagePrice[form.id].sixMonth);
        } else if (selectedValue == '1yr') {
            showPrice.innerHTML = packagePrice[form.id].oneYear;
            console.log('package price ' + packagePrice[form.id].oneYear);
        } else if (selectedValue == 'lifetime') {
            showPrice.innerHTML = packagePrice[form.id].lifeTime;
            console.log('package price ' + packagePrice[form.id].lifeTime);
        } else {
            console.log('No Package selected ');
        }
    }
 
</script>
<!--AI robot page script end-->

<!-- Trigger the modal -->
<script>
    // Declare homepage aiModal function
    function aiModal() {
        // Function to center the modal vertically
        function centerModal() {
            var modal = $('#robotBanner');
            var modalDialog = modal.find('.modal-dialog');
            var offset = ($(window).height() - modalDialog.height()) / 2;
            modalDialog.css('margin-top', offset);
        }

        // Call the centerModal function when the modal is shown
        $('#robotBanner').on('shown.bs.modal', function() {
            centerModal();
        });

        // Call the centerModal function whenever the window is resized
        $(window).resize(function() {
            centerModal();
        });
    }

    // Function to check if the screen width is greater than 768px (tablet/desktop)
    function isDesktop() {
        return $(window).width() > 768;
    }

    $(document).ready(function() {
        // Call aiModal function only if it's not a mobile screen
        if (isDesktop()) {
            aiModal();
            $('#robotBanner').modal('show');
        }
    });
</script>

<!--payment method script-->
<script>
    function showPaymentMethod() {
        document.getElementById('payment_details_container').style.display = 'block';

        let paymentMethodId = document.getElementById('docs_type_options').value;

        var binance = document.getElementsByClassName('binance')[0];
        var skrill = document.getElementsByClassName('skrill')[0];
        var neteller = document.getElementsByClassName('neteller')[0];

        switch (paymentMethodId) {
            case '19':
                binance.classList.add('active');
                skrill.classList.remove('active');
                neteller.classList.remove('active');
                break;
            case '20':
                skrill.classList.add('active');
                binance.classList.remove('active');
                neteller.classList.remove('active');
                break;
            case '21':
                neteller.classList.add('active');
                binance.classList.remove('active');
                skrill.classList.remove('active');
                break;
            default:
                paymentMethod = 'null';
        }

    }
</script>

</body>

</html>
