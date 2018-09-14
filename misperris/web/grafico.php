<?php

//definicion de los graficos
require './graficos/jpgraph-4.2.2/src/jpgraph.php';
require'./graficos/jpgraph-4.2.2/src/jpgraph_bar.php';
//crear conexion
$cone= mysqli_connect("localhost", "root", "oracle", "mis_perris");
$sql="select * from formulario";
$reg= mysqli_query($cone, $sql);
//guardar los datos para eje x e Y
//Se almacena en "arreglos"
while ($row = mysqli_fetch_array($reg)) {
    $data[]=$row[4];//años
    $etiquetas[]=$row[0];//patente
    
}
//se crea el grafico
$grafico=new Graph(500,500,'formulario');
//definicion de la escala
$grafico->setScale('textint');
//definicion de titulo
$grafico->title->set('Grafico de Mis Perris');//titulo
$grafico->xaxis->title->set('Perros');//titulo eje x
$grafico->yaxis->title->set('Edad');//titulo eje Y
$grafico->xaxis->SetTickLabels($etiquetas);//asignar los textos en eje x
//creacion grafico de barras
$barra=new BarPlot($data);
$barra->SetWidth(10);//asignar el ancho de la barra
//se asigna el grafico de barra al diseño del grafico principal
$grafico->Add($barra);
//se imprime el grafico
$grafico->Stroke();



