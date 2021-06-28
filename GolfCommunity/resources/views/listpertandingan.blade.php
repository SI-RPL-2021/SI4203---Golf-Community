@extends('utama')
@section('judul_halaman', 'List Pertandingan')
@section('konten')

<div class="container">
    <h2 class="mt-4 text-center">List Pertandingan</h2>
    <a href="{{ url('/pertandingan/buatp') }}" class="btn btn-success">Buat Pertandingan</a>
    <a href="{{ url('/pertandingan/daftarpertandingansaya') }}" class="btn btn-success" style="float: right;">Pertandingan Saya</a>
    <p> </p>
    <p>Pilih Cabang :</p>
    <input type="text" name="searchbox" id="searchbox" class="form-control" onkeyup="myFunction()" placeholder="Pilihan Cabang...">
    <div class="row" id="game">
    <div class="row row-cols-1 row-cols-md-2 g-4 my-4">


      @if (!$pertandingans->isEmpty())

      @foreach ($pertandingans as $key => $game)

      <div class="col-md-3">
              <div class="card" style="width: 100%;">
                  <img src="{{ URL::asset('images/upload/') }}/{{ $game->gambar }}" class="card-img-top" alt="{{$game->nama}}" style="object-fit: cover; height: 200px;">
                  <div class="card-body">
                      <h5 class="card-title">{{ $game->nama }} {{ $game->cabang }}</h5>
                          <p class="card-text">Rp{{ $game ->harga_tiket}}</p>
                    <p class="card-text">
                        <small class="text-muted">
                        <i class="fa fa-calendar"></i> {{ $game->tgl_mulai }} | <i class="fa fa-map-marker"></i> {{ $game->lapangan }}
                        </small>
                    </p>
                    <p class="card-text">{{ $game ->kuota_pemain}} / {{ $game ->jumlah_pemain}}</p>
                      <div class="d-flex">
                          <a class="btn btn-warning" href='{{ url('/pertandingan/showpertandingan', $game->id_pertandingan) }}'>
                              Selengkapnya
                          </a>
                      </div>
                  </div>
              </div>
      </div>
      @endforeach
      @endif
    </div>
    </div>


    <script>
    function myFunction() {
    var input, filter, cards, cardContainer, h5, title, i;
    input = document.getElementById("searchbox");
    filter = input.value.toUpperCase();
    cardContainer = document.getElementById("game");
    cards = cardContainer.getElementsByClassName("card");
    for (i = 0; i < cards.length; i++) {
        title = cards[i].querySelector(".card-body h5.card-title");
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
    }
}
</script>

</div>

@endsection
