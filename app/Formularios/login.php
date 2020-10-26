
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema la ruta</title>
    <link rel="stylesheet" href="../../Styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Styles/StylesForm.css">
    <link rel="stylesheet" href="../../Styles/css/mdb.min.css" >

</head>
<body>
    <div>
        <header>
          <nav class="navbar navbar-expand-lg navbar-dark elegant-color-dark">
            <a class="navbar-brand" href="#">
            <img src="../../Media/img/logo.png" height="70" alt="mdb logo">
          </a>
          <a class="navbar-brand" href="../../index.php">La Ruta del café</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
         
          </nav>

        </header>
        <div class="Slider">
            <main>
                <div class="modal-dialog ">
                  <div class="col-sm-8 seccion">
                    <div class="modal-content">
                      <div class="col-12 imagen center">
                        <img src="../../Media/img/png/login.png" alt="">
                      </div>

                      <form method="POST"  class="col-12" action="../mint/validar_usuario.php">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="email" class="form-control" name="_email" id="email" aria-describedby="emailHelp" placeholder="email">
                          <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" name="_password" id="password" placeholder="Password">
                        </div>
                        <div class="center">
                          <button id="_entrar" type="submit" class="btn btn-primary"><i></i> Enviar</button>
                        </div>
                      </form>
                      <div class="col-12 center">
                       <a id="olvidado" onclick="modal()">¿olvidaste la contraseña?</a>
                      </div>
                    </div>
                  </div>
                </div>  
                  <!-- Modal de forgot Password -->
                <div id="forgot" class="modal fade " id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog light-blue lighten-5" role="document">
                  <div class="modal-content light-blue lighten-5">
                    <div class="modal-header text-center light-blue lighten-5">
                      <h4 class="modal-title w-100 font-weight-bold text-body">Olvidaste la contraseña?</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="md-form mb-5">
                    <h4 class="text-body">Ingrese cuenta de Email para poder enviarle un enlace para restaurar contraseña.</h4>
                    </div>

                    
                      <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i> 
                        <label data-error="wrong" data-success="right" for="form29">Email</label>
                        <input type="email" id="form29" class="form-control validate">
                       
                      </div>

                    
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-unique">Enviar<i class="fas fa-paper-plane-o ml-1"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </main>

        </div>
          
        <footer>
        <?php
         include("../mint/footer.php");
         ?>
        </footer>

    </div>
    <script src="../../Scripts/Funciones.js"></script>
    <script src="../../Scripts/validaciones.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>