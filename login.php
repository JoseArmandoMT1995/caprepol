
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body class="full-cover-background" style="background-image:url(assets/img/font-login.jpg);">
    <div class="form-container">
        <p class="text-center" style="margin-top: 17px;">
           <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
       </p>
       <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión </h4>
       <form method="post" action="login.php">
            <div class="group-material-login">
              <input type="text" class="material-login-control" required="" maxlength="70" name="nombre">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Usuario</label>
            </div><br>
            <div class="group-material-login">
              <input type="password" class="material-login-control" required="" maxlength="70" name="password">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
            </div>
            
            <button class="btn-login" type="submit">Ingresar al sistema &nbsp; <i class="zmdi zmdi-arrow-right"></i></button>
        </form>
    </div>  
</body>
</html>
<?php  
//verifica si existen las variables
  session_start();
session_destroy();
if (isset($_POST['nombre']) && isset($_POST['password'])) {
  //guarda las variables
  $nombre=    $_POST['nombre'];
  $contraseña=  $_POST['password'];
  
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
  //print_r($actor);
  //echo "<hr>";
  //print_r($privilegios);
  //echo "<hr>";
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
    
    //header("location: login.php");
    echo"<script>alert('Ingrese bien o su usuario o su contraseña')</script>";

  }

}else{
  echo "usuario incorrecto!";
}
?>