<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PertandinganController extends Controller
{
    public function index()
    {
        $pertandingan = DB::table('pertandingan')->get();
        return view('index', ['pertandingan' => $pertandingan]);
    }
}