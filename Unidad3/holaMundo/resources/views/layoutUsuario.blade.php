<!DOCTYPE html>
<html>
<head>
    <title>@yield('titulo')</title>
</head>
<body>
    <header>
        @include('plantillas.navbar')
    </header>
    <main>
        @yield('contenido')
    </main>
</body>
</html>