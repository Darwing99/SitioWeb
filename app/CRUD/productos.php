<?php
$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
	/* Connect To Database*/
    include_once '../BD/conexion.php';
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();
	if (isset($_REQUEST['id'])){
		$id=intval($_REQUEST['id']);
		$delete=mysqli_query($conn,"DELETE FROM rdetallefactura where correlativo='$id'");
	}
	
	if (isset($_POST['descripcion'])){
		
		$descripcion=mysqli_real_escape_string($conn,(strip_tags($_POST["descripcion"],ENT_QUOTES)));
		$cantidad=intval($_POST['cantidad']);
		$precio=floatval($_POST['precio']);
		$color=mysqli_real_escape_string($conn,(strip_tags($_POST["color"],ENT_QUOTES)));
		$talla=mysqli_real_escape_string($conn,(strip_tags($_POST["talla"],ENT_QUOTES)));
		$sql="INSERT INTO `rdetallefactura` (`correlativo`, `nofactura`, `codproducto`, `cantidad`, `descuento_producto`, 
                                             `impuesto`, `subtotal`, `preciototal`) 
		VALUES (NULL, '$descripcion', '$cantidad', '$precio','$color','$talla');";
		
		$insert=mysqli_query($conn,$sql);
    }
    
	$query_perfil=mysqli_query($conn,"SELECT*FROM rimpuestos where codigo='1'");
	$rw=mysqli_fetch_assoc($query_perfil);
	$impuestos=$rw['porcentaje'];
	
	$query=mysqli_query($conn,"SELECT*FROM rdetallefactura ORDER by correlativo");
	$items=1;
	$suma=0;
	while($row=mysqli_fetch_array($query)){
			$total=$row['cantidad']*$row['precio'];
			$total=number_format($total,2,'.','');
		?>
	<tr>
	

		<td class='text-center'><?php echo $row['codproducto'];?></td>
        <td><?php echo $row['descripcion'];?></td>
		<td class='text-center'><?php echo $row['cantidad'];?></td>
		<td class='text-center'><?php echo $row['descuento_producto'];?></td>
        <td class='text-center'><?php echo $row['impuesto'];?></td>
        <td class='text-center'><?php echo $row['subtotal'];?></td>
        <td class='text-center'><?php echo $row['preciototal'];?></td>
		<td class='text-right'><?php echo $total;?></td>
		<td class='text-right'><a href="#" onclick="eliminar_item('<?php echo $row['id']; ?>')" >
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAeFBMVEUAAADnTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDx+VWpeAAAAJ3RSTlMAAQIFCAkPERQYGi40TVRVVlhZaHR8g4WPl5qdtb7Hys7R19rr7e97kMnEAAAAaklEQVQYV7XOSQKCMBQE0UpQwfkrSJwCKmDf/4YuVOIF7F29VQOA897xs50k1aknmnmfPRfvWptdBjOz29Vs46B6aFx/cEBIEAEIamhWc3EcIRKXhQj/hX47nGvt7x8o07ETANP2210OvABwcxH233o1TgAAAABJRU5ErkJggg=="></a></td>
	</tr>	
		<?php
		$items++;
		$suma+=$total;
	}
	$neto=$suma;
	$total_impuestos=($neto*$impuestos) / 100;
	$total=$neto+$total_impuestos;
	?>
	<tr>
		<td colspan='7'>
		
			<button id="mostrar" type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Agregar producto</button>
		</td>
	</tr>
	<tr>
		<td colspan='5' class='text-right'>
			<h4>Sub Total :</h4>
		</td>
		<th class='text-right'>
			<h4><?php echo number_format($neto,2);?></h4>
		</th>
		<td></td>
	</tr>
	<tr>
		<td colspan='5' class='text-right'>
			<h4>Impuestos <small><?=$impuestos?>%</small> :</h4>
		</td>
		<th class='text-right'>
			<h4><?php echo number_format($total_impuestos,2);?></h4>
		</th>
		<td></td>
	</tr>
	<tr>
		<td colspan='5' class='text-right'>
			<h4>Total :</h4>
		</td>
		<th class='text-right'>
			<h4><?php echo number_format($total,2);?></h4>
		</th>
		<td></td>
	</tr>
<?php

}