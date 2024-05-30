<?php
$server = "localhost";
$user = "root";
$pass = "";  // Fjalëkalimi është bosh
$dbname = "testdb";
$port = 3307;  

$conn = new mysqli($server, $user, $pass, $dbname, $port);

// Kontrollo lidhjen
if ($conn->connect_error) {
    die("<p class='text-danger text-center'>Connection with Database failed: " . $conn->connect_error . "</p>");
}



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $feedback = htmlspecialchars($_POST['feedback']);
    
    $stmt = $conn->prepare("INSERT INTO feedback (name, feedback) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $feedback);
    if ($stmt->execute()) {
        echo "Thank you, $name! Your feedback has been received.";
    } else {
        echo "An error occurred. Please try again.";
    }
    $stmt->close();
}

$conn->close();
?>

