<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'Agencia de viajes | ' . $pagina ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">

</head>
<body class="<?php echo $clase?>">
    <?php include_once __DIR__.'/header.php';?>
        <?php echo $slider ?? ''; ?>
        <?php echo $contenido; ?>
    <?php include_once __DIR__.'/footer.php'; ?>
</body>
</html>