<main class="container mt-5">
    <h1 class="text-center mt-5"><?php echo $pagina; ?></h1>
    <blockquote class="text-center">Lee sobre nuestro clientes y sus experiencias</blockquote>
    <?php include_once __DIR__.'./layout/bloque_testimoniales.php';?>
    
    <div class="row">

        <h2 class="d-block w-100 text-center">Agrega un testimonial</h2>

        <div class="row justify-content-center col">
            <div class="col-md-8">
                <?php 
                    if ($alertas !== '') { ?>
                        <p class="alert alert-danger text-center"><?php echo $alertas ?></p>
                <?php }; ?>
                <form method="POST" action="/testimoniales">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" class="form-control" value="<?php echo $nombre ?? '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Tu email" class="form-control" value="<?php echo $email ?? '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control" placeholder="Tu mensaje" value="<?php echo $mensaje ?? '' ?>"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</main>