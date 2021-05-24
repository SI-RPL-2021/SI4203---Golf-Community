@extends('utama')

@section('konten')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-headline">
                                <div class="panel-heading">
                                <h3 class="panel-title">{{$forum->judul}}</h3>
                                <p class="panel-subtitle">posted {{$forum->created_at->diffForHumans()}}</p>
                                </div>
                                <div class="panel-body">
                                {{$forum->konten}}
                                <hr>
                                <h3>Komentar</h3>
                                <ul class="forum">
										<li>
                                            <tr>
											<td><a href=#>Michael : has</a> <br /><span class="timestamp">19:00</span></td>
                                            </tr>
										</li>
									</ul>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection