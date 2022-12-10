<?php
    include "conexion.php";
    
        $nombre_paciente = $_POST['Nombre_paciente'];
        $Prevision = $_POST['Prevision'];
        $Direccion = $_POST['Direccion'];
        $Patologias = $_POST['Patologias'];
        $Ficha_atencion = $_POST['Ficha_atencion'];
        $Fono = $_POST['Fono'];
        $Correo = $_POST['Correo'];
        $Alergias = $_POST['Alergias'];

$target_dir = "img/"; 
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$Img_paciente=$target_file;
//echo "$target_file <br>";

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["img"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {

  $uploadOk = 0;
}

// Check file size
if ($_FILES["img"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {

  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["img"]["tmp_name"], "../../$target_file")) {
    echo "The file ". htmlspecialchars(basename( $_FILES["img"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}



$insertar = "INSERT INTO tabla_paciente (Nombre_paciente, Prevision, Direccion, Patologias, Ficha_atencion, Img_paciente, Fono, Correo, Alergias) 
VALUES ('$nombre_paciente', '$Prevision', '$Direccion', '$Patologias', '$Ficha_atencion', '$Img_paciente', '$Fono', '$Correo', '$Alergias')";

if ($conn->query($insertar) === TRUE)
    {
        echo "<h1>DATOS INGRESADOS CORRECTAMENTE</h1>";
        }
    else
        {
        echo "error al ingresar los datos";
        }
    $conn->close();
    

?>

<!DOCTYPE html>
<html lang="es">  
<head> 
    <br>---------------------------------------------------------------------------------------------------------------------------------------------<br>   
    <title>GUARDADO CON EXITO</title>    
    <meta charset="UTF-8">
    <meta name="title" content="Título de la WEB">
    <meta name="description" content="Descripción de la WEB">    
    <link href="estilos.css" rel="stylesheet">    
</head>  
<body>    
    <header>
        <h1>¿QUE QUIERES HACER AHORA?</h1>      
    </header>    
    <nav>
        <a href="../pacientes/Insertar_paciente.php">AGREGAR MAS PACIENTES</a>
        <br><br>
        <a href="../pacientes/actualizar_paciente.php">ACTUALIZAR O ELIMINAR PACIENTES</a>

    
    <footer>

    </footer>
</body>  
</html>