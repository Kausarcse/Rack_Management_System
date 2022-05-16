						
<?php
session_start();

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$barcode_code = $_POST['barcode_code'];

$sql = "SELECT *
		FROM   roll_information_barcode
		WHERE  barcode_code = '$barcode_code'
		";
$result = mysqli_query($con, $sql) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);

$pp_number = $row['pp_number'];
$recording_time = $row['recording_time'];
$split = explode(' ', $recording_time);
$barcode_generation_date = $split[0]; 
$customer_name = $row['customer_name'];
$buyer = $row['buyer'];
$customer_id = $row['customer_id'];
$work_order_number = $row['work_order_number'];
$gd_number = $row['gd_number'];
$construction = $row['construction'];
$finish_width_in_inch = $row['finish_width_in_inch'];
$roll_no = $row['roll_no'];
$kgs = $row['kgs'];
$composition = $row['composition'];
$shade = $row['shade'];
$weave = $row['weave'];
$length = $row['length'];
$pallet_no = $row['pallet_no'];
$finished_type = $row['finished_type'];
$type = $row['type'];
$grade = $row['grade'];

$ac_holder = $row['ac_holder'];
$order_qty = $row['order_qty'];
$allownce = $row['allownce'];
$rate = $row['rate'];
$process = $row['process'];
$pi_no = $row['pi_no'];
$cut_width = $row['cut_width'];
$style_no = $row['style_no'];

?>

<div class="form-group form-group-md" id="form-group_for_roll_no">
		<label class="control-label col-md-3" for="roll_no" style="color:#00008B;">Roll No:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="roll_no" name="roll_no" value="<?php echo $roll_no; ?>" readonly>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_roll_no"> -->

<div class="form-group form-group-md" id="form-group_for_pp_number">
		<label class="control-label col-md-3" for="pp_number" style="color:#00008B;">PP Number:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="pp_number" name="pp_number" value="<?php echo $pp_number; ?>" readonly>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_pp_number"> -->

<div class="form-group form-group-md" id="form-group_for_work_order_number">
		<label class="control-label col-md-3" for="work_order_number" style="color:#00008B;">Work Order Number:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="work_order_number" name="work_order_number" value="<?php echo $work_order_number; ?>" readonly>
		</div>
</div> 

<div class="form-group form-group-md" id="form-group_for_work_order_number">
		<label class="control-label col-md-3" for="gd_number" style="color:#00008B;">GD Number:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="gd_number" name="gd_number" value="<?php echo $gd_number; ?>" readonly>
		</div>
</div> 

<div class="form-group form-group-md" id="form-group_for_customer_name">
		<label class="control-label col-md-3" for="customer_name" style="color:#00008B;">Customer Name:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="customer_name" name="customer_name" value="<?php echo $customer_name; ?>" readonly>

			<input type="hidden" class="form-control" id="buyer" name="buyer" value="<?php echo $buyer; ?>">
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_customer_name"> -->

<div class="form-group form-group-md" id="form-group_for_shade">
		<label class="control-label col-md-3" for="shade" style="color:#00008B;">Shade:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="shade" name="shade" value="<?php echo $shade; ?>" readonly>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_shade"> -->

<div class="form-group form-group-md" id="form-group_for_construction">
		<label class="control-label col-md-3" for="construction" style="color:#00008B;">Construction:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="construction" name="construction" value="<?php echo $construction; ?>" readonly>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_construction"> -->

<div class="form-group form-group-md" id="form-group_for_composition">
		<label class="control-label col-md-3" for="composition" style="color:#00008B;">Composition:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="composition" name="composition" value="<?php echo $composition; ?>" readonly>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_composition"> -->

<div class="form-group form-group-md" id="form-group_for_weave">
		<label class="control-label col-md-3" for="weave" style="color:#00008B;">Weave:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="weave" name="weave" value="<?php echo $weave; ?>" readonly>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_weave"> -->

<div class="form-group form-group-md" id="form-group_for_length">
		<label class="control-label col-md-3" for="length" style="color:#00008B;">Length:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="length" name="length" value="<?php echo $length; ?>" readonly>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_length"> -->

<div class="form-group form-group-md" id="form-group_for_length">
		<label class="control-label col-md-3" for="kgs" style="color:#00008B;">KG:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="kgs" name="kgs" value="<?php echo $kgs; ?>" readonly>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_length"> -->

