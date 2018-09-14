<?php

class perro{
    private $rut;
    private $nombre;
    private $telefono;
    private $correo;
    private $ciudad;
    private $fecha_nacimiento;
    private $tipo_vivienda;
    
    function __construct() {
        
    }
    
    function getRut() {
        return $this->rut;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getCiudad() {
        return $this->ciudad;
    }

    function getFecha_nacimiento() {
        return $this->fecha_nacimiento;
    }

    function getTipo_vivienda() {
        return $this->tipo_vivienda;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    function setFecha_nacimiento($fecha_nacimiento) {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    function setTipo_vivienda($tipo_vivienda) {
        $this->tipo_vivienda = $tipo_vivienda;
    }



    



}


