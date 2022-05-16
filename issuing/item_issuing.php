<?php
session_start();
// include('../db_znzqc_connection_class.php');
// $obj2 = new DB_Connection_Class();
// $obj2->connection();

// include('../db_connection_class.php');
include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$recording_person_id = 'hriday';
$recording_person_name = 'Hriday';
?>


<script type='text/javascript' src='all_it_asset_forms/issuing/item_issuing_form_validation.js'></script>

<style>

.form-group		/* This is for reducing Gap among Form's Fields */
{

	margin-bottom: 5px;

}

/** Following is For Removing Removal Icon From Form's Fields When Screen Size is Reduced to 992px **/

@media only screen and (max-width: 992px)
{

	.glyphicon-remove
	{
		display:none;
	}

}

/** Following is For Making Padding-Right as 4px (Default 14px) Form's Fields When Screen Size is Bigger Than 992px **/

@media only screen and (min-width: 992px)
{

	.field_container
	{
		padding-right:4px;
	}

}

</style>

<script>

function Remove_Value_Of_This_Element(element_name)
{

	 document.getElementById(element_name).value='';
	 var alternate_field_of_date = "alternate_"+element_name;

	 if(typeof(alternate_field_of_date) != 'undefined' && alternate_field_of_date != null) // This is for deleting Alternative Field of Date if exists
	 {
		document.getElementById(alternate_field_of_date).value='';
	 }

}

function Reset_Radio_Button(radio_element)
{

		var radio_btn = document.getElementsByName(radio_element);
		for(var i=0;i<radio_btn.length;i++) 
		{
				radio_btn[i].checked = false;
		}


}

function Reset_Checkbox(checkbox_element)
{
		for(var i=0;i<checkbox_element.length;i++)
		{

				checkbox_element[i].checked = false;

		}
}

function reset_dropdown(select_element)
{

	  document.getElementById(select_element).selectedIndex = 0;

}

$('.for_auto_complete').chosen();
</script>

<script>


function barcode_change()
{
	var barcode_code = document.getElementById("barcode_code").value;
 	$.ajax({
	 		url: 'all_it_asset_forms/issuing/item_details_for_issuing.php',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: {barcode_code: barcode_code},
	 		success: function( data, textStatus, jQxhr )
	 		{
	 				//alert(data);
	 				document.getElementById('details_info').innerHTML=data;
	 				$('.for_auto_complete').chosen();
	 		},
	 		error: function( jqXhr, textStatus, errorThrown )
	 		{
	 				//console.log( errorThrown );
	 				alert(errorThrown);
	 		}
	 }); // End of $.ajax({
}
 
 function sending_data_of_item_issuing_form_for_saving_in_database()
 {


       //var validate = Form_Validation();

       var validate = true;

       //var url_encoded_form_data = $("#item_receiving_form").serialize(); //This will read all control elements value of the form	
       if(validate != false)
	   {
		 	var barcode_code=document.getElementById('barcode_code').value;
		 	var receiving_location=document.getElementById('receiving_location').value;
		 	var issued_by='Hriday Ahmed';
		 	var date_of_receipt=document.getElementById('date_of_receipt').value;
		 	var row_number=document.getElementById('row_number').value;
		 	var rack_number=document.getElementById('rack_number').value;
		 	var cubic_number=document.getElementById('cubic_number').value;
		 	var bin_card_number=document.getElementById('bin_card_number').value;
		 	var quantiy=document.getElementById('quantiy').value;
		 	var uom=document.getElementById('uom').value;
		 	var roll_no=document.getElementById('roll_no').value;
		 	var pp_number=document.getElementById('pp_number').value;
		 	var work_order_number=document.getElementById('work_order_number').value;
		 	var gd_number=document.getElementById('gd_number').value;
		 	var customer_name=document.getElementById('customer_name').value;
		 	var shade=document.getElementById('shade').value;
		 	var construction=document.getElementById('construction').value;
			var composition=document.getElementById('composition').value;
		 	var weave=document.getElementById('weave').value;
		 	var length=document.getElementById('length').value;
		 	var finished_width=document.getElementById('finished_width').value;
		 	var finished_type=document.getElementById('finished_type').value;
			var type=document.getElementById('type').value;
			var grade=document.getElementById('grade').value;
         


		 	// var roll_no=document.getElementById('roll_no').value;
		 	// var kgs=document.getElementById('kgs').value;

		  	 $.ajax({
			 		url: 'all_it_asset_forms/issuing/item_issuing_saving.php',
			 		dataType: 'text',
			 		type: 'post',
			 		contentType: 'application/x-www-form-urlencoded',
			 		data: {barcode_code: barcode_code, receiving_location: receiving_location, issued_by: issued_by, date_of_receipt: date_of_receipt, row_number: row_number, rack_number: rack_number, cubic_number: cubic_number, bin_card_number: bin_card_number, quantiy: quantiy, uom: uom, roll_no: roll_no, pp_number: pp_number, work_order_number: work_order_number, gd_number: gd_number, customer_name: customer_name, shade: shade, construction: construction, composition: composition, weave: weave, length: length, finished_width: finished_width, finished_type: finished_type,type: type, grade: grade},
			 		success: function( data, textStatus, jQxhr )
			 		{
			 				alert(data);
			 				//document.getElementById('data_show').innerHTML=data;
			 		},
			 		error: function( jqXhr, textStatus, errorThrown )
			 		{
			 				//console.log( errorThrown );
			 				alert(errorThrown);
			 		}
			 }); // End of $.ajax({

       }//End of if(validate != false)

 }//End of function sending_data_of_item_receiving_form_for_saving_in_database()


