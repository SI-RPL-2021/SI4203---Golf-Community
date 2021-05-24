<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;

class TiketController extends Controller
{
    public function index(){
    	$pertandingans = DB::table('pertandingans')->get();

    	return view('tiket',['pertandingans' => $pertandingans]);
    }

    public function beli(){
    	$pertandingans = DB::table('pertandingans')->get();

    	return view('belitiket',['pertandingans' => $pertandingans]);
    }
}
