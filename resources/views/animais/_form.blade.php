<div class="row">
  <div class="input-field">
    <input type="text"  required name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
    <label>Nome*</label>
  </div>
</div>

<div class="file-field  input-field">

  <div class="btn #00796b teal darken-2">
    <span>Imagem*</span>
    <input type="file" name="imagem">
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" value="{{isset($registro->imagem) ? $registro->imagem : ''}}" required placeholder="Imagens em (.jpg ou .png)" type="text">
  </div>
</div>
@if(isset($registro->imagem))
<div class="input-field">
  <img width="150" src="{{asset($registro->imagem)}}" />
</div>
@endif

<div class="row">
  <div class="input-field">
    <input type="text"  required name="idade" value="{{isset($registro->idade) ? $registro->idade : ''}}">
    <label>Idade*</label>
  </div>
</div>

<div class="row">
  <div class="input-field">
    <input type="text"  required name="especie" value="{{isset($registro->especie) ? $registro->especie : ''}}">
    <label>Espécie*</label>
  </div>
</div>

<div class="row">
  <div class="input-field">
    <input type="text"  required name="raca" value="{{isset($registro->raca) ? $registro->raca : ''}}">
    <label>Raça*</label>
  </div>
</div>

<div class="">
  <div class="input-field">
    <input type="text" name="observacao" value="{{isset($registro->observacao) ? $registro->observacao : ''}}">
    <label>Observação</label>
  </div>  
</div>
