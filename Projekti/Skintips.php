<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EverGlow Beauty</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
    <link rel="stylesheet" href="Skintips.css">
    <script src="Skintips.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://app.enzuzo.com/apps/enzuzo/static/js/__enzuzo-cookiebar.js?uuid=f4accd94-e6da-11ed-8b76-c317f674c707"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        .title {
            display: flex;
            align-items: center;
        }

        .title svg {
            margin-right: 10px;
           
        }

        #skincare-canvas {
            display: block;
            margin: 20px auto;
            border: 2px solid #ccc;
        }

        #content {
            border: 2px solid #333;
            padding: 20px;
            text-align: center;
            font-family:'Courier New', Courier, monospace;
        }

        #changeContentBtn {
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
        
        }
    </style>
</head>


<body>
    <header>
        <h1>Skin Tips</h1>
        </div>
    </header>


    <br>
  
    <canvas id="test" width="250" height="100" style=" border: 2px solid #000000; 
background-image: linear-gradient(rgb(236, 206, 176, 0.5), rgba(186, 162, 137, 0.5));background-size: 100% 100%;">
    </canvas>
    </div>
    <div class="container">
        <div class="card">
            <div class="icon">
                <img src="../img/1tips.jpg" id="foto" border="5px">
            </div>
            <div class="content">
                <h3 class="title">
                    <svg width="40" height="40">
                        <circle cx="20" cy="20" r="10" stroke="red" stroke-width="3" fill="red" />
                    </svg> Sun protection
                </h3>
                <p class="p1">One of the most important ways to take care of your skin is to protect it from the sun.
                    A lifetime of sun exposure can cause wrinkles, age spots and other skin problems — as well as
                    increase the risk of skin cancer.
                    <br>
                    For the most complete sun protection:
                <ol class="p1">
                    <li class="p1" style="color:white">Use sunscreen.</li>
                    <li class="p1" style="color:white">Seek shade.</li>
                    <li class="p1" style="color:white">Wear protective clothing.</li>
                </ol>
                </p>
            </div>
            <button id="hide1">Hide</button>
            <button id="show1">Show</button>

        </div>
        <div class="card">
            <div class="icon">
                <img src="../img/2tips.jpg" id="foto" border="5px">
            </div>
            <div class="content">
                <h3 class="title">
                    <svg width="40" height="40">
                        <circle cx="20" cy="20" r="10" stroke="red" stroke-width="3" fill="red" />
                    </svg> Don't smoke
                </h3>
                <br>
                <p class="1">Smoking makes your skin look older and contributes to wrinkles.
                    <br>Smoking narrows the tiny blood vessels in the outermost layers of skin, which decreases blood
                    flow and makes skin paler.
                    <br>This also depletes the skin of oxygen and nutrients that are important to skin health.
                    <br>
                    <i class="2" style="color:khaki">In addition, smoking increases your risk of squamous cell skin
                        cancer.</i>
                </p>
            </div>
            <button id="fade">Show/Hide text</button>
            <button id="btn1">Also Show a tip</button>
        </div>
        <div class="card" id="card3">
            <div class="icon">
                <img src="../img/3tips.jpg" id="foto" border="5px">
            </div>
            <div class="content">
                <h3 class="title">
                    <svg width="40" height="40">
                        <circle cx="20" cy="20" r="10" stroke="red" stroke-width="3" fill="red" />
                    </svg> Treat your skin gently
                </h3>
                <br>
                <p class="p3">
                    Daily cleansing and shaving can take a toll on your skin.
                    <br>To keep it gentle:
                    <br>
                <ul style="color:white; list-style-type: square;" class="ol3">
                    <li class="p3">Limit bath time.</li>
                    <li class="p3">Water and long showers or baths remove oils from your skin.</li>
                    <li class="p3">Limit your bath or shower time, and use warm — rather than hot — water.</li>
                    <li class="p3">Avoid strong soaps.</li>
                </ul>
                </p>

            </div>
            <button id="hide3">Hide</button>
            <button id="show3">Show</button>
        </div>

        <div class="fsheh">

            <button id="fsheh1" class="fsheh1">Click here to hide/Show tips</button>
            <br><br>
            <button id="fsheh2" class="fsheh2">Remove Tips Titles</button>

        </div>
    </div>
    <div class="tabela">

        <table border="5px" width="700px" style="border-color: #dcc5ae;">
            <tr>
                <th colspan="6" style="background-color:#dcc5ae">Skin Care Cheat Sheet<br>The Ordinary</th>
            </tr>
            <tr>
                <td style="background-color:#dcc5ae">ACID</td>
                <td style="background-color:#dcc5ae">Use of Skin Care</td>
                <td style="background-color:#dcc5ae">Impact</td>
                <td style="background-color:#dcc5ae">Time</td>
                <td style="background-color:#dcc5ae">Skin type</td>
                <td style="background-color:#dcc5ae">They should not be mixed</td>
            </tr>
            <tr>
                <td style="background-color:#dcc5ae">Ferulic Acid</td>
                <td bgcolor="white">Signs of Aging, Textural Irregularities</td>
                <td bgcolor="white">Promotes Healthy Skin, Fights Free Radicals</td>
                <td bgcolor="white">AM & PM</td>
                <td bgcolor="white">All Skin Types</td>
                <td bgcolor="white">Buffet + Copper Peptides 1%</td>
            </tr>
            <tr>
                <td style="background-color:#dcc5ae">Lactic Acid</td>
                <td bgcolor="white">Uneven tone, Textural Irregularities, Fine Lines</td>
                <td bgcolor="white">Exfoliates, Increases Cell Turnover</td>
                <td bgcolor="white">PM</td>
                <td bgcolor="white">Sensitive</td>
                <td bgcolor="white">Strong acids, EUK 134 0.1% or Peptides</td>
            </tr>
            <tr>
                <td style="background-color:#dcc5ae">Salicylic Acid</td>
                <td bgcolor="white">Lackluster Tone, Textural Irregularities</td>
                <td bgcolor="white">Treats Breakouts, Clears Pores</td>
                <td bgcolor="white">AM & PM</td>
                <td bgcolor="white">Acne Prone/ Oily</td>
                <td bgcolor="white">Strong acids, EUK 134 0.1% or Peptides</td>
            </tr>

        </table>
    </div>


    <div id="content">
        <p>Click OK to reveal the quote</p>
        <button id="changeContentBtn">OK</button>
    </div>

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
                    <li><div id="currentDateElement"></div>
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
                    <a id="adresa" href="https://maps.app.goo.gl/scmxnwzCazoUVT8b9">Address: Prishtine</a> </address>
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
            <a id="payPallink" class="site-footer-payments__link" href="https://www.paypal.com/" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/6rDEb4sJOBkiIga3rkaSfA/b705c283f12f64d22365f9d168d2e9be/PayPal.svg"
                    alt="PayPal" class="site-footer-payments__link__icon"></a></div>
             <div class="col text-center"><a id="ClearpayLink" class="site-footer-payments__link" href="https://www.clearpay.co.uk/en-GB" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/2fVeO7f2x78KlbQuhqmuVb/a195d07a55c2bb8e1f595d5b541d4d79/Clearpay.svg"
                    alt="Clearpay" class="site-footer-payments__link__icon"></a></div>
             <div class="col text-center"><a  id="VisaLink" class="site-footer-payments__link" href="https://usa.visa.com/" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/4QTzSyV3E2jIfll4u3GgIW/46acc6659798376dc8bb416454f2baba/Visa.svg"
                    alt="Visa" class="site-footer-payments__link__icon"></a></div>
             <div class="col text-center"><a id="AmexLink" class="site-footer-payments__link" href="https://www.americanexpress.com/" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/1R0NBLVCShxTQNVHNjanE4/c970e9e15ecbb026929000ae3fcce6ae/Amex.svg"
                    alt="Amex" class="site-footer-payments__link__icon"></a></div>
             <div class="col text-center"><a id="MastercardLink" class="site-footer-payments__link" href="https://www.mastercard.us/en-us.php" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/5bs4r6UiioP3Fkj4Qg35o8/5583c0ecc4b6500a1083fd38cfabf6dc/Mastercard.svg"
                    alt="Mastercard" class="site-footer-payments__link__icon"></a></div>
             <div class="col text-center"><a id="MaestroLink" class="site-footer-payments__link" href="https://n26.com/en-eu/maestro-card" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/5IdXqCmgjNCVwZNyssRsdE/702c37ee931258aad2071e063bbd337e/Maestro.svg"
                    alt="Maestro" class="site-footer-payments__link__icon"></a></div>
        </div>
        </div>
    
    </footer>
            <script>
              function shfaqMesazhin() {
              alert('Everglow Beauty Kosova: Where beauty meets excellence, making us the best choice for all your cosmetic needs!');
              } </script>
    



    <script>
        var c = document.getElementById("test");
        var ctx = c.getContext("2d");
        ctx.font = "30px Arial";
        ctx.fillText("EverGlow Beauty", 10, 58); 
    </script>


    <script>

        $(document).ready(function () {
            $("#hide1").click(function () {
                $(".p1").hide(1000);
            });
            $("#show1").click(function () {
                $(".p1").show(1000);
            });
        });
        $(document).ready(function () {
            $("#hide3").click(function () {
                $(".p3").hide(1000);
            });
            $("#show3").click(function () {
                $(".p3").show(1000);
            });
        });
       //fade
        $(document).ready(function () {
            $("#fade").click(function () {
                $(".1").fadeToggle("slow");
                $(".2").fadeToggle("slow");
            });
        });
        //slide
        $(document).ready(function () {
            $("#logo").click(function () {
                $("#panel").slideToggle("slow");
            });
        });
        //animate
        $(document).ready(function () {
            $(".fsheh1").click(function () {
                $(".card").animate({ height: 'toggle' });
            });
        });

        //set
        $(document).ready(function () {
            $("#btn1").click(function () {
                $(".1").text("The best thing you can do for your skin, is to not smoke! ");
            });
        });
        //add
        $(document).ready(function () {
            $("#show3").click(function () {
                $("ol.ol3").append("<li>Strong soaps and detergents can strip oil from your skin.</li>");
                $("ol.ol3").append("<li>Choose mild cleansers.</li>");
            })
        });
        //remove
        $(document).ready(function () {
            $(".fsheh2").click(function () {
                $("h3").remove(".title");
            });
        });
    </script>


<script>
    
    function changeContent() {
        var contentDiv = document.getElementById('content');
        contentDiv.innerHTML = '<p>Love yourself, love your skin!</p>';
    }


    document.getElementById('changeContentBtn').addEventListener('click', changeContent);
</script>


</body>

</html>

