<?php
include("connectdb.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $feedback = $_POST["feedback"];

    $stmt = $conn->prepare("UPDATE feedback SET name=?, feedback=? WHERE id=?");
    if ($stmt === false) {
        die("Prepare failed: " . htmlspecialchars($conn->error));
    }
    $stmt->bind_param("ssi", $name, $feedback, $id);
    $stmt->execute();
    if ($stmt->error) {
        die("Execute failed: " . htmlspecialchars($stmt->error));
    } else {
        echo "Feedback updated successfully!";
    }
    $stmt->close();
}
?>



