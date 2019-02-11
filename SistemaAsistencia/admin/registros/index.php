
<?php
require("header.php");
require("navegador.php");
require("cabecera.php");
?>


 
<?php   //require("comunes/nav_admin.php"); ?>

    <!-- Header -->
    <header>
        <div align="center">
        <br><br><br>
         <img style="width:64px" src="../img/marcados2.png"/>
						 <h1>REGISTROS</h1> 
                     <form class="form-signin" action="index.php" method="POST">
						 <p>Fecha: <input type="date" id="datepicker" required="" name="fecha"></p>
 
					   <button class="btn btn-lg btn-primary btn-block" type="submit">Aceptar</button>   
    
    </form>

 <div style="color:black;font-weight: 900;font-size: 20px">   <?php  if(isset($_POST["fecha"])){
    $fecha= $_POST["fecha"]; echo $newDate = date("d-m-Y", strtotime($fecha));  } ?> </div>
						 <?php
						 
require("../../conectar.php");
 
 
$sql = "SELECT * FROM registros INNER JOIN personal ON registros.idPrestador=personal.idPrestador WHERE registros.fecha='$fecha' ORDER BY registros.fecha_hora DESC";
 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	 ?>
<div align="center">	 
   <table id="customers" border="1" class="table">
    <tr>
    <th>Foto</th>
    <th>Nombre </th>
    <th>Hora</th>
    <th>Tipo</th>
    </tr>
    <?php
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
       <tr>
		   
		  
		    <td>  <img src="../prestadores/fotos/<?php echo $row['foto']; ?>" class="img-rounded" width="64px" height="64px" /> </td>
		    <td> <?php echo $row["nombre"];  echo " ";  echo $row["apellido"]; ?></td>
		    <td> <?php $row["fecha_hora"];
                   $date = DateTime::createFromFormat( 'Y-m-d H:i:s', $row["fecha_hora"]);
echo $date->format( 'H:i:s'); // Will print 17:00 

             ?></td>
		    <td> <?php echo $row["tipo"]; ?></td>
		   </tr>
<?php
    }
    ?>
    </table>
    </div>
    <?php
} else {
    ?>
    <div style="color:red;font-weight: 900;font-size:20px"> 
    <?php
    if(isset($_POST["fecha"])){
        echo "No hubo resultados";
    }
    echo "";
}

$conn->close();
?>
 </div>
        </div>
    </header>
    <br><br><br><br><br><br><br><br><br><br><br>

 <?php   require("../../footer.php"); ?>

   <?php   //require("comunes/scripts.php"); ?>

</body>
 
</html>
