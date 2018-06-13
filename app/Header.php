<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
   public $timestamps  = false ;
   protected $table ='header';

   protected $fillable = [
      'header_top',
      'header_upper_email',
      'header_upper_tel',
  ];

   protected $hidden = [
    'remember_token'
  ];
}
