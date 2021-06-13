@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{asset('css/imagepostslide.css')}}">


 <div class="container mt-10">

    <div class="row">
        <div class="col-md-12">
            <div id="news-slider14" class="owl-carousel">
                <div class="post-slide14">

                    <div class="post-img">
                        <img src="{{ asset('images/a10.jpg') }}" alt="">
                    </div>
                    <div class="post-review">
                        <h3 class="post-title"><a href="#">الاحداث و الفعاليات</a></h3>
                    </div>
                </div>

                <div class="post-slide14">

                    <div class="post-img">
                        <img src="{{ asset('images/a10.jpg') }}" alt="">
                    </div>
                    <div class="post-review">
                        <h3 class="post-title"><a href="#">الاحداث و الفعاليات</a></h3>
                    </div>
                </div>

                <div class="post-slide14">

                    <div class="post-img">
                        <img src="{{ asset('images/a10.jpg') }}" alt="">
                    </div>
                    <div class="post-review">
                        <h3 class="post-title"><a href="#">الاحداث و الفعاليات</a></h3>
                    </div>
                </div>

                <div class="post-slide14">

                    <div class="post-img">
                        <img src="{{ asset('images/a10.jpg') }}" alt="">
                    </div>
                    <div class="post-review">
                        <h3 class="post-title"><a href="#">المناسبات الصحية</a></h3>
                    </div>
                </div>

                <div class="post-slide14">

                    <div class="post-img">
                        <img src="{{ asset('images/a10.jpg') }}" alt="">
                    </div>
                    <div class="post-review">
                        <h3 class="post-title"><a href="#">المناسبات الصحية</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

   <!-- partial -->
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js">
   </script>
   <script>
       $(document).ready(function() {


           $("#news-slider14").owlCarousel({
               items: 4,
               itemsDesktop: [1199, 3],
               itemsDesktopSmall: [980, 2],
               itemsMobile: [550, 1],
               pagination: false,
               autoPlay: true
           });
       });

       jQuery.fn.liScroll = function(settings) {
           settings = jQuery.extend({
               travelocity: 0.01
           }, settings);
           return this.each(function() {
               var $strip = jQuery(this);
               $strip.addClass("newsticker")
               var stripHeight = 1;
               $strip.find("li").each(function(i) {
                   stripHeight += jQuery(this, i).outerHeight(
                   true); // thanks to Michael Haszprunar and Fabien Volpi
               });
               var $mask = $strip.wrap("<div class='mask'></div>");
               var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");
               var containerHeight = $strip.parent().parent().height(); //a.k.a. 'mask' width
               $strip.height(stripHeight);
               var totalTravel = stripHeight;
               var defTiming = totalTravel / settings.travelocity; // thanks to Scott Waye
               function scrollnews(spazio, tempo) {
                   $strip.animate({
                       top: '-=' + spazio
                   }, tempo, "linear", function() {
                       $strip.css("top", containerHeight);
                       scrollnews(totalTravel, defTiming);
                   });
               }
               scrollnews(totalTravel, defTiming);
               $strip.hover(function() {
                       jQuery(this).stop();
                   },
                   function() {
                       var offset = jQuery(this).offset();
                       var residualSpace = offset.top + stripHeight;
                       var residualTime = residualSpace / settings.travelocity;
                       scrollnews(residualSpace, residualTime);
                   });
           });
       };

       $(function() {
           $("ul#ticker01").liScroll();
       });

   </script>

@endsection