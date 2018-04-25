@extends('layout.sistema')

@section('titulo','Doações')

@section('conteudo')
  <div class="container">
    <h3 class="center">Adicionar Doações</h3>
    <div class="row">
      <form class="" action="{{route('doacoes.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('doacoes._form')
        <button class="btn #004d40 teal darken-4">Salvar</button>
      </form>
    </div>
  </div>




@endsection
