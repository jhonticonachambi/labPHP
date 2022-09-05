<?php
//Estructura de control While
?>
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
    $i = 1;

    while ($i < 7) {
        print "<h$i>Cabecera h$i</h$i>\n";
        $i++;
    }  
    ?>

</body>

</html>