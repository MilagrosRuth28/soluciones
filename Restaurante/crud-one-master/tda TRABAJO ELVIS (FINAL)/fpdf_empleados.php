<?php 

	require 'fpdf/fpdf.php';

	class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	// Logo
	$this->Image('../img/joy.png',5,5,27);
	// Arial bold 15
	$this->SetFont('Arial','B',15);
	// Movernos a la derecha
	$this->Cell(60);
	// Título
	$this->Cell(220,10,'restauranteDL',5,5,'C');
	$this->Cell(70,50,'Registro de usuarios',1,2,'C');	
	// Salto de línea
	$this->Ln(20);
	$this->Cell(25, 10, 'nombre',1,0,'C',0);
	$this->Cell(25, 10, 'apellido',1,0,'C',0);
	$this->Cell(30, 10, 'direccion',1,0,'C',0);
	$this->Cell(30, 10, 'telefono',1,0,'C',0);
	$this->Cell(45, 10, 'correo',1,0,'C',0);
	$this->Cell(40, 10, 'fecha',1,1,'C',0);

}


// Pie de página
function Footer()
{
	// Posición: a 1,5 cm del final
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Número de página
	$this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
}
}

	require 'crud-one-master/php/conexion.php';
	$sql = "select * from person";
	$resultado = $con->query($sql);

	$pdf = new PDF();
	$pdf->AddPage();
	$pdf->SetFont('arial','',12);

while($row = $resultado->fetch_assoc()){
	$pdf->Cell(25, 10, $row['name'],1,0,'C',0);
	$pdf->Cell(25, 10, $row['lastname'],1,0,'C',0);
	$pdf->Cell(30, 10, $row['address'],1,0,'C',0);
	$pdf->Cell(30, 10, $row['phone'],1,0,'C',0);
	$pdf->Cell(45, 10, $row['email'],1,0,'C',0);
	$pdf->Cell(40, 10, $row['created_at'],1,1,'C',0);


}	
	


	$pdf->Output();
 ?>