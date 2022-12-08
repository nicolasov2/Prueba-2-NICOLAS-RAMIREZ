<?php
include 'conexion.php';

$id=$_REQUEST['Id_medico'];
$Nombre_medico=$_REQUEST['Nombre_medico'];
$Apellido_medico=$_REQUEST['Apellido_medico'];
$Especialidad=$_REQUEST['Especialidad'];
$Telefono=$_REQUEST['Telefono'];
$Correo=$_REQUEST['Correo'];

$consulta="update tabla_medico set Nombre_medico='$Nombre_medico', Apellido_medico='$Apellido_medico', Especialidad='$Especialidad', Telefono='$Telefono', Correo='$Correo' 
where Id_medico=$id";
if(mysqli_query($conn,$consulta))
{
    echo "el medico se actualizo";
}
else
{
    echo "error al actualizar";
}

?>