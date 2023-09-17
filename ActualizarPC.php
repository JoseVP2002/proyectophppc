<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PC company</title>
  <link rel="shortcut icon" href="img/2428669.png" type="image/x-icon">
  <link rel="stylesheet" href="mapa-estilo-mod.css">
</head>
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

$ID = $_POST['ID'];
$AID = $_POST['ID'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE computadoras SET ID = $ID";
$sql = "SELECT * FROM computadoras WHERE ID = $ID";
$result = mysqli_query($conn, $sql);

$AProcesador;
$AAlmacenamiento;
$ARAM;
$AGPU;
$ASO;

while ($row = mysqli_fetch_assoc($result)) {
  $AID = $row["ID"];
  $AProcesador = $row["Procesador"];
  $AAlmacenamiento = $row["Almacenamiento"];
  $ARAM = $row["RAM"];
  $AGPU = $row["GPU"];
  $ASO = $row["SO"];
}

mysqli_close($conn);
?>

<body class="fondo" style="background-image:url(img/12577.jpg); ">
</body>
<div class="texto2">
  <br><br><br><br><br><br>
  <h2>Actualizar PC</h2>
</div>
<center>
  <div class="text">
    <form action="Actualizado.php" method="POST">

      <br><br><br>
      <label for="ID" class="placeholder">ID</label>
      <input id="ID" name="ID" class="input" type="text" placeholder=" " value="<?= $ID ?>" readonly /><br>

      <label for="AProcesador" class="placeholder">Procesador</label>
      <input id="AProcesador" name="AProcesador" class="input" type="text" placeholder=" " value="<?= $AProcesador ?>"
        required /><br>

      <label for="AAlmacenamiento" class="placeholder">Almacenamiento</label>
      <input id="AAlmacenamiento" name="AAlmacenamiento" class="input" type="text" placeholder=" "
        value="<?= $AAlmacenamiento ?>" required /><br>

      <label for="ARAM" class="placeholder">RAM</label>
      <input id="ARAM" name="ARAM" class="input" type="text" placeholder=" " value="<?= $ARAM ?>" required /><br>

      <label for="AGPU" class="placeholder">GPU</label>
      <input id="AGPU" name="AGPU" class="input" type="text" placeholder=" " value="<?= $AGPU ?>" required /><br>

      <label for="ASO" class="placeholder">SO</label>
      <input id="ASO" name="ASO" class="input" type="text" placeholder=" " value="<?= $ASO ?>" required /><br>
      <br><br><br>

      <button type="text" class="submit" value="<?= $ID ?>" id="Actualizar" name="Actualizar">Actualizar</button>
    </form><br>
    <form action="Seleccionarpc.php" method="POST">
      <button type="text">Regresar</button>
    </form>
  </div>
</center>
</body>

</html>