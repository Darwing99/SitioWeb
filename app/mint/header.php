<?php 
   include_once '../BD/conexion.php';
   $objeto = new Conexion();
   $conexion = $objeto->Conectar();
   session_start();
   if(!isset($_SESSION['id'])){
    print "<script>
    alert('Acceso Denegado');
    window.location='../Formularios/login.php?sms=1';
    </script>";
   }
      $id= $_SESSION['id'];
      $sql="SELECT A.id as id,A.nombre AS nombre, A.usuario as usuario,A.estado as estado,A._idtipo as 
      idtipo, B.idtipo,B.tipo as tipo FROM rusuario as A JOIN 
      rtipouser as B on A._idtipo=B.idtipo where A.id='$id'";
      $resultado=$conn->query($sql);
      $row=$resultado->fetch_assoc();
 ?> 
 <header  class="fixed-sn mdb-skin">
   
 <div id="slide-out" class="side-nav sn-bg-4" style="width: 240px; transform: translateX(0px);">
    <ul class="custom-scrollbar ps">  
        <!-- Logo -->
        <li class="pt-0" >
          <div class="logo-wrapper sn-ad-avatar-wrapper">
            <a href="#"><img src="../../Media/img/Logo.png" class="rounded-circle"></a>
          </div>
        </li>
      
        
    
          <ul class="collapsible collapsible-accordion">
          <?php  if($_SESSION['rol']==1){?>
              <li class="pt-2" >
                <a class="collapsible-header waves-effect arrow-r" href="menu"><i class="fas fa-home fa-2x"></i>Inicio
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <?php } else if($_SESSION['rol']==2 and $_SESSION['rol']==3 and $_SESSION['rol']==4){ ?>

                <li class="pt-2" aria-hidden="true">
                <a class="collapsible-header waves-effect arrow-r" href="menu">Inicio
                  <span class="sr-only">(current)</span>
                </a>
              </li>
            <?php } ?> 
          <?php  if($_SESSION['rol']==1){?>
            <li class="pt-2"><a class="collapsible-header waves-effect arrow-r" aria-hidden="true"><i class="fas fa-users"></i>Empleado/Usuario<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a  class="waves-effect"  href="empleado">
                    <span class="sv-slim"><i class="fas fa-user-plus"></i></span>
                    <span class="sv-normal">Registro Usuarios</span></a>
                  </li>
                  <li><a href="tipos_Usuario" class="waves-effect ">
                    <span class="sv-slim"> <i class="fa fa-briefcase"></i> </span>
                    <span class="sv-normal">Roles</span></a>
                  </li>
                </ul>
              </div>
            </li>
            <?php } else if($_SESSION['rol']==2 and $_SESSION['rol']==3 and $_SESSION['rol']==4){ ?>
              <li class="pt-2"><a class="collapsible-header waves-effect arrow-r" aria-hidden="false"><i class="fas fa-users"></i>Empleado/Usuario<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a  class="waves-effect black"  href="empleado">
                    <span class="sv-slim"><i class="fas fa-user-plus"></i> </span>
                    <span class="sv-normal">Registro Usuarios</span></a>
                  </li>
                  <li><a href="tipos_Usuarios" class="waves-effect ">
                    <span class="sv-slim"> <i class="fa fa-briefcase"></i> </span>
                    <span class="sv-normal">Roles</span></a>
                  </li>
                
                </ul>
              </div>
            </li>
              <?php } ?> 
            <li class="pt-2"><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-boxes"></i>Almacen<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="Categoria_producto" class="waves-effect ">
                    <span class="sv-slim"> <i class="fa fa-tags"></i> </span>
                    <span class="sv-normal">Categoría de Insumos</span></a>
                  </li>
                  <li><a href="insumos" class="waves-effect ">
                    <span class="sv-slim"> FA </span>
                    <span class="sv-normal">Insumos</span></a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="pt-2"><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-cart-arrow-down"></i> Compras<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="proveedores" class="waves-effect ">
                    <span class="sv-slim"> <i class="fas fa-user-tie"></i> </span>
                    <span class="sv-normal">Proveedores</span></a>
                  </li>
                  <li><a href="compras" class="waves-effect">
                    <span class="sv-slim"><i class="far fa-plus-square"></i></span>
                    <span class="sv-normal">Nueva Compra</span></a>
                  </li>
                  <?php  if($_SESSION['rol']==1){?>
                    <li><a href="gestor_compras" class="waves-effect">
                    <span class="sv-slim"><i class="fas fa-list-alt"></i></span>
                    <span class="sv-normal">Lista De Compras</span></a>
                  </li>
                  <?php } else if($_SESSION['rol']==2 and $_SESSION['rol']==3 and $_SESSION['rol']==4){ ?>
                    <li><a href="gestor_compras"  hidden="true" class="waves-effect ">
                    <span class="sv-slim"><i class="fas fa-list-alt"></i></span>
                    <span class="sv-normal">Lista De Compras</span></a>
                  </li>
                  <?php } ?>  
                </ul>
              </div>
            </li>
            <li class="pt-2"><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-cubes"></i> Productos<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="productos" class="waves-effect">
                    <span class="sv-slim"><i class="far fa-plus-square"></i> </span>
                    <span class="sv-normal">Nuevo Producto</span></a>
                  </li>
                  <li><a href="categoria_producto" class="waves-effect ">
                    <span class="sv-slim"> <i class="fa fa-tags"></i></span>
                    <span class="sv-normal">Categoría de Producto</span></a>
                  </li>
                  <li><a href="gestor_productos" class="waves-effect ">
                    <span class="sv-slim"><i class="fas fa-list-alt"></i></span>
                    <span class="sv-normal">Lista De Productos</span></a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="pt-2"><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-user-friends"></i>Personas<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="gestor_usuarios" class="waves-effect ">
                    <span class="sv-slim"><i class="far fa-plus-square"></i> </span>
                    <span class="sv-normal">Usuarios</span></a>
                  </li>
                  <li><a href="gestor_clientes" class="waves-effect ">
                    <span class="sv-slim"> <i class="fas fa-list-alt"></i> </span>
                    <span class="sv-normal">Clientes</span></a>
                  </li>
                  <li><a href="gestor_proveedores" class="waves-effect ">
                    <span class="sv-slim"><i class="fa fa-tags"></i> </span>
                    <span class="sv-normal">Proveedores</span></a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="pt-2"><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-money-check-alt"></i> Ventas<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="cliente" class="waves-effect ">
                    <span class="sv-slim"> <i class="fas fa-user-tie"></i> </span>
                    <span class="sv-normal">Clientes</span></a>
                  </li>
                  <?php  if($_SESSION['rol']==1){?>
                  <li><a href="gestor_ventas" class="waves-effect">
                    <span class="sv-slim"><i class="fas fa-list-alt"></i></span>
                    <span class="sv-normal">Lista De Ventas</span></a>
                  </li>
                  <?php } else if($_SESSION['rol']==2 and $_SESSION['rol']==3 and $_SESSION['rol']==4){ ?>
                    <li><a href="gestor_ventas" class="waves-effect " hidden>
                      <span class="sv-slim"> <i class="fas fa-list-alt"></i></span>
                      <span class="sv-normal">Lista De Ventas</span></a>
                    </li>
                    <?php } ?>  
                    <li><a href="ventas" class="waves-effect ">
                      <span class="sv-slim"><i class="far fa-plus-square"></i></span>
                      <span class="sv-normal">Nueva Venta</span></a>
                    </li>


                </ul>
              </div>
            </li>
            <li class="pt-2"><a class="collapsible-header waves-effect arrow-r"><i class="fab fa-blogger-b"></i>Blog<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="blog" class="waves-effect">
                    <span class="sv-slim"><i class="far fa-plus-square"></i> </span>
                    <span class="sv-normal">Nuevo Post</span></a>
                  </li>
                  <li><a href="gestor_post" class="waves-effect ">
                    <span class="sv-slim"> <i class="fas fa-list-alt"></i> </span>
                    <span class="sv-normal">Lista de Post Publicados</span></a>
                  </li>
                  <li><a href="post" class="waves-effect">
                    <span class="sv-slim"><i class="fa fa-tags"></i> </span>
                    <span class="sv-normal">Categorias de post</span></a>
                  </li>
               
                </ul>
              </div>
            </li>
            <li class="pt-2"><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-file-alt"></i>Informes<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="blog" class="waves-effect ">
                    <span class="sv-slim"><i class="far fa-plus-square"></i> </span>
                    <span class="sv-normal">Compra y venta</span></a>
                  </li>
                  <li><a href="post" class="waves-effect">
                    <span class="sv-slim"> <i class="fas fa-list-alt"></i> </span>
                    <span class="sv-normal">Lista de Post Publicados</span></a>
                  </li>
                  <li><a href="post" class="waves-effect">
                    <span class="sv-slim"><i class="fa fa-tags"></i> </span>
                    <span class="sv-normal">Categorias de post</span></a>
                  </li>
               
                </ul>
              </div>
            </li>
            <li class="pt-2"><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-cogs"></i>Configuración<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                <?php  if($_SESSION['rol']==1){?>
                  <li><a href="empresa" class="waves-effect">
                    <span class="sv-slim"> <i class="fas fa-info"></i> </span>
                    <span class="sv-normal">Información Empresa</span></a>
                  </li>
                  <?php } else if($_SESSION['rol']==2 and $_SESSION['rol']==3 and $_SESSION['rol']==4){ ?>
                    <li><a href="empresa" class="waves-effect " hidden>
                    <span class="sv-slim"> <i class="fas fa-info"></i> </span>
                    <span class="sv-normal">Información Empresa</span></a>
                  </li>
                    <?php } ?>  
                  <li><a href="categoria_producto" class="waves-effect ">
                    <span class="sv-slim"> <i class="fas fa-question"></i></span>
                    <span class="sv-normal">Acerca de</span></a>
                  </li>
             
               
                </ul>
              </div>
            </li>
           
          </li>
          </ul>
     
        <!--/. Side navigation links -->
      </ul>
      <div class="sidenav-bg rgba-blue-strong"></div>
    </div>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->



    <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg double-nav">
      <!-- SideNav slide-out button -->
      <div class="float-left nav-item ">
      <a href="#" data-activates="slide-out" class="button-collapse "><i class="fas fa-bars"></i></a>
    </div>
      <!-- Breadcrumb-->
    
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
        <li class="nav-item">
          <a class="text-white nav-link"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contacto</span></a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="text-white nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"><?php echo utf8_decode($row['nombre']);?>
            <i class="fas fa-user"></i>
          </a>

          <div class="dropdown-menu dropdown-menu-right dropdown-default"
            aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#fullHeightModalRight">Cuenta</a>
            <a class="dropdown-item" href="../mint/salir.php">Cerrar Sesión</a>
        </div>
      </li>
      </ul>
    </nav>
    <!-- /.Navbar -->
  </header>
  <!--/.Double navigation-->

  <div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
  <div class="modal-dialog modal-full-height modal-right" role="document">


    <div class="modal-content">
      <div class="black darken-2 modal-header">
        <h4 Style="text-align:center; color:white;" class="modal-title w-100" id="myModalLabel">Información de Usuario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../CRUD/UpdateUsuario.php" method="POST">
              <div class="md-form form-group col-md-12">
              <i class="fas fa-fingerprint prefix"></i>
              <input Style="text-align: center; color: black;" type="text" class="form-control" readonly  name="_identidad" value="   <?php echo utf8_decode($row['id']);?>">
              </div>
             <div class="md-form form-group col-md-12">
              <i class="fas fa-user-cog prefix"></i>
              <input style="text-align: center; color: black;" type="text" class="form-control"  readonly name="_tipo" value="   <?php echo utf8_decode($row['tipo']);?>">
              </div>
              <div class="md-form form-group col-md-12">
           
               <i class="fa fa-user  prefix" aria-hidden="true"></i>
                <input style="text-align: center; color: black;" type="text" class="form-control"  name="_nombre" value="  <?php echo utf8_decode($row['nombre']);?>">
               
              </div>
              <div class="md-form form-group col-md-12">
           
              <i class="fa fa-envelope prefix" aria-hidden="true"></i>
                <input style="text-align: center; color: black;" type="email" class="form-control"  name="_email" value="  <?php echo utf8_decode($row['usuario']);?>">
           
              </div>

              <div class="md-form form-group col-md-12">
                <i class="fas fa-lock prefix"></i>
                <input style="text-align: center; color: black;"  type="password" name="_Password" id="_Password" class="form-control form-control-sm validate" placeholder="Password">
               
              </div> 
              <div class="md-form form-group col-md-12">
                <i class="fas fa-lock prefix"></i>
                <input style="text-align: center; color: black;"  type="password" id="_newPass" name="_newPass"class="form-control form-control-sm validate" placeholder="New Password">
               
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

