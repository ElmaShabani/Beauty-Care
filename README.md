# Projekti-ne-web1
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veera Beauty</title>
    <style>
        body {
            font-family:'Courier New', Courier, monospace;
            margin: 0;
            padding: 0;
            transition: background-color 0.5s ease;
            background-image: url('background.jpg'); 
            background-size: cover;
            background-position: center;
            color: #080808; 
        }

        header {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: rgba(246, 185, 149, 0.8);
            color: #f4c187;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
        }

        section {
            padding: 20px;
            margin: 20px;
            background-color: rgb(249, 247, 244);
            border-radius: 8px;
        }

        footer {
            background-color: rgba(51, 51, 51, 0.8);
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        body.dark-mode {
            background-color: #000000;
            color: #fff;
        }
        #video-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1; 
        }

        
        video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>

<header>
    <h1>Veera Beauty</h1>
</header>

<nav>
    <a href="#home">Best Sellers</a>
    <a href="#products">Makeup</a>
    <a href="#about">Skin Care</a>
    <a href="#contact">Contact</a>
    <button onclick="toggleDarkMode()">Toggle Dark Mode</button>
</nav>

<section id="home">
    <h2>Welcome to Our Beauty and Skincare World</h2>
    <p>Discover the latest trends and products to enhance your beauty and skincare routine.</p>
</section>

<section id="products">
    <h2>Featured Products</h2>
    <div>
        <!-- Product details remain unchanged -->
    </div>
</section>

<section id="about">
    <h2>About Us</h2>
    <p>Learn more about our company and our commitment to beauty and skincare.</p>
</section>

<section id="contact">
    <h2>Contact Us</h2>
    <p>Have questions or suggestions? Reach out to us!</p>
</section>

<footer>
    <p>&copy; 2023 Veera Beauty. All rights reserved.</p>
</footer>

<script>
    function toggleDarkMode() {
        document.body.classList.toggle("dark-mode");
    }
</script>

</body>
</html>
