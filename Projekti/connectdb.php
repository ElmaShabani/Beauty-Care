<?php
$server = "localhost";
$user = "root";
$pass = "";  
$dbname = "testdb";
$port = 3307;  

$conn = new mysqli($server, $user, $pass, $dbname, $port);

if ($conn->connect_error) {
    die("<p class='text-danger text-center'>Connection with Database failed: " . $conn->connect_error . "</p>");
}

?>
