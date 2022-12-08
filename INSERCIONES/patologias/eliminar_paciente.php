<?php
include 'conexion.php';
$id=$_REQUEST['id'];
$consulta="DELETE FROM tabla_paciente where Id_paciente=$id";
if(mysqli_query($conn,$consulta))
{
    echo "<h1>El paciente ha sido eliminado</h1>";
}
else
{
    echo "¡Error al eliminar el paciente!";
}
?>

<!DOCTYPE html>
<html lang="es">  
<head> 
    <br>---------------------------------------------------------------------------------------------------------------------------------------------<br>   
    <title>ELIMINADO CON EXITO</title>    
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
        <a href="../pacientes/actualizar_paciente.php">VOLVER ATRAS</a>
    
    <footer>

    </footer>
</body>  
</html>