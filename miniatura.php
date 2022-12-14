<?php
    $fuente = imagecreatefromjpeg("imagenes_unidad4/unidad4.jpg");
    $anchoImagen = imagesx($fuente)*1.5;
    $altoImagen = imagesy($fuente)*1.5;
    $destino = imagecreatetruecolor($anchoImagen,$altoImagen);
    $almacenando = imagecreate($altoImagen,$anchoImagen);
    imagecopyresized($destino,$fuente,0,0,0,0,$altoImagen,$anchoImagen,imagesx($fuente),imagesy($fuente));
    imagejpeg($destino,"imagenes_unidad4/uni4thumb.jpg");
    imagedestroy($destino);
?>