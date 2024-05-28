<?php
$servername = "localhost"; // ose përdorni adresën e serverit tuaj
$username = "root"; // zëvendësoni me emrin tuaj të përdoruesit për MySQL
$password = ""; // zëvendësoni me fjalëkalimin tuaj për MySQL
$dbname = "everglow_beauty";

// Krijo lidhjen me bazën e të dhënave
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrollo lidhjen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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
