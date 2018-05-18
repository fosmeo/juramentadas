<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_orcamento extends Model
{
   public $timestamps  = false ;
   protected $table ='form_orcamentos';

   protected $fillable = [
      'orcamentos_titulo',
      'orcamentos_itens',
  ];

   protected $hidden = [
    'remember_token'
  ];
}
