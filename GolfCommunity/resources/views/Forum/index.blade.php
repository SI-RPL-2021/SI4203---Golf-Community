@extends('layout.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Posts</h3>
                                    <div class="right">
                                        <a href="{{route('posts.add')}}" class="btn btn-sm btn-primary">Add new Forum</a>
                                    </div>
                                    <div class="panel-body">
                                    <ul class="list-unstyled activity-list">
                                    @foreach($forum as $frm)
										<li>
											<img src="{{$frm->user->getAvatar()}}" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">{{$frm->user->username}} : {{$frm->judul}}  <span class="timestamp">{{$frm->created_at->diffForHumans()}}</span></p>
										</li>
                                    @endforeach
									</ul>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection