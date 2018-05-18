<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
   public $timestamps  = false ;
   protected $table = 'slider';

   protected $fillable = [
      'slider_titulo',
      'slider_texto',
      'slider_botao',
      'slider_imagem',
      'tab_lang',
 ];

 protected $hidden = [
  'remember_token'
];

}
