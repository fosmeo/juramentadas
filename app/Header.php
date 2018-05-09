<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
   public $timestamps  = false ;

   protected $fillable = [
      'header_top',
      'upper_email',
      'upper_tel',
  ];

   protected $hidden = [
    'remember_token'
  ];
}
