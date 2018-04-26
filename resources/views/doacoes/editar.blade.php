@extends('layout.sistema')

@section('titulo','Doações')

@section('conteudo')
  <div class="container">
    <h3 class="center">Editando Doação</h3>
    <div class="row">
      <form class="" action="{{route('doacoes.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('doacoes._form')
        <button class="btn #004d40 teal darken-4">Atualizar</button>
      </form>
    </div>
  </div>




@endsection
