   <?php 
   include('../BD/conexion.php');
   session_start();
   if(!isset($_SESSION['id'])){
    print "<script>
    alert('Acceso Denegado');
    window.location='../Formularios/login.php?sms=1';
    </script>";
   }
      $id= $_SESSION['id'];
      $sql="SELECT A.identidad as identidad,A.NAME AS name, A.nombre_user as nombre_user,A.estado as estado,A._idtipo as 
      idtipo, B.idtipo,B.tipo as tipo FROM rusuario as A JOIN 
      rtipouser as B on A._idtipo=B.idtipo where A.identidad='$id'";
      $resultado=$conn->query($sql);
      $row=$resultado->fetch_assoc();
 ?> 

<nav class="navbar navbar-expand-lg navbar-dark amber darken-3"id="top-section">

<!-- Navbar brand -->
<a class="navbar-brand" href="#">
    <img src="../../Media/img/logo.png" height="70" alt="mdb logo">
  </a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">

  <!-- Links -->

  <ul class="navbar-nav mr-auto">
  <?php  if($_SESSION['rol']==1){?>
    <li class="nav-item">
      <a class="nav-link" href="menu.php">Inicio
        <span class="sr-only">(current)</span>
      </a>
    </li>
    <?php } else if($_SESSION['rol']==2 and $_SESSION['rol']==3 and $_SESSION['rol']==4){ ?>

      <li class="nav-item" aria-hidden="true">
      <a class="nav-link" href="menu.php">Inicio
        <span class="sr-only">(current)</span>
      </a>
    </li>
    <?php } ?> 
    <?php  if($_SESSION['rol']==1){?>
    <li class="nav-item dropdown ">
     
      <a class="nav-link dropdown-toggle " id="navbarDropdownMenuLink" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">Empleado/Usuario</a>
      <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="empleado.php">Registro Empleado</a>
        <a class="dropdown-item" href="tipos_Usuarios.php">Tipos de Usuarios</a>
      </div>
   
    </li>
    <?php } else if($_SESSION['rol']==2 and $_SESSION['rol']==3 and $_SESSION['rol']==4){ ?>
      <li class="nav-item dropdown " aria-hidden="true">
     
     <a class="nav-link dropdown-toggle " id="navbarDropdownMenuLink" data-toggle="dropdown"
       aria-haspopup="true" aria-expanded="false">Empleado/Usuario</a>
     <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
       <a class="dropdown-item" href="empleado.php">Registro Empleado</a>
       <a class="dropdown-item" href="tipos_Usuarios.php">Tipos de Usuarios</a>
     </div>

   </li>

    <?php } ?>      

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">Almacen</a>
      <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="Categoria_producto.php">Categoría Insumo</a>
        <a class="dropdown-item" href="insumos.php">Insumos</a>
      
      </div>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">Compras</a>
      <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="proveedores.php">Proveedor</a>
        <a class="dropdown-item" href="compras.php">Compras</a>
        <?php  if($_SESSION['rol']==1){?>
        <a class="dropdown-item" href="../Formularios/gestor_compras.php">Gestor de compras</a>
        <?php } else if($_SESSION['rol']==2 and $_SESSION['rol']==3 and $_SESSION['rol']==4){ ?>
          <a class="dropdown-item" hidden="true" href="#">Gestor de compras</a>
          <?php } ?>  
      </div>
    </li>
  
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">Productos</a>
      <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="productos.php">Crear Producto</a>
        <a class="dropdown-item" href="categoria_producto.php">Categoría de producto</a>
        <a class="dropdown-item" href="gestor_productos.php">Gestor de productos</a>
      </div>
    </li>
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Ventas</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="cliente.php">Clientes</a>
          <?php  if($_SESSION['rol']==1){?>
            <a class="dropdown-item" href="gestor_ventas.php">Gestor de ventas</a>
            <?php } else if($_SESSION['rol']==2 and $_SESSION['rol']==3 and $_SESSION['rol']==4){ ?>
            <a class="dropdown-item" href="gestor_ventas.php" hidden>Gestor de ventas</a>
            <?php } ?>  
            <a class="dropdown-item" href="ventas.php">Ventas</a>

          </div>
    </li>
    <?php  if($_SESSION['rol']==1){?>
    <li class="nav-item dropdown" aria-disabled="false">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="true">Administrador de A/C</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="Apertura_cierre.php">Apertura y cierre</a>
          </div>
    </li>
    <?php } else if($_SESSION['rol']==2 and $_SESSION['rol']==3 and $_SESSION['rol']==4){ ?>
      <li class="nav-item dropdown" aria-disabled="false">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="true" >Administrador de A/C</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="Apertura_cierre.php"  aria-disabled="true">Apertura y cierre</a>
          </div>
    </li>
    <?php } ?>        
      
  </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"><?php echo utf8_decode($row['name']);?>
          <i class="fas fa-user"></i>
        </a>

        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#fullHeightModalRight">Cuenta</a>
          <a class="dropdown-item" href="../mint/salir.php">Cerrar Sesión</a>
          
        </div>
      </li>
      <?php  if($_SESSION['rol']==1){?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Configuración
          <i class="fa fa-cog" aria-hidden="true"></i>
        </a>
        
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="empresa.php">Información de empresa</a>
          
        </div>
      </li>
      <?php } else if($_SESSION['rol']==2 and $_SESSION['rol']==3 and $_SESSION['rol']==4){ ?>

        <li class="nav-item dropdown" aria-hidden="true">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Configuración
          <i class="fa fa-cog" aria-hidden="true"></i>
        </a>
        
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="empresa.php">Información de empresa</a>
          
        </div>
      </li>
        <?php } ?>  
    </ul> 
  <!-- Links -->
