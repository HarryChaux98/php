<!doctype html>
<html lang="es">
  <head>

  <?php 
   session_start();
  ?>
    <title>Pagina PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body class="container">

  <br><br><br>
       
  <div class="container text-center">
    <form method="POST" action="recibe.php" name="FormLogin" id="FormLogin">
      <div class ="row">
         <div class="col-4"></div>

         <div class="col-4 ; border border-success p-2 mb-2 border-opacity-25">
           <h1> Inicio </h1>
         <div class="mb-4">
        <label for="" class="form-label">Usuario</label>
        <input type="text"  class="form-control" name="nombre"  required>
       </div>

       <div class="mb-4">
        <label for="" class="form-label">Contraseña</label>
        <input type="password"  class="form-control" name="pass" required >
       </div>

        <button type="submit" class="btn btn-success">Enviar</button>

        <br><br>

      </div>

          <div class="col-2"></div>


      </div>

    </form>

    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>