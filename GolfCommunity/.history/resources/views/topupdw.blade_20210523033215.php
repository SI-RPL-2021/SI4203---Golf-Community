@extends('utama')
@section('judul_halaman', 'Digital Wallet - Top Up')
@section('konten')
<div class="container">
    
    @php   
    $dw = DB::table('digital_wallets')->where('id_user', Auth::user()->id)-> get();
    @endphp
    
    <hr>
    <h3 class="text-center">Dompet Digital Anda</h3>
    <br>
    Akun: <b>{{ Auth::user()->name }}</b>
    <br>
    
    Saldo: Rp<b>
    @if (!$dw->isEmpty())
    @foreach ($dw as $key => $p)
    {{ $p->saldo }}
    
    @endforeach
    @else
    {{ '-' }}
    @endif
    </b>
    <br>
    <a class="btn btn-success mt-2 w-100" href="{{URL::to('/digitalwallet/topup')}}">Tambah</a>

    <hr>
</div>

@endsection