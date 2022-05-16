<?php 

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$recording_person_id = 'hriday';
$recording_person_name = 'Hriday';
$id = $_POST['id'];


$work_order_number=$_POST['work_order_number'];

$delivery_quantity=$_POST['delivery_quantity'];
$buyer=$_POST['buyer'];
$garments=$_POST['garments'];
$ac_holder=$_POST['ac_holder'];
$fabrication=$_POST['fabrication'];
$composition=$_POST['composition'];
$weave=$_POST['weave'];
$width=$_POST['width'];
$process_name=$_POST['process_name'];
$gd_number=$_POST['gd_number'];
$pi_number=$_POST['pi_number'];
$pp_number=$_POST['pp_number'];
$color_or_design=$_POST['color_or_design'];
$order_qty=$_POST['order_qty'];
$grade_a=$_POST['grade_a'];
$grade_b=$_POST['grade_b'];
$total_stock=$_POST['total_stock'];
$number_of_roll=$_POST['number_of_roll']; 
 $old_delivery_date=$_POST['date_of_delivery'];
 $new_delivery_date = $_POST['new_delivery_date'];
$all_cubics=$_POST['all_cubics'];
$all_barcodes=$_POST['all_barcodes'];

$splitted_date_old = explode("/", $old_delivery_date);

$old_delivery_date = $splitted_date_old[1]."/".$splitted_date_old[0]."/".$splitted_date_old[2];

if(isset($new_delivery_date) && $new_delivery_date != "")
{
$splitted_date_new = explode("/",$new_delivery_date);

$new_delivery_date = $splitted_date_new[1]."/".$splitted_date_new[0]."/".$splitted_date_new[2];
}

date_default_timezone_set('Asia/Dhaka');
$today_date = date("m/d/Y");
$date_plus_one = date('m/d/Y', strtotime("+1 day"));
$hour = (int) date("H");
$am_pm = date("a");


if ($new_delivery_date == '') 
{
	$new_delivery_date = $old_delivery_date;

	if ($today_date == $new_delivery_date) 
	{
		echo "Give a proper date";
		exit();
	}
	else if ($new_delivery_date <= $today_date) 
	{
		echo "Past date not valid";
		exit();
	}
	else if ($date_plus_one == $new_delivery_date)
	{
		if ($hour >= 14) 
		{
			$date_of_delivery = date('m/d/Y', strtotime("+2 day"));
		}
		else
		{
			$date_of_delivery = date('m/d/Y', strtotime("+1 day"));
			//$date = date("m/d/Y");
		}
	}
	else
	{
		$new_delivery_date = $new_delivery_date;
	}

}
else if ($today_date == $new_delivery_date) 
{
	echo "Give a proper date";
	exit();
}
else if ($new_delivery_date <= $today_date) 
{
	echo "Past date not valid";
	exit();
}
else if ($date_plus_one == $new_delivery_date)
{
	if ($hour >= 14) 
	{
		$date_of_delivery = date('m/d/Y', strtotime("+2 day"));
	}
	else
	{
		$date_of_delivery = date('m/d/Y', strtotime("+1 day"));
		//$date = date("m/d/Y");
	}
}
else
{
	$new_delivery_date = $new_delivery_date;
}




