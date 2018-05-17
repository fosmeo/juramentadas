<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depoimento extends Model
{
   public $timestamps  = false ;

   protected $fillable = [
      'depoimento_pt',
      'depoimento_en',
      'depoimento_es',
      'depoimento_it',
      'depoimentos_logo',
  ];

   protected $hidden = [
    'remember_token'
  ];
}
