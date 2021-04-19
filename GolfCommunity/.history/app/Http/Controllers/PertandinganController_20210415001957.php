<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PertandinganController extends Controller
{
    public function index()
    {
        $pertandingan = DB::table('pertandingan')->get();
        return view('indexpertandingan', ['pertandingan' => $pertandingan]);
    }

    public function tambah()
    {
        return view('tambahpertandingan');
    }

    public function store(Request $request)
    {
        DB::table('pertandingan')->insert([
            'pertandingan_nama'=>$request->nama,
            'pertandingan_jabatan'=>$request->jabatan,
            'pertandingan_umur'=>$request->umur,
            'pertandingan_alamat'=>$request->alamat
        ]);
        return redirect('/pertandingan');
    }

    public function edit($id)
    {
        $pertandingan = DB::table('pertandingan')->where('pertandingan_id', $id)->get();
        return view('edit', ['pertandingan' => $pertandingan]);
    }
}
