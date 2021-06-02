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
                                <form action="" method="POST">
                                @csrf
                                <input type="hidden" name="forum_id_forum" value="{{$forum->id_forum}}">
                                <input type="hidden" name="parent" value="0">
                                <textarea style="margin-top:10px;" name="konten" class="form-control" id="komentar-utama" rows="2"></textarea>
                                <input type="submit" class="btn btn-primary" value="kirim">
                                </form>
                                <h3>Komentar</h3>
                                
                                @foreach($forum->komentar as $komentar)
                                            <tr>
                                            <td><font size="5"><a href=#>{{$komentar->user->name}}</a></font> <span class="timestamp"><font size="2" color="grey">{{$komentar->created_at->diffForHumans()}}</font></span> <br />
                                            {{$komentar->konten}}</td>
                                            </tr> <br />
                                @endforeach
									
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

