<?php

include_once 'conexion.php';
include_once '../modelo/perro.php';

class Daoperris {

    private $cone;
    private $rut;

    function __construct() {
        try {
            $this->cone = new conexion();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function Grabar($x) {
        try {
            $sql = "insert into formulario "
                    . "values('@ru','@nom',@te,'@co', '@fe','@ci', '@vi')";
            $sql = str_replace("@ru", $x->getRut(), $sql);
            $sql = str_replace("@nom", $x->getNombre(), $sql);
            $sql = str_replace("@te", $x->getTelefono(), $sql);
            $sql = str_replace("@co", $x->getCorreo(), $sql);
            $sql = str_replace("@fe", $x->getFecha_nacimiento(), $sql);
            $sql = str_replace("@ci", $x->getCiudad(), $sql);
            $sql = str_replace("@vi", $x->getTipo_vivienda(), $sql);
            
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function Modificar($perro, $filtro) {
        try {
            $sql = "update formulario set nombre='@nom',telefono= @te, correo='@co', fecha_nacimiento='@fe' "
                    . " where rut=".$filtro;
            
            $sql = str_replace("@nom", $perro->getNombre(), $sql);
            $sql = str_replace("@te", $perro->getTelefono(), $sql);
            $sql = str_replace("@co", $perro->getCorreo(), $sql);
            $sql = str_replace("@fe", $perro->getFecha_nacimiento(), $sql);
            
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function Listar() {
        try {
            $sql = "select * from formulario";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function Eliminar($rut) {
        try {
            $sql = "delete from formulario where rut='$rut'";
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function Buscar($rut) {
        try {
            $sql = "select * from formulario where rut='$rut'";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}


