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
<!-- carousel content -->
<div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-internal="40">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/services.jpeg') }}" class="d-block w-100" style="height: 70vh;" alt="...">

        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/services2.jpeg') }}" class="d-block w-100" style="height: 70vh;" alt="...">

        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/services3.jpeg') }}" class="d-block w-100" style="height: 70vh;" alt="...">

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

<!-- end carousel content -->

    {{-- nwe disgn --}}
    <main id="main">

        <!-- ======= Works Section ======= -->
        <section class="section site-portfolio">
            <div class="container">
                <div  style="text-align: center">

                    <h2>مرحبا بكم في شركتنا</h2>
                    <p class="mb-0">جميع الخدمات الهندسية و الانشائية</p>
                    <div class="mt-2 mb-3 text-center text-lg-end" data-aos="fade-up" data-aos-delay="100" dir="rtl" >
                        <div id="filters" class="filters">
                            <a href="#" data-filter="*" class="active">الكل</a>

                            <a href="#" data-filter=".design">التجارة العامة</a>
                            <a href="#" data-filter=".branding">تأجير السيارات</a>
                            <a href="#" data-filter=".photography">
                                مشاريع الانشاءات</a>
                            <a href="#" data-filter=".photography1">حجز الفنادق</a>
                            <a href="#" data-filter=".trianing">التدريب </a>
                        </div>
                    </div>
                </div>

                <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200" style="border: 2px solid #000">
                    <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4 mt-3">
                        <a href="#" class="item-wrap fancybox">
                            <div class="work-info">

                            </div>
                            <img id="swar" class="img-fluid" src="{{ asset('images/a1.jpg')}}">
                        </a>
                    </div>
                    <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4 mt-3">
                        <a href="#" class="item-wrap fancybox">
                            <div class="work-info">

                            </div>
                            <img  id="swar"  class="img-fluid" src="{{ asset('images/a7.jpg')}}">
                        </a>

                    </div>
                    <div class="item photography1 col-sm-6 col-md-4 col-lg-4 mb-4 mt-3">
                        <a href="#" class="item-wrap fancybox">
                            <div class="work-info">

                            </div>
                            <img  id="swar"  class="img-fluid" src="{{ asset('images/a11.jpg')}}">
                        </a>
                    </div>
                    <div class="item photography1 col-sm-6 col-md-4 col-lg-4 mb-4 mt-3">
                        <a href="#" class="item-wrap fancybox">
                            <div class="work-info">

                            </div>
                            <img  id="swar"  class="img-fluid" src="{{ asset('images/a12.jpg')}}">
                        </a>
                    </div>
                    <div class="item photography1 col-sm-6 col-md-4 col-lg-4 mb-4 mt-3">
                        <a href="#" class="item-wrap fancybox">
                            <div class="work-info">

                            </div>
                            <img id="swar"  class="img-fluid" src="{{ asset('images/a13.jpg')}}">
                        </a>
                    </div>
                    <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4 mt-3">
                        <a href="#" class="item-wrap fancybox">
                            <div class="work-info">

                            </div>
                            <img id="swar"  class="img-fluid" src="{{ asset('images/a4.jpg')}}">
                        </a>
                    </div>
                    <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4 mt-3">
                        <a href="#" class="item-wrap fancybox">
                            <div class="work-info">

                            </div>
                            <img id="swar"  class="img-fluid" src="{{ asset('images/a5.jpg')}}">
                        </a>
                    </div>
                    <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4 mt-3">
                        <a href="#" class="item-wrap fancybox">
                            <div class="work-info">

                            </div>
                            <img id="swar"  class="img-fluid" src="{{ asset('images/a6.jpg')}}">
                        </a>
                    </div>
                    <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4 mt-3">
                        <a href="#" class="item-wrap fancybox">
                            <div class="work-info">

                            </div>
                            <img  id="swar" class="img-fluid" src="{{ asset('images/a1.jpg')}}">
                        </a>
                    </div>
                    <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4 mt-3">
                        <a href="#" class="item-wrap fancybox">
                            <div class="work-info">

                            </div>
                            <img  id="swar" class="img-fluid" src="{{ asset('images/a2.jpg')}}">
                        </a>
                    </div>
                    <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4 mt-3">
                        <a href="#" class="item-wrap fancybox">
                            <div class="work-info">

                            </div>
                            <img  id="swar" class="img-fluid" src="{{ asset('images/a3.png')}}">
                        </a>
                    </div>
                    <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4 mt-3">
                        <a href="#" class="item-wrap fancybox">
                            <div class="work-info">

                            </div>
                            <img  id="swar"  class="img-fluid" src="{{ asset('images/a8.jpg')}}">
                        </a>
                    </div>
                    <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4 mt-3">
                        <a href="#" class="item-wrap fancybox">
                            <div class="work-info">

                            </div>
                            <img  id="swar"  class="img-fluid" src="{{ asset('images/a9.jpg')}}">
                        </a>
                    </div>
                    <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4 mt-3">
                        <a href="#" class="item-wrap fancybox">
                            <div class="work-info">

                            </div>
                            <img  id="swar"  class="img-fluid" src="{{ asset('images/a10.jpg')}}">
                        </a>
                    </div>

                    <div class="item trianing col-sm-6 col-md-4 col-lg-4 mb-4 mt-3">
                        <a href="#" class="item-wrap fancybox">
                            <div class="work-info">

                            </div>
                            <img  id="swar"  class="img-fluid" src="{{ asset('images/tr3.jpeg')}}">
                        </a>
                    </div>

                    <div class="item trianing col-sm-6 col-md-4 col-lg-4 mb-4 mt-3">
                        <a href="#" class="item-wrap fancybox">
                            <div class="work-info">

                            </div>
                            <img  id="swar"  class="img-fluid" src="{{ asset('images/tr2.jpeg')}}">
                        </a>
                    </div>

                    <div class="item trianing col-sm-6 col-md-4 col-lg-4 mb-4 mt-3">
                        <a href="#" class="item-wrap fancybox">
                            <div class="work-info">

                            </div>
                            <img  id="swar"  class="img-fluid" src="{{ asset('images/tr1.jpeg')}}">
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <!-- End  Works Section -->

        <!-- ======= Clients Section ======= -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center text-center mb-4">
                    <div class="col-5">
                        <h3 class="h3 heading">عملائنا</h3>
                        {{-- <p>لدينا افضل العملاء في العالم</p> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6">
                        <a href="#" class="client-logo"><img src="{{ asset('images/clinet1.jpg')}}" alt="Image" class="img-fluid" style="width: 100vw; height: 20vh;"></a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6">
                        <a href="#" class="client-logo"><img src="{{ asset('images/clinet2.png')}}" alt="Image" class="img-fluid" style="width: 100vw; height: 20vh;"></a>
                    </div>


                </div>
            </div>
        </section>
        <!-- End Clients Section -->



    </main>

    <div class="container ">
        <div class="row">
            <div class="col-12 text-center mt-5 bg-white">
                <h1 class="text-dark pt-4"> {{ __('sentence.enargy_altr') }}</h1>
            </div>
        </div>
        <div class="row bg-white pb-20 mb-5">
            <div class="col-md-8">
                <p class="text-right" style="line-height: 2rem; text-align: justify">{{ __('sentence.enargy_altr_pragraph') }}</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/didar1 (8).jpg') }}" alt="" class="img-responsive img-rounded" style="border-radius: 8px">
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row"  style="background-color: rgb(221, 213, 213)">
            <div class="col-12 text-center ">
                <h1 class="text-dark pt-4"> {{ __('sentence.create_project') }}</h1>
            </div>
        </div>
        <div class="row   pb-20 mb-5"  style="background-color: rgb(221, 213, 213)">
            <div class="col-md-4">
                <img src="{{ asset('images/didar1 (12).jpg') }}" alt="" class="img-responsive img-rounded" style="border-radius: 8px">
            </div>
            <div class="col-md-8">
                <p class="text-right" style="line-height: 2rem; text-align: justify">{{ __('sentence.create_project_paraghraph') }}</p>
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row">
            <div class="col-12 text-center mt-5 bg-white">
                <h1 class="text-dark pt-4"> {{ __('sentence.studies') }}</h1>
            </div>
        </div>
        <div class="row bg-white pb-20 mb-5">
            <div class="col-md-8">
                <p class="text-right" style="line-height: 2rem; text-align: justify">{{ __('sentence.paragraph1') }}</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/didar2.jpeg') }}" alt="" class="img-responsive img-rounded" style="border-radius: 8px">
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row"  style="background-color: rgb(221, 213, 213)">
            <div class="col-12 text-center">
                <h1 class="text-dark pt-4"> {{ __('sentence.trade_general') }}</h1>
            </div>
        </div>
        <div class="row   pb-20 mb-5"  style="background-color: rgb(221, 213, 213)">
            <div class="col-md-4">
                <img src="{{ asset('images/trade_general.jpg') }}" alt="" class="img-responsive img-rounded" style="border-radius: 8px">
            </div>
            <div class="col-md-8">
                <p class="text-right" style="line-height: 2rem; text-align: justify">{{ __('sentence.paragraph1') }}</p>
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row">
            <div class="col-12 text-center mt-5 bg-white">
                <h1 class="text-dark pt-4"> {{ __('sentence.trade_cars') }}</h1>
            </div>
        </div>
        <div class="row bg-white pb-20 mb-5">
            <div class="col-md-8">
                <p class="text-right" style="line-height: 2rem; text-align: justify">{{ __('sentence.paragraph1') }}</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/didar3.jpeg') }}" alt="" class="img-responsive img-rounded" style="border-radius: 8px">
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row"  style="background-color: rgb(221, 213, 213)">
            <div class="col-12 text-center">
                <h1 class="text-dark pt-4">{{ __('sentence.hotal') }}</h1>
            </div>
        </div>
        <div class="row   pb-20 mb-5"  style="background-color: rgb(221, 213, 213)">
            <div class="col-md-4">
                <img src="{{ asset('images/didar4.jpeg') }}" alt="" class="img-responsive img-rounded" style="border-radius: 8px">
            </div>
            <div class="col-md-8">
                <p class="text-right" style="line-height: 2rem; text-align: justify">{{ __('sentence.hotal_paragraph') }}</p>
            </div>
        </div>
    </div>


    <div>
        @include('layouts.comment')
    </div>
@endsection
