@extends('utama')              
@section('judul_halaman', 'Berita Seputar Golf')

<div class="container">
    <h2 class="mt-4 text-center">Post Berita</h2>
    <div class="row my-4">
        <div class="col-md-6">

            <form name="postberita" id="postberita" method="post" enctype="multipart/form-data" action="{{url('/berita/create')}}">
                {{ csrf_field() }}
        
                <div class="form-group mb-2">
                <label for="judulberita">Judul Berita</label>
                <input type="text" id="judulberita" name="nama" class="form-control" required="">
                </div>
        
                <div class="form-group mb-2">
                <label for="deskripsi">Isi Berita</label>
                <input type="text" id="deskripsi" name="lapangan" class="form-control" required="">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
      </div>
</div>

@endsection
