<?php 
  session_start();
  $conn = new mysqli("localhost", "root", "", "unilink");

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $session_id = $_SESSION['id'];
  $sql = "SELECT * FROM `users` WHERE `id` = '$session_id'";
  $result = $conn->query($sql);
  $session_row = $result->fetch_assoc();
require ('fpdf/fpdf/fpdf.php');


class PDF extends FPDF
{
    function Header()
    {
        // Select Arial bold 15

        $this->SetFont('times', 'B', 12);
        // Move to the right
        $this->Image('imgs/bsu.png', 17, 10, -280);
        $this->Cell(80);
        // Framed title
        $this->Cell(30, 8, 'Republic of the Philippines', 0, 0, 'C');
        // Line break
        $this->Ln(5);
        $this->SetFont('times', 'B', 16);
        $this->Cell(193, 11, 'BATANGAS STATE UNIVERSITY', 0, 0, 'C');
        $this->Ln(5);
        $this->SetFont('times', 'B', 12);
        $this->Cell(193, 13, 'ARASOF-Nasugbu Campus', 0, 0, 'C');
        $this->Ln(5);
        $this->SetFont('times', 'B', 10);
        $this->Cell(193, 13, 'R. Martinez St, Brgy. Bucana, Nasugbu, Batangas, Philippines 4231', 0, 0, 'C');
        $this->Ln(5);
        $this->SetFont('times', '', 10);
        $this->Cell(193, 13, 'Tel Nos.: (+63 43) 416-0350 local 101; (+63 43) 416-0068', 0, 0, 'C');
        $this->Ln(5);
        $this->Cell(193, 13, 'E-mail Address: cics.nasugbu@g.batstate-u.edu.ph | Website Address: http://www.batstate-u.edu.ph', 0, 0, 'C');
        $this->Ln(11);
        $this->SetFont('times', 'B', 10);
        $this->Cell(193, 0, '', 1, 0, 'C');
        $this->Ln(5);
        $this->SetFont('times', 'B', 12);
        $this->Cell(150, 0, '               College of Informatics and Computing Sciences', 0, 0, 'L');
    }
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);

        // Arial italic 8
        $this->SetFont('Arial','I',8);

        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().' of {nb}',0,0,'R');
    }
}



$pdf = new PDF('P', 'mm', 'Legal');

