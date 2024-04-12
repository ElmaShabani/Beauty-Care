<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forall.css">
    <script src="forall.js"></script>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
    <title>Eyes </title>
</head>
<body>
    <header>
        <h1>Eyes</h1>
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
            <img src="../img/makeupbymario.webp" alt="Eyeshadow Palette" >
            <h3>MAEKUP BY MARIO <p>Master Mattes Eyeshadow Palette</p></h3>
            <p>$50.00</p>
            <button class="add-to-cart" onclick="addToCart('Master Mattes Eyeshadow Palette', 50.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="../img/natashadenona.webp" alt="Eyeshadow Palette">
                <h2>Natasha Denona <p> Nude Eyeshadow Palette</p></h2>
                <p>$69.00</p>
                <button class="add-to-cart" onclick="addToCart('Nude Eyeshadow Palette', 69.00)">Add to Cart</button>
              </div>
              <div class="product" >
                <img src="../img/urbandecay.webp" alt="Eyeliner" >
                <h3>Urban Decay<p>Glide-On Waterproof Eyeliner Pencil</p></h3>
                <p>$25.00</p>
                <button class="add-to-cart" onclick="addToCart('Glide-On Waterproof Eyeliner Pencil', 25.00)">Add to Cart</button>
            </div>
            <div class="product" >
                <img src="../img/tartelette.webp" alt="Eyeshadow Palette" >
                <h3>Tarte<p>Tartelette In Bloom Clay Eyeshadow Palette</p></h3>
                <p>$45.00</p>
                <button class="add-to-cart" onclick="addToCart('Tartelette In Bloom Clay Eyeshadow Palette', 45.00)">Add to Cart</button>
            </div>
            <div class="product" >
                <img src="../img/anastasia.webp" alt="Brow Pomade" >
                <h3>Anastasia Beverly Hills<p>Smudge Proof Brow Pomade</p></h3>
                <p>$21.00 </p>
                <button class="add-to-cart" onclick="addToCart('Smudge Proof Brow Pomade', 21.00)">Add to Cart</button>
                </div>
                <div class="product" >
                    <img src="../img/charlotteeyes.webp" alt="Eyeshadow" >
                    <h3>Charlotte Tilbury<p>Eyes To Mesmerize Cream Eyeshadow</p></h3>
                    <p>$36.00 </p>
                    <button class="add-to-cart" onclick="addToCart('Eyes To Mesmerize Cream Eyeshadow', 36.00)">Add to Cart</button>
                </div>
                <div class="product" >
                    <img src="../img/falselashes.webp" alt="Lashes" >
                    <h3>Sephora Collection<p>False Lashes</p></h3>
                    <p>$5.00 <del>$15.00</del></p>
                    <button class="add-to-cart" onclick="addToCart('False Lashes', 5.00)">Add to Cart</button>
                </div>
                <div class="product" >
                    <img src="../img/kaja.webp" alt="Eyeshadow" >
                    <h3>Kaja<p>Eye Bento Bouncy Eyeshadow Trio</p></h3>
                    <p>$25.00</p>
                    <button class="add-to-cart" onclick="addToCart('Eye Bento Bouncy Eyeshadow Trio', 25.00)">Add to Cart</button>
            </div>
    </section>



</body>
</html>
