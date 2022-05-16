<?php 
	// include('../db_znzqc_connection_class.php');
	// $obj2 = new DB_Connection_Class();
	// $obj2->connection();

  include('../login/db_connection_class.php');
  $obj = new DB_Connection_Class_Main();
  $obj->connection();

	$id = $_GET['id'];
	$pp_number = $_GET['pp_number'];
	//$customer_name = $_GET['customer_name'];
	$customer_name = $_GET['customer_name'];
      $customer_id = $_GET['customer_id'];
      $work_order_number = $_GET['work_order_number'];
      $gd_number = $_GET['gd_number'];
	$construction = $_GET['construction'];
	$finish_width_in_inch = $_GET['finish_width_in_inch'];
	$roll_no = $_GET['roll_no'];
	$kgs = $_GET['kgs'];
	$composition = $_GET['composition'];
	$shade = $_GET['shade'];
	$weave = $_GET['weave'];
	$length = $_GET['length'];
	$finished_type = $_GET['finished_type'];
      $pallet_no = $_GET['pallet_no'];
      $type = $_GET['type'];
      $grade = $_GET['grade'];

      

  $sql = "SELECT MAX(id) as max_id FROM roll_information_barcode";
  $result = mysqli_query($con, $sql) or die(mysqli_error($con));
  $row = mysqli_fetch_array($result);
  $max_id = $row['max_id'] + 1;


  $work_order_explode = explode("-",$work_order_number);
  $work_order_final = $work_order_explode[0];



	
?>

<div class="col-sm-12 col-md-12 col-lg-10">
       <div class="panel panel-default">
            

            
       </div>

	   <div class="form-group form-group-sm">
                <div class="col-sm-offset-3 col-sm-5">

                    <?php 
                        $value= $pp_number."?fs?".$customer_id."?fs?".$construction."?fs?".$finish_width_in_inch."?fs?".$roll_no."?fs?".$kgs."?fs?".$composition."?fs?".$shade."?fs?".$weave."?fs?".$length."?fs?".$finished_type."?fs?".$customer_name."?fs?".$work_order_number."?fs?".$id."?fs?".$gd_number."?fs?".$pallet_no."?fs?".$type."?fs?".$grade."?fs?".$work_order_final; 
                    ?> 
                  
                    <a target="_blank" href="all_it_asset_forms/barcode/pdf_file_for_barcode_create.php?pp_id=<?php echo urlencode($value); ?>">
                      <button type="button" id="pdf_file_for_partial_test_trf_washing_lab" name="pdf_file_for_partial_test_trf_washing_lab"  class="btn btn-success btn-xs">Barcode Generation</button>
                    </a>               
                </div>
          </div>

</div>   <!-- End of <div class="panel panel-default"> -->

