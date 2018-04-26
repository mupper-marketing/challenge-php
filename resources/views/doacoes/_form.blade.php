<div class="row">
  <div class="input-field">
    <input type="text"  required name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
    <label>Nome Doador*</label>
  </div>
</div>

<div class="row">
  <div class="input-field">
    <input type="text"  required name="cpf" id="cpf" value="{{isset($registro->cpf) ? $registro->cpf : ''}}">
    <label>CPF*</label>
  </div>
</div>

<div class="row">
  <div class="input-field">
    <input type="text"  required class="telefone" name="telefone" value="{{isset($registro->telefone) ? $registro->telefone : ''}}">
    <label>Telefone*</label>
  </div>
</div>


<div class="row">
  <div class="input-field">
    <select name="tipo" required>
      <option value="" disabled selected>Escolha uma opção</option>
      <option value="Ração">Ração</option>
      <option value="Medicamento">Medicamento</option>
    </select>
    <label>Tipo*</label>
  </div>
</div>

<div class="row">
  <div class="input-field">
    <input type="text"  required name="quantidade" value="{{isset($registro->quantidade) ? $registro->quantidade : ''}}">
    <label>Quantidade*</label>
  </div>
</div>

<div class="row">
  <div class="input-field">
    <select name="destino" required>
      <option value="" disabled selected>Escolha uma opção</option>
      <option value="Todos os animais">Todos os animais</option>
      @foreach($dados as $dado)
      <option value="{{$dado->nome}}">{{$dado->nome}}</option>
      @endforeach
    </select>
    <label>Destino*</label>
  </div>
</div>
