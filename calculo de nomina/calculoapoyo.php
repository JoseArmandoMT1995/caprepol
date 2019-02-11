
<?php include_once 'header.php'; ?>



<title> Cálculo de Apoyo</title>
</head>
<body>
<h1>Resultados del calculo</h1>
<div>
	<?php
 	print_r($_GET);
 	echo "<br>";
 	echo "Prestador:  ".$_GET["numPrestador"];


 	echo " - "."<strong>".$_GET["nomPrestador"]."</strong>"."<br>";

	echo "<br>";
    echo "Fecha de pago de : ".$_GET["fecha1"]; echo " ";

    echo "Fecha de pago Hasta : ".$_GET["fecha2"]; 	echo "<br>";

	echo "Sueldo por hora: ".$_GET["sueldoporhora"];
	echo "<br>";

	echo "Dias de asistencia: ".$_GET["diasTrabajados"];
	echo "<br>";

	
    echo "Horas trabajadas: ".$_GET["horastrabajadas"];
	echo "<br>";


	echo "Número de Ausencias: ".$_GET["numAusencias"];
	echo "<br>";

  



	$total =$_GET["sueldoporhora"]*$_GET["horastrabajadas"];
    

	echo "Sueldo" .$total;
?>	<br>
</div>

<a class="btn btn-primary" href="calculoapoyo1.php">Regresar a Calcular  Apoyo</a>

<a class="btn btn-primary" href="calculoapoyo1.php">Guardar Datos</a>


</body></head>



	<?php include_once 'footer.php'; ?>
