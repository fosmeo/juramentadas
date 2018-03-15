<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ImagemController extends Controller
{
   public function __construct()
  {
     $this->middleware('auth');
  }

  public function Imagens()
  {

  }

}
