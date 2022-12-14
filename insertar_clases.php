<?php
    $unidad=$_POST['unidad'];
    $fecha=$_POST['fecha'];
    include("conectando.php");
    mysqli_query($listado,"INSERT INTO clases VALUES(DEFAULT,'$unidad','$fecha')");
    header("Location: ver_clases.php?ok");
?>