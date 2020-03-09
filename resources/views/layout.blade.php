<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://localhost/Codetaper/public/css/bootstrap.min.css">

    <title>
        @yield('title')
    </title>
  </head>
  <body>



    <div class="container">

        @include('nav')

        @if (session()->has('message'))
            <div class="alert alert-success" role="alert">
                <strong>Success</strong> {{session()->get('message')}}
            </div>
        @endif

        @yield('content')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="http://localhost/Codetaper/public/js/jquery-3.2.1.min.js"></script>
    <script src="http://localhost/Codetaper/public/js/bootstrap.min.js" ></script>
  </body>
</html>
