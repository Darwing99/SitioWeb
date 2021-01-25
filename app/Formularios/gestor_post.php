<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artículos de post</title>
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
<div class="pt-5">

       
        <div  class="col-sm-12  mb-4">
        <br>
        <div class="modal-header text-rigth  white darken-2">
                <h4 class="modal-title black-text w-90 font-weight-bold py-0">Lista de articulos</h4>
                <a id="ver"type="button" href="post" class="btn btn-elegant"><i class="far fa-eye"></i>vista previa</a>
            </div>
            <br>
           
            </div>
              <!-- ################################################################################################### -->
            <!-- tabla -->
            <div class="col-md-12 table-responsive-sm" >
                        
                    <table id="articulos" class="table">
                        <thead>
                        <tr>
                           <th class="text-center">Id_Post</th>
                            <th class="text-center">Título</th>
                            <th class="text-center">Fecha de creación</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Creador</th>
                            <th class="text-center">Acción</th>

                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
              
            </div>
    
 </div>

      
    
                 <!--Borrar  -->
 <div class="modal fade" id="modalpost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <form method="POST" id="post">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">¿Cambiar estado de post?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                    <div class="form-group col-md-12">
                        <label for="id_post">Id</label>
                        <input name="id_post" type="text" class="form-control" id="id_post" readonly >
                    </div>
                    <div class="form-group col-md-12 px-3">
                <label for="estado">estado</label>
                <select class="custom-select browser-default" name="estado" id="estado" required>
                    <option value="0">Inactivo</option>
                    <option value="1">Activo</option>

                </select>
                </div>
                    
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" class="cambiar btn btn-elegant">Actualizar</button>
            </div>
            
            </div>
        </div> 
        
    </form>
    </div>
<footer>
    <?php
    include("../mint/footer.php");
    ?>
</footer>   
    <script type="text/javascript" src="../../Styles/js/popper.min.js"></script>
    <!-- <script type="text/javascript" src="../../Styles/js/jquery.min.js"></script> -->
    <script type="text/javascript" src="../../Styles/js/bootstrap.min.js"></script>   
    <script type="text/javascript" src="../../Styles/js/mdb.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-1.52.3.min.js" charset = " utf-8 "></script>
    <script src="../../Scripts/validaciones.js"></script>
    <script src="../../Scripts/FuncionesApp.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../../Scripts/datatables.js"></script>
</body>
</html>