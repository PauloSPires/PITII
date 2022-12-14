<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcakes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <main>
        @include('layouts.massege')
        @include('layouts.navbar')
        @yield('content')
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
