<?php

namespace App\Http\Controllers;

use App\Models\DaftarPertandingan;
use App\Models\Pertandingan;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as DB;

class DaftarPertandinganController extends Controller
{
    public function store(Request $request){



        $pertandingans = DB::table('daftarpertandingans')->where('user_id',Auth::user()->id)->get();

        DB::table('daftarpertandingans')->insert([
                'id_daftarpertandingan' => $request->id_daftarpertandingan,
                'user_id'          => $request->user_id,
                'nama'          => $request->nama,
                'alamat'          => $request->alamat,
                'tgl_mulai'          => $request->tgl_mulai,
                'tgl_selesai'          => $request->tgl_selesai,
                'cabang'          => $request->cabang,
                'jenis'          => $request->jenis,
                'level'          => $request->level,
                'harga_tiket'          => $request->harga_tiket


        ]);
        // return view('daftarpertandingan');
        return view('daftarpertandingan',['pertandingans' => $pertandingans]);


    }

    public function index(){
    	$pertandingans = DB::table('daftarpertandingans')->get();

    	return view('daftarpertandingan',['pertandingans' => $pertandingans]);
    }
}
