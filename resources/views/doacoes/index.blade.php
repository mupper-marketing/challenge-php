@extends('layout.sistema')

@section('titulo','Doações')

@section('conteudo')
  <div class="container">
    <h3 class="center">Lista de Doações</h3>
    <br><br>
    <div class="row">
      <table class="highlight centered responsive-table">
        <thead>
          <tr>
            <th>Nome Doador</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Tipo</th>
            <th>Quantidade</th>
            <th>Destino</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{$registro->nome}}</td>
              <td>{{$registro->cpf}}</td>
              <td>{{$registro->telefone}}</td>
              <td>{{$registro->tipo}}</td>
              <td>{{$registro->quantidade}}</td>
              <td>{{$registro->destino}}</td>
              <td>
                <a class="btn #00796b teal darken-2" href="{{ route('doacoes.editar',$registro->id) }}" title="Editar"><i class="material-icons">create</i></a>
                <a class="btn #00695c teal darken-3" href="{{ route('doacoes.deletar',$registro->id) }}" title="Apagar"><i class="material-icons">delete</i></a>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn #004d40 teal darken-4" href="{{route('doacoes.adicionar')}}">Adicionar</a>

    </div>

  </div>




@endsection
