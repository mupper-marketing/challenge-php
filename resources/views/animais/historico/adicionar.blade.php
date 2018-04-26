@extends('layout.sistema')

@section('titulo','Animais')

@section('conteudo')
  <div class="container">
    <h3 class="center">Adicionar Histórico</h3>
    <div class="row">
      <form class="" action="{{route('animais.historico.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('animais.historico._form')
        <button class="btn #004d40 teal darken-4">Salvar</button>
      </form>
    </div>
  </div>




@endsection
