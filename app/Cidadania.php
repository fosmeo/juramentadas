<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidadania extends Model
{
   public $timestamps  = false ;
   protected $table ='cidadania';

   protected $fillable = [
      'cidadania_titulo',
      'cidadania_texto'
 ];

   protected $hidden = [
   'remember_token'
 ];
}
