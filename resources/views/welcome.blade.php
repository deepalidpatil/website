<!doctype html>
<html>
  @include('layouts.head')
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    @include('layouts.header')
    @include('pages.home')
    @include('pages.about')
    @include('pages.services')
    @include('pages.contact_us')
    @include('layouts.footer')
    <script src="js/jquery.min.js"></script> 
    <script src="js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="js/owl.carousel.min.js"></script> 
    <script type="text/javascript" src="js/jquery.countTo.js"></script> 
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script> 
    <script>
      $(document).ready(function() {
          
            $("#owl-demo").owlCarousel({
          
                navigation : false, // Show next and prev buttons
                slideSpeed : 500,
            autoPlay : 3000,
                paginationSpeed : 400,
                singleItem:true
          
                // "singleItem:true" is a shortcut for:
                // items : 1, 
                // itemsDesktop : false,
                // itemsDesktopSmall : false,
                // itemsTablet: false,
                // itemsMobile : false
          
            });
          
          });

        /*$('.timer').each(count);*/
        jQuery(function ($) {
            // custom formatting example
            $('.timer').data('countToOptions', {
              formatter: function (value, options) {
                return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
              }
            });


        // start all the timers
            $('#testimonials').waypoint(function() {
          $('.timer').each(count);
        });
      
            function count(options) {
              var $this = $(this);
              options = $.extend({}, options || {}, $this.data('countToOptions') || {});
              $this.countTo(options);
            }
          });


        $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){

          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
          });
        });
      })
    </script>
  </body>
</html>
