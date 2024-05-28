<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
    <title>Beauty Website Login</title>
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
            background-color: white;
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
        input, button {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border-radius: 4px;
            border: 1px solid black;
        }
        button {
            background-color: white;
            color: black;
            cursor: pointer;
        }
        button:hover {
            background-color: rgb(26, 159, 68);
        }
        .social-login button {
            margin: 5px;
        }
        a {
            text-decoration: none;
        }
    </style>
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
                window.location.href = "MainPage.php";  // Adjust if necessary
            } else {
                alert("Invalid username or password. Please check your input.");
            }
        }
    </script>
</head>
<body>
    <form action="/your-login-endpoint" method="post" autocomplete="on" onsubmit="login(event)">
        <h2>Log Into EverGlow Beauty</h2>
        <input type="text" id="username" name="username" placeholder="Username..." required>
        <input type="password" id="password"name="password" placeholder="Password..." required>
        <button type="submit">Log In</button>
        <p>or</p>
        <a href="signin.php">
            <button type="button">Sign Up</button>
        </a>
    </form>
</body>
</html>