
<?php
// ob_start();
/*require("../fpdf/fpdf.php");*/
include '../fpdf/code128.php';
session_start();

//include('../barcode/barcode.php');


require_once("../login/session.php");
include('../login/db_connection_class.php');
$obj = new DB_Connection_Class();
$obj->connection();

$currnet_date = date("d-M-Y");


// $date_of_packing = $_GET['all_data'];
$all_data = $_GET['all_data'];

$split_all_data=explode("?fs?", $all_data);

$work_order_number = $split_all_data[0];
$date_of_packing = $split_all_data[1];
$gd_number = $split_all_data[2];
$pp_number = $split_all_data[3];
$customer_name = $split_all_data[4];
$color = $split_all_data[5];
$order_quantity = $split_all_data[6];
$style = $split_all_data[7];
$construction = $split_all_data[8];
$composition = $split_all_data[9];
$fabrics_type = $split_all_data[10];
$finished_type = $split_all_data[11];
$finished_width = $split_all_data[12];
$cuttable_width = $split_all_data[13];
$garments = $split_all_data[13];





$barcode_codes = array();
$cubics = array();



class PDF extends PDF_Code128
{
// Page header
function Header()
{
    // Logo
    //$this->Image('logo.png',10,6,30);
    // Arial bold 15
    // Move to the right
    $this->setTopMargin(0);
    $this->SetTextColor(0,0,0);

    $this->SetFont('Arial','B',14);
    // $this->Cell(80);
    $this->setLeftMargin(0);
    $this->Cell(150,5,'Zaber & Zubir Fabric Limited',"0","0",'L');
    // $pdf->SetFont('Arial','B',10);
    $this->Ln(2);

    $this->Image('../img/ZnZ.jpg',10,17,10);

    $this->setLeftMargin(20);
    $this->Ln(5);
    $this->setTextColor(0,0,0);
    $this->SetFont('Arial','',8);
    $this->Cell(105,3,"PAGAR, TONGI, GAZIPUR, BANGLADESH","0","0","L");
    // $this->Ln(1);
    // $this->SetFont('Arial','',8);
    $this->Ln(3);
    $this->Cell(105,3,"Contact Info : (+8802) 9801012, 9801146 Visit us at www.znzfab.com, ","0","0","L");
    // $this->Ln(1);
    // $this->SetFont('Arial','',8);
    $this->Ln(3);
    $this->Cell(50,3,"E-mail : ftslab@znzfab.com","0","0","L");
    // $this->setLeftMargin(5);
    // $this->Ln(4);
    // $this->Cell(170,0,"",1,0,"L");
    // $this->setTopMargin(3);
$this->Ln(8);
$this->setLeftMargin(10);

}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetFont('Times','',6);
    $this->SetY(-8);
    $this->SetTextColor(0,0,0);

        // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,5,'Page '.$this->PageNo().'/{nb}',0,0,'C');

}
}


