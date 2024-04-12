<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Fragrance2.css">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
    <title>Gift Sets</title>
</head>
<body>
    <header>
        <h1>Gift Sets</h1>

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
            <button id="order-now-button" style="background-color: green; color: white; outline: 2px solid black;"  onclick="placeOrder()">Order Now</button>
        </div>
    
        <div id="cart-image" onclick="toggleCart()">
            <img src="../img/cart.jpg" alt="Cart" width="70px">
        </div>
    </header>

    <section id="products">
        <div class="product" >
            <img src="../img/Gucci.webp" alt="Fragrance-Gift Sets" >
            <h3>Gucci<p>Mini Flora Gorgeous Jasmine Eau de Parfum Perfume Set</p></h3>
            <p>$39.00</p> 
            <button class="add-to-cart" onclick="addToCart('Mini Flora Gorgeous Jasmine Eau de Parfum Perfume Set',39.00)">Add to Cart</button>
    </div>
    <div class="product" >
       
        <img src="../img/Libre Discovery Trio Set.webp" alt="Fragrance-Gift Sets" >
        <h3>Yves Saint Laurent<p> Libre Discovery Trio Set</p></h3>
        <p>$45.00</p>
        <button class="add-to-cart" onclick="addToCart(' Libre Discovery Trio Set',45.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Chanel1.webp" alt="Fragrance-Gift Sets" >
        <h3>CHANEL<p> CHANCE EAU TENDRE Eau de Toilette Gift Set
            </p> </h3>
        <p>$178.00</p>
        <button class="add-to-cart" onclick="addToCart('CHANCE EAU TENDRE Eau de Toilette Gift Set',178.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Marc Jacobs Fragrances.webp" alt="Fragrance-Gift Sets" >
        <h3>Marc Jacobs Fragrances<p> Mini Daisy Eau de Toilette Perfume Gift Set</p> </h3>
        <p>$79.00</p>
        <button class="add-to-cart" onclick="addToCart('Mini Daisy Eau de Toilette Perfume Gift Set',79.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/CLEAN RESERVE.webp" alt="Fragrance-Gift Sets" >
        <h3>CLEAN RESERVE<p>Sparkling Sugar Travel Size Perfume Se</p></h3>
        <p>$48.00</p> 
        <button class="add-to-cart" onclick="addToCart('Sparkling Sugar Travel Size Perfume Se',48.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Fenty Beauty by Rihann.webp" alt="Fragrance-Gift Sets" >
        <h3>Fenty Beauty by Rihanna <p> Fenty Eau de Parfum Perfume Se</p></h3>
        <p>$150.00</p>
        <button class="add-to-cart" onclick="addToCart('Fenty Eau de Parfum Perfume Se',150.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/libre,black.webp" alt="Fragrance-Gift Sets" >
        <h3>Yves Saint Laurent <p>  Mini Black Opium & Libre Eau de Parfum Set</p></h3>
        <p>$55.00</p>
        <button class="add-to-cart" onclick="addToCart(' Mini Black Opium & Libre Eau de Parfum Set',55.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/mini good fortune.webp" alt="Fragrance-Gift Sets" >
        <h3>Viktor&Rolf<p> Mini Good Fortune & Flowerbomb Perfume Set</p></h3>
        <p>$29.00</p>
        <button class="add-to-cart" onclick="addToCart(' Mini Good Fortune & Flowerbomb Perfume Set',29.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Hermes.webp" alt="Fragrance-Gift Sets" >
        <h3>HERMÈS<p> Mini Fragrance Discovery Set</p></h3>
        <p>$60.00</p>
        <button class="add-to-cart" onclick="addToCart('  Mini Fragrance Discovery Set',60.00)">Add to Cart</button>
    </div>
    </section>
    
    <script>
        setTimeout(function () {
      alert("Welcome to the Gift Sets's fragrance sector");
        }, 500);
      </script>
      
      <script src="forall.js"></script>
    

</body>
</html>
