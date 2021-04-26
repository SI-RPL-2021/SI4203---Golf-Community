<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/vendor/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/plugins/plugins.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/style.min.css') }}">
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div class="main-wrapper">
    <h3>@yield('judul_halaman')</h3>
    @yield('konten')


</body>
    <script src="{{ URL::asset('js/vendor.min.js') }}"></script>
    <script src="{{ URL::asset('js/plugins.min.js')  }}"></script>

    <script src="{{ URL::asset('js/main.min.js') }}"></script>
    <script src="{{ URL::asset('js/app.js') }}"></script>
</html>