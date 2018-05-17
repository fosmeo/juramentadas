<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
   public $timestamps  = false ;
   protected $table = "sliders";

   protected $fillable = [
      'slider_titulo',
      'slider_texto',
      'slider_botao',
      'slider_imagem',
 ];

 protected $hidden = [
  'remember_token'
];

}
