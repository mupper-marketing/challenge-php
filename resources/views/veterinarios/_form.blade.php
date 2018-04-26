<div class="row">
  <div class="input-field">
    <input type="text"  required name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
    <label>Nome*</label>
  </div>
</div>

<div class="row">
  <div class="input-field">
    <input type="text"  required name="telefone" class="telefone" value="{{isset($registro->telefone) ? $registro->telefone : ''}}">
    <label>Telefone*</label>
  </div>
</div>

<div class="row">
  <div class="input-field">
    <input type="text"  required name="crv" id="crv" value="{{isset($registro->crv) ? $registro->crv : ''}}">
    <label>CRV*</label>
  </div>
</div>

<div class="row">
  <div class="input-field">
    <input type="text"  required name="cep" id="cep" value="{{isset($registro->cep) ? $registro->cep : ''}}">
    <label>CEP*</label>
  </div>
</div>

<div class="row">
  <div class="input-field">
    <input type="text"  required name="rua" id="rua" value="{{isset($registro->rua) ? $registro->rua : ''}}">
    <label>Rua/Avenida*</label>
  </div>
</div>

<div class="row">
  <div class="input-field">
    <input type="text"  required name="cidade" id="cidade" value="{{isset($registro->cidade) ? $registro->cidade : ''}}">
    <label>Cidade*</label>
  </div>
</div>

<div class="row">
  <div class="input-field">
    <input type="text"  required name="estado" id="uf" value="{{isset($registro->estado) ? $registro->estado : ''}}">
    <label>Estado*</label>
  </div>
</div>
