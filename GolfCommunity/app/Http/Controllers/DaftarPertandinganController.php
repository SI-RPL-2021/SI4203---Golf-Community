<?php

namespace App\Http\Controllers;

use App\Models\Pertandingan;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB as DB;

class DaftarPertandinganController extends Controller
{
    public function store(Request $request){

        $new = new Daftarpertandingan();
        $user = $request->session()->get('user');
        $game = Pertandingan::findorfail($request->id);
        $new->id_daftarpertandingan = $game->id;
        $new->user_id = $user->id;
        return view('home');
    }

    public function show(Request $request, $id){
        $user = $request->session()->get('user');
        $game = Pertandingan::findorfail($id);
        return view('home');
    }
}
