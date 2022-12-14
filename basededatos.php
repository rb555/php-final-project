<?php
class Basededatos
{
    private $conexion;
    public $errorconexion;
    function __construct($servidor, $usuario, $password, $base)
    {
        if (!$this->_connect($servidor, $usuario, $password, $base)) {
            $this->errorconexion = $this->conexion->connection_error;
        }
    }
    private function _connect($servidor, $usuario, $password, $base)
    {
        $this->conexion = new mysqli($servidor, $usuario, $password, $base);
    }
    public function ejecutarConsulta($query)
    {
        $tipo = strtoupper(substr($query, 0, 6));
        switch ($tipo) {
            case 'INSERT':
                $resulta = $this->conexion->query($query);
                if (!$resulta) {
                    $this->error = $this->conexion->error;
                    return false;
                } else {
                    return $this->conexion->insert_id;
                }
                break;
            case 'SELECT':
                $resulta = $this->conexion->query($query);
                if (!$resulta) {
                    $this->error = $this->conexion->error;
                    return false;
                } else {
                    while ($fila = $resulta->fetch_assoc()) {
                        $array_resulta[] = $fila;
                        return $array_resulta;
                    }
                }
                break;
            case 'UPDATE':
            case 'DELETE':
                $resulta = $this->conexion->query($query);
                if (!$resulta) {
                    $this->error = $this->conexion->error;
                    return false;
                } else {
                    return $this->conexion->affected_rows;
                }
                break;
            default:
                $this->error = 'Consulta no válida';
                break;
        }
    }
}
