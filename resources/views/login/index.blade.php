@extends('layout.sistema')

@section('titulo','SOS PETS')

@section('conteudo')
  <br><br><br>
  <div class="container">
    <h3 class="center">Entrar</h3>
    <div class="row">
      <form class="col s12 m6 offset-m3" action="{{route('login.entrar')}}" method="post">
        {{ csrf_field() }}

        <div class="input-field">
          <input type="text" name="email">
          <label>E-mail</label>
        </div>
        <div class="input-field">
          <input type="password" name="senha">
          <label>Senha</label>
        </div>

        <button class="btn #004d40 teal darken-4">Entrar</button>
      </form>
    </div>
  </div>




@endsection
