@extends('layout.sistema')

@section('titulo','Veterinários')

@section('conteudo')
  <div class="container">
    <h3 class="center">Adicionar Veterinários</h3>
    <div class="row">
      <form class="" action="{{route('veterinarios.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('veterinarios._form')
        <button class="btn #004d40 teal darken-4">Salvar</button>
      </form>
    </div>
  </div>




@endsection
