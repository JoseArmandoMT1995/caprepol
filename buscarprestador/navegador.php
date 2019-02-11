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
<div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
            Caprepol Cdmx
            </div>
            <div class="full-reset" style="background-color:#2B3D51; padding: 10px 0; color:#fff;">
                <figure>
                    <img src="assets/img/logo.png" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;"> Caprepol Cdmx</p>
            </div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="home.html"><i class="fa fa-home" style="font-size:15px"> </i>  Inicio</a></li>
                    <li>
                        <ul class="list-unstyled">
                           </li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="fa fa-user-plus" style="font-size:15px"> </i>  PRESTADOR <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            
                        <?php 
                        if ($tipo_usuario=="AA") {
                            echo '<li><a href="http://localhost/ProyectodeResidencias1/?c=prestador&a=Nuevo"><i class="fa fa-plus" style="font-size:15px"> </i>  Agregar Prestador</a></li>';
                        }
                        if ($tipo_usuario=="AA" || $tipo_usuario=="AB"){
                            echo '<li><a href="http://localhost/ProyectodeResidencias1/buscarprestador/buscar1.php"><i class="    fa fa-search" style="font-size:15px"> </i>  Buscar Prestador</a></li>';
                        }
                        if ($tipo_usuario=="AA" || $tipo_usuario=="AB"){
                            echo '<li><a href="http://localhost/ProyectodeResidencias1/buscarprestador/descargarenexcel/descargarreportebd.php"><i class="fa fa-cloud-download" style="font-size:15px"> </i>  Descargar Reporte Prestador</a></li>';
                        }
                        
                        if ($tipo_usuario=="AA"){
                            echo '<li><a href="http://localhost/ProyectodeResidencias1/?c=prestador"><i class="fa fa-edit" style="font-size:15px"> </i>  Editar o Eliminar Prestador</a>
                            </li>';
                        }
                        ?>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="fa fa-american-sign-language-interpreting" style="font-size:15px"> </i>  CONVENIO <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <?php  
                            if ($tipo_usuario=="AA"){
                                echo '<li><a href="http://localhost/ProyectodeResidencias1/?c=convenio&a=Nuevo"><i class="fa fa-plus" style="font-size:15px"> </i>  Agregar Convenio</a></li>';
                            }
                            if ($tipo_usuario=="AA" || $tipo_usuario=="AB"){
                                echo '<li><a href="http://localhost/ProyectodeResidencias1/buscarconvenio/buscar1.php"><i class="    fa fa-search" style="font-size:15px"> </i>  Buscar Convenio</a></li>';
                            }
                            if ($tipo_usuario=="AA" || $tipo_usuario=="AB"){
                                echo '<li><a href="http://localhost/ProyectodeResidencias1/buscarconvenio/descargarenexcel/descargarreportebd.php"><i class="fa fa-cloud-download" style="font-size:15px"> </i>  Descargar Reporte Convenio</a></li>';
                            }
                            
                            if ($tipo_usuario=="AA"){
                                echo '<li><a href="http://localhost/ProyectodeResidencias1/?c=convenio"><i class="fa fa-edit" style="font-size:15px"> </i>  Editar o Eliminar Convenio</a>
                            </li>';
                            }
                            ?> 
                        </ul>
                    </li>
                    
                    <li>
                        <div class="dropdown-menu-button"><i class="fa fa-clock-o" style="font-size:15px"> </i>  CHECADOR <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <?php  
                            if ($tipo_usuario=="AA"){
                                echo '<li><a href="/ProyectodeResidencias1/SistemaAsistencia/admin/prestadores/registrar.php"><i class="fa fa-user-plus" style="font-size:15px"> </i>  Dar de alta personal</a></li>';
                            }
                            if ($tipo_usuario=="AA" || $tipo_usuario=="AB"){
                                echo '<li><a href="/ProyectodeResidencias1/SistemaAsistencia/"><i class="fa fa-user" style="font-size:15px"> </i>  Entradas y Salidas</a></li>';
                            }
                            if ($tipo_usuario=="AA" || $tipo_usuario=="AB"){
                                echo '<li><a href="/ProyectodeResidencias1/SistemaAsistencia/admin/registros/index.php"><i class="fa fa-search" style="font-size:15px"> </i>  Buscar registro general</a></li>';
                            }
                            if ($tipo_usuario=="AA"){
                                echo '<li><a href="/ProyectodeResidencias1/SistemaAsistencia/admin/prestadores/"><i class="fa fa-user-secret" style="font-size:15px"> </i>  Monitoreo de Personal</a></li>';
                            }
                            ?>
                        </ul>
                        <?php if ($tipo_usuario=="AA"){ ?>
                            <li><a href="http://localhost/ProyectodeResidencias1/respaldo/php/index.php"><i class="fa fa-database" style="font-size:15px"> </i> RESPALDO DE BASE DE DATOS</a></li>
                            <li>
                                <ul class="list-unstyled">
                            </li>
                        <?php } ?>
                        <ul class="list-unstyled">
                        </ul>   
                    </li>                    
                </ul>
            </div>
        </div>
    </div>