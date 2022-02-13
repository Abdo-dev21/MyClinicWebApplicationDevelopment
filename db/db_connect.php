<?php

/* Database connection start */
$servername = "localhost";
$username = "S4685979";
$password = "1234562pass";
$dbname = "S4685979";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
