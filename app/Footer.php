<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
   public $timestamps  = false ;
   
   protected $fillable = [
     'col1',
     'col2',
     'col3',
     'col4',
   ];

    protected $hidden = [
     'remember_token'
   ];
}
