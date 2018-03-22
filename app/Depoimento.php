<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depoimento extends Model
{
   public $timestamps  = false ;

   protected $fillable = [
      'col1',
      'depoimentos_logo'
  ];

   protected $hidden = [
    'remember_token'
  ];
}
