<?php $slider = '
    <div class="slider">
        <h1>Rio de Janeiro</h1>
        <em>aventura</em>
    </div>
'; ?>
<main class="container mt-5">
    <h2 class="text-center">Sobre nosotros</h2>
    <div class="row mb-5">
        <div class="col-md-6">
            <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
            <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
        </div>
        <div class="col-md-6">
            <img class="img-fluid" src="/img/inicio_nosotros.jpg" alt="imagen nosotros">
        </div>
    </div>
    <?php include_once __DIR__.'./layout/bloque_viajes.php'; ?>
</main>
<div class="descuento">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contenido">
                    <h3>5% de descuento</h3>
                    <p class="titulo">Viaje a canada</p>
                    <p class="fecha">20 de Marzo de 2022 - 28 de Maro del 2022</p>
                    <p class="precio">$2,500 USD</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h2 class="mt-5 text-center">Testimoniales</h2>
    <?php include_once __DIR__.'./layout/bloque_testimoniales.php';?>
</div>