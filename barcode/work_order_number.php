<?php
session_start();

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$pp_number = $_POST['pp_number'];

$sql = "SELECT work_order
		FROM   proxima_software_data
		WHERE  pp_no = '$pp_number'
		";
$result = mysqli_query($con, $sql) or die(mysqli_error($con));

?>

<div class="form-group form-group-sm" id="form-group_for_manufacturer">
	<label class="control-label col-sm-2" for="work_order_number" style="color:#00008B;">Work Order Number:</label>
	<div class="col-sm-5" style="padding-right:4px;">
		<select class="form-control for_auto_complete" id="work_order_number" name="work_order_number" onchange="details_information()">
		  <option >Select Work Order Number</option>

		  <?php
			while($row = mysqli_fetch_array($result))
			{		
				  $work_order_number = $row['work_order'];
				  echo '<option value="'.$work_order_number.'">'.$work_order_number.'</option>';
			}

	      ?>
		</select>
	</div>
</div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_"> -->


