<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Makeup</title>
</head>
<body>
    <header>
        <h1>Makeup</h1>
        <div id="cart">
            <span id="cart-count">0</span>
            <img src="C:\Users\S\Desktop\cart.jpg" alt="Shopping Cart">
        </div>

    </header>

    <section id="products">
        <div class="product" onclick="addToCart('Blush', 19.99)">
            <img src="file:///C:/Users/S/Desktop/s2640241-main-zoom.webp" alt="Liquid Blush" >
            <h3>Rare Beauty <p>Soft Pinch Liquid Blush</p></h3>
            <p>$23.00</p>
            
        </div>
            
            <div class="product"   onclick="addToCart('Hollywood Flawless Filter', 49.00)">
            <img src="file:///C:/Users/S/Desktop/s2419786-main-zoom.webp" alt="Foundation" >
            <h3>Charlotte Tilbury<p>Hollywood Flawless Filter</p></h3>
            <p>$49.00</p>
        </div>
        <div class="product" onclick="addToCart('Gloss Bomb Universal', 21.00)">
            <img src="file:///C:/Users/S/Desktop/s2662468-main-zoom.webp" alt="Lipgloss" >
            <h3>Fenty Beauty by Rihanna<p>Gloss Bomb Universal</p> </h3>
            <p>$21.00</p>
        </div>
        <div class="product" onclick="addToCart('Master Mattes Eyeshadow Palette', 50.00)">
            <img src="file:///C:/Users/S/Desktop/s2389518-main-zoom.webp" alt="Eyeshadow Palette" >
            <h3>MAEKUP BY MARIO <p>Master Mattes Eyeshadow Palette</p></h3>
            <p>$50.00</p>
            </div>
        <div class="product" onclick="addToCart('Easy Bake Loose Baking & Setting Powder', 38.00)">
                <img src="file:///C:/Users/S/Desktop/s2114072-main-zoom.webp" alt="Baking & Setting Powder" >
                <h3>HUDA BEAUTY <p>Easy Bake Loose Baking & Setting Powder</p></h3>
                <p>$38.00</p>
        </div>
        <div class="product" onclick="addToCart('Soft Matte Complete Concealer', 32.00)">
            <img src="file:///C:/Users/S/Desktop/s2371425-main-zoom.webp" alt="Concealer" >
            <h3>NARS<p>Soft Matte Complete Concealer</p></h3>
            <p>$32.00</p>
    </div>
<div class="product" onclick="addToCart('Matte Beauty Blush Wand', 42.00)">
    <img src="file:///C:/Users/S/Desktop/s2697829-main-zoom.webp" alt="Liquid Blush" >
    <h3>Charlotte Tilbury<p>Matte Beauty Blush Wand</p></h3>
    <p>$42.00</p>
    </div>
    <div class="product" onclick="addToCart('Lip Glow Oil', 40.00)">
        <img src="file:///C:/Users/S/Desktop/s2316248-main-zoom.webp" alt="Lipgloss" >
        <h3>Dior<p>Lip Glow Oil</p></h3>
        <p>$40.00</p>
</div>
<div class="product" onclick="addToCart('Blush Trio', 30.00)">
    <img src="file:///C:/Users/S/Desktop/s1942051-main-zoom.webp" alt="Blush Trio" >
    <h3>Anastasia Beverly Hills<p>Blush Trio</p></h3>
    <p>$30.00</p>
</div>
<div class="product" onclick="addToCart('Glide-On Waterproof Eyeliner Pencil', 25.00)">
    <img src="file:///C:/Users/S/Desktop/s1393693-main-zoom.webp" alt="Eyeliner" >
    <h3>Urban Decay<p>Glide-On Waterproof Eyeliner Pencil</p></h3>
    <p>$25.00</p>
</div>
<div class="product" onclick="addToCart('Diamond Bomb All-Over Diamond Veil',42.00)">
    <img src="file:///C:/Users/S/Desktop/s2385169-main-zoom.webp" alt="Highlighter" >
    <h3>Fenty Beauty by Rihanna<p>Diamond Bomb All-Over Diamond Veil</p></h3>
    <p>$42.00</p>
</div>
<div class="product" onclick="addToCart('Natural Finish Longwear Liquid Foundation',46.00)">
    <img src="file:///C:/Users/S/Desktop/s1960772-main-zoom.webp" alt="Foundation" >
    <h3>Too Faced<p>Natural Finish Longwear Liquid Foundation</p></h3>
    <p>$46.00</p>
</div>

    </section>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Your Shopping Cart</h2>
            <ul id="cart-list"></ul>
            <p>Total: $<span id="cart-total">0.00</span></p>
        </div>
    </div>

    <script src="script.js"></script>
    

</body>
</html>

