<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <link rel="icon" type="image/png" href="../Images/alps_favicon.png">
  <meta name="description" content="Log into the website">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../CSS/login.css">
  <!-- google fonts api -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300&family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body>
  <?php
  require_once "functions.php";
  ?>

  <!-- title of website -->
  <div class="Site-Title"><a href="../index.html" class="Text">ISAA PROJECT</a></div>

  <?php
  dbConnect();

  if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    // echo $username;
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $userquery = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($userquery);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $userres = $stmt->get_result();

    if (!$userres->num_rows) {
  ?>
      <p style='color:crimson;'>User does not exist.</p>
      <?php
    } else {
      $userpass = $userres->fetch_assoc();
      $db_pass = $userpass['password'];
      $pass_decode = password_verify($password, $db_pass);

      if ($pass_decode) {
        $_SESSION['name'] = $userpass['name'];
        $_SESSION['username'] = $username;
        $_SESSION['post-flag'] = 1;
        $_SESSION['prof-flag'] = 1;
        $_SESSION['userid'] = $userpass['user_id'];
      ?>
        <script>
          location.replace("homepage.php");
        </script>

  <?php

      } else {
        echo "Password Incorrect";
      }
    }
  }
  ?>

  <!-- login form -->
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="login-form">
    <div class="login-box">
      <h1>Login</h1>
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Username" name="username" id="username" required>
      </div>
      <div class="textbox">
        <i class="fas fa-key"></i>
        <input type="password" placeholder="Password" name="password" id="password" required>
      </div>
      <!-- <div class="forgot-password">
        <a href="#">Forgot Password?</a>
      </div> -->

      <input class="btn" type="submit" value="Sign In" name="login">
      <hr>
      <div class="Acc">
        Don't have an account?
        <a href="signup.php">Create one!</a>
      </div>
    </div>
  </form>

</body>

</html>