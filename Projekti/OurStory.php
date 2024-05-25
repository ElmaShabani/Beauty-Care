<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="OurStory.css">
    <title>About EverGlow Beauty</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('header').hide().fadeIn(1000); 

            // Demonstrimi i modifikimit të vargut
            let numbers = [1, 2, 3, 4, 5];
            console.log("Before modifying array:", numbers);
            modifyArray(numbers);
            console.log("After modifying array:", numbers);

            // Demonstrimi i modifikimit të objektit
            let myObject = { value: "Original value" };
            console.log("Before modifying object:", myObject);
            modifyObject(myObject);
            console.log("After modifying object:", myObject);

            // Modifikimit të stringut permes ref
            let myString = { value: "hello" };
            console.log("Before modifying string:", myString);
            let wrappedFunction = wrapFunction(modifyString);
            wrappedFunction(myString);
            console.log("After modifying string:", myString);
        });

        // Funksioni që modifikon nje varg permes ref
        function modifyArray(arr) {
            for (let i = 0; i < arr.length; i++) {
                arr[i] = arr[i] * 2;
            }
        }

        // Funksioni qe modifikon nje objekt permes ref
        function modifyObject(obj) {
            obj.value = "Modified value";
        }

        // Funksioni qe modifikon nje string permes references duke perdorur nje metode te mbeshtjellur
        function wrapFunction(referenceFunction) {
            return function(referenceValue) {
                referenceFunction(referenceValue);
            }
        }

        function modifyString(str) {
            str.value = str.value.toUpperCase();
        }
    </script>
</head>
<body>
    <header>
        <a href="MainPage.php"><img src="../img/logo.jpg" alt="Your Brand Logo"></a>
        <div class="text-with-shadow" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">EverGlow Beauty</div>
        <nav>
            <ul>
                <li><a href="allformakeup.php">Makeup</a></li>
                <li><a href="Face.php">Skin Care</a></li>
                <li><a href="Fragrance.php">Fragrance</a></li>
                <li><a href="allforhair.php">Hair Care</a></li>
            </ul>
        </nav>
    </header>

    <div class="third-container" style="font-family: 'Times New Roman', Times, serif;">
        <div class="quote-container">
            <blockquote>
               <Article> <h1 style="color: peru;">About Us</h1></Article>
               <blockquote> EverGlow Beauty is breaking down unrealistic <br>standards of perfection. <br>​

                    This is makeup made to feel good in, without <br>hiding what makes you unique—because EverGlow <br> Beauty is not about being someone else, but <br>being who you are.
            </blockquote>
        </div>
        <div class="image-container" style="float: right;">
            <img src="../img/about-video-tout-desktop_33e8add7-dcb4-42d2-aa7c-3bb7eb55badd_720x.webp" alt="Image2" class="square-image">
        </div>
    </div>
    <div class="fourth-container" style="font-family: 'Times New Roman', Times, serif;">
        <div class="image-container" style="float: left;">
            <img src="../img/Kendall-X-Kylie-Cosmetics-2020-campaign-photos-12.jpg" alt="Image2" class="round-image">
        </div>
        <div class="quote-container">
            <article><h1 style="color: peru;">A note from <i><b><mark>US</mark></b></i></h1></article>
                <!--<p>​We think EverGlow Beauty can be more than a beauty brand it <br> can make an impact. I want us all to stop comparing ourselves to <br>each other and just start embracing our own uniqueness.</p>-->
                <p>Click the button below!</p>
            <audio controls>
                <source src="../img/ever.mp3" type="audio/mp3" style="display:none;" >
            </audio> 
        </div>
     </div>

     <blockquote style="font-size: 2.5em; background-color: #fff; margin-bottom: 150px;" >
        <h1 style="font-family:'Times New Roman', Times, serif; text-align:center;" class="custom-font">“Being <i><b>unique</b></i> is about being <br> comfortable with yourself. We’ve  <br>stopped trying to be perfect. We <br>just want to be us.”</h1>
    </blockquote>

    <div class="third-container" style="font-family: 'Times New Roman', Times, serif; background-color:rgba(247, 230, 203, 0.919);">
        <div class="quote-container">
            <article><h1 style="color: peru;">Our Mission</h1></article>
            <blockquote>We are on a mission to help everyone celebrate their <br> individuality by redefining what beautiful means. We want <br> to promote self-acceptance and give people the tools they <br> need to feel less alone in the world. <br> ​

                Our vision is to create a safe, welcoming space in beauty <br>—and beyond—that supports mental well-being across <br> age, gender identity, sexual orientation, race, cultural <br> background, physical or mental ability, and perspective. <br>​
                
                We believe in the beauty of imperfections. <br>
                We nurture a caring, respectful community. <br>​
                We create meaningful connections and relationships. <br>​
                We champion authenticity and positivity. <br>
                ​We lead with transparency to build trust. <br>
                ​We believe there is power in being vulnerable.
            </blockquote>
        </div>
        <div class="image-container" style="float: right;">
            <img src="../img/gigi-hadid-visited-alli-simpsons-radio-show-02.jpg" alt="Image4" class="square-image">
        </div>
    </div>
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
                    <a href="https://maps.app.goo.gl/scmxnwzCazoUVT8b9">Address: Prishtine</a> </address>
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
    <script>
        function shfaqMesazhin() {
            alert('Everglow Beauty Kosova: Where beauty meets excellence, making us the best choice for all your cosmetic needs!');
        }
    </script>
</body>
</html>
