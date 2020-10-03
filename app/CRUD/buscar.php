<?php
	include('../BD/conexion.php');

    $salida = "";

    $query = "SELECT * FROM rproductos WHERE descripcion NOT LIKE '' ORDER By codigo LIMIT 25";

    if (isset($_POST['consulta'])) {
    	$busqueda = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM rproductos WHERE codigo LIKE '%$busqueda%' OR descripcion LIKE '%$busqueda%'";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
    					<td>Codigo</td>
    					<td>Descripcion</td>
    					<td>Cantidad</td>
    					<td>Estado</td>
    					
    				</tr>
    			</thead>
    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['codigo']."</td>
    					<td>".$fila['descripcion']."</td>
    					<td>".$fila['cantidad']."</td>
    					<td>".$fila['estado']."</td>
    				
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $conn->close();



?>