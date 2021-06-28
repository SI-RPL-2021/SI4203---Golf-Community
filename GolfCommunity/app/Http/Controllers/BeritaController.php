<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita;
use Illuminate\Support\Facades\DB;
use App\Models\User;

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
        $request->request->add(['user_id'=>auth()->user()->id]);
        $news = Berita::create($request->all());
        return redirect()->back()->with('sukses', 'Berita berhasil ditambahkan');
    }
}
