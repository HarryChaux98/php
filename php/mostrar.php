<!doctype html>
<html lang="en">

<head>
  <title>Title</title>

  <?php
  session_start();
   include ('conexion.php');
   include ('modal.php');
   ?>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body class="container">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<br><br>
   <a name="" id="" class="btn btn-success" href="formregistro.php" role="button">CREAR USUARIO</a>
   <br> <br>

  <div class="table-responsive-sm">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">OPCIONES</th>
            </tr>
        </thead>
        <tbody>

        <?php 
        $resultado='SELECT * FROM contactos'; 
        $res=mysqli_query($conexion,$resultado);

        while($fila=mysqli_fetch_assoc($res)){
        ?>    <tr class="">
                <td><?php echo $id=$fila['id'];  ?></td>
                <td><?php echo $nombre=$fila['name'];  ?></td>
                <td><?php echo $telefono=$fila['phone'];  ?></td>
                <td><?php echo $email=$fila['email'];  ?></td>
                <td><?php echo $address=$fila['address'];  ?></td>
                <td><?php echo $country=$fila['country'];  ?></td>
                <td>
                  <form action="formupdate.php" method="POST">
                    <input type="hidden" name="idupdate"  enctype="multipart/form-data" id="idupdate" value=" <?php echo $id?>">
                    <input type="submit" class="btn btn-info" value="EDITAR">
                  </form>
                  <form method="POST" action="eliminar.php" >
                    <input type="hidden" name="eliminar" value="<?php echo $id ?>">
                    <input class=" btn btn-danger" type="submit" name="eli" value="ELIMINAR">
                  </form>
                  <form action="modalx.php" method="post"></form>
                  <button type="button" class="btn btn-warning" name="testx" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-student="<?php echo base64_encode($fila['imagen']) ?>,<?php echo $id ?>,<?php echo $nombre ?>,<?php echo $telefono?>,<?php echo $email ?>,<?php echo $address ?>,<?php echo $country ?>"
                  >Ver contacto</button>
                </td>
              </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
  </div>
  
  <script>
    $(".btn-warning").on("input click", function() {
      datos = $(this).data('student').split(',')

      $("#staticBackdrop").find(".modal-body").find('.img').attr("src", "data:image/jpg;base64,"+datos[0]).attr("width", "200px");

      $("#staticBackdrop").find(".modal-body").find('.student-data').html("Id: "+datos[1] + "<br>Nombre: "+datos[2] + "<br>Telefono: "+datos[3] + "<br>Correo: "+datos[4] + "<br>Direccion: "+datos[5] + "<br>Pais: "+datos[6])
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>