$pdf=new PDF('P','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();

// $pdf->Ln(0);
// $pdf->setTopMargin(0);
// $pdf->setLeftMargin(135);
// $pdf->SetAutoPageBreak(true, 10);
// $pdf->setTopMargin(10);


// $pdf->Cell(60,-25,"Date of Publish:  ".$currnet_date,0,0,'L');

$pdf->Ln(0);
$pdf->setLeftMargin(0);
$pdf->Cell(190,-25,'Publish date: '.$currnet_date,'0','1','R');
$pdf->Ln(22);
$pdf->setLeftMargin(10);
$pdf->Cell(190,0,'','1','1','C');

$pdf->Ln(2);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(190,4,"Packing List Report","0","1","C");
$pdf->Ln(2);
$pdf->SetFont('Arial','',8);
$pdf->setLeftMargin(10);

$pdf->Cell(35,3,"Work Order No :","0","0","R");
$pdf->Cell(60,3,$work_order_number,"0","0","L");
$pdf->Cell(35,3,"Packing Date :","0","0","R");
$pdf->Cell(60,3,$date_of_packing,"0","1","L");

$pdf->Cell(35,3,"PP No :","0","0","R");
$pdf->Cell(60,3,$pp_number,"0","0","L");
$pdf->Cell(35,3,"Contruction :","0","0","R");
$pdf->Cell(60,3,$construction,"0","1","L");

$pdf->Cell(35,3,"Customer :","0","0","R");
$pdf->Cell(60,3,$customer_name,"0","0","L");
$pdf->Cell(35,3,"Composition :","0","0","R");
$pdf->Cell(60,3,$composition,"0","1","L");

$pdf->Cell(35,3,"Garments :","0","0","R");
$pdf->Cell(60,3,$garments,"0","0","L");
$pdf->Cell(35,3,"Fabrics Type :","0","0","R");
$pdf->Cell(60,3,$fabrics_type,"0","1","L");

$pdf->Cell(35,3,"Color :","0","0","R");
$pdf->Cell(60,3,$color,"0","0","L");
$pdf->Cell(35,3,"Finished Type :","0","0","R");
$pdf->Cell(60,3,$finished_type,"0","1","L");

$pdf->Cell(35,3,"Order quantity :","0","0","R");
$pdf->Cell(60,3,$order_quantity,"0","0","L");
$pdf->Cell(35,3,"Finished Width :","0","0","R");
$pdf->Cell(60,3,$finished_width,"0","1","L");

$pdf->Cell(35,3,"Style No :","0","0","R");
$pdf->Cell(60,3,$style,"0","0","L");
$pdf->Cell(35,3,"Cuttable Width :","0","0","R");
$pdf->Cell(60,3,$cuttable_width,"0","1","L");

// $pdf->Ln(3);

// $pdf->AddPage();

$pdf->SetLeftMargin(6);
// $pdf->Ln(10);
$pdf->Cell(200,0,"",0,0,'C');
$pdf->Ln(2);

///////////////////////////// First Column header start /////////////////////////////////////

$pdf->SetFont('Arial','B',7);

$x = $pdf->GetX();
$y = $pdf->GetY();

$data = 'SL No';
strlen($data)<5?$w=6:$w=3;
$pdf->MultiCell(7,$w,$data,1,'C',false);
$pdf->SetXY($x+7,$y);
$data = 'Roll No';
strlen($data)<15?$w=6:$w=3;
$pdf->MultiCell(18,$w,$data,1,'C',false);
$pdf->SetXY($x+25,$y);
$data = 'Quantity';
strlen($data)<10?$w=6:$w=3;
$pdf->MultiCell(13,$w,$data,1,'C',false);
$pdf->SetXY($x+38,$y);
$data = 'Grade No';
strlen($data)<5?$w=6:$w=3;
$pdf->MultiCell(10,$w,$data,1,'C',false);
$pdf->SetXY($x+48,$y);
$data = 'Finish Width';
strlen($data)<5?$w=6:$w=3;
$pdf->MultiCell(10,$w,$data,1,'C',false);
$pdf->SetXY($x+58,$y);
$data = 'Cuttable Width';
strlen($data)<7?$w=6:$w=3;
$pdf->MultiCell(12,$w,$data,1,'C',false);
$pdf->SetXY($x+70,$y);
$data = 'Points per 100sq yds';
strlen($data)<15?$w=6:$w=3;
$pdf->MultiCell(18,$w,$data,1,'C',false);
$pdf->SetXY($x+88,$y);
$data = 'Pass / Fail';
strlen($data)<7?$w=6:$w=3;
$pdf->MultiCell(12,$w,$data,1,'C',false);

///////////////////////////// First Column header end /////////////////////////////////////


$lengths = 0;

$counter = 1;
$s1 = 1;
$total_length = 0;
$total_length_1 = 0;
$total_length_2 = 0;


    $roll_no = '';
    $length = '';
    $grade = '';
    $actual_finished_width = '';
    $actual_cuttable_width = '';
    $points_per_100_sqm = '';
    $pass_fail = ''; 


    $sql ="SELECT * FROM packing_list WHERE work_order_number = '$work_order_number'
    and date(recording_time) = '$date_of_packing'";
    
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));

    $row_num = mysqli_num_rows($result);


    $sql_1 = "SELECT * FROM (SELECT * FROM packing_list WHERE work_order_number = '$work_order_number'
        and date(recording_time) = '$date_of_packing' ORDER BY id ASC LIMIT 40) total_row_for_first_col
        ORDER BY id ASC  ";

