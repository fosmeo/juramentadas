<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
   public $timestamps  = false ;
   protected $table ='faq';

   protected $fillable = [
      'faq_pergunta',
      'faq_resposta',
      'tab_lang',
 ];

   protected $hidden = [
   'remember_token'
 ];
}
