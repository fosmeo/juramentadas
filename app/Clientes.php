<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
   public $timestamps  = false ;

   protected $table = "clientes";

   protected $fillable = [
      'clientes_logo',
      'clientes_site'
  ];

   protected $hidden = [
    'remember_token'
  ];
}
