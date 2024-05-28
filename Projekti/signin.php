<?php 
include ("connectdb.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        html, body {
            height: 100%; margin: 0; display: flex; align-items: center; justify-content: center;
        }
        .container {
            width: 500px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="bg-light shadow rounded border" method="post">
            <div class="p-5">
                <div>
                    <label for="validationDefaultUsername" class="form-label">First name:</label>
                    <input type="text" class="form-control" id="validationDefaultUsername" name="firstname" placeholder="First name" required>
                </div>
                <div>
                    <label for="validationDefault01" class="form-label">Last name:</label>
                    <input type="text" class="form-control" id="validationDefault01" name="lastname" placeholder="Last name" required>
                </div>
                <div>
                    <label for="validationDefault02" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="validationDefault02" name="username" placeholder="Set Username" required>
                </div>
                <div>
                    <label for="validationDefault03" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="validationDefault03" name="password" placeholder="Set Password" required>
                </div>
                <div class="mt-4 d-flex align-items-center">
                    <button class="btn btn-success mx-3" type="submit" name="action" value="Signup">Sign Up</button>
                    <button class="btn btn-info mx-3" type="submit" name="action" value="Update">Update</button>
                    <button class="btn btn-danger mx-3" type="submit" name="action" value="Delete">Delete</button>
                    
                </div>
            </div>
        </form>
        <?php
        include("connectdb.php");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $action = $_POST["action"];
            
            
           
            switch ($action) {
                case "Signup":
                    $sql = "INSERT INTO users (firstname, lastname, username, password) VALUES ('$firstname', '$lastname', '$username', '$password')";
                    break;
                case "Update":
                    $sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', password='$password' WHERE username='$username'";
                    break;
                case "Delete":
                    $sql = "DELETE FROM users WHERE username='$username'";
                    break;
                default:
                    $sql = false;
            }

            if ($sql && mysqli_query($conn, $sql)) {
                echo "<p class='text-center text-success p-3'>" . $action . " completed successfully.</p>";
            } else {
                echo "<p class='text-center text-danger p-3'>Error: " . $action . " failed. " . mysqli_error($conn) . "</p>";
            }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
