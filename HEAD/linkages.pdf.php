<?php
require('fpdf/fpdf/fpdf.php');
include "db.php";

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

$linkagesID = $_GET['id'];
$sql = "SELECT * FROM linkages WHERE id = $linkagesID";
$result = $conn->query($sql);
$linkagesRow = $result->fetch_assoc();

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
$pdf->Cell(0, 7, strtoupper($linkagesRow["title"]), 'BLR', 0, 'C');

$pdf->Ln();
$pdf->SetFont("Times", "B", 11);
$pdf->Cell(77, 7, "     II.  Partnership and/or Linkage Category:", 1, 0, 'L');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Cell(59.5, 7, "                      Institutional", 1, 0, 'L');
if($linkagesRow["category"] == "Local") {
    $institutionalFill = "F";
    $internationalFill = "D";
} else {
    $institutionalFill = "D";
    $internationalFill = "F";
}
$pdf->Rect($x+17, $y+1.5, 4, 4, $institutionalFill);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Cell(59.5, 7, "                      International", 1, 0, 'L');
$pdf->Rect($x+17, $y+1.5, 4, 4, $internationalFill);

$pdf->Ln();
$pdf->SetFont("Times", "B", 11);
$pdf->Cell(0, 7, "     III.  Overview/Objectives of the Partnership and/or Linkage:", 'TLR', 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "", 12);
$text = $linkagesRow["overview"];
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
$text = $linkagesRow["strategic_fit"];
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
$text = $linkagesRow["intended_outcome"];
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
$text = $linkagesRow["scope"];
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
$sql = "SELECT * FROM linkages_personnel_and_officials WHERE linkages_id = $linkagesID";
$result = $conn->query($sql);
$paoArray = array();
$count = 1;
while($linkagesPersonnelAndOfficialsRow = $result->fetch_assoc()) {
    array_push($paoArray, $count.'. '.$linkagesPersonnelAndOfficialsRow["personnels"].' - '.$linkagesPersonnelAndOfficialsRow["officials"]);
    $count++;
}
$text = implode("\n", $paoArray);
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
$text = $linkagesRow["arrangement"];
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
$pdf->SetWidths(array(90, 28, 28, 25, 25));
$pdf->SetAligns(array("L"));
$sql = "SELECT * FROM linkages_resources WHERE linkages_id = $linkagesID";
$result = $conn->query($sql);
while($resourcesRow = $result->fetch_assoc()) {
    $pdf->Row(array($resourcesRow['resources'], "", "", "", ""));
}

$pdf->Ln(0);
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

$pdf->Ln();
$pdf->SetFont("Times", "B", 11);
$pdf->Cell(0, 7, "     Implementation Plan:", 'TLR', 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "", 12);
$text = "Text";
$pdf->Cell(5, 6*($pdf->NbLines(186, $text)), "", 'LB', 0, 'L');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(186, 6, $text, 'B', 'J');
$pdf->SetXY($x+186, $y);
$pdf->Cell(5, 6*($pdf->NbLines(186, $text)), "", 'RB', 0, 'L');

$sql = "SELECT * FROM linkages_implementation_plan WHERE linkages_id = $linkagesID";
$lipResult = $conn->query($sql);
$first = true;
while($lipRow = $lipResult->fetch_assoc()) {
    if($first) {
        $first = !$first;
        $pdf->Ln();
    } else {
        $pdf->Ln(0);
    }
    $pdf->SetFont("Times", "B", 10);
    $linkages_implementation_plan_id = $lipRow['id'];
    $sql = "SELECT * FROM linkages_year WHERE linkages_implementation_plan_id = $linkages_implementation_plan_id";
    $lyResult = $conn->query($sql);
    $lyArray = array();
    while($lyRow = $lyResult->fetch_assoc()) {
        array_push($lyArray, 'Year '.$lyRow['year']);
    }
    $pdf->Cell(0, 5, implode(" - ", $lyArray), 1, 0, 'L');

    $pdf->Ln();
    $pdf->SetFont("Times", "B", 11);
    $pdf->Cell(75, 5, "Activities", 1, 0, 'C');
    $pdf->SetFont("Times", "B", 10);
    $pdf->Cell(10.08, 5, "Jan", 1, 0, 'C');
    $pdf->Cell(10.08, 5, "Feb", 1, 0, 'C');
    $pdf->Cell(10.08, 5, "Mar", 1, 0, 'C');
    $pdf->Cell(10.08, 5, "Apr", 1, 0, 'C');
    $pdf->Cell(10.08, 5, "May", 1, 0, 'C');
    $pdf->Cell(10.08, 5, "Jun", 1, 0, 'C');
    $pdf->Cell(10.08, 5, "Jul", 1, 0, 'C');
    $pdf->Cell(10.08, 5, "Aug", 1, 0, 'C');
    $pdf->Cell(10.08, 5, "Sep", 1, 0, 'C');
    $pdf->Cell(10.08, 5, "Oct", 1, 0, 'C');
    $pdf->Cell(10.08, 5, "Nov", 1, 0, 'C');
    $pdf->Cell(10.08, 5, "Dec", 1, 0, 'C');

    $pdf->Ln();
    $pdf->SetFont("Times", "", 12);
    $pdf->SetWidths(array(75, 10.08, 10.08, 10.08, 10.08, 10.08, 10.08, 10.08, 10.08, 10.08, 10.08, 10.08, 10.08));
    $pdf->SetAligns(array("L", "C", "C", "C", "C", "C", "C", "C", "C", "C", "C", "C", "C"));
    $sql = "SELECT * FROM linkages_activity WHERE linkages_implementation_plan_id = $linkages_implementation_plan_id";
    $laResult = $conn->query($sql);
    while($laRow = $laResult->fetch_assoc()) {
        $pdf->Row(array($laRow['activity'], "", "", "", "", "", "", "", "", "", "", "", ""));
    }
    $pdf->Row(array("", "", "", "", "", "", "", "", "", "", "", "", ""));
}

