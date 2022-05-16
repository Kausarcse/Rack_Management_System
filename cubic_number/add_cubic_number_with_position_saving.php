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

$rack = $_POST['rack'];
$number = $_POST['number'];
$cubic_number = $_POST['cubic_number'];



mysqli_query($con,"BEGIN");
mysqli_query($con,"START TRANSACTION") or die(mysqli_error($con));

$select_sql_for_duplicacy="select * from `cubic_number_position` where `cubic_number` = '$cubic_number'";

$result = mysqli_query($con,$select_sql_for_duplicacy) or die(mysqli_error($con));

if(mysqli_num_rows($result)>0)
{

	$data_previously_saved="Yes";

}

else if(mysqli_num_rows($result) < 1)
{


	$insert_sql_statement="insert into `cubic_number_position` ( `rack`,`number`,`cubic_number`,`recording_person_id`,`recording_person_name`,`recording_time` ) values ('$rack','$number','$cubic_number','$recording_person_id','$recording_person_name',NOW())";

	mysqli_query($con,$insert_sql_statement) or die(mysqli_error($con));

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
	echo "Data is successfully saved.";

}
else
{

	mysqli_query($con,"ROLLBACK");
	echo "Data is not successfully saved.";

}

$obj->disconnection();

?>
