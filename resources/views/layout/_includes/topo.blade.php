<!DOCTYPE html>
<html>
<head>
  <title>@yield('titulo')</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>

  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"  >
  <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<header>
  <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper #009688 teal">
          <div class="container">
              <a href="{{route('home')}}" class="brand-logo"><img id="logo" src="{{ asset('imagens/logo.png') }}"></a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
              @if(Auth::guest())
                 <li><a href="{{route('login')}}">Login</a></li>
               @else
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('animais')}}">Animais</a></li>
                <li><a href="{{route('doacoes')}}">Doações</a></li>
                <li><a href="{{route('veterinarios')}}">Veterinários</a></li>
                <li><a href="{{route('usuario')}}">Usuários</a></li>
                <li><a href="{{route('login.sair')}}">Sair</a></li>
               @endif
              </ul>
            </div>
          </div>
        </nav>
      </div>

      <ul class="sidenav right" id="mobile-demo">
        @if(Auth::guest())
        <li><a href="{{route('login')}}">Login</a></li>
        @else
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('animais')}}">Animais</a></li>
        <li><a href="{{route('doacoes')}}">Doações</a></li>
        <li><a href="{{route('veterinarios')}}">Veterinários</a></li>
        <li><a href="{{route('usuario')}}">Usuários</a></li>
        <li><a href="{{route('login.sair')}}">Sair</a></li>
        @endif
      </ul>
</header>
