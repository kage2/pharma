<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=Edge">
            <meta name="description" content="">
            <meta name="keywords" content="">
            <meta name="author" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>FindYourDrugs</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="/css/app.css" />
        <link rel="stylesheet" href="/css/all.min.css">

        <link rel="stylesheet" type="text/css" href="/css/aos.css" />
        @yield('css')
    </head>
    <body>

        <div id="app">
            @include('incs.navbar')
            <div class="container">
                @yield('content')
            </div>

        </div>
        <script src="{{ asset('js/app.js')}}"></script>
        <script src="/js/all.js"></script>
        @yield('script')
    </body>
</html>
