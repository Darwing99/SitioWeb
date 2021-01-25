<?php


$consulta="SELECT*,rpost.id as id_post,  date_format(created_at,'%d/%m/%y %r') as created_at FROM rpost INNER JOIN rusuario on rpost.user_id=rusuario.id WHERE rpost.estado='1'";
$consulta_resultado=mysqli_query($conn,$consulta);
while($lista=mysqli_fetch_array($consulta_resultado)){

?>
<br>
  <div class="col-md-12 row">

<!-- Grid column -->
<div class="col-md-5 col-xl-4">

  <!-- Featured image -->
  <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
   
    <img class="img-fluid" src="data:image/jpg; base64,<?php echo base64_encode($lista['imagen']); ?>" alt="Sample image">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-lg-7 col-xl-8">

  <!-- Post title -->
  <h3 class="font-weight-bold mb-3"><strong> <?php echo $lista['titulo']; ?></strong></h3>
  <!-- Excerpt -->
  <p class="dark-grey-text"><?php echo $lista['subtitulo']; ?></p>
  <!-- Post data -->
  <p>by <a class="font-weight-bold"><?php echo $lista['nombre']; ?></a>,  <?php echo $lista['created_at']; ?></p>
  <!-- Read more button -->
  <a href="../Formularios/vpost?var=<?php echo $lista['id_post']; ?>" class="btn btn-success btn-md">Ver más</a>

</div>
<!-- Grid column -->

</div>
<!-- Grid row -->
<?php
}
?>

