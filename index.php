<!DOCTYPE html>
<html lang="en">
<?php include_once 'links.php' ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasitos de &aacute;ngeles | Principal</title>
    <link rel="icon" href="icon/brand_logo_circle.png" type="image/x-icon">
    <link rel="stylesheet" href="scss/css/main.css">
</head>

<body>
    <main class="main-container">
        <?php
        include 'navbar.php'
        ?>

        <div id="pda-slider" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#pda-slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#pda-slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#pda-slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://imgs.search.brave.com/h7CQYnKmi1ykV1ZaP_6Nv5zdlsnyryA0gVGwvHDloJA/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzAxLzA2Lzg0Lzc1/LzM2MF9GXzEwNjg0/NzU4Ml83SmNSeUhW/eTB4c3A5cUlEdnVj/Y21kbDVvejNqb3Ji/bS5qcGc" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-black">
                        <h5>Imagen #1</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio porro deserunt eveniet?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://imgs.search.brave.com/GC9Y6l_lMNaiW17pteJonUumyTN5GESYQcpnRFklVTg/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzAzLzEwLzE2LzI3/LzM2MF9GXzMxMDE2/Mjc5OF82aFdiYVNG/Z0R0V3A0QWhoYUtQ/bFRnQVpVREwxYzRV/WS5qcGc" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-black">
                        <h5>Imagen #2</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://imgs.search.brave.com/UbLL0P1ow6NiUNEN5pVxnKGFlpzm7q78UAoffP3RcGw/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAyLzcxLzU1LzU2/LzM2MF9GXzI3MTU1/NTY4M19LRkdLRUNl/NlRIbXdPdzE0cTNi/MFpKR01XTDJicG9N/MC5qcGc" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                        <h5>Imagen #3</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non, magni!</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#pda-slider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#pda-slider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>

        <section class="main-container-section2 container bg-light col-12 py-5">
            <h3 class="text-center mb-4">¿Qu&eacute; ofrecemos?</h3>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title">Servicio #1</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quas magnam ducimus iusto officiis eligendi sint vitae ratione, quasi aperiam!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title">Servicio #2</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi expedita porro ipsam libero rerum repellat!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title">Servicio #3</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, deleniti.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="main-container-section3 container col-12 py-5">
            <h3 class="text-center mb-4">Acerca de nosotros</h3>
            <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque et, accusantium optio inventore tempora soluta!</p>
            <a href="nosotros.php" class="text-center d-block">Ver mas</a>
        </section>

        <section class="main-container-section4 container bg-light col-12 py-5">
            <h3 class="text-center mb-4">Comentarios</h3>
            <form action="contact.php" method="post">
                <div class="form-group mb-3">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </section>

        <?php
        include 'footer.php';
        ?>
    </main>

    <?php
    include 'scripts.php';
    ?>

</body>

</html>