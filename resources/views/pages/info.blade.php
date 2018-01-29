@extends('layouts.template')

@section('title', 'Bookverse')

<link rel="stylesheet" type="text/css" href="{{ asset('css/info.css') }}">

@section('body')
  <div class="container">
    <div id="slideshow">
      <div class="slide-wrapper">
        <div class="slide"><img class="slide" src="{{ asset('css/img/4.jpg') }}"></div>
        <div class="slide"><img class="slide" src="{{ asset('css/img/5.jpg') }}"></div>
        <div class="slide"><img class="slide" src="{{ asset('css/img/8.jpg') }}"></div>
        <div class="slide"><h1 class="slide-number">4</h1></div>
        <div class="slide"><h1 class="slide-number">5</h1></div>
      </div>
    </div>
  </div>

  <div class="container">
    <p id="text1" class="white-text">
      A Bookverse oferece um sistema de envio de livros para clientes assinantes do serviço.
      Nós oferemos 3 diferentes títulos baseados nos gêneros escolhidos na hora em que você se torna assinante do produto.
      Além de oferecermos a possiblidade de escolher os gêneros preferidos, também oferecemos para clientes, pacotes de envio baseados em temas comuns e gêneros únicos.
      Um de nossos serviços especiais é oferecer a assinatura do serviço para o recebimento de livros infantis, para que o cliente possa aproveitar a leitura com seus filhos além de incentivar a leitura e passar conhecimento.
    </p>
  </div>
@endsection
