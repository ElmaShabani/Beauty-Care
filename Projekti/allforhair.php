<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Care</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        .hidden {
            display: none;
        }

        .fade-slide-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease-in-out, transform 1s ease-in-out;
        }

        .fade-slide-in.show {
            opacity: 1;
            transform: translateY(0);
        }

        .photo-fade-slide-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease-in-out, transform 1s ease-in-out;
        }

        .photo-fade-slide-in.show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    <link rel="stylesheet" href="hair.css">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
</head>
<body>
    <header>
        <a href="MainPage.php"><img src="../img/logo.jpg" alt="Your Brand Logo"></a>
        <div class="text-with-shadow">EverGlow Beauty</div>
        <div class="container3" style="font-family: Georgia, 'Times New Roman', Times, serif;">
            <div class="middle-box d-flex justify-content-around">
                <div class="sub-box">
                    <a href="treatments.php" class="btn btn-light">TREATMENTS</a>
                </div>
                <div class="sub-box">
                    <a href="styling.php" class="btn btn-light">STYLING</a>
                </div>
                <div class="sub-box">
                    <a href="gifts.php" class="btn btn-light">GIFT SETS</a>
                </div>
                <div class="sub-box">
                    <a href="seall.php" class="btn btn-light">SEE ALL</a>
                </div>
            </div>
        </div>
    </header>
    
    <section id="video-section">
        <video width="100%" height="100%" autoplay loop muted>
            <source src="../img/hair.mp4" type="video/mp4" autoplay>
        </video>
    </section>

    <?php
    // Kontrolloni nëse një cookie për ngjyrën e sfondit ekziston
    if(isset($_COOKIE['background_color'])) {
        $background_color = $_COOKIE['background_color'];
    } else {
        // Nëse nuk ka një cookie për ngjyrën e sfondit, përdorni një ngjyrë parazgjedhur
        $background_color = "#ffffff"; // Ngjyra e bardhë
    }
    ?>

    <div class="fourth-container" style="border: 2px solid pink; border-radius: 10px;border-style: double; margin-left: 30px; margin-right: 30px; background-color: <?php echo $background_color; ?>;">
        <div class="image-container">
            <img src="../img/hairphoto.webp" alt="Hair" class="round-image">
        </div>

        <div class="quote-container" style="border: 2 px solid black;">
            <blockquote>
                <h1 id="quote" style="font-family: Georgia, 'Times New Roman', Times, serif; color: black;">Hair care is self-care!</h1>
                <p>Throughout history, hair has played a significant role in our society it is associated with youthfulness and beauty in women and virility and masculinity in men, so it's no surprise that hair loss can make many men and women feel self-conscious.Your hair is the crown you never take off, after all.Life is too short not to appreciate your natural mane and to go for the hair of your dreams.Hair matter. Pay attention to your hair, because everyone else will.Good looking hair isn't just pleasing to the eye, but often indicates a strong healthy individual. Being attracted to healthy hair is quite natural. It also shows a sign of good hygiene and care for one's self.</p>
            </blockquote>
            <button class="btn btn-primary" onclick="changeQuote()">Reminder</button>
        </div>
    </div>
    
    <p style="font-size: 2em; background-color: #fff; margin-bottom: 50px; font-family:'Times New Roman', Times, serif; text-align:center; margin-top: 150px;"><b><i>If you want to win prize click the link below!</i></b></p>
    <p style="text-align: center; margin-bottom: 150px;"><a href="giveaway.php" target="_blank" style="font-size: 2em; background-color: #fff;font-family:'Times New Roman', Times, serif;color: rgb(152, 111, 15); text-align: center; margin-bottom: 150px;">GIVEAWAY!!</a></p>

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
            background-color: lightgoldenrodyellow;
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
            color: #333;
        }
    </style>

    <h1>Recommended hair products for different hair types</h1>
    
    <table>
        <tr>
            <th rowspan="2">Product Name</th>
            <th colspan="3">Hair Type</th>
            <th rowspan="2">Price</th>
        </tr>
        <tr>
            <th>Curl</th>
            <th>Color</th>
            <th>Texture</th>
        </tr>
        <tr>
            <td>PATTERN by Tracee Ellis Ross
                Styling Cream
                <p class="product-description">A nourishing styling cream for curly hair.</p>
            </td>
            <td rowspan="2">Curly</td>
            <td>Transparent</td>
            <td>Liquid</td>
            <td>$28.00</td>
        </tr>
        <tr>
            <td>Amika
                <p class="product-description">Hydrating conditioner for defined curls.</p>
            </td>
            <td>Opaque</td>
            <td>Creamy</td>
            <td>$15.00</td>
        </tr>
        <tr>
            <td>BREAD BEAUTY SUPPLY
                <p class="product-description">Color-protecting shampoo for straight hair.</p>
            </td>
            <td>Straight</td>
            <td rowspan="2">Colored</td>
            <td>Liquid</td>
            <td>$28.00</td>
        </tr>
        <tr>
            <td>Absolut Repair Protein Treatment Hair Mask
                <p class="product-description">Intensive repair mask for wavy hair.</p>
            </td>
            <td>Wavy</td>
            <td>Creamy</td>
            <td>$45.00</td>
        </tr>
    </table>

    <footer>
        <div class="container d-flex footer-container">
            <div class="left">
                <h2>Everglow Beauty</h2>
                <span style="font-size: 20px; cursor: pointer;" onclick="shfaqMesazhin()">Everglow Beauty Kosova</span>
            </div>
            <div class="quick-links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="MainPage.php">Home</a></li>
                    <li><a href="OurStory.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a>
                    <li>
                        <div id="currentDateElement"></div>
                        <script>
                            const currentDate = new Date();
                            const currentDateElement = document.getElementById('currentDateElement');
                            if (currentDateElement) {
                                currentDateElement.textContent = `Current Date: ${currentDate.toLocaleDateString()} - Current time: ${currentDate.toLocaleTimeString()}`;
                            }
                        </script>
                    </li>
                </ul>
            </div>
            <div class="get-in-touch">
                <h2>Get in Touch</h2>
                <address style="margin-left: 100px; font-size: 20px; font-family:Georgia, 'Times New Roman', Times, serif;">
                    <a id="adresa" href="https://maps.app.goo.gl/scmxnwzCazoUVT8b9">Address: Prishtine</a>
                </address>
                <p>Email: <mark style="background-color: white;"> <a href="mailto:everglowbeauty@gmail.com">everglowbeauty@gmail.com</a> </mark></p>
                <p>Phone: <mark style="background-color: white;">+383 48 555 111</mark> </p>
            </div>
        </div>
        <div class="container-fluid site-footer-payments">
            <aside>
                <h2>Payment methods: </h2>
            </aside>
            <div class="row">
                <div class="col text-center">
                    <a id="payPallink" class="site-footer-payments__link" href="https://www.paypal.com/" style="pointer-events: auto;">
                        <img src="https://images.ctfassets.net/eoaaqxyywn6o/6rDEb4sJOBkiIga3rkaSfA/b705c283f12f64d22365f9d168d2e9be/PayPal.svg" alt="PayPal" class="site-footer-payments__link__icon">
                    </a>
                </div>
                <div class="col text-center">
                    <a id="ClearpayLink" class="site-footer-payments__link" href="https://www.clearpay.co.uk/en-GB" style="pointer-events: auto;">
                        <img src="https://images.ctfassets.net/eoaaqxyywn6o/2fVeO7f2x78KlbQuhqmuVb/a195d07a55c2bb8e1f595d5b541d4d79/Clearpay.svg" alt="Clearpay" class="site-footer-payments__link__icon">
                    </a>
                </div>
                <div class="col text-center">
                    <a id="VisaLink" class="site-footer-payments__link" href="https://usa.visa.com/" style="pointer-events: auto;">
                        <img src="https://images.ctfassets.net/eoaaqxyywn6o/4QTzSyV3E2jIfll4u3GgIW/46acc6659798376dc8bb416454f2baba/Visa.svg" alt="Visa" class="site-footer-payments__link__icon">
                    </a>
                </div>
                <div class="col text-center">
                    <a id="AmexLink" class="site-footer-payments__link" href="https://www.americanexpress.com/" style="pointer-events: auto;">
                        <img src="https://images.ctfassets.net/eoaaqxyywn6o/1R0NBLVCShxTQNVHNjanE4/c970e9e15ecbb026929000ae3fcce6ae/Amex.svg" alt="Amex" class="site-footer-payments__link__icon">
                    </a>
                </div>
                <div class="col text-center">
                    <a id="MastercardLink" class="site-footer-payments__link" href="https://www.mastercard.us/en-us.php" style="pointer-events: auto;">
                        <img src="https://images.ctfassets.net/eoaaqxyywn6o/5bs4r6UiioP3Fkj4Qg35o8/5583c0ecc4b6500a1083fd38cfabf6dc/Mastercard.svg" alt="Mastercard" class="site-footer-payments__link__icon">
                    </a>
                </div>
                <div class="col text-center">
                    <a id="MaestroLink" class="site-footer-payments__link" href="https://n26.com/en-eu/maestro-card" style="pointer-events: auto;">
                        <img src="https://images.ctfassets.net/eoaaqxyywn6o/5IdXqCmgjYWyv6je5Gd1CT/56c33d1249c8cb77882a1b7ee675a673/Maestro.svg" alt="Maestro" class="site-footer-payments__link__icon">
                    </a>
                </div>
            </div>
        </div>
        <p style="text-align:center;">© 2023 EverGlow Beauty. All Rights Reserved.</p>
    </footer>
    <script src="hair.js"></script>
    <script>
        // Skripti për të ndryshuar citimin
        function changeQuote() {
            document.getElementById('quote').textContent = 'Remember, your hair is your best accessory!';
        }
    </script>
</body>
</html>
