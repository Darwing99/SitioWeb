<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apertura/Cierre</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Styles/css/bootstrap.min.css">  
    <link rel="stylesheet" href="../../Styles/form.css">
    <link rel="stylesheet" href="../../Styles/css/mdb.min.css">
    <script src="../../Scripts/jquery-3.1.1.js"></script>
 

</head>
<body>
<header>
<?php
  include('../mint/header.php');
?>
</header>
<br>
<br>
<div  class="margenes card-deck">

        <!-- Card -->
        <div class=" col-sm-1">
          
        </div>
     

        <div  class="col-sm-10 card mb-4">
        <br>
    
        <div class="modal-header text-center  yellow darken-2">
                <h4 class="modal-title black-text w-100 font-weight-bold py-2">Registro de Empleado</h4>
            </div>
            <br>
            <form action="buscar_usuario.php" method="get">
            <div class="md-form">
                            <input type="text" id="buscar" name="buscar" class="form-control" placeholder="Buscar">
                            <button class="btn btn-deep-orange" type="submit">Buscar</button>
                           
            </div>
        
            
            </form>
            
            <div class="tabla_hide">

            <div class="tabla_hide centrar_form">
                <div id="table" class="table-editable">
                   
                
                <table class="table table-bordered table-responsive-md table-striped text-center">
                       <thead>
                       <tr>
                           <th class="text-center">Id</th>
                           <th class="text-center">Nombre</th>
                           <th class="text-center">Usuario</th>
                           <th class="text-center">Estado</th>
                           <th class="text-center">Tipo de Usuario</th>
                           <th class="text-center">Acciones</th>
                           
                       </tr>
                       </thead>
                       <tbody>

                       <!-- ######Mostrar Empleados o usuarios desde la base de datos###### -->
                       <?php 
                         include('../BD/conexion.php');
                        //  Paginador
                        $cantidad="SELECT count(*) AS total from rusuario where estado=1";
                        $captura=mysqli_query($conn,$cantidad);
                        $resultado=mysqli_fetch_array($captura);
                        $total=$resultado['total'];
                        $por_pagina=3;
                        if(empty($_GET['pagina']))
                        {
                            $pagina=1;
                            
                        }else{
                            $pagina=$_GET['pagina'];

                        }
                        $desde=($pagina-1)*$por_pagina;
                        //Mostrar cantidad de paginas segun cantidad de registros
                        $total_paginas=ceil($total/$por_pagina);


                        $sql_register=mysqli_query($conn,$cantidad);
                         $sql="SELECT A.id,A.nombre, A.usuario,if(A.estado=0,'Inactivo','Activo') 
                         as Estad,B.tipo FROM rusuario AS A 
                         INNER JOIN rtipouser AS B where A._idtipo=B.idtipo
                         ORDER BY  A.usuario ASC limit $desde,$por_pagina";
                         $result=mysqli_query($conn,$sql);

                         while($mostrar=mysqli_fetch_array($result)){ $i=0;
                         ?>

                         <tr>
                           <td><?php echo $mostrar['id'] ?></td>
                           <td><?php echo $mostrar['nombre'] ?></td>
                           <td><?php echo $mostrar['usuario']?></td>
                           <td><?php echo $mostrar['Estad'] ?></td>
                           <td><?php echo $mostrar['tipo'] ?></td>
                          
                           <td> 
                            <?php $i++; ?>
                           
                           <button type="button" class="btn btn-primary px-3"  data-toggle="modal" data-target="#myModalbaja<?php echo $mostrar[0];?>"><i class="fas fa-unlock"></i></button>    
                           </td>
                         </tr>
                         
                                <!-- Actualizar estado de apertura y cierre -->
                         <div class="modal fade" id="myModalbaja<?php echo $mostrar[0];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">
                                <form action="../CRUD/updateEstadoAC.php" method="POST">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Habilitar/Deshabilitar</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body mx-3">
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Id</label>
                                                    <input name="idUsuarioA" type="text" class="form-control" id="id" readonly value="<?php echo $mostrar[0] ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Nombre</label>
                                                    <input name="nombreUserA" type="text" class="form-control" id="nombre" readonly value="<?php echo $mostrar[1] ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Usuario</label>
                                                    <input name="usuarioA" type="text" class="form-control" id="usuario" readonly value="<?php echo $mostrar[2] ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                <label for="inputEmail4">Estado</label>
                                                <select class="form-control" id="_tipoUser" name="estadoA">
                                                            <option value="0">Deshabilitar</option>
                                                            <option value="1">Habilitar</option>
                                                            
                                                </select>
                                        
                                                </div>
                                         
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button id="_agregar" type="submit" class="btn btn-deep-orange">Actualizar</button>
                                        </div>
                                       
                                        </div>
                                    </div> 
                                   
                                </form>
                                </div>
                       <?php 
                       }
                       ?>
                   
                       </tbody>
                   </table>

                   <!-- ####Paginador#### -->
                   <div class="paginador">
                       <ul>

                            <?php 
                            if($pagina!=1){

                          
                            ?>
                           <li><a href="?pagina=<?php echo 1; ?>"><i class="fas fa-step-backward"></i></a></li>
                           <li><a href="?pagina=<?php echo $pagina-1;?>"><i class="fas fa-backward"></i></a></li>
                           <?php  
                           
                           }
                           for($i=1;$i<=$total_paginas;$i++){
                               if($i==$pagina)
                               {
                                     echo ' <li class="pageSelected">'.$i.'</li>';
                               }else{
                               echo ' <li><a href="?pagina='.$i.'">'.$i.'</a></li>';
                               }
                           }
                           if($pagina!=$total_paginas){
                           ?>
                          
                           <li><a href="?pagina=<?php echo $pagina+1;?>"><i class="fas fa-fast-forward"></i></a></li>
                           <li><a href="?pagina=<?php echo $total_paginas;?>"><i class="fas fa-step-forward"></i></a></li>
                      <?php }?>
                    </ul>

                   </div>
                </div>
            </div>
            </div>
        </div>
      
        
 </div>
      
    

<footer>
    <?php
    include("../mint/footer.php");
    ?>
</footer>   

<!-- estilos de paginaador -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>