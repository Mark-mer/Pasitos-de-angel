<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../icon/brand_logo_circle.png" type="image/x-icon">
    <title>WingSteps | Bienvenida!</title>
    <?php include __DIR__ . '/../links.php' ?>
    <link rel="stylesheet" href="../css/app.css">
    <style>
        #header {
            z-index: 50 !important;
        }

        .custom-menu {
            position: fixed;
            top: 5;
            left: 0;
            padding: 1em;
            color: white;
            background-color: #161a1a;
            width: 20em;
            height: 20vh;
            box-shadow: 5px 0px 20px 5px #0000006e;
        }

    </style>
</head>

<body>
    <nav class="navbar bg-body-tertiary fixed-top shadow">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="/index.php"><img src="../icon/brand_logo.png" alt="" style="width:1.5em;"> WingSteps</a>
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
                                <li><a class="dropdown-item" href="/sistemas/Administrativo/adm_empleados.php"><i class="fa-solid fa-clipboard-user logo-size"></i> Administrar empleados</a></li>
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
    <hr>
    <div class="container">
        <div class="w-100 mt-3 bg-body-tertiary rounded shadow-lg p-3 mt-5">
            <h3 class="fw-bold">Bienvenidos a <span class="text-primary">WingSteps</span>, el sistema administrativo de <span class="txt-1">Pasitos</span> <span class="txt-2">de</span> <span class="txt-3">&Aacute;ngeles</span>!</h3>
            <p>Diseñado para el manejo completo de la guardería, este sistema se encarga del:</p>
            <ul>
                <li><a href="">Manejo de registros; consulta de niños y familiares</a></li>
                <li><a href="">Gestión de inventario y suministros</a></li>
                <li><a href="">Empleados activos e inactivos</a></li>
                <li><a href="">Sistema de nómina completo</a></li>
                <li><a href="">Usuarios y accesos</a></li>
            </ul>
        </div>
    </div>
</body>

</html>