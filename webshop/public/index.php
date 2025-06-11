<?php

// "http://localhost:88/index.php?Home"
$home = "Home";

$_GET['Home'] = $home;

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
    <title>TinyUSBsitcks.co</title>
</head>
<body onload="setTimeout(myFunction, 1000);">
    <!-- <header class="message__under-construction"> -->
        <!-- The header class and contents in the header are tempary -->
         <!-- <h3 class="under-construction__texts">This page is under construction</h3> -->
    <!-- </header> -->
    <nav class="topNav">
        <ul class="topNav__list">
            <li class="list__item">
                <a class="navItem__link--Home" href="index.php?Home=Welkom">
                    <img class="navItem__logo" src="" alt="Logo">
                </a>
                <a class="navItem__link--shopping_card" href="">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <div class="shoppingcard__div--counter" id="data-counter">0</div>
                </a>
            </li>
            <li class="list__second-item">
                <a class="navItem__second-link--contact" href="">
                    <button class="navItem__button--contact">contact</button>
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
    <div class="div__search-dropdown">
        <input type="search" name="" id="searchbar">
        <div class="dropdown">
            <button class="dropbtn">Filter</button>
            <div class="dropdown-content">
                <a href="index.php?dark_blue=true">dark blue</a>
                <a href="index.php?green_usb=true">green</a>
                <a href="index.php?licht_blue_usb=true">light blue</a>
                <a href="index.php?orange_usb=true">orange</a>
                <a href="index.php?pink_usb=true">pink</a>
                <a href="index.php?black_usb=true">black</a>
            </div>
        </div>
    </div>
    <div class="div__seudo-products">
        <?php

// IF statement about the filter button
        if (isset($_GET['dark_blue'])) {
            print("<div class=\"products__card\">");
            print("    <img id=\"Usb-Dark-Blue\" class=\"products-card__img\" src=\"$dark_blue_usb->image\" alt=\"placeholder\">");
            print("    <h1 class=\"products-card__product-name\">$dark_blue_usb->product_name</h1>");
            print("    <h2 class=\"products-card__product-price\">$dark_blue_usb->product_price</h2>");
            print("    <button class=\"products-card__button\">Add to card</button>");
            print("</div>"); 
        } elseif (isset($_GET['green_usb'])) {
            print("<div class=\"products__card\">");
            print("    <img id=\"Usb-Green\" class=\"products-card__img\" src=\"$green_usb->image\" alt=\"placeholder\">");
            print("    <h1 class=\"products-card__product-name\">$green_usb->product_name</h1>");
            print("    <h2 class=\"products-card__product-price\">$green_usb->product_price</h2>");
            print("    <button class=\"products-card__button\">Add to card</button>");
            print("</div>"); 
        } elseif (isset($_GET['licht_blue_usb'])) {
            print("<div class=\"products__card\">");
            print("    <img id=\"Usb-Licht-Blue\" class=\"products-card__img\" src=\"$licht_blue_usb->image\" alt=\"placeholder\">");
            print("    <h1 class=\"products-card__product-name\">$licht_blue_usb->product_name</h1>");
            print("    <h2 class=\"products-card__product-price\">$licht_blue_usb->product_price</h2>");
            print("    <button class=\"products-card__button\">Add to card</button>");
            print("</div>"); 
        } elseif (isset($_GET['orange_usb'])) {
            print("<div class=\"products__card\">");
            print("    <img id=\"Usb-Orange\" class=\"products-card__img\" src=\"$orange_usb->image\" alt=\"placeholder\">");
            print("    <h1 class=\"products-card__product-name\">$orange_usb->product_name</h1>");
            print("    <h2 class=\"products-card__product-price\">$orange_usb->product_price</h2>");
            print("    <button class=\"products-card__button\">Add to card</button>");
            print("</div>"); 
        } elseif (isset($_GET['pink_usb'])) {
            print("<div class=\"products__card\">");
            print("    <img id=\"Usb-Pink\" class=\"products-card__img\" src=\"$pink_usb->image\" alt=\"placeholder\">");
            print("    <h1 class=\"products-card__product-name\">$pink_usb->product_name</h1>");
            print("    <h2 class=\"products-card__product-price\">$pink_usb->product_price</h2>");
            print("    <button class=\"products-card__button\">Add to card</button>");
            print("</div>"); 
        } elseif (isset($_GET['black_usb'])) {
            print("<div class=\"products__card\">");
            print("    <img id=\"Usb-Black\" class=\"products-card__img\" src=\"$black_usb->image\" alt=\"placeholder\">");
            print("    <h1 class=\"products-card__product-name\">$black_usb->product_name</h1>");
            print("    <h2 class=\"products-card__product-price\">$black_usb->product_price</h2>");
            print("    <button class=\"products-card__button\">Add to card</button>");
            print("</div>"); 
        } else {

            print("</div>");
            print("<div class=\"div__products\">");

            foreach ($dataObject as $items) {
                asort($dataObject);

                print("<div class=\"products__card\">");
                print("    <img class=\"products-card__img\" src=\"$items->image\" alt=\"placeholder\">");
                print("    <h1 class=\"products-card__product-name\">$items->product_name</h1>");
                print("    <h2 class=\"products-card__product-price\">$items->product_price</h2>");
                print("    <button class=\"products-card__button\">Add to card</button>");
                print("</div>");
            }
        }
        ?>
    </div>
    <footer class="footer">
        <h3 class="footer__texts">@Ruiz M. Phang</h3>
    </footer>
</body>
</html>