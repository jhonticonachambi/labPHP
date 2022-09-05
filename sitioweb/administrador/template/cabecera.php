<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
</head>
  <body>

    <?php $url="http://".$_SERVER['HTTP_HOST']."/cursophp/sitioweb/" ?>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Administrador <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $url ?>/administrador/inicio.php">Inicio</a>
            <a class="nav-item nav-link" href="<?php echo $url ?>/administrador/seccion/productos.php">Libros</a>
            <a class="nav-item nav-link" href="<?php echo $url ?>/administrador/seccion/cerrar.php">Cerrar</a>
            <a class="nav-item nav-link" href="<?php echo $url ?>">Ver sitio web</a>
        </div>
    </nav>



    <div class="container">
        <br/>
        <div class="row">