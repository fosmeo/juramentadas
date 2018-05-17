<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
   public $timestamps  = false ;

   protected $fillable = [
      'header_top',
      'header_upper'
  ];

   protected $hidden = [
    'remember_token'
  ];
}
