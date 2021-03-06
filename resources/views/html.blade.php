<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tranvas</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('header-styles')
</head>
<body>
<div class="container">
    <div class="container" id="app">

        @yield('content')

    </div>

</div>

{{--@yield('footer-script')--}}


<script src="{{mix('js/app.js')}}"></script>
{{--<script src="/js/app.js"></script>--}}
</body>
</html>