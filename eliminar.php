<html>

<style>
  .texto-eliminiar {
    color: white;
  }

  .imagen-icon img {
    width: 18%;
    height: 25%;
  }
</style>
<br><br><br><br>
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
    <link rel="stylesheet" href="mapa-estilo-elim.css">
  </head>

  <body class="fondo" style="background-image:url(img/fondo.jpg); ">
  </body>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "computadoras";

  $ID = $_GET['ID'];

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "DELETE FROM computadoras WHERE ID = '$ID'";


  if (mysqli_query($conn, $sql)) {
    echo "<div class=texto-eliminiar>Eliminado exitosamente</div>";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  mysqli_close($conn);
  ?>
  <br><br>
  <form action="index.html" method="POST">
    <button type="text">Regresar</button>
    </a>
    </div>
  </form>
</center>

</html>