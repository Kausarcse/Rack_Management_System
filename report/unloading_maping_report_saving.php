<?php 

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$recording_person_id = 'hriday';
$recording_person_name = 'Hriday';
$data_previously_saved = 'no';


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
$grade_a=$_POST['grade_a'];
$grade_b=$_POST['grade_b'];
$total_stock=$_POST['total_stock'];
$number_of_roll=$_POST['number_of_roll'];
$date_of_delivery=$_POST['date_of_delivery'];
$all_cubics=$_POST['all_cubics'];
$all_barcodes=$_POST['all_barcodes'];

$order_qty= $_POST['order_qty'];
$allownce= $_POST['allownce'];
$rate= $_POST['rate'];
$process= $_POST['process'];
$pi_no= $_POST['pi_no'];
$cut_width= $_POST['cut_width'];
$style_no= $_POST['style_no'];


date_default_timezone_set('Asia/Dhaka');
$today_date = date("m/d/Y");
$date_plus_one = date('m/d/Y', strtotime("+1 day"));
$hour = (int) date("H");
$am_pm = date("a");

if ($today_date == $date_of_delivery) 
{
	echo "Give a proper date";
	exit();
}
else if ($date_of_delivery <= $today_date) 
{
	echo "Past date not valid";
	exit();
}
else if ($date_plus_one == $date_of_delivery)
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
	$date_of_delivery = $date_of_delivery;
}

