<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
  header('Location: /index');
}

if ($_SESSION["user_type"] != "admin") {
  header('Location: /404');
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
  <title></title>
  <?php include('partials/header.php'); ?>
</head>

<body>
  <?php include('partials/ToggleThemeDown.php') ?>
  <?php include('partials/navbar.php') ?>

  <div class="container">
    <div class="row">
      <div class="col">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nesciunt non officia repellat dolorem cumque reprehenderit veritatis? Eum magni, sit fuga dolore odit beatae accusantium omnis ullam iste laboriosam tempora.
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit necessitatibus numquam, eius quod earum eos ea? Provident consequatur, similique incidunt dolore sequi sit non ullam harum animi nemo, recusandae voluptatum.
          Eum minima vel molestiae, aut labore illum deleniti, a iure enim sunt nesciunt ab architecto dignissimos voluptatum sed aliquam ducimus explicabo? Repellendus sunt illo minima natus similique ipsa quas eius!
          Repellat quis, rerum repellendus optio iusto accusantium. Alias perferendis, accusamus iure sapiente ipsum eum non adipisci autem in illum minus. Qui illo recusandae odio ipsam natus sapiente facilis optio debitis.
          Ut dolorum praesentium nisi asperiores id. Inventore fuga assumenda corporis id repudiandae quaerat, doloribus, vero dolorem perferendis officiis repellendus dicta natus? Eveniet rerum assumenda, quo et sed libero a nesciunt!
          Necessitatibus repellat harum quae similique doloribus odio eaque dolores. Saepe ipsam recusandae quia voluptatem consectetur asperiores blanditiis nam, reiciendis fuga sunt iure dignissimos a itaque officia, consequuntur aperiam ad odio!
        </p>
      </div>
    </div>
  </div>



  <?php include('partials/footer.php'); ?>
</body>

</html>