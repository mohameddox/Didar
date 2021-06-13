@extends('layouts.app') @section('content')
<div id="preloader">
    <div class="cube-wrapper">
        <div class="cube-folding">
            <span class="leaf1"></span>
            <span class="leaf2"></span>
            <span class="leaf3"></span>
            <span class="leaf4"></span>
        </div>
        <div class="mus">
            <img src="{{ asset('images/logoo.png') }}" alt="" />
        </div>
        <span class="loading" data-name="Loading">...شركة ديدار</span>
    </div>
</div>
    <!-- end loader -->
    <!-- END LOADER -->



    <div id="home" class="parallax" >
        <div id="full-width" class="owl-carousel owl-theme home-hero">
            <div id="background-image" class="text-center item slider-01 display-table  " style=" background-image: url('images/didar1 (7).jpg');">
               <div class="row">
                   <div class="col-md-8 pt-20" style="margin-left: 15%">
                    <div class="display-table-cell" style="width: 30%">

                    </div>
                   </div>
               </div>

            </div>
            <div id="background-image" class="text-center item slider-02 display-table  " style=" background-image: url('images/didar1 (6).jpg');">
                <div class="row">
                    <div class="col-md-8 pt-20" style="margin-left: 15%">
                     <div class="display-table-cell" style="width: 30%">

                     </div>
                    </div>
                </div>
            </div>
            <div id="background-image" class="text-center item slider-03 display-table  " style=" background-image: url('images/didar2.jpeg');">
                <div class="row">
                    <div class="col-md-8 pt-20" style="margin-left: 15%">
                     <div class="display-table-cell" style="width: 30%">

                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="section wb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-right">
                        <div class="message-box">
                            <h2>{{ __('sentence.aboutus') }}</h2>
                            <p class="lead">{{ __('sentence.about_company') }}</p>

                            <div class="row pt-10">
                                <div class="col-md-6">

                                    <ul>
                                        <li class="py-2">خدمات دعم الحياة الأساسية ♦</li>
                                        <li class="py-2">الخدمات اللوجستية والجمارك ♦</li>
                                        <li class="py-2">خدمات تنظيف ♦ </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li class="py-2">
                                            الخدمات اللوجستية والجمارك ♦
                                        </li>
                                        <li class="py-2">
                                            خدمات تنظيف ♦
                                        </li>
                                        <li class="py-2">
                                            إنشاء وصيانة وتجديد المباني ♦
                                        </li>
                                    </ul>

                                </div>
                            </div>

                            <a href="/about" data-scroll class="btn btn-primary text-center btn-radius btn-brd grd1 mt-10 mr-20 effect-1 text-black">لمزيد</a>
                        </div>
                        <!-- end messagebox -->
                    </div>
                    <!-- end col -->
                    <div class="col-md-6 text-center">
                        <div class="right-box">
                            <img class="img-fluid" src="{{ asset('images/logoo.png') }}" alt="" />
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <hr class="hr1">


                <div class="row">
                    <div class="col-md-12">
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link " href="#tab_a" data-toggle="tab">القيم الجوهرية</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_b" data-toggle="tab">رؤيتنا</a></li>
                                <li class="nav-item"><a class="nav-link active" href="#tab_c" data-toggle="tab">مهمتنا</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade " id="tab_a">
                                    <ol class="text-right" style="line-height: 2rem">
                                        <li>الالتزام بأعلى المعايير المهنية  <i class="fa fa-circle-o" aria-hidden="true"></i></li>
                                        <li> التصرف بنزاهة وقيمة  <i class="fa fa-circle-o" aria-hidden="true"></i></li>
                                        <li>الحفاظ على معايير عالية لخدمة العملاء  <i class="fa fa-circle-o" aria-hidden="true"></i></li>
                                        <li>زرع شراكات فعالة  <i class="fa fa-circle-o" aria-hidden="true"></i></li>
                                        <li>مراعاة المعايير الأخلاقية العالية  <i class="fa fa-circle-o" aria-hidden="true"></i></li>
                                        <li>إدارة العميل ومواردنا بشكل فعال من حيث التكلفة  <i class="fa fa-circle-o" aria-hidden="true"></i></li>
                                    </ol>
                                </div>
                                <div class="tab-pane fade" id="tab_b">
                                    <img src="{{ asset('images/Mission-new.jpg') }}" class="d-block w-100" style="height: 50vh;" alt="...">
                                    <div class="carousel-caption">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-8 bg-custom2 d-none d-md-block py-3 px-0">
                                                    <h4><span style="color: rgb(255, 0, 0); font-size: 24px;" class="font-bold p-1">رؤيتنا</span></h4>
                                                    <p class="font-bold" style="font-size: 18px; line-height: 2rem;">تنمية مستدامة للاعمال و رفاهية تلبي احتياجات الشعب السوداني و الافريقي</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade show active" id="tab_c">
                                    <img src="{{ asset('images/vission.png') }}" class="d-block w-100" style="height: 50vh;" alt="...">
                                    <div class="carousel-caption">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-8 bg-custom2 d-none d-md-block py-3 px-0">
                                                    <h4><span style="color: rgb(255, 0, 0); font-size: 24px;" class="font-bold p-1">مهمتنا</span></h4>
                                                                <p class="font-bold" style="font-size: 18px; line-height: 2rem;"> توفير جميع الخدمات المتعلقة بالاعمال والحياة العامة وتطوير الاعمال</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tab content -->
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->




                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end section -->
        
          
