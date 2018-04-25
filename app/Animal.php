<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
  protected $fillable = [
     'nome','imagem','idade', 'especie', 'raca', 'observacao'
  ];
}
