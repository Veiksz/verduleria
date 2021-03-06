<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <style>
      html, body{
        background-color: #eaeaea;
        font-family: 'Nunito', sans-serif;
      }
    </style>

    <title>
      @isset($title)
            {{ $title }} | 
        @endisset
        {{ config('app.name') }}
    </title>
  </head>
  <body>
    <div class='container' style="margin-top: 15px; padding-bottom: 10px; border-bottom: 3px solid #a2a2a2;">
      <img src="{{ asset('img/logo.png') }}" alt="no logo" style="width: 180px; height: 50px; margin-right: 120px">
      <a href="{{ route('mercaderia') }}" class="btn btn-info" style="margin-right: 120px">Mercaderia</a>
      <a href="{{ route('clientes') }}" class="btn btn-info"style="margin-right: 120px">Clientes</a>
      <a href="{{ route('trabajador') }}" class="btn btn-info"style="margin-right: 120px">Trabajador</a>
      <a href="{{ route('distribuidor') }}" class="btn btn-info">Distribuidor</a>
    </div>
    
    <div class="container">
      @yield('seccion')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
