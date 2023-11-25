<?php
require 'assets/fpdf185/fpdf.php'; 

//A4 width = 219mm
//default margin = 10mm each side
//writeable horizonal = 219-(10*2) = 189mm

$pdf = new FPDF('p' , 'mm' , 'A4');//create fpdf using perameters

$pdf->AddPage();//adding pages, also define each page size , length , width but your requirement

//set font arial , bold , 14pt
$pdf->SetFont('Arial' , 'B' , 24);

//cell(width , height , text , border , endline , [align])
//border = 0 means no border , border = 1 means bordered
//endline = 0 means continue , endline = 1 means new line
//default align : L or empty string and align is optional , C: center , R : Right 
$pdf->Cell(189, 15, 'KHODIYAR TIFFIN', 0, 1,'C');
$pdf->SetFont('Arial', '', '14');
$pdf->Cell(189, 10, 'Address: New Yogi nagar-1, Behind FSL Lab., University Road, Rajkot-360005.', 0, 1, 'C');
// $pdf->Cell(165, 15, 'New Yogi nagar-1, Behind FSL Lab., University Road, Rajkot-360005.', 0, 1);

$pdf->Cell(120, 10, '', 0, 0);
$pdf->Cell(30, 10, 'Invoice Date: 30/06/2023', 0, 1);
$pdf->Cell(30, 8, 'Name: ', 0, 0);
$pdf->Cell(30, 8, '', 0, 1);

$pdf->Cell(30, 8, 'Address ', 0, 0);
$pdf->Cell(30, 8,'' , 0, 1);


$pdf->Cell(189, 5, '', 0, 1);
$pdf->Cell(20, 10 ,'SR NO.' , 1, 0,'C');
$pdf->Cell(80, 10 ,'Description' , 1, 0,'C');
$pdf->Cell(20, 10 ,'Qty.' , 1, 0,'C');
$pdf->Cell(30, 10 ,'Rate' , 1, 0,'C');
$pdf->Cell(30, 10 ,'Total', 1, 1,'C');

$pdf->Cell(20, 10 ,'' , 1, 0);
$pdf->Cell(80, 10 ,'', 1, 0);
$pdf->Cell(20, 10 ,'', 1, 0);
$pdf->Cell(30, 10 ,'' , 1, 0);
$pdf->Cell(30, 10 ,'', 1, 1);

$pdf->Cell(20, 10 ,'' , 1, 0);
$pdf->Cell(80, 10 ,'', 1, 0);
$pdf->Cell(20, 10 ,'', 1, 0);
$pdf->Cell(30, 10 ,'' , 1, 0);
$pdf->Cell(30, 10 ,'', 1, 1);$pdf->Cell(20, 10 ,'' , 1, 0);
$pdf->Cell(80, 10 ,'', 1, 0);
$pdf->Cell(20, 10 ,'', 1, 0);
$pdf->Cell(30, 10 ,'' , 1, 0);
$pdf->Cell(30, 10 ,'', 1, 1);$pdf->Cell(20, 10 ,'' , 1, 0);
$pdf->Cell(80, 10 ,'', 1, 0);
$pdf->Cell(20, 10 ,'', 1, 0);
$pdf->Cell(30, 10 ,'' , 1, 0);
$pdf->Cell(30, 10 ,'', 1, 1);$pdf->Cell(20, 10 ,'' , 1, 0);
$pdf->Cell(80, 10 ,'', 1, 0);
$pdf->Cell(20, 10 ,'', 1, 0);
$pdf->Cell(30, 10 ,'' , 1, 0);
$pdf->Cell(30, 10 ,'', 1, 1);$pdf->Cell(20, 10 ,'' , 1, 0);
$pdf->Cell(80, 10 ,'', 1, 0);
$pdf->Cell(20, 10 ,'', 1, 0);
$pdf->Cell(30, 10 ,'' , 1, 0);
$pdf->Cell(30, 10 ,'', 1, 1);$pdf->Cell(20, 10 ,'' , 1, 0);
$pdf->Cell(80, 10 ,'', 1, 0);
$pdf->Cell(20, 10 ,'', 1, 0);
$pdf->Cell(30, 10 ,'' , 1, 0);
$pdf->Cell(30, 10 ,'', 1, 1);$pdf->Cell(20, 10 ,'' , 1, 0);
$pdf->Cell(80, 10 ,'', 1, 0);
$pdf->Cell(20, 10 ,'', 1, 0);
$pdf->Cell(30, 10 ,'' , 1, 0);
$pdf->Cell(30, 10 ,'', 1, 1);$pdf->Cell(20, 10 ,'' , 1, 0);
$pdf->Cell(80, 10 ,'', 1, 0);
$pdf->Cell(20, 10 ,'', 1, 0);
$pdf->Cell(30, 10 ,'' , 1, 0);
$pdf->Cell(30, 10 ,'', 1, 1);$pdf->Cell(20, 10 ,'' , 1, 0);
$pdf->Cell(80, 10 ,'', 1, 0);
$pdf->Cell(20, 10 ,'', 1, 0);
$pdf->Cell(30, 10 ,'' , 1, 0);
$pdf->Cell(30, 10 ,'', 1, 1);

$pdf->Cell(150, 8 ,'Total', 1 , 0,'C');
$pdf->Cell(30, 8, '', 1, 1);

$pdf->Cell(150, 5 ,'', 0 , 1);
$pdf->Cell(20, 8 ,'in word', 1 , 0);
$pdf->Cell(160, 8 ,'', 1 , 1);

$pdf->Cell(150, 5 ,'', 0 , 1);

$pdf->SetFont('Arial', 'B', '12');
$pdf->Cell(50, 8 ,'Account Details:', 0, 1);
$pdf->SetFont('Arial', '', '12');


$pdf->Cell(50, 8 ,'Bank Name:',1 , 0);
$pdf->Cell(60, 8 ,'', 1, 1);

$pdf->Cell(50, 8 ,'Account Holder Name:',1 , 0);
$pdf->Cell(60, 8 ,'', 1, 1);

$pdf->Cell(50, 8 ,'Account Number:',1 , 0);
$pdf->Cell(60, 8 ,'', 1, 1);

$pdf->Cell(50, 8 ,'IFSC Code:',1 , 0);
$pdf->Cell(60, 8 ,'', 1, 1);

$pdf->Cell(50, 8 ,'Branch:',1 , 0);
$pdf->Cell(60, 8 ,'', 1, 1);

$pdf->Cell(50, 8 ,'', 0 , 1);


$pdf->SetFont('Arial', 'B', '14');
$pdf->Cell(50, 8 ,'', 0 , 0);
$pdf->Cell(50, 8 ,'', 0 , 1);
$pdf->Cell(50, 8 ,'Customer Signature', 0 , 0);
$pdf->Cell(80, 8 ,'', 0 , 0);
$pdf->Cell(50, 8 ,'Authorised Signature', 0, 1);



$pdf->Output();
?>