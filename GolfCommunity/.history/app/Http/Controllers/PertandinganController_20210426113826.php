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
        return View::make('buatp');
    }

    public function buatpertandingan(Request $request){
        $pertandingan = new Pertandingan;
        $pertandingan->nama                 = $request->nama;
        $pertandingan->lapangan             = $request->lapangan;
        $pertandingan->alamat               = $request->alamat;
        $pertandingan->tgl_mulai            = $request->tgl_mulai;
        $pertandingan->tgl_selesai          = $request->tgl_selesai;
        $pertandingan->harga_tiket          = $request->harga_tiket;
        $pertandingan->cabang               = $request->cabang;
        $pertandingan->level                = $request->level;
        $pertandingan->detail               = $request->detail;
        $pertandingan->deskripsi_singkat    = $request->deskripsi_singkat;
        $pertandingan->jumlah_pemain        = $request->jumlah_pemain;
        
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
           ]);
           $gambar = $request->file('image')->store('public/images/upload');

        $pertandingan->gambar               = $gambar;
        $pertandingan->jenis                = $request->jenis;
        $pertandingan->kuota_pemain         = $request->kuota_pemain;
        $pertandingan->save();
        return redirect('/pertandingan')->with('status', 'Pertandingan Form Data Has Been inserted');
    }
}
