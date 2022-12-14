<?php
    $picture = "imagenes_unidad4/pexels-dmytro-kormylets-12192456.jpg";
    $marca_de_agua = "imagenes_unidad4/marca.png";
    $dinamica = imagecreatefrompng($marca_de_agua);
    $extraen = substr($picture,-3);
    $extraen = strtolower($extraen);

    switch($extraen){
        case 'gif':
            $pic2 = imagecreatefromgif($picture);
            break;
        case 'jpg':
            $pic2 = imagecreatefromjpeg($picture);
            break;
        case 'png':
            $pic2 = imagecreatefrompng($picture);
            break;
    }
    imagecopy($pic2,$dinamica,(imagesx($pic2)/2),(imagesy($pic2)/2),(imagesx($dinamica)/2),(imagesy($dinamica)/2),imagesx($dinamica),
    imagesy($dinamica));
    header("Content-type: image/jpeg");
    imagejpeg($pic2);
    imagedestroy($dinamica);
    imagedestroy($pic2);
?>