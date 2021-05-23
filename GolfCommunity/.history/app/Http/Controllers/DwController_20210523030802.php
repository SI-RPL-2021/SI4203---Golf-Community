<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DwController extends Controller
{
    public function index(){
        return view('dw');
    }
}
