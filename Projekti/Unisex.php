<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Fragrance2.css">
    <title>Unisex</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
</head>
<body>
    <header>
        <h1>Unisex</h1>

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
        "KAYALI Vanilla Royale Sugared Patchouli | 64 Eau de Parfum Intense" => 95.00,
        "KILIAN Paris Love, Don't Be Shy" => 250.00,
        "TOM FORD Ombré Leather Eau de Parfum" => 220.00,
        "Juliette Has a Gun Ode to Dullness Eau de Parfum" => 160.00,
        "The Maker Naked Eau de Parfum" => 135.00,
        "Commodity Gold Expressive" => 90.00,
        "Glossier Glossier You Eau de Parfum" => 90.00,
        "PHLUR Tangerine Boy Eau de Parfum" => 99.00,
        "TOM FORD Black Orchid Eau de Parfum Fragrance" => 155.00
    );


    sort($produkte);

    foreach ($produkte as $produkt => $cmimi) {
        echo '<div class="product">';
        echo '<img src="../img/' . str_replace(' ', '_', $produkt) . '.webp" alt="Fragrance-Unisex">';
        echo '<h3>' . $produkt . '</h3>';
        echo '<p>$' . $cmimi . '</p>';
        echo '<button class="add-to-cart" onclick="addToCart(\'' . $produkt . '\', ' . $cmimi . ')">Add to Cart</button>';
        echo '</div>';
    }
?>

        <div class="product" >
            <img src="../img/KAYALI.webp" alt="Fragrance-Unisex" >
            <h3>KAYALI<p>Vanilla Royale Sugared Patchouli | 64 Eau de Parfum Intense</p></h3>
            <p>$95.00</p> <p>Size: 1.7 oz/ 50 mL</p>
            <button class="add-to-cart" onclick="addToCart('Vanilla Royale Sugared Patchouli | 64 Eau de Parfum Intense',95.00)">Add to Cart</button>
    </div>
    <div class="product" >
       
        <img src="../img/KILIAN Paris.webp" alt="Fragrance-Unisex" >
        <h3>KILIAN Paris<p>Love, Don't Be Shy</p></h3>
        <p>$250.00</p> <p>Size: 1.7 oz/ 50 mL</p>
        <button class="add-to-cart" onclick="addToCart('Love, Do not be',250.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Ombré Leather Eau de Parfum.webp" alt="Fragrance-Unisex" >
        <h3>TOM FORD<p> Ombré Leather Eau de Parfum</p> </h3>
        <p>$220.00</p><p>Size: 3 oz/ 90 mL</p>
        <button class="add-to-cart" onclick="addToCart('Ode to Dullness Eau de Parfum',160.00)">Add to Cart</button>

    </div>
    <div class="product" >
        <img src="../img/Juliette Has a Gun.webp" alt="Fragrance-Unisex" >
        <h3>Juliette Has a Gun<p> Ode to Dullness Eau de Parfum</p> </h3>
        <p>$160.00</p><p>Size: 1.7 oz / 50 mL</p>
        <button class="add-to-cart" onclick="addToCart('Ode to Dullness Eau de Parfum',160.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/The Maker.webp" alt="Fragrance-Unisex" >
        <h3>The Maker<p>Naked Eau de Parfum </p></h3>
        <p>$135.00</p> <p>Size: 3.4 oz/ 100 mL</p>
        <button class="add-to-cart" onclick="addToCart('Naked Eau de Parfum',135.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Commodity.webp" alt="Fragrance-Unisex" >
        <h3>Commodity <p>Gold Expressive </p></h3>
        <p>$90.00</p><p>Size: 1.7 oz/ 50 mL</p>
        <button class="add-to-cart" onclick="addToCart('Gold Expressive',90.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Golisser.webp" alt="Fragrance-Unisex" >
        <h3>>Glossier<p> Glossier You Eau de Parfum </p></h3>
        <p>$90.00</p><p>Size: 1.7 oz/ 50 mL</p>
        <button class="add-to-cart" onclick="addToCart('Glossier You Eau de Parfum',68.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/phlur.webp" alt="Fragrance-Unisex" >
        <h3>PHLUR <p>Tangerine Boy Eau de Parfum </p></h3>
        <p>$99.00</p><p>Size: 1.7 oz/ 50 mL</p>
        <button class="add-to-cart" onclick="addToCart('Tangerine Boy Eau de Parfum',99.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/black orchid.webp" alt="Fragrance-Unisex" >
        <h3>TOM FORD <p> Black Orchid Eau de Parfum Fragrance </p></h3>
        <p>$155.00</p><p>Size: 2.4 oz/ 75 mL</p>
        <button class="add-to-cart" onclick="addToCart(' Black Orchid Eau de Parfum Fragrance',155.00)">Add to Cart</button>
    </div>
    </section>
    <script>
        setTimeout(function () {
      alert("Welcome to the Unisex's fragrance sector");
        }, 500);
      </script>
      
      <script src="forall.js"></script>
    

</body>
</html>