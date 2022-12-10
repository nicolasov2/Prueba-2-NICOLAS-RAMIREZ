<?php
include 'conexion.php';
$id=$_REQUEST['id'];
$consulta="DELETE FROM tabla_medico where Id_medico=$id";
if(mysqli_query($conn,$consulta))
{
    echo "la noticia se elimino";
}
else
{
    echo "error al eliminar";
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
        <a href="../INSERCIONES/Insertar_medico.php">AGREGAR MAS MEDICOS</a>
        <br><br>
        <a href="../INSERCIONES/actualizar_medico.php">VOLVER ATRAS</a>
        <a class="navegacion__enlace navegacion__enlace--activo" href="/PRUEBA-2-NICOLAS-RAMIREZ/Prueba-2-NICOLAS-RAMIREZ/index.php">INICIO</a> 
    <footer>
    </footer>
</body>  
</html>