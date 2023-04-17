<?php

require_once 'C:\wamp\www\projetox\PHPExcel-1.8\Classes\PHPExcel.php';

// instanciar 
$objPHPExcel = new PHPExcel();


// Proteger o arquivo com senha
$objPHPExcel->getSecurity()->setLockWindows(true);
$objPHPExcel->getSecurity()->setLockStructure(true);
$objPHPExcel->getSecurity()->setWorkbookPassword('123');

// salvar o arquivo
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('arquivo_protegido.xlsx');

echo "Agr vamos rezar";
?>
