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
        <!-- Rest of your product listings -->
    </section>
    
    <!-- New section for gift message -->
    <section id="gift-message">
        <h2>Make Your Gifts Extra Special!</h2>
        <p>Add a personalized message to your loved ones:</p>
        <textarea id="gift-message-text" rows="4" cols="50" placeholder="Write your message here..."></textarea>
    </section>
    
    <script>
        setTimeout(function () {
            alert("Welcome to the Gift Sets's fragrance sector");
        }, 500);

        // Krijo cookie
        var data = new Date();
        data.setHours(23, 59, 59, 999); 
        var dataFormatuar = data.toUTCString();
        document.cookie = "emri=vlere; expires=" + dataFormatuar;
    </script>
    
    <script src="forall.js"></script>
</body>
</html>
