@extends('utama')
@section('judul_halaman', 'Digital Wallet - Top Up')
@section('konten')
<div class="container">
    
    @php   
    $dw = DB::table('digital_wallets')->where('id_user', Auth::user()->id)-> get();
    @endphp
    
    <hr>
    <h3 class="text-center">Top Up Digital Wallet</h3>
    
    <div class="card text-center">
        <div class="card-header">
            Akun: <b>{{ Auth::user()->name }}</b>
        </div>
        <div class="card-body">
            
        @php   
        $dw = DB::table('digital_wallets')->where('id_user', Auth::user()->id)-> get();
        @endphp

        @if (!$dw->isEmpty())
        @php 
            $proses = '/digitalwallet/tambahsaldo';
        @endphp
        @else
        @php 
            $proses = '/digitalwallet/tambahsaldobaru';
        @endphp
        @endif
        <form action="{{$proses}}" method="post">
            {{ csrf_field() }}
            
            <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
            Total <input type="number" name="saldo" required="required"> <br/>
            <input type="submit" value="Tambah Saldo">
        </form>
          
        </div>
        <div class="card-footer text-muted">
            <a href="digitalwallet/topup" class="btn btn-primary"><i class="fa fa-plus-square"></i> Top up</a>
        </div>
      </div>
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
    
    @php   
    $dw = DB::table('digital_wallets')->where('id_user', Auth::user()->id)-> get();
    @endphp

    @if (!$dw->isEmpty())
    @php 
        $proses = '/digitalwallet/tambahsaldo';
    @endphp
    @else
    @php 
        $proses = '/digitalwallet/tambahsaldobaru';
    @endphp
    @endif
	<form action="{{$proses}}" method="post">
		{{ csrf_field() }}
        
        <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
		Total <input type="number" name="saldo" required="required"> <br/>
		<input type="submit" value="Tambah Saldo">
	</form>


    <hr>
</div>

@endsection