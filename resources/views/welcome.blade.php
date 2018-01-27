@extends('template.template')

@section('title', 'Bookverse - Home')
<link rel="stylesheet" type="text/css" href="<?php echo asset('css/welcome.css')?>">

@section('body')

  <div id="start">
    <p id="text-intro">
      Você ama livros. Nós Amamos livros.<br>
      Todo mês, 3 livros entregues direto para a sua casa.
    </p>
    <img id="first" src="<?php echo asset('css/img/1.jpg')?>">
  </div>


  <div id="basic-info" class="container">
    <table>
      <tr>
        <th>
          Escolha um plano e assine!<br>
          Na Bookverse, você define o tipo de livros que você receberá!
        </th>
        <td>
          <img class="ilustration" src="<?php echo asset('css/img/3.jpg')?>">
        </td>
      </tr>
      <tr>
        <td>
          <img class="ilustration" src="<?php echo asset('css/img/2.jpg')?>">
        </td>
        <th>
          Todo mês, é entregamos direto para a sua casa um pacote com os livros do pacote definido por você!
        </th>
      </tr>
      <tr>
        <th>
          Abra sua entrega e aproveite os diferentes mundos e realidades que um livro pode oferecer! :)
        </th>
        <td>
          <img class="ilustration" src="<?php echo asset('css/img/6.jpg')?>">
        </td>
      </tr>
    </table>
  </div>

@endsection
