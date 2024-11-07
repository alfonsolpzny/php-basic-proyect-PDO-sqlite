<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index');
}
$id = $_SESSION["id"];
$error = false;
$success = false;

if (!empty($_POST)) {
    require_once 'MySQLi_db_connection.php';

    $current =  $_POST["current"];
    $check1 =   $_POST["check1"];
    $check2 =   $_POST["check2"];

    if ($check1 ==  $check2) { //Step 1: check if passwor confirmation is OK

        $sql = "SELECT password from users where id =  ? ;"; //Step 2: Create query to get actual password
        if ($stmt = $conn->prepare($sql)) {


            $stmt->bindParam(1, $id, PDO::PARAM_STR);


            $stmt->execute();
            $rows = $stmt->fetchall();

            if (sizeof($rows) == 1) { //Step 3: Check if query is OK


                if (password_verify($current, $rows[0]["password"])) { //STEP 4: Check if current password is correct

                    //Step 5: Update password
                    $new_password = password_hash($check2, PASSWORD_DEFAULT);
                    $sql_update = "UPDATE users SET password = '$new_password' WHERE id = '$id' ;";
                    if ($conn->query($sql_update)) {
                        $success = true;
                    } else {
                        $error = true;
                    }
                } else {
                    $error = true;
                }
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }
    } else {
        $error = true;
    }
    
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Alfonso Lopez">
    <meta name="generator" content="">
    <title>Changue password</title>
    <?php include('partials/header.php'); ?>
    <style>
        label {
            padding-bottom: 8px;
        }

        div .row {
            display: flex;
            justify-content: center;
        }

        #main {
            padding-top: 50px;
        }
    </style>
</head>

<body>
    <?php include('partials/ToggleThemeDown.php') ?>
    <?php include('partials/navbar.php') ?>

    <div class="container">
        <div class="row" id="main">
            <div class="col">
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <label for="current">Current password</label>
                            <input type="password" name="current" id="cuurent" class="form-control" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="current">New password</label>
                            <input type="password" name="check1" id="check1" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="current">Confirm new password</label>
                            <input type="password" name="check2" id="check2" class="form-control" required>
                        </div>
                    </div>
                    <?php if ($error ==  true) { ?>
                        <br>
                        <p style="color: var(--bs-danger-text-emphasis)">Error al cambiar contraseña.</p>
                    <?php } ?>

                    <?php if ($success ==  true) { ?>
                        <br>
                        <p style="color: var(--bs-success-text-emphasis)">Cambio de contraseña correcto.</p>
                    <?php } ?>

                    <hr>
                    <button type="submit" class="btn btn-success">OK</button>
                </form>
            </div>
        </div>
    </div>



    <?php include('partials/footer.php'); ?>
</body>

</html>