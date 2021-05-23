<?php

namespace App\Http\Controllers;

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

    public function buat(){
        return view('buatpertandingan');
    }

    public function buatpertandingan(Request $request){
        $post = new Post;
        $post->nama     = $request->nama;
        $post->lapangan = $request->lapangan;
        $post->alamat     = $request->alamat;
        $post->tgl_mulai     = $request->tgl_mulai;
        $post->tgl_selesai     = $request->tgl_selesai;
        $post->harga_tiket     = $request->harga_tiket;
        $post->cabang     = $request->cabang;
        $post->level     = $request->level;
        $post->detail     = $request->detail;
        $post->deskripsi_singkat     = $request->deskripsi_singkat;
        $post->jumlah_pemain     = $request->jumlah_pemain;
        $post->gambar     = $request->gambar;
        $post->jenis     = $request->jenis;
        $post->kuota_pemain     = $request->kuota_pemain;
        $post->save();
        return redirect('/pertandingan')->with('status', 'Pertandingan Form Data Has Been inserted');
    }
}
