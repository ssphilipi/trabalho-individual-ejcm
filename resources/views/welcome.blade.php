<html>
  @extends('layouts.template')

  @section('title', 'Bookverse - Home')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">

  @section('body')

  <div class="slider">
    <ul class="slides">
      <li>
        <img class="ilustration" src="{{ asset('css/img/3.jpg') }}">
        <div class="caption left-align">
          <h3 class="light black-text">Você é o comandante!</h3>
          <h5 class="light black-text text-lighten-3">Na Bookverse, você define os tipos e gêneros de livros que você receberá!</h5>
        </div>
      </li>
      <li>
        <img class="ilustration" src="{{ asset('css/img/2.jpg') }}">
        <div class="caption right-align">
          <h3>No conforto de casa!</h3>
          <h5 class="light grey-text text-lighten-3">Todo mês, entregamos direto para a sua casa um pacote com os livros do pacote personalizado de cada cliente!</h5>
        </div>
      </li>
      <li>
        <img class="ilustration" src="{{ asset('css/img/6.jpg') }}">
        <div class="caption center-align">
          <h3 class="black-text">Só alegria!</h3>
          <h5 class="black-text text-lighten-3">Abra sua entrega e aproveite os diferentes mundos e realidades que um livro pode oferecer!</h5>
        </div>
      </li>
    </ul>
  </div>

    <div id="start">
      <p id="text-intro">
        Você ama livros. Nós Amamos livros.<br>
        Todo mês, 3 livros entregues direto para a sua casa.
      </p>
      <img id="first" src="{{ asset('css/img/1.jpg') }}">
    </div>

    <br>
    <br>

  @endsection

</html>
