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
<div class="dropdown-menu-button"><i class="fa fa-clock-o" style="font-size:15px"> </i>  Checador <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            
                            <?php  
                            if ($tipo_usuario=="AA") {
                            	echo "<li><a href='/ProyectodeResidencias1/SistemaAsistencia/admin/prestadores/registrar.php'><i class='fa fa-user-plus' style='font-size:15px'> </i>  Dar de alta personal</a></li>";
                            }
                            ?>
                            <li><a href="/ProyectodeResidencias1/SistemaAsistencia/"><i class="fa fa-user" style="font-size:15px"> </i>  Entrada y salida</a></li>
                            <li><a href="/ProyectodeResidencias1/SistemaAsistencia/admin/registros/index.php"><i class="fa fa-users" style="font-size:15px"> </i>  Buscar registro general</a></li>
                            <li><a href="/ProyectodeResidencias1/SistemaAsistencia/admin/prestadores/"><i class="fa fa-user-secret" style="font-size:15px"> </i>  Monitoreo de Personal</a></li>
                        </ul>