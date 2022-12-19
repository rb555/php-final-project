<?php
    class Carrito{
        private $bd;

        public function __construct ($base){
            $this->bd=$base;
        }
/*una vez creada la clase carrito agregamos tres métodos: introducir_compra() eliminar_compra() y listar_compra()*/
    public function introducir_compra($producto,$categoria,$precio){
    $respuesta = $this->bd->ejecutarConsulta("INSERT INTO compras VALUES(DEFAULT,'$producto','$categoria','$precio')");
    return $respuesta;
    }

    public function eliminar_compra($id){
    $respuesta = $this->bd->ejecutarConsulta("DELETE FROM compras WHERE codigo=$id");    
    }

    public function listar_compra($id, $producto,$categoria,$precio){ 
    $respuesta = $this->bd->ejecutarConsulta("UPDATE productos SET producto='$producto',categoria='$categoria',precio=$precio
    WHERE codigo=$id");
    }

    }
