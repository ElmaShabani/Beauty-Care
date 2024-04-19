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
</head>

<body>
    <header>
        <h1>Face Masks & Cleansers</h1>
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
    <div class="background-container center-container">

        <div class="image-box">
            <img src="../img/face2.jpg" alt="Foto 2" class="image">
            <p>Detox Clarifying Charcoal Mask</p>
            <p>$25.00</p>
            <button class="add-to-cart" onclick="addToCart('Detox Clarifying Charcoal Mask',25.00)">Add to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/face3.jpg" alt="Foto 6" class="image">
            <p>Minéral 89 Fortifying Recovery Mask</p>
            <p>$15.50</p>
            <button class="add-to-cart" onclick="addToCart('Minéral 89 Fortifying Recovery Mask',15.50)">Add to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/face4.jpg" alt="Foto 6" class="image">
            <p>Double Glow Peel Face Mask</p>
            <p>$30.00</p>
            <button class="add-to-cart" onclick="addToCart('Double Glow Peel Face Mask',30.00)">Add to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/face6.jpg" alt="Foto 3" class="image">
            <p>Liftactiv Specialist Hyalu Face Mask</p>
            <p>$27.50</p>
            <button class="add-to-cart" onclick="addToCart('Liftactiv Specialist Hyalu Face Mask',27.50)">Add to
                Cart</button>
        </div>
    </div>
    <div class="background-container center-container">
        <div class="image-box">
            <img src="../img/clean1.jpg" alt="Foto 1" class="image">
            <p>Normaderm 3-In-1 Cleanser</p>
            <p>$15.00</p>
            <button class="add-to-cart" onclick="addToCart('Normaderm 3-In-1 Cleanser',15.00)">Add to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/clean2.jpg" alt=" Foto 5" class="image">
            <p>Pureté Thermale Waterproof <br>
                Eye Make-up Remover </p>
            <p>$12.50</p>
            <button class="add-to-cart" onclick="addToCart('Pureté Thermale Waterproof Eye Make-up Remover',12.50)">Add
                to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/clean3.jpg" alt=" Foto 5" class="image">
            <p>Mineral Micellar Water</p>
            <p>$11.20</p>
            <button class="add-to-cart" onclick="addToCart('Mineral Micellar Water',11.20)">Add to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/clean4.jpg" alt=" Foto 5" class="image">
            <p>Normaderm Phytosolution Mattifying<br>
                Clay to Foam Cleanser</p>
            <p>$20.80</p>
            <button class="add-to-cart" onclick="addToCart('Normaderm Phytosolution Mattifying',20.80)">Add to
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
