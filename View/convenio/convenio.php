
<title>Convenio</title>
<div class="well well-sm text-left">

</div>

<center><h1>Convenio</center></h1>
<div style="
    background: #E8E6E6;
    width: 100%;
    height: 260px;
    overflow: scroll;" 
>
<table class="table table-striped">
    <thead>
        <tr>

            <th style="width:100px;">idConvenio</th>
            <th style="width:100px;">NombreEscuela</th>
            <th style="width:100px;">Carreras</th>
            <th style="width:100px;">Vigencia</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idConvenio; ?></td>
            <td><?php echo $r->NombreEscuela; ?></td>
            <td><?php echo $r->Carreras; ?></td>
            <td><?php echo $r->Vigencia; ?></td>
            <td>
                <?php if ($tipo_usuario=="AA") {?>
                <a class="btn btn-primary" href="?c=convenio&a=Crud&idConvenio=<?php echo $r->idConvenio; ?>">Editar</a>
                <?php } ?>
            </td>
            <td>
                <?php if ($tipo_usuario=="AA") {?>
                <a class="btn btn-primary"onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=convenio&a=Eliminar&idConvenio=<?php echo $r->idConvenio; ?>">Eliminar</a>
                <?php } ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
<br><br><br><br><br><br><br><br>
<br><br>