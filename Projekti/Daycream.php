<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EverGlow Beauty</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Dehydration.css">
    <link rel="stylesheet" href="./Skintips.js">
</head>

<body>
    <header>
        <h1>Day & Night Cream </h1>
        <div id="cart" class="hidden">
            <h2>Shopping Cart</h2>
            <ul id="cart-items">
            </ul>
            <p>Total: $<span id="cart-total">0.00</span></p>
            <label for="payment-method">Select Payment Method:</label>
            <select id="payment-method" name="payment-method">
            <option value="paypal">PayPal</option>
            <option value="clearpay">Clearpay</option>
            <option value="visa"> Visa</option>
            <option value="amex">American Express</option>
            <option value="mastercard">Mastercard</option>
            <option value="maestro">Maestro</option>
            </select><br><br>
            <label for="card-number">Enter Card Number:</label>
            <input type="text" id="card-number" name="card-number">
            <br><br>
            <label for="cvv">Enter CVV:</label>
            <input type="password" id="cvv" name="cvv">
            <br><br>
            <button id="order-now-button" style="background-color: green; color: white;"  onclick="placeOrder()">Order Now</button>
        </div>
        
        <div id="cart-image" onclick="toggleCart()">
            <img src="../img/cart.jpg" alt="Cart" width="70px">
        </div>
  
  
    </header>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const currentHtmlFile = window.location.href.split("/").slice(-1)[0];

            var link = document.querySelector(".sub-box a[href='" + currentHtmlFile + "']");
            link.style.textDecoration = 'underline';
        });
    </script>
    <div class="background-container">
        <div class="image-box">
            <img src="../img/day1.jpg" alt="Foto 1" class="image">
            <p>Capital Soleil UV Age Daily<br>
                SPF50+ Facial Sunscreen<br></p>
            <p>$15.00</p>
            <button class="add-to-cart"
                onclick="addToCart('Capital Soleil UV Age Daily SPF50+ Facial Sunscreen', 15.00)">Add to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/day2.jpg" alt="Foto 2" class="image">
            <p>Neovadiol Phytosculpt Neck and <br>
                Face Contour Cream<br></p>
            <p> $30.40</p>
            <button class="add-to-cart"
                onclick="addToCart('Neovadiol Phytosculpt Neck and Face Contour Cream', 30.40)">Add to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/day6.jpg" alt="Foto 6" class="image">
            <p>Normaderm Anti-Age Resurfacing <br>
                Care Day Cream<br></p>
            <p> $45.00</p>
            <button class="add-to-cart" onclick="addToCart('Normaderm Anti-Age Resurfacing Care Day Cream',45.00)">Add
                to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/day8.jpg" alt="Foto 6" class="image">
            <p>Mineralizing Thermal Spa Water<br>
            </p>
            <p>$50.50</p>
            <button class="add-to-cart" onclick="addToCart('Mineralizing Thermal Spa Water',50.50)">Add to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/day5.jpg" alt=" Foto 5" class="image">
            <p>Normaderm Phytosolution Double <br>
                Correction Daily Care Moisturiser<br> </p>
            <p>$39.90</p>
            <button class="add-to-cart"
                onclick="addToCart('Normaderm Phytosolution Double Correction Daily Care Moisturiser',39.90)">Add to
                Cart</button>
        </div>

        <div class="image-box">
            <img src="../img/day3.jpg" alt="Foto 3" class="image">
            <p>Neovadiol Magistral Day & Night<br>
                Cream<br></p>
            <p>$38.70</p>
            <button class="add-to-cart" onclick="addToCart('Neovadiol Magistral Day & Night Cream', 38.70)">Add to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/day7.jpg" alt="Foto 6" class="image">
            <p>Nutrilogie Intense Day Cream for<br>
                Very Dry Skin<br></p>
            <p>$25.80</p>
            <button class="add-to-cart" onclick="addToCart('Nutrilogie Intense Day Cream for Very Dry Skin',25.80)">Add
                to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/day4.jpg" alt="Foto 4" class="image">
            <p>Neovadiol Perimenopause <br>
                Plumping Day Cream for Dry Skin<br></p>
            <p>$60.00</p>
            <button class="add-to-cart"
                onclick="addToCart('Neovadiol Perimenopause Plumping Day Cream for Dry Skin',60.00)">Add to
                Cart</button>
        </div>
    </div>
    <div class="background-container">
        <div class="image-box">
            <img src="../img/night1.jpg" alt="Foto 1" class="image">
            <p>Liftactiv Collagen Specialist Peptide Night<br>
                Cream with Reservatrol for All Skin Types<br></p>
            <p>$40.40</p>
            <button class="add-to-cart"
                onclick="addToCart('Liftactiv Collagen Specialist Peptide Night Cream with Reservatrol for All Skin Types',40.40)">Add
                to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/night5.jpg" alt="Foto 2" class="image">
            <p>Aqualia Thermal Night Spa Night<br>
                Cream<br></p>
            <p>$30.30</p>
            <button class="add-to-cart" onclick="addToCart('Aqualia Thermal Night Spa Night Cream',30.30)">Add to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/night3.jpg" alt="Foto 6" class="image">
            <p>Minéral 89 72 Hr Hyaluronic Acid Moisture <br>
                Boosting Cream for All Skin Types 50ml<br></p>
            <p>$45.00</p>
            <button class="add-to-cart" onclick="addToCart('Minéral 89 72 Hr Hyaluronic Acid Moisture Boosting Cream for All Skin Types 50ml',45.00)">Add to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/night4.jpg" alt="Foto 6" class="image">
            <p>Neovadiol Rose Platinium Night<br>
                Cream<br></p>
            <p>$48.50</p>
            <button class="add-to-cart" onclick="addToCart('Neovadiol Rose Platinium Night Cream',48.50)">Add to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/night2.jpg" alt=" Foto 5" class="image">
            <p>Neovadiol Perimenopause Revitalizing Night<br>
                Cream<br></p>
            <p>$20.20</p>
            <button class="add-to-cart" onclick="addToCart('Neovadiol Perimenopause Revitalizing Night',20.20)">Add to
                Cart</button>
        </div>

        <div class="image-box">
            <img src="../img/night6.jpg" alt="Foto 3" class="image">
            <p>Idéalia Energising Night<br>
                Cream<br></p>
            <p>$23.50</p>
            <button class="add-to-cart" onclick="addToCart('Idéalia Energising Night Cream',23.50)">Add to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/night7.jpg" alt="Foto 6" class="image">
            <p>Slow Âge Night Cream and Mask<br></p>
            <p>$43.40</p>
            <button class="add-to-cart" onclick="addToCart('Slow Âge Night Cream and Mask',43.40)">Add to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/night8.jpg" alt="Foto 4" class="image">
            <p>Neovadiol Magistral Day & Night<br> Cream<br></p>
            <p>$30.00</p>
            <button class="add-to-cart" onclick="addToCart('Neovadiol Magistral Day & Night Cream',30.00)">Add to
                Cart</button>
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
                <address style="margin-left: 100px; font-size: 20px; font-family:Georgia, 'Times New Roman', Times, serif;">
                    <a id="adresa" href="https://maps.app.goo.gl/scmxnwzCazoUVT8b9">Address: Prishtine</a> </address>
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
             <div class="col text-center"><a id="ClearpayLink" class="site-footer-payments__link" href="https://www.clearpay.co.uk/en-GB" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/2fVeO7f2x78KlbQuhqmuVb/a195d07a55c2bb8e1f595d5b541d4d79/Clearpay.svg"
                    alt="Clearpay" class="site-footer-payments__link__icon"></a></div>
             <div class="col text-center"><a  id="VisaLink" class="site-footer-payments__link" href="https://usa.visa.com/" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/4QTzSyV3E2jIfll4u3GgIW/46acc6659798376dc8bb416454f2baba/Visa.svg"
                    alt="Visa" class="site-footer-payments__link__icon"></a></div>
             <div class="col text-center"><a id="AmexLink" class="site-footer-payments__link" href="https://www.americanexpress.com/" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/1R0NBLVCShxTQNVHNjanE4/c970e9e15ecbb026929000ae3fcce6ae/Amex.svg"
                    alt="Amex" class="site-footer-payments__link__icon"></a></div>
             <div class="col text-center"><a id="MastercardLink" class="site-footer-payments__link" href="https://www.mastercard.us/en-us.php" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/5bs4r6UiioP3Fkj4Qg35o8/5583c0ecc4b6500a1083fd38cfabf6dc/Mastercard.svg"
                    alt="Mastercard" class="site-footer-payments__link__icon"></a></div>
             <div class="col text-center"><a id="MaestroLink" class="site-footer-payments__link" href="https://n26.com/en-eu/maestro-card" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/5IdXqCmgjNCVwZNyssRsdE/702c37ee931258aad2071e063bbd337e/Maestro.svg"
                    alt="Maestro" class="site-footer-payments__link__icon"></a></div>
        </div>
        </div>
    
    </footer>
            <script>
              function shfaqMesazhin() {
              alert('Everglow Beauty Kosova: Where beauty meets excellence, making us the best choice for all your cosmetic needs!');
              } </script>
    
    <script src="forall.js"></script>
</body>

</html>
