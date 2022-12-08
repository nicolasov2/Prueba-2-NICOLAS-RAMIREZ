<?php
include "conexion.php";
$Nombre_paciente=$_POST['Nombre_paciente'];
$Prevision=$_POST['Prevision'];
$Direccion=$_POST['Direccion'];
$Patologias=$_POST['Patologias'];
$Ficha_atencion=$_POST['Ficha_atencion'];
$Fono=$_POST['Fono'];
$Correo=$_POST['Correo'];
$Alergias=$_POST['Alergias'];

$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
//echo "$target_file <br>";
$img_nombre=$target_file;
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
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["img"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

$sql="INSERT INTO paciente (Nombre_paciente,Prevision,Direccion,Patologias,Ficha_atencion,img_nombre,Fono,Correo,Alergias) 
VALUES ('$Nombre_paciente','$Prevision','$Direccion','$Patologias','$Ficha_atencion','$img_nombre','$Fono','$Correo','$Alergias')";
if ($conn->query($sql) === TRUE)
    {
      echo "Datos ingresados correctamente.";
    }
else
    {
      echo "Ha ocurrido un problema, por favor intente nuevamente.";
    }
    $conn->close();
?>