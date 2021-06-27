@extends('utama')

@section('konten')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Forum</h3>
                                    <div class="right">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                          Add new Forum
                                        </button>
                                    </div>
                                    <br />
                                    <br />
                                    @foreach($forum as $frm)
                                    <div class="color">
                                    <div class="col-md-8 d-flex">
                                    <div class="my-auto">
                                    <table class="forum">
                                    <ul class="forum">
          <li>
                                            <tr>
           <td><img src="{{asset('images/upload/golf.png')}}" alt="Avatar" class="avatar"></td>
           <td><a href="/forum/{{$frm->id_forum}}/view">{{$frm->user->name}} : {{$frm->judul}}</a> <br /><span class="timestamp">{{$frm->created_at->diffForHumans()}}</span></td>
                                            </tr>
          </li>
         </ul>
                                    </table>
                                    <br />
                                    </div>
                                    </div>
                                    </div>
                                    @endforeach
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Forum</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/forum/create" method="POST">
        {{csrf_field()}}
        <div class="form-group{{$errors->has('judul') ? ' has-error ' : ''}}">
            <label for="exampleInputEmail">Judul</label>
            <input name="judul" type="text" class="form-control" id="exampleInputEmail" value="{{old('judul')}}">
            @if($errors->has('judul'))
                <span class="help-block">{{$errors->first('judul')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Konten</label>
            <textarea name="konten" class="form-control" id="content" rows="3"></textarea>
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