date_default_timezone_set('Asia/Dhaka');
// $date = date("m/d/Y");
// $date_of_delivery = date('m/d/Y', strtotime('+1 day'));

	if(isset($new_delivery_date) && $new_delivery_date != "")
	{
		
		if(strtotime($new_delivery_date) < strtotime( date('m/d/Y')))
		{
			echo "Please select future day including today.";
		}
		elseif(strtotime($new_delivery_date) == strtotime(date('m/d/Y')))
		{
			 $date_of_delivery = date('m/d/Y', strtotime('+1 day'));

			 $sql1 = "SELECT * FROM  unloading_plan where date_of_delivery = '$date_of_delivery' AND work_order_number = '$work_order_number' AND delivery_quantity = '$delivery_quantity'";
			$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
			$row1 = mysqli_num_rows($result1);

			if ($row1 > 0) 
			{
	
				
				echo "This data already asign on this day.";
			}
			else
			{
				$sql = "INSERT INTO unloading_plan (work_order_number, delivery_quantity, buyer, garments, ac_holder, fabrication, composition, weave,  width, process_name, gd_number, pi_number, pp_number, color_or_design, order_qty, grade_a, grade_b, total_stock, number_of_roll, date_of_delivery, all_cubics, all_barcodes, active, recording_person_id, recording_person_name, recording_time)
				VALUES ('$work_order_number', '$delivery_quantity', '$buyer', '$garments', '$ac_holder', '$fabrication','$composition', '$weave', '$width', '$process_name', '$gd_number', '$pi_number', '$pp_number', '$color_or_design', '$order_qty', '$grade_a', '$grade_b', '$total_stock', '$number_of_roll', '$date_of_delivery', '$all_cubics', '$all_barcodes', '1','$recording_person_id', '$recording_person_name', NOW())";

				mysqli_query($con, $sql);

				$sql_for_update = "UPDATE `unloading_plan` SET `active`='0' WHERE `id`='$id'";
 		     	mysqli_query($con, $sql_for_update);

				echo "Successfully Updated";
			}
		}
		elseif(strtotime($new_delivery_date) > strtotime(date('m/d/Y')))
		{
			 $date_of_delivery = $new_delivery_date;

			 $sql1 = "SELECT * FROM  unloading_plan where date_of_delivery = '$date_of_delivery' AND work_order_number = '$work_order_number' AND delivery_quantity = '$delivery_quantity'";
			$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
			$row1 = mysqli_num_rows($result1);

			if ($row1 > 0) 
			{
	
				
				echo "This data already on asign this day.";
			}
			else 
			{
				$sql = "INSERT INTO unloading_plan (work_order_number, delivery_quantity, buyer, garments, ac_holder, fabrication, composition, weave,  width, process_name, gd_number, pi_number, pp_number, color_or_design, order_qty, grade_a, grade_b, total_stock, number_of_roll, date_of_delivery, all_cubics, all_barcodes, active, recording_person_id, recording_person_name, recording_time)
				VALUES ('$work_order_number', '$delivery_quantity', '$buyer', '$garments', '$ac_holder', '$fabrication','$composition', '$weave', '$width', '$process_name', '$gd_number', '$pi_number', '$pp_number', '$color_or_design', '$order_qty', '$grade_a', '$grade_b', '$total_stock', '$number_of_roll', '$date_of_delivery', '$all_cubics', '$all_barcodes', '1','$recording_person_id', '$recording_person_name', NOW())";

				mysqli_query($con, $sql);

				$sql_for_update = "UPDATE `unloading_plan` SET `active`='0' WHERE `id`='$id'";
 		     	mysqli_query($con, $sql_for_update);

				echo "Successfully Updated";
			}
		}

	}
	else
	{
		if(strtotime($old_delivery_date) < strtotime( date('m/d/Y')))
		{
			echo "Please select future day including today.";
		}
		elseif(strtotime($old_delivery_date) == strtotime(date('m/d/Y')))
		{
			 $date_of_delivery = date('m/d/Y', strtotime('+1 day'));

			 $sql1 = "SELECT * FROM  unloading_plan where date_of_delivery = '$date_of_delivery' AND work_order_number = '$work_order_number' AND delivery_quantity = '$delivery_quantity'";
			$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
			$row1 = mysqli_num_rows($result1);

			if ($row1 > 0) 
			{
	
				
				echo "This data already asign on this day.";
			}
			else
			{
				$sql = "INSERT INTO unloading_plan (work_order_number, delivery_quantity, buyer, garments, ac_holder, fabrication, composition, weave,  width, process_name, gd_number, pi_number, pp_number, color_or_design, order_qty, grade_a, grade_b, total_stock, number_of_roll, date_of_delivery, all_cubics, all_barcodes, active, recording_person_id, recording_person_name, recording_time)
				VALUES ('$work_order_number', '$delivery_quantity', '$buyer', '$garments', '$ac_holder', '$fabrication','$composition', '$weave', '$width', '$process_name', '$gd_number', '$pi_number', '$pp_number', '$color_or_design', '$order_qty', '$grade_a', '$grade_b', '$total_stock', '$number_of_roll', '$date_of_delivery', '$all_cubics', '$all_barcodes', '1','$recording_person_id', '$recording_person_name', NOW())";

				mysqli_query($con, $sql);

				$sql_for_update = "UPDATE `unloading_plan` SET `active`='0' WHERE `id`='$id'";
 		     	mysqli_query($con, $sql_for_update);

				echo "Successfully Updated";
			}
		}
		elseif(strtotime($old_delivery_date) > strtotime(date('m/d/Y')))
		{
			 $date_of_delivery = $old_delivery_date;

			 $sql1 = "SELECT * FROM  unloading_plan where date_of_delivery = '$date_of_delivery' AND work_order_number = '$work_order_number' AND delivery_quantity = '$delivery_quantity'";
			$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
			$row1 = mysqli_num_rows($result1);

			if ($row1 > 0) 
			{
	
				
				echo "This data already asign on this day.";
			}
			else 
			{
				$sql = "INSERT INTO unloading_plan (work_order_number, delivery_quantity, buyer, garments, ac_holder, fabrication, composition, weave,  width, process_name, gd_number, pi_number, pp_number, color_or_design, order_qty, grade_a, grade_b, total_stock, number_of_roll, date_of_delivery, all_cubics, all_barcodes, active, recording_person_id, recording_person_name, recording_time)
				VALUES ('$work_order_number', '$delivery_quantity', '$buyer', '$garments', '$ac_holder', '$fabrication','$composition', '$weave', '$width', '$process_name', '$gd_number', '$pi_number', '$pp_number', '$color_or_design', '$order_qty', '$grade_a', '$grade_b', '$total_stock', '$number_of_roll', '$date_of_delivery', '$all_cubics', '$all_barcodes', '1','$recording_person_id', '$recording_person_name', NOW())";

				mysqli_query($con, $sql);

				$sql_for_update = "UPDATE `unloading_plan` SET `active`='0' WHERE `id`='$id'";
 		     	mysqli_query($con, $sql_for_update);

				echo "Successfully Updated";
			}
		}
		


    }


