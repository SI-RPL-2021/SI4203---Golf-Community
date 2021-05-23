<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DwController extends Controller
{
    public function index(){
        return view('dw');
    }

    public function topup(){
        return view('topupdw');
    }

    public function tambahsaldo(){
        DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
    }
}
