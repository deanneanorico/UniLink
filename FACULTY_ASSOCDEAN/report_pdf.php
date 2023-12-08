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

function hex2dec($couleur = "#000000"){
    $R = substr($couleur, 1, 2);
    $rouge = hexdec($R);
    $V = substr($couleur, 3, 2);
    $vert = hexdec($V);
    $B = substr($couleur, 5, 2);
    $bleu = hexdec($B);
    $tbl_couleur = array();
    $tbl_couleur['R']=$rouge;
    $tbl_couleur['V']=$vert;
    $tbl_couleur['B']=$bleu;
    return $tbl_couleur;
}

//conversion pixel -> millimeter at 72 dpi
function px2mm($px){
    return $px*25.4/72;
}

function txtentities($html){
    $trans = get_html_translation_table(HTML_ENTITIES);
    $trans = array_flip($trans);
    return strtr($html, $trans);
}


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
        $this->Ln(5);
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

    protected $B;
    protected $I;
    protected $U;
    protected $HREF;
    protected $fontlist;
    protected $issetfont;
    protected $issetcolor;

    function __construct($orientation='P', $unit='mm', $size='A4')
    {
        //Call parent constructor
        parent::__construct($orientation,$unit,$size);
        //Initialization
        $this->B=0;
        $this->I=0;
        $this->U=0;
        $this->HREF='';
        $this->fontlist=array('arial', 'times', 'courier', 'helvetica', 'symbol');
        $this->issetfont=false;
        $this->issetcolor=false;
    }

    function WriteHTML($html)
    {
        //HTML parser
        $html=strip_tags($html,"<b><u><i><a><img><p><br><strong><em><font><tr><blockquote>"); //supprime tous les tags sauf ceux reconnus
        $html=str_replace("\n",' ',$html); //remplace retour à la ligne par un espace
        $a=preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE); //éclate la chaîne avec les balises
        foreach($a as $i=>$e)
        {
            if($i%2==0)
            {
                //Text
                if($this->HREF)
                    $this->PutLink($this->HREF,$e);
                else
                    $this->Write(5,txtentities($e));
            }
            else
            {
                //Tag
                if($e[0]=='/')
                    $this->CloseTag(strtoupper(substr($e,1)));
                else
                {
                    //Extract attributes
                    $a2=explode(' ',$e);
                    $tag=strtoupper(array_shift($a2));
                    $attr=array();
                    foreach($a2 as $v)
                    {
                        if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                            $attr[strtoupper($a3[1])]=$a3[2];
                    }
                    $this->OpenTag($tag,$attr);
                }
            }
        }
    }

    function OpenTag($tag, $attr)
    {
        //Opening tag
        switch($tag){
            case 'STRONG':
                $this->SetStyle('B',true);
                break;
            case 'EM':
                $this->SetStyle('I',true);
                break;
            case 'B':
            case 'I':
            case 'U':
                $this->SetStyle($tag,true);
                break;
            case 'A':
                $this->HREF=$attr['HREF'];
                break;
            case 'IMG':
                if(isset($attr['SRC']) && (isset($attr['WIDTH']) || isset($attr['HEIGHT']))) {
                    if(!isset($attr['WIDTH']))
                        $attr['WIDTH'] = 0;
                    if(!isset($attr['HEIGHT']))
                        $attr['HEIGHT'] = 0;
                    $this->Image($attr['SRC'], $this->GetX(), $this->GetY(), px2mm($attr['WIDTH']), px2mm($attr['HEIGHT']));
                }
                break;
            case 'TR':
            case 'BLOCKQUOTE':
            case 'BR':
                $this->Ln(5);
                break;
            case 'P':
                $this->Ln(10);
                break;
            case 'FONT':
                if (isset($attr['COLOR']) && $attr['COLOR']!='') {
                    $coul=hex2dec($attr['COLOR']);
                    $this->SetTextColor($coul['R'],$coul['V'],$coul['B']);
                    $this->issetcolor=true;
                }
                if (isset($attr['FACE']) && in_array(strtolower($attr['FACE']), $this->fontlist)) {
                    $this->SetFont(strtolower($attr['FACE']));
                    $this->issetfont=true;
                }
                break;
        }
    }

    function CloseTag($tag)
    {
        //Closing tag
        if($tag=='STRONG')
            $tag='B';
        if($tag=='EM')
            $tag='I';
        if($tag=='B' || $tag=='I' || $tag=='U')
            $this->SetStyle($tag,false);
        if($tag=='A')
            $this->HREF='';
        if($tag=='FONT'){
            if ($this->issetcolor==true) {
                $this->SetTextColor(0);
            }
            if ($this->issetfont) {
                $this->SetFont('arial');
                $this->issetfont=false;
            }
        }
    }

    function SetStyle($tag, $enable)
    {
        //Modify style and select corresponding font
        $this->$tag+=($enable ? 1 : -1);
        $style='';
        foreach(array('B','I','U') as $s)
        {
            if($this->$s>0)
                $style.=$s;
        }
        $this->SetFont('',$style);
    }

    function PutLink($URL, $txt)
    {
        //Put a hyperlink
        $this->SetTextColor(0,0,255);
        $this->SetStyle('U',true);
        $this->Write(5,$txt,$URL);
        $this->SetStyle('U',false);
        $this->SetTextColor(0);
    }
}



