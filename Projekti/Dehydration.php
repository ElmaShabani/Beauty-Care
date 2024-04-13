<?php
// Deklarimi i variablave per produktet
$products = [
    ["name" => "Neovadiol Multi-Corrective Eye and Lip Care for Menopause 15ml", "price" => 20.00],
    ["name" => "Aqualia Thermal Gel Moisturising Day Cream", "price" => 22.40],
    ["name" => "Minéral 89 72 Hr Hyaluronic Acid Moisture Boosting Cream for All Skin Types 50ml", "price" => 34.50],
    ["name" => "Aqualia Thermal Rich Moisturising Day Cream", "price" => 27.70],
    ["name" => "Aqualia Thermal Light Moisturising Day Cream","price" => 45.50],
    ["name" => "Aqualia Thermal Night Spa Night Cream", "price" => 30.80],
    ["name" => "Aqualia Thermal Awakening Eye Balm", "price" => 24.90],
    ["name" => "Aqualia Thermal Rehydrating Serum", "price" => 18.80],
];

// Funksioni per te shtuar produktet ne cart
function addToCart($productName, $productPrice) {
    // Krijimi i një sesioni nese nuk ekziston
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    // Krijimi i nje array per produktet ne cart ne sesion
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    // Shtimi i produktit ne shporte
    $_SESSION['cart'][] = ["name" => $productName, "price" => $productPrice];
}

// Shfaqja e produkteve ne cart
function displayCart() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            echo "<li>{$item['name']} - $ {$item['price']}</li>";
        }
    }
}

?>

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


<body>
    <header>
        <h1>Dehydration</h1>
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

    <div class="background-container">
        <div class="image-box">
            <img src="../img/1.jpg" alt="Foto 1" class="image">
            <p>Neovadiol Multi-Corrective Eye <br>
                and Lip Care for Menopause 15ml<br></p>
            <p>$20.00</p>
            <button class="add-to-cart"
                onclick="addToCart('Neovadiol Multi-Corrective Eye and Lip Care for Menopause 15ml', 20.00)">Add to
                Cart</button>

        </div>
        <div class="image-box">
            <img src="../img/2.jpg" alt="Foto 2" class="image">
            <p>Aqualia Thermal Gel Moisturising Day<br>
                Cream<br></p>
            <p>$22.40</p>
            <button class="add-to-cart" onclick="addToCart('Aqualia Thermal Gel Moisturising Day Cream',22.40)">Add to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/7.jpg" alt="Foto 3" class="image">
            <p>Minéral 89 72 Hr Hyaluronic Acid Moisture <br>
                Boosting Cream for All Skin Types 50ml<br></p>
            <p>$34.50</p>
            <button class="add-to-cart"
                onclick="addToCart('Minéral 89 72 Hr Hyaluronic Acid Moisture Boosting Cream for All Skin Types 50ml',34.50)">Add
                to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/4.jpg" alt="Foto 4" class="image">
            <p>Aqualia Thermal Rich Moisturising Day<br>
                Cream<br></p>
            <p>$27.70</p>
            <button class="add-to-cart" onclick="addToCart('Aqualia Thermal Rich Moisturising Day Cream',27.70)">Add to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/6.jpg" alt="Foto 5" class="image">
            <p>Aqualia Thermal Light Moisturising Day<br>
                Cream<br></p>
            <p>$45.50</p>
            <button class="add-to-cart" onclick="addToCart('Aqualia Thermal Light Moisturising Day Cream',45.50)">Add
                to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/5.jpg" alt="Foto 6" class="image">
            <p>Aqualia Thermal Night Spa Night<br>
                Cream<br></p>
            <p>$30.80</p>
            <button class="add-to-cart" onclick="addToCart('Aqualia Thermal Night Spa Night Cream',30.80)">Add to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/9.jpg" alt="Foto 6" class="image">
            <p>Aqualia Thermal Awakening Eye Balm<br></p>
            <p>$24.90</p>
            <button class="add-to-cart" onclick="addToCart('Aqualia Thermal Awakening Eye Balm', 24.90)">Add to
                Cart</button>
        </div>
        <div class="image-box">
            <img src="../img/8.jpg" alt="Foto 6" class="image">
            <p>Aqualia Thermal Rehydrating Serum<br></p>
            <p>$18.80</p>
            <button class="add-to-cart" onclick="addToCart('Aqualia Thermal Rehydrating Serum',18.80)">Add to
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
             <div class="col text-center"><a id="MastercardLink" class="site-footer-payments__link" href="https://www.mastercard.us/en-us.html" style="pointer-events: auto;">
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
