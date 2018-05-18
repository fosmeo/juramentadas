<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sobre extends Model
{
   public $timestamps  = false ;
   protected $table = 'sobre';


   protected $fillable = [
      'id_lang',
      'sobre_texto',
      'tab_lang',
  ];

   protected $hidden = [
    'remember_token'
  ];
}
