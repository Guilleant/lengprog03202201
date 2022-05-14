<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        @yield('title', 'Personas y sus casas') | Bienvenidos
    </title>

    <link rel="stylesheet" href="{{ asset( 'componentes/bootstrap461/css/bootstrap.min.css' ) }}">
    <link rel="stylesheet" href="{{ asset( 'componentes/fonts/font-awesome.min.css' ) }}">

    @yield('head')

</head>
<body>
    @yield('navbar')

    @yield('content')

    @yield('footer')
</body>

    @yield('scriptsnavbar')

</html>
