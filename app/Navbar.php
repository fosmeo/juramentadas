<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
   public $timestamps  = false ;
   protected $table = 'navbar';

   protected $fillable = [
      'itens'
  ];

   protected $hidden = [
    'remember_token'
  ];
}
