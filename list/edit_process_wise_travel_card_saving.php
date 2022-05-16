

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

/*$user_id = $_SESSION['user_id'];
$password = $_SESSION['password'];
$user_name = $_SESSION['user_name'];*/

$row_id = $_POST['row_id'];
$travel_card_creation_date= $_POST['travel_card_creation_date'];
$travel_card_id= $_POST['travel_card_id'];
$before_process_quantity= $_POST['before_process_quantity'];
$process_quantity= $_POST['process_quantity'];
$actual_ratio= $_POST['actual_ratio'];
$actual_roll_size= $_POST['actual_roll_size'];
$actual_used_linear= $_POST['actual_used_linear'];
$actual_used_medium= $_POST['actual_used_medium'];
$process_wastage= $_POST['process_wastage'];





$process_name= $_POST['process_name'];

$split_process_name=explode("?fs?", $process_name);
$process_name=$split_process_name[0];
$process_id=$split_process_name[1];

 $po_number= $_POST['po_number'];
 $po_id= $_POST['po_id'];



$po_details_id= $_POST['po_details_id'];

$liner_consumption_calc= $_POST['liner_consumption_calc'];
$media_consumption_calc= $_POST['media_consumption_calc'];
$sqm_consumption_calc= $_POST['sqm_consumption_calc'];
$total_consumption= $_POST['total_consumption'];

$paper_type_linear = $_POST['paper_type_linear'];
$paper_type_medium = $_POST['paper_type_medium'];
$paper_type_medium_1 = $_POST['paper_type_medium_1'];
$paper_type_linear_1 = $_POST['paper_type_linear_1'];

$score_or_creez_size = $_POST['score_or_creez_size'];
$score_or_creez_size_1 = $_POST['score_or_creez_size_1'];
$score_or_creez_size_2 = $_POST['score_or_creez_size_2'];

$slotting_size = $_POST['slotting_size'];
$slotting_size_1 = $_POST['slotting_size_1'];
$slotting_size_2 = $_POST['slotting_size_2'];
$slotting_size_2 = $_POST['slotting_size_2'];



mysqli_query($con,"BEGIN");
mysqli_query($con,"START TRANSACTION") or die(mysqli_error($con));


    
	
	/*$data_previously_saved="Yes";*/

	/***********************************Checking travel_card_details_for_transactions***************************************************/

				    $select_sql_for_duplicacy_for_transaction_table="select * from `travel_card_details_for_transactions` where `travel_card_id`='$travel_card_id' and process_id='$process_id' and process_name='$process_name' and before_process_quantity='$before_process_quantity' and process_quantity='$process_quantity' and `actual_used_linear`='$actual_used_linear' and `actual_used_medium`='$actual_used_medium' and `actual_ratio`='$actual_ratio'  and `actual_roll_size`='$actual_roll_size'";

					$result_for_transaction_table = mysqli_query($con,$select_sql_for_duplicacy_for_transaction_table) or die(mysqli_error($con));

					if(mysqli_num_rows($result_for_transaction_table)>0)
					{
                       $data_previously_saved="Yes";
					}
					else if( mysqli_num_rows($result_for_transaction_table) < 1)
					{

							

						$update_sql_statement="UPDATE `travel_card_details_for_transactions`
												SET 
												    `before_process_quantity`='$before_process_quantity',
													`process_quantity`='$process_quantity',
													`actual_ratio`='$actual_ratio',
													`actual_roll_size`='$actual_roll_size',
													`actual_used_linear`='$actual_used_linear',
													`actual_used_medium`='$actual_used_medium',
													`process_wastage`='$process_wastage'
												WHERE 
													`row_id`='$row_id'";
							
 $result = mysqli_query($con,$update_sql_statement) or die(mysqli_error($con));
 
 if($result)
 {
	 //echo "Data updated sucessfully";
 }

		/***********************************End Checking travel_card_details_for_transactions***************************************************/
	
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
