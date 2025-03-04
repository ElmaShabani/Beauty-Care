<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forall.css">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
    <title>Makeup </title>
</head>
<body>
    <header>
        <h1>All Makeup Products</h1>
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
            <img src="../img/rareblush.webp" alt="Liquid Blush" >
            <h3>Rare Beauty <p>Soft Pinch Liquid Blush</p></h3>
            <p>$23.00</p>
            <button class="add-to-cart" onclick="addToCart('Soft Pinch Liquid Blush', 23.00)">Add to Cart</button>
        </div>
            <div class="product"  >
            <img src="../img/flawlessfilter.webp" alt="Foundation" >
            <h3>Charlotte Tilbury<p>Hollywood Flawless Filter</p></h3>
            <p>$49.00    <del>$72.00</del></p>
            <button class="add-to-cart" onclick="addToCart('Hollywood Flawless Filter', 49.00)">Add to Cart</button>
        </div>
        <div class="product" >
            <img src="../img/fentygloss.webp" alt="Lipgloss" >
            <h3>Fenty Beauty by Rihanna<p>Gloss Bomb Universal</p> </h3>
            <p>$21.00</p>
            <button class="add-to-cart" onclick="addToCart('Gloss Bomb Universal', 21.00)">Add to Cart</button>
        </div>
        <div class="product" >
            <img src="../img/makeupbymario.webp" alt="Eyeshadow Palette" >
            <h3>MAEKUP BY MARIO <p>Master Mattes Eyeshadow Palette</p></h3>
            <p>$50.00</p>
            <button class="add-to-cart" onclick="addToCart('Master Mattes Eyeshadow Palette', 50.00)">Add to Cart</button>
            </div>
        <div class="product">
                <img src="../img/hudabeauty.webp" alt="Baking & Setting Powder" >
                <h3>HUDA BEAUTY <p>Easy Bake Loose Baking & Setting Powder</p></h3>
                <p>$38.00</p>
                <button class="add-to-cart" onclick="addToCart('Easy Bake Loose Baking & Setting Powder', 38.00)">Add to Cart</button>
        </div>
        <div class="product" >
            <img src="../img/armanilips.webp" alt="Lipstick" >
            <h3>Armani Beauty <p>Lip Power Long Lasting Lipstick</p></h3>
            <p>$69.00</p>
            <button class="add-to-cart" onclick="addToCart('Lip Power Long Lasting Lipstick', 69.00)">Add to Cart</button>
        </div>
        <div class="product" >
            <img src="../img/nars.webp" alt="Concealer" >
            <h3>NARS<p>Soft Matte Complete Concealer</p></h3>
            <p>$32.00</p>
            <button class="add-to-cart" onclick="addToCart('Soft Matte Complete Concealer', 32.00)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="../img/natashadenona.webp" alt="Eyeshadow Palette">
        <h3>Natasha Denona <p> Nude Eyeshadow Palette</p></h3>
        <p>$69.00</p>
        <button class="add-to-cart" onclick="addToCart('Nude Eyeshadow Palette', 69.00)">Add to Cart</button>
      </div>
      <div class="product" >
        <img src="../img/charlottelips.webp" alt="Lipstick & Liner" >
        <h3>Charlotte Tilbury <p>Mini Pillow Talk Lipstick & Liner Set </p></h3>
        <p>$25.00</p>
        <button class="add-to-cart" onclick="addToCart('Mini Pillow Talk Lipstick & Liner Set', 25.00)">Add to Cart</button>
    </div>
<div class="product">
    <img src="../img/charlotteblush.webp" alt="Liquid Blush" >
    <h3>Charlotte Tilbury<p>Matte Beauty Blush Wand</p></h3>
    <p>$42.00</p>
    <button class="add-to-cart" onclick="addToCart('Matte Beauty Blush Wand', 42.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/diorlipglow.webp" alt="Lipgloss" >
        <h3>Dior<p>Lip Glow Oil</p></h3>
        <p>$40.00</p>
        <button class="add-to-cart" onclick="addToCart('Lip Glow Oil', 40.00)">Add to Cart</button>
</div>
<div class="product" >
    <img src="../img/anastasiablush.webp" alt="Blush Trio" >
    <h3>Anastasia Beverly Hills<p>Blush Trio</p></h3>
    <p>$30.00</p>
    <button class="add-to-cart" onclick="addToCart('Blush Trio', 30.00)">Add to Cart</button>
</div>
<div class="product" >
    <img src="../img/laneige.webp" alt="Lip mask" >
    <h3>Laneige<p>Lip Sleeping Mask Intense Hydration with Vitamin C</p> </h3>
    <p>$24.00</p>
    <button class="add-to-cart" onclick="addToCart('Lip Sleeping Mask Intense Hydration with Vitamin C', 24.00)">Add to Cart</button>
</div>
<div class="product" >
    <img src="../img/urbandecay.webp" alt="Eyeliner" >
    <h3>Urban Decay<p>Glide-On Waterproof Eyeliner Pencil</p></h3>
    <p>$25.00</p>
    <button class="add-to-cart" onclick="addToCart('Glide-On Waterproof Eyeliner Pencil', 25.00)">Add to Cart</button>
</div>
<div class="product" >
    <img src="../img/fentydiamond.webp" alt="Highlighter" >
    <h3>Fenty Beauty by Rihanna<p>Diamond Bomb All-Over Diamond Veil</p></h3>
    <p>$42.00 <del>$67.00</del></p>
    <button class="add-to-cart" onclick="addToCart('Diamond Bomb All-Over Diamond Veil', 42.00)">Add to Cart</button>
