
<?php 
    
    session_start();
  	include('../login/db_connection_class.php');
  	$obj = new DB_Connection_Class_Main();
  	$obj->connection();

  	$barcode_code = $_GET['barcode_code'];

  	$sql_for_process_route = "SELECT * FROM roll_information_barcode WHERE barcode_code = '$barcode_code' ";
    $res_for_process_route = mysqli_query($con, $sql_for_process_route);

    $row = mysqli_fetch_assoc($res_for_process_route);

  	// ob_start();
  	/*require("../fpdf/fpdf.php");*/
  	include '../fpdf/code128.php';


      $id = $row['id'];
      $pp_number = $row['pp_number'];
      $customer_name = $row['customer_name'];
      $customer_id = $row['customer_id'];
      $work_order_number = $row['work_order_number'];
      $gd_number = $row['gd_number'];
      $construction = $row['construction'];
      $finish_width_in_inch = $row['finish_width_in_inch'];
      $roll_no = $row['roll_no'];
      $kgs = $row['kgs'];
      $composition = $row['composition'];
      $shade = $row['shade'];
      $weave = $row['weave'];
      $length = $row['length'];
      $finished_type = $row['finished_type'];
      $pallet_no = $row['pallet_no'];
      $type = $row['type'];
      $grade = $row['grade'];

      $datetime = $row['recording_time'];
      $split = explode(" ", $datetime);
      $date = $split[0];
 


      // Instanciation of inherited class
      /*$pdf = new PDF('P','mm','A4');*/
      // $pdf=new PDF_Code128('P','mm','A4');
      $pdf = new PDF_Code128('P','mm',array(101.6,101.6));

      $pdf->setTopMargin(3);

      $pdf->AliasNbPages();
      $pdf->AddPage();
      // $pdf->SetFont('Arial','B',25);
      $pdf->SetAutoPageBreak(false);


      $pdf->SetFont('Arial','B',10);
      $pdf->Cell(85,5,'ZABER & ZUBAIR FABRICS LTD. (FASHION)',0,0,'C');
      $pdf->SetFont('Arial','B',6);
      $pdf->Ln();

      $pdf->Image('../img/ZnZ.jpg',3,3,10);

      $pdf->Ln(0);

      $pdf->SetFont('Arial','B',9);
      $pdf->Cell(85,4,"Pagar, Tongi, Gazipur","0","1","C");
      $pdf->Ln(0);
      $pdf->Cell(85,4,"FINAL INSPECTION","0","1","C");

      //  ..................... for barcode ..........................
      $pdf->Code128(26,17,$barcode_code,50,5);
      $pdf->Ln(0);
      $pdf->setLeftMargin(15);
      $pdf->Cell(50,16,$barcode_code,"0","0","R");
      //  .....................end for barcode ..........................

      $pdf->setLeftMargin(4);
      $pdf->Ln(14);
      $pdf->setTextColor(0,0,0);

      $pdf->setLeftMargin(13);
      $pdf->SetFont('Arial','B',9);
      $pdf->Cell(95,-2,"            " .$date ."                                      " .$kgs, "0", "1","L");
      $pdf->setLeftMargin(4);
      $pdf->Ln(0);
      $pdf->Cell(50,5,"Date : ", "0", "0","L");
      $pdf->Cell(45,5,"Kgs : ", "0", "1","L");
      $pdf->setLeftMargin(13);
      $pdf->SetFont('Arial','',9);
      $pdf->Cell(95,-5,".............................................           ......................................", "0", "0","L");
      $pdf->setLeftMargin(4);

      $pdf->setLeftMargin(4);
      $pdf->Ln(3);
      $pdf->setTextColor(0,0,0);

      $pdf->setLeftMargin(13);
      $pdf->SetFont('Arial','B',9);
      $pdf->Cell(95,-2,"            " .$pp_number."                                                  " .$roll_no, "0", "1","L");
      $pdf->setLeftMargin(4);
      $pdf->Ln(0);
      $pdf->Cell(50,5,"PP No : ", "0", "0","L");
      $pdf->Cell(45,5,"Roll No : ", "0", "1","L");
      $pdf->setLeftMargin(13);
      $pdf->SetFont('Arial','',9);
      $pdf->Cell(95,-5,"............................................                  ................................", "0", "0","L");
      $pdf->setLeftMargin(4);

      $pdf->Ln(3);
      $pdf->setLeftMargin(21);
      $pdf->SetFont('Arial','B',9);
      $pdf->Cell(95,-2,"          " .$work_order_number, "0", "1","L");
      $pdf->setLeftMargin(4);
      $pdf->Ln(0);
      $pdf->Cell(95,5,"Work order No : ", "0", "1","L");
      $pdf->setLeftMargin(21);
      $pdf->SetFont('Arial','',9);
      $pdf->Cell(95,-5,"         ............................................................................", "0", "0","L");
      $pdf->setLeftMargin(4);

      $pdf->Ln(3);
      $pdf->setLeftMargin(21);
      $pdf->SetFont('Arial','B',9);
      $pdf->Cell(95,-2,"          " .$customer_name, "0", "1","L");
      $pdf->setLeftMargin(4);
      $pdf->Ln(0);
      $pdf->Cell(95,5,"Customer : ", "0", "1","L");
      $pdf->setLeftMargin(21);
      $pdf->SetFont('Arial','',9);
      $pdf->Cell(95,-5,".....................................................................................", "0", "0","L");
      $pdf->setLeftMargin(4);

      $pdf->Ln(3);
      $pdf->setLeftMargin(16);
      $pdf->SetFont('Arial','B',9);
      $pdf->Cell(95,-2,"                 " .$shade, "0", "1","L");
      $pdf->setLeftMargin(4);
      $pdf->Ln(0);
      $pdf->Cell(95,5,"Shade : " , "0", "1","L");
      $pdf->setLeftMargin(16);
      $pdf->SetFont('Arial','',9);
      $pdf->Cell(95,-5,"..........................................................................................", "0", "0","L");
      $pdf->setLeftMargin(4);

      $pdf->Ln(3);
      $pdf->setLeftMargin(26);
      $pdf->SetFont('Arial','B',9);
      $pdf->Cell(95,-2,"      " .$construction, "0", "1","L");
      $pdf->setLeftMargin(4);
      $pdf->Ln(0);
      $pdf->Cell(95,5,"Construction : ", "0", "1","L");
      $pdf->setLeftMargin(26);
      $pdf->SetFont('Arial','',9);
      $pdf->Cell(95,-5,"...............................................................................", "0", "0","L");
      $pdf->setLeftMargin(4);


      $pdf->Ln(3);
      $pdf->setLeftMargin(26);
      $pdf->SetFont('Arial','B',9);
      $pdf->Cell(95,-2,"      " .$composition, "0", "1","L");
      $pdf->setLeftMargin(4);
      $pdf->Ln(0);
      $pdf->Cell(95,5,"Composition : ", "0", "1","L");
      $pdf->setLeftMargin(26);
      $pdf->SetFont('Arial','',9);
      $pdf->Cell(95,-5,"...............................................................................", "0", "0","L");
      $pdf->setLeftMargin(4);


      $pdf->Ln(3);
      $pdf->setLeftMargin(13);
      $pdf->SetFont('Arial','B',9);
      $pdf->Cell(95,-2,"              " .$weave ."                                      " .$length, "0", "1","L");
      $pdf->setLeftMargin(4);
      $pdf->Ln(0);
      $pdf->Cell(50,5,"Weave : ", "0", "0","L");
      $pdf->Cell(45,5,"Length : ", "0", "1","L");
      $pdf->setLeftMargin(13);
      $pdf->SetFont('Arial','',9);
      $pdf->Cell(95,-5,"    ..........................................               .................................", "0", "0","L");
      $pdf->setLeftMargin(4);


      $pdf->Ln(3);
      $pdf->setLeftMargin(13);
      $pdf->SetFont('Arial','B',9);
      $pdf->Cell(95,-2,"                      " .$finish_width_in_inch ."                                      " .$grade, "0", "1","L");
      $pdf->setLeftMargin(4);
      $pdf->Ln(0);
      $pdf->Cell(50,5,"Finished Width : ", "0", "0","L");
      $pdf->Cell(45,5,"Grade : ", "0", "1","L");
      $pdf->setLeftMargin(13);
      $pdf->SetFont('Arial','',9);
      $pdf->Cell(95,-5,"       .......................................            ....................................", "0", "0","L");
      $pdf->setLeftMargin(4);


      $pdf->Ln(3);
      $pdf->setLeftMargin(28);
      $pdf->SetFont('Arial','B',9);
      $pdf->Cell(95,-2,"     " .$finished_type, "0", "1","L");
      $pdf->setLeftMargin(4);
      $pdf->Ln(0);
      $pdf->Cell(95,5,"Finished Type : ", "0", "1","L");
      $pdf->setLeftMargin(28);
      $pdf->SetFont('Arial','',9);
      $pdf->Cell(95,-5,".............................................................................", "0", "0","L");
      $pdf->setLeftMargin(4);


      $pdf->Ln(3);
      $pdf->setLeftMargin(13);
      $pdf->SetFont('Arial','B',9);
      $pdf->Cell(95,-2,"                          " .$pallet_no ."                                      " .$type, "0", "1","L");
      $pdf->setLeftMargin(4);
      $pdf->Ln(0);
      $pdf->Cell(50,5,"Pallet No : ", "0", "0","L");
      $pdf->Cell(45,5,"Type : ", "0", "1","L");
      $pdf->setLeftMargin(13);
      $pdf->SetFont('Arial','',9);
      $pdf->Cell(95,-5,"    ..........................................           .....................................", "0", "0","L");
      $pdf->setLeftMargin(4);


      $pdf->Ln(5);
      $pdf->SetFont('Arial','',7);
      $pdf->Cell(95,2,"Goods once cut will not be taken back. pls. Cut the Fabrics according to the Batch No.", "0", "0","C");
      $pdf->Ln(0);


      ob_end_clean();

      $pdf->Output('I', $barcode_code.".pdf");
  



?>

