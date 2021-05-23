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
    
    public function tiketsaya(){
        
        $pertandingans = DB::table('pertandingans')->where('id_pertandingan',$id_pertandingan)->get();
    	$pembeliantiket = DB::table('pembeliantiket')->where('id_user', Auth::user()->id)->get();

    	return view('tiketsaya',['pembeliantiket' => $pembeliantiket]);
    }
    
    public function beli(){
        

        if (Auth::check()) {
           
            return view('belitiket');
        } else {
            return Redirect::to('login?login=0');
        }
    }

    public function bayartiket(Request $request){
        

        if (Auth::check()) {
           
            return view('bayartiket');
        } else {
            return Redirect::to('login?login=0');
        }
    }
    public function hasiltiket(Request $request)
    {
        DB::table('pembeliantiket')->insert([
            'id_user'           => $request->id_user,
            'id_pertandingan'   => $request->id_pertandingan,
            'tgl_beli'          => $request->tgl_beli,
            'jumlah'            => $request->jumlah,
            'total_harga'       => $request->total_harga,
            'kode'              => $request->kode,
            'status'            => $request->status,
            'nama'              => $request->nama
        ]);
        
        return redirect('/tiket/tiketsaya');
    
    }

    public function print(){
    	$pembeliantiket = DB::table('pembeliantiket')->get();


        
        if (Auth::check()) {
           
    	    return view('printtiket',['pembeliantiket' => $pembeliantiket]);
        } else {
            return Redirect::to('login?login=0');
        }
    }
}
