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

    // method untuk insert data ke table pegawai
    public function hasiltiket(Request $request)
    {
        // insert data ke table pegawai
        DB::table('pembeliantiket')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    
    }
}
