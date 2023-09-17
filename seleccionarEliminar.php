<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PC company</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="mapa-estilo-elim.css">
</head>

<body class="fondo" style="background-image:url(img/fondo.jpg); ">
</body>
<br><br><br>
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
  <br><br>
  <center>
    <h2>Formulario de la base de datos de la empresa Wow Stock Controller </h2>
  </center>
  <br>
  <br>
  <center>
    <h2>coloque la ID que quiera eliminar</h2>
  </center>
  <br>
  <div class="drops">

    <form action="eliminar.php" method="">

      <?php

      $conexion = new mysqli("localhost", "root", "", "computadoras");
      if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
      }

      $sql = "SELECT * from computadoras";
      $result = $conexion->query($sql);

      $Computadora = "";

      while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $Computadora .= '<option value= "' . $row['ID'] . '"> ' . $row['Procesador'] . " " . $row['RAM'] . " " . $row['GPU'] . " " . $row['Almacenamiento'] . '</option>';
      }

      ?>
      <br><br><br>
      <div class="select">
        <select id="ID" name="ID" class="classic" type="text" value="<?= $ID ?>">
          <div class="select">
            <?= $Computadora; ?>
          </div>
        </select>
      </div>
      <br>
      <button type="text" class="submit">Eliminar</button>
    </form>
  </div>
  <br>
  <center>
    <form action="index.html" method="POST">
      <button type="text">Regresar</button>
    </form>
  </center>
</body>

</html>