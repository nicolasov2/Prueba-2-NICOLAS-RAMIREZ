<html>

<head>
    <title>actualizar</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    <form action="subir_edicion_medico.php" method="post">
        <table> 
            <?php 
                include "conexion.php";
                $id=$_REQUEST['id'];
                echo $id;
                $insertar = "select * from tabla_medico where Id_medico= '$id' ";
                $result = $conn->query($insertar);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "
                            <input type='hidden' id='Id_medico' name='Id_medico' value='".$row['Id_medico']."' 
                            <fieldset>
                                  <div class='form-group'>
                                    <div class='col-md-6'>
                                      <label class='control-label' for='nome'>Nombre del medico:</label>
                                      <input name='Nombre_medico' class='form-control' placeholder='CLICK HERE' type='text' value='".$row['Nombre_medico']."'>
                                      </div>
                                    </div>
                                    <div class='col-md-6'>
                                      <label class='control-label' for='nome'>Apellido del medico:</label>
                                      <input name='Apellido_medico' class='form-control' placeholder='CLICK HERE' type='text' value='".$row['Apellido_medico']."'>
                                      </div>
                                    </div>
                        
                                    <label for='Prevision'>SELECCIONE ESPECIALIZACION:</label>
                                      <select class='form-control' name='Especialidad' placeholder='SELECCIONE UNA' type='select' value='".$row['Especialidad']."'>>
                                        <option value='NEUROCIRUJANO'>NEUROCIRUJANO</option>
                                        <option value='CARDIOLOGO'>CARDIOLOGO</option>
                                        <option value='GINECOLOGO'>GINECOLOGO</option>
                                        <option value='DERMATOLOGO'>DERMATOLOGO</option>
                                        <option value='OTORRINOLARINGOLOGO'>OTORRINOLARINGOLOGO</option>
                                        <option value='NEFROLOGO'>NEFROLOGO</option>
                                        <option value='NEUMOLOGO'>NEUMOLOGO</option>
                                        <option value='TRAUMATOLOGO'>TRAUMATOLOGO</option>
                                        <option value='NEUROLOGO'>NEUROLOGO</option>
                                        <option value='ONCOLOGO'>ONCOLOGO</option>
                                        <option value='PEDIATRA'>PEDIATRA</option>
                                        <option value='PSIQUIATRA'>PSIQUIATRA</option>
                                        <option value='PSICOLOGO'>PSICOLOGO</option>
                                        <option value='HEMAOTOGO'>HEMAOTOGO</option>
                                        <option value='ENDOCRINOLOGO'>ENDOCRINOLOGO</option>
                                        <option value='GASTROENTEROLOGO'>GASTROENTEROLOGO</option>
                                        <option value='UROLOGO'>UROLOGO</option>
                                        <option value='CIRUJANO'>CIRUJANO</option>
                                        <option value='FISIATRA'>FISIATRA</option>
                                        <option value='FONOAUDIOLOGO'>FONOAUDIOLOGO</option>
                                        <option value='FISIOTERAPEUTA'>FISIOTERAPEUTA</option>
                                        <option value='NUTRICIONISTA'>NUTRICIONISTA</option>
                                        <option value='OFTALMOLOGO'>OFTALMOLOGO</option>
                                        <option value='ORTOPEDISTA'>ORTOPEDISTA</option>
                                        <option value='REUMATOLOGO'>REUMATOLOGO</option>
                                        <option value='OTRO'>OTRO</option> 
                                      </select>
                          
                                    <div class='form-group'>
                                      <div class='col-md-6'>
                                        <label class='control-label' for='email'>Telefono:</label>
                                        <input name='Telefono' class='form-control' placeholder='+56 9 7281 8208' type='number' value='".$row['Telefono']."'>
                                      </div>
                                    </div>

                                    <div class='form-group'>
                                      <div class='col-md-6'>
                                        <label class='control-label' for='surname'>Correo electronico:</label>
                                        <input name='Correo' class='form-control' placeholder='abcde@gmail.com' type='email' value='".$row['Correo']."'>
                                      </div>
                                    </div>
                                </fieldset>
                    
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