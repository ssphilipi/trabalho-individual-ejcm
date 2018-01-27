<!doctype html>

<html>

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/css/materialize.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/template.css')?>">

    <!-- fonts: -->
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

    <title> @yield('title')</title>

  </head>

  <body>

    <nav class="z-depth-1">
      <div class="nav-wrapper">
        <a href="{{route('home')}}" class="brand-logo left">
          Bookverse
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a class ="menu-item" href="#">Assine</a></li>
          <li><a class ="menu-item" href="{{route('info')}}">Mais informações</a></li>
          <li><a class ="menu-item" href="{{route('trocas')}}">Troque livros</a></li>
          <li><a class ="menu-item" href="{{route('contato')}}">Fale Conosco</a></li>
        </ul>
      </div>
    </nav>

    @yield('body')

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
              <div class="col s2 m2 l2 offset-s4 offset-m4 offset-l4">
                <a href="#" ><img src="<?php echo asset('css/icons/facebook.png')?>"></a>
              </div>
              <div class="col s2 m2 l2">
                <a href="#" ><img src="<?php echo asset('css/icons/twitter.png')?>"></a>
              </div>
              <div class="col s2 m2 l2">
                <a href="#" ><img src="<?php echo asset('css/icons/reddit.png')?>"></a>
              </div>
              <div class="col s2 m2 l2">
                <a href="#" ><img src="<?php echo asset('css/icons/pinterest.png')?>"></a>
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

  </body>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script rel="stylesheet" src="js/materialize.min.js"></script>

</html>
