<?php
session_start();
include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();


$data_previously_saved = "No";
$data_insertion_hampering = "No";
$on_hand_quantity_update = "No";

$recording_person_id = '123';
$recording_person_name = 'Hriday';


$work_order_number= $_POST['work_order_number'];
$gd_number= $_POST['gd_number'];
$customer_name= $_POST['customer_name'];
$buyer= $_POST['buyer'];
$customer_id= $_POST['customer_id'];
$construction= $_POST['construction'];
$finish_width_in_inch= $_POST['finish_width_in_inch'];
$roll_no= $_POST['roll_no'];
$composition= $_POST['composition'];
$shade= $_POST['shade'];
$weave= $_POST['weave'];
$length= $_POST['length'];
$kg= $_POST['kg'];
$finished_type= $_POST['finished_type'];
$grade= $_POST['grade'];

$order_quantity= $_POST['order_quantity'];
$actual_finished_width= $_POST['actual_finished_width'];
$actual_cuttable_width= $_POST['actual_cuttable_width'];
$problems_point= $_POST['problems_point'];
$points_per_yds= $_POST['points_per_yds'];
$pass_fail= $_POST['pass_fail'];

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


//for item creation 

$select_sql_for_duplicacy_2 = "select * from `packing_list` where `work_order_number`='$work_order_number' and `roll_no`='$roll_no' and `shade`='$shade' and `construction`='$construction' and `composition`='$composition' and `weave`='$weave' and `finish_width_in_inch`='$finish_width_in_inch' and `finished_type`='$finished_type'";

$result = mysqli_query($con, $select_sql_for_duplicacy_2) or die(mysqli_error($con));

if(mysqli_num_rows($result)>0)
{

	$data_previously_saved="Yes";

}
else if(mysqli_num_rows($result) < 1)
{

	$insert_sql_statement2="insert into `packing_list` ( `work_order_number`,`gd_number`,`customer_name`, `buyer`,`customer_id`,`construction`,`finish_width_in_inch`,`roll_no`,`composition`,`shade`,`weave`,`length`, `kg`,`finished_type`,`grade`,`order_quantity`,`actual_finished_width`,`actual_cuttable_width`, `problems_point`,`points_per_yds`, `pass_fail`, `ac_holder`,`order_qty`,`allownce`,`rate`,`process`,`pi_no`,`cut_width`,`style_no`,`recording_person_id`,`recording_person_name`,`recording_time` ) values ('$work_order_number','$gd_number','$customer_name','$buyer','$customer_id','$construction','$finish_width_in_inch','$roll_no','$composition', '$shade', '$weave', '$length', '$kg', '$finished_type', '$grade', '$order_quantity', '$actual_finished_width', '$actual_cuttable_width', '$problems_point', '$points_per_yds', '$pass_fail', '$ac_holder', '$order_qty', '$allownce', '$rate', '$process', '$pi_no','$cut_width','$style_no','$recording_person_id', '$recording_person_name', NOW())";
 
	mysqli_query($con, $insert_sql_statement2) or die(mysqli_error($con));

	if(mysqli_affected_rows($con)<>1)
	{
	
		$data_insertion_hampering = "Yes";
	}
}




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