</div>
<!-- Collapsible content -->

</nav>
<!-- #######Informacion de usuario######### -->
<!-- Full Height Modal Right -->
<div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
  <div class="modal-dialog modal-full-height modal-right" role="document">


    <div class="modal-content">
      <div class="yellow darken-2 modal-header">
        <h4 Style="text-align:center;" class="modal-title w-100" id="myModalLabel">Información de Usuario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../CRUD/UpdateUsuario.php" method="POST">
              <div class="md-form form-group col-md-12">
              <i class="fas fa-fingerprint prefix"></i>
              <input style="text-align: center; color: black;" type="text" class="form-control" readonly  name="_identidad" value="   <?php echo utf8_decode($row['identidad']);?>">
              </div>
             <div class="md-form form-group col-md-12">
              <i class="fas fa-user-cog prefix"></i>
              <input style="text-align: center; color: black;" type="text" class="form-control"  readonly name="_tipo" value="   <?php echo utf8_decode($row['tipo']);?>">
              </div>
              <div class="md-form form-group col-md-12">
           
               <i class="fa fa-user  prefix" aria-hidden="true"></i>
                <input style="text-align: center; color: black;" type="text" class="form-control"  name="_nombre" value="  <?php echo utf8_decode($row['name']);?>">
               
              </div>
              <div class="md-form form-group col-md-12">
           
              <i class="fa fa-envelope prefix" aria-hidden="true"></i>
                <input style="text-align: center; color: black;" type="email" class="form-control"  name="_email" value="  <?php echo utf8_decode($row['nombre_user']);?>">
           
              </div>

              <div class="md-form form-group col-md-12">
                <i class="fas fa-lock prefix"></i>
                <input style="text-align: center; color: black;"  type="password" name="_Password" id="modalLRInput11" class="form-control form-control-sm validate" placeholder="Password">
               
              </div> 
              <div class="md-form form-group col-md-12">
                <i class="fas fa-lock prefix"></i>
                <input style="text-align: center; color: black;"  type="password" id="modalLRInput12" name="_newPass"class="form-control form-control-sm validate" placeholder="New Password">
               
              </div>  
              <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
              <button type="submit" class="btn btn-primary">Actualizar</button>
               </div>
      </div>
        </form>      

     
     
    </div>
  </div>
</div>

<div class="fixed-action-btn smooth-scroll" style="bottom: 45px; right: 24px;">
      <a href="#top-section" class="btn-floating btn-large warning-color-dark">
      <i class="fas fa-angle-up"></i>
      </a>
  </div>