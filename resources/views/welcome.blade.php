
@include('layout.head-libs');
<body>

    <main>
        <div class="container">
          <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
            <h3>Wellcom To Reservation System </h3>
            <h5>You Can Register As New Student Or Just Login If are already Registerd!!.</h5>
            <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
            @if (Route::has('register'))
            <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
            <img src="{{asset('img/not-found.svg')}}" class="img-fluid py-5" alt="Page Not Found">
            <div class="credits">
         </div>
          </section>
        </div>
      </main><!-- End #main -->
    
  @include('layout.footer-libs');
