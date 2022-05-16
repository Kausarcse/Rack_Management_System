<?php
session_start();

// include('../db_znzqc_connection_class.php');
// $obj2 = new DB_Connection_Class();
// $obj2->connection();

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();



//$user_id = $_SESSION['user_id'];
//$password = $_SESSION['password'];



?>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>


<style>

.form-group		/* This is for reducing Gap among Form's Fields */
{

	margin-bottom: 5px;

}

</style>

<script>

$(document).ready(function()
{
	

});

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
	    var checkbox_btn = document.getElementsByName(checkbox_element+'[]');
	 	for(var i=0;i<checkbox_btn.length;i++)
		{

				checkbox_btn[i].checked = false;

		}
}

function reset_dropdown(select_element)
{

	  document.getElementById(select_element).selectedIndex = 0;

}



function details_information()
{
 	var work_order_number = document.getElementById("work_order_number").value;
 	$.ajax({
	 		url: 'packing_list/work_order_details_info.php',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: {work_order_number: work_order_number},
	 		success: function( data, textStatus, jQxhr )
	 		{
	 				//alert(data);
	 				document.getElementById('details_info').innerHTML=data;
	 		},
	 		error: function( jqXhr, textStatus, errorThrown )
	 		{
	 				//console.log( errorThrown );
	 				alert(errorThrown);
	 		}
	 }); // End of $.ajax({
}

 function problems_point_calculation()
 {
 	var problems_point = document.getElementById('problems_point').value;
 	var actual_cuttable_width = document.getElementById('actual_cuttable_width').value;
 	var actual_finished_width = document.getElementById('actual_finished_width').value;
 	var length = document.getElementById('length').value;


 	var cal1 = parseFloat(problems_point) * 3600;
 	var cal2 = parseInt(length) * parseFloat(actual_cuttable_width);

 	var square_meter_ratio = (cal1 / cal2);
 	var pass_or_fail = '';
 	if (square_meter_ratio > 24) 
 	{
 		pass_or_fail = 'Fail';
 		//document.getElementById("Fail").selected = true;
 	}
 	else
 	{
 		pass_or_fail = 'Pass';
 		//document.getElementById("Pass").selected = true;
 	}
 	document.getElementById('points_per_yds').value = square_meter_ratio;

 		document.getElementById('pass_fail').value=pass_or_fail;

 }


 function sending_data_of_barcode()
 {
 	var id=document.getElementById('id').value;
 	var pp_number=document.getElementById('pp_number2').value;
 	var work_order_number=document.getElementById('work_order_number').value;
 	var gd_number=document.getElementById('gd_number').value;
 	var customer_name=document.getElementById('customer_name').value;
 	var customer_id=document.getElementById('customer_id').value;
 	var construction=document.getElementById('construction').value;
 	var finish_width_in_inch=document.getElementById('finish_width_in_inch').value;
 	var roll_no=document.getElementById('roll_no').value;
 	var kgs=document.getElementById('kgs').value;
	var composition=document.getElementById('composition').value;
 	var shade=document.getElementById('shade').value;
 	var weave=document.getElementById('weave').value;
 	var length=document.getElementById('length').value;
 	var finished_type=document.getElementById('finished_type').value;
 	var pallet_no=document.getElementById('pallet_no').value;
	var type=document.getElementById('type').value;
	var grade=document.getElementById('grade').value;


    //$('#element').load('barcode/barcode_create.php?'+total;
    //$('#element').load('barcode/barcode_create.php?pp_number'+encodeURIComponent(pp_number);
    $('#element').load('barcode/barcode_create.php?pp_number='+encodeURIComponent(pp_number)+'&customer_name='+encodeURIComponent(customer_name)+'&work_order_number='+encodeURIComponent(work_order_number)+'&gd_number='+encodeURIComponent(gd_number)+'&customer_id='+encodeURIComponent(customer_id)+'&construction='+encodeURIComponent(construction)+'&finish_width_in_inch='+encodeURIComponent(finish_width_in_inch)+'&roll_no='+encodeURIComponent(roll_no)+'&kgs='+encodeURIComponent(kgs)+'&shade='+encodeURIComponent(shade)+'&composition='+encodeURIComponent(composition)+'&weave='+encodeURIComponent(weave)+'&length='+encodeURIComponent(length)+'&finished_type='+encodeURIComponent(finished_type)+'&id='+encodeURIComponent(id)+'&pallet_no='+encodeURIComponent(pallet_no)+'&type='+encodeURIComponent(type)+'&grade='+encodeURIComponent(grade));


	

 }

 function packing_list_data_into_database()
 {
 	var work_order_number=document.getElementById('work_order_number').value;
 	var gd_number=document.getElementById('gd_number').value;
 	var customer_name=document.getElementById('customer_name').value;
 	var buyer=document.getElementById('buyer').value;
 	var customer_id=document.getElementById('customer_id').value;
 	var construction=document.getElementById('construction').value;
 	var finish_width_in_inch=document.getElementById('finish_width_in_inch').value;
 	var roll_no=document.getElementById('roll_no').value;
	var composition=document.getElementById('composition').value;
 	var shade=document.getElementById('shade').value;
 	var weave=document.getElementById('weave').value;
 	var length=document.getElementById('length').value;
 	var kg=document.getElementById('kg').value;
 	var finished_type=document.getElementById('finished_type').value;
	var grade=document.getElementById('grade').value;

	var order_quantity=document.getElementById('order_quantity').value;
	var actual_finished_width=document.getElementById('actual_finished_width').value;
	var actual_cuttable_width=document.getElementById('actual_cuttable_width').value;
	var problems_point=document.getElementById('problems_point').value;
	var points_per_yds=document.getElementById('points_per_yds').value;
	var pass_fail=document.getElementById('pass_fail').value;

	var ac_holder=document.getElementById('ac_holder').value;
	var order_qty=document.getElementById('order_qty').value;
	var allownce=document.getElementById('allownce').value;
	var rate=document.getElementById('rate').value;
	var process =document.getElementById('process').value;
	var pi_no=document.getElementById('pi_no').value;
	var cut_width=document.getElementById('cut_width').value;
	var style_no=document.getElementById('style_no').value;

	$.ajax({
	 		url: 'packing_list/packing_list_saving.php',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: {work_order_number: work_order_number, gd_number: gd_number, customer_name: customer_name,buyer: buyer, customer_id: customer_id, construction: construction, finish_width_in_inch: finish_width_in_inch, roll_no: roll_no, composition: composition, shade: shade, weave: weave, length: length, kg: kg, finished_type: finished_type, grade: grade, order_quantity:order_quantity, actual_finished_width:actual_finished_width, actual_cuttable_width: actual_cuttable_width, problems_point:problems_point, points_per_yds:points_per_yds, pass_fail:pass_fail, ac_holder:ac_holder, order_qty:order_qty, allownce:allownce, rate:rate, process:process, pi_no:pi_no, cut_width:cut_width, style_no:style_no },
	 		success: function( data, textStatus, jQxhr )
	 		{
	 				alert(data);
	 				
	 				//document.getElementById('details_info').innerHTML=data;

					// document.getElementById('roll_no').value = "";
					// document.getElementById('kgs').value = "";
					// document.getElementById('length').value = "";
					// document.getElementById('pallet_no').value = "";
					// document.getElementById('type').value = "";
					// document.getElementById('grade').value = "";
	 		},
	 		error: function( jqXhr, textStatus, errorThrown )
	 		{
	 				//console.log( errorThrown );
	 				alert(errorThrown);
	 		}
	 }); // End of $.ajax({
 }


 // $( "#packing_list_form" ).submit(function( event ) {



 // 	var work_order_number=document.getElementById('work_order_number').value;
 // 	var gd_number=document.getElementById('gd_number').value;
 // 	var customer_name=document.getElementById('customer_name').value;
 // 	var customer_id=document.getElementById('customer_id').value;
 // 	var construction=document.getElementById('construction').value;
 // 	var finish_width_in_inch=document.getElementById('finish_width_in_inch').value;
 // 	var roll_no=document.getElementById('roll_no').value;
	// var composition=document.getElementById('composition').value;
 // 	var shade=document.getElementById('shade').value;
 // 	var weave=document.getElementById('weave').value;
 // 	var length=document.getElementById('length').value;
 // 	var finished_type=document.getElementById('finished_type').value;
	// var grade=document.getElementById('grade').value;

	// var order_quantity=document.getElementById('order_quantity').value;
	// var actual_finished_width=document.getElementById('actual_finished_width').value;
	// var actual_cuttable_width=document.getElementById('actual_cuttable_width').value;
	// var points_per_yds=document.getElementById('points_per_yds').value;
	// var pass_fail=document.getElementById('pass_fail').value;

	// $.ajax({
	//  		url: 'packing_list/packing_list_saving.php',
	//  		dataType: 'text',
	//  		type: 'post',
	//  		contentType: 'application/x-www-form-urlencoded',
	//  		data: {work_order_number: work_order_number, gd_number: gd_number, customer_name: customer_name, customer_id: customer_id, construction: construction, finish_width_in_inch: finish_width_in_inch, roll_no: roll_no, kgs: kgs, composition: composition, shade: shade, weave: weave, length: length, finished_type: finished_type, pallet_no: pallet_no, type: type, grade: grade, order_quantity:order_quantity, actual_finished_width:actual_finished_width, actual_cuttable_width: actual_cuttable_width, points_per_yds:points_per_yds, pass_fail:pass_fail },
	//  		success: function( data, textStatus, jQxhr )
	//  		{
	//  				alert(data);
	//  				//document.getElementById('details_info').innerHTML=data;

	// 				// document.getElementById('roll_no').value = "";
	// 				// document.getElementById('kgs').value = "";
	// 				// document.getElementById('length').value = "";
	// 				// document.getElementById('pallet_no').value = "";
	// 				// document.getElementById('type').value = "";
	// 				// document.getElementById('grade').value = "";
	//  		},
	//  		error: function( jqXhr, textStatus, errorThrown )
	//  		{
	//  				//console.log( errorThrown );
	//  				alert(errorThrown);
	//  		}
	//  }); // End of $.ajax({

 // });

