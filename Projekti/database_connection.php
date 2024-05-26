<?php

$dbhost = '%';  
$dbuser = 'elona';
$dbpass = '';
$db = "elona";


$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

if (! $conn) {
    die('Lidhja deshtoi: ' .mysqli_connect_error());
}

?>
