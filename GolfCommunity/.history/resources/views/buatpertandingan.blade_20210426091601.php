@extends('utama')
@section('judul_halaman', 'Buat Pertandingan')
@section('konten')

<div class="container">
    <h2 class="mt-4 text-center">Buat Pertandingan</h2>
    <a href="{{ url('/pertandingan/listpertandingan') }}" class="btn btn-primary">List Pertandingan</a>
    <div class="row row-cols-1 row-cols-md-2 g-4 my-4">
        <form name="buatpertandingan" id="buatpertandingan" method="post" action="{{url('/pertandingan/form-pertandingan')}}">
            @csrf
     
             <div class="form-group">
               <label for="exampleInputEmail1">Title</label>
               <input type="text" id="title" name="title" class="form-control" required="">
             </div>
     
             <div class="form-group">
               <label for="exampleInputEmail1">Description</label>
               <textarea name="description" class="form-control" required=""></textarea>
             </div>
     
             <button type="submit" class="btn btn-primary">Submit</button>
           </form>
    </div>
</div>

@endsection