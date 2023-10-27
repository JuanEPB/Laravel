<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{asset('css/boostrap.css')}}"/>
    <link href="{{asset('css/app.css')}}"/>
    <script src="{{asset('js/query-3.7.1.min.js')}}"></script>
    <script src="{{asset('js/booststrap.js')}}"></script>


</head>
<body>
    @include('sweetalert::alert')
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
