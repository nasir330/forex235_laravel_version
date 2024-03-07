
<footer style="background-color: black;" class="footer">  
  copyright  &copy; 2023 Forex 235. All rights reserved.
</footer>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
  <i class="back-to-top-icon fa-solid fa-chevrons-up"></i>
</a>

<!--Bootstrap JS CDN Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!--FontAwsome JS CDN -->
<script
  src="https://cdn.jsdelivr.net/gh/NOCNP/font-awesome-pro@main/fontawesome-pro-6.5.1-web/js/all.min.js"></script>

  <script type="text/javascript">
    function rangeSlide(value) {
        document.getElementById('rangeValue').innerHTML = value;
        
        var earnAmount = 0; // Default value
        
        if (value >= 1 && value <= 200) {
            earnAmount = 3;
        } else if (value >= 201 && value <= 300) {
            earnAmount = 5;
        } else if (value >= 301 && value <= 500) {
            earnAmount = 7;
        } else if (value >= 501 && value <= 1000) {
            earnAmount = 12;
        } else if (value > 1000) {
            document.getElementById('rangeValue').innerHTML = value + '+';
            earnAmount = 15;
        } else {
            earnAmount = 0;
        }
         
        document.getElementById('earnAmount').innerHTML = '$' + earnAmount;
    }
</script>

<script src="Assets/ib/vendor/aos/aos.js"></script>

<script src="Assets/ib/vendor/glightbox/js/glightbox.min.js"></script>
<script src="Assets/ib/vendor/swiper/swiper-bundle.min.js"></script>
<!-- Template Main JS File -->
<script src="Assets/ib/js/main.js"></script>

</body>

</html>