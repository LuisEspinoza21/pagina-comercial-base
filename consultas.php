<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos-buscador.css">
  <title>Document</title>
</head>
<body>
  <main class="main">
    <div class="contenedor">
      <form action="buscador.php" method="post" class="navbar-form navbar-left" role="search">
        <div class="form-group navbar-buscar">
          <input type="text" name="id" class="form-control navbar-buscar" id="input_buscar" placeholder="Buscar" required>
        </div>
        <input type="submit" class="btn btn-default btn-buscar" id="btn" value="Buscar">
      </form>
    </div>
  </main>
</body>
</html>