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

</body>

</html>
