@extends('layout.sistema')

@section('titulo','SOS PETS')

@section('conteudo')
  <div class="container">
    <h3 class="center">Nossos Pets</h3>
    <div class="row">
      @foreach($animais as $animal)
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="{{asset($animal->imagem)}}">
            </div>
            <div class="card-content">
              <h4>{{$animal->nome}}</h4>
              <p>{{$animal->raca}} | {{$animal->idade}} anos </p>
            </div>
            <div class="card-action">
              <a href="{{route('animais')}}">Ver mais...</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>


  </div>




@endsection
