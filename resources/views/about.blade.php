@extends('layouts.app')

@section('content')
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
    <!-- Page Content -->
	<div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-internal="40">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/about1.jpeg') }}" class="d-block w-100" style="height: 70vh;" alt="...">

            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/about2.jpeg') }}" class="d-block w-100" style="height: 70vh;" alt="...">

            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/about3.jpeg') }}" class="d-block w-100" style="height: 70vh;" alt="...">

            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden"></span>
        </button>
        <button class="carousel-control-next " type="button" data-bs-target="#carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon " aria-hidden="true"></span>
          <span class="visually-hidden"></span>
        </button>
    </div>
    {{-- more about company --}}
    <div class="message-box text-right">
        <div class="px-20">
            <h2>{{ __('sentence.aboutus') }}</h2>
            <p class="lead" style="font-size: 24px ">{{ __('sentence.about_company1') }} {{ __('sentence.about_company') }}</p>
            <br>
            <div class="mr-20" style="color: green">
                <ul>
                    <li class="py-2">خدمات دعم الحياة الأساسية ♦</li>
                    <li class="py-2">الخدمات اللوجستية والجمارك ♦</li>
                    <li class="py-2">خدمات تنظيف ♦ </li>
                </ul>
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
    </div>
    {{-- end more about company --}}
    <!-- end carousel content -->

    {{-- new sec --}}
    {{-- <div id="barbers" class="section lb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <small>MEET OUR BABRER TEAM</small>
                    <h3>OUR BARBERS</h3>
                </div>
            </div>
            <!-- end title -->

            <div class="row dev-list text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="widget our-inner-taem clearfix">
                        <div class="t-top"></div>
                        <div class="hover-br">
                            <img src="{{ asset('images/didar1 (8).jpg') }}" alt="" class="img-responsive">
                            <div class="social-up-hover">
                                <div class="footer-social">
                                    <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                    <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-box">
                            <div class="widget-title">
                                <h3>Soren Bo Bostian</h3>
                                <small>The Founder</small>
                            </div>
                            <!-- end title -->
                            <p class="lead">{{ __('sentence.paragraph1') }}</p>
                        </div>
                        <div class="t-bottom"></div>
                    </div>
                    <!--widget -->
                </div>
                <!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="widget our-inner-taem clearfix">
                        <div class="t-top"></div>
                        <div class="hover-br">
                            <img src="{{ asset('images/didar1 (8).jpg') }}" alt="" class="img-responsive">
                            <div class="social-up-hover">
                                <div class="footer-social">
                                    <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                    <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-box">
                            <div class="widget-title">
                                <h3>Bryan Saftler</h3>
                                <small>The Barber</small>
                            </div>
                            <!-- end title -->
                            <p class="lead">{{ __('sentence.paragraph1') }}</p>
                        </div>
                        <div class="t-bottom"></div>
                    </div>
                    <!--widget -->
                </div>
                <!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="widget our-inner-taem clearfix">
                        <div class="t-top"></div>
                        <div class="hover-br">
                            <img src="{{ asset('images/didar1 (8).jpg') }}" alt="" class="img-responsive">
                            <div class="social-up-hover">
                                <div class="footer-social">
                                    <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                    <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-box">
                            <div class="widget-title">
                                <h3>Matthew Bayliss</h3>
                                <small>The Barber</small>
                            </div>
                            <!-- end title -->
                            <p class="lead">{{ __('sentence.paragraph1') }}</p>
                        </div>
                        <div class="t-bottom"></div>
                    </div>
                    <!--widget -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div> --}}
    <!-- end section -->
    {{-- end new sec --}}

    <div>
        @include('layouts.comment')
    </div>
@endsection
