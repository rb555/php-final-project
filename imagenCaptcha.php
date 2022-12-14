<?php
session_start();
header("Content-type: image/jpeg");
$img = imagecreate(120,40);
$colorFondo = imagecolorallocate($img,180,215,250);
$colorTexto = imagecolorallocate($img, 60,0,150);
imagestring($img, 5,10,10,$_SESSION['captcha'],$colorTexto);
imagejpeg($img);
?>