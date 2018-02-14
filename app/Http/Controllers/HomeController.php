<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locale_pt;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale_pt = Locale_pt::orderBy('id') -> get();

        dd($locale_pt);

        // return view('home' , ['locale_pt' => $locale_pt]);
    }
}
