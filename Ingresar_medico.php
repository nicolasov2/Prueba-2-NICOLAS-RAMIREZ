<?php
include "conexion.php";
$Nombre_medico=$_POST['Nombre_medico'];
$Apellido_medico=$_POST['Apellido_medico'];
$Especialidad=$_POST['Especialidad'];
$Telefono=$_POST['Telefono'];
$Correo=$_POST['Correo'];

$sql = "INSERT INTO tabla_medico (Nombre_medico, Apellido_medico, Especialidad, Telefono, Correo) 
VALUES ($Nombre_medico, $Apellido_medico, $Especialidad, $Telefono, $Correo)";
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