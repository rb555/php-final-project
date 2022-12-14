<?php
    if(isset($_POST['fecha_cargada'])){
        function diasFaltantes($fecha){
            $fecha = date("Y-m-d");
            $convierte = strtotime($fecha) - strtotime($fecha);
            $calculado = intval($convierte/86400);
            echo "<p>Días restantes para la reserva: $calculado</p>";
        }
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $anio = $_POST['anio'];
    
        diasFaltantes($dia.'-'.$mes.'-'.$anio);
    } 
    header("Location: unidad2.php?ok");
?>