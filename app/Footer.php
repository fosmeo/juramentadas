<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
   public $timestamps  = false ;
   protected $table = 'footer';

   protected $fillable = [
     'footer_col1',
     'footer_col2',
     'footer_col3',
     'footer_col4',
   ];

    protected $hidden = [
     'remember_token'
   ];
}
