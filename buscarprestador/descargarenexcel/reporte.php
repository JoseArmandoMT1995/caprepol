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
	fputcsv($salida, array('idPrestador','idConvenio', 'NombreAlumno','Inicio','Termino','Proyecto', 'Carrera', 'Escuela','Area','Ubicacion', 'Piso','Status','Observaciones'));
	// QUERY PARA CREAR EL REPORTE
	
	$reporteCsv=$conexion->query("SELECT *  FROM prestador where Inicio and Termino BETWEEN '$fecha1' AND '$fecha2' ORDER BY idAlumno");
	while($filaR= $reporteCsv->fetch_assoc())
		fputcsv($salida, array($filaR['idPrestador'], 
								$filaR['idConvenio'],
								$filaR['NombreAlumno'],
								$filaR['Inicio'],
								$filaR['Termino'],
								$filaR['Proyecto'],
								$filaR['Carrera'],
								$filaR['Escuela'],
								$filaR['Area'],
								$filaR['Ubicacion'],
								$filaR['Piso'],
								$filaR['Status'],
								$filaR['Observaciones']));
                                $filaR['Vigencia']));

}

?>