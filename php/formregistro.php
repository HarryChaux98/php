<!doctype html>
<html lang="en">

<head>
  <title>FORMULARIO DE REGISTRO DE CONTACTOS  </title>
  <? session_start(); ?>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body class="container">

     <div  class="row align-items-start">
         <div class="col"></div>
         <div class="col">
            <br><br> <br>
              <h2> FORMULARIO DE REGISTRO</h2>
              <br>
                 <form name="" action="registrar.php" method="POST"    enctype="multipart/form-data">
                    <div class="mb-3">
                      <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder=" Nombre" require>
                     </div>
                     <div class="mb-3">
                      <input type="number" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder=" Telefono" require>
                     </div>
                     <div class="mb-3">
                      <input type="e-mail" class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder=" E-mail"require>
                     </div>
                     <div class="mb-3">
                      <input type="text" class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder=" Direccion de Residencia"require>
                     </div>
                     <div class="mb-3">
                      <input type="text" class="form-control" name="pais" id="pais" aria-describedby="helpId" placeholder=" Pais de Origen"require>
                     </div>
                     <div class="mb-3">
                     <input type="file" name="imagen"/>
                     </div>

                    

                     <div class="mb-3" align="center">
                      <button type="submit" class="btn btn-success">Enviar Informacion</button>
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