<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DwController extends Controller
{
    public function index(){
    	$pertandingans = DB::table('pertandingans')->get();

    	return view('dw',['pertandingans' => $pertandingans]);
    }

    public function topup(){
        return view('topupdw');
    }

    public function tambahsaldobaru(Request $request){
        DB::table('digital_wallets')->insert([
            'id_user' => $request->id_user,
            'saldo' => $request->saldo
        ]);
        DB::table('historidw')->insert([
            'id_user' => $request->id_user,
            'catatan' => "Top Up sebesar " . $request->saldo,
            'saldo' => '+ Rp' . $request->saldo
        ]);
        
        return redirect('/digitalwallet');
        }
        
        public function tambahsaldo(Request $request){
            DB::table('digital_wallets')->where('id_user',$request->id_user)->increment('saldo', $request->saldo);
            return redirect('/digitalwallet');
}
}