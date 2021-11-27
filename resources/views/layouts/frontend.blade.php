<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- CSRF token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- title in browser tab --}}
    <title>
        @yield('title') | UTrail
    </title>

    {{-- font awesome icons --}}
    <script src="https://kit.fontawesome.com/01b4b6f929.js" crossorigin="anonymous"></script>

    {{-- compiled and minified css bundles --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    {{-- customized css style sheet --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

    <main>
        @yield('content')
    </main>

    {{-- compressed jquery --}}
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>

    {{-- compressed popper for dynamic positioning and viewport detection --}}
    <script src="{{asset('js/popper.min.js')}}"></script>

    {{-- compressed bootstrap --}}
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
    