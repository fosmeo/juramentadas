<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
   public $timestamps  = false ;
   
   protected $fillable = [

  ];

   protected $hidden = [
    'remember_token'
  ];
}
