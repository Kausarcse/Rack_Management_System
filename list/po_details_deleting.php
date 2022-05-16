<?php
// session_start();
// require_once("../login/session.php");
include('../login/db_connection_class.php');
$obj = new DB_Connection_Class();
$obj->connection();



$data_previously_saved = "No";
$data_deleteion_hampering = "No";

$po_details_id = $_POST['po_details_id'];



mysqli_query($con,"BEGIN");
mysqli_query($con,"START TRANSACTION") or die(mysqli_error($con));



	$delete_sql_statement="DELETE FROM `po_details` WHERE `po_details_id`='$po_details_id'";

	mysqli_query($con,$delete_sql_statement) or die(mysqli_error($con));

	if(mysqli_affected_rows($con)<>1)
	{
	
		$data_deleteion_hampering = "Yes";
	
	}

if($data_deleteion_hampering == "No" )
{

	mysqli_query($con,"COMMIT");
	echo "PO Details successfully Deleted.";


}
else
{

	mysqli_query($con,"ROLLBACK");
	echo "PO details not successfully Deleted.";

}

$obj->disconnection();

?>