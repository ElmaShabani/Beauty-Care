<?php

$dbhost = 'localhost';  
$dbuser = 'root';
$dbpass = '';
$db = "beautycare";


$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if ($conn) {
    echo"You are connected";
}
else{
    echo"Could not connect!";
}

?>
