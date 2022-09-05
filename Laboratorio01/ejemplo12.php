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
        $i = 2;

        switch($i){
            case 0:
                print "i es igual a 0";
            break;
            case 1:
                print "i es igual a 1";
            break;
            case 2:
                print "i es igual a 2";
            break;
            default:
                print "i no es igual a 0 , 1 o 2";
        }
        ?>
    </p>
</body>
</html>