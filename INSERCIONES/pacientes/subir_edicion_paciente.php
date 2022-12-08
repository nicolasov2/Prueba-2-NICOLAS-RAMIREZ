<?php
include "conexion.php";

$id=$_REQUEST['Id_paciente'];
$Nombre_paciente=$_POST['Nombre_paciente'];
$Prevision=$_POST['Prevision'];
$Direccion=$_POST['Direccion'];
$Patologias=$_POST['Patologias'];
$Ficha_atencion=$_POST['Ficha_atencion'];
$Fono=$_POST['Fono'];
$Correo=$_POST['Correo'];
$Alergias=$_POST['Alergias'];

$consulta="update tabla_paciente set Nombre_paciente='$Nombre_paciente', Prevision='$Prevision', Direccion='$Direccion', Patologias='$Patologias', Ficha_atencion='$Ficha_atencion', Fono='$Fono', Correo='$Correo', Alergias='$Alergias' 
where Id_paciente=$id";
if(mysqli_query($conn,$consulta))
{
    echo "<h1>DATOS ACTUALIZADOS CORRECTAMENTE</h1>";
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
        <a href="../pacientes/Insertar_paciente.php">AGREGAR MAS PACIENTES</a>
        <br><br>
        <a href="../pacientes/actualizar_paciente.php">ACTUALIZAR O ELIMINAR PACIENTES</a>

    
    <footer>

    </footer>
</body>  
</html>