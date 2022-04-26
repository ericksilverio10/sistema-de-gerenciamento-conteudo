<?php

//AUTOLOAD DO COMPOSER
require'vendor/autoload.php';

use Dompdf\Dompdf; 
use Dompdf\Options; 

//INSTÂNCIA DO DOMPDF
$options = new Options();
$options -> setChroot(__DIR__);

//INSTÂNCIA DO DOMPDF
$dompdf = new Dompdf($options);

//Armazenamento das saídas do arquivo em buffer
ob_start();
require 'relatorio_geral_pdf.php';

//Envio do valor do buffer para a a classe
$dompdf->loadHtml(ob_get_clean());

//Renderização do arquivo PDF
$dompdf->render();

$dompdf->stream('Relatório Geral - Handspike Media');

//Imprime o conteudo do pdf na tela
header('Content-type: application/pdf');
echo $dompdf->output();