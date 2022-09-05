<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php 
        $a = array("uno" =>1, "dos" =>2, "tres" =>3);


        foreach ($a as $key => $value){
            echo "Indice: $key ; Valor: $value <br> \n";
        }
        ?>
    </p>
</body>
</html>