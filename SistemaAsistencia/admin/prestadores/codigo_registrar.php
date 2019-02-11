<?php
 if (empty($_POST["idPrestador"]) or (empty($_POST["nombre"])) or (empty($_POST["apellido"])) ) {
       header("location: registrar.php?error");
    }
 
 else{
  
    $idPrestador = test_input($_POST["idPrestador"]);
    $nombre = test_input($_POST["nombre"]);
    $apellido = test_input($_POST["apellido"]);
  
  
  $imgFile = $_FILES['foto']['name'];
  $tmp_dir = $_FILES['foto']['tmp_name'];
  $imgSize = $_FILES['foto']['size'];


  $upload_dir = 'fotos/'; // upload directory
 



   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  
   // valid image extensions
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
  
   // rename uploading image
   $userpic = rand(1000,1000000).".".$imgExt;
    
   // allow valid image file formats
   if(in_array($imgExt, $valid_extensions)){   
    // Check file size '1MB'
    if($imgSize < 1000000)    {
     move_uploaded_file($tmp_dir,$upload_dir.$userpic);
    }
    else{
  header("location: registrar.php?imagen");
  exit(); 
    }
   }
   else{
    header("location: registrar.php?imagen"); 
    exit();
   }
  
 
    require("../../conectar.php");
 
    $query = "INSERT INTO personal (idPrestador, nombre, apellido, foto) VALUES ('$idPrestador','$nombre','$apellido','$userpic')";
    
    $result = mysqli_query($connect,$query);
    
    header("location: index.php?registrado");
    
   }
    
 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

 

