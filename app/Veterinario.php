<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veterinario extends Model
{
  protected $fillable = [
     'nome','telefone','crv', 'cep', 'rua', 'cidade', 'estado'
  ];
}
