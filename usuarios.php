<?php
class Usuarios{
    public $nombre;
    public $apellido;
    private $fecha_nacimiento;

function __construct($nom, $apel, $fenac){
  $this -> nombre = $nom;
  $this -> apellido = $apel;
  $this -> fecha_nacimiento = $fenac; 
}
public function mostrar_usuario(){
    echo "<p>Nombre: ".$this->nombre."</p>";
    echo "<p>Apellido: ".$this->apellido."</p>";
    echo "<p>Fecha de Nacimiento: ".$this->fecha_nacimiento."</p>";
}
}
?>