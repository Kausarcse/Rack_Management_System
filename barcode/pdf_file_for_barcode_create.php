<?php
    session_start();

  	include('../login/db_connection_class.php');
  	$obj = new DB_Connection_Class_Main();
  	$obj->connection();

  	$recording_person_id = 'hriday';
  	$recording_person_name = 'Hriday';
?>



<?php

      $id = $_POST['id'];
      $pp_number = $_POST['pp_number'];
      //$customer_name = $_GET['customer_name'];
      $customer_name = $_POST['customer_name'];
      $buyer = $_POST['buyer'];
      $customer_id = $_POST['customer_id'];
      $work_order_number = $_POST['work_order_number'];
      $gd_number = $_POST['gd_number'];
      $construction = $_POST['construction'];
      $finish_width_in_inch = $_POST['finish_width_in_inch'];
      $roll_no = $_POST['roll_no'];
      $kgs = $_POST['kgs'];
      $composition = $_POST['composition'];
      $shade = $_POST['shade'];
      $weave = $_POST['weave'];
      $length = $_POST['length'];
      $finished_type = $_POST['finished_type'];
      $pallet_no = $_POST['pallet_no'];
      $type = $_POST['type'];
      $grade = $_POST['grade'];

      $ac_holder= $_POST['ac_holder'];
      $order_qty= $_POST['order_qty'];
      $allownce= $_POST['allownce'];
      $rate= $_POST['rate'];
      $process= $_POST['process'];
      $pi_no= $_POST['pi_no'];
      $cut_width= $_POST['cut_width'];
      $style_no= $_POST['style_no'];

      $date = date("Y-m-d");

  if ( ($kgs == 'No_Data') || ($grade == 'undefined') || ($grade == '') || ($length == 'undefined') || ($length == '') ) 
  {
      echo "Enter valid length, grade and kgs";
      exit();
  }

  $sql = "SELECT MAX(id) as max_id FROM roll_information_barcode";
  $result = mysqli_query($con, $sql) or die(mysqli_error($con));
  $row = mysqli_fetch_array($result);
  $max_id = $row['max_id'] + 1;


  $work_order_explode = explode("-",$work_order_number);
  $work_order_final = $work_order_explode[0];

  

  $barcode_code = 'FASHION_'.$work_order_final.'_'.$roll_no;



  $sql = "SELECT *
    FROM   roll_information_barcode
    WHERE  barcode_code = '$barcode_code'
      AND  work_order_number = '$work_order_number'
      AND  roll_no = '$roll_no'
    ";
  $result = mysqli_query($con, $sql) or die(mysqli_error($con)); 
  $row = mysqli_num_rows($result);

  if ($row > 0) 
  {
      echo "No";
  }
  else
  {
      $sql = "INSERT INTO roll_information_barcode (barcode_code, pp_number, customer_name, buyer, customer_id, work_order_number, gd_number, finish_width_in_inch, construction,  roll_no, kgs, composition, shade, weave, length, finished_type, pallet_no, type, grade,ac_holder,order_qty,allownce,rate,process,pi_no,cut_width,style_no,recording_person_id, recording_person_name, recording_time)
      VALUES ('$barcode_code', '$pp_number', '$customer_name', '$buyer', '$customer_id', '$work_order_number', '$gd_number','$finish_width_in_inch', '$construction', '$roll_no', '$kgs', '$composition', '$shade', '$weave', '$length', '$finished_type', '$pallet_no', '$type', '$grade', '$ac_holder', '$order_qty', '$allownce', '$rate', '$process', '$pi_no','$cut_width','$style_no', '$recording_person_id', '$recording_person_name', NOW())";

      mysqli_query($con, $sql);

      echo $barcode_code;



      //include '../fpdf/code128.php';
      // $pdf=new PDF_Code128('P','mm',array(101.6,101.6));

      // $pdf->setTopMargin(3);

      // $pdf->AliasNbPages();
      // $pdf->AddPage();
      // // $pdf->SetFont('Arial','B',25);
      // $pdf->SetAutoPageBreak(false);


      // $pdf->SetFont('Arial','B',10);
      // $pdf->Cell(85,5,'ZABER & ZUBAIR FABRICS LTD. (FASHION)',0,0,'C');
      // $pdf->SetFont('Arial','B',6);
      // $pdf->Ln();

      // $pdf->Image('../img/ZnZ.jpg',3,3,10);

      // $pdf->Ln(0);

      // $pdf->SetFont('Arial','B',9);
      // $pdf->Cell(85,4,"Pagar, Tongi, Gazipur","0","1","C");
      // $pdf->Ln(0);
      // $pdf->Cell(85,4,"FINAL INSPECTION","0","1","C");

      // //  ..................... for barcode ..........................
      // $pdf->Code128(26,17,$barcode_code,50,5);
      // $pdf->Ln(0);
      // $pdf->setLeftMargin(15);
      // $pdf->Cell(50,16,$barcode_code,"0","0","R");
      // //  .....................end for barcode ..........................

      // $pdf->setLeftMargin(4);
      // $pdf->Ln(14);
      // $pdf->setTextColor(0,0,0);

      // $pdf->setLeftMargin(13);
      // $pdf->SetFont('Arial','B',9);
      // $pdf->Cell(95,-2,"            " .$date ."                                      " .$kgs, "0", "1","L");
      // $pdf->setLeftMargin(4);
      // $pdf->Ln(0);
      // $pdf->Cell(50,5,"Date : ", "0", "0","L");
      // $pdf->Cell(45,5,"Kgs : ", "0", "1","L");
      // $pdf->setLeftMargin(13);
      // $pdf->SetFont('Arial','',9);
      // $pdf->Cell(95,-5,".............................................           ......................................", "0", "0","L");
      // $pdf->setLeftMargin(4);

      // $pdf->setLeftMargin(4);
      // $pdf->Ln(3);
      // $pdf->setTextColor(0,0,0);

      // $pdf->setLeftMargin(13);
      // $pdf->SetFont('Arial','B',9);
      // $pdf->Cell(95,-2,"            " .$pp_number."                                                  " .$roll_no, "0", "1","L");
      // $pdf->setLeftMargin(4);
      // $pdf->Ln(0);
      // $pdf->Cell(50,5,"PP No : ", "0", "0","L");
      // $pdf->Cell(45,5,"Roll No : ", "0", "1","L");
      // $pdf->setLeftMargin(13);
      // $pdf->SetFont('Arial','',9);
      // $pdf->Cell(95,-5,"............................................                  ................................", "0", "0","L");
      // $pdf->setLeftMargin(4);

      // $pdf->Ln(3);
      // $pdf->setLeftMargin(21);
      // $pdf->SetFont('Arial','B',9);
      // $pdf->Cell(95,-2,"          " .$work_order_number, "0", "1","L");
      // $pdf->setLeftMargin(4);
      // $pdf->Ln(0);
      // $pdf->Cell(95,5,"Work order No : ", "0", "1","L");
      // $pdf->setLeftMargin(21);
      // $pdf->SetFont('Arial','',9);
      // $pdf->Cell(95,-5,"         ............................................................................", "0", "0","L");
      // $pdf->setLeftMargin(4);

      // $pdf->Ln(3);
      // $pdf->setLeftMargin(21);
      // $pdf->SetFont('Arial','B',9);
      // $pdf->Cell(95,-2,"          " .$customer_name, "0", "1","L");
      // $pdf->setLeftMargin(4);
      // $pdf->Ln(0);
      // $pdf->Cell(95,5,"Customer : ", "0", "1","L");
      // $pdf->setLeftMargin(21);
      // $pdf->SetFont('Arial','',9);
      // $pdf->Cell(95,-5,".....................................................................................", "0", "0","L");
      // $pdf->setLeftMargin(4);

      // $pdf->Ln(3);
      // $pdf->setLeftMargin(16);
      // $pdf->SetFont('Arial','B',9);
      // $pdf->Cell(95,-2,"                 " .$shade, "0", "1","L");
      // $pdf->setLeftMargin(4);
      // $pdf->Ln(0);
      // $pdf->Cell(95,5,"Shade : " , "0", "1","L");
      // $pdf->setLeftMargin(16);
      // $pdf->SetFont('Arial','',9);
      // $pdf->Cell(95,-5,"..........................................................................................", "0", "0","L");
      // $pdf->setLeftMargin(4);

      // $pdf->Ln(3);
      // $pdf->setLeftMargin(26);
      // $pdf->SetFont('Arial','B',9);
      // $pdf->Cell(95,-2,"      " .$construction, "0", "1","L");
      // $pdf->setLeftMargin(4);
      // $pdf->Ln(0);
      // $pdf->Cell(95,5,"Construction : ", "0", "1","L");
      // $pdf->setLeftMargin(26);
      // $pdf->SetFont('Arial','',9);
      // $pdf->Cell(95,-5,"...............................................................................", "0", "0","L");
      // $pdf->setLeftMargin(4);


      // $pdf->Ln(3);
      // $pdf->setLeftMargin(26);
      // $pdf->SetFont('Arial','B',9);
      // $pdf->Cell(95,-2,"      " .$composition, "0", "1","L");
      // $pdf->setLeftMargin(4);
      // $pdf->Ln(0);
      // $pdf->Cell(95,5,"Composition : ", "0", "1","L");
      // $pdf->setLeftMargin(26);
      // $pdf->SetFont('Arial','',9);
      // $pdf->Cell(95,-5,"...............................................................................", "0", "0","L");
      // $pdf->setLeftMargin(4);


      // $pdf->Ln(3);
      // $pdf->setLeftMargin(13);
      // $pdf->SetFont('Arial','B',9);
      // $pdf->Cell(95,-2,"              " .$weave ."                                      " .$length, "0", "1","L");
      // $pdf->setLeftMargin(4);
      // $pdf->Ln(0);
      // $pdf->Cell(50,5,"Weave : ", "0", "0","L");
      // $pdf->Cell(45,5,"Length : ", "0", "1","L");
      // $pdf->setLeftMargin(13);
      // $pdf->SetFont('Arial','',9);
      // $pdf->Cell(95,-5,"    ..........................................               .................................", "0", "0","L");
      // $pdf->setLeftMargin(4);


      // $pdf->Ln(3);
      // $pdf->setLeftMargin(13);
      // $pdf->SetFont('Arial','B',9);
      // $pdf->Cell(95,-2,"                      " .$finish_width_in_inch ."                                      " .$grade, "0", "1","L");
      // $pdf->setLeftMargin(4);
      // $pdf->Ln(0);
      // $pdf->Cell(50,5,"Finished Width : ", "0", "0","L");
      // $pdf->Cell(45,5,"Grade : ", "0", "1","L");
      // $pdf->setLeftMargin(13);
      // $pdf->SetFont('Arial','',9);
      // $pdf->Cell(95,-5,"       .......................................            ....................................", "0", "0","L");
      // $pdf->setLeftMargin(4);


      // $pdf->Ln(3);
      // $pdf->setLeftMargin(28);
      // $pdf->SetFont('Arial','B',9);
      // $pdf->Cell(95,-2,"     " .$finished_type, "0", "1","L");
      // $pdf->setLeftMargin(4);
      // $pdf->Ln(0);
      // $pdf->Cell(95,5,"Finished Type : ", "0", "1","L");
      // $pdf->setLeftMargin(28);
      // $pdf->SetFont('Arial','',9);
      // $pdf->Cell(95,-5,".............................................................................", "0", "0","L");
      // $pdf->setLeftMargin(4);


      // $pdf->Ln(3);
      // $pdf->setLeftMargin(13);
      // $pdf->SetFont('Arial','B',9);
      // $pdf->Cell(95,-2,"                          " .$pallet_no ."                                      " .$type, "0", "1","L");
      // $pdf->setLeftMargin(4);
      // $pdf->Ln(0);
      // $pdf->Cell(50,5,"Pallet No : ", "0", "0","L");
      // $pdf->Cell(45,5,"Type : ", "0", "1","L");
      // $pdf->setLeftMargin(13);
      // $pdf->SetFont('Arial','',9);
      // $pdf->Cell(95,-5,"    ..........................................           .....................................", "0", "0","L");
      // $pdf->setLeftMargin(4);


      // $pdf->Ln(5);
      // $pdf->SetFont('Arial','',7);
      // $pdf->Cell(95,2,"Goods once cut will not be taken back. pls. Cut the Fabrics according to the Batch No.", "0", "0","C");
      // $pdf->Ln(0);


      // ob_end_clean();

      // $pdf->Output();

      // echo $barcode_code;
  }



?>

