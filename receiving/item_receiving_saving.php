<?php
session_start();
include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

//print_r($_POST);
//exit;

$data_previously_saved = "No";
$data_insertion_hampering = "No";
$on_hand_quantity_update = "No";

$recording_person_id = 'hriday';
$recording_person_name = 'Hriday';

/*
$user_id = $_SESSION['user_id'];
$password = $_SESSION['password'];

$sql = "select * from hrm_info.user_login where user_id='$user_id' and `password`='$password'";
$result = mysqli_query($con,$sql) or die(mysqli_error($con));

if( mysqli_num_rows($result) < 1 )
{

	header('Location:logout.php');

}
else
{
	while($row=mysqli_fetch_array($result))
	{	
		 $user_name=$row['user_name'];	
	}
}

*/

$receiving_location= $_POST['receiving_location'];
$received_by= $_POST['received_by'];

$date_of_receipt= $_POST['date_of_receipt'];
// $splitted_date_of_receipt= explode("/",$date_of_receipt);
// $date_of_receipt= $splitted_date_of_receipt[2]."-".$splitted_date_of_receipt[1]."-".$splitted_date_of_receipt[0];

$roll_no= $_POST['roll_no'];
$pp_number= $_POST['pp_number'];
$work_order_number= $_POST['work_order_number'];
$gd_number= $_POST['gd_number'];
$customer_name= $_POST['customer_name'];
$buyer= $_POST['buyer'];
$shade= $_POST['shade'];
$construction= $_POST['construction'];
$composition= $_POST['composition'];
$weave= $_POST['weave'];
$length= $_POST['length'];
$kgs= $_POST['kgs'];
$pallet_no = $_POST['pallet_no'];
$finished_width= $_POST['finished_width'];
$finished_type= $_POST['finished_type'];
$rack_number= $_POST['rack_number'];
$row_number= $_POST['row_number'];
$cubic_number= $_POST['cubic_number'];
$bin_card_number= $_POST['bin_card_number'];
$quantiy= $_POST['quantiy'];
$uom= $_POST['uom'];
$type= $_POST['type'];
$grade= $_POST['grade'];

$barcode_code = $_POST['barcode_code'];

$ac_holder= $_POST['ac_holder'];
$order_qty= $_POST['order_qty'];
$allownce= $_POST['allownce'];
$rate= $_POST['rate'];
$process= $_POST['process'];
$pi_no= $_POST['pi_no'];
$cut_width= $_POST['cut_width'];
$style_no= $_POST['style_no'];

mysqli_query($con,"BEGIN");
mysqli_query($con,"START TRANSACTION") or die(mysqli_error($con));

$select_sql_for_duplicacy="select * from `item_receiving` where `barcode_code` = '$barcode_code' ";

$result = mysqli_query($con,$select_sql_for_duplicacy) or die(mysqli_error($con));

if(mysqli_num_rows($result)>0)
{

	$data_previously_saved="Yes";

}