// $old_date_of_delivery = $date_of_delivery;
//  date_default_timezone_set('Asia/Dhaka');
//  $current_date = date("d/m/Y");



// if(strtotime($date_of_delivery)<strtotime($current_date))
// {
//      echo "Invalid date";
// 	 exit();
// }

// elseif($new_delivery_date == "" && isset($date_of_delivery))
// {

// 	if($date_of_delivery == $current_date)
// 	{
		
// 		 $date_of_delivery = date('m/d/Y', strtotime('+1 day'));
		
// 	}
// 	else
// 	{
// 		$splitted_date = explode("/",$date_of_delivery);

// 	    $date_of_delivery = $splitted_date[1]."/".$splitted_date[0]."/".$splitted_date[2];

// 	}


	

// 	$sql_previous_delivery_quantity = "SELECT delivery_quantity FROM  unloading_plan WHERE work_order_number = '$work_order_number' AND date_of_delivery = '$date_of_delivery' AND active='1'";
// 	$result_previous_delivery_quantity = mysqli_query($con, $sql_previous_delivery_quantity) or die(mysqli_error($con));
// 	$row_previous_delivery_quantity = mysqli_fetch_assoc($result_previous_delivery_quantity);

// 	 $previous_delivery_quantity = $row_previous_delivery_quantity['delivery_quantity'];
// 	// echo "   New : ".$delivery_quantity;
// 	if($previous_delivery_quantity == $delivery_quantity)
// 	{
// 		echo "Data already exist";
// 		exit();
// 	}
// 	else{

	
// 			$sql = "INSERT INTO unloading_plan (work_order_number, delivery_quantity, buyer, garments, ac_holder, fabrication, composition, weave,  width, process_name, gd_number, pi_number, pp_number, color_or_design, order_qty, grade_a, grade_b, total_stock, number_of_roll, date_of_delivery, all_cubics, all_barcodes, active, recording_person_id, recording_person_name, recording_time)
// 			VALUES ('$work_order_number', '$delivery_quantity', '$buyer', '$garments', '$ac_holder', '$fabrication','$composition', '$weave', '$width', '$process_name', '$gd_number', '$pi_number', '$pp_number', '$color_or_design', '$order_qty', '$grade_a', '$grade_b', '$total_stock', '$number_of_roll', '$date_of_delivery', '$all_cubics', '$all_barcodes', '1','$recording_person_id', '$recording_person_name', NOW())";
// 			mysqli_query($con, $sql);
// 			$sql_for_update = "UPDATE `unloading_plan` SET `active`='0' WHERE `id`='$id'";
// 			mysqli_query($con, $sql_for_update);
// 			echo "Successfully Updated";

		

		

// 	}
	
// }
// elseif(isset($new_delivery_date))
// {
// 	$splitted_date=explode('/', $new_delivery_date);
//     $new_delivery_date = date("d/m/Y", mktime(0, 0, 0, $splitted_date[1], $splitted_date[0], $splitted_date[2]));

