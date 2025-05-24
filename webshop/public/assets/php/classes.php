<?php

class products{
    public $image;
    public $product_name;
    public $product_price;
}

$dark_blue_usb = new products();
$dark_blue_usb->image ="assets/img/donker_blauwe_usb.jpg";
$dark_blue_usb->product_name = "usb-stick 128mb";
$dark_blue_usb->product_price ="€1.00";

$groene_usb = new products();
$groene_usb->image ="assets/img/groene_usb.jpg";
$groene_usb->product_name = "usb-stick 128mb";
$groene_usb->product_price ="€1.00";

$dataObject = [$dark_blue_usb, $groene_usb];

?>