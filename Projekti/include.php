<?php
echo "This is the included file.";
?>

<!-- main.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include and Require Example</title>
</head>
<body>
    <h1>Main File</h1>
    <?php include("include.php"); ?>
    <?php require("include.php"); ?>
</body>
</html>
