
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de la Empresa</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Styles/css/mdb.min.css">
    <link rel="stylesheet" href="../../Styles/form.css">
    
</head>
<body>
<header>
<?php
  include('../mint/header.php');
?>
</header>
<hr>
<div class="pt-5 col-ms-12  ">

<?php 
                         $sql="select*from rempresa";
                         $result=mysqli_query($conn,$sql);

                         while($mostrar=mysqli_fetch_array($result)){ $i=0;
                         ?>
<div class ="d-flex justify-content-center  mb-4">
<div  class="col-md-12 "> 
      
        <br>
        <div class="px-5 modal-header text-rigth  white darken-2 ">
         <h4 class="modal-title black-text w-70 font-weight-bold py-0">Información de Empresa</h4>
                <p class="font-weight-bold gray-text mb-12" >Codigo de Empresa: #<?php echo $mostrar[0]?></p>
        </div>
         
        </div>
     

</div>
        <!-- Card -->
        
<section class="p-5 seccion_descripcion my-0">
    
    <form id="form_empresa" name="form_empresa" enctype="multipart/form-data">
    <h3 class="statusMsg"></h3>
   <input type="hidden" value="<?php echo $mostrar[0]?>">
        
        <div class="row">

        <div class="col-lg-8 ">
            <div class="col-lg-12 row mb-3">
            <div class="col-md-12 col-10">
                
                <h5 class="font-weight-bold mb-3">Nombre empresa</h5>
                <div class="md-form">
                    
                <input required maxlength="100" class="font-weight-bold mb-12 form-control" id="nombre" name="nombre" value="<?php echo $mostrar['nombre_empresa']?>" type="text">
                    
                </div>
            </div>

            </div>
            <div class="col-md-12 row mb-3">
            <div class="col-md-12 col-10">
                
                <h5 class="font-weight-bold mb-3">Dirección</h5>
                <div class="md-form">
                <input required class="font-weight-bold mb-12 form-control" name="descripcion" id="descripcion" value="<?php echo $mostrar['direccion'] ?>">
                </div>
            </div>

            </div>
          
            <div class="col-md-12 row mb-3">
            <div class="col-md-12 col-10">
                
                <h5 class="font-weight-bold mb-3">RTN</h5>
                <div class="md-form">
                    
                    <input required maxlength="40" type="text" name="rtn" id="rtn" value="<?php echo $mostrar['rtn']?>" class="form-control">
                    
                </div>
            </div>

            </div>
            <div class="col-md-12 row mb-3">
          
            <div class="col-md-12 col-10">
                
                <h5 class="font-weight-bold mb-3">Correo Electrónico</h5>
                <div class="md-form">
                  
                    <input required maxlength="40" type="email" name="correo" id="correo"  value="<?php echo $mostrar['correo'] ?>" class="form-control">
                    
                </div>
            </div>
            
           
            
            </div>
            <div class="col-md-12  row mb-3">
            <div class="col-md-12 col-10">
                
                <h5 class="font-weight-bold mb-3">Teléfono</h5>
                <div class="md-form">
                    
                    <input maxlength="40" type="text" name="telefono" id="telefono" value="<?php echo $mostrar['telefono']?>" class="form-control" required>
                    
                </div>
            </div>

            </div>
           
        </div>
        <div class="col-lg-3 ">
        <div class="pt-4 form-group col-md-12 px-0">
                <div class="card" style="width: auto;">
                <div  id="imagePreview"  class="col-md-12 imagePreview card-img-top"></div>
                <img class="card-img-top" src="data:image/jpg; base64,<?php echo base64_encode($mostrar['logo']);?>">
				
					<div class="card-body">
						
						
						<div class="file-field">
                            <button type="button" id="subir" class="col-md-12 btn btn-elegant"><i class="fas fa-cloud-upload-alt fa-1.5x pr-2"></i>Image</button>
                            <input type="file" id="image" hidden class=" " data-max-file-size="2M" name="image" accept="image/*" >
                        
                        </div>
					</div>
                </div>
                </div>
        </div>
        
        </div>
        <button type="submit" id="update" class="btn btn-elegant">Actualizar Datos</button>
 
        <hr class="pt-0">
    </form>
</section>
    
<?php 

}
?>
 
 </div>
      
    

<footer>
    <?php
    include("../mint/footer.php");
    ?>

</footer>   
  
    <script type="text/javascript" src="../../Styles/js/popper.min.js"></script>
    <script type="text/javascript" src="../../Styles/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../Styles/js/bootstrap.min.js"></script>   
    <script type="text/javascript" src="../../Styles/js/mdb.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-1.52.3.min.js" charset = " utf-8 "></script>
    <script src="../../Scripts/validaciones.js"></script>
    <script src="../../Scripts/FuncionesApp.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>