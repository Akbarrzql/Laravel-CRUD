<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Micro Academy</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- icon -->
    <link rel="icon" href="/assets/favicon.png">
  </head>
  <body>

    @include('partial.navbar')


    <div class="container">
      @yield('content')
    </div>
    

  </body>
</html>