<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PC Company - Modificar</title>
  <link rel="shortcut icon" href="img/2428669.png" type="image/x-icon">
  <link rel="stylesheet" href="mapa-estilo-ver.css">
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #E67E22;
    }

    .textos {
      color: white;
    }

    .text-tabla {
      color: white;
    }

    .imagen-icon img {
      width: 18%;
      height: 25%;
    }
  </style>
</head>

<body class="fondo" style="background-image: url(img/fondo.jpg); ">

  <body>
    <center>
      <br>
      <div class="imagen-icon">
        <img src="img/logo.png">
      </div>

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

      $sql = "SELECT ID, Procesador, Almacenamiento, RAM, GPU, SO
          FROM computadoras";
      $result = mysqli_query($conn, $sql);

      echo "<div class=textos><h1>Computadoras Registradas</h1></div><br>";
      echo "<table <div class=text-tabla>>";

      if (mysqli_num_rows($result) > 0) {

        echo "<tr>";
        echo "<th>ID:</th>";
        echo "<th>Procesador:</th>";
        echo "<th>Almacenamiento:</th>";
        echo "<th>RAM:</th>";
        echo "<th>GPU:</th>";
        echo "<th>SO:</th>";
        echo "</tr>";
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row["ID"] . "</td>";
          echo "<td>" . $row["Procesador"] . "</td>";
          echo "<td>" . $row["Almacenamiento"] . "</td>";
          echo "<td>" . $row["RAM"] . "</td>";
          echo "<td>" . $row["GPU"] . "</td>";
          echo "<td>" . $row["SO"] . "</td>";
          echo "</tr>";
        }
      } else {
        echo "<div class=textos>No hay computadoras !!</div>";
      }
      echo "</table>";


      mysqli_close($conn);
      ?>
      <br>
      <form action="index.html">
        <button type="text" class="submit">Regresar</button>
      </form>

    </center>
  </body>
</body>

</html>