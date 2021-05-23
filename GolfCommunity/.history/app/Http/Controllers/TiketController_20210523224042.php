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
        // insert data ke table pegawai
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
        
        return redirect('/tiket/printtiket');
    
    }
}