else if(mysqli_num_rows($result) < 1)
{
	$insert_sql_statement="insert into `item_receiving` ( `barcode_code`,`receiving_location`,`received_by`,`date_of_receipt`,`roll_no`,`pp_number`,`work_order_number`,`gd_number`,`customer_name`, `buyer`,`shade`,`construction`,`composition`,`weave`,`length`,`kgs`,`pallet_no`,`finished_width`,`finished_type`,`type`,`grade`,`ac_holder`,`order_qty`,`allownce`,`rate`,`process`,`pi_no`,`cut_width`,`style_no`,`row_number`,`rack_number`,`cubic_number`,`bin_card_number`,`quantiy`,`uom`, `active`, `recording_person_id`, `recording_person_name`,`recording_time` ) values ('$barcode_code','$receiving_location','$received_by','$date_of_receipt','$roll_no','$pp_number','$work_order_number','$gd_number','$customer_name', '$buyer','$shade','$construction','$composition','$weave','$length','$kgs','$pallet_no','$finished_width','$finished_type','$type','$grade','$ac_holder', '$order_qty', '$allownce', '$rate', '$process', '$pi_no','$cut_width','$style_no','$row_number','$rack_number','$cubic_number','$bin_card_number','$quantiy','$uom', '1','$recording_person_id','$recording_person_name',NOW())";

	mysqli_query($con, $insert_sql_statement) or die(mysqli_error($con));

	if(mysqli_affected_rows($con)<>1)
	{
	
				$data_insertion_hampering = "Yes";
		
				/************* start activity_log insertion ************/
				
				$activity_log_sql = "INSERT INTO activity_log (`barcode_code`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `transaction_type`, `activity_sql`, `response`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES ( '$barcode_code', '$construction', '$composition', '$weave', '$shade', '$finished_width', '$finished_type', 'receiving', '".mysqli_real_escape_string( $con, $insert_sql_statement)."', 'failed', '$recording_person_id', '$recording_person_name', NOW() )";
										
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
					
					$activity_log_sql = "INSERT INTO activity_log (`barcode_code`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `transaction_type`, `transaction_table_row_id`, `activity_sql`, `response`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES ( '$barcode_code', '$construction', '$composition', '$weave', '$shade', '$finished_width', '$finished_type', 'receiving', '$item_receiving_id', '".mysqli_real_escape_string( $con, $insert_sql_statement)."', 'success', '$recording_person_id', '$recording_person_name', NOW() )";
											
					//echo $activity_log_sql; exit();
					
					mysqli_query($con, $activity_log_sql) or die(mysqli_error($con));
					
											
					if(mysqli_affected_rows($con)<>1)
					{					
						$data_insertion_hampering = "Yes";					
					}
					
					/************* end activity_log insertion ************/
					
								
				
				/************* start datewise_transaction_summary ************/
				
				$sql = "SELECT * FROM datewise_transaction_summary WHERE `transaction_date` = '$date_of_receipt' AND `work_order_number` = '$work_order_number' AND `gd_number` = '$gd_number' AND `customer_name` = '$customer_name' AND `construction` = '$construction' AND `composition` = '$composition' AND `weave` = '$weave' AND `shade` = '$shade' AND `finished_width` = '$finished_width' AND `finished_type` = '$finished_type'";
				
				$result = mysqli_query($con, $sql) or die(mysqli_error($con));
				$insert = 0;
				
				if( mysqli_num_rows($result) < 1 ) // no transaction on that date of this item
				{
				
					$datewise_transaction_sql = "INSERT INTO datewise_transaction_summary (`transaction_date`, `work_order_number`, `gd_number`, `customer_name`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `total_receiving`) VALUES ( '$date_of_receipt', '$work_order_number', '$gd_number', '$customer_name', '$construction', '$composition', '$weave', '$shade', '$finished_width', '$finished_type', '$length')";
					$insert = 1;
				}
				
				else
				{
					
					$datewise_transaction_sql = "UPDATE datewise_transaction_summary SET `total_receiving` = (`total_receiving` + $length) WHERE `transaction_date` = '$date_of_receipt' AND `work_order_number` = '$work_order_number' AND `gd_number` = '$gd_number' AND `customer_name` = '$customer_name' AND `construction` = '$construction' AND `composition` = '$composition' AND `weave` = '$weave' AND `shade` = '$shade' AND `finished_width` = '$finished_width' AND `finished_type` = '$finished_type' ";
				
				}
				
				//echo $data_insertion_hampering."-----------------".$datewise_transaction_sql; exit();
					
				mysqli_query($con, $datewise_transaction_sql) or die(mysqli_error($con));
					
				if(mysqli_affected_rows($con)<>1)
				{					
					$data_insertion_hampering = "Yes";
					
					
					
					/************* start activity_log insertion ************/
						
					$activity_log_sql = "INSERT INTO activity_log (`barcode_code`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `transaction_type`, `activity_sql`, `response`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES ( '$barcode_code', '$construction', '$composition', '$weave', '$shade', '$finished_width', '$finished_type', 'receiving', '".mysqli_real_escape_string($con, $datewise_transaction_sql)."', 'failed', '$recording_person_id', '$recording_person_name', NOW() )";
					
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
							
						$activity_log_sql = "INSERT INTO activity_log (`barcode_code`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `transaction_type`, `transaction_table_row_id`, `activity_sql`, `response`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES ( '$barcode_code', '$construction', '$composition', '$weave', '$shade', '$finished_width', '$finished_type', 'receiving', $item_receiving_id, '".mysqli_real_escape_string($con, $datewise_transaction_sql)."', 'success', '$recording_person_id', '$recording_person_name', NOW() )";
											
					//echo $activity_log_sql; exit();
					
					mysqli_query($con, $activity_log_sql) or die(mysqli_error($con));
					
											
					if(mysqli_affected_rows($con)<>1)
					{					
						$data_insertion_hampering = "Yes";					
					}
						
						/************* end activity_log insertion ************/
				}	
						
					
	


	//for on hand quantity add

	$select_sql_for_duplicacy3 ="select * from `item_info` where `customer_name`='$customer_name' and `gd_number`='$gd_number' and `work_order_number`='$work_order_number' and `shade`='$shade' and `construction`='$construction' and `composition`='$composition' and `weave`='$weave' and `finished_width`='$finished_width' and `finished_type`='$finished_type'";

	$result = mysqli_query($con, $select_sql_for_duplicacy3) or die(mysqli_error($con));

	if(mysqli_num_rows($result) < 1)
	{

		$insert_sql_statement3="insert into `item_info` ( `customer_name`,`buyer`,`gd_number`,`work_order_number`,`shade`,`construction`,`composition`,`weave`,`finished_width`,`finished_type`,`on_hand_stock`, `uom`,`total_roll`, `ac_holder`,`order_qty`,`allownce`,`rate`,`process`,`pi_no`,`cut_width`,`style_no`, `recording_person_id`,`recording_person_name`,`recording_time` ) values ('$customer_name', '$buyer','$gd_number', '$work_order_number', '$shade','$construction','$composition','$weave','$finished_width','$finished_type', '$length', 'yds', '1', '$ac_holder', '$order_qty', '$allownce', '$rate', '$process', '$pi_no','$cut_width','$style_no', '$recording_person_id','$recording_person_name',NOW())";

		mysqli_query($con,$insert_sql_statement3) or die(mysqli_error($con));

		if(mysqli_affected_rows($con)<>1)
		{
		
			$data_insertion_hampering = "Yes";

			/************* start activity_log insertion ************/
							
				$activity_log_sql = "INSERT INTO activity_log (`barcode_code`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `transaction_type`, `activity_sql`, `response`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES ( '$barcode_code', '$construction', '$composition', '$weave', '$shade', '$finished_width', '$finished_type', 'receiving', '".mysqli_real_escape_string($con, $insert_sql_statement3)."', 'failed', '$recording_person_id', '$recording_person_name', NOW() )";
				
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
					
				$activity_log_sql = "INSERT INTO activity_log (`barcode_code`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `transaction_type`, `transaction_table_row_id`, `activity_sql`, `response`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES ( '$barcode_code', '$construction', '$composition', '$weave', '$shade', '$finished_width', '$finished_type', 'receiving', $item_receiving_id, '".mysqli_real_escape_string($con, $insert_sql_statement3)."', 'success', '$recording_person_id', '$recording_person_name', NOW() )";
									
			//echo $activity_log_sql; exit();
			
			mysqli_query($con, $activity_log_sql) or die(mysqli_error($con));
			
									
			if(mysqli_affected_rows($con)<>1)
			{					
				$data_insertion_hampering = "Yes";					
			}
				
			/************* end activity_log insertion ************/
		}

	}
	else 
	{
			$row = mysqli_fetch_array($result);
			$fetch_length = $row['on_hand_stock'];
			$total_roll = $row['total_roll'] + 1;
			$total_length = $fetch_length + $length;

			$update_sql_statement="UPDATE `item_info` SET `on_hand_stock` = '$total_length', `total_roll` = '$total_roll'
									WHERE `shade` = '$shade'
									  AND `construction` = '$construction'
									  AND `customer_name` = '$customer_name'
									  AND `gd_number` = '$gd_number'
									  AND `work_order_number` = '$work_order_number'
									  AND `composition` = '$composition'
									  AND `weave` = '$weave'
									  AND `finished_width` = '$finished_width'
									  AND `finished_type` = '$finished_type'";

			mysqli_query($con, $update_sql_statement) or die(mysqli_error($con));

			if(mysqli_affected_rows($con)<>1)
			{
			
				$data_insertion_hampering = "Yes";

				/************* start activity_log insertion ************/
							
				$activity_log_sql = "INSERT INTO activity_log (`barcode_code`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `transaction_type`, `activity_sql`, `response`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES ( '$barcode_code', '$construction', '$composition', '$weave', '$shade', '$finished_width', '$finished_type', 'receiving', '".mysqli_real_escape_string($con, $update_sql_statement)."', 'failed', '$recording_person_id', '$recording_person_name', NOW() )";
				
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
								
							$activity_log_sql = "INSERT INTO activity_log (`barcode_code`, `construction`, `composition`, `weave`, `shade`, `finished_width`, `finished_type`, `transaction_type`, `transaction_table_row_id`, `activity_sql`, `response`, `recording_person_id`, `recording_person_name`, `recording_time`) VALUES ( '$barcode_code', '$construction', '$composition', '$weave', '$shade', '$finished_width', '$finished_type', 'receiving', $item_receiving_id, '".mysqli_real_escape_string($con, $update_sql_statement)."', 'success', '$recording_person_id', '$recording_person_name', NOW() )";
												
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


//for item creation 

// $select_sql_for_duplicacy_2 = "select * from `item_creation` where `shade`='$shade' and `construction`='$construction' and `composition`='$composition' and `weave`='$weave' and `finished_width`='$finished_width' and `finished_type`='$finished_type'";

// $result = mysqli_query($con, $select_sql_for_duplicacy_2) or die(mysqli_error($con));

// if(mysqli_num_rows($result)>0)
// {

// 	$data_previously_saved="Yes";

// }
// else if(mysqli_num_rows($result) < 1)
// {

// 	$insert_sql_statement2="insert into `item_creation` ( `shade`,`construction`,`composition`,`weave`,`finished_width`,`finished_type`,`recording_person_id`,`recording_person_name`,`recording_time` ) values ('$shade','$construction','$composition','$weave','$finished_width','$finished_type','$recording_person_id','$recording_person_name',NOW())";

// 	mysqli_query($con, $insert_sql_statement2) or die(mysqli_error($con));

// 	if(mysqli_affected_rows($con)<>1)
// 	{
	
// 		$data_insertion_hampering = "Yes";
// 	} 
// }

// mysqli_query($con,"COMMIT");
// echo "Data is successfully saved.";


if($data_previously_saved == "Yes")
{

	mysqli_query($con,"ROLLBACK");
	echo "Data is previously saved.";

}
else if($data_insertion_hampering == "No" )
{

 	mysqli_query($con,"COMMIT");
 	echo "Data is successfully saved. ";

}
else
{

	mysqli_query($con,"ROLLBACK");
	echo "Data is not successfully saved.";

}

$obj->disconnection();

?>
