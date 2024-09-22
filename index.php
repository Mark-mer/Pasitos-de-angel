<!DOCTYPE html>
<html lang="en">
<?php include_once 'libs.php' ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasitos de &aacute;ngeles | Principal</title>
    <link rel="icon" href="icon/brand_logo_circle.png" type="image/x-icon">
</head>


<body>
    <nav class="navbar bg-body-tertiary fixed-top shadow">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center p-0" href="/index.php"><img src="img/principal.png" alt="" style="width:7em;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><i class="fa-solid fa-bars"></i> Men&uacute; de opciones</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="w-100 text-center">
                    <h6 class=""><i class="fa-solid fa-circle-user"></i> <span id="logged_user">Administrador</span></h6>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-house"></i> Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-money-check-dollar"></i> Sistema de nomina</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-people-roof"></i> Administracion
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-clipboard-user logo-size"></i> Administrar empleados</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-hands-holding-child"></i> Administrar familiares</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-users logo-size"></i> Administrar usuarios</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-children"></i> Administrar niños</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user-shield"></i> Manejar permisos de usuarios</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-gear"></i> Configuraciones
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-screwdriver-wrench"></i> Par&aacute;metros generales</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-right-from-bracket"></i> Salir del sistema</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar algo" aria-label="Search">
                        <button class="btn btn-outline-success" style="white-space:nowrap;" type="submit">Buscar <i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="col-12 bg-secondary" id="slider">
        <label class="text-center w-100" style="height: 20em;" for="">Slider</label>
    </div>
    <div class="container bg-body-tertiary col-12">
        <div class="w-100">
            <h3>Contenido</h3>
            <p>informacion informacion informacion informacion informacion informacion informacion informacion informacion informacion informacion informacion informacion informacion</p>
        </div>
    </div>
    <div class="col-12 bg-black text-white d-flex justify-content-center" style="position: absolute; bottom:0;" id="footer">
        <h3>Footer</h3>
    </div>
</body>

</html>