</script>
<div class="col-sm-12 col-md-12 col-lg-12">

		<div class="panel panel-default"> <!-- This div will create a block/panel for FORM -->

				<div class="panel-heading" style="color:#191970;"><b>Item Issuing</b></div> <!-- This will create a upper block for FORM (Just Beautification) -->

				<form class="form-horizontal" action="" style="margin-top:10px;" name="item_issuing_form" id="item_issuing_form">

					<div class="form-group form-group-md" id="form-group_for_received_by">
						<label class="control-label col-md-3" for="barcode_code" style="margin-right:0px; color:#00008B;">Barcode:</label>
							<div class="col-md-5 field_container">
								<select  class="form-control for_auto_complete" id="barcode_code" name="barcode_code" onchange="barcode_change()">
											<option selected="selected" value="select">Select Barcode</option>
											<?php 
												 $sql = 'select * from `roll_information_barcode` order by `id`';
												 $result= mysqli_query($con,$sql) or die(mysqli_error($con));
												 while( $row = mysqli_fetch_array($result))
												 {

													 echo '<option value="'.$row['barcode_code'].'">'.$row['barcode_code'].'</option>';

												 }

											 ?>
								</select>
							</div>
					</div>

					<div id="details_info">
						<div class="form-group form-group-md" id="form-group_for_roll_no">
								<label class="control-label col-md-3" for="roll_no" style="color:#00008B;">Roll No:</label>
								<div class="col-md-5 field_container">
									<input type="text" class="form-control" id="roll_no" name="roll_no" placeholder="Enter Roll No" >
								</div>
								<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('bin_card_number')" style="margin-top:6px;"></i>
						</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_roll_no"> -->

						<div class="form-group form-group-md" id="form-group_for_pp_number">
								<label class="control-label col-md-3" for="pp_number" style="color:#00008B;">PP Number:</label>
								<div class="col-md-5 field_container">
									<input type="text" class="form-control" id="pp_number" name="pp_number" placeholder="Enter PP Number" >
								</div>
								<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('bin_card_number')" style="margin-top:6px;"></i>
						</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_pp_number"> -->

						<div class="form-group form-group-md" id="form-group_for_work_order_number">
								<label class="control-label col-md-3" for="work_order_number" style="color:#00008B;">Work Order Number:</label>
								<div class="col-md-5 field_container">
									<input type="text" class="form-control" id="work_order_number" name="work_order_number" placeholder="Enter Work Order Number" >
								</div>
								<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('bin_card_number')" style="margin-top:6px;"></i>
						</div> 

						<div class="form-group form-group-md" id="form-group_for_work_order_number">
								<label class="control-label col-md-3" for="gd_number" style="color:#00008B;">GD Number:</label>
								<div class="col-md-5 field_container">
									<input type="text" class="form-control" id="gd_number" name="gd_number" placeholder="Enter GD Number" >
								</div>
								<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('gd_number')" style="margin-top:6px;"></i>
						</div> 

						<div class="form-group form-group-md" id="form-group_for_customer_name">
								<label class="control-label col-md-3" for="customer_name" style="color:#00008B;">Customer Name:</label>
								<div class="col-md-5 field_container">
									<input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Enter Customer Name" >
								</div>
								<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('bin_card_number')" style="margin-top:6px;"></i>
						</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_customer_name"> -->

						<div class="form-group form-group-md" id="form-group_for_shade">
								<label class="control-label col-md-3" for="shade" style="color:#00008B;">Shade:</label>
								<div class="col-md-5 field_container">
									<input type="text" class="form-control" id="shade" name="shade" placeholder="Enter Shade">
								</div>
								<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('bin_card_number')" style="margin-top:6px;"></i>
						</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_shade"> -->

						<div class="form-group form-group-md" id="form-group_for_construction">
								<label class="control-label col-md-3" for="construction" style="color:#00008B;">Construction:</label>
								<div class="col-md-5 field_container">
									<input type="text" class="form-control" id="construction" name="construction" placeholder="Enter Construction" >
								</div>
								<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('bin_card_number')" style="margin-top:6px;"></i>
						</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_construction"> -->

						<div class="form-group form-group-md" id="form-group_for_composition">
								<label class="control-label col-md-3" for="composition" style="color:#00008B;">Composition:</label>
								<div class="col-md-5 field_container">
									<input type="text" class="form-control" id="composition" name="composition" placeholder="Enter Composition">
								</div>
								<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('bin_card_number')" style="margin-top:6px;"></i>
						</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_composition"> -->

						<div class="form-group form-group-md" id="form-group_for_weave">
								<label class="control-label col-md-3" for="weave" style="color:#00008B;">Weave:</label>
								<div class="col-md-5 field_container">
									<input type="text" class="form-control" id="weave" name="weave" placeholder="Enter Weave">
								</div>
								<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('bin_card_number')" style="margin-top:6px;"></i>
						</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_weave"> -->

						<div class="form-group form-group-md" id="form-group_for_length">
								<label class="control-label col-md-3" for="length" style="color:#00008B;">Length:</label>
								<div class="col-md-5 field_container">
									<input type="text" class="form-control" id="length" name="length" placeholder="Enter Length">
								</div>
								<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('bin_card_number')" style="margin-top:6px;"></i>
						</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_length"> -->

						<div class="form-group form-group-md" id="form-group_for_finished_width">
								<label class="control-label col-md-3" for="finished_width" style="color:#00008B;">Finished Width:</label>
								<div class="col-md-5 field_container">
									<input type="text" class="form-control" id="finished_width" name="finished_width" placeholder="Enter Finished Width">
								</div>
								<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('bin_card_number')" style="margin-top:6px;"></i>
						</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_finished_width"> -->

						<div class="form-group form-group-md" id="form-group_for_finished_type">
								<label class="control-label col-md-3" for="finished_type" style="color:#00008B;">Finished Type:</label>
								<div class="col-md-5 field_container">
									<input type="text" class="form-control" id="finished_type" name="finished_type" placeholder="Enter Finished Type">
								</div>
								<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('bin_card_number')" style="margin-top:6px;"></i>
						</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_finished_type"> -->
					</div>

					<!-- <div class="form-group form-group-md" id="form-group_for_receiving_location">
							<label class="control-label col-md-3" for="receiving_location" style="color:#00008B;">Receiving Location:</label>
							<div class="col-md-5 field_container">
								<input type="text" class="form-control" id="receiving_location" name="receiving_location" placeholder="Enter Receiving Location" required>
							</div>
							<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('receiving_location')" style="margin-top:6px;"></i>
					</div>  -->

					<input type="hidden" class="form-control" id="receiving_location" name="receiving_location" placeholder="Enter Receiving Location" value="ZZFL Febric Warehouse" required>

					<!-- <div class="form-group form-group-md" id="form-group_for_received_by">
					<label class="control-label col-md-3" for="received_by" style="margin-right:0px; color:#00008B;">Received By:</label>
						<div class="col-md-5 field_container">
							<select  class="form-control for_auto_complete" id="received_by" name="received_by">
										<option selected="selected" value="select">Select Received By</option>
										<?php 
											//  $sql = 'select user_name from `authorized_item_receiver_info` order by `user_name`';
											//  $result= mysqli_query($con,$sql) or die(mysqli_error($con));
											//  while( $row = mysqli_fetch_array($result))
											//  {

											// 	 echo '<option value="'.$row['user_name'].'">'.$row['user_name'].'</option>';

											//  }

										 ?>
							</select>
						</div>
					</div>  -->

					

					<input type="hidden" class="form-control" id="bin_card_number" name="bin_card_number" value="1" placeholder="Enter Bin Card Number">



					<input type="hidden" class="form-control" id="quantiy" name="quantiy" value="1" placeholder="Enter Quantiy" required>


					<input type="hidden" class="form-control" id="uom" name="uom" placeholder="Enter Uom" value="1" required>

					<div class="form-group form-group-md">
							<div class="col-sm-offset-3 col-md-5">
								<button type="button" class="btn btn-primary" onClick="sending_data_of_item_issuing_form_for_saving_in_database()">Issue</button>
								
							</div>
					</div>

				</form>

		</div> <!-- End of <div class="panel panel-default"> -->

</div> <!-- End of <div class="col-sm-12 col-md-12 col-lg-12"> -->