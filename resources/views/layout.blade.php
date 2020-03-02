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
        <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="/Codetaper/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Codetaper/about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Codetaper/contact">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Codetaper/customers">Customer List</a>
              </li>
        </ul>

        @yield('content')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="http://localhost/Codetaper/public/js/jquery-3.2.1.min.js"></script>
    <script src="http://localhost/Codetaper/public/js/bootstrap.min.js" ></script>
  </body>
</html>