$result_1 = mysqli_query($con, $sql_1) or die(mysqli_error($con));

///////////////////////////// First Column body start /////////////////////////////////////

    while($row = mysqli_fetch_assoc($result_1))
    { 
        $roll_no = $row['roll_no'];
        $length = $row['length'];
        $total_length = $total_length + $length;
        $total_length_1 = $total_length_1 + $length;
        $grade = $row['grade'];
        $actual_finished_width = $row['actual_finished_width'];
        $actual_cuttable_width = $row['actual_cuttable_width'];
        $points_per_100_sqm = number_format((float)$row['points_per_yds'], 2, '.', '');
        $pass_fail = $row['pass_fail'];

            $a = $pdf->GetX();
            $b = $pdf->GetY();
            $pdf->SetFont('Arial','B',7);

            $data = $s1;
            strlen($data)<5?$w=4.4:$w=2.2;
            $pdf->MultiCell(7,$w,$data,1,'C',false);
            $pdf->SetXY($a+7,$b);
            $pdf->SetFont('Arial','',7);
            $data = $roll_no;
            strlen($data)<15?$w=4.4:$w=2.2;
            $pdf->MultiCell(18,$w,$data,1,'C',false);
            $pdf->SetXY($a+25,$b);
            $data = $length;
            strlen($data)<10?$w=4.4:$w=2.2;
            $pdf->MultiCell(13,$w,$data,1,'C',false);
            $pdf->SetXY($a+38,$b);
            $data = $grade;
            strlen($data)<5?$w=4.4:$w=2.2;
            $pdf->MultiCell(10,$w,$data,1,'C',false);
            $pdf->SetXY($a+48,$b);
            $data = $actual_finished_width;
            strlen($data)<5?$w=4.4:$w=2.2;
            $pdf->MultiCell(10,$w,$data,1,'C',false);
            $pdf->SetXY($a+58,$b);
            $data = $actual_cuttable_width;
            strlen($data)<7?$w=4.4:$w=2.2;
            $pdf->MultiCell(12,$w,$data,1,'C',false);
            $pdf->SetXY($a+70,$b);
            $data = $points_per_100_sqm;
            strlen($data)<15?$w=4.4:$w=2.2;
            $pdf->MultiCell(18,$w,$data,1,'C',false);
            $pdf->SetXY($a+88,$b);
            $data = $pass_fail;
            strlen($data)<12?$w=4.4:$w=2.2;
            $pdf->MultiCell(12,$w,$data,1,'C',false);
            
            ++$counter;
            $s1++;
        }

if ($counter <= 40 ) 
{
        for($i=$s1;$i<=40;$i++)
        {
            $a = $pdf->GetX();
            $b = $pdf->GetY();
            $pdf->SetFont('Arial','B',7);

            $data = $s1;
            strlen($data)<5?$w=4.4:$w=2.2;
            $pdf->MultiCell(7,$w,$data,1,'C',false);
            $pdf->SetXY($a+7,$b);
            $pdf->SetFont('Arial','',7);
            $data = '';
            strlen($data)<15?$w=4.4:$w=2.2;
            $pdf->MultiCell(18,$w,$data,1,'C',false);
            $pdf->SetXY($a+25,$b);
            $data = '';
            strlen($data)<10?$w=4.4:$w=2.2;
            $pdf->MultiCell(13,$w,$data,1,'C',false);
            $pdf->SetXY($a+38,$b);
            $data = '';
            strlen($data)<5?$w=4.4:$w=2.2;
            $pdf->MultiCell(10,$w,$data,1,'C',false);
            $pdf->SetXY($a+48,$b);
            $data = '';
            strlen($data)<5?$w=4.4:$w=2.2;
            $pdf->MultiCell(10,$w,$data,1,'C',false);
            $pdf->SetXY($a+58,$b);
            $data = '';
            strlen($data)<7?$w=4.4:$w=2.2;
            $pdf->MultiCell(12,$w,$data,1,'C',false);
            $pdf->SetXY($a+70,$b);
            $data = '';
            strlen($data)<15?$w=4.4:$w=2.2;
            $pdf->MultiCell(18,$w,$data,1,'C',false);
            $pdf->SetXY($a+88,$b);
            $data = '';
            strlen($data)<12?$w=4.4:$w=2.2;
            $pdf->MultiCell(12,$w,$data,1,'C',false);
            $s1++;
        }
}
///////////////////////////// First Column body end /////////////////////////////////////

