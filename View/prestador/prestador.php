<?php




//session_start(); 

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
<h1 class="page-header">Prestadores</h1>



<div style="
        background: #E8E6E6;
        width: 100%;
        height: 250px;
        overflow: scroll;" >
<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">idPrestador</th>
            <th style="width:120px;">idConvenio</th>
            <th style="width:120px;">NombreAlumno</th>
            <th style="width:120px;">Inicio</th>
            <th style="width:120px;">Termino</th>
            <th style="width:120px;">Proyecto</th>
            <th style="width:120px;">Carrera</th>
            <th style="width:120px;">Escuela</th>
            <th style="width:120px;">Area</th>
            <th style="width:120px;">Ubicacion</th>
            <th style="width:120px;">Piso</th>
            <th style="width:120px;">Status</th>
            <th style="width:120px;">Observaciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idPrestador;?></td>
            <td><?php echo $r->idConvenio;?></td>
            <td><?php echo $r->NombreAlumno;?></td>
            <td><?php echo $r->Inicio;?></td>
            <td><?php echo $r->Termino;?></td>
            <td><?php echo $r->Proyecto;?></td>
            <td><?php echo $r->Carrera;?></td>
            <td><?php echo $r->Escuela;?></td>
            <td><?php echo $r->Area;?></td>
            <td><?php echo $r->Ubicacion;?></td>
            <td><?php echo $r->Piso;?></td>
            <td><?php echo $r->Status;?></td>
            <td><?php echo $r->Observaciones;?></td>

            <td>
                <?php if ($tipo_usuario=="AA") {
                    echo "<a href='?c=prestador&a=Crud&idPrestador=<?php echo $r->idPrestador; ?>'>Editar</a>";
                }?>
                
            </td>
            <td>
                <?php if ($tipo_usuario=="AA") { ?>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=prestador&a=Eliminar&idPrestador=<?php echo $r->idPrestador; ?>">Eliminar</a>
                <?php } ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
  </body>
  <br><br><br><br><br><br><br><br><br><br>