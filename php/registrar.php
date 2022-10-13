<?php
  session_start();



if($_REQUEST){

include 'conexion.php';
$nombre=$_REQUEST['nombre'];
$telefono=$_REQUEST['telefono'];
$correo=$_REQUEST['correo'];
$direccion=$_REQUEST['direccion'];
$pais=$_REQUEST['pais'];
$imagen=$_FILES['imagen']['tmp_name'];
$imgContent = addslashes(file_get_contents($imagen));



$insertar="INSERT INTO contactos  (name,phone,email,address,country,imagen) VALUES ('$nombre','$telefono','$correo','$direccion','$pais','$imgContent')";
$resultado=mysqli_query($conexion,$insertar);
    
  if($resultado){
    echo'<script type="text/javascript">
    alert("Registro Exitoso");
    window.location.href="mostrar.php";
    </script>';
    
     
  }

}else{


    header('location:formregistro.php');
}


?>