@extends('layouts.template')

@section('title', 'Bookverse')
<link rel="stylesheet" type="text/css" href="{{ asset('css/trocas.css') }}">

@section('body')

  <p id="text">
    Já terminou de ler um livro e gostaria de receber outro através de uma troca com um membro da nossa comunidade?<br>
    Preencha os espaços abaixo e te enviaremos um e-mail com detalhes da troca!
  </p>

  <div class="container white-text">
    <form action="#" enctype="multipart/form-data method=POST">
      {{ csrf_field() }}
      Nome:<br>
      <input type="text" name="name">
      <br>
      E-mail:<br>
      <input type="text" name='email'>
      <br>
      Opinião sobre o livro:<br>
      <input type="text" name='opinion'>
      Foto do livro:
      <input type="file" name="file" id="file">
      <input type="submit" value="Submit" name="submit">
      <br>
    </form>
  </div>



@endsection
