<?php

$conexion= new mysqli("localhost","root","","prueba",3306);

if($conexion->connect_errno){
    echo "fallo la conexion a base de datos";
}



?>