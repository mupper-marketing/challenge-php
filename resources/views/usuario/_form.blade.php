<div class="row">
  <div class="input-field">
    <input type="text"  required name="name" value="{{isset($registro->name) ? $registro->name : ''}}">
    <label>Nome*</label>
  </div>
</div>

<div class="row">
  <div class="input-field">
    <input type="email"  required name="email" value="{{isset($registro->email) ? $registro->email : ''}}">
    <label>Email*</label>
  </div>
</div>

<div class="row">
  <div class="input-field">
    <input type="password" required name="password">
    <label>Senha*</label>
  </div>
</div>
