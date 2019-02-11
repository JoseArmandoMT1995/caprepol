<?php include_once 'header.php'; ?>


<?php include_once 'navegador.php'; ?>
<?php include_once 'cabecera.php'; ?>
	<br>
	<center>
		<h1>Respaldo de Base de Datos</h1>
	</center>
	<br><br><br><br><br>
	<table border="1" class="table">
		<tr>
			<td>
				<center>
					<a href="./Backup.php"><button>Realizar copia de seguridad</button></a></td>
				</center>
			<td>
		<center>
		<form action="./Restore.php" method="POST">
		<label>Selecciona un punto de restauración</label><br>
		<select name="restorePoint" >
			<option value="" disabled="" selected="">Selecciona un punto de restauración</option>
			<?php
				include_once './Connet.php';
				$ruta=BACKUP_PATH;
				if(is_dir($ruta)){
				    if($aux=opendir($ruta)){
				        while(($archivo = readdir($aux)) !== false){
				            if($archivo!="."&&$archivo!=".."){
				                $nombrearchivo=str_replace(".sql", "", $archivo);
				                $nombrearchivo=str_replace("-", ":", $nombrearchivo);
				                $ruta_completa=$ruta.$archivo;
				                if(is_dir($ruta_completa)){
				                }else{
				                    echo '<option value="'.$ruta_completa.'">'.$nombrearchivo.'</option>';
				                }
				            }
				        }
				        closedir($aux);
				    }
				}else{
				    echo $ruta." No es ruta válida";
				}
			?>
		</select>
		<button type="submit" >Restaurar</button>
	</form>
	</center>
			</td>
		</tr>
	</table>
	
<br><br><br><br><br><br><br><br><br><br><br><br>
	
<?php include_once 'footer.php'; ?>
