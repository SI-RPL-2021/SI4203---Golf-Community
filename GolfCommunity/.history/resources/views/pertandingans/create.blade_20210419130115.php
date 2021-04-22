@extends('layout.main')

@section('content')

<form method="post" action="{{ route('pertandingans.store') }}" enctype="multipart/form-data">
    @csrf
<div class="row mt-5">

    <div class="col-sm-6 mt-3">
          <div class="card-body">
              <div class="card bg-secondary text-white" style="height:500px">
            <div class="mb-3" style="max-width: 300px" >
                <input required class="form-control" type="file" name="cover_image">
            </div>
        </div>
            <div class="mb-3 mt-3">
                <textarea required class="form-control" name='deskripsi' placeholder="Deskripsi" rows="6"></textarea>
            </div>
    </div>
    </div>

    <div class="col-sm-6 mt-5">

      <div class="card-body">
    <div class="container pb-5">

            <h1 class="display-4">Buat Challenge</h1>
            <p class="lead">Sebagai Community admin, kamu bisa membuat challenge untuk aktivitas kompetitif mu.</p>


            <div class="mb-3">
                <input required type="type" placeholder="Nama Challenge" class="form-control" style="max-width: 500px" name='nama' aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <input required type="type" placeholder="Lokasi" class="form-control" style="max-width: 500px" name='lokasi' aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input required type="type" placeholder="Alamat Lengkap" class="form-control" style="max-width: 500px" name='alamat' aria-describedby="emailHelp">
            </div>
            <div id="datepicker" class="input-group date mb-3"  data-date-format="mm-dd-yyyy" >
                <input required class="form-control" name='date'style="max-width: 500px" type="text" placeholder="Tanggal"/>
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
            <div class="mb-3">
                <input required type="number" placeholder="Harga Tiket"  class="form-control" style="max-width: 500px" name='harga' aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input required type="type" placeholder="Activity Type"  class="form-control" style="max-width: 500px" name='tipe_aktivitas' aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input required type="type" placeholder="Game Type"  class="form-control" style="max-width: 500px" name='tipe_game' aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input required type="type" placeholder="Game Level"  class="form-control" style="max-width: 500px" name='level_game' aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input required type="type" placeholder="Contact Person"  class="form-control" style="max-width: 500px" name='kontak' aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input required type="type" placeholder="Payment"  class="form-control" style="max-width: 500px" name='pembayaran' aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input required type="number" placeholder="Jumlah Pemain"  class="form-control" style="max-width: 500px" name='jumlah_pemain' aria-describedby="emailHelp">
            </div>

            <div class ="mb-3" style="max-width: 500px">
                <button type="submit"  class="btn btn-secondary btn-block">Submit</button>
            <small id="emailHelp" class="form-text text-muted">Dengan melanjutkan, berarti kamu menyetujui Persyaratan Layanan</small>
            </div>

    </div>
</div>
</div>
</div>
</form>


@endsection
