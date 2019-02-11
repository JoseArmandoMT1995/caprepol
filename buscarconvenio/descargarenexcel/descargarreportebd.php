<?php
///// INCLUIR LA CONEXIÓN A LA BD ///////////////// 
include('conexion.php');
///// CONSULTA A LA BASE DE DATOS ///////////////// 
$convenio="SELECT * FROM convenio order by idConvenio";
$resConv=$conexion->query($convenio);
?>
<?php include_once('header.php'); 	 ?>
<?php include_once('navegador.php'); ?>
<?php include_once('cabecera.php');  ?>
<br>
<br>
<br>
 <H2>DESCARGA DE REPORTES</H2>
 <BR>
    
 		<div style="
                        background: #E8E6E6;
                        width: 100%;
                        height: 250px;
                        overflow: scroll;" >
		<section>
			<table class="table">
				<tr class="bg-primary">
					<th>idConvenio</th>
					<th>NombreEscuela</th>
					<th>Carreras</th>
					<th>Vigencia</th>
				
				</tr>
				<?php
				while ($registroConvenio = $resConv->fetch_array(MYSQLI_BOTH))
				{
					echo'<tr>
						 <td>'.$registroConvenio['idConvenio'].'</td>
						 <td>'.$registroConvenio['NombreEscuela'].'</td>
						 <td>'.$registroConvenio['Carreras'].'</td>
						 <td>'.$registroConvenio['Vigencia'].'</td>
						
						 </tr>';
				}
				?>
			</table>

		</section>
	</div>
		<form method="post" class="form" action="reporte.php">
		<input type="date" name="fecha1">
		<input type="date" name="fecha2">
		<input type="submit" name="generar_reporte">
		</form>
<br>
<br>
<br>
 
	</body>
</html>
<br><br><br>

<?php include ('footer.php'); ?>