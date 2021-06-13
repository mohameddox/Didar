{{-- <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Us</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <meta name="theme-color" content="#7952b3">

        <link href="https://getbootstrap.com/docs/5.0/examples/sign-in/signin.css" rel="stylesheet">
    </head>
    <body class="text-center" cz-shortcut-listen="true">

        <main class="form-signin">

            <h1 class="h3 mb-3 fw-normal">Contact Us</h1>
            <img class="mb-4" src="https://www.enovision.net/storage/app/media/brand-logoos/laravel.png"
            alt="" width="100" height="100">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (!empty($message))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <form method="POST" action="{{url('sendmail/send')}}">
                @csrf
                <div class="form-floating mb-3">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                </div>
                <div class="form-floating mb-3">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control"name="email" id="email" placeholder="name@example.com">
                </div>
                <div class="form-floating mb-3">
                    <label for="message">Message:</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Send</button>
                <p class="mt-5 mb-3 text-muted">© 2021</p>
            </form>

        </main>

    </body>
</html> --}}



@extends('layouts.app') @section('content')

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
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


                <form method="POST" action="{{url('sendmail/send')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form mb-6 ">
                                <input type="text"  id="email" name="email" class="form-control text-right" placeholder="ادخل الإيميل">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form mb-6 ">
                                <input type="text" id="name" name="name" class="form-control text-right" placeholder="ادخل اسمك">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-6 ">
                                <input type="text" id="subject" name="subject" class="form-control text-right" placeholder="استفسارك حول">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-6">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control text-right md-textarea" placeholder="فضلا اشرح ما تريد"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-center text-md-center">
                        <button class="w-100 btn btn-lg btn-primary" type="submit">ارسال</button>
                    </div>
                </form>
                </section>
                <!--Section: Contact v.2-->
            </div>
        </div>
    </div>

    @endsection
