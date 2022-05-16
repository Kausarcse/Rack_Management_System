<?php
session_start();
require_once("../login/session.php");
include('../login/db_connection_class.php');
$obj = new DB_Connection_Class();
$obj->connection();



$data_previously_saved = "No";
$data_insertion_hampering = "No";
/*$user_name ="Iftekhar";
$user_id ="Iftekhar";
$password ="1234";*/

$user_id = $_SESSION['user_id'];
$password = $_SESSION['password'];
$user_name = $_SESSION['user_name'];



$travel_card_id= $_POST['travel_card_id'];
$user_id = $_SESSION['user_id'];
$password = $_SESSION['password'];
$user_name = $_SESSION['user_name'];

$travel_card_creation_date= $_POST['travel_card_creation_date'];


$po_number= $_POST['po_number'];

$splitted_customer= explode("?fs?",$po_number);
$po_number=$splitted_customer[0];
$po_id=$splitted_customer[1];

$po_details_id= $_POST['po_details_id'];

$liner_consumption_calc= $_POST['liner_consumption_calc'];
$media_consumption_calc= $_POST['media_consumption_calc'];
$sqm_consumption_calc= $_POST['sqm_consumption_calc'];
$total_consumption= $_POST['total_consumption'];

mysqli_query($con,"BEGIN");
mysqli_query($con,"START TRANSACTION") or die(mysqli_error());


	  $update_sql_statement="UPDATE `travel_card_details`
							   SET  
									`travel_card_creation_date`='$travel_card_creation_date',
									`po_id`='$po_id',
									`po_details_id`='$po_details_id',

	                                `liner_consumption_calc`='$liner_consumption_calc',
	                                `media_consumption_calc`='$media_consumption_calc',
	                                `sqm_consumption_calc`='$sqm_consumption_calc',
	                                `total_consumption`='$total_consumption',
	                                `recording_person_name`='$user_name',
	                                `recording_time`= NOW() 
	                          WHERE `travel_card_id`= '$travel_card_id'";

   
	mysqli_query($con,$update_sql_statement) or die(mysqli_error($con));

	if(mysqli_affected_rows($con)<>1)
	{
	
		$data_insertion_hampering = "Yes";
	
	}


if($data_previously_saved == "Yes")
{

	mysqli_query($con,"ROLLBACK");
	echo "Data is previously saved.";

}
else if($data_insertion_hampering == "No" )
{

	mysqli_query($con,"COMMIT");
	echo "Data is successfully updated.";

}
else
{

	mysqli_query($con,"ROLLBACK");
	echo "Data is not successfully updated.";

}

$obj->disconnection();

?>
