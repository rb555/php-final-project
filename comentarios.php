<?php
    if(isset($_POST['enviar'])){
        $cons_form = "<p>Nombre: ".$_POST['nombre']."</p><p>Apellido: ".$_POST['apellido']."</p><p>Correo Electrónico: "
        .$_POST['correo']."</p><p>Comentario: ".$_POST['comentario']."</p><hr/>";
    $guarda = fopen("coment.txt","a+");
    fputs($guarda,$cons_form);
    fpassthru($guarda);
    fclose($guarda);
    }
?>