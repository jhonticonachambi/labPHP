<?php

$txtNombre="";

$rbtnLenguaje="";


if($_POST){
    $txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";

    $rbtnLenguaje=(isset($_POST['txtLenguaje']))?$_POST['txtLenguaje']:"";

    print_r($rbtnLenguaje);
}




?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($_POST){ ?>
        <strong> Hola </strong> <?php echo $txtNombre ?>
    <?php } ?>

    <form action="ejercicio31.php" method="post">
        Nombre:
        <input value="<?php echo $txtNombre ?>" type="text" name="txtNombre" id="">

    </br>
    </br> php: <input type="radio" <?php echo ($rbtnLenguaje=="php")?"checked":""; ?>    name="lenguaje" id="" value="php" ></br>
    </br> html: <input type="radio" <?php echo ($rbtnLenguaje=="html")?"checked":""; ?> name="lenguaje" id="" value="html" ></br>
    </br> css: <input type="radio" <?php echo ($rbtnLenguaje=="css")?"checked":""; ?> name="lenguaje" id="" value="css"></br>
    








        <input type="submit" value="Enviar informacion">


    </form>
    
</body>
</html>