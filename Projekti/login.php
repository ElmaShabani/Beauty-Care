
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
    <title>Beauty Website Login</title>
    <!--<script>
        

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
    </script> -->
    <style>
      body {
    font-family: 'Times New Roman', Times, serif;
    margin: 0;
    padding: 0;
   
   
          
            /* Nëse nuk ka cookie për ngjyrën e sfondit, përdor ngjyrën e bardhë si default */
        
  /*  background: radial-gradient(ellipse at center, rgba(236, 206, 176, 0.5)  10% , rgb(101, 45, 17) 100% ); */
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
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Specifikoni SMTP serverin për Gmail
    $mail->SMTPAuth = true;
    $mail->Username = 'your-email@gmail.com'; // Shkruani emailin tuaj
    $mail->Password = 'your-password'; // Shkruani fjalëkalimin tuaj
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    //Recipients
    $mail->setFrom('your-email@gmail.com', 'Mailer');
    $mail->addAddress('recipient@example.com', 'Joe User');     // Shtoni marrësin

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
    <title>Beauty Website Login</title>
    <style>
        /* Stilet tuaja këtu */
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="on">
        <h2>Log Into EverGlow Beauty</h2>
        <input type="text" id="username" name="username" placeholder="Username..." required>
        <input type="password" id="password" name="password" placeholder="Password..." required>
        <button type="submit" style="width: 200px; border: 1px solid black;">Log In</button>
        <p>or</p>
        <div class="social-login">
           <a href="https://www.facebook.com/">
               <button type="button" style="border: 1px solid black;">
                   Log In with <img src="../img/fblogo.png" alt="Facebook Icon" width="20">
               </button>
           </a>
           <a href="https://www.instagram.com/">
               <button type="button" style="border: 1px solid black;">
                   Log In with <img src="../img/instalogo.png" alt="Instagram Icon" width="20">
               </button>
           </a>
        </div>
    </form>
</body>
</html>
