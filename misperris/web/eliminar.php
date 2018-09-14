<?php

include_once '../controlador/Daoperris.php';
$dao=new Daoperris();
$rut=$_GET["rut"];
$resp=$dao->Eliminar($rut);
//redireccionar
header("location:listar.php");

