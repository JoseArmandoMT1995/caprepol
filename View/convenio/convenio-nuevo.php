<h1 class="page-header">
    Nuevo Registro
</h1>



<form id="frm-convenio" action="?c=convenio&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>idConvenio</label>
      <input type="text" name="idConvenio" value="<?php echo $pvd->idConvenio; ?>" class="form-control" placeholder="Ingrese idConvenio" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Nombre de la escuela</label>
        <input type="text" name="NombreEscuela" value="<?php echo $pvd->NombreEscuela; ?>" class="form-control" placeholder="Ingrese NombreEscuela" data-validacion-tipo="requerido|min:100" />
    </div>

 
        <div class="form-group">
        <label>Carreras</label>
        <input type="text" name="Carreras" value="<?php echo $pvd->Carreras; ?>" class="form-control" placeholder="Ingrese Las carreras" data-validacion-tipo="requerido|min:100" />
    </div>


    <div class="form-group">
        <label>Vigencia</label>
        <input type="date" name="Vigencia" value="<?php echo $pvd->Vigencia; ?>" class="form-control" placeholder="Ingrese Vigencia" data-validacion-tipo="requerido|min:10" />
    </div>

    <hr />

    <div class="text-left">
        <button class="btn btn-success">Guardar</button>
    </div>

<div class="text-right">
         <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Cancelar</a>
    </div>



</form>

<script>
    $(document).ready(function(){
        $("#frm-convenio").submit(function(){
            return $(this).validate();
        });
    })
</script>
<br><br><br>
