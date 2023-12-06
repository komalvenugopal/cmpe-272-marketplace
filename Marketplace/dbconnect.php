<?php
$dbname = "l1l2o72t0llwx0dw";
$username = "i2hr9b5c6diny2a6";
$password = "ntkcy1s4hzo89wmr";
$servername = "exbodcemtop76rnz.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

// mysql://i2hr9b5c6diny2a6:ntkcy1s4hzo89wmr@:3306/l1l2o72t0llwx0dw