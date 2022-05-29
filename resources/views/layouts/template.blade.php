<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>{{ $title }}</title>

    <style>
        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            padding: 0;
            margin: 0;
        }

        #notfound {
            position: relative;
            height: 100vh;
        }

        #notfound .notfound {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .notfound {
            max-width: 460px;
            width: 100%;
            text-align: center;
            line-height: 1.4;
        }

        .notfound .notfound-404 {
            position: relative;
            width: 180px;
            height: 180px;
            margin: 0px auto 50px;
        }

        .notfound .notfound-404>div:first-child {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background: #ffa200;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
            border: 5px dashed #000;
            border-radius: 5px;
        }

        .notfound .notfound-404>div:first-child:before {
            content: '';
            position: absolute;
            left: -5px;
            right: -5px;
            bottom: -5px;
            top: -5px;
            -webkit-box-shadow: 0px 0px 0px 5px rgba(0, 0, 0, 0.1) inset;
            box-shadow: 0px 0px 0px 5px rgba(0, 0, 0, 0.1) inset;
            border-radius: 5px;
        }

        .notfound .notfound-404 h1 {
            font-family: 'Cabin', sans-serif;
            color: #000;
            font-weight: 700;
            margin: 0;
            font-size: 90px;
            position: absolute;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            left: 50%;
            text-align: center;
            height: 40px;
            line-height: 40px;
        }

        .notfound h2 {
            font-family: 'Cabin', sans-serif;
            font-size: 33px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 7px;
        }

        .notfound p {
            font-family: 'Cabin', sans-serif;
            font-size: 16px;
            color: #000;
            font-weight: 400;
        }

        .notfound a {
            font-family: 'Cabin', sans-serif;
            display: inline-block;
            padding: 10px 25px;
            background-color: #8f8f8f;
            border: none;
            border-radius: 40px;
            color: #fff;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            text-decoration: none;
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
        }

        .notfound a:hover {
            background-color: #2c2c2c;
        }

    </style>
</head>

<body>
    <!-- menunya kita taruh persis di bawah <body> -->
    <!-- @ -->
    @if (Auth::check())
        @include('layouts.menulogin')
    @else
        @include('layouts.menu')
    @endif
    <!-- di bawah menu baru kontennya -->

    <!-- Mulai sini kontennya depannya kasih @ sama yield-->
    @yield('content')
    <!-- Sampai sini -->

    @include('layouts.footer')
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
