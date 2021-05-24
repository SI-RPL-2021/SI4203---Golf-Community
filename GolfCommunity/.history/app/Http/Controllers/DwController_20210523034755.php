<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DwController extends Controller
{
    public function index(){
        return view('dw');
    }

    public function topup(){
        return view('topupdw');
    }

    public function tambahsaldo(Request $request){
	DB::table('digital_wallets')->insert([
		'saldo' => $request->saldo
	]);
    
	return redirect('/digitalwallet');
    }
}
