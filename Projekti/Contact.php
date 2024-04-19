
<DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
        <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
        <link rel="stylesheet" href="contact.css">
       
        <style>
          body {
                       background-image: url('../img/projekti.img.jpg');
                       background-attachment: fixed;
                       background-size: cover;    
                       background-position: center;
                       background-repeat: no-repeat;
                       background-origin: content-box;
                       background-attachment: fixed;
                       margin: 0; 
                       height: 100vh;
                       width: 100vw; 
                       display: flex; 
                       align-items: center;
                       justify-content: center; 
          }
          input, textarea, button{
            width: 100%;
          }
      </style>
          
    </head>
    <body>
                <div class="footer-container"></div>
              <div class="contact-form-container">
              
                  <h2>Contact Us</h2> 
                    <form id="contactForm">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
              
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <keygen name="user_key" challenge="random_string"> 
        
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea> 
        

                <button type="button" onclick="submitForm()">Submit</button>
            </form>
        </div>
        </div>
        <?php
    $user = "Admin";
    setcookie("user", $user , time() + 3600); // $_COOKIE["user" => "Admin"]

    //printimi
    //superglobals => vargje asociative (key => value) , $_SERVER , $_POST, $_GET, $_COOKIE, $_SESSION
    if(isset($_COOKIE["user"])){
        echo $_COOKIE["user"];
        echo "<br><br>";
        print_r($_COOKIE);
    }
  
    //setcookie("user" , "" , time() - 10000);

    //ruajtja e cookie ne varg

    setcookie("cookie[tre]" , "Cookie3");
    setcookie("cookie[dy]" , "Cookie2");
    setcookie("cookie[nje]" , "Cookie1");

    //vlerat per cookie shfaqen vetem pasi faqja eshte bere refresh
    if(isset($_COOKIE['cookie'])){
        foreach($_COOKIE['cookie'] as $name => $value){
            $name = htmlspecialchars($name);
            $value = htmlspecialchars($value);
            echo "$name : $value <br> <br>";
        }
    }
?>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script>
    function submitForm(){
    let nameInput = document.getElementById('name');
if (nameInput.value.length === 0) {
    alert('Please enter your name.');
}

let emailInput = document.getElementById('email');
if (emailInput.value.includes('@')) {
    console.log('Valid email address.');
} else {
    alert('Invalid email address.');
}
let messageInput = document.getElementById('message');
let messageLength = messageInput.value.length;
switch (true) {
    case messageLength < 10:
        alert('Message is too short.');
        break;
    case messageLength >= 10 && messageLength < 50:
       console.log('Message length is okay.');
        break;
    default:
      alert('Message is too long.');
}
    }
   </script>
    </body>
     <html>
    
    