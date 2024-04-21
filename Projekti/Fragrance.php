<?php
// Shtimi i nje variabel globale
$_GLOBALS['companyName'] = "EverGlow Beauty";
?>

<<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EverGlow Beauty</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
    <link rel="stylesheet" href="Fragrance.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        #video-section {
    height: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f0f0f0;
    margin-bottom: 80px;
}   
    </style>
     <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
</head>

<body>
    
    <header>  
    <a href="MainPage.php"> <img src="../img/logo.jpg" alt="Your Brand Logo"> <a href="MainPage.php"></a>
    <div class="text-with-shadow">
    <?php echo $_GLOBALS['companyName']; ?>  
    </div>
    
        <div class="container3" style="font-family: Verdana, Geneva, Tahoma, sans-serif;" >
        <div class="middle-box">
            <div class="sub-box">
                <a href="Women.php" class="btn btn-light">Women</a>
            </div>
            <div class="sub-box">
                <a href="Men.php" class="btn btn-light">Men</a>
            </div>
            <div class="sub-box">
                <a href="Unisex.php" class="btn btn-light">Unisex</a>
            </div>
            <div class="sub-box">
                <a href="Gift Sets.php" class="btn btn-light">Gift Sets</a>
            </div>
            <div class="sub-box">
                <a href="Seeall.php" class="btn btn-light">See All</a>
            </div>
        </div>
    </div>
</header>


<section id="video-section" >
        <video width="100%" height="100%" autoplay loop muted >
            <source src="../img/video11.mp4" type="video/mp4" autoplay>
            
        </video>
    </section>
    
    <div class="fourth-container" style="font-family: 'Times New Roman', Times, serif;">
    <div class="image-container">
            <img src="../img/unnamed.jpg" alt="Your Image" class="round-image">
           <audio controls>
                <source src="../img/Audiooo11.mp3" type="audio/mp3" style="display:none;" >
                Your browser does not support the audio tag.
            </audio> 
        </div>
        <div class="quote-container">
            <blockquote> 
            <h2 style="font-family:Georgia, 'Times New Roman', Times, serif">If you are fascinated by the wonderful world of scents, these perfumes are just right for you.</h2>
            <p>Discover the perfect scent to complement your elegance and grace.<mark style=" background-color:rgba(236, 206, 176, 0.5)">Our women's fragrance collection </mark> a symphony of notes, each crafted to resonate with the charm and confidence of today's modern woman.</p>
            
            <p>Step into a realm of timeless masculinity with <mark style=" background-color:rgba(236, 206, 176, 0.5)"> our men's fragrances</mark>. Whether you prefer a classic, rugged, or modern scent, our collection is designed for the discerning man who appreciates quality and distinction.  </p>
            <p>Discover a collection where fragrance knows no gender.<mark style=" background-color:rgba(236, 206, 176, 0.5)"> Our unisex scents</mark> are designed to be enjoyed by everyone, breaking traditional norms and embracing the freedom of personal expression.</p>
            <p>Explore our collection of <mark style=" background-color:rgba(236, 206, 176, 0.5)">fragrance gift sets</mark>, a perfect expression of love and appreciation. Thoughtfully assembled, each set is a harmonious symphony of scents, making it an ideal present for any celebration.</p>
    </blockquote>
</div>
</div>

<div class="list">
    <ul style="border: 5px solid black;border-style: double; list-style-type:none; background-color:rgba(236, 206, 176, 0.5) ;">
    
        <li>Fragrance
            <ul>
                <li>Fragrance for Women
                    <ol style="list-style-type: circle;" >
                        <li>Discover the perfect scent to complement your elegance and grace.</li>
                        <li>Indulge in a symphony of notes, each crafted for the charm of today's modern woman.</li>
                        <li>Express your individuality with fragrances that resonate with your personality.</li>
                    </ol>
                    
                </li>
                <li>Fragrance for Men
                    <ol>
                        <li>Explore a collection designed for the discerning man who appreciates quality and distinction.</li>
                        <li>Find classic, rugged, or modern scents to suit your unique style.</li>
                        <li>Make a lasting impression with fragrances that exude confidence and masculinity.</li>
                    </ol>
                </li>
                <li>Unisex Fragrances
                    <ol>
                        <li>Embrace a collection where fragrance knows no gender, breaking traditional norms.</li>
                        <li>Express yourself freely with scents designed to be enjoyed by everyone.</li>
                        <li>Discover the freedom of personal expression through our unisex fragrance offerings.</li>
                    </ol>
                </li>
                <li>Fragrance Gift Sets
                    <ol>
                        <li>Explore thoughtfully assembled sets, a perfect expression of love and appreciation.</li>
                        <li>Gift harmonious symphonies of scents for any celebration or special occasion.</li>
                        <li>Give the gift of memorable fragrances with our curated gift sets.</li>
                    </ol>
                </li>
            </ul>
        </li>
    </ul>
</div>
<div>
   
<style>

    table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
        margin-bottom: 20px;
        border: 2px solid black;
        margin:auto;
       
    }
    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 15px;
    }
    th {
        background-color: peru;
        color: black;
    }
    td {
        background-color: white;
    }
    h1 {
        color: black;
        font-style: italic;
        text-decoration: underline;
    }
    .product-description {
        font-style: italic;
        color: black;
    }
