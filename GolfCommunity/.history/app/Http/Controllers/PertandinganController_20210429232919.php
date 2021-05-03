<?php

namespace App\Http\Controllers;

use App\Models\Pertandingan;
use Illuminate\Http\Request;
use App\Models\Post;

class PertandinganController extends Controller
{
    public function home(){
        return view('home');
    }

    public function list(){
        return view('listpertandingan');
    }

    public function buatp(){
        return view('buatp');
    }
}
