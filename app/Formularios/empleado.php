<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleado</title>
    <?php
     include('../mint/datatables.php');
    ?>
     <link rel="stylesheet" href="../../Styles/form.css">

  
</head>
<body>
<header>
<?php
  include('../mint/header.php');
?>
</header>
<br>
<div class="">


<div class="pt-5">

        <!-- Card -->
     

        <div  class="col-sm-12  mb-4">
        <br>

        <div class="modal-header text-rigth  white darken-2">
                <h4 class="modal-title black-text w-20 font-weight-bold py-0">Registro de Empleado</h4>
                <button type="button" id="_tipo" class="btn btn-elegant " data-toggle="modal" data-target="#myModal">Nuevo Rol <i class="far fa-plus-square"></i></button>
                <a id="ver"type="button" href="gestor_usuarios" class="btn btn-elegant"><i class="fas fa-list-ol"></i> Lista</a>
            </div>
            
         
            <form method="POST" id="addusuario"class="p-5 centrar_form">
            <p class="statusMsg"></p>
            <input type="hidden" name="option" value="5" required>
            <div class="row">
            <div class="col-lg-12 mb-4 p-4">
                <div class="text-left">
              
                <div class="form-row">
                    <div class="col-md-6 col-5">
                        
                        <h5 class="font-weight-bold mb-3">Nombre</h5>
                        <div class="md-form">
                        
                        <input type="text" name="_name" class="form-control" id="_name" required>
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-5">
                        
                        <h5 class="font-weight-bold mb-3">Usuario</h5>
                        <div class="md-form">
                        
                        <input type="email" name="_empleado" class="form-control" id="_empleado" required>
                            
                        </div>
                    </div>
                    </div>
                    
                    <div class="form-row">
                        
                    
                    <div class="col-md-6 col-5">
                        
                        <h5 class="font-weight-bold mb-3">Estado</h5>
                        <div class="md-form col-md-12">
                        
                        <select class="mdb-select md-form" id="_estado" name="_estado" required>
                            <option disabled selected></option>
                            <option value="0">Inactivo</option>
                            <option value="1">Activo</option>
                        </select>
                            
                        </div>
                    </div> 
                    <div class="col-md-6 col-5">
                        
                        <h5 class="font-weight-bold mb-3">Tipo de Usuario</h5>
                        <div class="md-form col-md-12">
                        
                          <select class="mdb-select md-form" id="_tipoUser" name="_tipoUser" required>
                                <option value="0" disabled selected></option>
                                <?php
                            
                                $sql="select*from rtipouser";
                                $result=mysqli_query($conn,$sql);
                                while($mostrar=mysqli_fetch_array($result)){?>
                            
                                <option value="<?php echo  $mostrar['idtipo']?>"> <?php echo  $mostrar['tipo'] ?></option>
                                <?php } ?>
                           </select>
                            
                        </div>
                    </div> 
                    <div class="col-md-6 col-5">
                        
                        <h5 class="font-weight-bold mb-3">Contraseña</h5>
                        <div class="md-form">
                        
                        <input minlength="8" maxlength="40" type="password" class="form-control" id="_pass" name="_pass">
                            
                        </div>
                    </div> 
                
                </div>
               
               
                </div>
            </div>
           
            </div>
            
            <button id="guardar" type="submit" class="btn btn-elegant"><i class="fas fa-plus-square  pr-2"></i>Agregar</button>
            
            <button type="reset" class="btn btn-elegant"><i class="far fa-save pr-2" aria-hidden="true"></i>Limpiar</button>
            </form>
            <br>

       
        </div>
       
      
        
 </div>


<div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel aria-hidden="true">
  <form id="categoria_usuario" method="POST">
   <input type="hidden" name="option" value="6" required>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Tipo de Usuario/Empleado</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body mx-3">
            
            <div class="form-group col-md-12"> 
            
            <?php 
                    $sql="select Max(idtipo+1) as num from rtipouser";
                    $result=mysqli_query($conn,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                    ?>
                <label for="inputEmail4">Código</label>
                <input name="num"type="text" class="form-control" id="numero" readonly value="<?php echo $mostrar['num'] ?>">
                </div>
                <?php } ?>
            <div class="form-group col-md-12">
            
            <label for="inputEmail4">Tipo de Usuario</label>
                <input name="_tipoUser"type="text" class="form-control" id="_tipoUser">
            </div>
            </div>  
            <div class="modal-footer d-flex justify-content-center">
            <button id="_agregarUser" type="submit" class="btn btn-elegant">Agregar</button>
        </div>
        </div>
      
        </div> 
    </form>
    </div>
 
</div>

<footer>
    <?php
    include("../mint/footer.php");
    ?>

</footer>   

  
    <script src="https://cdn.plot.ly/plotly-1.52.3.min.js" charset = " utf-8 "></script>
    <script src="../../Scripts/validaciones.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
     <script type="text/javascript" src="../../Styles/js/popper.min.js"></script>
   
    <script type="text/javascript" src="../../Styles/js/bootstrap.min.js"></script>   
    <script type="text/javascript" src="../../Styles/js/mdb.min.js"></script>
    <script src="../../Scripts/datatables.js"></script>
     <script src="../../Scripts/FuncionesApp.js"></script>
</body>
</html>