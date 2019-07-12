<?php
     //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	$mysqli = new mysqli("localhost","root","","bdunad_301127_41"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>

<?php
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'Informacion alojada en base de datos',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>

	
<?php
	
	
	
	$query = "SELECT * FROM Producto ";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(30,6,'Codigo',1,0,'C',1);
	$pdf->Cell(30,6,'Nombre',1,0,'C',1);
	$pdf->Cell(30,6,'Peso',1,0,'C',1);
	$pdf->Cell(30,6,'Marca',1,0,'C',1);
	$pdf->Cell(30,6,'Fabricante',1,0,'C',1);
	$pdf->Cell(40,6,'Caracteristicas',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(30,6,utf8_decode($row['Codigo']),1,0,'C');
		$pdf->Cell(30,6,$row['Nombre'],1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['Psso']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['Marca']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['Fabricante']),1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['Caracteristicas']),1,1,'C');
		
	}
	$pdf->Output();
?>