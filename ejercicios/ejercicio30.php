<?php
session_start();

$_SESSION["usuario"]="jhon";
$_SESSION["status"]="login";

echo "Sesion iniciada"."<br/>";

echo "Usuario:".$_SESSION["usuario"]." estatus: ".$_SESSION["status"];

?>