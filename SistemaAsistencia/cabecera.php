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
<div class="content-page-container full-reset custom-scroll-containers">

        
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="../assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles"><?php  echo $usuario?>: <?php  echo $nombre_usuario?></span>
                </li>
                <li>
                    <a href="http://localhost/ProyectodeResidencias1/login.php" ><li><i class="zmdi zmdi-power" style="font-size:25px"></i>
                    </a>
                </li>
                    
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
            </ul>
        </nav>