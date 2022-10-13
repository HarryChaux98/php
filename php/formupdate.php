<!doctype html>
<html lang="en">

<head>
  <title>FORMULARIO DE REGISTRO DE CONTACTOS  </title>
  <?php session_start(); 
  include ('conexion.php');?>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body class="container">


<?php  

        $identificacion=$_REQUEST['idupdate'];
        $resultado="SELECT * FROM contactos WHERE id='$identificacion'"; 
        $res=mysqli_query($conexion,$resultado);
        
        
        while($fila=mysqli_fetch_assoc($res)){
           
                  $id=$fila['id']; 
                  $nombre=$fila['name']; 
                  $telefono=$fila['phone']; 
                  $email=$fila['email']; 
                  $direccion=$fila['address']; 
                  $pais=$fila['country']; 
                  $img=$fila["imagen"];

            }
  ?>

     <div  class="row align-items-start">
         <div class="col"></div>
         <div class="col">
            <br><br> <br>
              <h2> FORMULARIO DE EDITAR</h2>
              <br>
                 <form action="editar.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                      <input value="<?php echo $id   ?>" type="hidden" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder=" Nombre" require>
                     </div>
                    <div class="mb-3">
                      <input value="<?php echo $nombre   ?>" type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder=" Nombre" require>
                     </div>
                     <div class="mb-3">
                      <input value="<?php echo $telefono ?>" type="number" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder=" Telefono" require>
                     </div>
                     <div class="mb-3">
                      <input value="<?php echo $email  ?>" type="e-mail" class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder=" E-mail"require>
                     </div>
                     <div class="mb-3">
                      <input value="<?php echo $direccion  ?>" type="text" class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder=" Direccion de Residencia"require>
                     </div>
                     <div class="mb-3">
                      <input value="<?php echo $pais  ?>" type="text" class="form-control" name="pais" id="pais" aria-describedby="helpId" placeholder=" Pais de Origen"require>
                     </div>
                     <div class="mb-3" align="center">
                     <div class="col-lg-6" align="center">
	                                <div class="panel panel-default borde" align="center">
		                              <div class="panel-body" aling="center">
		                              <img src="data:image/jpg;base64,<?php echo base64_encode($img); ?>" width="150" height="150">
			
		                              </div>
	                                  </div>
                                </div>
                     </div>
                     <div class="mb-3">
                     <input type="file" name="imagen"/>
                     </div>




                     <div class="mb-3" align="center">
                      <button type="submit" class="btn btn-success">Editar Informacion</button>
                     </div>

                     

                 </form>


         </div>
         <div class="col"></div>

     </div>












  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>