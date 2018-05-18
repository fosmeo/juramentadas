<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localizacao extends Model
{
   public $timestamps  = false ;

    protected $table = 'localizacao';

    protected $fillable = [
      'localizacao_titulo',
      'localizacao_col1',
      'localizacao_col2',
      'localizacao_col3',
      'localizacao_col4',
   ];

    protected $hidden = [
     'remember_token'
   ];
}
