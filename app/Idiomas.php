<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idiomas extends Model
{
   public $timestamps  = false ;

   protected $fillable = [
      'idiomas_texto',
  ];

   protected $hidden = [
    'remember_token'
  ];
}
