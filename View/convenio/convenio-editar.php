<h1 class="page-header">
    <?php echo $pvd->idConvenio != null ? $pvd->NombreEscuela : 'Nuevo Registro'; ?>
</h1>



<form id="frm-convenio" action="?c=convenio&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idConvenio" value="<?php echo $pvd->idConvenio; ?>" />

    <div class="form-group">
        <label>Nombre de la Escuela</label>
        <input type="text" name="NombreEscuela" value="<?php echo $pvd->NombreEscuela; ?>" class="form-control" placeholder="Ingrese Nombre de la Escuela" data-validacion-tipo="requerido|min:100" />
    </div>
 <div class="form-group">
        <label>Carreras</label>
        <input type="text" name="Carreras" value="<?php echo $pvd->Carreras; ?>" class="form-control" placeholder="Ingrese Las carreras" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Vigencia</label>
        <input type="date" name="Vigencia" value="<?php echo $pvd->Vigencia; ?>" class="form-control" placeholder="Ingrese la fecha de Vigencia" data-validacion-tipo="requerido|min:10" />
    </div>

    <hr />

    <div class="text-left">
        <button class="btn btn-success">Actualizar</button>
    </div>


<div class="text-right">
         <a href="/ProyectodeResidencias/" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Cancelar</a>
    </div>

tinyint(4)

</form>

<script>
    $(document).ready(function(){
        $("#frm-convenio").submit(function(){
            return $(this).validate();
        });
    })
</script>
