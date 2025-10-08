
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comercializadora</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="row"> <!-- PARA EL MENU -->
            <div class="col">
                <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="/" aria-current="page">
                                    Home <span class="visually-hidden">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout">Cerrar Sesion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="clientes.index">Clientes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ventas.index">Ventas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="categorias.index">Categorias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="producto.index">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="proveedores.index">Proveedores</a>
                            </li>
                        </ul>
                        <form class="d-flex my-2 my-lg-0">
                            <input class="form-control me-sm-2" type="text" placeholder="Buscar" />
                            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">
                                Buscar
                            </button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row"> <!-- PARA EL CONTENIDO -->
            <div class="col">
                <div class="container mt-4">
                    @yield('contenido')
                </div>
            </div>
        </div>

        <div class="row"> <!-- PARA EL PIE DE PAGINA -->
            <div class="col">
                <footer class="bg-dark text-white text-center py-3 mt-4">
                    <p class="mb-0">©️ 2025 Expendio de BIMBO</p>
                    <div class="row">
                        <div class="col">
                            <a>Nombre:Johana Lizbeth Santiago Melendez</a>
                            <a>Correo:l22430219@piedrasnegras.tecnm.mx</a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>