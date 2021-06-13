@extends('layouts.app') @section('content')

    <div class="container mt-20 bg-dark d-block" style="height: 80vh">

        <div class="row py-20">
            <div class="col-md-4">
                <div class="bg-light ml-10 " style="height: 60vh; border-radius: 30px">
                    <img style="width: 60px; height: 80px; margin-left: 120px; padding-top: 30px" src="{{ asset('images/logoo.png') }}" alt="" />
                    <ul class="list-unstyled mb-0 text-center pt-3">
                        <li><i class="fa fa-map-marker  fa-2x " aria-hidden="true"></i>
                            <p >السودان - الخرطوم</p>
                        </li>

                        <li><i class="fa fa-phone mt-4 fa-2x" aria-hidden="true"></i>
                            <p>+249 901881306</p>
                            <p>+249 968938960</p>
                        </li>

                        <li><i class="fa fa-envelope mt-4 fa-2x" aria-hidden="true"></i>
                            <p>diddarafrica@gmail.com</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <!--Section: Contact v.2-->
                <section class="">

                    <!--Section heading-->
                    <h2 class="h1-responsive font-weight-bold text-center " style="color: rgb(238, 255, 2)">اتصل بنا</h2>
                    <!--Section description-->
                    <p class="text-center w-responsive mx-auto mb-5 " style="line-height: 2rem ; color: rgb(0, 245, 41)">هل لديك اسئلة؟ من فضلك لا تتردد في الاتصال بنا مباشرة. سيرد فريقنا إليك في غضون ساعات لمساعدتك</p>


                            <form id="contact-form" name="contact-form" action="{{route('sendmailafro')}}" method="POST" class="text-right">

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-6 ">
                                            <input type="text"  id="email" name="email" class="form-control text-right" placeholder="ادخل الإيميل">

                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-6 ">
                                            <input type="text" id="name" name="name" class="form-control text-right" placeholder="ادخل اسمك">

                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-6 ">
                                            <input type="text" id="subject" name="subject" class="form-control text-right" placeholder="استفسارك حول">

                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form mb-6">
                                            <textarea type="text" id="message" name="message" rows="2" class="form-control text-right md-textarea" placeholder="فضلا اشرح ما تريد"></textarea>

                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->

                                <button class="w-100 btn btn-lg btn-primary" type="submit">Send</button>
                            </form>

                            {{-- <div class="text-center text-md-center pb-10">
                                <a class="btn btn-primary px-4"  onclick="document.getElementById('contact-form').submit();">ارسال</a>
                            </div> --}}
                            <div class="status"></div>

                        <!--Grid column-->


                </section>
                <!--Section: Contact v.2-->
            </div>

        </div>

    </div>

    @endsection
