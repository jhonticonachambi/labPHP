<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valor = "pepe";
        $ref = $valor;

        $ref = "sam";
    ?>
    <p>
        <?php 
        echo "Nombre de usuario : $valor";
        ?>
    </p>
</body>
</html>