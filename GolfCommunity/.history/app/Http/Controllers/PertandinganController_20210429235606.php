<?php

namespace App\Http\Controllers;

use App\Models\Pertandingan;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB as DB;

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

    public function buatpertandingan(Request $request){
        if(
            $request->hasFile('image')){
            $resorce       = $request->file('image');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/images/upload", $name);


            $save = DB::table('images')->insert([
                'nama' => $request->nama,
                'image' => $name
                
                ]);
            echo "Gambar berhasil di upload";
        }else{
            echo "Gagal upload gambar";
        }
    }
}
