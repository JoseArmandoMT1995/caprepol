<?php include_once 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"> 
	<title>Calculo de Apoyo</title>
</head>
<body>

<section class="principal">


<title> Cálculo de Apoyo</title>
</head>
<body><div>
	<h1>Cálculo de Apoyo</h1>
	<form method="get" action="calculoapoyo.php"><br>

	<label>Fecha de pago de </label>
	<input type="date" name="fecha1">
	<label>Fecha de pago Hasta</label>
	<input type="date" name="fecha2"><br><br>

    <label>idCuenta: </label> 
	<input type="number" valiue="1" name="idCuenta" size="20" min="1" required><br><br>

	<label>idAlumno: </label> 
	<input type="text" valiue="1" name="curp" size="20" min="1" required><br><br>

	<label>idprestador: </label> 
	<input type="number" valiue="1" name="numPrestador" size="20" min="1" required><br><br>
	

	<label>Nombre Prestador:  </label>
	<input type="text" name="nomPrestador" size="20" required><br><br>

	<label>Sueldo por hora:</label>
	<input type="double" size="20" name="sueldoporhora" ><br><br>

	<label>Dias de asistencia: </label>
	<input type="number"size="20"  name="diasTrabajados" ><br><br>

	<label>Número de Ausencias :</label>
	<input type="number" name="numAusencias" size="20"
		value="0" min="0" max="30">	<br><br>

	<label>Horas trabajadas: </label>
	<input type="double" size="20" name="horastrabajadas" ><br>





	



	
    





	
	</select><br>
	<input type="submit" value="Calcular">
<div class="text-left">


<input type="submit" value="Cancelar">
<div class="text-right">



       

	</form>	</div></body></html>




	<?php include_once 'footer.php'; ?>