$pdf = new PDF('P', 'mm', 'Legal');

$id = $_GET['id'];

  $sql = "SELECT * FROM `narrative_report` WHERE `id` = '$id'";
  $result = $conn->query($sql);
 if ($row = mysqli_fetch_assoc($result)){



$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->Ln(5);
$pdf->SetFont('times','B',14);
$pdf->Cell(200,10,"NARRATIVE REPORT", 0,0, 'C');

$pdf->Ln(18);
$pdf->SetFont('times','B',12);
$pdf->SetX($pdf->GetX() - -20);
$pdf->Cell(100,7,"A.  Title of the Project", 0,0, 'L');

$pdf->Ln(10);
$pdf->SetX($pdf->GetX() - -25);
$pdf->SetFont('times','',12);
$pdf->Cell(100,7,$row['activity_name'], 0,0, 'L');

$pdf->Ln(10);
$pdf->SetFont('times','B',12);
$pdf->SetX($pdf->GetX() - -20);
$pdf->Cell(100,7,"B.  Sponsor or Host", 0,0, 'L');

$pdf->Ln(10);
$pdf->SetX($pdf->GetX() - -25);
$pdf->SetFont('times','',12);
$pdf->Cell(100,7,str_replace('&nbsp;', '', strip_tags($row['sponsor'])), 0,0, 'L');

$pdf->Ln(10);
$pdf->SetFont('times','B',12);
$pdf->SetX($pdf->GetX() - -20);
$pdf->Cell(100,7,"C.  Participants", 0,0, 'L');

$pdf->Ln(10);
$pdf->SetFont('times','',12);
$sql = "SELECT * FROM `narrative_report_representative` WHERE `narrative_report_id` = '$id'";
$result2 = $conn->query($sql);
$first = true;
$count = 1;
while($row2 = $result2->fetch_assoc()) {
  $id2 = $row2['id'];
  $sql = "SELECT * FROM `narrative_report_representative_list` WHERE `narrative_report_representative_id` = '$id2'";
  $result3 = $conn->query($sql);
  while($row3 = $result3->fetch_assoc()) {
    if($first) {
      $first = !$first;
    } else {
      $pdf->Ln(7);
    }
    $pdf->SetX($pdf->GetX() - -25);
    $pdf->Cell(100,7,$count . ". " . $row3['name'] . " - " . $row2['role'], 0,0, 'L');
    $count++;
  }
}

$pdf->Ln(10);
$pdf->SetFont('times','B',12);
$pdf->SetX($pdf->GetX() - -20);
$pdf->Cell(100,7,"E.  Duration / Date", 0,0, 'L');

$pdf->Ln(10);
$pdf->SetX($pdf->GetX() - -25);
$pdf->SetFont('times','',12);
$pdf->Cell(100,7,"Period: " . $row['start_date'] . " to " . $row['end_date'], 0,0, 'L');

$pdf->Ln(10);
$pdf->SetFont('times','B',12);
$pdf->SetX($pdf->GetX() - -20);
$pdf->Cell(100,7,"F.  Objectives", 0,0, 'L');

$pdf->Ln(-1);
$pdf->SetFont('times','',12);
$pdf->SetLeftMargin(30);
$pdf->SetRightMargin(30);
$pdf->WriteHTML($row['objectives']);

$pdf->SetLeftMargin(10);
$pdf->Ln(10);
$pdf->SetFont('times','B',12);
$pdf->SetX($pdf->GetX() - -20);
$pdf->Cell(100,7,"G.  Overview", 0,0, 'L');

$pdf->Ln(10);
$pdf->SetFont('times','',12);
$pdf->SetLeftMargin(30);
$pdf->SetRightMargin(30);
$pdf->WriteHTML($row['overview']);

$pdf->SetLeftMargin(10);
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
$pdf->Cell(100,7,"         Vice Chancellor for Academic Affairs\n", 0,0, 'L');
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