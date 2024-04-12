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
        <div class="product" >
            <img src="../img/Valentino.webp" alt="Fragrance-Women" >
            <h3>Valentino<p>Donna Born In Roma Eau de Parfum</p></h3>
            <p>$100.00</p> <p>Size: 1.7 oz/ 50 mL</p>
            <button class="add-to-cart" onclick="addToCart('Donna Born In Roma Eau de Parfum',100.00)">Add to Cart</button>
    </div>
    <div class="product" >
       
        <img src="../img/Carolina Herrera.webp" alt="Fragrance-Women" >
        <h3>Carolina Herrera<p>Mini Good Girl Blush Eau de Parfum</p></h3>
        <p>$15.00</p> <p>Size: 0.2 oz/ 7mL</p>
        <button class="add-to-cart" onclick="addToCart('Mini Good Girl Blush Eau de Parfum',15.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Blacopium.webp" alt="Fragrance-Women" >
        <h3>Yves Saint Laurent<p> Black Opium Eau de Parfum</p> </h3>
        <p>$140.00</p><p>Size: 3 oz/ 90 mL</p>
        <button class="add-to-cart" onclick="addToCart('Black Opium Eau de Parfum',140.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Libre Eau De Parfum.webp" alt="Fragrance-Women" >
        <h3>Yves Saint Laurent<p>Libre Eau De Parfum</p> </h3>
        <p>$95.00</p><p>Size: 1 oz / 30 mL</p>
        <button class="add-to-cart" onclick="addToCart('Libre Eau De Parfum',95.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/MissDior11.webp" alt="Fragrance-Women" >
        <h3>Dior<p>Miss Dior Eau de Parfum</p></h3>
        <p>$160.00</p> <p>Size: 3.4 oz/ 100 mL</p>
        <button class="add-to-cart" onclick="addToCart('Miss Dior Eau de Parfum',160.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/cocochanel.webp" alt="Fragrance-Women" >
        <h3>CHANEL <p>COCO MADEMOISELLE Eau de Parfum</p></h3>
        <p>$130.00</p><p>Size: 1.7 oz/ 50 mL</p>
        <button class="add-to-cart" onclick="addToCart('COCO MADEMOISELLE Eau de Parfum',130.00)">Add to Cart</button>
    </div>
    <div class="product" >
       
        <img src="../img/Daisy.webp" alt="Fragrance-Women" >
        <h3>Daisy<p>Marc Jacobs Fragrances</p></h3>
        <p>$137.00</p> <p>Size: 3.4 oz/ 100 mL</p>
        <button class="add-to-cart" onclick="addToCart('Marc Jacobs Fragrances',137.00)">Add to Cart</button>
    </div>
    <div class="product" >
       
        <img src="../img/Viktor&Rolf.webp" alt="Fragrance-Women" >
        <h3>Viktor&Rolf<p>Flowerbomb Eau de Parfum</p></h3>
        <p>$170.00</p> <p>Size: 3.4 oz/ 100 mL</p>
        <button class="add-to-cart" onclick="addToCart('Flowerbomb Eau de Parfum',170.00)">Add to Cart</button>
    </div>
    <div class="product" >
       
        <img src="../img/hypnotic poison.webp" alt="Fragrance-Women" >
        <h3>Dior <p>Hypnotic Poison</p></h3>
        <p>$80.00</p> <p>Size: 3.1 oz/ 50mL</p>
        <button class="add-to-cart" onclick="addToCart(' Hypnotic Poison',80.00)">Add to Cart</button>
    </div>
    </section>

    <script>
        setTimeout(function () {
      alert("Welcome to the Women's fragrance sector");
        }, 500);
      </script>
      

    
      <script src="forall.js"></script>
    

</body>
</html>
