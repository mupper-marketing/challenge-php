@extends('layout.sistema')

@section('titulo','Animais')

@section('conteudo')
  <div class="container">
    <h3 class="center">Lista de Animais</h3>
    <br><br>
    <div class="row">
      <table class="highlight centered responsive-table">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Imagem</th>
            <th>Idade</th>
            <th>Espécie</th>
            <th>Raça</th>
            <th>Observação</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
            @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->nome }}</td>
              <td><img height="100" src="{{asset($registro->imagem)}}" alt="{{ $registro->titulo }}" /></td>
              <td>{{ $registro->idade }}</td>
              <td>{{ $registro->especie }}</td>
              <td>{{ $registro->raca }}</td>
              <td>{{ $registro->observacao }}</td>
              <td>
                <a class="btn #00796b teal darken-2" href="{{ route('animais.editar',$registro->id) }}" title="Editar"><i class="material-icons">create</i></a>
                <a class="btn #00695c teal darken-3" href="{{ route('animais.deletar',$registro->id) }}" title="Apagar"><i class="material-icons">delete</i></a>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn #004d40 teal darken-4" href="{{route('animais.adicionar')}}">Adicionar</a>

    </div>

  </div>




@endsection