///////////////////////////// Second Column header start /////////////////////////////////////

$pdf->SetXY($x+100,$y);
$pdf->SetFont('Arial','B',7);

$data = 'SL No';
strlen($data)<5?$w=6:$w=3;
$pdf->MultiCell(7,$w,$data,1,'C',false);
$pdf->SetXY($x+107,$y);
$data = 'Roll No';
strlen($data)<15?$w=6:$w=3;
$pdf->MultiCell(18,$w,$data,1,'C',false);
$pdf->SetXY($x+125,$y);
$data = 'Quantity';
strlen($data)<10?$w=6:$w=3;
$pdf->MultiCell(13,$w,$data,1,'C',false);
$pdf->SetXY($x+138,$y);
$data = 'Grade No';
strlen($data)<5?$w=6:$w=3;
$pdf->MultiCell(10,$w,$data,1,'C',false);
$pdf->SetXY($x+148,$y);
$data = 'Finish Width';
strlen($data)<5?$w=6:$w=3;
$pdf->MultiCell(10,$w,$data,1,'C',false);
$pdf->SetXY($x+158,$y);
$data = 'Cuttable Width';
strlen($data)<7?$w=6:$w=3;
$pdf->MultiCell(12,$w,$data,1,'C',false);
$pdf->SetXY($x+170,$y);
$data = 'Points per 100sq yds';
strlen($data)<15?$w=6:$w=3;
$pdf->MultiCell(18,$w,$data,1,'C',false);
$pdf->SetXY($x+188,$y);
$data = 'Pass / Fail';
strlen($data)<7?$w=6:$w=3;
$pdf->MultiCell(12,$w,$data,1,'C',false);

///////////////////////////// Second Column header end /////////////////////////////////////
if($row_num>=40)
{
    $sec_row_num = $row_num-40;
}
else
{
    $sec_row_num = 0;
}
$sql_2 = "SELECT * FROM (
    SELECT * FROM packing_list WHERE work_order_number = '$work_order_number'
         and date(recording_time) = '$date_of_packing' ORDER BY id DESC LIMIT $sec_row_num
 )total_row_for_second_col
    ORDER BY id ASC  ";

$result_2 = mysqli_query($con, $sql_2) or die(mysqli_error($con));

///////////////////////////// Second Column body start /////////////////////////////////////

while($row_2 = mysqli_fetch_assoc($result_2))
    { 
       
        $roll_no = $row_2['roll_no'];
        $length = $row_2['length'];
        $total_length = $total_length + $length;
        $total_length_2 = $total_length_2 + $length;

        $grade = $row_2['grade'];
        $actual_finished_width = $row_2['actual_finished_width'];
        $actual_cuttable_width = $row_2['actual_cuttable_width'];
        $points_per_100_sqm = number_format((float)$row_2['points_per_yds'], 2, '.', '');
        $pass_fail = $row_2['pass_fail'];

        $a = $pdf->GetX();
        $b = $pdf->GetY();
        $pdf->SetXY($a+100,$b);
        $pdf->SetFont('Arial','B',7);
        $data = $s1;
        strlen($data)<5?$w=4.4:$w=2.2;
        $pdf->MultiCell(7,$w,$data,1,'C',false);
        $pdf->SetXY($a+107,$b);
        $pdf->SetFont('Arial','',7);
        $data = $roll_no;
        strlen($data)<15?$w=4.4:$w=2.2;
        $pdf->MultiCell(18,$w,$data,1,'C',false);
        $pdf->SetXY($a+125,$b);
        $data = $length;
        strlen($data)<10?$w=4.4:$w=2.2;
        $pdf->MultiCell(13,$w,$data,1,'C',false);
        $pdf->SetXY($a+138,$b);
        $data = $grade;
        strlen($data)<5?$w=4.4:$w=2.2;
        $pdf->MultiCell(10,$w,$data,1,'C',false);
        $pdf->SetXY($a+148,$b);
        $data = $actual_finished_width;
        strlen($data)<5?$w=4.4:$w=2.2;
        $pdf->MultiCell(10,$w,$data,1,'C',false);
        $pdf->SetXY($a+158,$b);
        $data = $actual_cuttable_width;
        strlen($data)<7?$w=4.4:$w=2.2;
        $pdf->MultiCell(12,$w,$data,1,'C',false);
        $pdf->SetXY($a+170,$b);
        $data = $points_per_100_sqm;
        strlen($data)<15?$w=4.4:$w=2.2;
        $pdf->MultiCell(18,$w,$data,1,'C',false);
        $pdf->SetXY($a+188,$b);
        $data = $pass_fail;
        strlen($data)<12?$w=4.4:$w=2.2;
        $pdf->MultiCell(12,$w,$data,1,'C',false);

        ++$counter;
        $s1++;
        
    }

