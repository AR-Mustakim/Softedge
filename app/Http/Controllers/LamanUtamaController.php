<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LamanUtamaController extends Controller
{
    public function lamanUtama(){
        return view('front.home');
    }
    //
}
