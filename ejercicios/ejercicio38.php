<?php
$archivo = "cuentas.txt";
//Abrit archivo
$archivoAbierto = fopen($archivo,"r");
//Leer archivo
$contenido = fread($archivoAbierto,filesize($archivo));

echo $contenido;



?>