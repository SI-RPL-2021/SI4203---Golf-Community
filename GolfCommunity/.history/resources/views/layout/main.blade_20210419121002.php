<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet"
        type="text/css" />

    <link rel="stylesheet" href="{{ URL::asset('app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('footer.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('accordion.sass') }}">

    <title>Golf</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light " >
        <div class="container">
            <a class="navbar-brand" href="/">Golf</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
 
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">Aktivitas</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">Venue</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">Komunitas</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/challenge">Challenge</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">Tentang</a>
                    </li>
                    <li class="nav-item active">
                        <button type="button" class="btn btn-secondary">Register</button>
                        <button type="button" class="btn btn-secondary">Login</button>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="">
        @yield('content')
    </div>

    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by
                        <a href="#">PT Golf Indonesia</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <ul class="social-icons">
                        <a class="facebook" href="#"><i class="fa fa-instagram"></i></a>

                        <a class="twitter" href="#"><i class="fa fa-youtube"></i></a>

                        <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/2ed1788daf.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

    <script>
        $(function() {
            $("#datepicker").datepicker({
                autoclose: true,
                todayHighlight: true
            }).datepicker('update', new Date());
        });

    </script>

</body>

</html>
