<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertandinganController extends Controller
{
    public function home(){
        return view('home');
    }

    public function list(){
        return view('list');
    }

    public function kontak(){
        return view('kontak');
    }
}
