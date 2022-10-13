<?php
session_start();


//POST
//$recibenombre=$_POST['nombre'];
//$recibepass=$_POST['pass'];

//GET
//$recibenombre=$_GET['nombre'];
//$recibepass=$_GET['pass'];


// SESSION

if($_REQUEST){
    $recibenombre=$_REQUEST['nombre'];
    $recibepass=$_REQUEST['pass'];
    echo "USUARIO: ".$recibenombre;
    echo "CONTRASEÑA: ".$recibepass;

}else{
  
    
    header('location:clase1.php');
    
}





//echo "su nombre es ".$recibenombre."<br>";
//echo "su conraseña es ".$recibepass."<br><br>";




?>