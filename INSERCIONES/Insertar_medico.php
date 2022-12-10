
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PANEL DE CONTROL MEDICOS: </title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>


        <div id="wrapper" class="container">  
                <center>
                    <h1>INGRESAR MEDICOS:</h1><hr>
                        <form  method="POST" name="form-work" action="guardar_medico.php" enctype="multipart/form-data">
                    
                                <fieldset>
                                  <div class="form-group">
                                    <div class="col-md-6">
                                      <label class="control-label" for="nome">Nombre del medico:</label>
                                      <input name="Nombre_medico" class="form-control" placeholder="CLICK HERE" type="text">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="control-label" for="nome">Apellido del medico:</label>
                                      <input name="Apellido_medico" class="form-control" placeholder="CLICK HERE" type="text">
                                      </div>
                                    </div>     
                                    <label for="Prevision">SELECCIONE ESPECIALIZACION:</label>
                                      <select class="form-control" name="Especialidad" placeholder="SELECCIONE UNA" type="select">>
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
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="email">Telefono:</label>
                                        <input name="Telefono" class="form-control" placeholder="+56 9 7281 8208" type="number">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="surname">Correo electronico:</label>
                                        <input name="Correo" class="form-control" placeholder="abcde@gmail.com" type="email">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block info">Guardar</button>
                                      </div>
                                    </div>                                                                    
                                </fieldset> 
                              </form>
                </center>
              </div>
    




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</html>