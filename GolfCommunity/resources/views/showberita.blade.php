@extends('utama')
@section('judul_halaman', 'Berita Seputar Golf')

@section('konten')
<div class="container">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 Buat Berita
</button>
@foreach ($news as $berita)
<div class="col-md-4 col-sm-12 mt-4">
    <div class="card">
        <img src="https://i.ibb.co/4jQz21H/golfberita.jpg" class="card-img-top" alt="gambar" >
        <div class="card-body">
            <h5 class="card-title">{{$berita->judul}}</h5>
            <span class="timestamp">{{$berita->created_at}}</span><br><br>
            <a href="/detailberita/{{$berita->id}}" class="btn btn-primary">Lihat Berita</a>
        </div>
    </div>
</div>
<br>
@endforeach

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Berita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/berita/create" method="POST">
        {{csrf_field()}}
        <div class="form-group{{$errors->has('judul') ? ' has-error ' : ''}}">
            <label for="exampleInputEmail">Judul</label>
            <input name="judul" type="text" class="form-control" id="exampleInputEmail" value="{{old('judul')}}">
            @if($errors->has('judul'))
                <span class="help-block">{{$errors->first('judul')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3"></textarea>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Post</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection
