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
        <a href="../INSERCIONES/Insertar_medico.php">AGREGAR MAS MEDICOS</a>
        <br><br>
        <a href="../INSERCIONES/actualizar_medico.php">ACTUALIZAR O ELIMINAR MEDICOS</a>
        <br><br>
        <a style="color: white " href="/PRUEBA-2-NICOLAS-RAMIREZ/Prueba-2-NICOLAS-RAMIREZ/index.php" target="_self">Volver al inicio</a>

    
    <footer>

    </footer>
</body>  
</html>