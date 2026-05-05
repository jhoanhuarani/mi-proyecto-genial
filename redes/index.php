<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>RedTech Bolivia</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"></script>

<style>
body {
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(to right, #eef2f3, #dfe9f3);
    padding-top: 56px;
}
.navbar {
    box-shadow: 0 2px 15px rgba(0,0,0,0.3);
}

.hero {
    background: linear-gradient(135deg, #0d6efd, #6610f2);
    color: white;
    padding: 90px 0 70px;
    text-align: center;
}
.wifi-hero {
    font-size: 95px;
    margin-bottom: 20px;
    position: relative;
    animation: bounce 2s infinite;
}

@keyframes bounce {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(-12px); }
}

.wifi-hero::before,
.wifi-hero::after {
    content: "";
    position: absolute;
    border: 3px solid rgba(255,255,255,0.5);
    border-radius: 50%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    animation: wave 2s infinite;
}

.wifi-hero::before { width: 120px; height: 120px; }
.wifi-hero::after { width: 170px; height: 170px; animation-delay: .5s; }

@keyframes wave {
    0% { opacity: .8; transform: translate(-50%, -50%) scale(.7); }
    100% { opacity: 0; transform: translate(-50%, -50%) scale(1.4); }
}

.hero h1 {
    font-size: 40px;
    font-weight: bold;
}

.hero p {
    font-size: 18px;
}

section { padding: 60px 0; }

.card {
    border-radius: 20px;
    background: white;
    transition: .3s;
    height: 100%;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,.25);
}

.card img {
    height: 200px;
    object-fit: contain;
    padding: 15px;
    background: #f8f9fa;
}

.price {
    color: #0d6efd;
    font-size: 22px;
    font-weight: bold;
}

.btn-primary {
    border-radius: 30px;
    font-weight: bold;
    padding: 12px 30px;
    transition: 0.3s;
}

.btn-primary:hover {
    transform: scale(1.08);
}

.servicios {
    background: white;
}

.icon-box {
    padding: 20px;
    border-radius: 15px;
    background: #f8f9fa;
    transition: .3s;
}

.icon-box:hover {
    background: #0d6efd;
    color: white;
    transform: scale(1.05);
}


.contacto {
    background: linear-gradient(45deg, #0d6efd, #0a58ca);
    color: white;
}


footer {
    background: #111;
}

.whatsapp {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 60px;
    height: 60px;
    background: #25D366;
    color: white;
    font-size: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    box-shadow: 0 8px 20px rgba(0,0,0,.3);
}

.whatsapp::before {
    content:"";
    position:absolute;
    width:100%;
    height:100%;
    border-radius:50%;
    background:rgba(37,211,102,.4);
    animation:pulse 1.8s infinite;
}

@keyframes pulse {
    0%{transform:scale(1);opacity:.6;}
    70%{transform:scale(1.6);opacity:0;}
    100%{transform:scale(1);opacity:0;}
}

</style>
</head>

<body>

<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container justify-content-center">
        <span class="navbar-brand">RedTech Bolivia</span>
    </div>
</nav>

<section class="hero">
    <div class="container">

        <div class="wifi-hero">
            <i class="fas fa-wifi"></i>
        </div>

        <h1>Soluciones en Redes de Computadoras</h1>
        <p>Equipos profesionales • Instalación • Soporte técnico</p>

    </div>
</section>


<section id="productos">
<div class="container">
<h2 class="text-center mb-5">Nuestros Productos</h2>

<div class="row g-4">

<div class="col-md-4">
<div class="card text-center p-3">
<img src="https://consumer.huawei.com/dam/content/dam/huawei-cbg-site/latam/common/launch/2025/0710/plp/routers/product-shelf-and-pop-up/view-all/wifi-be-ax-series/all-wifi-be3-pro.png">
<h5>Router WiFi</h5>
<p>Alta velocidad y cobertura</p>
<div class="price">Bs 500</div>
</div>
</div>

<div class="col-md-4">
<div class="card text-center p-3">
<img src="https://gfx3.senetic.com/akeneo-catalog/a/a/3/b/aa3b22266af653598eb57d86c74f6b15539c4869_1691517__normalized_image5.jpg">
<h5>Switch 8 Puertos</h5>
<p>Ideal para oficinas</p>
<div class="price">Bs 950</div>
</div>
</div>

<div class="col-md-4">
<div class="card text-center p-3">
<img src="https://mx.yeyiangaming.com/storage/catalog/product/gallery/gkyp3EB5Rkmog6IBxGho6GSgoNN1yyitFsQtHXsh.webp">
<h5>Cable UTP CAT6</h5>
<p>Alta calidad</p>
<div class="price">Bs 70</div>
</div>
</div>

</div>


<div class="text-center mt-5">
    <a href="productos.php" class="btn btn-primary btn-lg">
        Ver más productos
    </a>
</div>

</div>
</section>


<section class="servicios text-center">
<div class="container">
<h2 class="mb-5">Nuestros Servicios</h2>

<div class="row g-4">
<div class="col-md-4">
<div class="icon-box">
<i class="fas fa-network-wired fa-3x mb-3"></i>
<h5>Instalación</h5>
<p>Montaje completo de redes</p>
</div>
</div>

<div class="col-md-4">
<div class="icon-box">
<i class="fas fa-tools fa-3x mb-3"></i>
<h5>Mantenimiento</h5>
<p>Soporte técnico especializado</p>
</div>
</div>

<div class="col-md-4">
<div class="icon-box">
<i class="fas fa-wifi fa-3x mb-3"></i>
<h5>Optimización</h5>
<p>Mejoramos tu señal WiFi</p>
</div>
</div>
</div>
</div>
</section>


<section class="contacto text-center">
<div class="container">
<h2>Contacto</h2>
<p>📍 La Paz - Bolivia</p>
<p>📞 +591 69740903</p>
<p>📧 redtech@gmail.com</p>
</div>
</section>

<footer class="text-white text-center py-3">
<p>© 2026 RedTech Bolivia</p>
</footer>

<!-- WHATSAPP -->
<a href="https://wa.me/59169740903?text=Hola%20quiero%20comprar%20equipos%20de%20red,%20¿qué%20ofertas%20tienes?" 
class="whatsapp" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>