<html>
<style>
  .texto-agregar {
    color: white;
  }

  .imagen-icon img {
    width: 18%;
    height: 25%;
  }
</style>
<center>
  <div class="imagen-icon">
    <img src="img/logo.png">
  </div>


  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC company</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="mapa-estilo-agr.css">
  </head>

  <body class="fondo" style="background-image:url(img/fondo.jpg); ">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "computadoras";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $ID = $_POST['ID'];
    $Procesador = $_POST['Procesador'];
    $Almacenamiento = $_POST['Almacenamiento'];
    $RAM = $_POST['RAM'];
    $GPU = $_POST['GPU'];
    $SO = $_POST['SO'];

    $sql = "INSERT INTO computadoras (ID, Procesador, Almacenamiento, RAM, GPU, SO)
        VALUES ('$ID', '$Procesador', '$Almacenamiento', '$RAM', '$GPU', '$SO')";
    if (mysqli_query($conn, $sql)) {
      echo "<div class=texto-agregar>Agregado correctamente</div>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
    <br>
    <form action="index.html" method="POST">
      <button type="text">Regresar</button>
    </form>
</center>

</html>