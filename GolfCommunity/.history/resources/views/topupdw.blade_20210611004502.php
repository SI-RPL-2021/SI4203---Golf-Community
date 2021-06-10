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
            <b>Top up melalui:</b>
        </div>
        <div class="card-body">
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="{{ URL::asset('images/bank-mandiri.svg') }}" height="40px" alt="">
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bank Mandiri</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ URL::asset('images/bank-mandiri.svg') }}" height="40px" alt="">
                    Nomor VA DANA di Bank Mandiri umumnya dimulai dengan 89508. Nomor VA DANA dapat Anda di aplikasi mobile DANA.
                    <br>
                    Contoh kode bayar: 89508895401057401
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Top up</button>
                </div>
            </div>
            </div>
        </div>
        
        <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#bca">
            <img src="{{ URL::asset('images/bca.svg') }}" height="40px" alt="">
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="bca" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bank BCA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Top up</button>
                </div>
            </div>
            </div>
        </div>


        <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#bni">
            <img src="{{ URL::asset('images/bni.png') }}" height="40px" alt="">
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="bni" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bank BNI</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Top up</button>
                </div>
            </div>
            </div>
        </div>

        <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#bsi">
            <img src="{{ URL::asset('images/bsi.png') }}" height="40px" alt="">
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="bsi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bank Syariah Indonesia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Top up</button>
                </div>
            </div>
            </div>
        </div>
        
        <br>
        <div class="mb-1"></div>


        <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#gopay">
            <img src="{{ URL::asset('images/gopay.png') }}" height="40px" alt="">
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="gopay" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">GoPay</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Top up</button>
                </div>
            </div>
            </div>
        </div>

        
        <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#linkaja">
            <img src="{{ URL::asset('images/linkaja.svg') }}" height="40px" alt="">
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="linkaja" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">LinkAja</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Top up</button>
                </div>
            </div>
            </div>
        </div>

        
        
        <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#ovo">
            <img src="{{ URL::asset('images/ovo.png') }}" height="40px" alt="">
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="ovo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">OVO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Top up</button>
                </div>
            </div>
            </div>
        </div>

        
        <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#da">
            <img src="{{ URL::asset('images/dana.png') }}" height="40px" alt="">
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="da" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">DANA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Top up</button>
                </div>
            </div>
            </div>
        </div>

        
       
          
        </div>
        <div class="card-footer text-muted">
            Golf Community Indonesia
        </div>
      </div>
    {{-- <br>
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
	</form> --}}


    <hr>
</div>

@endsection