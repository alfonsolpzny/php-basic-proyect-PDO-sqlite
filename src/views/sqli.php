<?php

//Page to test sqliconnection, error if not
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
  header('Location: /index');
}

if ($_SESSION["user_type"] != "admin") {
  header('Location: /404');
}



$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "toor";
$DATABASE_NAME = "php_basic";


// Create connection
$conn = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$conn->set_charset("utf8");

$sql = "SELECT * FROM users;"; //La sentencia que se hara al servidor
$stmt = $conn->prepare($sql); //Hace query en el servidor
//$stmt->bind_param("i", $idNcontrol); //en caso de requerir de usar 'where parametro=id' isuar esta linea para indicar cuales parametros
$stmt->execute(); //Ejecuta el query
$result = $stmt->get_result(); // Obtiene el resultado preeliminar del query - NO ES EL RESULTADO FINAL

if ($result->num_rows == 1) {
  echo "si";
} else {
  echo "no";
}

$rows = $result->fetch_all(MYSQLI_ASSOC);



?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Alfonso Lopez">
  <meta name="generator" content="">
  <title>sqli</title>
  <?php include('partials/header.php'); ?>
</head>

<body>
  <?php include('partials/ToggleThemeDown.php') ?>
  <div class="container">
    <div class="row">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>id</th>
            <th>username</th>
            <th>password</th>
            <th>User type</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 0; $i < count($rows); $i++) { ?>
            <tr>
              <td><?= $rows[$i]["id"]; ?></td>
              <td><?= $rows[$i]["username"]; ?></td>
              <td><?= $rows[$i]["password"]; ?></td>
              <td><?= $rows[$i]["user_type"]; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

  <?php include('partials/footer.php'); ?>

</body>

</html>