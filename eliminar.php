<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <main>
    <?php
      $conexion = mysqli_connect("localhost", "root", "", "formulario") or
      die("Problemas con la conexión");
      
      $busqueda = mysqli_query($conexion, "select primernombre,primerapellido,edad,sexo,mensaje from registros where id='$_REQUEST[id]'") or
      die("Problemas en el select:" . mysqli_error($conexion));

      if ($busc = mysqli_fetch_array($busqueda)) {
        mysqli_query($conexion, "delete from registros where id='$_REQUEST[id]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
        echo "Se efectuó el borrado del curso ingresado.";
        
      } else {
        echo "No existe un alumno con ese id";
      }
      mysqli_close($conexion);
    ?>
    <br>

    <form action="index.html" method="post" class="btn">
      <input type="submit" value="Regresar" id="btn">
    </form>

  </main>
</body>
</html>