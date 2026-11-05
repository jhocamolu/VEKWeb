<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ base_path() }}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ route('home')}}/assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Vek Studio Creativo</h1>
      </a>

      @include('web.navigation')

      <a class="btn-getstarted" href="{{ route('quotes') }}">Cotizar</a>


    </div>
  </header>
