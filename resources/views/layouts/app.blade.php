<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/css/materialize.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bookverse.css') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Bookverse</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Bookverse
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class ="menu-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class ="menu-item" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a class ="menu-item" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a class ="menu-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <footer class="page-footer">
      <div class="container white-text">
        <div class="row">
          <div class="col s4 m4 l4">
            <p id="caixa-contato">
              Contato:<br>
              Telefone: (YY) XXXX-XXXX<br>
              E-mail: sac@bookvere.com.br<br>
            </p>
          </div>
          <div class="col s6 m6 l6 offset-s2 offset-m2 offset l2 left">
            <div class="row">
              <div class="col s3 m2 l2 offset-s0 offset-m4 offset-l4">
                <a href="#" ><img src="{{ asset('css/icons/facebook.png') }}"></a>
              </div>
              <div class="col s3 m2 l2">
                <a href="#" ><img src="{{ asset('css/icons/twitter.png') }}"></a>
              </div>
              <div class="col s3 m2 l2">
                <a href="#" ><img src="{{ asset('css/icons/reddit.png') }}"></a>
              </div>
              <div class="col s3 m2 l2">
                <a href="#" ><img src="{{ asset('css/icons/pinterest.png') }}"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          © Bookverse 2018<br>
          <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script rel="stylesheet" src="css/js/materialize.min.js"></script>

</html>
