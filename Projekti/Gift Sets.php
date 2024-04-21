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
    <?php
        // Vargu me emrat e produktit dhe çmimet për secilin produkt
        $produkte = array(
            "Mini Flora Gorgeous Jasmine Eau de Parfum Perfume Set" => 39.00,
            "Libre Discovery Trio Set" => 45.00,
            "CHANCE EAU TENDRE Eau de Toilette Gift Set" => 178.00,
            "Mini Daisy Eau de Toilette Perfume Gift Set" => 79.00,
            "Sparkling Sugar Travel Size Perfume Se" => 48.00,
            "Fenty Eau de Parfum Perfume Se" => 150.00,
            "Mini Black Opium & Libre Eau de Parfum Set" => 55.00,
            "Mini Good Fortune & Flowerbomb Perfume Set" => 29.00,
            "Mini Fragrance Discovery Set" => 60.00
        );

        // Sortimi i vargut duke ruajtur indeksin e lidhur
        asort($produkte);

        // Printimi i vargut të sortuar
        foreach ($produkte as $produkt => $cmimi) {
            echo '<div class="product">';
            echo '<img src="../img/' . str_replace(' ', '_', $produkt) . '.webp" alt="Fragrance-Gift Sets">';
            echo '<h3>' . $produkt . '</h3>';
            echo '<p>$' . $cmimi . '</p>';
            echo '<button class="add-to-cart" onclick="addToCart(\'' . $produkt . '\', ' . $cmimi . ')">Add to Cart</button>';
            echo '</div>';
        }
        ?>
       
    </section>
    
    <script>
        setTimeout(function () {
      alert("Welcome to the Gift Sets's fragrance sector");
        }, 500);
      </script>
      
      <script src="forall.js"></script>
    

</body>
</html>
