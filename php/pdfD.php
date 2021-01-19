<?php
include 'connect.php';
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
    function hader()
    {
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(276, 5, 'Lab use Records', 0, 0, 'C');
        $this->Ln();
        $this->SetFont('Times', '', 12);
        $this->Cell(276, 10, 'Login data', 0, 0, 'C');
        $this->Ln(20);
    }
    function footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', '', 8);
        //$this->Cell(0, 10, 'Page'.this->PageNo().'/{nb}',0,0, 'C');
    }
    function headerTable()
    {
        $this->SetFont('Times', 'B', 12);
        $this->Cell(30, 10, 'Id', 1, 0, 'C');
        $this->Cell(70, 10, 'Username', 1, 0, 'C');
        $this->Cell(70, 10, 'Status', 1, 0, 'C');
        $this->Cell(70, 10, 'Login Time', 1, 0, 'C');
        $this->Cell(30, 10, 'Lab', 1, 0, 'C');
        $this->Ln();
    }
    function dataFromDb($conn)
    {
        $this->SetFont('Times', '', 12);
        $sql = "SELECT*From lab WHERE lab_name = 'D' ";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            $this->SetFont('Times', 'B', 12);
            $this->Cell(30, 10, $row['lab_id'], 1, 0, 'L');
            $this->Cell(70, 10, $row['username'], 1, 0, 'L');
            $this->Cell(70, 10, $row['status'], 1, 0, 'C');
            $this->Cell(70, 10, $row['login_time'], 1, 0, 'L');
            $this->Cell(30, 10, $row['lab_name'], 1, 0, 'L');
            $this->Ln();
        }
    }
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L', 'A4', 0);
$pdf->hader();
$pdf->headerTable();
$pdf->dataFromDb($conn);
$pdf->Output();
