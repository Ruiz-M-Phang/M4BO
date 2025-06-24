<?php

// "http://localhost:88/index.php?Home"
$home = "shoppingcard";

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
<body onload="setTimeout(myFunction, 1000);">
    <!-- <header class="message__under-construction"> -->
        <!-- The header class and contents in the header are tempary -->
         <!-- <h3 class="under-construction__texts">This page is under construction</h3> -->
    <!-- </header> -->
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
    <section class="winkelwagen">
        <div class="winkelwagen__tekst">
            <!-- hier komen jouw producten die wilt kopen -->
            <h1>This is what you've selected</h1>
        </div>
    </section>
    <footer class="footer">
        <h3 class="footer__texts">@Ruiz M. Phang</h3>
    </footer>
</body>
</html>