$pdf->Ln(0);
$pdf->SetFont("Times", "B", 11);
$pdf->Cell(0, 7, "     X.  Risk Management:", 'TLR', 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "", 12);
$text = $linkagesRow["risk_management"];
$pdf->Cell(5, 6*($pdf->NbLines(186, $text)), "", 'LB', 0, 'L');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(186, 6, $text, 'B', 'J');
$pdf->SetXY($x+186, $y);
$pdf->Cell(5, 6*($pdf->NbLines(186, $text)), "", 'RB', 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "B", 11);
$pdf->Cell(0, 7, "     XI.  Monitoring and Evaluation Mechanics / Plan:", 'TLR', 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "", 12);
$text = $linkagesRow["monitoring"];
$pdf->Cell(5, 6*($pdf->NbLines(186, $text)), "", 'LB', 0, 'L');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(186, 6, $text, 'B', 'J');
$pdf->SetXY($x+186, $y);
$pdf->Cell(5, 6*($pdf->NbLines(186, $text)), "", 'RB', 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "B", 11);
$pdf->Cell(0, 7, "     XII.  Communication Plan:", 1, 0, 'L');

$pdf->Ln();
$pdf->Cell(66, 8, "Program / Activity / Projects", 1, 0, 'C');
$pdf->Cell(32, 8, "Strategy/Medium", 1, 0, 'C');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(28, 4, "Target Audience", 1, 'C');
$pdf->SetXY($x+28, $y);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(28, 4, "Timing/ Frequency", 1, 'C');
$pdf->SetXY($x+28, $y);
$pdf->Cell(42, 8, "Outcomes", 1, 0, 'C');

$pdf->Ln();
$papArray = array();
$strategyArray = array();
$audienceArray = array();
$timingArray = array();
$outcomesArray = array();

$sql = "SELECT * FROM linkages_pap WHERE linkages_id = $linkagesID";
$result = $conn->query($sql);
while($papRow = $result->fetch_assoc()) {
    array_push($papArray, $papRow['project']);
}

$sql = "SELECT * FROM linkages_sm WHERE linkages_id = $linkagesID";
$result = $conn->query($sql);
while($smRow = $result->fetch_assoc()) {
    array_push($strategyArray, $smRow['strategy']);
}

$sql = "SELECT * FROM linkages_audience WHERE linkages_id = $linkagesID";
$result = $conn->query($sql);
while($audienceRow = $result->fetch_assoc()) {
    array_push($audienceArray, $audienceRow['audience']);
}

$sql = "SELECT * FROM linkages_timing WHERE linkages_id = $linkagesID";
$result = $conn->query($sql);
while($timingRow = $result->fetch_assoc()) {
    array_push($timingArray, $timingRow['timing']);
}

$sql = "SELECT * FROM linkages_outcome WHERE linkages_id = $linkagesID";
$result = $conn->query($sql);
while($outcomeRow = $result->fetch_assoc()) {
    array_push($outcomesArray, $outcomeRow['outcome']);
}

