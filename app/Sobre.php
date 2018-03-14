<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sobre extends Model
{
   public $timestamps  = false ;

   protected $fillable = [
      'col1'
  ];

   protected $hidden = [
    'remember_token'
  ];
}
