<?php

$id=$_POST["txtId"];
$titulo=$_POST["txtTitulo"];
$desc=$_POST["txtDesc"];
$imagen=$_POST["imagen"];
//conexion
$cone= mysqli_connect("localhost", "root", "oracle", "mis_perris");
$nombre_imagen="imagen".$id."-".$titulo;
$sql="insert into galeria values ($id, '$titulo', '$desc', '$nombre_imagen')";
$reg= mysqli_query($cone, $sql);
if ($_FILES["imagen"]['type']=="image/jpg"){
    copy($_FILES["imagen"]["tpm_name"], "../img/".$nombre_imagen.".jpg");
}