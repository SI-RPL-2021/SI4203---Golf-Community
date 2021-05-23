<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
    <link href=" {{HTML::style('css/custom.css')}}" rel="stylesheet">
</head>
<body>
    <header>
        <h2>Pertandingan</h2>
        <nav>
            <a href="/pertandingan">Home</a> | 
            <a href="/pertandingan/tentang">Tentang</a> |
            <a href="/pertandingan/kontak">Kontak</a>
        </nav>
    </header>
    <h3>@yield('judul_halaman')</h3>
    @yield('konten')

    <footer>
        <p>&copy; Golf Community Indonesia | Kelompok F | SI4203</a></p>
    </footer>
</body>
<script src="{{ mix('js/app.js') }}"></script>
</html>