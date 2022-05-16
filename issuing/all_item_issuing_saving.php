<?php
session_start();
include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();


$data_previously_saved = "No";
$data_insertion_hampering = "No";
$on_hand_quantity_update = "No";

$recording_person_id = 'hriday';
$recording_person_name = 'Hriday';

 $date_of_delivery_stick = $_POST['date_of_delivery'];

$splitted_date_of_delivery = explode("/",$date_of_delivery_stick);
$date_of_delivery = $splitted_date_of_delivery[2]."-".$splitted_date_of_delivery[0]."-".$splitted_date_of_delivery[1];
$count = (int) $_POST['count'];




for($i=1; $i<= $count; $i++)
{
    $work_order_number= $_POST['work_order_number'.$i];
    $barcode_code = $_POST['barcode_code_main_'.$i];


	mysqli_query($con,"BEGIN");
	mysqli_query($con,"START TRANSACTION") or die(mysqli_error($con));


    $sql_data_for_issuing = "SELECT * FROM `item_receiving` WHERE `barcode_code` = '$barcode_code'";
    $result_data_for_issuing = mysqli_query($con,$sql_data_for_issuing) or die(mysqli_error($con));
    $rows = mysqli_fetch_assoc($result_data_for_issuing);



	$receiving_location= "zzfl_wearhouse";
    $issued_by= "Hriday";

    $date_of_receipt= date('Y-m-d');

	$roll_no= $rows['roll_no'];
	$pp_number= $rows['pp_number'];
	$work_order_number= $rows['work_order_number'];
	$gd_number= $rows['gd_number'];
	$customer_name= $rows['customer_name'];
	$shade= $rows['shade'];
	$construction= $rows['construction'];
	$composition= $rows['composition'];
	$weave= $rows['weave'];
	$length= $rows['length'];
	$kgs= $rows['kgs'];
	$pallet_no = $rows['pallet_no'];
	$finished_width= $rows['finished_width'];
	$finished_type= $rows['finished_type'];
	$rack_number= $rows['rack_number'];
	$row_number= $rows['row_number'];
	$cubic_number= $rows['cubic_number'];
    $bin_card_number= $rows['bin_card_number'];
	$quantiy= $rows['quantiy'];
	$uom= $rows['uom'];
	$type= $rows['type'];
	$grade= $rows['grade'];
	$barcode_code = $rows['barcode_code'];

	$ac_holder= $rows['ac_holder'];
	$order_qty= $rows['order_qty'];
	$allownce= $rows['allownce'];
	$rate= $rows['rate'];
	$process= $rows['process'];
	$pi_no= $rows['pi_no'];
	$cut_width= $rows['cut_width'];
	$style_no= $rows['style_no'];

	$select_sql_for_duplicacy="SELECT * FROM `item_issuing` WHERE `barcode_code` = '$barcode_code'";

	$result = mysqli_query($con,$select_sql_for_duplicacy) or die(mysqli_error($con));

	if(mysqli_num_rows($result)>0)
	{

		$data_previously_saved="Yes";

	}

	else
	{
		$insert_sql_statement="INSERT INTO `item_issuing` ( `barcode_code`,`receiving_location`,`issued_by`,`date_of_receipt`,`roll_no`,`pp_number`,`work_order_number`,`gd_number`,`customer_name`,`shade`,`construction`,`composition`,`weave`,`length`,`kgs`,`pallet_no`,`finished_width`,`finished_type`,`type`,`grade`,`row_number`,`rack_number`,`cubic_number`,`bin_card_number`,`quantiy`,`uom`, `ac_holder`,`order_qty`,`allownce`,`rate`,`process`,`pi_no`,`cut_width`,`style_no`, `recording_person_id`,`recording_person_name`,`recording_time` ) VALUES ('$barcode_code','$receiving_location','$issued_by','$date_of_receipt','$roll_no','$pp_number','$work_order_number','$gd_number','$customer_name','$shade','$construction','$composition','$weave','$length','$kgs','$pallet_no','$finished_width','$finished_type','$type','$grade','$row_number','$rack_number','$cubic_number','$bin_card_number','$quantiy','$uom', '$ac_holder', '$order_qty', '$allownce', '$rate', '$process', '$pi_no','$cut_width','$style_no', '$recording_person_id','$recording_person_name',NOW())";

		mysqli_query($con, $insert_sql_statement) or die(mysqli_error($con));

		

		if(mysqli_affected_rows($con)<>1)
		{
		
					$data_insertion_hampering = "Yes";
			
					/************* start activity_log insertion ************/
					
					$activity_log_sql = "INSERT INTO activity_log (`barcode_code`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `transaction_type`, `activity_sql`, `response`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES ( '$barcode_code', '$construction', '$composition', '$weave', '$shade', '$finished_width', '$finished_type', 'issuing', '".mysqli_real_escape_string( $con, $insert_sql_statement)."', 'failed', '$recording_person_id', '$recording_person_name', NOW() )";
											
					//echo $activity_log_sql; exit();
					
					mysqli_query($con, $activity_log_sql) or die(mysqli_error($con));
					
											
					if(mysqli_affected_rows($con)<>1)
					{					
						$data_insertion_hampering = "Yes";					
					}
					
					/************* end activity_log insertion ************/
		
		}
		
		else 
		{ 



						$item_receiving_id = mysqli_insert_id($con);		
					
					
						/************* start activity_log insertion ************/
						
						$activity_log_sql = "INSERT INTO activity_log (`barcode_code`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `transaction_type`, `transaction_table_row_id`, `activity_sql`, `response`, `recording_person_id`, `recording_person_name`, `recording_time`) 
															VALUES ( '$barcode_code', '$construction', '$composition', '$weave', '$shade', '$finished_width', '$finished_type', 'issuing', '$item_receiving_id', '".mysqli_real_escape_string( $con, $insert_sql_statement)."', 'success', '$recording_person_id', '$recording_person_name', NOW() )";
												
						//echo $activity_log_sql; exit();
						
						mysqli_query($con, $activity_log_sql) or die(mysqli_error($con));
						
												
						if(mysqli_affected_rows($con)<>1)
						{					
							$data_insertion_hampering = "Yes";					
						}
						else
						{
							$item_receving_update = "UPDATE item_receiving
														SET active = '0'
														WHERE barcode_code = '$barcode_code'
														AND work_order_number = '$work_order_number'
														";											
							mysqli_query($con, $item_receving_update) or die(mysqli_error($con));
						}
						
						/************* end activity_log insertion ************/
						
									
					
					/************* start datewise_transaction_summary ************/
					
					$sql = "SELECT * FROM datewise_transaction_summary WHERE `transaction_date` = '$date_of_delivery' AND `work_order_number` = '$work_order_number' AND `gd_number` = '$gd_number' AND `customer_name` = '$customer_name' AND `construction` = '$construction' AND `composition` = '$composition' AND `weave` = '$weave' AND `shade` = '$shade' AND `finished_type` = '$finished_type'";
					
					$result = mysqli_query($con, $sql) or die(mysqli_error($con));
					$insert = 0;
					
					if( mysqli_num_rows($result) < 1 ) // no transaction on that date of this item
					{

						//echo "Please receive before issuing."; 
						$datewise_transaction_sql = "INSERT INTO datewise_transaction_summary (`transaction_date`, `work_order_number`, `gd_number`, `customer_name`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `total_receiving`,`total_issuing`) VALUES ( '$date_of_delivery', '$work_order_number', '$gd_number', '$customer_name', '$construction', '$composition', '$weave', '$shade', '$finished_width', '$finished_type',0,'$length')";
						$insert = 1;
					}
					
					else
					{
						
						$datewise_transaction_sql = "UPDATE datewise_transaction_summary SET `total_issuing` = (`total_issuing` + $length) WHERE `transaction_date` = '$date_of_delivery' AND `work_order_number` = '$work_order_number' AND `gd_number` = '$gd_number' AND `customer_name` = '$customer_name' AND `construction` = '$construction' AND `composition` = '$composition' AND `weave` = '$weave' AND `shade` = '$shade' AND `finished_type` = '$finished_type' ";
					
					}
					
					//echo $data_insertion_hampering."-----------------".$datewise_transaction_sql; exit();
						
					mysqli_query($con, $datewise_transaction_sql) or die(mysqli_error($con));
						
					if(mysqli_affected_rows($con)<>1)
					{					
						$data_insertion_hampering = "Yes";
						
						/************* start activity_log insertion ************/
							
						$activity_log_sql = "INSERT INTO activity_log (`barcode_code`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `transaction_type`, `activity_sql`, `response`, `recording_person_id`, `recording_person_name`, `recording_time`) 
															VALUES ( '$barcode_code', '$construction', '$composition', '$weave', '$shade', '$finished_width', '$finished_type', 'issuing', '".mysqli_real_escape_string($con, $datewise_transaction_sql)."', 'failed', '$recording_person_id', '$recording_person_name', NOW() )";
						
						//echo $activity_log_sql; exit();
						
						mysqli_query($con, $activity_log_sql) or die(mysqli_error($con));
						
												
						if(mysqli_affected_rows($con)<>1)
						{					
							$data_insertion_hampering = "Yes";					
						}
						
						/************* end activity_log insertion ************/
					}
					
					/************* end datewise_transaction_summary ************/
					
					else
					{
							
							if ($insert == 1) 
							{
								$item_receiving_id = mysqli_insert_id($con);
							}
							else
							{
								$row = mysqli_fetch_array($result);

								$item_receiving_id = $row['id'];
							}
							/************* start activity_log insertion ************/
								
							$activity_log_sql = "INSERT INTO activity_log (`barcode_code`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `transaction_type`, `transaction_table_row_id`, `activity_sql`, `response`, `recording_person_id`, `recording_person_name`, `recording_time`) 
																VALUES ( '$barcode_code', '$construction', '$composition', '$weave', '$shade', '$finished_width', '$finished_type', 'issuing', $item_receiving_id, '".mysqli_real_escape_string($con, $datewise_transaction_sql)."', 'success', '$recording_person_id', '$recording_person_name', NOW() )";
												
						//echo $activity_log_sql; exit();
						
						mysqli_query($con, $activity_log_sql) or die(mysqli_error($con));
						
												
						if(mysqli_affected_rows($con)<>1)
						{					
							$data_insertion_hampering = "Yes";					
						}
							
							/************* end activity_log insertion ************/
					}	
							
						
		


		//for on hand quantity add

		$select_sql_for_duplicacy3 ="SELECT * FROM `item_info` WHERE `customer_name`='$customer_name' and `gd_number`='$gd_number' and `work_order_number`='$work_order_number' and `shade`='$shade' and `construction`='$construction' and `composition`='$composition' and `weave`='$weave' and `finished_width`='$finished_width' and `finished_type`='$finished_type'";

		$result = mysqli_query($con, $select_sql_for_duplicacy3) or die(mysqli_error($con));

		if(mysqli_num_rows($result) < 1)
		{

			

		}
		else 
		{
				$row = mysqli_fetch_array($result);
				$fetch_length = $row['on_hand_stock'];
				$total_roll = $row['total_roll'] - 1;
				$total_length = $fetch_length - $length;

				$update_sql_statement="UPDATE item_info SET on_hand_stock = '$total_length', total_roll = '$total_roll' 
				                        WHERE work_order_number = '$work_order_number'";

				mysqli_query($con, $update_sql_statement) or die(mysqli_error($con));

				if(mysqli_affected_rows($con)<>1)
				{
				
					$data_insertion_hampering = "Yes";

					/************* start activity_log insertion ************/
								
					$activity_log_sql = "INSERT INTO activity_log (`barcode_code`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `transaction_type`, `activity_sql`, `response`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES ( '$barcode_code', '$construction', '$composition', '$weave', '$shade', '$finished_width', '$finished_type', 'issuing', '".mysqli_real_escape_string($con, $update_sql_statement)."', 'failed', '$recording_person_id', '$recording_person_name', NOW() )";
					
					//echo $activity_log_sql; exit();
					
					mysqli_query($con, $activity_log_sql) or die(mysqli_error($con));
					
											
					if(mysqli_affected_rows($con)<>1)
					{					
						$data_insertion_hampering = "Yes";					
					}
					
					/************* end activity_log insertion ************/
				
				}
				else
				{

							$item_receiving_id = $row['id'];

							/************* start activity_log insertion ************/
									
							$activity_log_sql = "INSERT INTO activity_log (`barcode_code`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `transaction_type`, `transaction_table_row_id`, `activity_sql`, `response`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES ( '$barcode_code', '$construction', '$composition', '$weave', '$shade', '$finished_width', '$finished_type', 'issuing', $item_receiving_id, '".mysqli_real_escape_string($con, $update_sql_statement)."', 'success', '$recording_person_id', '$recording_person_name', NOW() )";
													
							//echo $activity_log_sql; exit();
							
							mysqli_query($con, $activity_log_sql) or die(mysqli_error($con));
							
													
							if(mysqli_affected_rows($con)<>1)
							{					
								$data_insertion_hampering = "Yes";					
							}
								
								/************* end activity_log insertion ************/
				}
			}	
		}
	}


}




if($data_previously_saved == "Yes")
{

	mysqli_query($con,"ROLLBACK");
	echo "Data is previously saved.";

}
else if($data_insertion_hampering == "No" )
{



	$sql_update_unloading_plan = "UPDATE `unloading_plan` SET `active`='0' WHERE work_order_number = '$work_order_number' AND date_of_delivery='$date_of_delivery_stick' AND active='1'";
    mysqli_query($con,$sql_update_unloading_plan);

 	mysqli_query($con,"COMMIT");
 	echo "Data is successfully issued. ";

}
else
{

	mysqli_query($con,"ROLLBACK");
	echo "Data is not successfully issued.";

}

$obj->disconnection();

?>