$('.for_auto_complete').chosen();

</script>
<div id="pdf">
<div class="col-sm-12 col-md-12 col-lg-12">
	<div id='element'>

		<div class="panel panel-default"> <!-- This div will create a block/panel for FORM -->

				<div class="panel-heading" style="color:#191970;"><b>Packing List Generation</b></div> <!-- This will create a upper block for FORM (Just Beautification) -->

				<form class="form-horizontal row" id="packing_list_form" style="margin-top:10px;">

					<div class="col-md-12">

						<?php 
							$work_order  = '';

							$url = "https://119.148.37.238/workorderall.php?api_key=Wm56d29hbGxBcEky";

							
							$ch = curl_init();
							$timeout = 5;
							curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
							curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
							curl_setopt($ch, CURLOPT_URL, $url);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
							curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
							$html = curl_exec($ch);
							curl_close($ch);

							$values = json_decode($html);
						?>

						<div class="form-group form-group-sm" id="form-group_for_manufacturer">
							<label class="control-label col-sm-2" for="work_order_number" style="color:#00008B;">Work Order Number:</label>
							<div class="col-sm-5" style="padding-right:4px;">
								<select class="form-control for_auto_complete" id="work_order_number" name="work_order_number" onchange="details_information()">
								  <option >Select Work Order Number</option>

								  <?php

									foreach ($values as $work_order) 
									{
										
										echo '<option value="'.$work_order->work_order.'">'.$work_order->work_order.'</option>';
									   
									}

							      ?>
								</select>
							</div>
						</div>


						<div id="work_order">
							
						</div>	

						<div id="details_info">
							
						</div>

					</div>

				</form>

		</div> <!-- End of <div class="panel panel-default"> -->

    </div> <!-- end of </div> -->

</div> <!-- End of <div class="col-sm-12 col-md-12 col-lg-12"> -->
</div>




