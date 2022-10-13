<?php

session_start();
include 'conexion.php';

if($_REQUEST){

    $identificacion=$_REQUEST['eliminar'];
    $deletesql='DELETE FROM contactos WHERE id='.$identificacion;
    $resulatdo=mysqli_query($conexion,$deletesql);
    if($resulatdo){

        echo'<script type="text/javascript">
        alert(" El Registro fue eliminado");
        window.location.href="mostrar.php";
        </script>';
    }

}



?>