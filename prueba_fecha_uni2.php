<?php
if($_POST){
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $anio = $_POST['anio'];
    
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $fecha_actual = date('d-m-Y', time());
    $reserva = strtotime($dia.'-'.$mes.'-'.$anio);        
              
    if($reserva  >= $fecha_actual){
        echo "<p>Upss!!! La fecha no es válida.Ingrese una nueva fecha.</p>";
         
        } else {    
     $calculando = strtotime($fecha_actual) - strtotime($reserva);
     echo "<p>Genial!!!. Faltan: ".$calculando / (86400). " días para el evento. </p>";
       
        }
    }
?>