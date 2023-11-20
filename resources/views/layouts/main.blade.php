<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/js/app.js')

    <title>Laravel-Model-Controller</title>
</head>
<body>

    @include('partials.header')

    <div class="container d-flex justify-content-center my-5 py-5">
        @yield('content')
    </div>



</body>
</html>
