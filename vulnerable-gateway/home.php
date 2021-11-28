<?php
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ISAA</title>
  <link rel="icon" type="image/png" href="../Images/alps_favicon.png">
  <meta name="description" content="Connect with people over travelling">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- custom css -->
  <!-- google fonts and fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

  <style>
      * {
  margin: 0;
  padding: 0;
  /* font-family: Arial, Helvetica, sans-serif; */
  font-size: 12px;
}

::-webkit-scrollbar {
  width: 0;
  /* Remove scrollbar space */
  background: transparent;
  /* Optional: just make scrollbar invisible */
}

body {
  height: 100vh;
  width: 100%;
}

/************************************** NAVBAR CUSTOM ************************************************/
.nav-wrapper {
  /* position: relative !important; */
  position: absolute!important;
  display: block;
  /* overflow: hidden; */
  top: 0;
}

nav {
  /* position: relative !important; */
  position: absolute!important;
  top: 0;
}

nav a {
  color: #fff !important;
}

.menu {
  margin-bottom: 0;
}

main {
  padding-top: 3%;
}

/************************************** TEXT CONTAINER **********************************************/
.container {
  font-family: "Raleway", sans-serif;
  font-size:50px;
  padding-top: 3%;
  padding-bottom: 3%;
  position: absolute;
  top: 100px;
  left: 60px;
  right: 30px;
  /* overflow: auto; */
  /* margin-top: 10%; */
}

.input-group-btn {
  display: flex;
  justify-content: space-between;
}

.btn {
  background-color: #333;
  border: #333;
  color: #fff;
  margin: 0;
}

.btn :hover {
  /* color: #fff !important; */
  background-color: #ccc !important;
}

* {
    margin: 0;
    padding: 0;
    font-size: 12px;
    font-family: "Raleway", sans-serif;
}

::-webkit-scrollbar {
    width: 0;
    /* Remove scrollbar space */
    background: transparent;
    /* Optional: just make scrollbar invisible */
}

/****************************************** NAVBAR STYLE ********************************************/

.nav-wrapper {
    width: 100%;
    /* position: -webkit-sticky; */
    /* Safari */
    position: sticky;
    top: 0;
    background-color: #fff;
}

nav {
    position: sticky;
    top: 0;
    left: 0;
    right: 0;
    /* height: 10%; */
    display: flex;
    justify-content: space-between;
    padding-left: 3%;
    background-color: #333;
    color: white;
    box-shadow: 1px 3px 4px #e6e6e6;
    align-items: center;
}

/****************************************** NAVBAR LOGO STYLE ********************************************/

.Logo {
    width: auto;
    padding: 5px;
    display: flex;
    align-items: baseline;
    justify-content: center;
}

.Logo a {
    text-decoration: none;
}

.Logo-Img {
    height: 45px;
    width: 45px;
    margin-top: 5px;
}

.Logo-Text {
    color: lightgray;
    font-family: "Raleway", sans-serif;
    font-size: 45px;
    font-weight: 300;
    margin-right: 25px;
    flex: 1;
}

/****************************************** NAVBAR RIGHT NAVIGATION STYLE ********************************************/
.navigation {
    display: flex;
    right: 25px;
    float: right;
    align-items: center;
    padding-right: 20px;
}

.menu {
    display: flex;
    flex-direction: row;
    list-style: none;
}

.menu li a {
    color: inherit;
    text-decoration: none;
    margin: 0 15px;
    display: flex;
    padding: 5px;
}

.menu li a:hover {
    background-color: black;
}

.menu li a i {
    height: 30px;
    width: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}

.not-menu {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: row;
}


/****************************************** NAVBAR SIGNOUT STYLE ********************************************/

.sign-out {
    display: flex;
}

.sign-out a {
    text-decoration: none;
}

.sign-out .menu-text {
    font-family: "Raleway", sans-serif;
    font-size: 20px;
    color: white;
    margin: 0 15px;
    border: 1px solid white;
    border-radius: 5px;
    padding: 5px;
}

.sign-out .menu-text:hover {
    background-color: white;
    color: #333;
}

.sign-out-mobile {
    display: none;
}

/**************************************** RESPONSIVE DESIGN CODE ******************************************************/

@media only screen and (max-width: 720px) {
    h1 {
        font-size: 20px;
    }

    h2 {
        font-size: 20px;
    }

    p {
        font-size: 12px;
    }

    /* MOBILE NAVIGATION */
    .nav-wrapper {
        background-color: #333;
        width: 100%;
    }

    .navbar {
        flex-direction: column;
        width: 100%;
        background-color: #333;
        /* align-items: stretch; */
    }

    .navigation {
        background-color: #333;
        flex-direction: column;
    }

    nav {
        height: auto;
    }

    .Logo {
        align-items: baseline;
        justify-content: center;
    }

    .Logo-Text {
        font-size: 30px;
        padding-bottom: 10;
    }

    .Logo-Img {
        height: 30px;
        width: 30px;
    }

    .not-menu {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sign-out {
        display: none;
    }

    .sign-out-mobile {
        display: flex;
    }

    .sign-out-mobile a {
        color: white;
        text-decoration: none;
    }


    .sign-out-mobile a i {
        height: 30px;
        width: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }
}
  </style>
</head>
<body>
<div class="nav-wrapper">
        <nav class="navbar" id="header">
            <div class="Logo">
                <a href="#"><span class="Logo-Text">ISAA PROJECT</span></a>
            </div>
            <div class="navigation">
                <ul class="menu">
                    <li><a href="#"><i class="fas fa-home"></i></a></li>
                    <li><a href="#"><i class="fas fa-bell"></i></a></li>
                    <li><a href="dashboard.php"><i class="fas fa-user-alt"></i></a></li>
                </ul>
                <div class="not-menu">
                    <div class="sign-out">
                        <a href="logout.php"><span class="menu-text">Sign Out</span></a>
                    </div>
                    <div class="sign-out-mobile">
                        <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
<div class="container">
    <h2>Welcome to Homepage!</h2>
  </div>
<div class="form">
<p><a href="dashboard.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>