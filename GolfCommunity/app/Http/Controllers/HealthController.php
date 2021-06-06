<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\health;
use App\Models\Post;


class HealthController extends Controller
{

    public function index(){
        $health = DB::table('healths')->where('user_id',Auth::user()->id)->get();
        return view('health',['health' => $health]);

    }

    public function store(Request $request ){
        $health = DB::table('healths')->where('user_id',Auth::user()->id)->get();
        DB::table('healths')->insert([
            'spo2' => $request->spo2,
            'user_id'          => $request->user_id,
            'bpm'          => $request->bpm,
            'date'          => $request->date,
            'diabetes'          => $request->diabetes,
            'temperature'          => $request->temperature,
            'bloodpress'          => $request->bloodpress,
            'bloodpress2'          => $request->bloodpress2,
            'score'          => $request->score
            ]);

        // return view('dashboard');
        return view('health',['health' => $health]);
    }

    public function health(){
        return view('createhealth');
    }

    public function show(){
        $health = DB::table('healths')->where('user_id',Auth::user()->id)->get();
        return view('daftarhealth',['health' => $health]);

    }


}
