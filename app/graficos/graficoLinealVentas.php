
<?php
include('../BD/conexion.php');
$sql="SELECT fecha,sum(total) FROM rfactura where fecha group by fecha";
$resultado=mysqli_query($conn,$sql);

$valoresY=array(); //Totales de compras
$valoresX=array();//fechas

while($ver=mysqli_fetch_row($resultado)){
    $valoresY[]=$ver[1]; //Totales de compras
    $valoresX[]=date($ver[0]);//fechas
}
$datosX=json_encode($valoresX);
$datosY=json_encode($valoresY);

?>

<div id="graficaLinealVenta"></div>
<script type="text/javascript">
function crearlinea(json){
    var parsed=JSON.parse(json);
    var arr=[];
    for(var x in parsed){
        arr.push(parsed[x]);
    }
    return arr;
}
</script>

<script  type="text/javascript">
        datosx=crearlinea('<?php echo $datosX ?>');
        datosy=crearlinea('<?php echo $datosY ?>');
        var trace1={
            x: datosx,
            y: datosy,
            type: 'scatter'
            
        };
        var data=[trace1];
        Plotly.newPlot('graficaLinealVenta',data);
</script>