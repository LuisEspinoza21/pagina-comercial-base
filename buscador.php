<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="assets/img/logomini-moda-y-productos.png" type="image/x-icon">
  <link rel="stylesheet" href="css/estilos-buscador.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buscador</title>
</head>
<body>
    <main class="main">
      <div class="contenedor">
        <?php
        $conexion = mysqli_connect("localhost", "root", "", "formulario") or
        die("Problemas con la conexión");
        // $conexion = mysqli_connect("localhost", "id18464140_root", "Steicytorres.1", "id18464140_formulariomyp") or
        // die("Problemas con la conexión");
        
        $busqueda = mysqli_query($conexion, "select primernombre,primerapellido,edad,sexo,mensaje from registros where id='$_REQUEST[id]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
        
        if ($busc = mysqli_fetch_array($busqueda)) {
          echo "Nombre: " . $busc['primernombre'] . "<br>";
          echo "Apellido: " . $busc['primerapellido'] . "<br>";
          echo "Edad: " . $busc['edad'] . "<br>";
          echo "Sexo: " . $busc['sexo'] . "<br>";
          echo "Mensaje: " . $busc['mensaje'] . "<br>";

          /* mysqli_query($conexion, "delete from registros where id='$_REQUEST[id]'") or
          die("Problemas en el select:" . mysqli_error($conexion));
          echo "Se efectuó el borrado del curso ingresado."; */
          
        } else {
          echo "No existe un alumno con ese id";
        }
        mysqli_close($conexion);
        ?>
        <br>
        <form action="index.html" method="post" class="btn">
          <input type="submit" value="Regresar" id="btn">
        </form>
        <form action="eliminar.php">
          <input type="submit" name="delete" id="btn" value="delete">
        </form>
    </div>
  </main>
</body>
</html>