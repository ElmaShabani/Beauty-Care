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



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $feedback = htmlspecialchars($_POST['feedback']);
    
    // Përgatit deklaratën për të futur të dhënat në bazën e të dhënave
    $stmt = $conn->prepare("INSERT INTO feedback (name, feedback) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $feedback);

    // Ekzekuto deklaratën dhe kontrollo nëse është ekzekutuar me sukses
    if ($stmt->execute()) {
        echo "Thank you, $name! Your feedback has been received.";
    } else {
        echo "An error occurred. Please try again.";
    }

    // Mbyll deklaratën
    $stmt->close();
}

// Mbyll lidhjen me bazën e të dhënave
$conn->close();
?>