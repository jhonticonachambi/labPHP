<?php
    $servidor="localhost"; //127.0.0.2
    $user="root";
    $password="";
    try{
        $conexion = new PDO("mysql:host=$servidor;dbname=album", $user, $password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM `fotos`";
        $sentecia = $conexion->prepare($sql);
        $sentecia->execute();

        $resultado = $sentecia->fetchAll();

        //print_r($resultado);

        foreach($resultado as $foto){
            print_r($foto['nombre']."<br/>");
        }


        echo "Conexion establecida";

    }catch(PDOException $error){
        echo " Error de conexion ".$error;
    }




    
?>