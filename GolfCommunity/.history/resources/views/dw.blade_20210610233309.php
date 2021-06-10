@extends('utama')
@section('judul_halaman', 'Digital Wallet')
@section('konten')
<div class="container">
    
    @php   
    $dw = DB::table('digital_wallets')->where('id_user', Auth::user()->id)-> get();
    @endphp
    
    <div class="col-md-12 mt-5">
        <h3 class="text-center">Digital Wallet</h3>
        <div class="card text-center">
            <div class="card-header">
              Saldo Anda
            </div>
            <div class="card-body">
              <h2 class="card-title">
                Rp
                    @if (!$dw->isEmpty())
                    @foreach ($dw as $key => $p)
                    {{$p->saldo}}
                    
                    @endforeach
                    @else
                    {{ '-' }}
                    @endif
              </h2>
              <a href="#" class="btn btn-primary">+ Top up</a>
            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div>
    </div>


    <hr>
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