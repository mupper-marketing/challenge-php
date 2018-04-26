<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
  protected $fillable = [
     'id_animal', 'data','animal','veterinario', 'observacao'
  ];
}
