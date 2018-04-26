@extends('layout.sistema')

@section('titulo','Animais')

@section('conteudo')
  <div class="container">
    <h3 class="center">Adicionar Animal</h3>
    <div class="row">
      <form class="" action="{{route('animais.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('animais._form')
        <button class="btn #004d40 teal darken-4">Salvar</button>
      </form>
    </div>
  </div>




@endsection
