<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Alfonso Lopez">
    <meta name="generator" content="">
    <title>Error 404</title>
    <?php include('partials/header.php'); ?>
    <style>
        body {
            height: 100hv;
        }

        .col {
            margin-left: 50%;
            margin-top: 30%;
            height: 100%;

        }
    </style>
</head>

<body>
    <?php include('partials/ToggleThemeDown.php') ?>


    <div class="container">
        <div class="row">
            <div class="col">
                <h1>404</h1>
                <h2>Error, page not fount</h2>
                <button id="go-back" class="btn btn-primary" style="width: 100px;">go back</button>
            </div>
        </div>
        <div class="row">

        </div>
    </div>




</body>
<script>
    document.getElementById("go-back").addEventListener("click", () => {
        history.back();
    });
</script>

</html>