//      if($new_delivery_date < $current_date)
// 	 {
// 		 echo "Invalid date";
// 		 exit();

// 	 }
// 	 else if($new_delivery_date == $date_of_delivery)
// 	 {
// 		$date_of_delivery = $date_of_delivery;
// 		if($date_of_delivery == $current_date)
// 		{
			
			
// 		    $date_of_delivery = date('m/d/Y', strtotime('+1 day'));
			
// 		}
// 		else
// 		{
// 			$splitted_date = explode("/",$date_of_delivery);

// 			$date_of_delivery = $splitted_date[1]."/".$splitted_date[0]."/".$splitted_date[2];

// 		}

		
	
// 		$sql_previous_delivery_quantity = "SELECT delivery_quantity FROM  unloading_plan WHERE work_order_number = '$work_order_number' AND date_of_delivery = '$date_of_delivery' AND active='1'";
// 		$result_previous_delivery_quantity = mysqli_query($con, $sql_previous_delivery_quantity) or die(mysqli_error($con));
// 		$row_previous_delivery_quantity = mysqli_fetch_assoc($result_previous_delivery_quantity);
	
// 	    $previous_delivery_quantity = $row_previous_delivery_quantity['delivery_quantity'];
// 		if($previous_delivery_quantity == $delivery_quantity)
// 		{
// 			echo "Data already exist";
// 			exit();
// 		}
// 		else{
	
// 			$sql = "INSERT INTO unloading_plan (work_order_number, delivery_quantity, buyer, garments, ac_holder, fabrication, composition, weave,  width, process_name, gd_number, pi_number, pp_number, color_or_design, order_qty, grade_a, grade_b, total_stock, number_of_roll, date_of_delivery, all_cubics, all_barcodes, active, recording_person_id, recording_person_name, recording_time)
// 			VALUES ('$work_order_number', '$delivery_quantity', '$buyer', '$garments', '$ac_holder', '$fabrication','$composition', '$weave', '$width', '$process_name', '$gd_number', '$pi_number', '$pp_number', '$color_or_design', '$order_qty', '$grade_a', '$grade_b', '$total_stock', '$number_of_roll', '$date_of_delivery', '$all_cubics', '$all_barcodes', '1','$recording_person_id', '$recording_person_name', NOW())";
// 			mysqli_query($con, $sql);
// 			$sql_for_update = "UPDATE `unloading_plan` SET `active`='0' WHERE `id`='$id'";
// 			mysqli_query($con, $sql_for_update);
// 			echo "Successfully Updated";
	
// 		}

// 	 }
// 	 else
// 	 {
//         $date_of_delivery = $new_delivery_date; 

// 		if($date_of_delivery == $current_date)
// 		{
			
			
// 			$date_of_delivery = date('m/d/Y', strtotime('+1 day'));
			
// 		}
// 		else
// 		{
// 			$splitted_date = explode("/",$date_of_delivery);

// 			$date_of_delivery = $splitted_date[1]."/".$splitted_date[0]."/".$splitted_date[2];

// 		}

// 		$sql = "INSERT INTO unloading_plan (work_order_number, delivery_quantity, buyer, garments, ac_holder, fabrication, composition, weave,  width, process_name, gd_number, pi_number, pp_number, color_or_design, order_qty, grade_a, grade_b, total_stock, number_of_roll, date_of_delivery, all_cubics, all_barcodes, active, recording_person_id, recording_person_name, recording_time)
// 		VALUES ('$work_order_number', '$delivery_quantity', '$buyer', '$garments', '$ac_holder', '$fabrication','$composition', '$weave', '$width', '$process_name', '$gd_number', '$pi_number', '$pp_number', '$color_or_design', '$order_qty', '$grade_a', '$grade_b', '$total_stock', '$number_of_roll', '$date_of_delivery', '$all_cubics', '$all_barcodes', '1','$recording_person_id', '$recording_person_name', NOW())";

// 		mysqli_query($con, $sql);

// 		$sql_for_update = "UPDATE `unloading_plan` SET `active`='0' WHERE `id`='$id'";
// 		mysqli_query($con, $sql_for_update);

// 		echo "Successfully Updated";
	
// 	 }
// }





// date_default_timezone_set('Asia/Dhaka');
// $date = date("Y-m-d");
// $hour = (int) date("H");
// $am_pm = date("a");


// if ($hour >= 20) 
// {
// 	$date = date('m/d/Y', strtotime("+1 day"));
// }
// else
// {
// 	$date = date("m/d/Y");
// }




                                          
