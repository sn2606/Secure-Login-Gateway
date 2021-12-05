<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sign Up</title>
  <link rel="icon" type="image/png" href="../Images/alps_favicon.png">
  <meta name="description" content="Log into the website">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../CSS/signup.css">
  <!-- google fonts api -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300&family=Montserrat&display=swap" rel="stylesheet">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../JS/validation.js" defer></script>
</head>

<body>

  <!-- title of website -->
  <div class="Site-Title"><a href="../index.html" class="Text">ISAA PROJECT</a></div>

  <?php
  require_once "functions.php";
  include "kmp.php";
  ?>

  <?php
  dbConnect();
  if (isset($_POST['signup'])) {
    $name = escape_string($_POST['name']);
    $email = escape_string($_POST['email']);
    $username = escape_string($_POST['username']);
    $password = escape_string($_POST['password']);
    $cpassword = escape_string($_POST['confirm']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($emailquery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $emailres = $stmt->get_result();

    $userquery = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($userquery);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $userres = $stmt->get_result();

    if ($emailres->num_rows > 0) {
      echo "Email already exists.";
    } elseif ($userres->num_rows > 0) {
      echo "User already exists.";
    } else {
      if ($password === $cpassword) {
        $sql = "INSERT INTO users(name, email, username, password) VALUES(?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, $username, $pass);
        $stmt->execute();
        $stmt->close();
        $sql = "SELECT user_id FROM users WHERE username=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $id = $row['user_id'];
          }
        }
        $stmt->close();
        redirect_to("login.php");
      } else {
        echo "Passwords not matching.";
      }
    }
    $stmt->close();
  }
  ?>

  <!-- login form -->
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="signup-form">
    <div class="login-box">
      <h1 id="sutext">Sign Up</h1>
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Name" name="name" id="name" required>
      </div>
      <div class="textbox">
        <i class="fas fa-envelope"></i>
        <input type="email" placeholder="Email" name="email" id="email" required>
      </div>
      <div class="textbox">
        <i class="fas fa-at"></i>
        <input type="text" id="username" placeholder="Username" name="username" id="username" required>
        <span id="lblError" style="color: red"></span>
      </div>
      <div class="textbox">
        <i class="fas fa-key"></i>
        <input type="password" placeholder="Password" name="password" id="password" required>
      </div>
      <div class="textbox">
        <i class="fas fa-key"></i>
        <input type="password" placeholder="Confirm Password" name="confirm" id="confirm" required>
      </div>
      
      <input type="checkbox" name="Agree" value="Yes" required> <span class="Acc">I Agree to the Terms and Conditions.</span>

      <input class="btn" type="submit" value="Sign Up" name="signup">
      <hr>
      <div class="Acc">
        Already have an account?
        <a href="login.php">Login!</a>
      </div>
    </div>
  </form>
</body>

</html>