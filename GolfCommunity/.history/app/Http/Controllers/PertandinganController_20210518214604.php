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
    	$pertandingans = DB::table('pertandingans')->get();

    	return view('listpertandingan',['pertandingans' => $pertandingans]);
    }

    public function buatp(){
        return view('buatp');
    }

    public function show($key){


    	return view('showpertandingan',['pertandingans' => $pertandingans]);
        echo $key;
        //$game = Pertandingan::findorfail($id);
        //$user = $request->session()->get('user');
        // $daftarpertandingan = Daftarpertandingan::join('users','users.id', '=', 'daftarpertandingans.user_id')->
        //     select('users.name', 'users.email')->where('daftarpertandingans.id_pertandingan', '=', $id)->get();
        //return view('showpertandingan');
    }

    public function buatpertandingan(Request $request){
        if(
            $request->hasFile('image')){
            $resorce    = $request->file('image');
            $name       = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/images/upload", $name);


            $save = DB::table('pertandingans')->insert([
                'nama'              => $request->nama,
                'lapangan'          => $request->lapangan,
                'alamat'            => $request->alamat,
                'tgl_mulai'         => $request->tgl_mulai,
                'tgl_selesai'       => $request->tgl_selesai,
                'harga_tiket'       => $request->harga_tiket,
                'cabang'            => $request->cabang,
                'level'             => $request->level,
                'detail'            => $request->detail,
                'deskripsi_singkat' => $request->deskripsi_singkat,
                'jumlah_pemain'     => $request->jumlah_pemain,
                'level'             => $request->level,
                'gambar'            => $name,
                'jenis'             => $request->jenis,
                'kuota_pemain'      => $request->kuota_pemain

                ]);
                return redirect('/pertandingan/listpertandingan')->with(['success' => 'Pertandingan berhasil dibuat']);
        }else{
            echo "Gagal menginput data";
        }
    }
}
