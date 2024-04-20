<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
    <title>Beauty Website Login</title>
    <script>
        

        function validateUsername(username) {
            return username.length >= 6;
        }

        function validatePassword(password) {
            return password.length >= 6;
        }

        function login(event) {
            event.preventDefault();

            var usernameInput = document.getElementById("username").value;
            var passwordInput = document.getElementById("password").value;

            if (usernameInput && passwordInput && validateUsername(usernameInput) && validatePassword(passwordInput)) {
                window.location.href = "MainPage.php";
            } else {
                alert("Invalid username or password. Please check your input.");
            }
        }
    </script>
    <style>
      body {
    font-family: 'Times New Roman', Times, serif;
    margin: 0;
    padding: 0;
    background: radial-gradient(ellipse at center, rgba(236, 206, 176, 0.5)  10% , rgb(101, 45, 17) 100% );
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    background-size: cover;
    background-position: center;
    
   
   }

     
        form {
            margin-top: 200px;
            background-color:white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
           
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border-radius: 4px;
            border: 1px solid black;
        }

        button {
            background-color:white;
            color: black;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: rgb(26, 159, 68) ;
        }

        .social-login {
            margin-top: 20px;
        }

        .social-login button {
            margin: 5px;
        }
       
    </style>
</head>
<body>
    
    <form action="/your-login-endpoint" method="post" autocomplete="on" onsubmit="login(event)">
        <h2>Log Into EverGlow Beauty</h2>
        
        <input type="text" id="username" name="username" placeholder="Username..." required>
        <input type="password" id="password" name="password"  placeholder="Password..." required>
        <input type="text" id="email" name="email"  placeholder="Email..." required>
        <input type="text" id="tel" name="teli"  placeholder="Tel" required>

        <button type="submit" style="width: 200px; border: 1px solid black;">Log In</button>
        <p>or</p>
        <div class="social-login" >
           <a href="https://www.facebook.com/"> <button type="button" style="border: 1px solid black;">
               Log In with
                <img src="../img/fblogo.png" alt="Facebook Icon" width="20">
            </button>
            </a>
           <a href="https://www.instagram.com/"> <button type="button" style="border: 1px solid black;">
               Log In with
                <img src="../img/instalogo.png" alt="Instagram Icon" width="20">
            </button></a>
        </div>
    </form>

<!-- QETU JA FILLON REGEXI: -->
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];

    $username_regex = '/^[a-zA-Z0-9_]{3,20}$/'; 
    $password_regex = '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/'; 
    $email_regex = '/^\S+@\S+\.\S+$/'; 
    $tel_regex = '/^\d{9}$/'; 

    if (!preg_match($username_regex, $username)) {
        echo "Invalid username format. Username must be alphanumeric and between 3 to 20 characters.";
    }

    if (!preg_match($password_regex, $password)) {
        echo "Invalid password format. Password must be at least 8 characters long and contain at least one letter and one number.";
    }

    if (!preg_match($email_regex, $email)) {
        echo "Invalid email format.";
    }

    if (!preg_match($tel_regex, $tel)) {
        echo "Invalid telephone number format. Telephone number must be 9 digits long.";
    }

}
?>

    
</body>
</html>