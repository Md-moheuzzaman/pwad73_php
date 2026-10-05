<?php 
$book = "../Beginning PHP and MySQL_ From Novice to Professional ( PDFDrive ).pdf";
$byte = filesize($book);

$kb = round($byte/1024, 2);
echo $kb;

?>