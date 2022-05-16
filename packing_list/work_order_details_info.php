<?php
session_start();

error_reporting(0);

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$work_order = $_POST['work_order_number'];


$work_order = str_replace(' ', '%20', $work_order);

//cURL start

	$work_order_date = '';
	$pp_number = '';
	$pp_date = '';
	$customer = '';
	$buyer = '';
	$color = '';
	$construction = '';
	$composition = '';
	$customer_id = '';
	$gd_number = '';
	$order_quantity = '';
	$shade = '';
	$weave = '';
	$finished_type = '';
	$finish_width_in_inch = '';

	$ac_holder = '';
	$order_qty = '';
	$allownce = '';
	$rate = '';
	$process = '';
	$pi_no = '';
	$cut_width = '';
	$style_no = '';


	$url = "https://119.148.37.238/newapi.php?api_key=em56YXBp&work_order=".$work_order;

	//$url = "https://119.148.37.238/workorderall.php?api_key=Wm56d29hbGxBcEky".$work_order;

	
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$html = curl_exec($ch);
	curl_close($ch);

	$value = json_decode($html);

	if ($value->result == 'failed') 
	{
		echo "No Data Found";
		exit();
	}

	else
	{
		$work_order_date = $value->work_order_date;
		$pp_number = $value->ppno;
		$pp_date = $value->ppdate;
		$customer = $value->customer;
		$buyer = $value->buyer;
		$color = $value->piccolor;

		$construction = $value->construction;
		$composition = $value->composition;
		$customer_id = '1';

		$gd_number = $value->GD_No;
		$shade = $value->piccolor;
		$weave = $value->weave;
		$finished_type = $value->finish_type;
		$finish_width_in_inch = $value->finish_width;
		$order_quantity = $value->order_qty;

		$ac_holder = $value->AC_Holder;
		$order_qty = $value->order_qty;
		$allownce = $value->Allownce;
		$rate = $value->Rate;
		$process = $value->process;
		$pi_no = $value->pino;
		$cut_width = $value->cut_width;
		$style_no = $value->style_no;
		

		?>


			<div class="form-group form-group-sm" id="form-group_for_provided_to">
				<label class="control-label col-sm-2" for="pp_number" style="color:#00008B;">PP Number:</label>
				<div class="col-sm-5" style="padding-right:4px;">
					<input type="text" class="form-control" id="pp_number" name="pp_number" value="<?php echo $pp_number; ?>" readonly>
				</div>
			</div>

			<div class="form-group form-group-sm" id="form-group_for_provided_to">
				<label class="control-label col-sm-2" for="customer_name" style="color:#00008B;">Customer Name:</label>
				<div class="col-sm-5" style="padding-right:4px;">
					<input type="text" class="form-control" id="customer_name" name="customer_name" value="<?php echo $customer; ?>" readonly>
					<input type="hidden" name="pp_number2" id="pp_number2" value="<?php echo $pp_number; ?>">
					<input type="hidden" name="customer_id" id="customer_id" value="<?php echo $customer_id; ?>">
					<input type="hidden" name="id" id="id" value="1">

					<input type="hidden" name="buyer" id="buyer" value="<?php echo $buyer; ?>">
				</div>
			</div>

			<div class="form-group form-group-sm" id="form-group_for_provided_to">
				<label class="control-label col-sm-2" for="gd_number" style="color:#00008B;">GD Number:</label>
				<div class="col-sm-5" style="padding-right:4px;">
					<input type="text" class="form-control" id="gd_number" name="gd_number" value="<?php echo $gd_number; ?>" readonly>
				</div>
			</div>

			<div class="form-group form-group-sm" id="form-group_for_provided_to">
				<label class="control-label col-sm-2" for="construction" style="color:#00008B;">Construction:</label>
				<div class="col-sm-5" style="padding-right:4px;">
					<input type="text" class="form-control" id="construction" name="construction" value="<?php echo $construction; ?>" readonly>
				</div>
			</div>

			<div class="form-group form-group-sm" id="form-group_for_provided_to">
				<label class="control-label col-sm-2" for="composition" style="color:#00008B;">Composition:</label>
				<div class="col-sm-5" style="padding-right:4px;">
					<input type="text" class="form-control" id="composition" name="composition" value="<?php echo $composition; ?>" readonly>
				</div>
			</div>

			<div class="form-group form-group-sm" id="form-group_for_provided_to">
				<label class="control-label col-sm-2" for="weave" style="color:#00008B;">Weave:</label>
				<div class="col-sm-5" style="padding-right:4px;">
					<input type="text" class="form-control" id="weave" name="weave" value="<?php echo $weave; ?>" readonly>
				</div>
			</div>

			<div class="form-group form-group-sm" id="form-group_for_provided_to">
				<label class="control-label col-sm-2" for="shade" style="color:#00008B;">Shade:</label>
				<div class="col-sm-5" style="padding-right:4px;">
					<input type="text" class="form-control" id="shade" name="shade" value="<?php echo $shade; ?>" readonly>
				</div>
			</div>

			<div class="form-group form-group-sm" id="form-group_for_provided_to">
				<label class="control-label col-sm-2" for="finish_width_in_inch" style="color:#00008B;">Finish Width:</label>
				<div class="col-sm-5" style="padding-right:4px;">
					<input type="text" class="form-control" id="finish_width_in_inch" name="finish_width_in_inch" value="<?php echo $finish_width_in_inch; ?>" readonly>
				</div>
			</div>

			<div class="form-group form-group-sm" id="form-group_for_provided_to">
				<label class="control-label col-sm-2" for="finished_type" style="color:#00008B;">Finished Type:</label>
				<div class="col-sm-5" style="padding-right:4px;">
					<input type="text" class="form-control" id="finished_type" name="finished_type" value="<?php echo $finished_type; ?>" readonly>
				</div>

			</div>

			<div class="form-group form-group-sm" id="form-group_for_provided_to">
				<label class="control-label col-sm-2" for="order_quantity" style="color:#00008B;">Order Quantity:</label>
				<div class="col-sm-5" style="padding-right:4px;">
					<input type="text" class="form-control" id="order_quantity" name="order_quantity" value="<?php echo $order_quantity; ?>" readonly>
				</div>

			</div>


			<div class="form-group form-group-sm" id="form-group_for_provided_to">
				<label class="control-label col-sm-2" for="roll_no" style="color:#00008B;">Roll No:</label>
				<div class="col-sm-5" style="padding-right:4px;">
					<input type="text" class="form-control" id="roll_no" name="roll_no" placeholder="Enter Roll No" required>
				</div>

				<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('roll_no')" style="margin-top:6px;"></i>
			</div>

			<div class="form-group form-group-sm" id="form-group_for_provided_to">
				<label class="control-label col-sm-2" for="length" style="color:#00008B;">Length:</label>
				<div class="col-sm-5" style="padding-right:4px;">
					<input type="text" class="form-control" id="length" name="length" placeholder="Enter Length" required>
				</div>

				<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('length')" style="margin-top:6px;"></i>
			</div>

			<div class="form-group form-group-sm" id="form-group_for_provided_to">
				<label class="control-label col-sm-2" for="kg" style="color:#00008B;">KG:</label>
				<div class="col-sm-5" style="padding-right:4px;">
					<input type="text" class="form-control" id="kg" name="kg" placeholder="Enter KG" required>
				</div>

				<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('length')" style="margin-top:6px;"></i>
			</div>

			<div class="form-group form-group-sm" id="form-group_for_grade">
				<label class="control-label col-sm-2" for="grade" style="color:#00008B;">Grade:</label>
				<div class="col-sm-5" style="padding-right:4px;">
					<select class="form-control for_auto_complete" id="grade" name="grade">
						<option select="selected" >Select Grade</option>
						<option value="A">A</option>
                        <option value="B">B</option>
						
					</select>
				</div>
			</div>

			<div class="form-group form-group-sm" id="form-group_for_provided_to">
				<label class="control-label col-sm-2" for="actual_finished_width" style="color:#00008B;">Actual Finished Width:</label>
				<div class="col-sm-5" style="padding-right:4px;">
					<input type="number" class="form-control" id="actual_finished_width" name="actual_finished_width">
				</div>

			</div>


			<div class="form-group form-group-sm" id="form-group_for_provided_to">
				<label class="control-label col-sm-2" for="actual_cuttable_width" style="color:#00008B;">Actual Cuttable Width:</label>
				<div class="col-sm-5" style="padding-right:4px;">
					<input type="number" class="form-control" id="actual_cuttable_width" name="actual_cuttable_width">
				</div>

			</div>

			<div class="form-group form-group-sm" id="form-group_for_provided_to">
				<label class="control-label col-sm-2" for="problems_point" style="color:#00008B;">Problems Point:</label>
				<div class="col-sm-5" style="padding-right:4px;">
					<input type="number" class="form-control" id="problems_point" name="problems_point" onchange="problems_point_calculation()">
				</div>

			</div>


			<div class="form-group form-group-sm" id="form-group_for_provided_to">
				<label class="control-label col-sm-2" for="points_per_yds" style="color:#00008B;">Points per 100sq yds:</label>
				<div class="col-sm-5" style="padding-right:4px;">
					<input type="text" class="form-control" id="points_per_yds" name="points_per_yds" readonly>
				</div>

			</div>

			<div class="form-group form-group-sm" id="form-group_for_grade">
				<label class="control-label col-sm-2" for="pass_fail" style="color:#00008B;">Pass/Fail:</label>
				<div class="col-sm-5" style="padding-right:4px;">
					<select class="form-control for_auto_complete" id="pass_fail" name="pass_fail" disabled>
						<option select="selected" >Select Pass/Fail</option>
						<option value="Pass">Pass</option>
                        <option value="Fail">Fail</option>
						
					</select>
				</div>
			</div>

			<!-- extra information -->
			<input type="hidden" class="form-control" id="ac_holder" name="ac_holder" value="<?php echo $ac_holder; ?>">
			<input type="hidden" class="form-control" id="order_qty" name="order_qty" value="<?php echo $order_qty; ?>">
			<input type="hidden" class="form-control" id="allownce" name="allownce" value="<?php echo $allownce; ?>">
			<input type="hidden" class="form-control" id="rate" name="rate" value="<?php echo $rate; ?>">
			<input type="hidden" class="form-control" id="process" name="process" value="<?php echo $process; ?>">
			<input type="hidden" class="form-control" id="pi_no" name="pi_no" value="<?php echo $pi_no; ?>">
			<input type="hidden" class="form-control" id="cut_width" name="cut_width" value="<?php echo $cut_width; ?>">
			<input type="hidden" class="form-control" id="style_no" name="style_no" value="<?php echo $style_no; ?>">
			

			<div class="form-group form-group-sm">
				<div class="col-sm-offset-1 col-sm-5">

				    <input type="button" class="btn btn-success" onClick="packing_list_data_into_database()" value="Save">
			
					<!-- <button type="button" class="btn btn-primary" onClick="sending_data_of_barcode()">Submit</button> -->
					<button type="reset" class="btn btn-danger">Reset</button>
					
				</div>
			</div>
		<?php
	}

	

//cURL end

?>
