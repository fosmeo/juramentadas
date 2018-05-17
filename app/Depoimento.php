<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depoimento extends Model
{
   public $timestamps  = false ;

   protected $fillable = [
      'depoimento',
      'depoimentos_logo',
      'textos_posicao',
      'tab_lang',
  ];

   protected $hidden = [
    'remember_token'
  ];
}
