<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doacao extends Model
{
  protected $fillable = [
     'nome','cpf','telefone', 'tipo', 'quantidade', 'destino'
  ];
}
