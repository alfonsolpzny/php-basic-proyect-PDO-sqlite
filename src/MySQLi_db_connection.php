<?php

//necesary for MySqli or PDO connection with localhost
// require('../vendor/autoload.php');
// $dotenv = Dotenv\Dotenv::createImmutable('../');
// $dotenv->load();

//necesary for MySqli or PDO connection with localhost
// $DATABASE_HOST = $_ENV["DATABASE_HOST"];
// $DATABASE_USER = $_ENV["DATABASE_USER"];
// $DATABASE_PASS = $_ENV["DATABASE_PASS"];
// $DATABASE_NAME = $_ENV["DATABASE_NAME"];

// ################################### Create connection in MySQLi
// $conn = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// $conn->set_charset("utf8");

// ################################### Create connection in PDO to localhos db
// try {
//     $conn = new PDO("mysql:host=$DATABASE_HOST;dbname=$DATABASE_NAME", $DATABASE_USER, $DATABASE_PASS);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
//   } catch(PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
//   }


//Create conection to a PDO SQLite
$conn  = new PDO('sqlite:database.db');

// referencehttps://www.w3schools.com/php/php_mysql_connect.asp

// Other ##############################################
//$sql = "SELECT id, username, email FROM users";
//$result = mysqli_query($conn,$sql);
//------------------------------------

//$row = mysqli_fetch_row($result);

//mysqli_close($conn); //ver como cerrarla
?>
