<?php

class products{
    public $image;
    public $product_name;
    public $color;
    public $product_price;
}

$dark_blue_usb = new products();
$dark_blue_usb->image ="assets/img/donker_blauwe_usb.jpg";
$dark_blue_usb->color = "blue";
$dark_blue_usb->product_name = "usb-stick 128mb";
$dark_blue_usb->product_price ="€1.00";

$green_usb = new products();
$green_usb->image ="assets/img/groene_usb.jpg";
$green_usb->color = "green";
$green_usb->product_name = "usb-stick 128mb";
$green_usb->product_price ="€1.00";

$licht_blue_usb = new products();
$licht_blue_usb->image ="assets/img/licht_blauw_usb.jpg";
$licht_blue_usb->color = "blue";
$licht_blue_usb->product_name = "usb-stick 128mb";
$licht_blue_usb->product_price ="€1.00";

$orange_usb = new products();
$orange_usb->image ="assets/img/orange_usb.jpg";
$orange_usb->color = "orange";
$orange_usb->product_name = "usb-stick 128mb";
$orange_usb->product_price ="€1.00";

$pink_usb = new products();
$pink_usb->image ="assets/img/roze_usb.jpg";
$pink_usb->color = "pink";
$pink_usb->product_name = "usb-stick 128mb";
$pink_usb->product_price ="€1.00";

$black_usb = new products();
$black_usb->image ="assets/img/zwarte_usb.jpg";
$black_usb->color = "black";
$black_usb->product_name = "usb-stick 128mb";
$black_usb->product_price ="€1.00";

$dataObject = [$dark_blue_usb, $green_usb, $licht_blue_usb, $orange_usb, $pink_usb, $black_usb];

?>