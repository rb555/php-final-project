<?php
class Basededatos{
    /*creación de variables de clase */
    private $conexion;
    public $error;

    public function __construct($servidor, $usuario, $clave, $base){
        if(!$this-> _connect($servidor, $usuario, $clave, $base)) {
            $this -> error = $this -> conexion -> connect_error;
        }
    }
    /* generamos la función de conexión*/
    private function _connect($servidor, $usuario, $clave, $base){
        $this -> conexion = new mysqli($servidor, $usuario, $clave, $base);
    }
    /* creamos la función ejecutar consulta para el query */
    public function ejecutarConsulta($query){
        /*creación de variable tipo para extraer los primeros 6 caracteres de la instrucción del query */
        $tipo = strtoupper(substr($query, 0,6));

        switch($tipo) {
            case 'INSERT':
                $resultado = $this -> conexion ->query($query);
                if (!$resultado) {
                    $this -> error = $this -> conexion -> error;
                    return false;
                } else {
                    return $this->conexion->insert_id;
                }
                break;
                case 'SELECT':
                    $resultado = $this->conexion->query($query);
                    if (!$resultado) {
                        $this ->error = $this->conexion->error;
                        return false;
                    } else {
                        while ($fila = $resultado->fetch_assoc()) {
                            $array_resultado[]=$fila;
                        }
                        return $array_resultado;
                    }
                    break;
            case 'UPDATE':
            case 'DELETE':
                $resultado = $this -> conexion ->query($query);
                if (!$resultado) {
                    $this -> error = $this->conexion->error;
                    return false;
                } else {
                    return $this->conexion->affected_rows;
                }
                break;
            default:
                $this ->error = 'Consulta no válida';
                break;
        }
    }
}

?>