</style>
<table>
    <tr>
        <th>Brand</th>
        <th>Perfume Name</th>
        <th>Price</th>
    </tr>

    <tr>
        <td>Valentino</td>
        <td>Donna Born In Roma Eau de Parfum</td>
        <td>$100.00</td>
    </tr>

    <tr>
        <td>Dior</td>
        <td>Sauvage Eau de Toilette</td>
        <td>$110.00</td>
    </tr>

    <tr>
        <td>Armani Beauty</td>
        <td>Armani Code Parfum</td>
        <td>$144.00</td>
    </tr>

    <tr>
        <td rowspan="4">Yves Saint Laurent</td>
        <td>Mini Black Opium & Libre Eau de Parfum Set</td>
        <td>$55.00</td>
    </tr>

    <tr>
        <td>Libre Discovery Trio Set</td>
        <td>$45.00</td>
    </tr>

    <tr>
        <td>Libre Eau De Parfum</td>
        <td>$95.00</td>
    </tr>

    <tr>
        <td>Y Eau de Toilette</td>
        <td>$80.00</td>
    </tr>
</table>


<br>

<footer>
    <div class="container d-flex footer-container">
        <div class="left">
            <h2>Everglow Beauty</h2>
            <p style="font-size: 20px;">Everglow Beauty Kosova</p>
        </div>
        <div class="quick-links">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="MainPage.php">Home</a></li>
                <li><a href="OurStory.php">About Us</a></li>
                <li><a href="contact.php">Contact</a>
                    <script>
               
                        const currentDate = new Date();
                
                        
                        const currentDateElement = document.getElementById('currentDateElement');
                         if (currentDateElement) {
                         currentDateElement.innerHTML = `Current Date: ${currentDate.toLocaleDateString()}  'Current time: ${currentDate.toLocaleTimeString()}`;
                         }

                    </script></li>
            </ul>
        </div>
               
        <div class="get-in-touch">
            <h2>Get in Touch</h2>
            <address
                style="margin-left: 400px; font-size: 20px; font-family:Georgia, 'Times New Roman', Times, serif;">
                <a href="https://maps.app.goo.gl/scmxnwzCazoUVT8b9">Address: Prishtine</a> </address>
            <p>Email: <mark style="background-color: white;"> <a
                        href="mailto:everglowbeauty@gmail.com">everglowbeauty@gmail.com</a> </mark></p>
            <p>Phone: <mark style="background-color: white;">+383 48 555 111</mark> </p>
        </div>
    </div>
    <div class="container-fluid site-footer-payments">
        <aside>
            <h2>Payment methods: </h2>
        </aside>
        <div class="row">
          <div class="col text-center">
        <a class="site-footer-payments__link" href="https://www.paypal.com/" style="pointer-events: auto;">
            <img src="https://images.ctfassets.net/eoaaqxyywn6o/6rDEb4sJOBkiIga3rkaSfA/b705c283f12f64d22365f9d168d2e9be/PayPal.svg"
                alt="PayPal" class="site-footer-payments__link__icon"></a></div>
         <div class="col text-center"><a class="site-footer-payments__link" href="https://www.clearpay.co.uk/en-GB" style="pointer-events: auto;">
            <img src="https://images.ctfassets.net/eoaaqxyywn6o/2fVeO7f2x78KlbQuhqmuVb/a195d07a55c2bb8e1f595d5b541d4d79/Clearpay.svg"
                alt="Clearpay" class="site-footer-payments__link__icon"></a></div>
         <div class="col text-center"><a class="site-footer-payments__link" href="https://usa.visa.com/" style="pointer-events: auto;">
            <img src="https://images.ctfassets.net/eoaaqxyywn6o/4QTzSyV3E2jIfll4u3GgIW/46acc6659798376dc8bb416454f2baba/Visa.svg"
                alt="Visa" class="site-footer-payments__link__icon"></a></div>
         <div class="col text-center"><a class="site-footer-payments__link" href="https://www.americanexpress.com/" style="pointer-events: auto;">
            <img src="https://images.ctfassets.net/eoaaqxyywn6o/1R0NBLVCShxTQNVHNjanE4/c970e9e15ecbb026929000ae3fcce6ae/Amex.svg"
                alt="Amex" class="site-footer-payments__link__icon"></a></div>
         <div class="col text-center"><a class="site-footer-payments__link" href="https://www.mastercard.us/en-us.php" style="pointer-events: auto;">
            <img src="https://images.ctfassets.net/eoaaqxyywn6o/5bs4r6UiioP3Fkj4Qg35o8/5583c0ecc4b6500a1083fd38cfabf6dc/Mastercard.svg"
                alt="Mastercard" class="site-footer-payments__link__icon"></a></div>
         <div class="col text-center"><a class="site-footer-payments__link" href="https://n26.com/en-eu/maestro-card" style="pointer-events: auto;">
            <img src="https://images.ctfassets.net/eoaaqxyywn6o/5IdXqCmgjNCVwZNyssRsdE/702c37ee931258aad2071e063bbd337e/Maestro.svg"
                alt="Maestro" class="site-footer-payments__link__icon"></a></div>
    </div>
    </div>

</footer>
</html>
