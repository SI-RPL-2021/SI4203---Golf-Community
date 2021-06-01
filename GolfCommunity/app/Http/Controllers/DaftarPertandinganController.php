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


        // DB::table('daftarpertandingans')->where('user_id', Auth::user()->id)->get();
        $pertandingans = DB::table('daftarpertandingans')->where('user_id',Auth::user()->id)->get();
        // DB::table('daftarpertandingans')->where('id_daftarpertandingan')->get();
        // DB::table('daftarpertandingans')->join('users','users.id', '=', 'daftarpertandingans.user_id')->
        // select('users.name', 'users.email')->where('daftarpertandingans.id_daftarpertandingan',$id_pertandingan)->get();

        // $game = Pertandingan::where($request->id_pertandingan);
        // $new->id_daftarpertandingan = $game;
        // $new ->user_id = $request->$user;
        // $new ->save();
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

    public function show(Request $request, $id){
        $user = $request->session()->get('user');
        $game = Pertandingan::findorfail($id);
        return view('home');
    }
}
