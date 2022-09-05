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
    echo "Numeros divisibles por 8 entre 100 y 400 <br><hr>";
   
    for ($i =100;$i<400;$i++){

        if($i%8==0){
            echo "$i - ";
        }
    }

    ?>
</body>
</html>