<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buscar Producto</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="mapa-estilo-mod.css">
</head>

<body class="fondo" style="background-image:url(img/fondo.jpg); ">
</body>
<style>
  .imagen-icon img {
    width: 18%;
    height: 25%;
  }
</style>
<center>
  <div class="imagen-icon">
    <img src="img/logo.png">
  </div>
</center>

<body>
  <?php

  $conexion = new mysqli("localhost", "root", "", "computadoras");
  if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
  }

  $sql = "SELECT * from computadoras";
  $result = $conexion->query($sql);

  $Computadora = "";

  while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $Computadora .= '<option value="' . $row['ID'] . '"> ' . $row['Procesador'] . " " . $row['RAM'] . " " . $row['GPU'] . " " . $row['Almacenamiento'] . '</option>';
  }

  ?>

  <div class="texto2">
    <br><br>
    <h2>Buscar producto</h2>
  </div>
  <center>
    <div class="text">
      <form action="ActualizarPC.php" method="POST">

        <br><br><br>
        <div class="select">
          <select id="ID" name="ID" class="classic" type="text">
            <div class="select">
              <?= $Computadora; ?>
            </div>
          </select>
        </div>

        <br>

        <button type="text" class="submit">Actualizar</button>
      </form>
      <br>
      <form action="index.html">
        <button type="text" class="submit">Regresar</button>
      </form>
    </div>
  </center>
</body>

</html>