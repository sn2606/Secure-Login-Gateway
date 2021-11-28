<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TravelLog</title>
    <link rel="icon" type="image/png" href="../Images/alps_favicon.png">
    <meta name="description" content="Connect with people over travelling">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once "functions.php";
    ?>

    <!-- navbar -->
    <div class="nav-wrapper">
        <nav class="navbar" id="header">
            <div class="Logo">
                <a href="../index.html"><span class="Logo-Text">ISAA PROJECT</span></a>
            </div>
            <div class="navigation">
                <ul class="menu">
                    <li><a href="#"><i class="fas fa-home"></i></a></li>
                    <li><a href="#"><i class="fas fa-bell"></i></a></li>
                    <li><a href="#"><i class="fas fa-user-alt"></i></a></li>
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


</body>

</html>