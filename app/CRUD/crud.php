<?php

session_start();
include_once '../BD/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$data="0";
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$action=(isset($_POST['option'])) ? $_POST['option'] : '';
$id_tipo_usuario=(isset($_POST['id_tipo'])) ? $_POST['id_tipo'] : '';
$rol=(isset($_POST['rol'])) ? $_POST['rol'] : '';
$id_cliente = (isset($_POST['id_cliente'])) ? $_POST['id_cliente'] : '';
$id_producto = (isset($_POST['id_producto'])) ? $_POST['id_producto'] : '';
$id_proveedor=(isset($_POST['id_proveedor'])) ? $_POST['id_proveedor'] : '';
$id_usuario = (isset($_POST['id_usuario'])) ? $_POST['id_usuario'] : '';
$id_post = (isset($_POST['id_post'])) ? $_POST['id_post'] : '';
$estado = (isset($_POST['estado'])) ? $_POST['estado'] : '';

switch($opcion){
    case 1:
      
        $consulta = "SELECT A.id as id,A.nombre as nombre, A.usuario as usuario,
                        if(A.estado=0,'Inactivo','Activo') as estado,B.tipo as tipo
                      FROM rusuario AS A INNER JOIN rtipouser AS B 
                      where A._idtipo=B.idtipo";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
       
      break; 
      // Clientes

      case 2:
      $consulta = "SELECT*FROM rclientes";
      $resultado = $conexion->prepare($consulta);
      $resultado->execute();        
      $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
      break;    
      // articulos de post
      case 3:
        $consulta = "SELECT rpost.id as id_post, m.nombre as creador, `titulo`, 
                     `subtitulo`,
                     date_format(created_at,'%d/%m/%y %r')as created_at, 
                     if(rpost.estado='1','Activo','Inactivo') as estado_post, `user_id`, `category_id` FROM `rpost` 
                     INNER JOIN rusuario as m on rpost.user_id=m.id";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
      break;   
      case 4:
      
        $consulta = "UPDATE rpost set estado='$estado' Where id='$id_post'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
      break;  
    // Habilitando y deshabilitando usuarios
      case 5:
        $consulta = "UPDATE rusuario SET estado='$estado' WHERE id='$id_usuario'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
      break;   
      // Borrar clientes
      case 6:
        $consulta = "DELETE FROM rclientes WHERE id='$id_cliente'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC); 
       
       
      break; 

      case 7:
        $consulta = "SELECT * FROM `rproductos`";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
      
      break; 
      case 8:
        
      break;
      case 9:
        $consulta = "SELECT rpost.id as id_post, m.nombre as creador, `titulo`, 
                     `subtitulo`,
                     date_format(created_at,'%d/%m/%y %r')as created_at, 
                     if(rpost.estado='1','Activo','Inactivo') as estado_post, `user_id`, `category_id` FROM `rcompras` 
                     INNER JOIN rproveedores as m on rpost.user_id=m.id";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
      break;   
      case 10:
              $consulta = "SELECT*FROM rproveedores";
              $resultado = $conexion->prepare($consulta);
              $resultado->execute();        
              $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
          break;
      case 11:
        $consulta = "DELETE FROM rproveedores where id='$id_proveedor'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
      break; 
      case 12:
        $consulta = "DELETE FROM rproductos where idproducto='$id_producto'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
      break;  
      case 13:
        $consulta = "SELECT*FROM rtipouser";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
      break;   
      case 14:
        $consulta = "DELETE FROM rtipouser WHERE idtipo='$id_tipo_usuario'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        print_r($_POST);
      break;   
      case 15:
        $consulta =  "UPDATE rtipouser SET tipo='$rol' WHERE idtipo='$id_tipo_usuario'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
      print_r($_POST);
      break; 
        
}

