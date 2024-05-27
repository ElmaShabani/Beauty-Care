<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beauty_care";

// Krijoni lidhjen
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrolloni lidhjen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
