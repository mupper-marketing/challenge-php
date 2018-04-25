@extends('layout.sistema')

@section('titulo','Veterinários')

@section('conteudo')
  <div class="container">
    <h3 class="center">Lista de Veterinários</h3>
    <br><br>
    <div class="row">
      <table class="highlight centered responsive-table">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>CRV</th>
            <th>CEP</th>
            <th>Rua/Avenida</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
            @foreach($registros as $registro)
            <tr>
              <td>{{$registro->nome}}</td>
              <td>{{$registro->telefone}}</td>
              <td>{{$registro->crv}}</td>
              <td>{{$registro->cep}}</td>
              <td>{{$registro->rua}}</td>
              <td>{{$registro->cidade}}</td>
              <td>{{$registro->estado}}</td>
              <td>
                <a class="btn #00796b teal darken-2" href="{{ route('veterinarios.editar',$registro->id) }}" title="Editar"><i class="material-icons">create</i></a>
                <a class="btn #00695c teal darken-3" href="{{ route('veterinarios.deletar',$registro->id) }}" title="Apagar"><i class="material-icons">delete</i></a>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn #004d40 teal darken-4" href="{{route('veterinarios.adicionar')}}">Adicionar</a>

    </div>

  </div>




@endsection
