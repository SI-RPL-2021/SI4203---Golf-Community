<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
            'nominal' => '+ Rp' . $request->saldo,
            'tgl' => date('Y-m-d')
        ]);
        
        return redirect('/digitalwallet');
        }
        
        public function tambahsaldo(Request $request){
            DB::table('digital_wallets')->where('id_user',$request->id_user)->increment('saldo', $request->saldo);
            
            DB::table('historidw')->insert([
                'id_user' => $request->id_user,
                'catatan' => "Top Up sebesar " . $request->saldo,
                'nominal' => '+ Rp' . $request->saldo,
                'tgl' => date('Y-m-d')
            ]);
            return redirect('/digitalwallet');
        }
        
        public function historidw(){
            
            $historidw = DB::table('historidw')->where('id_user', Auth::user()->id)->get();

            return view('historydw',['historidw' => $historidw]);
        }

        public function transfer(){
            return view('transferdw');
        }
}