<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forall.css">
    <title>See All </title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
    <script>
        function showMessage() {
            alert("Hello, discover your radiance at EverGlow Beauty. Your journey to beauty begins here!");
        }
        setTimeout(showMessage, 2000);
    </script>
    
</head>
<body>
    <header>
        <h1>See All</h1>
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
            <img src="../img/wowhair.webp" alt="Styling Cream" >
            <h3>COLOR WOW<p>Mini One Minute Transformation Anti Frizz Styling Cream</p></h3>
            <p>$12.00</p>
            <button class="add-to-cart" onclick="addToCart('Mini One Minute Transformation Anti Frizz Styling Cream', 12.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/patterncream.webp" alt="Styling Cream" >
        <h3>PATTERN by Tracee Ellis Ross<p> Styling Cream for Curly &Coily Hair</p></h3>
        <p>$28.00 </p>
        <button class="add-to-cart" onclick="addToCart('Styling Cream for Curly &Coily Hair', 28.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/curlsmith.webp" alt="Heat Protectant" >
        <h3>Curlsmith<p>Heat Protectant Leave In Teatment</p> </h3>
        <p>$24.00  <del>$33.00</del></p>
        <button class="add-to-cart" onclick="addToCart('Heat Protectant Leave In Teatment', 24.00)">Add to Cart</button>
    </div>
    <div class="product" >
<img src="../img/scrunchies.webp" alt="Scrunchies" >
<h3>Slip<p>Large Slipsilk Scrunchies</p> </h3>
<p>$39.00</p>
<button class="add-to-cart" onclick="addToCart('Large Slipsilk Scrunchies', 39.00)">Add to Cart</button>
</div>
    <div class="product" >
        <img src="../img/bumble.webp" alt="Prep" >
        <h3>Bumble and bumble<p>Prep</p> </h3>
        <p>$30.00</p>
        <button class="add-to-cart" onclick="addToCart('Prep', 30.00)">Add to Cart</button>
    </div>
    <div class="product" >
<img src="../img/bondiboost.webp" alt="Hair Waver" >
<h3>BondiBoost <p>Wave Wand 3-Barrel Hair Waver</p></h3>
<p>$58.00</p>
<button class="add-to-cart" onclick="addToCart('Wave Wand 3-Barrel Hair Waver', 58.00)">Add to Cart</button>
</div>
    <div class="product" >
        <img src="../img/amikahair.webp" alt="Hair Gel" >
        <h3>Amika<p>Curl Corps Curl Enhancing Hair Gel</p></h3>
        <p>$15.00 <del>$24.99</del></p>
        <button class="add-to-cart" onclick="addToCart('Curl Corps Curl Enhancing Hair Gel', 15.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/ouaii.webp" alt="Hair Mask" >
        <h3>OUAI<p>Treatment Mask for Thick Hair</p></h3>
        <p>$38.00</p>
        <button class="add-to-cart" onclick="addToCart('Treatment Mask for Thick Hair', 38.00)">Add to Cart</button>
</div>
<div class="product" >
    <img src="../img/hairmask.webp" alt="Conditioner" >
    <h3>BREAD BEAUTY SUPPLY<p>Hair Mask Creamy Deep Conditioner</p></h3>
    <p>$28.00</p>
    <button class="add-to-cart" onclick="addToCart('Hair Mask Creamy Deep Conditioner', 28.00)">Add to Cart</button>
</div>
<div class="product" >
    <img src="../img/sephoramask.webp" alt="Sleeping Mask" >
    <h3>Sephora Collection<p>Clean Hair Sleeping Mask</p></h3>
    <p>$5.00 <del>$13.00</del></p>
    <button class="add-to-cart" onclick="addToCart('Clean Hair Sleeping Mask', 5.00)">Add to Cart</button>
</div>
<div class="product" >
    <img src="../img/lorealrepair.webp" alt="Hair Mask" >
    <h3>L'Oréal Professionnel<p> Absolut Repair Protein Treatment Hair Mask </p></h3>
    <p>$45.00</p>
    <button class="add-to-cart" onclick="addToCart('Absolut Repair Protein Treatment Hair Mask', 45.00)">Add to Cart</button>
