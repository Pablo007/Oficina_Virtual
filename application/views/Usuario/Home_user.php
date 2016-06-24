<?php
    date_default_timezone_set('America/Santiago');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Oficina Virtual">
        <meta name="author" content="Intech">

        <title>Oficina Virtual - Home Cliente</title>
        <link href="css/main.css" rel="stylesheet">
        <link rel="shortcut icon" href="images/favicon.ico"> <!--  Favicon   -->
        <link href="css/bootstrap.min.css" rel="stylesheet">  <!--  bootstrap   -->
        
    </head>
    <body>
        <div class="row" align="center">
            <h4> La fecha de hoy es: <?=date('d/m/Y');?> </h4><br><br>
        </div>

        <div class="container-fluid">
            <div class="col-md-3">
              <div class="sidebar">
                  <ul class="nav nav-sidebar">
                    <li class="active"><a href="javascript:mostrarOcultarTablas('inicio_tab')"><h3>Inicio</h3><span class="sr-only">(current)</span></a></li>
                    <li><a href=javascript:mostrarOcultarTablas('inicio_tab')"><h3>Historial de pagos</h3></a></li>
                    <li><a href="#"><h3>Solicitud de baja</h3></a></li>
                  </ul>
              </div>
            </div>
            <!--  Fin Botones   -->

            <div class="col-md-9">
                <div id="Inicio_vieW">
                    
                </div>

                <div id="Historial_tab">
                    <table class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Clientes</th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miercoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Pedro</td>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                            <td>sit</td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td>Pedro</td>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                            <td>sit</td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td>Pedro</td>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                            <td>sit</td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td>Pedro</td>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                            <td>sit</td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td>Pedro</td>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                            <td>sit</td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td>Pedro</td>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                            <td>sit</td>
                          </tr>
                        </tbody>
                  </table> 
                </div>

                <div id="Baja_view" class="col-md-9">
                    <div class="center">
                        <br><br>         
                        <h3> Dar de baja su cuenta</h3><br><br>
                        <h4> Para dar de baja su suscripcion debe enviar una solicitud de baja la cual sera recibida y a la vez revizar en el sistema que usted no cuente con deuda para hacer efectiva su solicitud</h4>
                        <textarea name="comentarios" rows="10" cols="60">Si desea, escriba aqui algun comentario del motivo de su baja de nuestros servicios</textarea>
                    </div>

                <div class="center">
                    <button type="button" class="btn btn-success">Solicitar baja</button>      
                </div>                    
                </div>
            </div>
            <!--  Fin views -->
        </div>
        <footer id="footer" class="midnight-blue">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10">
                        &copy; 2016 <a target="_blank" href="index.html" title="Pagina Principal">Oficina Virtual</a>. Todos los derechos reservados.
                    </div>
                </div>
            </div>
        </footer><!--Fin footer-->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
  </body>
</html>