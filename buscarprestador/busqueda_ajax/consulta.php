<?
/////// CONEXIÓN A LA BASE DE DATOS /////////
$host = 'localhost';
$basededatos = 'caprepol';
$usuario = 'root';
$contraseña = '';

$conexion = new mysqli($host, $usuario,$contraseña, $basededatos);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM convenio ORDER BY idConvenio";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['convenio']))
{
	$q=$conexion->real_escape_string($_POST['convenio']);
	$query="SELECT * FROM convenio WHERE 
		idConvenio LIKE '%".$q."%' OR
		NombreEscuela LIKE '%".$q."%' OR
		Carreras LIKE '%".$q."%' OR
		Vigencia LIKE '%".$q."%'";
}

$buscar=$conexion->query($query);
if ($buscar->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
			<td>idConvenio</td>
			<td>NombreEscuela</td>
			<td>Carreras</td>
			<td>Vigencia</td>
		
		</tr>';

	while($fila= $buscar->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$fila['idConvenio'].'</td>
			<td>'.$fila['NombreEscuela'].'</td>
			<td>'.$fila['Carreras'].'</td>
			<td>'.$fila['Vigencia'].'</td>
		
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>
