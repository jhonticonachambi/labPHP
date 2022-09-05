<?php
session_start();

if(isset($_SESSION["usuario"])){
    echo "Usuario:".$_SESSION["usuario"]." estatus: ".$_SESSION["status"];
}
else{
    echo "No existe un usuario";
}



?>