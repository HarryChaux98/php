<?php
session_start();
include 'conexion.php';


if($_REQUEST){

           
    $id=$_REQUEST['id']; 
    $nombre=$_REQUEST['nombre']; 
    $telefono=$_REQUEST['telefono']; 
    $email=$_REQUEST['correo']; 
    $direccion=$_REQUEST['direccion']; 
    $pais=$_REQUEST['pais']; 
    $imagen=$_FILES['imagen']['tmp_name'];
    $imgContent = addslashes(file_get_contents($imagen));


    
    $updatesql="UPDATE contactos SET name='$nombre',phone='$telefono', email='$email', address='$direccion', country='$pais', imagen='$imgContent' WHERE id='$id ";
    $resulatdo=mysqli_query($conexion,$updatesql);

    if($resulatdo){

        echo'<script type="text/javascript">
        alert(" El Registro fue Atualizado");
        window.location.href="mostrar.php";
        </script>';
    }



}


?>