<?php 	

require('C:\AppServ\www\web\fpdf\fpdf.php');
date_default_timezone_set("America/Bogota");


$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad18";


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Ln(20);
$pdf->Cell(90,20,'Fecha: '.date('d.m.Y').'',0);
$pdf->cell(90,20, 'hora:' .date('H.i.s').'',0);
$pdf->Ln(10);
$pdf->Cell(100,20,utf8_decode('REPORTES PDF'));
$pdf->Ln(10);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,20,'Codigo');
$pdf->Cell(40,20,'Nombre del producto');
$pdf->Cell(15,20,'Peso');
$pdf->Cell(25,20,'Marca');
$pdf->Cell(25,20,'Fabricante');
$pdf->Cell(40,20,utf8_decode('Características del producto'));

$pdf->Ln(10);


$pdf->SetFont('Arial','',8);


$conec = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (!$conec) {
    die("Connection failed: " . mysqli_connect_error());
}

$query_select = 'SELECT * FROM tabla18';
$result = mysqli_query($conec,$query_select );

if (mysqli_num_rows($result) > 0) {
	// output data of each row
    while($reg = mysqli_fetch_assoc($result)) {
    	


$pdf->Cell(20,20, utf8_decode($reg['codigo']), 0);

$pdf->Cell(40,20, utf8_decode($reg['nombre']), 0);

$pdf->Cell(15,20, utf8_decode($reg['peso']), 0);

$pdf->Cell(25,20, utf8_decode($reg['marca']), 0);

$pdf->Cell(25,20, utf8_decode($reg['fabricante']), 0);

$pdf->Cell(40,20, utf8_decode($reg['caracteristicas']), 0);

$pdf->Ln(10);

}
}

$pdf->Output();

echo "<script>
                alert('Reporte generado satisfactoriamente');
                window.location= 'reportes.php'
    		</script>";



?>

