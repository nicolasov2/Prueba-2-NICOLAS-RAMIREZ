<?php
 include 'conexion.php';
  
    $nombre_medico = $_POST['Nombre_medico'];
    $apellido = $_POST['Apellido_medico'];
    $Especialidad = $_POST['Especialidad'];
    $Telefono = $_POST['Telefono'];
    $Correo = $_POST['Correo'];

    $insertar = "INSERT INTO tabla_medico (Nombre_medico, Apellido_medico, Especialidad, Telefono, Correo) 
    VALUES ('$nombre_medico', '$apellido', '$Especialidad', '$Telefono', '$Correo')";
    
    if ($conn->query($insertar) === TRUE)
    {
        echo "datos ingresados";
    }
else
    {
        echo "error al ingresar los datos";
    }
    $conn->close();
   

    

?>