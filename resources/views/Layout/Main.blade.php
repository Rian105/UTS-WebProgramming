<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ $title }}</title>
  </head>

  <body>
    <div class="Title">
            <p>Giant Book Supplier</p>
    </div>

    <div class="Navigation">
        @include('Partial.navbar')
    </div>

    <div class="Page-Title-Box">
        <div class="Page-Title">
            <a>{{ $page_container }}</a>
        </div>
    </div>

    <div class="body-main">
      @yield('container')
    </div>

    <div class="Footer-Box">
        <div class="Footer-Text">
            <a>&copy;Happy Book Store 2022</a>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
  

</html>