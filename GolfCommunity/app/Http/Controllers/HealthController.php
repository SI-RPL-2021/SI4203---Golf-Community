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
        $health = DB::table('healths')->where('user_id',Auth::user()->id)->latest()->take(1)->get();
        return view('health',['health' => $health]);

    }

    public function store(Request $request ){
        $beat=$request->bpm;
        if($beat <= 65) {
            $beat = 100;
        } else if($beat >65 && $beat <= 72 ){
            $beat = 90;
        } else if($beat >72 && $beat <= 90) {
            $beat = 80;
        } else {
            $beat= 60;
        }
        $dia=$request->diabetes;
        if($dia >= 70 && $dia<= 100 ) {
            $dia = 100;
        } else if($dia >=101 && $dia <= 125 ){
            $dia = 80;
        } else {
            $dia = 60;
        }
        $bp1=$request->bloodpress;
        if($bp1 < 80) {
            $bp1 = 60;
        } else if($bp1 >=80 && $bp1 <= 120 ){
            $bp1 = 100;
        } else if($bp1 >120 && $bp1 <= 140) {
            $bp1 = 90;
        } else if($bp1 >140 && $bp1 <= 159) {
            $bp1 = 70;
        } else if($bp1 >=160 && $bp1 <= 180) {
            $bp1 = 60;
        } else {
            $bp1 = 50;
        }
        $bp2=$request->bloodpress2;
        if($bp2 < 60) {
            $bp2 = 60;
        } else if($bp2 >=60 && $bp2 <= 80 ){
            $bp2 = 100;
        } else if($bp2 >80 && $bp2 <= 90) {
            $bp2 = 90;
        } else if($bp2 >90 && $bp2 <= 99) {
            $bp2 = 70;
        } else if($bp2 >=100 && $bp2 <= 110) {
            $bp2 = 60;
        } else {
            $bp2= 50;
        }


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
        $nilai= (20/100*$temp) + (20/100*$sp) + (20/100*$dia) + (20/100*$beat) + (10/100*$bp1) + (10/100*$bp2) ;

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
