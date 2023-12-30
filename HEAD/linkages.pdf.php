<?php
require('fpdf/fpdf/fpdf.php');

class PDF extends FPDF
{
	protected $widths;
    protected $aligns;

    function SetWidths($w)
    {
        // Set the array of column widths
        $this->widths = $w;
    }

    function SetAligns($a)
    {
        // Set the array of column alignments
        $this->aligns = $a;
    }

    function Row($data)
    {
        // Calculate the height of the row
        $nb = 0;
        for($i=0;$i<count($data);$i++)
            $nb = max($nb,$this->NbLines($this->widths[$i],$data[$i]));
        $h = 5*$nb;
        // Issue a page break first if needed
        $this->CheckPageBreak($h);
        // Draw the cells of the row
        for($i=0;$i<count($data);$i++)
        {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            // Save the current position
            $x = $this->GetX();
            $y = $this->GetY();
            // Draw the border
            $this->Rect($x,$y,$w,$h);
            // Print the text
            $this->MultiCell($w,5,$data[$i],0,$a);
            // Put the position to the right of the cell
            $this->SetXY($x+$w,$y);
        }
        // Go to the next line
        $this->Ln($h);
    }

    function CheckPageBreak($h)
    {
        // If the height h would cause an overflow, add a new page immediately
        if($this->GetY()+$h>$this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    function NbLines($w, $txt)
    {
        // Compute the number of lines a MultiCell of width w will take
        if(!isset($this->CurrentFont))
            $this->Error('No font has been set');
        $cw = $this->CurrentFont['cw'];
        if($w==0)
            $w = $this->w-$this->rMargin-$this->x;
        $wmax = ($w-2*$this->cMargin)*1000/$this->FontSize;
        $s = str_replace("\r",'',(string)$txt);
        $nb = strlen($s);
        if($nb>0 && $s[$nb-1]=="\n")
            $nb--;
        $sep = -1;
        $i = 0;
        $j = 0;
        $l = 0;
        $nl = 1;
        while($i<$nb)
        {
            $c = $s[$i];
            if($c=="\n")
            {
                $i++;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
                continue;
            }
            if($c==' ')
                $sep = $i;
            $l += $cw[$c];
            if($l>$wmax)
            {
                if($sep==-1)
                {
                    if($i==$j)
                        $i++;
                }
                else
                    $i = $sep+1;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
            }
            else
                $i++;
        }
        return $nl;
    }

	// Page header
	function Header()
	{

	}

	// Page footer
	function Footer()
	{

	}
}

// Instanciation of inherited class
$pdf = new PDF('P', 'mm', 'Letter');
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont("Times", "", 10);
$pdf->Cell(19.5, 18, "", 1, 0);
$pdf->Image('../imgs/bsu.png', 11, 11, -475);
$pdf->Cell(69, 18, "   Reference No.: BatStateU-FO-EAO-02", 1, 0);
$pdf->Cell(65, 18, "   Effectivity Date: May 18, 2022", 1, 0);
$pdf->Cell(42.5, 18, "   Revision No.: 01", 1, 0);

$pdf->Ln();
$pdf->SetFont("Times", "B", 12);
$pdf->Cell(0, 7, "PARTNERSHIP AND/OR LINKAGE PROPOSAL", 1, 0, 'C');

$pdf->Ln();
$pdf->SetFont("Times", "B", 11);
$pdf->Cell(0, 7, "     I.  Partnership and/or Linkage Title:", 'TLR', 0, 'L');

$pdf->Ln();
$pdf->Cell(0, 3.5, "", 'LR', 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "B", 12);
$pdf->Cell(0, 7, strtoupper("title"), 'BLR', 0, 'C');

$pdf->Ln();
$pdf->SetFont("Times", "B", 11);
$pdf->Cell(77, 7, "     II.  Partnership and/or Linkage Category:", 1, 0, 'L');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Cell(59.5, 7, "                      Institutional", 1, 0, 'L');
$pdf->Rect($x+17, $y+1.5, 4, 4, 'D');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Cell(59.5, 7, "                      International", 1, 0, 'L');
$pdf->Rect($x+17, $y+1.5, 4, 4, 'D');

$pdf->Ln();
$pdf->SetFont("Times", "B", 11);
$pdf->Cell(0, 7, "     III.  Overview/Objectives of the Partnership and/or Linkage:", 'TLR', 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "", 12);
$text = "Text";
$pdf->Cell(5, 6*($pdf->NbLines(186, $text)), "", 'LB', 0, 'L');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(186, 6, $text, 'B', 'J');
$pdf->SetXY($x+186, $y);
$pdf->Cell(5, 6*($pdf->NbLines(186, $text)), "", 'RB', 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "B", 11);
$pdf->Cell(0, 7, "     IV.   Strategic Fit:", 'TLR', 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "", 12);
$text = "Text";
$pdf->Cell(5, 6*($pdf->NbLines(186, $text)), "", 'LB', 0, 'L');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(186, 6, $text, 'B', 'J');
$pdf->SetXY($x+186, $y);
$pdf->Cell(5, 6*($pdf->NbLines(186, $text)), "", 'RB', 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "B", 11);
$pdf->Cell(0, 7, "     V.   Intended Outcome:", 'TLR', 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "", 12);
$text = "Text";
$pdf->Cell(5, 6*($pdf->NbLines(186, $text)), "", 'LB', 0, 'L');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(186, 6, $text, 'B', 'J');
$pdf->SetXY($x+186, $y);
$pdf->Cell(5, 6*($pdf->NbLines(186, $text)), "", 'RB', 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "B", 11);
$pdf->Cell(0, 7, "     VI.   Scope of the Partnership and/or Linkage:", 'TLR', 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "", 12);
$text = "Text";
$pdf->Cell(5, 6*($pdf->NbLines(186, $text)), "", 'LB', 0, 'L');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(186, 6, $text, 'B', 'J');
$pdf->SetXY($x+186, $y);
$pdf->Cell(5, 6*($pdf->NbLines(186, $text)), "", 'RB', 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "B", 11);
$pdf->Cell(0, 7, "     VII.   Officials/ Department/ Personnel/Stakeholders Involved:", 'TLR', 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "", 12);
$text = "A.	VCDEA and Office - ARASOF Nasugbu
B.	External Affairs Office 
C.	VCRDES ARASOF-Nasugbu and Office
D.	VCAA ARASOF-Nasugbu
E.	VCAF ARASOF Nasugbu
F.	Research Office ARASOF-Nasugbu
G.	Colleges and Offices
";
$pdf->Cell(10, 6*($pdf->NbLines(176, $text)), "", 'LB', 0, 'L');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(176, 6, $text, 'B', 'J');
$pdf->SetXY($x+176, $y);
$pdf->Cell(10, 6*($pdf->NbLines(176, $text)), "", 'RB', 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "B", 11);
$pdf->Cell(0, 7, "     VIII.   Arrangement and Correlative Duties:", 'TLR', 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "", 12);
$text = "Text";
$pdf->Cell(5, 6*($pdf->NbLines(186, $text)), "", 'LB', 0, 'L');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(186, 6, $text, 'B', 'J');
$pdf->SetXY($x+186, $y);
$pdf->Cell(5, 6*($pdf->NbLines(186, $text)), "", 'RB', 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "B", 11);
$pdf->Cell(0, 6, "     IX.   Resources Needed:", 1, 0, 'L');

$pdf->Ln();
$pdf->Cell(90, 10, "Activities", 1, 0, 'C');
$pdf->Cell(28, 10, "Capital Outlay", 1, 0, 'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(28, 5, "Personal Services", 1, 'C');
$pdf->SetXY($x+28, $y);
$pdf->Cell(25, 10, "MOOE", 1, 0, 'C');
$pdf->Cell(25, 10, "Total", 1, 0, 'C');

$pdf->Ln();
$pdf->SetFont("Times", "", 12);
$pdf->Cell(90, 6, "  Collaborative Research and Extension Projects", 1, 0, 'L');
$pdf->Cell(28, 6, "-", 1, 0, 'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(28, 6, "-", 1, 'C');
$pdf->SetXY($x+28, $y);
$pdf->Cell(25, 6, "-", 1, 0, 'C');
$pdf->Cell(25, 6, "-", 1, 0, 'C');

$pdf->Ln();
$pdf->SetFont("Times", "", 12);
$pdf->Cell(90, 6, "  Provisions of resource speaker for training", 1, 0, 'L');
$pdf->Cell(28, 6, "-", 1, 0, 'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(28, 6, "-", 1, 'C');
$pdf->SetXY($x+28, $y);
$pdf->Cell(25, 6, "-", 1, 0, 'C');
$pdf->Cell(25, 6, "-", 1, 0, 'C');

$pdf->Ln();
$pdf->SetFont("Times", "", 12);
$pdf->Cell(90, 6, "", 1, 0, 'L');
$pdf->Cell(28, 6, "", 1, 0, 'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(28, 6, "", 1, 'C');
$pdf->SetXY($x+28, $y);
$pdf->Cell(25, 6, "", 1, 0, 'C');
$pdf->Cell(25, 6, "", 1, 0, 'C');

$pdf->Ln();
$pdf->SetFont("Times", "B", 11);
$pdf->Cell(90, 6, "TOTAL  ", 1, 0, 'R');
$pdf->Cell(28, 6, "", 1, 0, 'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(28, 6, "", 1, 'C');
$pdf->SetXY($x+28, $y);
$pdf->Cell(25, 6, "", 1, 0, 'C');
$pdf->Cell(25, 6, "", 1, 0, 'C');

$pdf->Ln();
$pdf->SetFont("Times", "", 11);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(28, 9, "The amount above is:", 1, 'C');
$pdf->SetXY($x+28, $y);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Cell(168, 6, "       included in the approved budget", 1, 0, 'L');
$pdf->Rect($x+2, $y+1, 4, 4, 'D');
$pdf->SetXY($x, $y+6);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Cell(168, 6, "       not included in the approved budget but will coordinate with proper offices for possible funding", 1, 0, 'L');
$pdf->Rect($x+2, $y+1, 4, 4, 'D');
$pdf->SetXY($x, $y+6);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Cell(168, 6, "       no funding required", 1, 0, 'L');
$pdf->Rect($x+2, $y+1, 4, 4, 'D');

$pdf->Output();
?>