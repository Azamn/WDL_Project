
<?php 

require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

	$html2pdf = new Html2Pdf('P','A4','fr','UTF8');
	$html2pdf->writeHTML('<h1>This is my First Pdf</h1>');
	$html2pdf->output();
?>