<link rel="stylesheet" href="{{asset('css/imagepostslide.css')}}">


<div class="container mt-10">

   <div class="row">
       <div class="col-md-12">
           <div id="news-slider14" class="owl-carousel">
               <div class="post-slide14">

                   <div class="post-img">
                       <img src="{{ asset('images/didar4.jpeg') }}" alt="">
                   </div>
                   <div class="post-review">
                       <h3 class="post-title text-center"><a href="#">حجز الفنادق</a></h3>
                   </div>
               </div>

               <div class="post-slide14">

                   <div class="post-img">
                       <img src="{{ asset('images/didar3.jpeg') }}" alt="">
                   </div>
                   <div class="post-review">
                       <h3 class="post-title text-center"><a href="#">تأجير السيارات</a></h3>
                   </div>
               </div>

               <div class="post-slide14">

                   <div class="post-img">
                       <img src="{{ asset('images/didar2.jpeg') }}" alt="">
                   </div>
                   <div class="post-review">
                       <h3 class="post-title text-center"><a href="#">دراسات الجدوى</a></h3>
                   </div>
               </div>

               <div class="post-slide14">

                   <div class="post-img">
                       <img src="{{ asset('images/didar1 (2).jpg') }}" alt="">
                   </div>
                   <div class="post-review">
                       <h3 class="post-title text-center"><a href="#">تشيئد طرق و جسور</a></h3>
                   </div>
               </div>

               <div class="post-slide14">

                   <div class="post-img">
                       <img src="{{ asset('images/didar1 (12).jpg') }}" alt="">
                   </div>
                   <div class="post-review">
                       <h3 class="post-title text-center"><a href="#">مشاريع الانشاءات</a></h3>
                   </div>
               </div>
               <div class="post-slide14">

                <div class="post-img">
                    <img src="{{ asset('images/didar1 (8).jpg') }}" alt="">
                </div>
                <div class="post-review">
                    <h3 class="post-title text-center"><a href="#">الطاقة الشمسية</a></h3>
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

        {{-- porject container --}}

        {{-- end porject container --}}
        {{-- map --}}


            <div class="container-fluid pb-5">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2 pt-5">


                        <h3>التغطية العالمية</h3>
                        <div class="border-top border-primary w-50 mx-auto my-3"></div>
                        <p>لدينا شبكة مكاتب واسعة تنتشر في مناطق جغرافية مختلفة في الشرق الأوسط ودول مجلس التعاون الخليجي ومنطقة آسيا الوسطى وأفريقيا والقارة الأمريكية. </p>
                    </div>
                </div>
                <!-- end title -->
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <img style="width: 100vw" src="{{ asset('images/map.png') }}" alt="">
                    </div>
                </div>
            </div>
        {{-- end map --}}
        <div>
            @include('layouts.comment')
        </div>


        <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
 @endsection
