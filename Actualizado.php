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

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "computadoras";

$AID = $_POST["ID"];
$AProcesador = $_POST["AProcesador"];
$AAlmacenamiento = $_POST["AAlmacenamiento"];
$ARAM = $_POST["ARAM"];
$AGPU = $_POST["AGPU"];
$ASO = $_POST["ASO"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE computadoras SET ID = '$AID', Procesador = '$AProcesador', Almacenamiento = '$AAlmacenamiento', RAM= '$ARAM ', GPU = '$AGPU', SO = '$ASO' WHERE ID = $AID";

if ($conn->query($sql) === TRUE) {
  echo "Se actualizo Correctamente la computadora";
} else {
  echo "Error al actualizar la computadora: " . $conn->error;
}

$conn->close();
?>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PC company</title>
  <link rel="shortcut icon" href="img/2428669.png" type="image/x-icon">
  <link rel="stylesheet" href="mapa-estilo-mod.css">
</head>

<body class="fondo" style="background-image:url(img/12577.jpg); ">
</body>
<div class="texto2">
  <br><br><br><br><br><br><br>
  <p>
    <?= $AID ?>
      <?= $AProcesador ?>
        <?= $AAlmacenamiento ?>
          <?= $ARAM ?>
            <?= $AGPU ?>
  </p><br>
  <p>Actualizada correctamente</p>
  <form action="Seleccionarpc.php" method="POST">
    <button type="text">Regresar</button>
  </form>
</div>

</html>