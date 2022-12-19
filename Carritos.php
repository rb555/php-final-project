<?php
class Carrito{
    private $bd;

    function __construct($base){
        $this->bd=$base;
    }
    public function introducirCompra($id_compra){
        $respuesta = $this->bd->ejecutarConsulta("SELECT * FROM compras WHERE codigo=$id_compra");
        return $respuesta;
    }
    public function eliminarCompra($id_compra){
        $respuesta = $this->bd->ejecutarConsulta("DELETE FROM compras WHERE codigo=$id_compra");
        return $respuesta;
    }
    public function listarProductos($id_compra, $producto,$precio,$categoria){
        $respuesta = $this->bd->ejecutarConsulta("UPDATE compras SET producto='$producto',precio=$precio,categoria='$categoria'
        WHERE codigo=$id_compra");
        return $respuesta;
    }

}
?>