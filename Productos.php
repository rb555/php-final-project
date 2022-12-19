<?php
class Productos{
    /* creamos una variable de clase privada que es la base de datos*/
    private $bd;

    public function __construct($base)
    {
        $this ->bd= $base;
    }
    /* creamos las funciones para la manipulación de datos */
    public function insertarProducto($producto,$precio,$categoria){
        $respuesta = $this->bd->ejecutarConsulta("INSERT INTO productos VALUES(DEFAULT,'$producto','$precio','$categoria')");
        return $respuesta;
    }

    public function seleccionarProducto(){
        $respuesta = $this->bd->ejecutarConsulta("SELECT * FROM productos ORDER BY producto");
        return $respuesta;
    }
    public function seleccionProducto($id){
        $respuesta = $this->bd->ejecutarConsulta("SELECT * FROM productos WHERE codigo=$id");
        return $respuesta;
    }
    public function eliminaProducto($id){
        $respuesta = $this->bd->ejecutarConsulta("DELETE FROM productos WHERE codigo=$id");
        return $respuesta;
    }
    public function actualizaProducto($id, $producto,$precio,$categoria){
        $respuesta = $this->bd->ejecutarConsulta("UPDATE productos SET producto='$producto',precio=$precio,categoria='$categoria'
        WHERE codigo=$id");
        return $respuesta;
    }

}
?>