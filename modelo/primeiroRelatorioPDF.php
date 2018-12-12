<?php

include_once '../util/fpdf.php';
$pdf = new FPDF();

$pdf ->AddPage();
$pdf ->SetFont('Arial', 'B', 16);
$pdf ->Cell(60, 10, 'Olá Mundo');
$pdf ->Output();
