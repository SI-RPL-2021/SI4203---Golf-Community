<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    public function show(){
        $news = DB::table('berita')->orderby('id','desc')->get();
        return view('showberita', ['news'=>$news]);
    }

    public function detail($id){
        $news = DB::table('berita')->where('id', $id)->first();
        return view('detailberita', ['news'=>$news]);
    }

    public function create(Request $request){
        $request->request->add(['id'=>auth()->admin()->id]);
        $news = DB::table('berita')->orderby('id','desc')->post();
        return redirect()->back()->with('sukses', 'Berita berhasil ditambahkan');
    }
}