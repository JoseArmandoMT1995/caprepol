<?php
session_start(); 
if ($_SESSION["usuario"]=="AA") {
    $usuario=       "Super Administrador";
    $id_usuario=    $_SESSION["id"];
    $nombre_usuario=$_SESSION["nombre"];
    $password=      $_SESSION["contraseña"];
    $tipo_usuario=  $_SESSION["usuario"];
}else{
    $usuario=       "Administrador";
    $id_usuario=    $_SESSION["id"];
    $nombre_usuario=$_SESSION["nombre"];
    $password=      $_SESSION["contraseña"];
    $tipo_usuario=  $_SESSION["usuario"];
}
?>
<div class="dropdown-menu-button">
                            <i class="fa fa-diamond" style="font-size:15px"> </i>  Administración <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i>
                        </div>
                        <ul class="list-unstyled">
                                             
                        <li><a href="http://localhost/ProyectodeResidencias1/?c=convenio"><i class="fa fa-handshake-o" style="font-size:15px"> </i>  Convenios</a></li>
                        <li><a href="http://localhost/ProyectodeResidencias1/?c=convenio&a=Nuevo"><i class="fa fa-handshake-o" style="font-size:15px"> </i>  Agregar Convenio</a></li>
                        <li><a href="http://localhost/ProyectodeResidencias1/?c=prestador&a=Nuevo"><i class="fa fa-handshake-o" style="font-size:15px"> </i>  Agregar Prestador</a></li>
                        <li><a href="http://localhost/ProyectodeResidencias1/buscarprestador/buscar1.php"><i class="fa fa-handshake-o" style="font-size:15px"> </i>  Buscar Prestador</a></li>
                        <li><a href="http://localhost/ProyectodeResidencias1/buscarconvenio/buscar1.php"><i class="fa fa-handshake-o" style="font-size:15px"> </i>  Buscar Convenio</a></li>
                        <li><a href="http://localhost/ProyectodeResidencias1/buscarprestador/descargarenexcel/descargarreportebd.php"><i class="fa fa-handshake-o" style="font-size:15px"> </i>  Descargar Reporte Prestadores</a></li>
                        <li><a href="http://localhost/ProyectodeResidencias1/buscarconvenio/descargarenexcel/descargarreportebd.php"><i class="fa fa-handshake-o" style="font-size:15px"> </i>  Descargar Reporte Convenio</a></li>

                        <li><a href="http://localhost/ProyectodeResidencias1/?c=convenio"><i class="fa fa-handshake-o" style="font-size:15px"> </i>  Crear reporte de base de datos</a></li>

                        <li><a href="http://localhost/ProyectodeResidencias1/?c=prestador"><i class="fa fa-vcard" style="font-size:15px"> </i>  Prestadores</a>
                        </li>