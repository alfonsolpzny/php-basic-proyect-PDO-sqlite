<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: /index');
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
    <title>Profile</title>
    <?php include('partials/header.php'); ?>
    <style>
        #center{
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include('partials/ToggleThemeDown.php') ?>
    <?php include('partials/navbar.php') ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th colspan="2" id="center"> user info </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td> <?= $_SESSION["id"]; ?></td>
                            </tr>
                            <tr>
                                <th>username</th>
                                <td> <?= $_SESSION["username"]; ?></td>
                            </tr>
                            <tr>
                                <th>user level</th>
                                <td> <?= $_SESSION["user_type"]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="/password">Change password</a>
            </div>
        </div>
    </div>



    <?php include('partials/footer.php'); ?>
</body>

</html>