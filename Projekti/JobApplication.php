<?php

if (isset($_POST['submitted'])){

$newbgColor=$_POST['bgColor'];


setcookie("bgColor",$newbgColor,time()+3600);

}



if ((!isset($_COOKIE['bgColor']) )){
$bgColor = "Black";

}

else{
$bgColor = $_COOKIE['bgColor'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="JobApplication.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
           
            $('header').hide().fadeIn(1000); 
        });
    </script>
    
    <title>Job Application</title>
</head>
<body bgcolor="<?php echo $bgColor ?> "|>
<?php
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "<b>Gabim:</b> [$errno] $errstr<br>";
    echo "Gabimi ndodhi në skedarin '$errfile', rreshti $errline<br>";
    echo "------------------------------------------------------------<br>";
    return true;
}


set_error_handler("customErrorHandler");

session_start();

if (isset($_POST['submitted'])){
    $newbgColor = $_POST['bgColor'];
    setcookie("bgColor", $newbgColor, time() + 3600);
}

$bgColor = isset($_COOKIE['bgColor']) ? $_COOKIE['bgColor'] : "Black";
?> 
<?php 
try {
    
    if (session_status() !== PHP_SESSION_ACTIVE) {
        throw new Exception("Sesioni nuk mund të fillohet!");
    }
} catch (Exception $e) {
    echo "<b>Përjashtim:</b> " . $e->getMessage() . "<br>";
} ?>
    <header>
        <a href="MainPage.php"><img src="../img/logo.jpg" alt="Your Brand Logo"></a>
        <div class="text-with-shadow" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">EverGlow Beauty</div>
        <nav>
            <ul>
                <li><a href="allformakeup.php">Makeup</a>
                    <ul class="subcategories">
                        <li><a href="facee.php">Face</a></li>
                        <li><a href="eyes.php">Eyes</a></li>
                        <li><a href="lips.php">Lips</a></li>
                        <li><a href="cheeks.php">Cheek</a></li>
                        <li><a href="makeup.php">See All</a></li>
                    </ul></li>
                <li><a href="Face.php">Skin Care</a>
                    <ul class="subcategories">
                        <li><a href="Dehydration.php">Dehydration</a></li>
                        <li><a href="Daycream.php">Day & Night Cream Moisturiser</a></li>
                        <li><a href="Face.php">Face Masks & Cleansers</a></li>
                        <li><a href="Serum.php">Serums & Lip Care</a></li>
    
                    </ul>
                </li>
                <li><a href="Fragrance.php">Fragrance</a>
                    <ul class="subcategories">
                        <li><a href="Women.php">Women</a></li>
                        <li><a href="Men.php">Men</a></li>
                        <li><a href="Gift Sets.php">Gift Sets</a></li>
                        <li><a href="Seeall.php">See All</a></li>  
                    </ul>
                </li>
                <li><a href="allforhair.php">Hair Care</a>
                    <ul class="subcategories">
                        <li><a href="treatments.php">Treatments</a></li>
                        <li><a href="styling.php">Styling</a></li>
                        <li><a href="gifts.php">Gifts</a></li>
                        <li><a href="seall.php">See All</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    
<div class="form">
<form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method ="POST" id="jobApplicationForm">
  
        <input type="text" id="readonlyInput" name="readonlyInput" value=" APPLY FOR A JOB BELOW!" readonly style="width: 100%; background-color: #f5dfc9;">
        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" required style="width: 100%;" form="jobApplicationForm"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required style="width: 100%;" placeholder="@gmail.com"><br>

        <label>Preferred Contact Method:</label> <br>
        <label for="contactEmail">Email
        <input type="radio" id="contactEmail" name="contactMethod" value="email" checked></label><br>
        <label for="contactPhone">Phone
        <input type="radio" id="contactPhone" name="contactMethod" value="phone"></label> <br>

        <label for="age">Enter your age (between 18 and 65):</label><br>
        <input type="text" id="age" name="age" min="18" max="65"><br>
        

        <label for="date">Date of Birth:</label><br>
        <input type="date" id="date" name="date" required style="width: 100%;"><br>

        <label for="phoneNumber">Phone Number:</label><br>
        <input type="tel" id="phoneNumber" name="phoneNumber" pattern="[0-9]{10}" placeholder="Enter 10-digit phone number" required width="100%"><br>
        <label>Skills:</label><br>
        <label for="managingSkills">Managing
        <input type="checkbox" id="makeupSkills" name="skills" value="managing"></label><br>
        <label for="leadingSkills">Leading
        <input type="checkbox" id="leadingSkills" name="skills" value="leading"></label><br>
        <label for="advisingSkills">Advising
        <input type="checkbox" id="advisingSkills" name="skills" value="advising"></label><br>
        <label for="accuracySkills">Accuracy and Speed
        <input type="checkbox" id="accuracySkills" name="skills" value="accuracy"></label><br>
        <br>
        <label for="position"> Select Position:</label> <br>
      <input  list="positions" id="position" name="position" required style="text-align: center;">
        <datalist id="positions">
        <option value="Cashier">
        <option value="Beauty Advisor" selected>
        <option value="Store Manager">
        <option value="Sales Leader">
        </datalist> 
      <br>
        <label for="coverLetter">Cover Letter:</label>
      <textarea id="coverLetter" name="coverLetter" rows="4" required ></textarea>
      <br>
    
