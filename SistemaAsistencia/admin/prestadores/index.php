
<?php
require("header.php");
require("navegador.php");
require("cabecera.php");

?>
<center>
    <header>
        <h1>PERSONAL</h1>
        <a href="registrar.php" title="Registrar"><img src="img/registrar.png" width="64px"></a>
        <div style="
            background: #E8E6E6;
            width: 100%;
            height: 350px;
            overflow: scroll;" >
        <table border="1" class="table">
            <tr class="w3-hover-green ">
                <td>Foto</td>
                <td>idPrestador</td>
                <td>Nombre y Apellido</td>
                <td colspan="2  ">Acciones</td>
            </tr>
            
            <?php
                require("../../conectar.php");
                $sql = "SELECT * FROM personal";
                echo "<hr>";
                $result = $conn->query($sql);
                //$x=$conn->query($sql)->result();

                if ($result = $conn->query($sql)) {
                    while($row = $result->fetch_assoc()){
                        //print_r($row);
                        echo '<tr>';
                        echo '<td><img src="fotos/'. $row['foto'].'" width="40  px" height="40    px"></td>';
                        echo "<td>".$row['idPrestador']."</td>";
                        echo "<td>".$row['nombre'].' '.$row['apellido']."</td>";
                        echo "<td class='w3-hover-blue '>  <a href='consultar_registros.php?idPrestador=$row[idPrestador]' title='Consultar registros'> <img style='width:32px' src='../img/marcados2.png'/></a></td>" ;
                        echo "<td class='w3-hover-red '>  <a href='editar.php?idPrestador=<?php echo $row[idPrestador]; ?>' title='Editar registros'> <img style='width:32px' src='img/editar.png'/></a></td>";
                        echo "</tr>";

                    }
                }

            ?>
            
        </table>
    </div>
    </header>
</center>
<br><br><br><br>
<?php   
require("../../footer.php"); 

?>

</body>
 
</html>
