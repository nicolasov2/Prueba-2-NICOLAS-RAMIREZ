<!DOCTYPE html>
<html lang="es">
<head>
    <title>GUARDADO CON EXITO</title>
    <meta charset="UTF-8">
    <meta name="title" content="Título de la WEB">
    <meta name="description" content="Descripción de la WEB">
</head>
<body>
    <center>
        <table border="2">
            <thead>
                <tr>
                    <th>ID PACIENTE</th>
                    <th>NOMBRE PACIENTE</th>
                    <th>PREVISION</th>
                    <th>DIRECCION</th>
                    <th>PATOLOGIAS</th>
                    <th>FICHA ATENCION</th>
                    <th>IMAGEN</th>
                    <th>FONO</th>
                    <th>CORREO</th>
                    <th>ALERGIAS</th>    
                </tr>
            </thead>
            <tbody>
                <?php
                    include "../conexion.php";
                    $sql = "SELECT * FROM tabla_paciente";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                ?>
                    <tr>
                        <td><?php echo $row['Nombre_paciente']; ?></td>
                        <td><?php echo $row['Prevision']; ?></td>
                        <td><?php echo $row['Direccion']; ?></td>
                        <td><?php echo $row['Patologias']; ?></td>
                        <td><?php echo $row['Ficha_atencion']; ?></td>
                        <td><img height="50px" src="data:imagen/image/jpg;base64, <?php echo base64_encode($row['Img_paciente']); ?>"></td>
                        <td><?php echo $row['Fono']; ?></td>
                        <td><?php echo $row['Correo']; ?></td>
                        <td><?php echo $row['Alergias']; ?></td>
                        <th><a href="/PRUEBA-2-NICOLAS-RAMIREZ/Prueba-2-NICOLAS-RAMIREZ/INSERCIONES/pacientes/actualizar_paciente.php">EDITAR</a></th>

                <?php
                    }                  
                ?>

            </tbody>
        </table>
    </center>
</body> 