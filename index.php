<?php
    include './vendor/autoload.php';

    // include './src/phpqrcode.php';

    // die('123456789');
    use \chenbool\Code\Barcode;
    Barcode::code39('text to encode');