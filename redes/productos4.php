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

                <img src="./img/productos/crimpadora.jpg" class="card-img-top product-img" alt="Router WiFi">

                <div class="card-body">
                    <h5 class="card-title">Crimpadora RJ45</h5>

                    <p class="card-text">
                        Herramienta profesional para cables de red.
                    </p>

                    <div class="price mb-3">Bs 180</div>

                    <a href="#" class="btn btn-primary">
                        Ver detalles
                    </a>
                </div>

            </div>
        </div>

        <!-- PRODUCTO 2 -->
        <div class="col-md-4">
            <div class="card product-card text-center p-3 h-100">

                <img src="./img/productos/probadora.jpg" class="card-img-top product-img" alt="Switch">

                <div class="card-body">
                    <h5 class="card-title">Probador de Cable de Red</h5>

                    <p class="card-text">
                        Verifica continuidad y estado del cableado.
                    </p>

                    <div class="price mb-3">Bs 220</div>

                    <a href="#" class="btn btn-primary">
                        Ver detalles
                    </a>
                </div>

            </div>
        </div>

        <!-- PRODUCTO 3 -->
        <div class="col-md-4">
            <div class="card product-card text-center p-3 h-100">

                <img src="./img/productos/kit.jpg" class="card-img-top product-img" alt="Kit de Herramientas">

                <div class="card-body">
                    <h5 class="card-title">Kit de Herramientas de Red</h5>

                    <p class="card-text">
                        Incluye accesorios esenciales para instalación.
                    </p>

                    <div class="price mb-3">Bs 450</div>

                    <a href="#" class="btn btn-primary">
                        Ver detalles
                    </a>
                </div>

            </div>
        </div>

        <!-- PRODUCTO 4 -->
        <div class="col-md-4">
            <div class="card product-card text-center p-3 h-100">

                <img src="./img/productos/cableoptico.jpg" class="card-img-top product-img" alt="Cable Fibra Óptica">

                <div class="card-body">
                    <h5 class="card-title">Cable Fibra Óptica</h5>

                    <p class="card-text">
                        Alta velocidad y transmisión de larga distancia.
                    </p>

                    <div class="price mb-3">Bs 300</div>

                    <a href="#" class="btn btn-primary">
                        Ver detalles
                    </a>
                </div>

            </div>
        </div>

        <!-- PRODUCTO 5 -->
        <div class="col-md-4">
            <div class="card product-card text-center p-3 h-100">

                <img src="./img/productos/sfp.jpg" class="card-img-top product-img" alt="Access Point">

                <div class="card-body">
                    <h5 class="card-title">Módulo SFP</h5>

                    <p class="card-text">
                        Expansión de conectividad para switches y routers.
                    </p>

                    <div class="price mb-3">Bs 550</div>

                    <a href="#" class="btn btn-primary">
                        Ver detalles
                    </a>
                </div>

            </div>
        </div>

        <!-- PRODUCTO 6 -->
        <div class="col-md-4">
            <div class="card product-card text-center p-3 h-100">

                <img src="./img/productos/convertidor.jpg" class="card-img-top product-img" alt="Convertidor Fibra Óptica">

                <div class="card-body">
                    <h5 class="card-title">Convertidor Fibra Óptica</h5>

                    <p class="card-text">
                        Convierte señal Ethernet a fibra óptica.
                    </p>

                    <div class="price mb-3">Bs 950</div>

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
            <a class="page-link" href="productos3.php">
                <i class="fas fa-chevron-left"></i>
            </a>
        </li>

        <li class="page-item">
            <a class="page-link" href="productos.php">1</a>
        </li>

        <li class="page-item">
            <a class="page-link" href="productos2.php">2</a>
        </li>

        <li class="page-item">
            <a class="page-link" href="productos3.php">3</a>
        </li>

        <li class="page-item active">
            <a class="page-link" href="productos4.php">4</a>
        </li>

        <li class="page-item disabled" >
            <a class="page-link">
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