<?php

// $country = $_POST["country"]; //get param from $_POST
// $sql = "SELECT city, lat, lng, iso2, iso3, population, admin_name from cities where country = ? ;"; //query
// $stmt = $conn->prepare($sql); // prepare query before execute
// $stmt->execute([$country]); //Execute query with parameter where is '?' in query
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$error = false;

if (!empty($_POST)) {
    require_once 'Database.php';
    $conn = Database::connect();


    $username_form = $_POST["username"];
    $password_form = $_POST["password"];

    if (!$username_form || !$password_form) {
        die("⚠️ Faltan datos");
    }

    $passwordHAsh = password_hash($password_form, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(username, password) VALUES(?,?);";
    $stmt = $conn->prepare($sql);

    try {
        $stmt->execute([$username_form, $passwordHAsh]);
        header('location: /index');
        exit;
    } catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        print_r($stmt->errorInfo());
        $error = true;
    }


    //$conn->close();
}

?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Sign Up</title>
    <?php include('partials/header.php'); ?>
    <link rel="stylesheet" href="/public/css/sign-in.css">
    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <?php include('partials/ToggleThemeDown.php') ?>

    <main class="form-signin w-100 m-auto">
        <a href="/" class="btn btn-lg btn-danger" id="signup">Back</a>
        <?php if ($error == true) { ?>
            <div>
                <p id="error">Error, this user already exist.</p>
            </div>
        <?php } ?>
        <form action="<?php $_SERVER["REQUEST_URI"]; ?>" method="post">
            <img class="mb-4" src="/public/icons/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Register your data</h1>
            <div class="form-floating">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="usernameexample" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-success w-100 py-2" type="submit">Sign up</button>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
        </form>
    </main>
    <?php include('partials/footer.php'); ?>

</body>

</html>