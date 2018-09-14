<?php

include_once '../controlador/Daoperris.php';
include_once '../modelo/perro.php';

$rut=$_POST["cboRut"];
$nombre=$_POST["txtNombre"];
$telefono=$_POST["txtTelefono"];
$correo=$_POST["txtCorreo"];
$fecha_nacimiento=$_POST["txtFecha"];


$formulario=new perro();
$formulario->setRut($rut);
$formulario->setNombre($nombre);
$formulario->setTelefono($telefono);
$formulario->setCorreo($correo);
$formulario->setFecha_nacimiento($fecha_nacimiento);

$dao=new Daoperris();
$filas_afectadas=$dao->Modificar($formulario, $rut);
if ($filas_afectadas>0) {
    echo 'Modifico';
} else {
    echo 'No Modifico';
}
