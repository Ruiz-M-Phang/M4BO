<?php

// "http://localhost:88/index.php?page=products"
$overview = "products";

$_GET['page'] = $overview;

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
                <a class="navItem__link--Home" href="index.php?page=home">
                    <img class="navItem__logo" src="" alt="Logo">
                </a>
                <a class="navItem__link--shopping_card" href="">
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
    <div class="div__search-dropdown">
        <!-- <input type="search" name="" id="searchbar"> -->
        <div class="dropdown">
            <button class="dropbtn">Filter</button>
            <div class="dropdown-content">
                <a href="overview.php?filter=green">green</a>
                <a href="overview.php?filter=blue">blue</a>
                <a href="overview.php?filter=orange">orange</a>
                <a href="overview.php?filter=pink">pink</a>
                <a href="overview.php?filter=black">black</a>
            </div>
        </div>
    </div>
    <div class="div__seudo-products">
        <?php

// IF statement about the filter button
            function filter_color($product){
                $filter = $_GET["filter"];
                if($product->color == $filter){
                    return true;
                } else {
                    return false;
                }
            }

            if ($_GET["filter"] == true) {
            $newArray = array_filter($dataObject, "filter_color");

            print("</div>");
            print("<div class=\"div__products\">");
            
            foreach ($newArray as $items) {
                asort($dataObject);

                print("<div class=\"products__card\">");
                print("    <img class=\"products-card__img\" src=\"$items->image\" alt=\"placeholder\">");
                print("    <h1 class=\"products-card__product-name\">$items->product_name</h1>");
                print("    <h2 class=\"products-card__product-price\">$items->product_price</h2>");
                print("    <button class=\"products-card__button\">Add to card</button>");
                print("</div>");
            }} else {
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