<?php

$databaseHost = 'localhost';
$databaseName = 'cc'; 
$databaseUsername = 'root'; 
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


if(isset($_POST['sub']))
{
$uname = $_POST['uname'];
$upassword = $_POST['upassword'];

$res = mysqli_query($mysqli,"select* from user where uname='$uname'and upassword='$upassword'");
$result=mysqli_fetch_array($res);
if($result)
{
header("location:home.php");
	
}
else
{
	echo '<span style="color:white;text-align:center;">Username or Password entered is incorrect. Please try agian</span>';
}
}
?>
<html>
    <head>
    <style> 
body {
  margin: 0;
  padding: 0;
  background-color: #292c2f;
}

::-webkit-scrollbar {
  width: 0;
  /* Remove scrollbar space */
  background: transparent;
  /* Optional: just make scrollbar invisible */
}

/* Style for title of the page */
.Site-Title {
  text-align: center;
  color: white;
  font-family: "Raleway", sans-serif;
  font-size: 60px;
  font-weight: 500;
  /* text-decoration: double; */
  flex: 1;
  padding: 30px auto;
  padding-top: 50px;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
}

.Text {
  color: white;
  text-decoration: none;
}

/* The div of login form is centered */
.login-box {
  color: white;
  width: 340px;
  position: absolute;
  top: 20%;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
}

.login-box h1 {
  float: left;
  font-family: 'Montserrat', sans-serif;
  font-size: 30px;
  font-weight: 200;
  border-bottom: 6px solid #e27802;
  margin-bottom: 30px;
  margin-top: 50px;
  margin-right: 10px;
  padding-bottom: 10px;
}

h1{
    font-weight:400;
}

/* Style for textboxes of the form */
.textbox {
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #e27802;
}

.textbox i {
  width: 26px;
  float: left;
  text-align: center;
}

.textbox input {
  border: none;
  outline: none;
  background: none;
  color: white;
  font-size: 18px;
  width: 250px;
  float: left;
  margin: 0 10px;
}

.btn {
  background: none;
  border: 2px solid #e27802;
  color: white;
  cursor: pointer;
  font-size: 18px;
  margin: 12px 0;
  padding: 10px;
  width: 100%;
}

.btn:hover {
  background-color: white;
  color: #e27802;
}

.forgot-password {
  text-align: left;
  padding: 10px 0;
  margin: 0;
}

/* Style for redirecting to signup page */
.Acc {
  font-family: 'Montserrat', sans-serif;
  font-size: 16px;
  padding-top: 10%;
  text-align: center;
  width: 100%;
}

.login-box a {
  background: none;
  color: #e27802;
  cursor: pointer;
  font-family: 'Montserrat', sans-serif;
  font-size: 18px;
  margin: 12px 0;
  padding: 10px;
}

@media (max-width: 480px) {

  .login-box {
    width: 90%;
    /* background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)); */
  }

  .Site-Title {
    width: 90%;
    font-size: 35px;
  }

  .login-box h1 {
    font-size: 20px;
  }

  .textbox {
    width: 90%;
  }
}
</style>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <link rel="icon" type="image/png" href="../Images/alps_favicon.png">
  <meta name="description" content="Log into the website">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- google fonts api -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300&family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>
    
<body><center>
<div>
<form action="" method="POST">
<div class="login-box">
      <h1>Login</h1>
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Username" name="uname" id="username" required>
      </div>
      <div class="textbox">
        <i class="fas fa-key"></i>
        <input type="password" placeholder="Password" name="upassword" id="password" required>
      </div>
      <!-- <div class="forgot-password">
        <a href="#">Forgot Password?</a>
      </div> -->

      <input class="btn" type="submit" value="Sign In" name="sub">
    </div>
<form>
    </div>
</body></center>
</html>
