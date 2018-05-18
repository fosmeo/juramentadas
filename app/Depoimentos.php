<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Depoimentos extends Model
{
   public $timestamps  = false ;

   protected $fillable = [
      'id_lang',
      'depoimentos_texto',
      'tab_lang',
  ];

   protected $hidden = [
    'remember_token'
  ];
}