$id = $_GET['id'];

  $sql = "SELECT * FROM `activityform` WHERE `id` = '$id'";
  $result = $conn->query($sql);
 if ($row = mysqli_fetch_assoc($result)){



$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->Ln(10);
$pdf->SetFont('times','B',14);
$pdf->Cell(200,10,"PROJECT PROPOSAL\n", 0,0, 'C');

$pdf->Ln(18);
$pdf->SetFont('times','B',12);
$pdf->Cell(100,7,"                 A. Title of the Project\n", 0,0, 'L');
$pdf->Ln();
$pdf->SetFont('times','',12);
$pdf->SetX($pdf->GetX() - -18);
$pdf->MultiCell(175,7, '         ' .$row['activity_title'], "0");

$pdf->Ln(5);
$pdf->SetFont('times','B',12);
$pdf->Cell(100,7,"                 B. Rationale\n", 0,0, 'L');
$pdf->Ln();
$pdf->SetFont('times','',12);
$pdf->SetX($pdf->GetX() - -18);
$pdf->MultiCell(175,7, '         '. str_replace('&nbsp;', '', strip_tags($row['rationale'])), "0");

$pdf->Ln(5);
$pdf->SetFont('times','B',12);
$pdf->Cell(100,7,"                 C. Objectives\n", 0,0, 'L');
$pdf->Ln();
$pdf->SetFont('times','',12);
$pdf->SetX($pdf->GetX() - -18);
$pdf->MultiCell(175,7, '         '. str_replace('&nbsp;', '', strip_tags($row['objective'])), "0");

$pdf->Ln(5);
$pdf->SetFont('times','B',12);
$pdf->Cell(100,7,"                 D. Project Proponets\n", 0,0, 'L');
$pdf->Ln();
$pdf->SetFont('times','',12);
$sql = "SELECT * FROM `activity_representatives` WHERE `activityform_id` = '$id'";
$result2 = $conn->query($sql);
while($row2 = $result2->fetch_assoc()) {
  $pdf->SetX($pdf->GetX() - -27);
  $pdf->MultiCell(175,7, $row2['role'], "0");

  $id2 = $row2['id'];
  $sql = "SELECT * FROM `representatives` WHERE `activity_representatives_id` = '$id2'";
  $result3 = $conn->query($sql);
  while($row3 = $result3->fetch_assoc()) {
    $pdf->SetX($pdf->GetX() - -32);
    $pdf->MultiCell(175,7, $row3['name'], "0");
  }

  $pdf->SetX($pdf->GetX() - -27);
  $pdf->MultiCell(150,7, "Responsibilities:", "0");
  
  $sql = "SELECT * FROM `activity_representatives_responsibilities` WHERE `activity_representatives_id` = '$id2'";
  $result3 = $conn->query($sql);
  while($row3 = $result3->fetch_assoc()) {
    $pdf->SetX($pdf->GetX() - -32);
    $pdf->MultiCell(150,7, $row3['responsibility'], "0");
  }

  $pdf->SetX($pdf->GetX() - -27);
  $pdf->MultiCell(150,7, "", "0");
}

$pdf->Ln(5);
$pdf->SetFont('times','B',12);
$pdf->Cell(100,7,"                 II. Project Duration\n", 0,0, 'L');
$pdf->Ln();
$pdf->SetFont('times','',12);
$pdf->SetX($pdf->GetX() - -18);
// Define and assign values to $start_date and $end_date
$start_date = strtotime($row['start_date']);
$end_date = strtotime($row['end_date']);

// Modify the code to display the Preparation Period
$pdf->MultiCell(175, 7, "         Preparation Period: " . date("F d, Y", $start_date) . " to " . date("F d, Y", $end_date), 0);


$pdf->Ln(5);
$pdf->SetFont('times','B',12);
$pdf->Cell(100,7,"                 III. Funding Requirements\n", 0,0, 'L');
$pdf->Ln();
$pdf->SetFont('times','',12);
$total;
$sql = "SELECT COUNT(*) AS `total` FROM `budget` WHERE `activityform_id` = '$id'";
$result = $conn->query($sql);
if($row1 = $result->fetch_assoc()){
  $total = $row1['total'];
}
$sql = "SELECT * FROM `budget` WHERE `activityform_id` = '$id'";
$result = $conn->query($sql);
$i = 1;
while($row2 = $result->fetch_assoc()) {
  if($i == $total) {
    $pdf->SetX($pdf->GetX() - -27);
    $pdf->Cell(100,7,$row2['item_description']."\n", 0,0, 'L');
    $pdf->SetFont('times','U',12);
    $pdf->Cell(100,7,$row2['total']."\n", 0,0, 'L');
    $pdf->Ln();
  } else {
    $pdf->SetX($pdf->GetX() - -18);
    $pdf->Cell(100,7,"         ".$row2['item_description']."\n", 0,0, 'L');
    $pdf->Cell(100,7,"         ".$row2['total']."\n", 0,0, 'L');
    $pdf->Ln();
  }
  $i++;
}
$pdf->SetFont('times','B',12);
$pdf->SetX($pdf->GetX() - -75);
$pdf->Cell(100,7,"TOTAL: ", 0,0, 'L');
$pdf->SetFont('times','B',12);
$pdf->SetX($pdf->GetX() - 48);
$sql = "SELECT SUM(`total`) AS `grand_total` FROM `budget` WHERE `activityform_id` = '$id'";
$result = $conn->query($sql);
if($row3 = $result->fetch_assoc()) {
  $pdf->Cell(100,7,$row3['grand_total'], 0,0, 'L');
}

$pdf->Ln(15);
$pdf->SetFont('times','',12);
$pdf->SetX($pdf->GetX() - -10);
$pdf->Cell(100,7,"         Prepared by: ", 0,0, 'L');

$pdf->Ln(15);
$pdf->SetFont('times','B',12);
$pdf->SetX($pdf->GetX() - -10);
$pdf->Cell(100,7,"         " . $session_row['title'] . " " . $session_row['first_name'] . " " . $session_row['mid_name'] . " " . $session_row['last_name'], 0,0, 'L');
$pdf->Ln(6);
$pdf->SetFont('times','',12);
$pdf->SetX($pdf->GetX() - -10);
$pdf->Cell(100,7,"         " . $session_row['privelege'], 0,0, 'L');
$pdf->Ln(6);
// $pdf->SetFont('times','',12);
// $pdf->Cell(100,7,"                  Program Chairperson, BSCS Program\n", 0,0, 'L');
// $pdf->Ln(6);
$pdf->SetFont('times','',12);
$pdf->Cell(100,7,"                  Date Signed: ____________________\n", 0,0, 'L');


$pdf->Ln(15);
$pdf->SetFont('times','',12);
$pdf->SetX($pdf->GetX() - -10);
$pdf->Cell(100,7,"         Reviewed and Approved by: ", 0,0, 'L');

$pdf->Ln(15);
$pdf->SetFont('times','B',12);
$pdf->SetX($pdf->GetX() - -10);
$pdf->Cell(100,7,"         Dr. LORISSA JOANA E. BUENAS", 0,0, 'L');
$pdf->Ln(6);
$pdf->SetFont('times','',12);
$pdf->SetX($pdf->GetX() - -10);
$pdf->Cell(100,7,"        Vice Chancellor for Academic Affairs\n", 0,0, 'L');
$pdf->Ln(6);
$pdf->SetFont('times','',12);
$pdf->Cell(100,7,"                  Dean, CICS\n", 0,0, 'L');
$pdf->Ln(6);
$pdf->SetFont('times','',12);
$pdf->Cell(100,7,"                  Date Signed: ____________________\n", 0,0, 'L');


// $pdf->AddPage();

// $pdf->Ln(10);
// $pdf->SetFont('times','B',14);
// $pdf->Cell(200,10,"NARRATIVE REPORT\n", 0,0, 'C');

// $pdf->Ln(18);
// $pdf->SetFont('times','B',12);
// $pdf->Cell(100,7,"                 I.  Background of the Activity\n", 0,0, 'L');
// $pdf->Ln(10);
// $pdf->SetFont('times','B',12);
// $pdf->Cell(100,7,"                              A. Title of the Project\n", 0,0, 'L');
// $pdf->Ln();
// $pdf->SetFont('times','',12);
// $pdf->SetX($pdf->GetX() - -40);
// $pdf->MultiCell(152,7, '      ' .$row['activity_title'], "1");

// $pdf->Ln(5);
// $pdf->SetFont('times','B',12);
// $pdf->Cell(100,7,"                              B.  Sponsor or Host\n", 0,0, 'L');
// $pdf->Ln();
// $pdf->SetFont('times','',12);
// $pdf->SetX($pdf->GetX() - -40);
// $pdf->MultiCell(152,7, '      ' .$row['activity_title'], "1");

// $pdf->Ln(5);
// $pdf->SetFont('times','B',12);
// $pdf->Cell(100,7,"                              C.  Program / Project Implementers\n", 0,0, 'L');
// $pdf->Ln();
// $pdf->SetFont('times','',12);
// $pdf->SetX($pdf->GetX() - -40);
// $pdf->MultiCell(152,7, '' .$row['activity_title'], "1");

// $pdf->Ln(5);
// $pdf->SetFont('times','B',12);
// $pdf->Cell(100,7,"                              D.  Participants\n", 0,0, 'L');
// $pdf->Ln();
// $pdf->SetFont('times','',12);
// $pdf->SetX($pdf->GetX() - -40);
// $pdf->MultiCell(152,7, '      ' .$row['activity_title'], "1");

// $pdf->Ln(5);
// $pdf->SetFont('times','B',12);
// $pdf->Cell(100,7,"                              E. Duration / Date\n", 0,0, 'L');
// $pdf->Ln();
// $pdf->SetFont('times','',12);
// $pdf->SetX($pdf->GetX() - -40);
// // Define and assign values to $start_date and $end_date
// $start_date = strtotime($row['start_date']);
// $end_date = strtotime($row['end_date']);

// // Modify the code to display the Preparation Period
// $pdf->MultiCell(175, 7, "         Preparation Period: " . date("F d, Y", $start_date) . " to " . date("F d, Y", $end_date), 0);

// $pdf->Ln(5);
// $pdf->SetFont('times','B',12);
// $pdf->Cell(100,7,"                              F.  Objectives\n", 0,0, 'L');
// $pdf->Ln();
// $pdf->SetFont('times','',12);
// $pdf->SetX($pdf->GetX() - -40);
// $pdf->MultiCell(152,7, '      ' .$row['activity_title'], "1");

// $pdf->Ln(10);
// $pdf->SetFont('times','B',12);
// $pdf->Cell(100,7,"                 II.  Highlights of the Activity\n", 0,0, 'L');
// $pdf->Ln(10);
// $pdf->SetFont('times','B',12);
// $pdf->Cell(100,7,"                              A.  Brief Overview of the Activity\n", 0,0, 'L');
// $pdf->Ln();
// $pdf->SetFont('times','',12);
// $pdf->SetX($pdf->GetX() - -40);
// $pdf->MultiCell(152,7, '      ' .$row['activity_title'], "1");


// $pdf->Ln(15);
// $pdf->SetFont('times','',12);
// $pdf->SetX($pdf->GetX() - -10);
// $pdf->Cell(100,7,"         Prepared by: ", 0,0, 'L');

// $pdf->Ln(15);
// $pdf->SetFont('times','B',12);
// $pdf->SetX($pdf->GetX() - -10);
// $pdf->Cell(100,7,"         Ms. NOELYN M. DE JESUS", 0,0, 'L');
// $pdf->Ln(6);
// $pdf->SetFont('times','',12);
// $pdf->SetX($pdf->GetX() - -10);
// $pdf->Cell(100,7,"        Chief Project Proponent and Faculty Member, CICS\n", 0,0, 'L');
// $pdf->Ln(6);
// $pdf->SetFont('times','',12);
// $pdf->Cell(100,7,"                  Program Chairperson, BSCS Program\n", 0,0, 'L');
// $pdf->Ln(6);
// $pdf->SetFont('times','',12);
// $pdf->Cell(100,7,"                  Date Signed: ____________________\n", 0,0, 'L');


// $pdf->Ln(15);
// $pdf->SetFont('times','',12);
// $pdf->SetX($pdf->GetX() - -10);
// $pdf->Cell(100,7,"         Reviewed and Approved by: ", 0,0, 'L');

// $pdf->Ln(15);
// $pdf->SetFont('times','B',12);
// $pdf->SetX($pdf->GetX() - -10);
// $pdf->Cell(100,7,"         Dr. LORISSA JOANA E. BUENAS", 0,0, 'L');
// $pdf->Ln(6);
// $pdf->SetFont('times','',12);
// $pdf->SetX($pdf->GetX() - -10);
// $pdf->Cell(100,7,"        Vice Chancellor for Academic Affairs\n", 0,0, 'L');
// $pdf->Ln(6);
// $pdf->SetFont('times','',12);
// $pdf->Cell(100,7,"                  Dean, CICS\n", 0,0, 'L');
// $pdf->Ln(6);
// $pdf->SetFont('times','',12);
// $pdf->Cell(100,7,"                  Date Signed: ____________________\n", 0,0, 'L');



}
$pdf -> Output();
    

 ?>