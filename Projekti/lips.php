<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forall.css">
    <script src="forall.js"></script>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
    <title>Lips </title>
</head>
<body>
    <header>
        <h1>Lips</h1>
         
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
            "Lip Glow Oil" => 40.00,
            "Shine Lipstick Balm" => 43.00,
            "Gloss Bomb Universal" => 21.00,
            "Lip Sleeping Mask Intense Hydration with Vitamin C" => 24.00,
            "Mini Pillow Talk Lipstick & Liner Set" => 25.00,
            "Lip Power Long Lasting Lipstick" => 69.00
        );

        // Sortimi sipas çmimit në rendin zbrenda
        krsort($produkte);

        foreach ($produkte as $produkt => $cmimi) {
            echo '<div class="product">';
            echo '<img src="../img/' . str_replace(' ', '_', $produkt) . '.webp" alt="Lipstick">';
            echo '<h3>' . $produkt . '</h3>';
            echo '<p>$' . $cmimi . '</p>';
            echo '<button class="add-to-cart" onclick="addToCart(\'' . $produkt . '\', ' . $cmimi . ')">Add to Cart</button>';
            echo '</div>';
        }
        ?>






        <div class="product" >
            <img src="../img/diorlipglow.webp" alt="Lipgloss" >
            <h3>Dior<p>Lip Glow Oil</p></h3>
            <p>$40.00 <del>$54.00</del></p>
            <button class="add-to-cart" onclick="addToCart('Lip Glow Oil', 40.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/yveslaurant.webp" alt="Lipstick" >
        <h3>Yves Saint Laurent<p>Shine Lipstick Balm</p></h3>
        <p>$43.00 <del>$60.00</del></p>
        <button class="add-to-cart" onclick="addToCart('Shine Lipstick Balm', 43.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/fentygloss.webp" alt="Lipgloss" >
        <h3>Fenty Beauty by Rihanna<p>Gloss Bomb Universal</p> </h3>
        <p>$21.00 <del>$35.00</del></p>
        <button class="add-to-cart" onclick="addToCart('Gloss Bomb Universal', 21.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/laneige.webp" alt="Lip mask" >
        <h3>Laneige<p>Lip Sleeping Mask Intense Hydration with Vitamin C</p> </h3>
        <p>$24.00 <del>$30.00</del></p>
        <button class="add-to-cart" onclick="addToCart('Lip Sleeping Mask Intense Hydration with Vitamin C', 24.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/charlottelips.webp" alt="Lipstick & Liner" >
        <h3>Charlotte Tilbury <p>Mini Pillow Talk Lipstick & Liner Set </p></h3>
        <p>$25.00 <del>$40.00</del></p>
        <button class="add-to-cart" onclick="addToCart('Mini Pillow Talk Lipstick & Liner Set', 25.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/armanilips.webp" alt="Lipstick" >
        <h3>Armani Beauty <p>Lip Power Long Lasting Lipstick</p></h3>
        <p>$69.00 <del>$80.00</del></p>
        <button class="add-to-cart" onclick="addToCart('Lip Power Long Lasting Lipstick', 69.00)">Add to Cart</button>
    </div>
    </section>



    

</body>
</html>
