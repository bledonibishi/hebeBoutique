<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="../style/footer.css";>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
  </head>
  <body>
    <form action="" method="post">
      <div class="div-forma">
        <h1>Login</h1>
        <label for="email"
          >Email
          <input type="email" name="email" />
        </label>
        <label for="password"
          >Password
          <input type="password" name="password" />
        </label>
        <button type="submit" class="btn-login">Sign in</button>

        <a href="register.php">Create account</a>
      </div>
    </form>
</body>
    <?php include "../footer.php" ?>
