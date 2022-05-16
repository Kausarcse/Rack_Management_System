<?php
session_start();
include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

//print_r($_POST);
//exit;

$data_previously_saved = "No";
$data_updated = "No";

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
$barcode_code = $_POST['barcode_code'];

$sql_find_old_cubic_info = "select rack_number as old_rack_number,row_number as old_row_number,cubic_number as old_cubic_number,pallet_no as old_pallet_number from `item_receiving` where `barcode_code` = '$barcode_code'";
$old_result = mysqli_query($con,$sql_find_old_cubic_info) or die(mysqli_error($con));
$row1=mysqli_fetch_assoc($old_result);




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
$shade= $_POST['shade'];
$construction= $_POST['construction'];
$composition= $_POST['composition'];
$weave= $_POST['weave'];
$length= $_POST['length'];
$finished_width= $_POST['finished_width'];
$finished_type= $_POST['finished_type'];



$new_rack_number= $_POST['rack_number'];
$old_rack_number= $row1['old_rack_number'];
$new_row_number= $_POST['row_number'];
$old_row_number= $row1['old_row_number'];
$new_cubic_number= $_POST['cubic_number'];

$old_cubic_number= $row1['old_cubic_number'];


$new_pallet_number= $_POST['pallet_no'];
$old_pallet_number= $row1['old_pallet_number'];



$bin_card_number= $_POST['bin_card_number'];

$quantiy= $_POST['quantiy'];
$uom= $_POST['uom'];
$type= $_POST['type'];
$grade= $_POST['grade'];


// $splitted_date_of_receipt= explode("/",$date_of_receipt);
// $date_of_receipt= $splitted_date_of_receipt[2]."-".$splitted_date_of_receipt[1]."-".$splitted_date_of_receipt[0];








mysqli_query($con,"BEGIN");
mysqli_query($con,"START TRANSACTION") or die(mysqli_error($con));

$select_sql_for_duplicacy="select * from `item_receiving` where `barcode_code` = '$barcode_code' AND `cubic_number`='$new_cubic_number'";

$result = mysqli_query($con,$select_sql_for_duplicacy) or die(mysqli_error($con));



if(mysqli_num_rows($result)>0)
{

	$data_previously_saved="Yes";  

}

else if(mysqli_num_rows($result) < 1)
{
	$insert_sql_statement="UPDATE `item_receiving` SET `rack_number`='$new_rack_number',`row_number`='$new_row_number',`cubic_number`='$new_cubic_number',`recording_person_id`='$recording_person_id',`recording_person_name`='$recording_person_name',`recording_time`= NOW() WHERE `barcode_code` = '$barcode_code'";


	mysqli_query($con, $insert_sql_statement) or die(mysqli_error($con));

	$sql_move_roll="insert into `move_item` 
	( `barcode_code`,`receiving_location`,`received_by`,
	`date_of_receipt`,`roll_no`,`pp_number`,`work_order_number`,
	`gd_number`,`customer_name`,`shade`,`construction`,`composition`,
	`weave`,`length`,`finished_width`,`finished_type`,`type`,`grade`,
	`old_row_number`,`old_rack_number`,`old_cubic_number`,`new_row_number`,
	`new_rack_number`,`new_cubic_number`,`old_pallet_number`,`new_pallet_number`,`bin_card_number`,`quantiy`,
	`uom`,`recording_person_id`,`recording_person_name`,`recording_time` )

	 values ('$barcode_code','$receiving_location','$received_by',
	 '$date_of_receipt','$roll_no','$pp_number','$work_order_number',
	 '$gd_number','$customer_name','$shade','$construction','$composition',
	 '$weave','$length','$finished_width','$finished_type','$type','$grade',
	 '$old_row_number','$old_rack_number','$old_cubic_number','$new_row_number',
	 '$new_rack_number','$new_cubic_number','$old_pallet_number','$new_pallet_number','$bin_card_number','$quantiy',
	 '$uom','$recording_person_id','$recording_person_name',NOW())";

	  mysqli_query($con,$sql_move_roll) or die(mysqli_error($con));



	if(mysqli_affected_rows($con)>0)
	{
	
		$data_updated = "Yes";
		
				
	
	}
	
	
}



if($data_previously_saved == "Yes")
{

	mysqli_query($con,"ROLLBACK");
	echo "Data is previously updated.";

}
else if($data_updated == "Yes" )
{

 	mysqli_query($con,"COMMIT");
 	echo "Data is successfully updated.";

}


$obj->disconnection();

?>