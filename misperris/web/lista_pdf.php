<?php

require './pdf/fpdf.php';

class PDF extends FPDF
{
// Cargar los datos
function LoadData($file)
{
    // Leer las líneas del fichero
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

// Tabla simple
function BasicTable($header, $data)
{
    // Cabecera
    //foreach($header as $col)
       // $this->Cell(40,7,$col,1);
    //$this->Ln();
    // Datos
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(40,6,$col,1);
        $this->Ln();
    }
}


}

$pdf = new PDF();
// Títulos de las columnas
$header = array('Rut', 'Nombre', 'Telefono', 'Correo', 'Fecha_nacimiento');
// Carga de datos
$data = $pdf->LoadData('listado.csv');
$pdf->SetFont('Arial','',19);
$pdf->AddPage('L');
$pdf->Cell(100,20,"Listado de Formulario",0);
$pdf->Ln();
$pdf->SetFont('Arial','',9);
$pdf->BasicTable($header,$data);
//$pdf->Image("img/Maya.jpg", 50,100);
$pdf->Output();
?>



