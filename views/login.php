<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/styles/login.css">
  <title>Ingresa a tu cuenta</title>
</head>
<body>

    <?php require 'views/header.php' ?>

    <div class="login">
        <div class="form-container">

        <form action="<?php echo constant('URL'); ?>login/ingresar" class="form" method="POST">
            <label for="email" class="label">Correo electrónico</label>
            <input type="text" name="email" placeholder="propi3dad@example.com" class="input input-email">

            <label for="password" class="label">Password</label>
            <input type="password" name="password" placeholder="*********" class="input input-password">

            <input type="submit" value="Log in" class="primary-button login-button">
            <a href="/">Forgot my password</a>
        </form>

        <button class="secondary-button signup-button">Sign up</button>
        </div>
    </div>

    <?php require 'views/footer.php' ?>

</body>
</html>