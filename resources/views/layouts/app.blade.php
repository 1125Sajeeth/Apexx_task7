<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/ef4d06acb6.js" crossorigin="anonymous"></script>
</head>

<body>
    <noscript>
        <META HTTP-EQUIV="Refresh" CONTENT="0;https://www.enable-javascript.com/">
    </noscript>
    @include('layouts.includes.header')
    <main>
        @section('main-content')
        @show
    </main>
    @include('layouts.includes.footer')
    @yield('styles')
    <script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/min.js') }}"></script>
    @yield('scripts')
</body>

</html>
