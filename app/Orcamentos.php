<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orcamentos extends Model
{
   public $timestamps  = false ;
   protected $table = 'orcamentos';
   
   protected $fillable = [
    'orcamentos_pfpj',
    'orcamentos_nome',
    'orcamentos_cidade',
    'orcamentos_est',
    'orcamentos_tel',
    'orcamentos_email',
    'orcamentos_obs',
    'orcamentos_file',
    'hora',
  ];

   protected $hidden = [
    'remember_token'
  ];
}
