<input type="hidden" value="{{$animal->id}}" name="id_animal">

<div class="row">
  <div class="input-field">
    <input type="text" id="data" class="datepicker" required name="data">
    <label>Data*</label>
  </div>
</div>


<div class="row">
  <div class="input-field">
    <input value="{{$animal->nome}}" readonly  type="text"  name="animal">
    <label for="">Animal*</label>
  </div>
</div>

<div class="row">
  <div class="input-field">
    <select name="veterinario" required>
      <option value="" disabled selected>Escolha uma opção</option>
      @foreach ($veterinarios as $veterinario)
      <option value="{{$veterinario->nome}}">{{$veterinario->nome}}</option>
      @endforeach
    </select>
    <label>Veterinário*</label>
  </div>
</div>


<div class="row">
  <div class="input-field">
    <input type="text"  required name="observacao">
    <label>Observação*</label>
  </div>
</div>
