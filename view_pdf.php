<?php
require 'assets/fpdf185/fpdf.php';
include 'view_pdf_DB.php'; 

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
$pdf->SetTextColor(72,166,155,255);
$pdf->Cell(20.5, 15, 'Knot', 0, 0);
$pdf->SetTextColor(254,97,69);
$pdf->Cell(98.5, 15, '.', 0, 0);

$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial', '', '14');
$pdf->Cell(35 , 15, 'Transction ID:'  , 0, 0);
$pdf->Cell(35 , 15, $row['transaction_id']  , 0, 1);


$pdf->SetFont('Arial', 'B', '20');
$pdf->Cell(189, 15, 'TAX INVOICE', 0, 1, 'C');

$pdf->SetFont('Arial', '', '14');
$pdf->Cell(30, 10, 'Event ID: ', 0, 0);
$pdf->Cell(30, 10, $row['event_id'], 0, 1);

$pdf->Cell(30, 10, 'Event: ', 0, 0);
$pdf->Cell(30, 10,$row['event'] , 0, 1);

$pdf->Cell(30, 10, 'Date: ', 0, 0);
$pdf->Cell(30, 10, $row['date'] , 0, 1);


$pdf->Cell(189, 5, '', 0, 1);
$pdf->Cell(30, 10 ,'Product ID' , 1, 0);
$pdf->Cell(80, 10 ,'Description' , 1, 0);
$pdf->Cell(20, 10 ,'Quantity' , 1, 0);
$pdf->Cell(30, 10 ,'Unit Price' , 1, 0);
$pdf->Cell(30, 10 ,'Amount', 1, 1);

$pdf->Cell(30, 10 ,$rowd['product_id'] , 1, 0);
$pdf->Cell(80, 10 ,$_SESSION['decoration'] , 1, 0);
$pdf->Cell(20, 10 ,'1' , 1, 0);
$pdf->Cell(30, 10 ,$rowd['_packages_price'] , 1, 0);
$pdf->Cell(30, 10 ,$rowd['_packages_price'], 1, 1);

$pdf->Cell(30, 10 ,$rowf['product_id']  , 1, 0);
$pdf->Cell(80, 10 ,$_SESSION['food'] , 1, 0);
$pdf->Cell(20, 10 ,$_SESSION['guest'] , 1, 0);
$pdf->Cell(30, 10 ,$rowf['_packages_price']  , 1, 0);
$pdf->Cell(30, 10 ,$row['food'], 1, 1);

$pdf->Cell(30, 10 ,$rowp['product_id']  , 1, 0);
$pdf->Cell(80, 10 ,$_SESSION['photography'] , 1, 0);
$pdf->Cell(20, 10 ,'1' , 1, 0);
$pdf->Cell(30, 10 ,$rowp['_packages_price']  , 1, 0);
$pdf->Cell(30, 10 ,$rowp['_packages_price'] , 1, 1);

$pdf->Cell(30, 10 ,$rowe['product_id']  , 1, 0);
$pdf->Cell(80, 10 ,$_SESSION['entertainment'] , 1, 0);
$pdf->Cell(20, 10 ,'1' , 1, 0);
$pdf->Cell(30, 10 ,$rowe['_packages_price']  , 1, 0);
$pdf->Cell(30, 10 ,$rowe['_packages_price'], 1, 1);

$pdf->Cell(30, 10 ,'' , 1, 0);
$pdf->Cell(80, 10 ,'' , 1, 0);
$pdf->Cell(20, 10 ,'' , 1, 0);
$pdf->Cell(30, 10 ,'' , 1, 0);
$pdf->Cell(30, 10 ,'', 1, 1);

$pdf->Cell(130, 0 ,'', 0 , 0);
$pdf->Cell(30, 8 , 'Sub Total', 1, 0);
$pdf->Cell(30, 8, $row['sub_total'], 1, 1);

$pdf->Cell(130, 0 ,'', 0 , 0);
$pdf->Cell(30, 8 , 'GST(%)', 1, 0);
$pdf->Cell(30, 8, '18%', 1, 1);

$pdf->Cell(130, 0 ,'', 0 , 0);
$pdf->Cell(30, 8 , 'GST(Rs.)', 1, 0);
$pdf->Cell(30, 8, $_SESSION['gst'] , 1, 1);

$pdf->Cell(130, 0 ,'', 0 , 0);
$pdf->Cell(30, 8 , 'Total', 1, 0);
$pdf->Cell(30, 8, $_SESSION['g_total'] , 1, 1);
$pdf->Output();
?>