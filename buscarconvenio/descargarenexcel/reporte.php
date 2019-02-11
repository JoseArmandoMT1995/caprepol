<?php
include('conexion.php');//CONEXION A LA BD

$fecha1=$_POST['fecha1'];
$fecha2=$_POST['fecha2'];

if(isset($_POST['generar_reporte']))
{
	// NOMBRE DEL ARCHIVO Y CHARSET
	header('Content-Type:text/csv; charset=latin1');
	header('Content-Disposition: attachment; filename="Reporte.csv"');

	// SALIDA DEL ARCHIVO
	$salida=fopen('php://output', 'w');
	// ENCABEZADOS
	fputcsv($salida, array('IdConvenio', 'NombreEscuela', 'Carreras', 'Vigencia'));
	// QUERY PARA CREAR EL REPORTE
	
	$reporteCsv=$conexion->query("SELECT *  FROM convenio where Vigencia BETWEEN '$fecha1' AND '$fecha2' ORDER BY idConvenio");
	while($filaR= $reporteCsv->fetch_assoc())
		fputcsv($salida, array($filaR['idConvenio'], 
								$filaR['NombreEscuela'],
								$filaR['Carreras'],
								$filaR['Vigencia']));

}

?>