// Insertando query
switch($action){
  // Insertando clientes
  case 1:
    
          if(isset($_POST['_identidad'],$_POST['_nombre'],$_POST['_direccion'],$_POST['_telefono'],$_POST['_email'])){
            if ($_POST['_identidad']!=="" || $_POST['_nombre']!=="" || $_POST['_direccion']!=="" || $_POST['_telefono']!==""||$_POST['_email']!=="") {
                $identidad=$_POST['_identidad'];
                $nombre=$_POST['_nombre'];
                $direccion=$_POST['_direccion'];
                $telefono=$_POST['_telefono'];
                $email=$_POST['_email'];
                $sql="INSERT INTO rclientes(id,identidad,cliente,direccion,telefono,email) 
                      VALUES(null,'$identidad','$nombre','$direccion','$telefono','$email')";
               
                mysqli_query($conn, $sql) or die(''.mysqli_error($conn).'');
              
               
            }
            
          
        }
        print_r($_POST);
    break; 
    //  Insertando Post

    case 2:
      if(!empty($_POST['titulo'])|| !empty($_POST['subtitulo'])||!empty($_POST['categoria'])
       ||!empty(['descripcion'])||!empty($_FILES['image'])){
           $title=$_POST['titulo'];
           $subtitle=$_POST['subtitulo'];
           $description=($_POST['descripcion']);
           $category=$_POST['categoria'];
           $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
    
          
           $idusuario=$_SESSION['id'];
           $sql="INSERT INTO rpost(titulo,subtitulo,contenido,imagen,user_id,category_id) 
                values('$title','$subtitle','$description','$image','$idusuario','$category')";
           mysqli_query($conn, $sql) or die(''.mysqli_error($conn).'');

       }
       print_r($_POST);
    break;  
    // Insertando categoría de post 
    case 3:
    
      if(!empty($_POST['categoriapost'])){
        $categoriapost=$_POST['categoriapost'];
       
        $sql="INSERT INTO rcategoria_post(nombre) 
             values('$categoriapost')";
             
        $insert=mysqli_query($conn,$sql);
        

    }     
    break;  
  // Insertando proveedores
    case 4:
          if(isset($_POST['_identidad'],$_POST['_rtn'],$_POST['_nombre'],$_POST['_razon'],$_POST['_direccion'],$_POST['_telefono'],$_POST['_celular'],$_POST['_email'])){
            if ($_POST['_identidad']!=="" || $_POST['_rtn']!==""|| $_POST['_nombre']!=="" || $_POST['_razon']!==""|| $_POST['_direccion']!=="" || $_POST['_telefono']!==""|| $_POST['_celular']!==""||$_POST['_email']!=="") {
                $identidad=$_POST['_identidad'];
                $rtn=$_POST['_rtn'];
                $nombre=$_POST['_nombre'];
                $razon=$_POST['_razon'];
                $direccion=$_POST['_direccion'];
                $telefono=$_POST['_telefono'];
                $celular=$_POST['_celular'];
                $email=$_POST['_email'];
             
                $sql="INSERT INTO rproveedores(id,identidad,rtn,proveedor,razon_social,direccion,telefono,email,celular) VALUES(null,'$identidad',$rtn,'$nombre','$razon','$direccion','$telefono','$email','$celular')";
                                
                                $resultado = $conexion->prepare($sql);
                                $resultado->execute(); 
                                print_r($result);
        
               
               
            }
            
          
        }
       
    break;   
    // agregar usuario
    case 5:
          if(isset($_POST['_name'],$_POST['_empleado'],$_POST['_estado'],$_POST['_tipoUser'],$_POST['_pass'])){
            if($_POST['_name']!=""||$_POST['_empleado']!="" || $_POST['_estado']!="" || $_POST['_tipoUser']!=""||$_POST['_pass']!=""){
              
                $name=$_POST['_name'];
                $empleado=$_POST['_empleado'];
                $estado=$_POST['_estado'];
                $tipouser=$_POST['_tipoUser'];
                $passa=$_POST['_pass'];
              
                $sql="INSERT INTO rusuario(id,nombre,usuario,pass,estado,_idtipo) VALUES(null,'$name','$empleado',sha1('$passa'),'$estado','$tipouser')";
    
                mysqli_query($conn,$sql) or  die(''.mysqli_error($conn).'');
                
                print "<script>
                alert('Registro creado satisfactoriamente');
                window.location='../Formularios/empleado.php';
                </script>";
                
            
            }
            
          
        }
     
     
    break; 

    case 6:
      if(isset($_POST['_tipoUser'])){
        if ($_POST['_tipoUser']!=="") {
            $tipo=$_POST['_tipoUser'];
            $sql="INSERT INTO rtipouser(idtipo,tipo) VALUES(null,'$tipo')";
            mysqli_query($conn,$sql) or  die(''.mysqli_error($conn).'');
            print "<script>
                alert('Registro creado satisfactoriamente');
               
                </script>";
        }
      
    }
    
    break; 
    case 7:
      if(!empty($_POST['codigo'])|| !empty($_POST['descripcion'])||!empty($_POST['precio'])
       ||!empty(['descuento'])||!empty(['impuesto'])||!empty($_FILES['image'])){
           $codigo=$_POST['codigo'];
           $precio=$_POST['precio'];
           $description=($_POST['descripcion']);
           $impuesto=$_POST['impuesto'];
           $descuento=$_POST['descuento'];
           $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
    
          
          
           $sql="INSERT INTO `rproductos`(`idproducto`, `codigo`, `descripcion`, `precio`, `descuento`, `impuesto`, `existencia`, `foto`) 
           VALUES (null,'$codigo','$description','$precio','$descuento','$impuesto','0','$image')";
           mysqli_query($conn, $sql) or die(''.mysqli_error($conn).'');

       }
       print_r($_POST);
      
    break;
    case 8: 
      if($_POST['rtn']!=="" || $_POST['empresa']!=="" || $_POST['direccion']!==""||$_POST['telefono']!==""||$_POST['correo']!==""){
        $rtn=$_POST['rtn'];
        $id=$_POST['id'];
        $empresa=$_POST['nombre'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['correo'];
        $imagen= addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $sql="UPDATE rempresa SET rtn='$rtn',nombre_empresa='$empresa',direccion='$direccion',telefono='$telefono',correo='$correo',logo='$imagen'
        WHERE id='$id'";
        mysqli_query($conn,$sql) ;
        
    }

    break;
    case 9:
      $consulta = "SELECT rpost.id as id_post, m.nombre as creador, `titulo`, 
                   `subtitulo`,
                   date_format(created_at,'%d/%m/%y %r')as created_at, 
                   if(rpost.estado='1','Activo','Inactivo') as estado_post, `user_id`, `category_id` FROM `rcompras` 
                   INNER JOIN rproveedores as m on rpost.user_id=m.id";
      $resultado = $conexion->prepare($consulta);
      $resultado->execute();        
      $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
    break;   
    case 10:
            $consulta = "SELECT*FROM rproveedores";
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();        
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 11:
      $consulta = "DELETE FROM rproveedores where id='$id_proveedor'";
      $resultado = $conexion->prepare($consulta);
      $resultado->execute();        
      $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
    break; 
    case 12:
      $consulta = "DELETE FROM rproductos where idproducto='$id_producto'";
      $resultado = $conexion->prepare($consulta);
      $resultado->execute();        
      $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
    break;     
   
  
}
print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX

$conexion=null;

?>