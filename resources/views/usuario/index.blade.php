@extends('layout.sistema')

@section('titulo','Usuários')

@section('conteudo')
  <div class="container">
    <h3 class="center">Lista de Usuários</h3>
    <br><br>
    <div class="row">
      <table class="highlight centered responsive-table">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
            @foreach($registros as $registro)
            <tr>
              <td>{{$registro->name}}</td>
              <td>{{$registro->email}}</td>
              <td>
                <a class="btn #00796b teal darken-2" href="{{route('usuario.editar', $registro->id)}}" title="Editar"><i class="material-icons">create</i></a>
                <a class="btn #00695c teal darken-3" href="{{route('usuario.deletar', $registro->id)}}" onclick="excluir({{ $registro->id }})" title="Apagar"><i class="material-icons">delete</i></a>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn #004d40 teal darken-4" href="{{route('usuario.adicionar')}}">Adicionar</a>

    </div>

  </div>




@endsection
