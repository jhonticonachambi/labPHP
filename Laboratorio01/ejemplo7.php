<?php
    //Estructura de control If ..else If
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
    <p>
        <?php
        $a = 10.5;
        $b = $a;
        
        if($a > $b){
            print "$a es mayor que $b";
        }
        else if($a == $b){
            print "$a es igual que $b";
        }
        else{
            print "$a es menor que $b";
        }
        ?>
    </p>
</body>
</html>