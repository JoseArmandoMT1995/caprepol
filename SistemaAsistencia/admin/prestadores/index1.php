
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Convenios</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="../../../assets/icons/book.ico" />
    <script src="../js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="../../../css/sweet-alert.css">
    <link rel="stylesheet" href="../../../css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../../../css/normalize.css">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../../js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="../js/modernizr.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="../js/main.js"></script>
</head>
<body>

    <?php
        require("../../navegador.php");
        require("../../cabecera.php");
        //require("comunes/head.php");
    ?>

 
<?php     // require("comunes/nav_admin.php"); ?>

    <!-- Header -->
<!--aqui va el cuerpo-->

<header>
    <div align="center">
        
        <h1>PERSONAL</h1> 
        <a href="registrar.php" title="Registrar"><img src="img/registrar.png" width="64px"></a>
            <?php

                if(isset($_GET["registrado"]))
                    {
            ?>
                    <div class="alert alert-success fade in">
                        <div style="text-align:center;color:green;font-weight:900">
                        <?php echo "Prestador registrado exitosamente!"; ?> !
                         </div>

                         <?php
                    }
                        ?>

            <?php
                if(isset($_GET["editado"]))
                    {
            ?>
                    <div class="alert alert-success fade in">
                        <div style="text-align:center;color:green;font-weight:900">
                              <?php echo "prestador editado exitosamente!"; ?> !
                        </div>
                         <?php
                     }
                     ?>
 
                    </div>  

            <?php
                if(isset($_GET["error"]))
                    {
            ?>
                    <div class="alert alert-success fade in">
                        <div style="text-align:center;color:red;font-weight:900">
                            <?php echo "Debe elegir a una persona!"; ?> !
                        </div>
                        <?php
                     }
                      
                        ?>
 
                    </div>  
           
      <?php        
            require("../../conectar.php");
            $sql = "SELECT * FROM personal";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
         ?>
                <div align="center">   
                    <div style="
            background: #E8E6E6;
            width: 100%;
            height: 167px;
            overflow: scroll;" >     

               
            <table id="customers" border="1" class="table">
                        <tr class="w3-hover-green ">
                         <th>Foto</th>
                            <th>idPrestador</th>
                            <th>Nombre y Apellido</th>
                            <th colspan="2">Acciones</th>
                        </tr>
            <?php
            // output data of each row
            while($row = $result->fetch_assoc()) {
        ?>
                        <tr>
                        <td>  <img src="fotos/<?php echo $row['foto']; ?>" class="img-rounded" width="64px" height="64px" /> </td>
                        <td> <?php echo $row["idPrestador"]; ?></td>
                        <td> <?php echo $row["nombre"];  echo " ";  echo $row["apellido"]; ?></td>  
                            <td class="w3-light-grey w3-hover-blue">  <a href="consultar_registros.php?idPrestador=<?php echo $row["idPrestador"]; ?>" title="Consultar registros"> <img style="width:32px" src="../img/marcados2.png"/></a></td> 
                            <td class="w3-light-grey w3-hover-red">  <a href="editar.php?idPrestador=<?php echo $row["idPrestador"]; ?>" title="Editar registros"> <img style="width:32px" src="img/editar.png"/></a></td>  
                    </tr>
            <?php
            }
            ?>
                    </table>
                </div>
                </div>
                
            <?php
            } 

            $conn->close();
            ?><?php require("../../footer.php");  ?>
            </div>

</header>
    <?php   
        //require("footer.php"); 
        require("comunes/scripts.php"); 
    ?>

</body>
 
</html>
