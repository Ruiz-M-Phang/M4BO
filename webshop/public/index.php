<?php

// "http://localhost:88/index.php?Home"
$home = "Home";

$_GET['Home'] = $home;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/js/all.min.js" defer></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/main.js" defer></script>
    <title>TinyUSBsitcks.co</title>
</head>
<body onload="setTimeout(myFunction, 10000);">
    <header class="message__under-construction">
        <!-- The header class and contents in the header are tempary -->
         <h3 class="under-construction__texts">This page is under construction</h3>
    </header>
    <nav class="topNav">
        <ul class="topNav__list">
            <li class="list__item">
                <img class="navItem__logo" src="" alt="Logo">
                <a class="navItem__link--Home" href="">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <div class="shoppingcard__div--counter" id="data-counter">0</div>
                </a>
            </li>
        </ul>
    </nav>
    <section class="CTA">
        <div class="CTA__div">
            <h1 class="CTA__product-name">2 usb-sticks 128mb</h1>
            <div class="product-prices__div">
                <h2 class="CTA__product-old-price">€2.00</h2>
                <h2 class="CTA__product-new-price">€0.70</h2>
            </div>
            <button class="CTA__button">Add to card</button>
            <h2 class="CTA__scarsity-effeft">Only 3 in stock</h2>
        </div>
        <img class="img__CTA" src="assets/img/usb_in_aanbieding.jpg" alt="2_usb-sticks_on_sale">
    </section>
    <div class="div__intersection"></div>
    <div class="div__products">
        <div class="products__card">
            <img class="products-card__img" src="assets/img/donker_blauwe_usb.jpg" alt="placeholder">
            <h1 class="products-card__product-name">usb-stick 128mb</h1>
            <h2 class="products-card__product-price">€1.00</h2>
            <button class="products-card__button">Add to card</button>
        </div>
        <div class="products__card">
            <img class="products-card__img" src="assets/img/donker_blauwe_usb.jpg" alt="placeholder">
            <h1 class="products-card__product-name">usb-stick 128mb</h1>
            <h2 class="products-card__product-price">€1.00</h2>
            <button class="products-card__button">Add to card</button>
        </div>
    </div>
    <!-- <div>
        <img class="img__product2" src="" alt="placeholder">
    </div>
    <div>
        <img class="img__product3" src="" alt="placeholder">
    </div>
    <button >klik me</button> -->
    <footer>
        
    </footer>
</body>
</html>