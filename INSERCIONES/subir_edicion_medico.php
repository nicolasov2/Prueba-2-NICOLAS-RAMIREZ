<?php
include "conexion.php";

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

<!DOCTYPE html>
<html lang="es">  
<head> 
    <br>---------------------------------------------------------------------------------------------------------------------------------------------<br>   
    <title>ACTUALIZADO CON EXITO</title>    
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
        <a href="../INSERCIONES/Insertar_medico.php">AGREGAR MAS MEDICOS</a>
        <br><br>
        <a href="../INSERCIONES/actualizar_medico.php">ACTUALIZAR O ELIMINAR MEDICOS</a>
        <br><br>
        <a style="color: white " href="/PRUEBA-2-NICOLAS-RAMIREZ/Prueba-2-NICOLAS-RAMIREZ/index.php" target="_self">Volver al inicio</a>


    
    <footer>

    </footer>
</body>  
</html>