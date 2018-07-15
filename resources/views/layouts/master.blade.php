<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    @yield('viewport')
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    @yield('styles')
</head>
<body>
<main>
<div class="sections">
@include('partials.header')
@yield('content')
</div>
</main>
<script type="text/javascript" src="{{ URL::to('js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
@yield('scripts')
</body>
</html>