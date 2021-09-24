<?php
session_start();

  if(isset($_SESSION["login"])) {
        header("Location: ../");
        exit;
    }

  require '../functions.php';

  if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
  

    if(mysqli_num_rows($result) === 1){
      $row = mysqli_fetch_assoc($result);
      if($password == $row["password"]){
          $_SESSION["login"] = true;
          header("Location: ../");
          exit;
      }
    }
    $error = true;
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
<div class="login-box">
  <h1>Login</h1>
  <form action="" method="POST">
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" autofocus autocomplete="off" required name="username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" required name="password">
  </div>

  <input type="submit" class="btn" name="login" value="Sign in">
  
  <?php if(isset($error)) : ?>
    <div class="textbox">
        <p>Username / password salah</p>
    </div>  
  <?php endif; ?>
  </form>
</div>
  </body>
</html>
