<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos | RedTech Bolivia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"></script>

    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

<?php include 'includes/header.php'; ?>

<section class="container py-5">

    <div class="container mt-4">

        <a href="index.php" class="btn btn-dark">
            <i class="fas fa-arrow-left"></i> Volver al inicio
        </a>

    </div>

    <h2 class="text-center mb-5">Nuestros Productos</h2>

    <div class="row g-4">

        <!-- PRODUCTO 1 -->
        <div class="col-md-4">
            <div class="card product-card text-center p-3 h-100">

                <img src="./img/productos/repetidor.jpg" class="card-img-top product-img" alt="Router WiFi">

                <div class="card-body">
                    <h5 class="card-title">Repetidor Wifi</h5>

                    <p class="card-text">
                        Mejora la señal inalámbrica en zonas alejadas.
                    </p>

                    <div class="price mb-3">Bs 250</div>

                    <a href="#" class="btn btn-primary">
                        Ver detalles
                    </a>
                </div>

            </div>
        </div>

        <!-- PRODUCTO 2 -->
        <div class="col-md-4">
            <div class="card product-card text-center p-3 h-100">

                <img src="./img/productos/mesh.jpg" class="card-img-top product-img" alt="Switch">

                <div class="card-body">
                    <h5 class="card-title">Sistema Mesh Wifi</h5>

                    <p class="card-text">
                        Cobertura total y conexión estable en toda la casa.
                    </p>

                    <div class="price mb-3">Bs 1800</div>

                    <a href="#" class="btn btn-primary">
                        Ver detalles
                    </a>
                </div>

            </div>
        </div>

        <!-- PRODUCTO 3 -->
        <div class="col-md-4">
            <div class="card product-card text-center p-3 h-100">

                <img src="./img/productos/wifiexerior.jpg" class="card-img-top product-img" alt="Cable UTP">

                <div class="card-body">
                    <h5 class="card-title">Antena WiFi Exterior</h5>

                    <p class="card-text">
                        Ideal para conexiones de largo alcance.
                    </p>

                    <div class="price mb-3">Bs 600</div>

                    <a href="#" class="btn btn-primary">
                        Ver detalles
                    </a>
                </div>

            </div>
        </div>

        <!-- PRODUCTO 4 -->
        <div class="col-md-4">
            <div class="card product-card text-center p-3 h-100">

                <img src="./img/productos/usbwifi.jpg" class="card-img-top product-img" alt="Router Empresarial">

                <div class="card-body">
                    <h5 class="card-title">Adaptador USB WiFi</h5>

                    <p class="card-text">
                        Conecta tu PC a redes inalámbricas fácilmente.
                    </p>

                    <div class="price mb-3">Bs 120</div>

                    <a href="#" class="btn btn-primary">
                        Ver detalles
                    </a>
                </div>

            </div>
        </div>

        <!-- PRODUCTO 5 -->
        <div class="col-md-4">
            <div class="card product-card text-center p-3 h-100">

                <img src="./img/productos/tarjetared.jpg" class="card-img-top product-img" alt="Access Point">

                <div class="card-body">
                    <h5 class="card-title">Tarjeta de Red PCIe</h5>

                    <p class="card-text">
                        Mayor velocidad y estabilidad para gaming y oficinas.
                    </p>

                    <div class="price mb-3">Bs 350</div>

                    <a href="#" class="btn btn-primary">
                        Ver detalles
                    </a>
                </div>

            </div>
        </div>

        <!-- PRODUCTO 6 -->
        <div class="col-md-4">
            <div class="card product-card text-center p-3 h-100">

                <img src="./img/productos/routergaming.jpg" class="card-img-top product-img" alt="Patch Panel">

                <div class="card-body">
                    <h5 class="card-title">Router Gaming Dual Band</h5>

                    <p class="card-text">
                        Optimizado para juegos y streaming de alta velocidad.
                    </p>

                    <div class="price mb-3">Bs 1300</div>

                    <a href="#" class="btn btn-primary">
                        Ver detalles
                    </a>
                </div>

            </div>
        </div>

    </div>

    <!-- PAGINACION -->
<nav class="mt-5">
    <ul class="pagination justify-content-center">

        <li class="page-item">
            <a class="page-link" href="productos.php">
                <i class="fas fa-chevron-left"></i>
            </a>
        </li>

        <li class="page-item">
            <a class="page-link" href="productos.php">1</a>
        </li>

        <li class="page-item active">
            <a class="page-link" href="productos2.php">2</a>
        </li>

        <li class="page-item">
            <a class="page-link" href="productos3.php">3</a>
        </li>

        <li class="page-item">
            <a class="page-link" href="productos4.php">4</a>
        </li>

        <li class="page-item">
            <a class="page-link" href="productos3.php">
                <i class="fas fa-chevron-right"></i>
            </a>
        </li>

    </ul>
</nav>

</section>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>