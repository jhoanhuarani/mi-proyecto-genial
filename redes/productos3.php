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

                <img src="./img/productos/switch24.jpg" class="card-img-top product-img" alt="Router WiFi">

                <div class="card-body">
                    <h5 class="card-title">Switch 24 Puertos administrable</h5>

                    <p class="card-text">
                        Administración avanzada para redes empresariales.
                    </p>

                    <div class="price mb-3">Bs 2500</div>

                    <a href="#" class="btn btn-primary">
                        Ver detalles
                    </a>
                </div>

            </div>
        </div>

        <!-- PRODUCTO 2 -->
        <div class="col-md-4">
            <div class="card product-card text-center p-3 h-100">

                <img src="./img/productos/switch16.jpg" class="card-img-top product-img" alt="Switch">

                <div class="card-body">
                    <h5 class="card-title">Switch PoE 16 Puertos</h5>

                    <p class="card-text">
                        Alimentación y datos en un solo cable Ethernet.
                    </p>

                    <div class="price mb-3">Bs 2100</div>

                    <a href="#" class="btn btn-primary">
                        Ver detalles
                    </a>
                </div>

            </div>
        </div>

        <!-- PRODUCTO 3 -->
        <div class="col-md-4">
            <div class="card product-card text-center p-3 h-100">

                <img src="./img/productos/rack.jpg" class="card-img-top product-img" alt="Rack de Pared">

                <div class="card-body">
                    <h5 class="card-title">Rack de Pared 12U</h5>

                    <p class="card-text">
                        Organización segura para equipos de red.
                    </p>

                    <div class="price mb-3">Bs 1700</div>

                    <a href="#" class="btn btn-primary">
                        Ver detalles
                    </a>
                </div>

            </div>
        </div>

        <!-- PRODUCTO 4 -->
        <div class="col-md-4">
            <div class="card product-card text-center p-3 h-100">

                <img src="./img/productos/ups.jpg" class="card-img-top product-img" alt="Router Empresarial">

                <div class="card-body">
                    <h5 class="card-title">UPS para Redes</h5>

                    <p class="card-text">
                        Protección eléctrica y respaldo de energía.
                    </p>

                    <div class="price mb-3">Bs 1400</div>

                    <a href="#" class="btn btn-primary">
                        Ver detalles
                    </a>
                </div>

            </div>
        </div>

        <!-- PRODUCTO 5 -->
        <div class="col-md-4">
            <div class="card product-card text-center p-3 h-100">

                <img src="./img/productos/cisco.jpg" class="card-img-top product-img" alt="Router Empresarial">

                <div class="card-body">
                    <h5 class="card-title">Router Cisco Empresarial</h5>

                    <p class="card-text">
                        Alto rendimiento y seguridad profesional.
                    </p>

                    <div class="price mb-3">Bs 3500</div>

                    <a href="#" class="btn btn-primary">
                        Ver detalles
                    </a>
                </div>

            </div>
        </div>

        <!-- PRODUCTO 6 -->
        <div class="col-md-4">
            <div class="card product-card text-center p-3 h-100">

                <img src="./img/productos/nas.jpg" class="card-img-top product-img" alt="Servidor NAS">

                <div class="card-body">
                    <h5 class="card-title">Servidor NAS</h5>

                    <p class="card-text">
                        Almacenamiento centralizado para empresas y oficinas.
                    </p>

                    <div class="price mb-3">Bs 4200</div>

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
            <a class="page-link" href="productos2.php">
                <i class="fas fa-chevron-left"></i>
            </a>
        </li>

        <li class="page-item">
            <a class="page-link" href="productos.php">1</a>
        </li>

        <li class="page-item">
            <a class="page-link" href="productos2.php">2</a>
        </li>

        <li class="page-item active">
            <a class="page-link" href="productos3.php">3</a>
        </li>

        <li class="page-item">
            <a class="page-link" href="productos4.php">4</a>
        </li>

        <li class="page-item">
            <a class="page-link" href="productos4.php">
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