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
        $temp=$request->temperature;
        if($temp <= 33) {
            $temp = 70;
        } else if($temp >33 && $temp <= 34 ){
            $temp = 90;
        } else if($temp > 34 && $temp <= 37) {
            $temp = 100;
        } else {
            $temp= 60;
        }
        $sp=$request->spo2;
        if($sp >= 95 && $sp <= 100) {
            $sp = 100;
        } else {
            $sp = 70;
        }
        $nilai= (20/100*$temp) + (20/100*$sp);

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
            'score'          => $nilai
            ]);

        // return view('dashboard');
        return redirect('/health');
        // return view('health',['health' => $health]);
    }

    public function health(){
        return view('createhealth');
    }

    public function show(){
        $health = DB::table('healths')->where('user_id',Auth::user()->id)->get();
        return view('daftarhealth',['health' => $health]);

    }


}
