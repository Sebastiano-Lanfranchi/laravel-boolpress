<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel-Boolpress - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}"></script>
  </head>
  <body>
    <header>
        <div class="site-title">
            <h1>Laravel-Boolpress</h1>
        </div>
        <div>
            <input type="text">
        </div>
    </header>
    @yield('content')
  </body>
</html>
