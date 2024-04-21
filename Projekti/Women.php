<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Fragrance2.css">
    <title>Women</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
</head>
<body>
    <header>
        <h1>Women</h1>
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
            $produkte = array(
                "Valentino Donna Born In Roma Eau de Parfum" => 100.00,
                "Carolina Herrera Mini Good Girl Blush Eau de Parfum" => 15.00,
                "Yves Saint Laurent Black Opium Eau de Parfum" => 140.00,
                "Yves Saint Laurent Libre Eau De Parfum" => 95.00,
                "Dior Miss Dior Eau de Parfum" => 160.00,
                "CHANEL COCO MADEMOISELLE Eau de Parfum" => 130.00,
                "Daisy Marc Jacobs Fragrances" => 137.00,
                "Viktor&Rolf Flowerbomb Eau de Parfum" => 170.00,
                "Dior Hypnotic Poison" => 80.00
            );

            // Renditja e produktit sipas çmimit të tyre në rendin zbrenda
            asort($produkte);

            foreach ($produkte as $produkt => $cmimi) {
                echo '<div class="product">';
                echo '<img src="../img/' . str_replace(' ', '_', $produkt) . '.webp" alt="Fragrance-Women">';
                echo '<h3>' . $produkt . '</h3>';
                echo '<p>$' . $cmimi . '</p>';
                echo '<button class="add-to-cart" onclick="addToCart(\'' . $produkt . '\', ' . $cmimi . ')">Add to Cart</button>';
                echo '</div>';
            }
        ?>
       
    </section>

    <script>
        setTimeout(function () {
      alert("Welcome to the Women's fragrance sector");
        }, 500);
      </script>
      

    
      <script src="forall.js"></script>
    

</body>
</html>
