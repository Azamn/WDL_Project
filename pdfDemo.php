<?php 

require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',18);
$pdf->Cell(40,10,'This is PDF Demo by HelpFolder');
$pdf->output();


?>