<?php
require('../fpdf/fpdf.php');
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->SetLeftMargin(20);
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'LAPORAN SEMUA DATA mata_kuliah', 0, 10, 'C');
$pdf->Cell(10, 7, '', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(40, 6, 'no', 1, 0, 'c');
$pdf->Cell(40, 6, 'kode', 1, 0, 'c');
$pdf->Cell(80, 6, 'nama', 1, 0, 'c');
$pdf->Cell(50, 6, 'sks', 1, 0, 'c');
$pdf->Cell(50, 6, 'semester', 1, 1, 'c');
$pdf->SetFont('Arial', '', 10);
include '../connection.php';
$no = 1;
$result = mysqli_query($con, "SELECT * FROM mata_kuliah");
while ($data = mysqli_fetch_array($result)) {
    $pdf->Cell(40, 6, $no++, 1, 0);
    $pdf->Cell(40, 6, $data['kode'], 1, 0, 'c');
    $pdf->Cell(80, 6, $data['nama'], 1, 0, 'c');
    $pdf->Cell(50, 6, $data['sks'], 1, 0, 'c');
    $pdf->Cell(50, 6, $data['semester'], 1, 1, 'c');
}
$pdf->Output();
