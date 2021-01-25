<?php
include ('../BD/conexion.php');

session_start();

if(!empty($_POST)){
   
    
    if($_POST['action']=='addblog'){
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
           $insert=mysqli_query($conn,$sql) or die(mysqli_error($conn));

       }
    }
    if($_POST['action']=='addcategoria'){
        if(!empty($_POST['categoriapost'])){
            $categoriapost=$_POST['categoriapost'];
           
            $sql="INSERT INTO rcategoria_post(nombre) 
                 values('$categoriapost')";
                 
            $insert=mysqli_query($conn,$sql);
            if($insert){
                print "<script>
                alert('Registro Correcto');
                </script>";

            }
 
        }
     }

}



?>