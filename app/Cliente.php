<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
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