$rowCount = count($papArray);
if($rowCount < count($strategyArray)) {
    $rowCount = count($strategyArray);
}
if($rowCount < count($audienceArray)) {
    $rowCount = count($audienceArray);
}
if($rowCount < count($timingArray)) {
    $rowCount = count($timingArray);
}
if($rowCount < count($outcomesArray)) {
    $rowCount = count($outcomesArray);
}

$i = count($papArray);
while($rowCount >= $i) {
    array_push($papArray, "-");
    $i++;
}

$i = count($strategyArray);
while($rowCount >= $i) {
    array_push($strategyArray, "-");
    $i++;
}

$i = count($audienceArray);
while($rowCount >= $i) {
    array_push($audienceArray, "-");
    $i++;
}

$i = count($timingArray);
while($rowCount >= $i) {
    array_push($timingArray, "-");
    $i++;
}

$i = count($outcomesArray);
while($rowCount >= $i) {
    array_push($outcomesArray, "-");
    $i++;
}

$pdf->SetFont("Times", "", 11);
$pdf->SetWidths(array(66, 32, 28, 28, 42));
$pdf->SetAligns(array("C", "C", "C", "C", "C"));
$i = 0;
while($i < $rowCount) {
    $pdf->Row(array($papArray[$i], $strategyArray[$i], $audienceArray[$i], $timingArray[$i], $outcomesArray[$i]));
    $i++;
}
$pdf->Row(array("", "", "", "", ""));

$pdf->Ln(0);
$pdf->SetFont("Times", "", 11);
$pdf->Cell(98, 6, "Prepared by:", "LTR", 0, 'L');
$pdf->Cell(98, 6, "Prepared by:", "LTR", 0, 'L');

$pdf->Ln(0);
$pdf->Cell(98, 8, "", "LR", 0, 'L');
$pdf->Cell(98, 8, "", "LR", 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "B", 12);
$sql = "SELECT * FROM users WHERE privelege = 'VCDEA'";
$result = $conn->query($sql);
$usersRow = $result->fetch_assoc();
$pdf->Cell(98, 5, $usersRow['title'].' '.strtoupper($usersRow['first_name'].' '.$usersRow['mid_name'].' '.$usersRow['last_name']), "LR", 0, 'C');
$pdf->Cell(98, 5, "Prof. ENRICO M. DALANGIN", "LR", 0, 'C');

$pdf->Ln();
$pdf->SetFont("Times", "", 11);
$pdf->Cell(98, 5, "Vice Chancellor for Development and External Affairs", "LR", 0, 'C');
$pdf->Cell(98, 5, "Chancellor", "LR", 0, 'C');

$pdf->Ln();
$pdf->SetFont("Times", "", 11);
$pdf->Cell(98, 6, "                    Date:", "LBR", 0, 'L');
$pdf->Cell(98, 6, "                    Date:", "LBR", 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "", 11);
$pdf->Cell(98, 6, "Approved by:", "LTR", 0, 'L');
$pdf->Cell(98, 6, "Remarks:", "LTR", 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "", 10);
$pdf->Cell(98, 4, "", "LR", 0, 'L');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Cell(98, 4, "          Recommended for signing of the MOU/MOA for the", "LR", 0, 'L');
$pdf->Rect($x+3, $y, 3.5, 3.5, 'D');

$pdf->Ln();
$pdf->SetFont("Times", "", 10);
$pdf->Cell(98, 4, "", "LR", 0, 'L');
$pdf->Cell(98, 4, "  purpose to the University President/Chancellor, subject to the", "LR", 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "", 10);
$pdf->Cell(98, 4, "", "LR", 0, 'L');
$pdf->Cell(98, 4, "  review process of the University.", "LR", 0, 'L');

$pdf->Ln();
$pdf->SetFont("Times", "B", 12);
$pdf->Cell(98, 4, $usersRow['title'].' '.strtoupper($usersRow['first_name'].' '.$usersRow['mid_name'].' '.$usersRow['last_name']), "LR", 0, 'C');
$pdf->SetFont("Times", "", 10);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Cell(98, 4, "          Not recommended for MOU/MOA because:", "LR", 0, 'L');
$pdf->Rect($x+3, $y, 3.5, 3.5, 'D');

$pdf->Ln();
$pdf->SetFont("Times", "", 11);
$pdf->Cell(98, 5, "Vice Chancellor for Development and External Affairs", "LR", 0, 'C');
$pdf->Cell(98, 5, "_____________________________________________", "LR", 0, 'C');

$pdf->Ln();
$pdf->SetFont("Times", "", 11);
$pdf->Cell(98, 6, "                    Date:", "LBR", 0, 'L');
$pdf->Cell(98, 6, "_____________________________________________", "LBR", 0, 'C');

$pdf->Output();
?>