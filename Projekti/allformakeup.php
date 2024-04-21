<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Hederi i faqes -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makeup</title>
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        // Skripti jQuery
        $(document).ready(function() {
            $("#shtype").click(function(){
                $("#ann").css("color","blue").slideUp(3200);
                $("#text").text("Lips Section Sale at EverGlow Beauty.  ");
                $("#text").append("Go check it out!!!");
            });
        });
    </script>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
</head>
<body>
    <!-- Krijimi i headerit -->
    <header>
        <a href="MainPage.php"><img src="../img/logo.jpg" alt="Your Brand Logo"> <a href="MainPage.php"></a> 
        <h3 style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><div class="text-with-shadow"> EverGlow Beauty</h3></div>
        <div class="container3" style="font-family: Georgia, 'Times New Roman', Times, serif;" >
            <!-- Krijimi i navigacionit -->
            <div class="middle-box d-flex justify-content-around">
                <div class="sub-box">
                    <a href="facee.php" class="btn btn-light" >FACE</a>
                </div>
                <div class="sub-box">
                    <a href="eyes.php" class="btn btn-light">EYES</a>
                </div>
                <div class="sub-box">
                    <a href="lips.php" class="btn btn-light">LIPS</a>
                </div>
                <div class="sub-box">
                    <a href="cheeks.php" class="btn btn-light">CHEEK</a>
                </div>
                <div class="sub-box">
                    <a href="makeup.php" class="btn btn-light">SEE ALL</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Video sekcioni -->
    <section id="video-section">
        <video width="100%" height="100%" autoplay loop muted >
            <source src="../img/maakeup.mp4" type="video/mp4" autoplay>
        </video>
    </section>

    <!-- Sektori i produkteve -->
    <div class="fourth-container" style="font-family:Georgia, 'Times New Roman', Times, serif ;">
        <!-- Imazhi i fundit dhe citati -->
        <div class="image-container" style="float: left; margin-right: 20px;">
            <img src="../img/pretty.jpg" alt="Image2" class="round-image img-fluid">
        </div>
        <div class="quote-container">
            <blockquote>
                <!-- Citati dhe informacione të tjera -->
                <!-- Shtimi i kodit PHP për renditjen e produkteve -->
              
                <p id="ann">Special Announcement</p>
                <p id="text"></p>
                <button id="shtype">Click me!!</button>
            </blockquote>
        </div>
    </div>

    <!-- Footeri -->
    <footer>
        <!-- Struktura e footerit -->
        <div class="container d-flex footer-container">
            <!-- Sektori i majtë i footerit -->
            <div class="left">
                <h2>Everglow Beauty</h2>
                <span style="font-size: 20px; cursor: pointer;" onclick="shfaqMesazhin()">Everglow Beauty Kosova</span>
            </div>
            <!-- Sektori i lidhjeve të shpejta -->
            <div class="quick-links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="MainPage.php">Home</a></li>
                    <li><a href="OurStory.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a>
                    <li>
                        <div id="currentDateElement"></div>
                        <script>
                            // Skripti për të shfaqur datën aktuale
                            const currentDate = new Date();
                            const currentDateElement = document.getElementById('currentDateElement');
                            if (currentDateElement) {
                                currentDateElement.textContent = `Current Date: ${currentDate.toLocaleDateString()} - Current time: ${currentDate.toLocaleTimeString()}`;
                            }
                        </script>
                    </li>
                </ul>
            </div>
            <!-- Sektori për kontakt -->
            <div class="get-in-touch">
                <h2>Get in Touch</h2>
                <address style="margin-left: 100px; font-size: 20px; font-family:Georgia, 'Times New Roman', Times, serif;">
                    <a id="adresa" href="https://maps.app.goo.gl/scmxnwzCazoUVT8b9">Address: Prishtine</a> </address>
                <p>Email: <mark style="background-color: white;"> <a href="mailto:everglowbeauty@gmail.com">everglowbeauty@gmail.com</a> </mark></p>
                <p>Phone: <mark style="background-color: white;">+383 48 555 111</mark> </p>
            </div>
        </div>
        <!-- Sektori për metodat e pagesës -->
        <div class="container-fluid site-footer-payments">
            <aside>
                <h2>Payment methods: </h2>
            </aside>
            <!-- Rreshti për ikonat e metodave të pagesës -->
            <div class="row">
                <!-- Ikona për PayPal -->
                <div class="col text-center">
                    <a id="payPallink" class="site-footer-payments__link" href="https://www.paypal.com/" style="pointer-events: auto;">
                        <img src="https://images.ctfassets.net/eoaaqxyywn6o/6rDEb4sJOBkiIga3rkaSfA/b705c283f12f64d22365f9d168d2e9be/PayPal.svg"
                            alt="PayPal" class="site-footer-payments__link__icon"></a>
                </div>
                <!-- Shtoni ikonat e metodave të tjera të pagesës këtu -->
            </div>
        </div>
    </footer>

    <!-- Skripti për të shfaqur mesazhin -->
    <script>
        function shfaqMesazhin() {
            alert('Everglow Beauty Kosova: Where beauty meets excellence, making us the best choice for all your cosmetic needs!');
        }
    </script>

    <!-- Fundi i dokumentit HTML -->
</body>
</html>