</div>
<div class="product" >
    <img src="../img/toofacedfoundation.webp" alt="Foundation" >
    <h3>Too Faced<p>Natural Finish Longwear Liquid Foundation</p></h3>
    <p>$46.00</p>
    <button class="add-to-cart" onclick="addToCart('Natural Finish Longwear Liquid Foundation', 46.00)">Add to Cart</button>
</div>
<div class="product" >
    <img src="../img/yveslaurant.webp" alt="Lipstick" >
    <h3>Yves Saint Laurent<p>Shine Lipstick Balm</p></h3>
    <p>$43.00</p>
    <button class="add-to-cart" onclick="addToCart('Shine Lipstick Balm', 43.00)">Add to Cart</button>
</div>
<div class="product" >
    <img src="../img/tartelette.webp" alt="Eyeshadow Palette" >
    <h3>Tarte<p>Tartelette In Bloom Clay Eyeshadow Palette</p></h3>
    <p>$45.00</p>
    <button class="add-to-cart" onclick="addToCart('Tartelette In Bloom Clay Eyeshadow Palette', 45.00)">Add to Cart</button>
</div>
<div class="product" >
    <img src="../img/toofacedprimer.webp" alt="Primer" >
    <h3>Too Faced<p>Hangover Replenishing Face Primer</p></h3>
    <p>$19.50 <del>$32.00</del></p>
    <button class="add-to-cart" onclick="addToCart('Hangover Replenishing Face Primer', 19.50)">Add to Cart</button>
</div>
<div class="product" >
    <img src="../img/anastasia.webp" alt="Brow Pomade" >
    <h3>Anastasia Beverly Hills<p>Smudge Proof Brow Pomade</p></h3>
    <p>$21.00 </p>
    <button class="add-to-cart" onclick="addToCart('Smudge Proof Brow Pomade', 21.00)">Add to Cart</button>
</div>
<div class="product" >
    <img src="../img/kaja.webp" alt="Eyeshadow" >
    <h3>Kaja<p>Eye Bento Bouncy Eyeshadow Trio</p></h3>
    <p>$25.00</p>
    <button class="add-to-cart" onclick="addToCart('Eye Bento Bouncy Eyeshadow Trio', 25.00)">Add to Cart</button>
</div>
<div class="product">
    <img src="../img/benefithighlight.webp" alt="Highlighter" >
    <h3>Benefit Cosmetics <p>Cookie and Tickle Powder Highlighters</p></h3>
    <p>$35.00 </p>
    <button class="add-to-cart" onclick="addToCart('Cookie and Tickle Powder Highlighters', 35.00)">Add to Cart</button>
</div>
<div class="product" >
    <img src="../img/charlotteeyes.webp" alt="Eyeshadow" >
    <h3>Charlotte Tilbury<p>Eyes To Mesmerize Cream Eyeshadow</p></h3>
    <p>$36.00 </p>
    <button class="add-to-cart" onclick="addToCart('Eyes To Mesmerize Cream Eyeshadow', 36.00)">Add to Cart</button>
</div>
<div class="product" >
    <img src="../img/fentycontur.webp" alt="Contour Skinstick" >
    <h3>Fenty Beauty by Rihanna<p>Match Stix Matte Contour Skinstick</p></h3>
    <p>$32.00 </p>
    <button class="add-to-cart" onclick="addToCart('Match Stix Matte Contour Skinstick', 32.00)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="../img/charlottepowder.webp" alt="Setting Powder" >
        <h3>Charlotte Tilbury<p>Airbrush Flawless Finish Setting Powder</p></h3>
        <p>$48.00 </p>
        <button class="add-to-cart" onclick="addToCart('Airbrush Flawless Finish Setting Powder', .00)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="../img/diorfoundation.webp" alt="Foundation" >
        <h3>Dior<p>Backstage Face & Body Foundation</p></h3>
        <p>$42.00 </p>
        <button class="add-to-cart" onclick="addToCart('Backstage Face & Body Foundation', 42.00)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="../img/guccibronz.webp" alt="Bronzer" >
        <h3>Gucci<p>Sun-Kissed Glow Bronzer</p></h3>
        <p>$60.00 </p>
        <button class="add-to-cart" onclick="addToCart('Sun-Kissed Glow Bronzer', .00)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="../img/miniairbrush.webp" alt="Setting Spray" >
        <h3>Charlotte Tilbury<p>Mini Airbrush Flawless Setting Spray</p></h3>
        <p>$23.00 </p>
        <button class="add-to-cart" onclick="addToCart('Mini Airbrush Flawless Setting Spray', 23.00)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="../img/iconiclondon.jpg" alt="Highlighters" >
        <h3>Iconic London<p>Silk Glow Blush and Highlight Duo</p></h3>
        <p>$39.00 </p>
        <button class="add-to-cart" onclick="addToCart('Silk Glow Blush and Highlight Duo', 39.00)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="../img/diorblush.webp" alt="Blush" >
        <h3>Dior<p>Rosy Glow Blush</p></h3>
        <p>$40.00 <del>$55.00</del> </p>
        <button class="add-to-cart" onclick="addToCart('Rosy Glow Blush', 40.00)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="../img/givenchy.webp" alt="Setting and Finishing Powder" >
        <h3>Givenchy<p>Mini Prisme Libre Loose Setting and Finishing Powder</p></h3>
        <p>$29.00 </p>
        <button class="add-to-cart" onclick="addToCart('Mini Prisme Libre Loose Setting and Finishing Powder', 29.00)">Add to Cart</button>
        </div>
        <div class="product" >
            <img src="../img/falselashes.webp" alt="Lashes" >
            <h3>Sephora Collection<p>False Lashes</p></h3>
            <p>$5.00 <del>$15.00</del></p>
            <button class="add-to-cart" onclick="addToCart('False Lashes', 5.00)">Add to Cart</button>
        </div>



    </section>

    <script src="forall.js"></script>
    

</body>
</html>
