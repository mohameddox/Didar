<header class="top-navbar">


    <nav class="navbar  navbar-expand-lg navbar-light bg-light ">
        <div class="container">
            <a class="navbar-brand ml-20" href="#">
                <img style="width: 60px; height: 50px;" src="{{ asset('images/logoo.png') }}" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor03">
              <ul class="navbar-nav ml-auto text-right mr-20">
                {{-- <li class="nav-item"><a class="nav-link" href="#">{{ __('sentence.create') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="#">{{ __('sentence.treade') }}</a></li> --}}
                <li class="nav-item active"><a class="nav-link" href="/">{{ __('sentence.home') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">{{ __('sentence.about') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="/services">{{ __('sentence.Services') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">{{ __('sentence.contact') }}</a></li>
              </ul>

            </div>
        </div>

      </nav>
</header>
