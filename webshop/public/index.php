<?php

// "http://localhost:88/index.php?page=home"
$home = "home";

$_GET['page'] = $home;

include_once "assets/php/classes.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/js/all.min.js" defer></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/main.js" defer></script>
    <script type='text/javascript'>
        <?php
            $php_array = $dataObject;
            $js_array = json_encode($php_array);
            echo "var javascript_array = ". $js_array . ";\n";
        ?>
    </script>
    <title>Buy here the cheapest USB sticks</title>
</head>
<body>
    <nav class="topNav">
        <ul class="topNav__list">
            <li class="list__item">
                <a class="navItem__link--Home" href="index.php?page=home">
                    <img class="navItem__link--Home" src="assets/img/TinyUSBsticks_logo_white.webp" alt="logo">
                    
                </a>
                <a class="navItem__link--shopping_card" href="winkelwagen.php?page=shoppingcard">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <div class="shoppingcard__div--counter" id="data-counter">0</div>
                </a>
            </li>
            <li class="list__suedo_list">
                <div class="suedo_list__second-item">
                    <a class="navItem__second-link--products" href="overview.php?page=products">
                        <button class="navItem__button--products">products</button>
                    </a>
                    <a class="navItem__second-link--contact" href="">
                        <button class="navItem__button--contact">contact</button>
                    </a>
                    <button onclick="darkmode()" id="darkmode_knop" class="navItem__button--darkmode">darkmode</button>
                </div>
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
    <article class="info">
        <section class="info__colomn">
            <div class="info__tekst">
                <h2>What we do</h1>
                <p>
                    We sell USB-sticks for a cheap price.
                    our goal is to stop inflation of USB-sticks by buying them at the average price from our suppliers
                     and selling them for cheap to you.
                </p>
            </div>
        </section>
        <section class="info__colomn">
            <div class="info__tekst">
                <h2>Why we do</h1>
                <p>
                    The problem nowadays is that shops sell thier USB-sticks for a hefty price.
                    We want to ensure our customers that we deliver a service where they can buy
                     tiny memory USB-sticks for a tiny price.
                </p>
            </div>
        </section>
    </article>
    <footer class="footer">
        <h3 class="footer__texts">@Ruiz M. Phang</h3>
    </footer>
</body>
</html>