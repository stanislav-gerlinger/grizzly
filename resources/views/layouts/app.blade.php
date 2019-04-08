<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>
        <meta name="description" content="@yield('title')">
        <meta name="keywords" content="@yield('title')">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        @include('components.header')

        <main>@yield('content')</main>

        @include('components.footer')
        <script type="text/javascript" src="https://w207795.yclients.com/widgetJS" charset="UTF-8"></script>
    </body>
</html>