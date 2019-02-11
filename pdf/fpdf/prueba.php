
<?php

require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hola, Mundo');
$pdf->Cell(80,30,'reynas',0,1,'C');
$pdf->Output();
?>