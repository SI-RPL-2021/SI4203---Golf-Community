@extends('utama')
@section('judul_halaman', 'List Pertandingan')
@section('konten')

<div class="container">
    <h2 class="mt-4 text-center">List Pertandingan</h2>
    <a href="{{ url('/pertandingan/buatp') }}" class="btn btn-success">Buat Pertandingan</a>
    <div class="row row-cols-1 row-cols-md-2 g-4 my-4">

    <p>Pilih Pertandingan :</p>
    <input type="text" name="searchbox" id="searchbox" class="form-control" onkeyup="myFunction()" placeholder="Pilih Pertandingan...">

    <div class="col-md-3" id="game">   
      @if (!$pertandingans->isEmpty())
      @foreach ($pertandingans as $key => $game)
      <div class="col-md-3">
              <div class="card" style="width: 100%;">
                  <img src="{{ URL::asset('images/upload/') }}/{{ $game->gambar }}" class="card-img-top" alt="{{$game->nama}}"

                      style="object-fit: cover; height: 200px;">
                  <div class="card-body">
                      <h5 class="card-title">{{ $game->nama }}</h5>
                      <p class="card-text">
                          @if (strlen($game->deskripsi_singkat) > 100)
                              {{ substr($game->deskripsi_singkat, 0, 100) . '...' }}
                          @else
                              {{ $game->deskripsi_singkat }}
                          @endif
                      </p>
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
