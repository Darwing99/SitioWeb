<?php
include_once '../BD/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
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
        $consulta = "SELECT `idproducto`, `descripcion`, `precio`, `descuento`, `impuesto`, `existencia`  FROM `rproductos`";
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
     
    
}
print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX

$conexion=null;

?>