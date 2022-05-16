						
<?php
session_start();

// include('../db_connection_class.php');
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

$sql1 = "SELECT `row_number`,`rack_number`,`cubic_number`
		FROM   item_receiving
		WHERE  barcode_code = '$barcode_code'
		";
$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
$row1 = mysqli_fetch_array($result1);

$pp_number = $row['pp_number'];
$recording_time = $row['recording_time'];
$split = explode(' ', $recording_time);
$barcode_generation_date = $split[0]; 
$customer_name = $row['customer_name'];
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
$finished_type = $row['finished_type'];
$type = $row['type'];
$grade = $row['grade'];
$row_number = $row1['row_number'];
$rack_number = $row1['rack_number'];
$cubic_number = $row1['cubic_number'];


?>

<div class="form-group form-group-md" id="form-group_for_roll_no">
		<label class="control-label col-md-3" for="roll_no" style="color:#00008B;">Roll No:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="roll_no" name="roll_no" value="<?php echo $roll_no; ?>" disabled>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_roll_no"> -->

<div class="form-group form-group-md" id="form-group_for_pp_number">
		<label class="control-label col-md-3" for="pp_number" style="color:#00008B;">PP Number:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="pp_number" name="pp_number" value="<?php echo $pp_number; ?>" disabled>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_pp_number"> -->

<div class="form-group form-group-md" id="form-group_for_work_order_number">
		<label class="control-label col-md-3" for="work_order_number" style="color:#00008B;">Work Order Number:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="work_order_number" name="work_order_number" value="<?php echo $work_order_number; ?>" disabled>
		</div>
</div> 

<div class="form-group form-group-md" id="form-group_for_work_order_number">
		<label class="control-label col-md-3" for="gd_number" style="color:#00008B;">GD Number:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="gd_number" name="gd_number" value="<?php echo $gd_number; ?>" disabled>
		</div>
</div> 

<div class="form-group form-group-md" id="form-group_for_customer_name">
		<label class="control-label col-md-3" for="customer_name" style="color:#00008B;">Customer Name:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="customer_name" name="customer_name" value="<?php echo $customer_name; ?>" disabled>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_customer_name"> -->

<div class="form-group form-group-md" id="form-group_for_shade">
		<label class="control-label col-md-3" for="shade" style="color:#00008B;">Shade:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="shade" name="shade" value="<?php echo $shade; ?>" disabled>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_shade"> -->

<div class="form-group form-group-md" id="form-group_for_construction">
		<label class="control-label col-md-3" for="construction" style="color:#00008B;">Construction:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="construction" name="construction" value="<?php echo $construction; ?>" disabled>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_construction"> -->

<div class="form-group form-group-md" id="form-group_for_composition">
		<label class="control-label col-md-3" for="composition" style="color:#00008B;">Composition:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="composition" name="composition" value="<?php echo $composition; ?>" disabled>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_composition"> -->

<div class="form-group form-group-md" id="form-group_for_weave">
		<label class="control-label col-md-3" for="weave" style="color:#00008B;">Weave:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="weave" name="weave" value="<?php echo $weave; ?>" disabled>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_weave"> -->

<div class="form-group form-group-md" id="form-group_for_length">
		<label class="control-label col-md-3" for="length" style="color:#00008B;">Length:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="length" name="length" value="<?php echo $length; ?>" disabled>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_length"> -->

<div class="form-group form-group-md" id="form-group_for_finished_width">
		<label class="control-label col-md-3" for="finished_width" style="color:#00008B;">Finished Width:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="finished_width" name="finished_width" value="<?php echo $finish_width_in_inch; ?>" disabled>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_finished_width"> -->

<div class="form-group form-group-md" id="form-group_for_finished_type">
		<label class="control-label col-md-3" for="finished_type" style="color:#00008B;">Finished Type:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="finished_type" name="finished_type" value="<?php echo $finished_type; ?>" disabled>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_finished_type"> -->

<div class="form-group form-group-md" id="form-group_for_type">
		<label class="control-label col-md-3" for="type" style="color:#00008B;">Type:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="type" name="type" value="<?php echo $type; ?>" disabled>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_type"> -->

<div class="form-group form-group-md" id="form-group_for_grade">
		<label class="control-label col-md-3" for="grade" style="color:#00008B;">Grade:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="grade" name="grade" value="<?php echo $grade; ?>" disabled>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_grade"> -->



<div class="form-group form-group-md" id="form-group_for_rack_number">
		<label class="control-label col-md-3" for="rack_number" style="color:#00008B;">Rack Number:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="rack_number" name="rack_number" value="<?php echo $rack_number; ?>" disabled>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_finished_type"> -->

<div class="form-group form-group-md" id="form-group_row_number">
		<label class="control-label col-md-3" for="type" style="color:#00008B;">Row Number:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="row_number" name="row_number" value="<?php echo $row_number; ?>" disabled>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_type"> -->

<div class="form-group form-group-md" id="form-group_for_cubic_number">
		<label class="control-label col-md-3" for="cubic_number" style="color:#00008B;">Cubic Number:</label>
		<div class="col-md-5 field_container">
			<input type="text" class="form-control" id="cubic_number" name="cubic_number" value="<?php echo $cubic_number; ?>" disabled>
		</div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_grade"> -->






<input type="hidden" class="form-control" id="date_of_receipt" name="date_of_receipt" placeholder="Enter Receiving Date" value="<?php echo $barcode_generation_date; ?>" required>