<div class="form-group form-group-md" id="form-group_for_pallet_no">
		<label class="control-label col-md-3" for="pallet_no" style="color:#00008B;">Pallet NO:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="pallet_no" name="pallet_no" value="<?php echo $pallet_no; ?>" readonly>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_length"> -->

<div class="form-group form-group-md" id="form-group_for_finished_width">
		<label class="control-label col-md-3" for="finished_width" style="color:#00008B;">Finished Width:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="finished_width" name="finished_width" value="<?php echo $finish_width_in_inch; ?>" readonly>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_finished_width"> -->

<div class="form-group form-group-md" id="form-group_for_finished_type">
		<label class="control-label col-md-3" for="finished_type" style="color:#00008B;">Finished Type:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="finished_type" name="finished_type" value="<?php echo $finished_type; ?>" readonly>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_finished_type"> -->

<div class="form-group form-group-md" id="form-group_for_type">
		<label class="control-label col-md-3" for="type" style="color:#00008B;">Type:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="type" name="type" value="<?php echo $type; ?>" readonly>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_type"> -->

<div class="form-group form-group-md" id="form-group_for_grade">
		<label class="control-label col-md-3" for="grade" style="color:#00008B;">Grade:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="grade" name="grade" value="<?php echo $grade; ?>" readonly>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_grade"> -->

<!-- extra information -->
<input type="hidden" class="form-control" id="ac_holder" name="ac_holder" value="<?php echo $ac_holder; ?>">
<input type="hidden" class="form-control" id="order_qty" name="order_qty" value="<?php echo $order_qty; ?>">
<input type="hidden" class="form-control" id="allownce" name="allownce" value="<?php echo $allownce; ?>">
<input type="hidden" class="form-control" id="rate" name="rate" value="<?php echo $rate; ?>">
<input type="hidden" class="form-control" id="process" name="process" value="<?php echo $process; ?>">
<input type="hidden" class="form-control" id="pi_no" name="pi_no" value="<?php echo $pi_no; ?>">
<input type="hidden" class="form-control" id="cut_width" name="cut_width" value="<?php echo $cut_width; ?>">
<input type="hidden" class="form-control" id="style_no" name="style_no" value="<?php echo $style_no; ?>">

<input type="hidden" class="form-control" id="date_of_receipt" name="date_of_receipt" placeholder="Enter Receiving Date" value="<?php echo $barcode_generation_date; ?>" required>


<!-- place for suggestion  -->
<?php 


	$barcode_codes = array();
	$cubics = array();
	$lengths = 0;
	$all_cubics = '';
	$show = '';

	$sql1 = "SELECT 
	        *
	        FROM item_receiving
	        WHERE work_order_number = '$work_order_number'
	        and active = '1'
	        ORDER BY date_of_receipt DESC
	        ";
	$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));

	$counter = 1;
	$s1 = 1;

	$total_length = 0;
	$total_kgs = 0;

	while($row1 = mysqli_fetch_assoc($result1))
	{  

	    ${"barcode_code" . $s1} = $row1['barcode_code'];
	    ${"length" . $s1} = $row1['length'];
	    ${"kgs" . $s1} = $row1['kgs'];
	    ${"cubic_number" . $s1} = $row1['cubic_number'];
	    ${"pallet_no" . $s1} = $row1['pallet_no'];
	    ${"type" . $s1} = $row1['type'];
	    ${"grade" . $s1} = $row1['grade'];

	    ++$s1;
	}


	for ($i=1; $i <= $s1; $i++) 
	{ 
	    if ( isset(${"barcode_code" . $i})) 
	    {
	        if ( ($total_kgs + $kgs) <  1200) 
	        {

	            if (in_array(${"cubic_number" . $i}, $cubics))
	            {
	                
	            }
	            else
	            {
	                array_push($cubics, ${"cubic_number" . $i});
	                $all_cubics = $all_cubics.' '.${"cubic_number" . $i};
	            }
	           
	        }
	        
	    }
	}

	if ($all_cubics != '') 
	{
		$show = 'Available qubic same work order: '.$all_cubics;
	}
	else
	{
		$show = '';
	}

	echo $show;

?>

