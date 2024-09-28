<?php

namespace Borj\Auf\Outputs;

use Fpdf\Fpdf;

class PDFFormat implements FounderFormatter
{
    private $pdf;

    public function setData($founder)
    {
        $this->pdf = new Fpdf();
        $this->pdf->AddPage();


        $this->pdf->SetFont('Arial', 'B', 24);
        $this->pdf->Cell(0, 10, 'The Founder', 0, 1, 'C');  
        $this->pdf->Ln(10);  


        $imagePath = 'assets/img-founder.jpg';  
        $this->pdf->Image($imagePath, ($this->pdf->GetPageWidth() - 70) / 2, $this->pdf->GetY(), 70);  
        $this->pdf->Ln(80); 


        $this->pdf->Ln(15);  

    
        $this->pdf->SetFont('Arial', 'B', 16);
        $this->pdf->Cell(0, 10, $founder->getName(), 0, 1, 'C');  
        $this->pdf->Ln(10);  


        $this->pdf->SetFont('Arial', '', 12);
        foreach ($founder->getBiography() as $paragraph) {
            $this->pdf->MultiCell(0, 10, $paragraph['paragraph']);
            $this->pdf->Ln(5); 
        }
    }

    public function render()
    {
        return $this->pdf->Output();
    }
}
