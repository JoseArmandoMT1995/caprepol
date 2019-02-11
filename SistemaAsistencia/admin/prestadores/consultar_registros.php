
<?php
require("header.php");
require("navegador.php");
require("cabecera.php");

?>
<?php
require("comunes/head.php");

require("conectar.php");

if(!isset($_GET["idPrestador"])){
    //header("location:index.php?error");
  //print_r($_GET["idPrestador"]);
}
else{
    $idPrestador = $_GET["idPrestador"];

    $sql = "SELECT * FROM personal WHERE idPrestador='$idPrestador'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

  $count = mysqli_num_rows($result);

  if($count==0){
      //header("location:index.php?error");
  }
}
?>

<body>
 
<?php   //require("comunes/nav_admin.php"); ?>

    <!-- Header -->
    <header>
        <div align="center">
        <br>
         <img style="width:64px" src="../img/marcados2.png"/>
						 <h1>Registros</h1> 

                           <div style="color:black">
                             <?php echo "idPrestador: ".$idPrestador; echo "<br>"; ?>
                              <?php  echo "Nombre : ".$row["nombre"];  echo " ";  echo $row["apellido"]; echo "<br>";  ?>
                               <img src="fotos/<?php echo $row['foto']; ?>" class="img-rounded" width="64px" height="64px" />
                                <?php echo "<br>"; ?>
                         </div>

                     <form class="form-signin" action="consultar_registros.php?idPrestador=<?php echo $idPrestador; ?>" method="POST">
						 <p>Fecha: <input type="text" id="datepicker" required="" name="fecha"></p>
 
					   <button class="btn btn-lg btn-primary btn-block" type="submit">Aceptar</button>   
                        <button class="btn btn-lg btn-primary btn-block" style="background-color: red" onclick="location.href = 'index.php';" type="button">Cancelar</button>    
    
    </form>

 <div style="color:black;font-weight: 900;font-size: 20px">   <?php  if(isset($_POST["fecha"])){
    $fecha= $_POST["fecha"]; echo $newDate = date("d-m-Y", strtotime($fecha));  } ?> </div>
						 <?php
						 
require("../../conectar.php");
$sql = "SELECT * FROM registros INNER JOIN personal ON registros.idPrestador=personal.idPrestador WHERE registros.fecha='$fecha' AND registros.idPrestador='$idPrestador' ORDER BY registros.fecha_hora DESC";
 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	 ?>
<div align="center">	 
   <table id="customers">
    <tr>
    <th>Hora</th>
    <th>Tipo</th>
    </tr>
    <?php
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
       <tr>
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

 <?php   require("../../footer.php"); ?>

   <?php   require("comunes/scripts.php"); ?>

</body>
 
</html>