if ($counter <= 80 ) 
{
    for($i=$s1;$i<=80;$i++)
    {
        $a = $pdf->GetX();
        $b = $pdf->GetY();
        $pdf->SetXY($a+100,$b);
        $pdf->SetFont('Arial','B',7);

        $data = $s1;
        strlen($data)<5?$w=4.4:$w=2.2;
        $pdf->MultiCell(7,$w,$data,1,'C',false);
        $pdf->SetXY($a+107,$b);
        $pdf->SetFont('Arial','',7);
        $data = '';
        strlen($data)<15?$w=4.4:$w=2.2;
        $pdf->MultiCell(18,$w,$data,1,'C',false);
        $pdf->SetXY($a+125,$b);
        $data = '';
        strlen($data)<10?$w=4.4:$w=2.2;
        $pdf->MultiCell(13,$w,$data,1,'C',false);
        $pdf->SetXY($a+138,$b);
        $data = '';
        strlen($data)<5?$w=4.4:$w=2.2;
        $pdf->MultiCell(10,$w,$data,1,'C',false);
        $pdf->SetXY($a+148,$b);
        $data = '';
        strlen($data)<5?$w=4.4:$w=2.2;
        $pdf->MultiCell(10,$w,$data,1,'C',false);
        $pdf->SetXY($a+158,$b);
        $data = '';
        strlen($data)<7?$w=4.4:$w=2.2;
        $pdf->MultiCell(12,$w,$data,1,'C',false);
        $pdf->SetXY($a+170,$b);
        $data = '';
        strlen($data)<15?$w=4.4:$w=2.2;
        $pdf->MultiCell(18,$w,$data,1,'C',false);
        $pdf->SetXY($a+188,$b);
        $data = '';
        strlen($data)<12?$w=4.4:$w=2.2;
        $pdf->MultiCell(12,$w,'',1,'C',false);

        $s1++;
    }
}
$pdf->SetFont('Arial','B',7);
$pdf->Cell(25,5,'Total',1,0,'C');
$pdf->Cell(75,5,$total_length_1.'  Yds',1,0,'L');
$pdf->Cell(25,5,'Total',1,0,'C');
$pdf->Cell(75,5,$total_length_2.'  Yds',1,1,'L');


///////////////////////////// Second Column body end /////////////////////////////////////

$counter-=1;
$pdf->Ln(3);
$pdf->SetFont('Arial','',9);
$pdf->Cell(190,6,'Goods once cut will not be taken back. Pls. Cut the fabrics according to the Batch No.','0','1','L');
$pdf->Ln(1);
$pdf->Cell(190,6,'NB. ALL ROLL are inspected on four point system','0','1','L');

$pdf->Ln(3);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(95,6,'G. TOTAL = '.$total_length .' Yds','0','0','R');
$pdf->Cell(95,6,'Rolls = '.$counter,'0','1','L');

 $pdf->Ln(5);
$pdf->SetFont('Arial','U',10);
$pdf->Cell(95,0,'Prepared By','0','0','L');
$pdf->Cell(90,0,'QC Signature','0','1','R');



// ob_end_clean();

$pdf->Output('I', "washing_lab_for_trf_id_".".pdf", true);
// ob_end_flush();
?>
