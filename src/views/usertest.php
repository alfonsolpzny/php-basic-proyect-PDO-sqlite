<?php

//Page  to see user and test querys

if (!isset($_SESSION['loggedin'])) {
    header('Location: /index');
}

if ($_SESSION["user_type"] != "admin") {
    header('Location: /404');
}

require_once 'MySQLi_db_connection.php';



$sql = "SELECT * FROM users;";
$stmt = $conn->prepare($sql);
$stmt->execute();


$rows = $stmt->fetchAll();

?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Alfonso Lopez">
  <meta name="generator" content="">
  <title>Usertest</title>
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