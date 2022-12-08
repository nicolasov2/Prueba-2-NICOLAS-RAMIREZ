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


$insertar = "INSERT INTO tabla_paciente (Nombre_paciente, Prevision, Direccion, Patologias, Ficha_atencion, Fono, Correo, Alergias) 
VALUES ('$nombre_paciente', '$Prevision', '$Direccion', '$Patologias', '$Ficha_atencion', '$Fono', '$Correo', '$Alergias')";

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