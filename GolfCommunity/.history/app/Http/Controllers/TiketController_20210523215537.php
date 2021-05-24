<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TiketController extends Controller
{
    public function index(){
    	$pertandingans = DB::table('pertandingans')->get();

    	return view('tiket',['pertandingans' => $pertandingans]);
    }
    
    public function hasiltiket(){
    	$pertandingans = DB::table('pembeliantiket')->get();

    	return view('hasiltiket',['pertandingans' => $pertandingans]);
    }

    public function beli(){
        

        if (Auth::check()) {
           
            return view('belitiket');
        } else {
            return Redirect::to('login?login=0');
        }
    }

    public function bayar(){
        

        if (Auth::check()) {
           
            return view('bayartiket');
        } else {
            return Redirect::to('login?login=0');
        }
    }
}