//date_default_timezone_set('Asia/Dhaka');
// $date = date("m/d/Y");
// $date_of_delivery = date('m/d/Y', strtotime('+1 day'));

	if(isset($date_of_delivery) && $date_of_delivery != "")
	{
		if(strtotime($date_of_delivery) < strtotime( date('m/d/Y')))
		{
			echo "Please select future day including today.";
			exit();
		}

		elseif(strtotime($date_of_delivery) == strtotime(date('m/d/Y')))
		{
			 $date_of_delivery = date('m/d/Y', strtotime('+1 day'));

			 $sql1 = "SELECT * FROM  unloading_plan where date_of_delivery = '$date_of_delivery' AND work_order_number = '$work_order_number'";
			$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
			$row1 = mysqli_num_rows($result1);

			if ($row1 > 0) 
			{
				$data_previously_saved = "Yes";
				
				echo "Work order number already asign this day.";
				exit();
			}
			else
			{
				$sql = "INSERT INTO unloading_plan (work_order_number, delivery_quantity, buyer, garments, ac_holder, fabrication, composition, weave,  width, process_name, gd_number, pi_number, pp_number, color_or_design, grade_a, grade_b, total_stock, number_of_roll, date_of_delivery, all_cubics, all_barcodes, active,order_qty,allownce,rate,process,pi_no,cut_width,style_no, recording_person_id, recording_person_name, recording_time)
				VALUES ('$work_order_number', '$delivery_quantity', '$buyer', '$garments', '$ac_holder', '$fabrication','$composition', '$weave', '$width', '$process_name', '$gd_number', '$pi_number', '$pp_number', '$color_or_design', '$grade_a', '$grade_b', '$total_stock', '$number_of_roll', '$date_of_delivery', '$all_cubics', '$all_barcodes', '1', '$order_qty', '$allownce', '$rate', '$process', '$pi_no','$cut_width','$style_no','$recording_person_id', '$recording_person_name', NOW())";

				mysqli_query($con, $sql);

				echo "Successfully Saving";
			}
		}
		else
		{
			 $date_of_delivery = $date_of_delivery;
			 $sql1 = "SELECT * FROM  unloading_plan where date_of_delivery = '$date_of_delivery' AND work_order_number = '$work_order_number'";
			$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
			$row1 = mysqli_num_rows($result1);

			if ($row1 > 0) 
			{
				$data_previously_saved = "Yes";
				
				echo "Work order number already asign this day.";
				exit();
			}
			else
			{
				$sql = "INSERT INTO unloading_plan (work_order_number, delivery_quantity, buyer, garments, ac_holder, fabrication, composition, weave,  width, process_name, gd_number, pi_number, pp_number, color_or_design, grade_a, grade_b, total_stock, number_of_roll, date_of_delivery, all_cubics, all_barcodes, active,order_qty,allownce,rate,process,pi_no,cut_width,style_no, recording_person_id, recording_person_name, recording_time)
				VALUES ('$work_order_number', '$delivery_quantity', '$buyer', '$garments', '$ac_holder', '$fabrication','$composition', '$weave', '$width', '$process_name', '$gd_number', '$pi_number', '$pp_number', '$color_or_design', '$grade_a', '$grade_b', '$total_stock', '$number_of_roll', '$date_of_delivery', '$all_cubics', '$all_barcodes', '1', '$order_qty', '$allownce', '$rate', '$process', '$pi_no','$cut_width','$style_no','$recording_person_id', '$recording_person_name', NOW())";

				mysqli_query($con, $sql);

				echo "Successfully Saving";
			}
		}

	}
	else
	{
	  	if ($hour >= 14) 
		{
			$date_of_delivery = date('m/d/Y', strtotime("+2 day"));
		}
		else
		{
			$date_of_delivery = date('m/d/Y', strtotime("+1 day"));
		}

      $sql1 = "SELECT * FROM  unloading_plan where date_of_delivery = '$date_of_delivery' AND work_order_number = '$work_order_number'";
		$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
		$row1 = mysqli_num_rows($result1);

		if ($row1 > 0) 
		{
			$data_previously_saved = "Yes";
			echo "Work order number already asign this day.";
			exit();
		}
		else
		{
			$sql = "INSERT INTO unloading_plan (work_order_number, delivery_quantity, buyer, garments, ac_holder, fabrication, composition, weave,  width, process_name, gd_number, pi_number, pp_number, color_or_design, grade_a, grade_b, total_stock, number_of_roll, date_of_delivery, all_cubics, all_barcodes, active,order_qty,allownce,rate,process,pi_no,cut_width,style_no, recording_person_id, recording_person_name, recording_time)
				VALUES ('$work_order_number', '$delivery_quantity', '$buyer', '$garments', '$ac_holder', '$fabrication','$composition', '$weave', '$width', '$process_name', '$gd_number', '$pi_number', '$pp_number', '$color_or_design', '$grade_a', '$grade_b', '$total_stock', '$number_of_roll', '$date_of_delivery', '$all_cubics', '$all_barcodes', '1', '$order_qty', '$allownce', '$rate', '$process', '$pi_no','$cut_width','$style_no','$recording_person_id', '$recording_person_name', NOW())";

			mysqli_query($con, $sql);

			echo "Successfully Saving";
			exit();
		}
    }





// $sql1 = "SELECT * FROM  unloading_plan where date_of_delivery = '$date_of_delivery' AND work_order_number = '$work_order_number'";
// $result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
// $row1 = mysqli_num_rows($result1);

// if ($row1 > 0) 
// {
// 	$data_previously_saved = "Yes";
	
// 	echo "Work order number already asign this day.";
// }
// else
// {
// 	$sql = "INSERT INTO unloading_plan (work_order_number, delivery_quantity, buyer, garments, ac_holder, fabrication, composition, weave,  width, process_name, gd_number, pi_number, pp_number, color_or_design, order_qty, grade_a, grade_b, total_stock, number_of_roll, date_of_delivery, all_cubics, all_barcodes, active, recording_person_id, recording_person_name, recording_time)
// 	VALUES ('$work_order_number', '$delivery_quantity', '$buyer', '$garments', '$ac_holder', '$fabrication','$composition', '$weave', '$width', '$process_name', '$gd_number', '$pi_number', '$pp_number', '$color_or_design', '$order_qty', '$grade_a', '$grade_b', '$total_stock', '$number_of_roll', '$date_of_delivery', '$all_cubics', '$all_barcodes', '1','$recording_person_id', '$recording_person_name', NOW())";

// 	mysqli_query($con, $sql);

// 	echo "Successfully Saving";
// }





 ?>