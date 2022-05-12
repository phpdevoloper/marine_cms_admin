<?php
error_reporting(0);	
session_start();

function getRandomWord($len = 5) {
    $word = array_merge(range('0', '9'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $len);
}

$ranStr = getRandomWord();

$_SESSION["vercode"] = $ranStr;
$font = 'Akashi.ttf';



$height = 35; //CAPTCHA image height
$width = 150; //CAPTCHA image width
$font_size = 24; 

$image_p = imagecreate($width, $height);
$graybg = imagecolorallocate($image_p, 245, 245, 245);
$textcolor = imagecolorallocate($image_p, 34, 34, 34);

imagefttext($image_p, $font_size, -2, 15, 26, $textcolor, 'fonts/mono.ttf', $ranStr);
//imagestring($image_p, $font_size, 5, 3, $ranStr, $white);
imagestring($im, rand(1, 7), rand(1, 7),
            rand(1, 7),  $captcha, $fg);
  
// prevent client side  caching
header("Expires: Wed, 1 Jan 2015 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revаlidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

//send image to browser
header ("Content-type: image/PNG");

imagepng($image_p);
imagedestroy($image_p);

	
?>