</div>
<div class="product" >
<img src="../img/pureslip.webp" alt="Silk Glam Band" >
<h3>Slip<p>Pure Silk Glam Band</p></h3>
<p>$55.00</p>
<button class="add-to-cart" onclick="addToCart('Pure Silk Glam Band', 55.00)">Add to Cart</button>
</div>
<div class="product" >
        <img src="../img/vegamour.webp" alt="Hair Foam" >
        <h3>Vegamour<p>GRO Hair Foam for Thinning Hair </p></h3>
        <p>$58.00</p>
        <button class="add-to-cart" onclick="addToCart('GRO Hair Foam for Thinning Hair', 58.00)">Add to Cart</button>
    </div>
<div class="product" >
<img src="../img/sharkbeauty.webp" alt="Tool Gift Set" >
<h3>Shark Beauty<p>Shark FlexStyle FrizzFighter Finishing Tool Gift Set</p></h3>
<p>$250.00 <del>$349.00</del></p>
<button class="add-to-cart" onclick="addToCart('Shark FlexStyle FrizzFighter Finishing Tool Gift Set', 250.00)">Add to Cart</button>
</div>
<div class="product">
    <img src="../img/igk.webp" alt="Hair Mask" >
    <h3>IGK Offline<p> 3-Minute Hydration Hair Mask</p></h3>
    <p>$38.00</p>
    <button class="add-to-cart" onclick="addToCart('3-Minute Hydration Hair Mask', 38.00)">Add to Cart</button>
</div>
<div class="product" >
    <img src="../img/dyson.webp" alt="Airwrap" >
    <h3>Dyson<p>Airwrap Multi Styler in Ceramic Pop</p></h3>
    <p>$599.00</p>
    <button class="add-to-cart" onclick="addToCart('Airwrap Multi Styler in Ceramic Pop', 599.00)">Add to Cart</button>
</div>
<div class="product" >
<img src="../img/puresilk.webp" alt="Silk Turban" >
<h3>Slip<p>Pure Silk Turban</p></h3>
<p>$85.00 </p>
<button class="add-to-cart" onclick="addToCart('Pure Silk Turban', 85.00)">Add to Cart</button>
</div>
<div class="product" >
    <img src="../img/pureology.webp" alt="Hair Mask" >
    <h3>Pureology<p>Strength Cure Superfoods Treatment Hair Mask</p> </h3>
    <p>$44.00</p>
    <button class="add-to-cart" onclick="addToCart('Strength Cure Superfoods Treatment Hair Mask', 44.00)">Add to Cart</button>
</div>
<div class="product" >
<img src="../img/riesbagg.webp" alt="Vanity Bag" >
<h3>Ries<p>The Essential Travel Vanity Bag</p> </h3>
<p>$65.00  <del>$83.00</del></p>
<button class="add-to-cart" onclick="addToCart('The Essential Travel Vanity Bag', 65.00)">Add to Cart</button>
</div>
<div class="product" >
<img src="../img/viorishampoo.webp" alt="Set" >
<h3>Viori<p>Hair Shampoo & Conditioner Bar with Bamboo Holder Set</p></h3>
<p>$33.00 <del>$52.00</del></p>
<button class="add-to-cart" onclick="addToCart('Hair Shampoo & Conditioner Bar with Bamboo Holder Set', 33.00)">Add to Cart</button>
</div>
<div class="product" >
    <img src="../img/dryshampoo.jpeg" alt="Dry Shampoo" >
    <h3>Crown Affair<p>The Dry Shampoo</p> </h3>
    <p>$36.00</p>
    <button class="add-to-cart" onclick="addToCart('The Dry Shampoo', 36.00)">Add to Cart</button>
</div>
<div class="product" >
<img src="../img/flatiron.webp" alt="Flat Iron" >
<h3>L'Oréal Professionnel<p>Steampod SteamPod Flat Iron & Styler Limited Edition Bundle</p></h3>
<p>$250.00</p>
<button class="add-to-cart" onclick="addToCart('Steampod SteamPod Flat Iron & Styler Limited Edition Bundle', 250.00)">Add to Cart</button>
</div>

    
    </section>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Your Shopping Cart</h2>
            <ul id="cart-list"></ul>
            <p>Total: $<span id="cart-total-modal">0.00</span></p>

        </div>
    </div>

    <script src="forall.js"></script>


</body>
</html>