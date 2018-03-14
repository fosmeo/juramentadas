<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locale_en extends Model
{
   public $timestamps  = false ;

   protected $table = 'locale_en';

   protected $fillable = [
      'textos_posicao','textos_titulo1','textos_titulo2','textos_subtitulo','textos_texto'
   ];

   protected $hidden = [
      'remember_token'
   ];
}
