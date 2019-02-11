<?php  
//verifica si existen las variables
if (isset($_POST['nombre']) && isset($_POST['password'])) {
	//guarda las variables
	$nombre=		$_POST['nombre'];
	$contraseña=	$_POST['password'];
	
	$mysqli = new mysqli("localhost", "root", "", "caprepol");	
	if ($mysqli->connect_errno) {
	    // La conexión falló. ¿Que vamos a hacer? 
	    // Se podría contactar con uno mismo (¿email?), registrar el error, mostrar una bonita página, etc.
	    // No se debe revelar información delicada

	    // Probemos esto:
	    echo "Lo sentimos, este sitio web está experimentando problemas.";

	    // Algo que no se debería de hacer en un sitio público, aunque este ejemplo lo mostrará
	    // de todas formas, es imprimir información relacionada con errores de MySQL -- se podría registrar
	    echo "Error: Fallo al conectarse a MySQL debido a: \n";
	    echo "Errno: " . $mysqli->connect_errno . "\n";
	    echo "Error: " . $mysqli->connect_error . "\n";
	    
	    // Podría ser conveniente mostrar algo interesante, aunque nosotros simplemente saldremos
	    exit;
	}
	$sql = "SELECT * FROM usuario WHERE nombre_usuario = '$nombre'  AND clave ='$contraseña'";
	if (!$resultado = $mysqli->query($sql)) {
	    // ¡Oh, no! La consulta falló. 
	    echo "Lo sentimos, este sitio web está experimentando problemas.";

	    // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
	    // cómo obtener información del error
	    echo "Error: La ejecución de la consulta falló debido a: \n";
	    echo "Query: " . $sql . "\n";
	    echo "Errno: " . $mysqli->errno . "\n";
	    echo "Error: " . $mysqli->error . "\n";
	    exit;
	}	
	$actor = $resultado->fetch_assoc();
	$sql_privilegios = "SELECT * FROM privilegios WHERE id_usuario = '$actor[id]'";
	if (!$resultadoP = $mysqli->query($sql_privilegios)) {
	    // ¡Oh, no! La consulta falló. 
	    echo "Lo sentimos, este sitio web está experimentando problemas.";

	    // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
	    // cómo obtener información del error
	    echo "Error: La ejecución de la consulta falló debido a: \n";
	    echo "Query: " . $sql . "\n";
	    echo "Errno: " . $mysqli->errno . "\n";
	    echo "Error: " . $mysqli->error . "\n";
	    exit;
	}	
	$privilegios=$resultadoP->fetch_assoc();	
	print_r($actor);
	echo "<hr>";
	print_r($privilegios);
	echo "<hr>";
	session_start();
	$_SESSION["id"]=$actor['id'];
	$_SESSION["nombre"]=$actor['nombre_usuario'];
	$_SESSION["contraseña"]=$actor['clave'];
	$_SESSION["usuario"]=$actor['tipo_usuario'];
	$_SESSION["privilegios"]=$privilegios;

	if (is_array($actor)) {
		header("location: index.php");
	}
	else{
		header("location: login.html");
	}

}else{
	header("location: login.html");
}



?>