@extends('layouts.template')

@section('title', 'Bookverse - Fale Conosco')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


@section('body')

  <div class="container">
  <h1 class="white-text center">Fale Conosco!</h1>

  @if(Session::has('success'))
     <div class="alert alert-success">
       {{ Session::get('success') }}
     </div>
  @endif

  {!! Form::open(['route'=>'contactus.store']) !!}

  <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
  {!! Form::label('Nome:') !!}
  {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'']) !!}
  <span class="text-danger">{{ $errors->first('name') }}</span>
  </div>

  <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
  {!! Form::label('Email:') !!}
  {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'']) !!}
  <span class="text-danger">{{ $errors->first('email') }}</span>
  </div>

  <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
  {!! Form::label('Mensagem') !!}
  {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'']) !!}
  <span class="text-danger">{{ $errors->first('message') }}</span>
  </div>

  <div class="form-group">
  <button class="btn btn-success">Enviar</button>
  </div>

  {!! Form::close() !!}

  </div>

@endsection
