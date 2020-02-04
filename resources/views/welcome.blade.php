<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{ config('app.name', 'Bandjiaky') }}</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css"> 
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  
  <link href="{{ asset('css/scrolling-nav.css') }}" rel="stylesheet">

  {{--  <!-- Custom fonts for this template--> --}}
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/myStyle.css') }}" rel="stylesheet">
      
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="{{ asset('fonts.gstatic.com') }}">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-light bg-white shadow-sm border-bottom-success" id="mainNav">
    <div class="container">
      {{-- <a class="navbar-brand js-scroll-trigger" href="#page-top">ACCUEIL</a> --}}
      <a class="navbar-brand" href="#page-top">
        <img src="{{ asset('img/bkk.png') }}" class="pr-3" width="50px" style="border-right: solid 1px #333; "/>

        <span class="pl-3">{{ config('app.name', 'Bandjikaky') }}</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto align-items-baseline">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">A PROPOS</a>
          </li>
          {{--  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">SERVICES</a>
          </li>  --}}
          {{--  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#cibles">CIBLES</a>
          </li>  --}}
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">CONTACTS</a>
          </li>
          @if (Route::has('login'))
          <li class="nav-item">
            @auth
            <a class="navbar-brand pl-3" href="{{ url('/home') }}">Mon Compte
                {{--  <img src="{{ asset(Auth::user()->profile->getImage()) }}" class="rounded-circle" width="30px" height="auto"/>  --}}
            </a>
            
            @else
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">CONNEXION</a>
          </li>
          <li class="nav-item">
            @if (Route::has('register'))
            <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">INSCRIPTION</a>
            @endif
            @endauth
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>{{ ("Bienvenue à Bandjikaky") }}</h1>
      <p class="lead">{{ ("En cours de réalisation !") }}</p>
    </div>
  </header>
  <section id="about" class="bg-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2><strong>A PROPOS</strong></h2>
        </div>
      </div>
    </div>
  </section>
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">          
          <h2><strong>Géolocalisation</strong></h2>
        </div>
        <div class="col-lg-8 mx-auto">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7774.377432666632!2d-16.694369324828653!3d13.023651316169667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec2ad1058c46c49%3A0xf127c479ab939816!2sBandjikaki!5e0!3m2!1sfr!2ssn!4v1580819747432!5m2!1sfr!2ssn" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Lamine BADJI 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <script src="{{ asset('js/scrolling-nav.js') }}"></script>
  
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
