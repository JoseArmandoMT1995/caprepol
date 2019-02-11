<?php 

if (isset($_POST["idPrestador"])) {
     
  $idPrestador = test_input($_POST["idPrestador"]);

  
$sql = "SELECT * FROM personal WHERE idPrestador='$idPrestador'"; $result =
$conn->query($sql);

$row = $result->fetch_assoc();


 $sql="SELECT * FROM personal WHERE idPrestador='$idPrestador'";
 $result=mysqli_query($db,$sql);
 $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
       
      $count = mysqli_num_rows($result);


      if($count > 0) {
        
 date_default_timezone_set('America/mexico_City'); 
 $fecha = date("Y-m-d");
 $hora = date("H:i:s");

      $sql2 = "SELECT * FROM registros WHERE idPrestador = '$idPrestador'";
      $result2 = mysqli_query($db,$sql2); $row2 =
      mysqli_fetch_array($result2,MYSQLI_ASSOC);
       
     $count2 = mysqli_num_rows($result2);
     
           $par = abs($count2%2);
        require("conectar.php");


          if ($par == 0){ 
                              
                               $tipo = "Entrada";
                           
 
   $query = "INSERT INTO registros (idPrestador,  tipo, fecha) VALUES
   ('$idPrestador', '$tipo', '$fecha')";
    
    $result = mysqli_query($connect,$query);
    $registros = 0; 
  

   } else{ 
                               
                                $tipo = "Salida";
                                 
 $query="INSERT INTO registros(idPrestador,tipo,fecha)VALUES('$idPrestador','$tipo','$fecha')";
    
    $result = mysqli_query($connect,$query);
      $registros = 1; 
                       
                            
        
        } 
        } else {

       
         header("location: index.php?error");
      }


}

if (!isset($_POST["idPrestador"])) {

         //echo "Acceso prohibido";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 ?>