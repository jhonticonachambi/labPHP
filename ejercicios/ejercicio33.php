<?php
$jsonContenido='[ 
    {"nombre":"Jhon","apellido":"tc"},
    {"nombre":"Juan","apellido":"pt"}
]';

$resultado = json_decode($jsonContenido);
//print_r($resultado);

// Decodificando JSON en un objeto


foreach ($resultado as $persona){
    //print_r($persona);
    echo ($persona->nombre)." ".($persona->apellido)."<br/>";
}


?>