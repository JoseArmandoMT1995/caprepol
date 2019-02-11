<?php  
require("header.php");
require("navegador.php");
require("cabecera.php");
require("conectar.php");
require("determinar_registro.php");
?>
<ol class="breadcrumb">
<h2><li class="active">MENU</li><br></h2>
<li><a class="btn btn-primary" href="/ProyectodeResidencias/plantilla">Inicio</a>
<li><a class="btn btn-primary" href="/ProyectodeResidencias/plantilla/buscarconvenio/buscar1.php">Buscar datos de Convenio</a>
  <li><a class="btn btn-primary" href="/ProyectodeResidencias/plantilla/buscarconvenio/buscar1.php">Buscar datos de Prestadores</a>
    <li><a class="btn btn-primary" href="/ProyectodeResidencias/login/home.php">Regresar al Admin de todo el Sistema</a>

</ol>



<?php
require("footer.php");
?>