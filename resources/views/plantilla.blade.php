<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Comercializacion</title>
    @vite('resources/js/app.js')
</head>
<body>    
    <div class="row">
            <div class="col">
                @yield('menu')
            </div>
        </div>
    <div class="container">
        {{-- <div class="row">
            <div class="col">
                Sistema de Autos
            </div>
        </div> --}}
        
        <div class="row">
            <div class="col">
                @yield('contenido1')
            </div>
        </div>

        <nav class="navbar fixed-bottom navbar-dark bg-primary">
        <div class="container-fluid justify-content-center">
            <span class="navbar-text text-center w-100">
                pie de pagina
            </span>
        </div>
    </nav>
    </div>
</body>
</html>