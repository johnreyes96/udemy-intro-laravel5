<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probando Laravel - @yield('title')</title>
</head>
<body>
    @section('header')
        NASTER HEADER
    @show
    <div class="container">
        @yield('content')
    </div>

    @section('footer')
        MASTER FOOTER
    @show
</body>
</html>