<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
   public $timestamps  = false ;

    protected $table = 'localizacao';

    protected $fillable = [
      'titulo',
      'col1',
      'col2',
      'col3',
      'col4',
   ];

    protected $hidden = [
     'remember_token'
   ];
}
