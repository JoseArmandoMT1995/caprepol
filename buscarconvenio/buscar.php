<?php

	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "caprepol";
	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }
    $salida = "";
    $query ="SELECT * FROM convenio ORDER BY idConvenio";
    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM convenio WHERE idConvenio LIKE '%$q%' OR NombreEscuela LIKE '%$q%' OR Carreras LIKE '%$q%' OR Vigencia LIKE '$q' ";
    }
    $resultado = $conn->query($query);
    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='table'>
    			<thead>
    				<tr class='success'>
    					<td>idConvenio</td>
    					<td>NombreEscuela</td>
    					<td>Carreras</td>
    					<td>Vigencia</td>
    				</tr>
    			</thead>
    	<tbody>";
    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['idConvenio']."</td>
    					<td>".$fila['NombreEscuela']."</td>
    					<td>".$fila['Carreras']."</td>
    					<td>".$fila['Vigencia']."</td>
    				</tr>";
    	}
    	$salida.="</tbody></table>";
    }else{
        $salida.="NO HAY DATOS :(";
    }
    echo $salida;
    $conn->close();

?>