<input type ="hidden" name="submitted" value="true"></br>

        <button type="button" onclick="validateForm()" style="width: 100%;">Submit Application</button>
    </form>
 
</div>
<br>

    <footer>
        <div class="container d-flex footer-container">
            <div class="left">
                <h2>Everglow Beauty</h2>
                <span style="font-size: 20px; cursor: pointer;" onclick="shfaqMesazhin()">Everglow Beauty Kosova</span>
            </div>
            <div class="quick-links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="MainPage.php">Home</a></li>
                    <li><a href="OurStory.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a>
                    <li><div id="currentDateElement"></div>
                        <script>
    
                            const currentDate = new Date();
                            const currentDateElement = document.getElementById('currentDateElement');
                            if (currentDateElement) {
                                currentDateElement.textContent = `Current Date: ${currentDate.toLocaleDateString()} - Current time: ${currentDate.toLocaleTimeString()}`;
                            }
                        </script>
                    </li>
                </ul>
            </div>
            <div class="get-in-touch">
                <h2>Get in Touch</h2>
                <address
                    style="margin-left: 100px; font-size: 20px; font-family:Georgia, 'Times New Roman', Times, serif;">
                    <a href="https://maps.app.goo.gl/scmxnwzCazoUVT8b9">Address: Ferizaj</a> </address>
                <p>Email: <mark style="background-color: white;"> <a
                            href="mailto:everglowbeauty@gmail.com">everglowbeauty@gmail.com</a> </mark></p>
                <p>Phone: <mark style="background-color: white;">+383 48 555 111</mark> </p>
            </div>
        </div>
        <div class="container-fluid site-footer-payments">
            <aside>
                <h2>Payment methods: </h2>
            </aside>
            <div class="row">
              <div class="col text-center">
            <a id="payPallink" class="site-footer-payments__link" href="https://www.paypal.com/" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/6rDEb4sJOBkiIga3rkaSfA/b705c283f12f64d22365f9d168d2e9be/PayPal.svg"
                    alt="PayPal" class="site-footer-payments__link__icon"></a></div>
             <div id="ClearpayLink" class="col text-center"><a class="site-footer-payments__link" href="https://www.clearpay.co.uk/en-GB" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/2fVeO7f2x78KlbQuhqmuVb/a195d07a55c2bb8e1f595d5b541d4d79/Clearpay.svg"
                    alt="Clearpay" class="site-footer-payments__link__icon"></a></div>
             <div id="VisaLink" class="col text-center"><a class="site-footer-payments__link" href="https://usa.visa.com/" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/4QTzSyV3E2jIfll4u3GgIW/46acc6659798376dc8bb416454f2baba/Visa.svg"
                    alt="Visa" class="site-footer-payments__link__icon"></a></div>
             <div id="AmexLink" class="col text-center"><a class="site-footer-payments__link" href="https://www.americanexpress.com/" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/1R0NBLVCShxTQNVHNjanE4/c970e9e15ecbb026929000ae3fcce6ae/Amex.svg"
                    alt="Amex" class="site-footer-payments__link__icon"></a></div>
             <div id="MastercardLink" class="col text-center"><a class="site-footer-payments__link" href="https://www.mastercard.us/en-us.php" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/5bs4r6UiioP3Fkj4Qg35o8/5583c0ecc4b6500a1083fd38cfabf6dc/Mastercard.svg"
                    alt="Mastercard" class="site-footer-payments__link__icon"></a></div>
             <div id="MaestroLink" class="col text-center"><a class="site-footer-payments__link" href="https://n26.com/en-eu/maestro-card" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/5IdXqCmgjNCVwZNyssRsdE/702c37ee931258aad2071e063bbd337e/Maestro.svg"
                    alt="Maestro" class="site-footer-payments__link__icon"></a></div>
        </div>
        </div>
    
    </footer> 
   
     
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function(){
          
            $('.subcategories').hide();
    
            
            $('nav li').hover(
                function(){
                    $(this).find('.subcategories').stop(true, true).slideDown();
                },
                function(){
                    $(this).find('.subcategories').stop(true, true).slideUp();
                }
            );
        });
    </script>
  
    <script>
        function validateForm() {
    try {
        var fullName = document.getElementById('fullName').value;
        if (fullName === '') throw new Error('Ju lutemi plotësoni emrin e plotë.');
        var email = document.getElementById('email').value;
        if (email === '') throw new Error('Emaili është i detyrueshëm.');
        var age = document.getElementById('age').value;
        if (isNaN(age) || age < 18 || age > 65) {
            throw new RangeError('Mosha duhet të jetë ndërmjet 18 dhe 65 vjeç.');
        }
        alert('Aplikimi u dërgua me sukses!');
        window.location.href = "MainPage.php";
    } catch (error) {
        alert('Gabim: ' + error.message);
    }
}
        function shfaqMesazhin() {
    alert('Everglow Beauty Kosova: Where beauty meets excellence, making us the best choice for all your cosmetic needs!');
    }
       
    </script>
    
</body>
</html>