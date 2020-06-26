<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @section('title')
        <title>Globale</title>
    @show
    <link rel="stylesheet" href="{{ asset("style.css") }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("assets/images/favicon.png") }}" />
    @yield('style')
</head>
<body>
    @section('header')
        @include('partials.header')
    @show
    @yield('content')
    @section('footer')
        @include('partials.footer')
    @show
    <script src="{{ asset("assets/js/jquery-3.5.0.min.js") }}"></script>
    <script src="{{ asset("bootstrap/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/js/slick/slick.min.js") }}"></script>
    <script src="{{ asset("assets/js/jquery.validate.min.js") }}"></script>
    <script src="{{ asset("assets/js/main.js") }}"></script>
    @yield('js')
</body>
</html>
