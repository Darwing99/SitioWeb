<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo

    //$this->Image('logo_pb.png',10,8,33);

    // Arial bold 15
    $this->Image('../../Media/img/Logo.png',10,6,20,20);
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(60);
    $this-> Cell(70,10,utf8_decode('La Ruta Del Café'),0,0,'C');
    $this->Ln(5);
    $this->SetFont('Arial','',11);
    $this->Cell(60);
    $this->Cell(70,10,utf8_decode('Santa Bárbara, Santa Bárbara'),0,0,'C');
    $this->Ln(5);
    $this->SetFont('Arial','',11);
    $this->Cell(60);
    $this->Cell(70,10,utf8_decode('Media Cuadra abajo del Parque Central'),0,0,'C');
    $this->Ln(5);
    $this->SetFont('Arial','',11);
    $this->Cell(60);
    $this->Cell(70,10,utf8_decode('Teléfono: +504 3308-7022'),0,0,'C');
    $this->Ln(20);
    $this->SetFont('Arial','',12);
    $this->Cell(60);
    $this->Cell(70,10,utf8_decode('Reporte de Ventas'),0,0,'C');
    $this->Ln(20);

    $this->Cell(30, 10, 'Codigo', 1, 0, 'C', 0);
    $this->Cell(30, 10, 'descripcion', 1, 0, 'C', 0);
    $this->Cell(30, 10, 'cantidad', 1, 0, 'C', 0);
    $this->Cell(30, 10, 'precio_unitario', 1, 0, 'C', 0);
    $this->Cell(30, 10, 'total', 1, 0, 'C', 0);
    $this->Cell(30, 10, 'fecha', 1, 1, 'C', 0);

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require '../BD/conexion.php';
$consulta = "SELECT*from rventas AS A INNER JOIN rfactura AS B INNER JOIN 
                rproductos AS C ON A._idfactura=B.id_factura and C.codigo=A._idproducto";
$resultado=mysqli_query($conn,$consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while($row=mysqli_fetch_assoc($resultado)){
    $pdf->Cell(30, 10, $row['id_venta'],1,0, 'C', 0);
    $pdf->Cell(30, 10, $row['descripcion'], 1,0, 'C', 0);
    $pdf->Cell(30, 10, $row['cantidad'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['precio_unitario'], 1,0, 'C', 0);
    $pdf->Cell(30, 10, $row['total'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['fecha'], 1, 1, 'C', 0);
}
$pdf->Output();
?>