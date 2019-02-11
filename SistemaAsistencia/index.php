
<?php
require("header.php");
require("navegador.php");
require("cabecera.php");
require("comunes/head.php");
require("conectar.php");
require("determinar_registro.php");
 ?>


  <br>
    <br>
      <br>

 

<?php   //require("comunes/nav.php"); ?>

    <!-- Header -->
    <header>
        <div align="center">
           <br><br><br>

    <form class="form-signin" action="index.php" method="POST">

		
		<div style="text-align:center;color:red;font-weight:900"> <?php



 



  
                        if(isset($_GET["error"]))
                              {
                            ?>
                            <div class="alert alert-danger">
                             <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo "No hay empleado registrado con ese id "; ?> !
                         </div>
                         <?php
                     }
                      
                     ?>

                       <?php date_default_timezone_set('America/mexico_City');  echo date(" d-m-Y  H:i:s");?>

<?php

 
                        if(isset( $registros) and ( $registros==0))
                        {
                            ?>
                             <div style="color:black">

                       

                             <?php echo  "idPrestador: ".$idPrestador; echo "<br>"; ?>
                              <?php  echo "Nombre: ".$row["nombre"];  echo " ";  echo $row["apellido"]; echo "<br>";  ?>
                               <img src="admin/prestadores/fotos/<?php echo $row['foto']; ?>" class="img-rounded" width="64px" height="64px" />
                                <?php echo "<br>"; ?>
                         </div>
                          <?php echo "<br>"; ?>
                            <div class="alert alert-success fade in">
                              <?php echo $tipo; echo ": "; echo $hora; ?> 
                         </div>
                         <?php
                     }
                      if(isset( $registros) and ($registros==1))
                        {
                            ?>
                             <div  style="color:black">
                              <?php echo "idPrestador: ".$idPrestador; echo "<br>"; ?>
                                 <?php  echo "Nombre: ".$row["nombre"];  echo " ";  echo $row["apellido"]; echo "<br>"; ?>
                                  <img src="admin/prestadores/fotos/<?php echo $row['foto']; ?>" class="img-rounded" width="64px" height="64px" />
                                  <?php echo "<br>"; ?>
                         </div>
                          <?php echo "<br>"; ?>
                            <div class="alert alert-danger fade in">
                                 <?php echo $tipo; echo ": "; echo $hora; ?> 
                         </div>
                         <?php
                     }
                    
                       
                     ?>

                     </div>  
                      <img style="width:128px" src="img/marcados2.png"/> 
      <h2 class="form-signin-heading" style="color:black">Registro</h2>
      <input type="text" class="form-control" name="idPrestador" maxlength="8" onkeypress="return isNumberKey(event)" placeholder="idPrestador" required="" autofocus="" />  
      <button class="btn btn-lg btn-primary btn-block" type="submit">Aceptar</button><br>
     


    </form>
  </div>
                    
    </header>
<br><br><br>
 <?php   require("footer.php"); ?>

<?php   require("comunes/scripts.php"); ?>
   
<script type="text/javascript">
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
</script>
