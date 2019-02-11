<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "caprepol";

	$conne = new mysqli($servername, $username, $password, $dbname);
      if($conne->connect_error){
        die("Conexión fallida: ".$conne->connect_error);
      }

    $sal = "";

  $query ="SELECT * FROM prestador ORDER BY idPrestador";


    if (isset($_POST['consulta'])) {
    	$q = $conne->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM prestador WHERE idPrestador LIKE '%$q%' OR idConvenio LIKE '%$q%' OR NombreAlumno LIKE '%$q%' OR Inicio LIKE '%$q%'  OR Termino LIKE '%$q%'   OR Proyecto LIKE '%$q%'    OR Carrera LIKE '%$q%'  OR Escuela LIKE '%$q%'  OR Area LIKE '%$q%'   OR Ubicacion LIKE '%$q%'  OR Piso LIKE '%$q%'  OR Status LIKE '%$q%'   OR Observaciones LIKE '%$q%'  '$q' ";
    }

    $resul = $conne->query($query);

    if ($resul->num_rows>0) {
    	$sal.="<table border=1 class='table'>
    			<thead>
    			 <tr class='success'>
    					<td>idPrestador</td>
    					<td>idConvenio</td>
    					<td>NombreAlumno</td>
    					<td>Inicio</td>
    					<td>Termino</td>
    					<td>Proyecto</td>
    					<td>Carrera</td>
    					<td>Escuela</td>
    					<td>Area</td>
    					<td>Ubicacion</td>
    					<td>Piso</td>
    					<td>Status</td>
    				    <td>Observaciones</td>
    					    				
    					
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fil = $resul->fetch_assoc()) {
    		$sal.=" 
                    <tr>
    					<td>".$fil['idPrestador']."</td>
    					<td>".$fil['idConvenio']."</td>
    					<td>".$fil['NombreAlumno']."</td>
    					<td>".$fil['Inicio']."</td>
    					<td>".$fil['Termino']."</td>
    					<td>".$fil['Proyecto']."</td>
    					<td>".$fil['Carrera']."</td>
    					<td>".$fil['Escuela']."</td>
    					<td>".$fil['Area']."</td>
    					<td>".$fil['Ubicacion']."</td>
    					<td>".$fil['Piso']."</td>
    					<td>".$fil['Status']."</td>
    					<td>".$fil['Observaciones']."</td>
    				</tr>";
    	}
    	$sal.="</tbody></table>";
    }else{
    	$sal.="NO HAY DATOS :(";
    }


    echo $sal;

    $conne->close();



?>