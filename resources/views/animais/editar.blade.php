@extends('layout.sistema')

@section('titulo','Animais')

@section('conteudo')
  <div class="container">
    <h3 class="center">Editando Animal</h3>
    <div class="row">
      <form class="" action="{{route('animais.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('animais._form')
        <button class="btn #004d40 teal darken-4">Atualizar</button>
      </form>
    </div>
  </div>
  <br><br>

  <div class="container">
    <h3 class="center">Histórico de Atendimento</h3>
    <br><br>
    <div class="row">
      <table class="highlight centered responsive-table">
        <thead>
          <tr>
            <th>Data</th>
            <th>Animal</th>
            <th>Veterinário</th>
            <th>Observação</th>

          </tr>
        </thead>
        <tbody>
            @foreach($historicos as $historico)
            <tr>
              <td>{{$historico->data}}</td>
              <td>{{$historico->animal}}</td>
              <td>{{$historico->veterinario}}</td>
              <td>{{$historico->observacao}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn #004d40 teal darken-4" href="{{ route('animais.historico.adicionar',$registro->id) }}">Adicionar</a>
    </div>

  </div>


@endsection
