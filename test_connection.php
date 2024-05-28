<?php
// Aktivizo raportimin e gabimeve
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Parametrat e lidhjes
$servername = "127.0.0.1"; // Përdorni 127.0.0.1 në vend të localhost për të siguruar përdorimin e IPv4
$username = "root"; // Përdoruesi root i MySQL
$password = ""; // Lëre bosh nëse nuk ka fjalëkalim
$dbname = "Venesa"; // Emri i bazës së të dhënave
$port = 3310; // Porti ku MySQL po dëgjon

// Krijo lidhjen
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Kontrollo lidhjen
if ($conn->connect_error) {
    die("Lidhja dështoi: " . $conn->connect_error);
}
echo "Lidhja u krye me sukses<br>";

// Krijo tabelat
$tables = [
    "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )",
    "CREATE TABLE IF NOT EXISTS products (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        description TEXT,
        price DECIMAL(10, 2) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )"
];

foreach ($tables as $sql) {
    if ($conn->query($sql) === TRUE) {
        echo "Tabela u krijua me sukses<br>";
    } else {
        echo "Gabim gjatë krijimit të tabelës: " . $conn->error . "<br>";
    }
}

// Mbyll lidhjen
$conn->close();
?>
