<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Forum;
use App\Models\Komentar;
use App\Models\User;
=======
use App\Forum;
>>>>>>> sherina

class ForumController extends Controller
{
    public function index(){
<<<<<<< HEAD
        $forum = Forum::orderBy('created_at','desc')->paginate(10);
        return view('forum.index', compact(['forum']));
    }

    public function create(Request $request){
        $request->request->add(['user_id'=>auth()->user()->id]);
        $forum = Forum::create($request->all());
        return redirect()->back()->with('sukses', 'Forum berhasil ditambahkan');
    }

    public function view(Forum $forum){
        return view('forum.view',compact(['forum']));
    }

    public function postkomentar(Request $request){
        $request->request->add(['user_id'=> auth()->user()->id]);
        //$request->request->add(['forum_id_forum'=> auth()->forum()->id_forum]);
        $komentar = Komentar::create($request->all());
        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan');
=======
        $forum=Forum::paginate(10);
        return view ('forum.index',compact(['forum']));
>>>>>>> sherina
    }
}
