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
                                        <a href="#" class="btn btn-sm btn-primary">Add new Forum</a>
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
											<td><img src="{{ URL::asset('images/upload/') }}/{{$frm->user->profile_photo_path}}" alt="Avatar" class="avatar"></td>
											<td><a href="#">{{$frm->user->name}} : {{$frm->judul}}</a> <br /><span class="timestamp">{{$frm->created_at->diffForHumans()}}</span></td>
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
@endsection