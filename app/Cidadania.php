<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidadania extends Model
{
   public $timestamps  = false ;

   protected $fillable = [
      'titulo','col1'
 ];

   protected $hidden = [
   'remember_token'
 ];
}
