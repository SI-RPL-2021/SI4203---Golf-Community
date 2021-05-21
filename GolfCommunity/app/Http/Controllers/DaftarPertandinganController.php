<?php

namespace App\Http\Controllers;

use App\Models\DaftarPertandingan;
use App\Models\Pertandingan;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB as DB;

class DaftarPertandinganController extends Controller
{
    public function store(Request $request){

        $new = new Daftarpertandingan();
        $user = Auth::id();
        $game = Pertandingan::where($request->id_pertandingan);
        $new->id_daftarpertandingan = $game;
        $new ->user_id = $request->$user
        // $new ->save();
        $save = DB::table('pertandingans')->insert([
                'id_daftarpertandingan'              => $request->id_daftarpertandingan,
                'user_id'          => $request->user_id
        ]);
        return view('listpertandingan',['pertandingans' => $pertandingans]);


    }

    public function show(Request $request, $id){
        $user = $request->session()->get('user');
        $game = Pertandingan::findorfail($id);
        return view('home');
    }
}
