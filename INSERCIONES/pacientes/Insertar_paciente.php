
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
                    <h1>INGRESAR PACIENTES:</h1><hr>
                        <form  method="POST" name="form-work" action="../pacientes/guardar_paciente.php" enctype="multipart/form-data">
                                <fieldset>
                                  <div class="form-group">
                                    <div class="col-md-6">
                                      <label class="control-label" for="nome">Nombre del paciente:</label>
                                      <input name="Nombre_paciente" class="form-control" placeholder="CLICK HERE" type="text">
                                      </div>
                                    </div>                         
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="surname">Prevision del paciente: </label>
                                        <input name="Prevision" class="form-control" placeholder="CLICK HERE" type="select">
                                      </div>
                                    </div>
                                    <label for="Prevision">SELECCIONE PREVISION DEL PACIENTE:</label>
                                      <select class="form-control" name="Prevision" placeholder="SELECCIONE UNA" type="select">>
                                        <option value='FONASA'>FONASA</option>
                                        <option value='saab'>ISAPRE</option>
                                        <option value='ISAPRE'>COOPERATIVA</option>
                                        <option value='COOPERATIVA'>CAPREDENA</option>
                                        <option value='SEGURO MEDICO DE VIAJE'>SEGURO MEDICO DE VIAJE</option>
                                        <option value='SIN PREVISION'>SIN PREVISION</option>
                                        <option value='OTRA'>OTRA</option>
                                      </select>                        
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="email">Direccion:</label>
                                        <input name="Direccion" class="form-control" placeholder="BLANCO #630, VALPARAISO, CHILE" type="text">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="surname">Patologias del paciente</label>
                                        <input name="Patologias" class="form-control" placeholder="INGRESE DETALLADAMENTE EN ESTE RECUADRO" type="textarea">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="surname">Ficha de atencion:</label>
                                        <input name="Ficha_atencion" class="form-control" placeholder="INGRESE AQUI" type="text">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-md-6">
                                      <br>ingrese la imagen<br>
                                      <input type="file" id="img_nombre" name="img" value=" ">
                                      </div>
                                    </div> 
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="surname">Telefono:</label>
                                        <input name="Fono" class="form-control" placeholder="+56 9 5555 5555" type="number">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="surname">Correo electronico:</label>
                                        <input name="Correo" class="form-control" placeholder="abcde@gmail.com" type="email">
                                      </div>
                                    </div>
                                      <div class="form-group">
                                        <div class="col-md-6">
                                          <label class="control-label" for="surname">Alergias:</label>
                                          <input name="Alergias" class="form-control" placeholder="PARACETAMOL - IBUPROFENO - ETC" type="textarea">
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