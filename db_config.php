<?php
$hostname = "localhost"; // Change this to your database host
$username = "root";      // Change this to your database username
$password = "";          // Change this to your database password
$database = "school_db"; // Change this to your database name

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
