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

    public function upload(Request $request){
        if($request->hasFile('image')){
            $resorce       = $request->file('image');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/images", $name);
            $save = DB::table('images')->insert(['image' => $name]);
            echo "Gambar berhasil di upload";
        }else{
            echo "Gagal upload gambar";
        }
    }
    
}
