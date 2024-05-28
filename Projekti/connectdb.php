<?php
$server = "localhost";
$user = "root";
$pass = "";  // Fjalëkalimi është bosh
$dbname = "testdb";
$port = 3307;  // Specifiko portin që po përdor

// Krijo lidhjen
$conn = new mysqli($server, $user, $pass, $dbname, $port);

// Kontrollo lidhjen
if ($conn->connect_error) {
    die("<p class='text-danger text-center'>Connection with Database failed: " . $conn->connect_error . "</p>");
}
?>
