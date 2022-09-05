<?php
    $servidor="localhost"; //127.0.0.2
    $user="root";
    $password="";
    try{
        $conexion = new PDO("mysql:host=$servidor;dbname=album", $user, $password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'cats', 'img');";
        $conexion->exec($sql);

        echo "Conexion establecida";

    }catch(PDOException $error){
        echo " Error de conexion ".$error;
    }




    
?>