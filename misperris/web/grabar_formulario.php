<?php

include_once '../controlador/Daoperris.php';
include_once '../modelo/perro.php';

$rut=$_POST["txtRut"];
/*$largo = $rut;
if($largo>=8){
    print 'Rut mal ingresado';
    return;
} else {
    $suma=0; $mult = 3;
for ($index = 0; $index <8; $index++){
    $caracter=$rut.substring($index, $index+1);
    $suma=$suma+ (parseInt($caracter)*$mult);
    $mult--;
    if($mult==1){
        $mult=7;
    }
}
$resi=$suma % 11;
$dv = 11 - $resi;
print '$dv';
}*/

$nombre=$_POST["txtNombre"];
$telefono=$_POST["txtTelefono"];
$correo=$_POST["txtCorreo"];
$fecha_nacimiento=$_POST["txtFecha"];
$ciudad=$_POST[("cboRegion")];
$tipo_vivienda=$_POST[("cboTipo")];



$perris=new perro();
$perris->setRut($rut);
$perris->setNombre($nombre);
$perris->setTelefono($telefono);
$perris->setCorreo($correo);
$perris->setFecha_nacimiento($fecha_nacimiento);
$perris->setCiudad($ciudad);
$perris->setTipo_vivienda($tipo_vivienda);

$dao=new Daoperris();
$filas_afectadas=$dao->Grabar($perris);
if ($filas_afectadas>0) {
    echo 'Grabo';
} else {
    echo 'No Grabo';
}
