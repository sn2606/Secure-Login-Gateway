<?php
session_start();
function dbConnect()
{
    global $conn;
    $dbServer = "localhost:3308";
    $username = "root";
    $password = "";
    $dbName = "sqlinjec";
    $conn = new mysqli($dbServer, $username, $password, $dbName);

    if ($conn->ping()) {
        // printf ("Our connection is ok!\n");
    } else {
        // printf("Error: %s\n", $conn->error);
        exit("Error connecting to the DB");
    }

    if ($conn->connect_error) {
        exit("Error connecting to the DB");
    }

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn->set_charset("utf8mb4");
}

function redirect_to($location) {
    header('Location:' . $location);
}

function is_auth() {
    return isset($_SESSION['userid']);
}

function check_auth() {
    if (!is_auth()) {
        redirect_to("/login.php?logged_in=false");
    }
}
