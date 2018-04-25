@extends('layout.sistema')

@section('titulo','Usuários')

@section('conteudo')
  <div class="container">
    <h3 class="center">Adicionar Usuários</h3>
    <div class="row">
      <form class="" action="{{route('usuario.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('usuario._form')
        <button class="btn #004d40 teal darken-4">Salvar</button>
      </form>
    </div>
  </div>




@endsection
