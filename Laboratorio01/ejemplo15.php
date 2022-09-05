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
    echo "Numeros pares comprendidos entre 5 y 60 <br><hr>";
   
    for ($i =5;$i<60;$i++){

        if($i%2==0){
            echo "$i - ";
        }
    }

    ?>
</body>
</html>