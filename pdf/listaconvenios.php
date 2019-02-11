<?php
include_once 'caprepol.php';
$query="Select * From convenio";
$datos=$crud->consulta($query);
//if($datos->rowCount()>0){

		
require('fpdf/fpdf.php');
//header("content-type: application/PDF");    josuemanuel@gmail.com
$fuente="arial";
$pdf= new FPDF();
$pdf->AddPage();
$pdf->SetFont($fuente,'',16);
$pdf->SetDrawColor(200);
$pdf->Cell(0,10,"Caja de Prevision de la Policia Preventiva de la Ciudad de Mexico",1,1,"C",0,"........");
$pdf -> Cell(0,10,"Desarrollo web del lado del servidor",1,1,"C");
$pdf->SetFont($fuente,'',16);

//$archivo="class.crud.php";
//$clientes=($archivo);
$pdf->setTextColor(60,70,200);
$pdf->Cell(5,10,"lista de Cnvenios",0,1,"L");
$pdf->SetDrawColor(50);
$pdf->ln();
$pdf->cell(28,10,"idConvenio",1,0,"C",1);
$pdf->cell(20,10,"NombreEscuela",1,0,"C",1);
$pdf->cell(40,10,"Carreras",1,0,"C",1);
$pdf->cell(18,10,"Vigencia",1,0,"C",1);
$pdf->Ln(); 

//$query="Select * from productos";

//for ($x=0; $x< count($clientes) ; $x++) 

			while($row=$datos->fetch(PDO::FETCH_ASSOC))
		
{ 

	$idConvenio=$row["idConvenio"];
	$NombreEscuela=$row["NombreEscuela"];
	$Carreras=$row["Carreras"];
	$Vigencia=$row["Vigencia"];

	/*$nom=$clientes->cliente[$x]->Nombre;
	$rf=$clientes->cliente[$x]->Descripcion;
	$ade=$clientes->cliente[$x]->Precio;
	$fec=$clientes->cliente[$x]->UnidadMedida;
	$tel=$clientes->cliente[$x]->Existencia;
	
*/
$pdf->Cell(28,10,$idConvenio,1,0,"C",0);
$pdf->Cell(20,10,$NombreEscuela,1,0,"C",0);
$pdf->Cell(40,10,$Carreras,1,0,"C",0);
$pdf->Cell(18,10,$Vigencia,1,0,"C",0);
/*$pdf->Cell(48,10,$Medida,1,0,"C",0);
$pdf->Cell(35,10,$existencia,1,0,"C",0);

/*$pdf->Cell(25,10,$nom,1,0,"C",0);
$pdf->cell(35,10,$rf,1,0,"C",0);
$pdf->cell(20,10,$ade,1,0,"C",0);
$pdf->cell(48,10,$fec,1,0,"C",0);
$pdf->cell(35,10,$tel,1,0,"C",0);
*/
$pdf->Ln(); 
}

$pdf->Output("");

//}
?>


