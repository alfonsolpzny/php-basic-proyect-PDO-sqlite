<?php

session_start();
if (isset($_SESSION['loggedin'])) { //Si esta logeado mandarlo a /home
  header('Location: home');
}
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Alfonso Lopez">
  <meta name="generator" content="">
  <title>Signin</title>
  <?php include('partials/header.php'); ?>
  <link rel="stylesheet" href="/public/css/sign-in.css">
  <!-- Custom styles for this template -->
  <link href="sign-in.css" rel="stylesheet">

</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
  <?php include('partials/ToggleThemeDown.php') ?>
  <main class="form-signin w-100 m-auto">
    <a href="/signup" class="btn btn-lg btn-secondary" id="signup">Sign up</a>

    <?php if (isset($_SESSION["error"])) { ?>
      <div>
        <p id="error">Error, incorrerct user or password.</p>
      </div>
    <?php } ?>
    <form action="/authenticate" method="post">
      <img class="mb-4" src="/public/icons/bootstrap-logo.svg" alt="" width="72" height="57"><br>
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username" required>
        <label for="floatingInput">Username</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
      </div>

      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Remember me
        </label>
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
    </form>
  </main>
  <?php unset($_SESSION["error"]); ?>
  <?php include('partials/footer.php'); ?>

</body>

</html>