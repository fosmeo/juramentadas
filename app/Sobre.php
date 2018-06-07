<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sobre extends Model
{
   public $timestamps  = false ;
   protected $table = 'sobre';


   protected $fillable = [
      'id_sobre',
      'sobre_titulo',
      'sobre_texto',
      'sobre_imagem',
      'tab_lang',
  ];

   protected $hidden = [
    'remember_token'
  ];
}
