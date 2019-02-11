<h1 class="page-header">
    <?php echo $prest->idPrestador != null ? $prest->NombreAlumno : 'Nuevo Registro'; ?>
</h1>

<form id="frm-prestador" action="?c=prestador&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idPrestador" value="<?php echo $prest->idPrestador; ?>" />


     


    <div class="form-group">
        <label>idConvenio</label>
        <input type="text" name="idConvenio" value="<?php echo $prest->idConvenio; ?>" class="form-control" placeholder="Ingrese idConvenio" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>NombreAlumno</label>
        <input type="text" name="NombreAlumno" value="<?php echo $prest->NombreAlumno; ?>" class="form-control" placeholder="Ingrese NombreAlumno" data-validacion-tipo="requerido|min:100" />
    </div>

  

 <div class="form-group">
        <label>Inicio</label>
        <input type="date" name="Inicio" value="<?php echo $prest->Inicio; ?>" class="form-control" placeholder="Ingrese Inicio" data-validacion-tipo="requerido|min:240" />
    </div>

     <div class="form-group">
        <label>Termino</label>
        <input type="date" name="Termino" value="<?php echo $prest->Termino; ?>" class="form-control" placeholder="Ingrese Termino" data-validacion-tipo="requerido|min:240" />
    </div>



     <div class="form-group">
        <label>Proyecto</label>
        <input type="text" name="Proyecto" value="<?php echo $prest->Proyecto; ?>" class="form-control" placeholder="Ingrese Proyecto" data-validacion-tipo="requerido|min:240" />
    </div>




     <div class="form-group">
        <label>Carrera</label>
        <input type="text" name="Carrera" value="<?php echo $prest->Carrera; ?>" class="form-control" placeholder="Ingrese Carrera" data-validacion-tipo="requerido|min:240" />
    </div>


       <div class="form-group">
        <label>Escuela</label>
        <input type="text" name="Escuela" value="<?php echo $prest->Escuela; ?>" class="form-control" placeholder="Ingrese Escuela" data-validacion-tipo="requerido|min:240" />
    </div>




       <div class="form-group">
        <label>Area</label>
        <input type="text" name="Area" value="<?php echo $prest->Area; ?>" class="form-control" placeholder="Ingrese Area" data-validacion-tipo="requerido|min:240" />
    </div>


       <div class="form-group">
        <label>Ubicacion</label>
        <input type="text" name="Ubicacion" value="<?php echo $prest->Ubicacion; ?>" class="form-control" placeholder="Ingrese Ubicacion" data-validacion-tipo="requerido|min:240" />
    </div>

 <div class="form-group">
        <label>Piso</label>
        <input type="text" name="Piso" value="<?php echo $prest->Piso; ?>" class="form-control" placeholder="Ingrese Piso" data-validacion-tipo="requerido|min:240" />
    </div>

 <div class="form-group">
        <label>Status</label>
        <input type="text" name="Status" value="<?php echo $prest->Status; ?>" class="form-control" placeholder="Ingrese Status" data-validacion-tipo="requerido|min:240" />
    </div>

 <div class="form-group">
        <label>Observaciones</label>
        <input type="text" name="Observaciones" value="<?php echo $prest->Observaciones; ?>" class="form-control" placeholder="Ingrese Observaciones" data-validacion-tipo="requerido|min:240" />
    </div>

    <hr />

    <div class="text-left">
        <button class="btn btn-success">Actualizar</button>
    </div>

<div class="text-right">
         <a href="/ProyectodeResidencias/?c=prestador" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Cancelar</a>
    </div>






</form>

<script>
    $(document).ready(function(){
        $("#frm-prestador").submit(function(){
            return $(this).validate();
        });
    })
</script>
