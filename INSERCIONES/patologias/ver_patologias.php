<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patologias</title>
</head>
<body>
    <center>
    <!--inicio del contenedor-->
        <div style="height: 3000px;width: 100% ;background: white">
            <!--inicio del header-->
            <div style="width: 100%;height: 250px">        
                <div style="width: 100% ;height: 200px;background: rgb(8, 197, 211);font-size: xX-large;"><H1>Patologias</H1></div>
                <div style="width: 100%;height:50px ;background: blue"><br>
                    <div style="text-align: left;width: 90%;font-size: 1.1em;color:white;">
                        <b>
                            <a style="color: white " href="#" target="_self">Insertar paciente </a>|
                            <a style="color: white " href="#" target="_self">insertar medico</a>|
                            <a style="color: white " href="#" target="_self">Gestionar Pacientes</a>|
                            <a style="color: white " href="#" target="_self">Gestionar Medicos</a>|
                            <a style="color: white " href="#" target="_self">Volver al inicio</a>
                        </b>
                    </div>
                </div>
            </div>
            <!--fin del header-->
            
            <!--inicio del main-->
            <div style="width: 100%;height: 100%;background: rgb(8, 197, 211);">
                <?php 
                include "ver_patologias.php"
                ?>
            </div>
            <!--fin del main-->
            
            <!--inicio del footer-->
            <div style="width: 100%; height:200px ;background: blue;border: 1;";></div>
            <!--fin del footer-->
        </div>      
    <!--fin del contenedor-->
    </center>
</body>
</html>