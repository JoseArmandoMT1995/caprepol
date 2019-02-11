<?php
///// INCLUIR LA CONEXIÓN A LA BD /////////////////
include('conexion.php');
///// CONSULTA A LA BASE DE DATOS /////////////////
$prestador="SELECT * FROM prestador order by idAlumno";
$resPrest=$conexion->query($prestador);
?>

<?php include_once 'header.php'; ?>


<br>
<br>
<br>
 <H2>DESCARGA DE REPORTES</H2><BR>
    

		<section>
			<table class="table">
				<tr class="bg-primary">
					<th>idPrestador</th>
					<th>idConvenio</th>
					<th>NombreAlumno</th>
					<th>Inicio</th>
					<th>Termino</th>
					<th>Proyecto</th>
					<th>Carrera</th>
					<th>Escuela</th>
					<th>Area</th>
					<th>Ubicacion</th>
					<th>Piso</th>
					<th>Status</th>
					<th>Obsercaciones</th>

				
				</tr>
				<?php
				while ($registroPrest = $resPrest->fetch_array(MYSQLI_BOTH))
				{
					
					echo'<tr>
						 <td>'.$registroPrest['idPrestador'].'</td>
						 <td>'.$registroPrest['idConvenio'].'</td>
						 <td>'.$registroPrest['NombreAlumno'].'</td>
						 <td>'.$registroPrest['Inicio'].'</td>
						 <td>'.$registroPrest['Termino'].'</td>
						 <td>'.$registroPrest['Proyecto'].'</td>
						 <td>'.$registroPrest['Carrera'].'</td>
						 <td>'.$registroPrest['Escuela'].'</td>
						 <td>'.$registroPrest['Area'].'</td>
						 <td>'.$registroPrest['Ubicacion'].'</td>
						 <td>'.$registroPrest['Piso'].'</td>
						 <td>'.$registroPrest['Status'].'</td>
						 <td>'.$registroPrest['Observaciones'].'</td>
						
						 </tr>';
				}
				?>
			</table>
		</section>

		<form method="post" class="form" action="reporte.php">
		<input type="date" name="fecha1">
		<input type="date" name="fecha2">
		<input type="submit" name="generar_reporte">
		</form>

<br>
<br>
<br>
 <ol class="breadcrumb">
<li><a  href="/ProyectodeResidencias/?c=convenio">Ir a Pagina Convenios</a>
<li><a  href="/ProyectodeResidencias/?c=prestador">Ir a Pagina Prestadores</a>


	</ol>



	</body>
</html>


<?php include_once 'footer.php'; ?>

