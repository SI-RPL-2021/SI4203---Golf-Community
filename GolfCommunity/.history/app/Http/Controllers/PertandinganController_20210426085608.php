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
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('/pertandingan')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}
