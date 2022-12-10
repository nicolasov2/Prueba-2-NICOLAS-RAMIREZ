<html>
<?php
  error_reporting(0);
?>
<head>
    <title>ACTUALIZAR PACIENTE</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
  
    <form action="subir_edicion_paciente.php" method="post">
        <table> 
            <?php 
                include "../conexion.php";
                $id=$_REQUEST['id'];
                echo $id;
                $insertar = "select * from tabla_paciente where Id_paciente= '$id' ";
                $result = $conn->query($insertar);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "
                            <input type='hidden' id='Id_paciente' name='Id_paciente' value='".$row['Id_paciente']."' 
                            <center>
                    <h1>INGRESAR PACIENTES:</h1><hr>
                        <form  method='POST' name='form-work' action='../pacientes/guardar_paciente.php' enctype='multipart/form-data' >
                                <fieldset>
                                  <div class='form-group'>
                                    <div class='col-md-6'>
                                      <label class='control-label' for='nome'>Nombre del paciente:</label>
                                      <input name='Nombre_paciente' class='form-control' placeholder='CLICK HERE' type='text' value='".$row['Nombre_paciente']."' >
                                      </div>
                                    </div>                         
                                    <label for='Prevision'>SELECCIONE PREVISION DEL PACIENTE:</label>
                                      <select class='form-control' name='Prevision' placeholder='SELECCIONE UNA' type='select' value='".$row['Prevision']."'>
                                        <option value='FONASA'>FONASA</option>
                                        <option value='saab'>ISAPRE</option>
                                        <option value='ISAPRE'>COOPERATIVA</option>
                                        <option value='COOPERATIVA'>CAPREDENA</option>
                                        <option value='SEGURO MEDICO DE VIAJE'>SEGURO MEDICO DE VIAJE</option>
                                        <option value='SIN PREVISION'>SIN PREVISION</option>
                                        <option value='OTRA'>OTRA</option>
                                      </select>                        
                                    <div class='form-group'>
                                      <div class='col-md-6'>
                                        <label class='control-label' for='email'>Direccion:</label>
                                        <input name='Direccion' class='form-control' placeholder='BLANCO #630, VALPARAISO, CHILE' type='text' value='".$row['Direccion']."'>
                                      </div>
                                    </div>
                                    <div class='form-group'>
                                      <div class='col-md-6'>
                                        <label class='control-label' for='surname'>Patologias del paciente</label>
                                        <input name='Patologias' class='form-control' placeholder='INGRESE DETALLADAMENTE EN ESTE RECUADRO' type='textarea' value='".$row['Patologias']."'>
                                      </div>
                                    </div>
                                    <div class='form-group'>
                                      <div class='col-md-6'>
                                        <label class='control-label' for='surname'>Ficha de atencion:</label>
                                        <input name='Ficha_atencion' class='form-control' placeholder='INGRESE AQUI' type='text' value='".$row['Ficha_atencion']."'>
                                      </div>
                                    </div>
                                    <div class='form-group'>
                                      <div class='col-md-6'>
                                        <label class='control-label' for='surname'>Ingrese imagen patologia paciente:</label>
                                        <input name='Img_paciente' class='form-control' placeholder='MAX 2MB' type='file'".$row['Img_paciente'].">
                                      </div>
                                    </div> 
                                    <div class='form-group'>
                                      <div class='col-md-6'>
                                        <label class='control-label' for='surname'>Telefono:</label>
                                        <input name='Fono' class='form-control' placeholder='+56 9 5555 5555' type='number' value='".$row['Fono']."'>
                                      </div>
                                    </div>
                                    <div class='form-group'>
                                      <div class='col-md-6'>
                                        <label class='control-label' for='surname'>Correo electronico:</label>
                                        <input name='Correo' class='form-control' placeholder='abcde@gmail.com' type='email' value='".$row['Correo']."'>
                                      </div>
                                    </div>
                                      <div class='form-group'>
                                        <div class='col-md-6'>
                                          <label class='control-label' for='surname'>Alergias:</label>
                                          <input name='Alergias' class='form-control' placeholder='PARACETAMOL - IBUPROFENO - ETC' type='textarea' value='".$row['Alergias']."'>
                                        </div>
                                      </div>                                 
                                </fieldset> 
                              </form>
                  </center>
                    
                            ";
                    }
                } else {
                    echo "0 resultados";
                }
                $conn->close(); 
                

            ?>
            <tr><td> <input type="submit" name="enviar"></td></tr>
        </table>
    </form>
<body>


</div>
<div id="footer"></div>
</body>

</html>