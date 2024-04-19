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
            <button id="order-now-button" style="background-color: green; color: white;" onclick="placeOrder()">Order Now</button>
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
        <!-- Rest of the day cream items... -->

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
        <!-- Rest of the night cream items... -->
    </div>

    <footer>
        <div class="container d-flex footer-container">
            <div class="left">
                <h2>Everglow Beauty</h2>
                <span style="font-size: 20px; cursor: pointer;" onclick="shfaqMesazhin()">Everglow Beauty Kosova</span>
            </div>
            <!-- Quick Links section... -->
            <div class="get-in-touch">
                <h2>Get in Touch</h2>
                <address style="margin-left: 100px; font-size: 20px; font-family:Georgia, 'Times New Roman', Times, serif;">
                    <a id="adresa" href="https://maps.app.goo.gl/scmxnwzCazoUVT8b9">Address: Prishtine</a> </address>
                <p>Email: <mark style="background-color: white;"> <a
                            href="mailto:everglowbeauty@gmail.com">everglowbeauty@gmail.com</a> </mark></p>
                <p>Phone: <mark style="background-color: white;">+383 48 555 111</mark> </p>
            </div>
        </div>
        <!-- Payment methods section... -->
    </footer>

    <script>
        function shfaqMesazhin() {
            alert('Everglow Beauty Kosova: Where beauty meets excellence, making us the best choice for all your cosmetic needs!');
        } 
    </script>
    
    <!-- Numri i vizitave -->
    <?php
        session_start();
        if (!isset($_SESSION['visits'])) {
            $_SESSION['visits'] = 1;
        } else {
            $_SESSION['visits']++;
        }
    ?>
    <script>
        const visits = <?php echo $_SESSION['visits']; ?>;
        console.log("Number of visits: " + visits);
    </script>

    <script src="forall.js"></script>
</body>

</html>
