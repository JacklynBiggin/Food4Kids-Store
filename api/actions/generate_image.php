<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);



    $amount = $_GET['amount'];
    $kids_fed = round($_GET['amount'] / 250);

    //Set the Content Type
    //header('Content-type: image/png');

    // Create Image From Existing File
    $img = imagecreatefrompng(__DIR__ . "/../../assets/images/thank_you_template.png");

    // Allocate A Color For The Text
    $white = imagecolorallocate($img, 255, 255, 255);

    // Set Path to Font File
    $font_path = __DIR__ . "\test.ttf";

    // Set Text to Be Printed On Image
    $text = "I helped feed $kids_fed in Hamilton";

    // Print Text On Image
    imagettftext($img, 25, 0, 75, 300, $white, 'opensans.ttf', $text);

    // Send Image to Browser
    imagepng($img);

    // Clear Memory
    imagedestroy($img);
?> 