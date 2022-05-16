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
 	//var pp_number = document.getElementById("pp_number").value;
 	var work_order_number = document.getElementById("work_order_number").value;
 	$.ajax({
	 		url: 'barcode/pp_details_info.php',
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

function work_order_and_roll_wise_packing_list_data(data)
{
	var work_order_number = document.getElementById("work_order_number").value;

	$.ajax({
	 		url: 'barcode/packing_list_details_info.php',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: {roll_no: data, work_order_number:work_order_number},
	 		success: function( data, textStatus, jQxhr )
	 		{
	 				alert(data);
	 				var split_data = data.split(" ");
	 				// alert(split_data[0]);
	 				// alert(split_data[1]);

	 				if ( (split_data[1] == '') || (split_data[0] == '') ) 
	 				{
	 					//document.getElementById('length').value='No Value Found';
	 				}
	 				else if ((split_data[1] == 'undefined') || (split_data[0] == 'undefined') || (split_data[2] == 'No_Data')) 
	 				{

	 				}

	 				else
	 				{
	 					document.getElementById('length').value=split_data[1];
	 					document.getElementById('grade').value=split_data[0];
	 					document.getElementById('kgs').value=split_data[2];

						//$('#grade option[value="'+split_data[0]+'"]').prop('selected', true);
	 				}
	 				
	 		},
	 		error: function( jqXhr, textStatus, errorThrown )
	 		{
	 				//console.log( errorThrown );
	 				alert(errorThrown);
	 		}
	 }); // End of $.ajax({
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

	
		$('#element').load('barcode/barcode_create.php?pp_number='+encodeURIComponent(pp_number)+'&customer_name='+encodeURIComponent(customer_name)+'&work_order_number='+encodeURIComponent(work_order_number)+'&gd_number='+encodeURIComponent(gd_number)+'&customer_id='+encodeURIComponent(customer_id)+'&construction='+encodeURIComponent(construction)+'&finish_width_in_inch='+encodeURIComponent(finish_width_in_inch)+'&roll_no='+encodeURIComponent(roll_no)+'&kgs='+encodeURIComponent(kgs)+'&shade='+encodeURIComponent(shade)+'&composition='+encodeURIComponent(composition)+'&weave='+encodeURIComponent(weave)+'&length='+encodeURIComponent(length)+'&finished_type='+encodeURIComponent(finished_type)+'&id='+encodeURIComponent(id)+'&pallet_no='+encodeURIComponent(pallet_no)+'&type='+encodeURIComponent(type)+'&grade='+encodeURIComponent(grade));



    //$('#element').load('barcode/barcode_create.php?'+total;
    //$('#element').load('barcode/barcode_create.php?pp_number'+encodeURIComponent(pp_number);
    


	

 }


 // $( "form" ).submit(function( event ) {


	
	

	
 // });



 function create_barcode_pdf()
 {
 	var id=document.getElementById('id').value;
 	var pp_number=document.getElementById('pp_number2').value;
 	var work_order_number=document.getElementById('work_order_number').value;
 	var gd_number=document.getElementById('gd_number').value;
 	var customer_name=document.getElementById('customer_name').value;
 	var buyer=document.getElementById('buyer').value;
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

	var ac_holder=document.getElementById('ac_holder').value;
	var order_qty=document.getElementById('order_qty').value;
	var allownce=document.getElementById('allownce').value;
	var rate=document.getElementById('rate').value;
	var process =document.getElementById('process').value;
	var pi_no=document.getElementById('pi_no').value;
	var cut_width=document.getElementById('cut_width').value;
	var style_no=document.getElementById('style_no').value;

	if ( (length != '') || (length != 0) || (kgs != 'undefined') || (length != 'undefined') ) 
	{
		$.ajax({
	 		url: 'barcode/pdf_file_for_barcode_create.php',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: {id:id,pp_number: pp_number, work_order_number: work_order_number, gd_number: gd_number, customer_name: customer_name, buyer: buyer, customer_id: customer_id, construction: construction, finish_width_in_inch: finish_width_in_inch, roll_no: roll_no, kgs: kgs, composition: composition, shade: shade, weave: weave, length: length, finished_type: finished_type, pallet_no: pallet_no, type: type, grade: grade, ac_holder:ac_holder, order_qty:order_qty, allownce:allownce, rate:rate, process:process, pi_no:pi_no, cut_width:cut_width, style_no:style_no},
	 		success: function( data, textStatus, jQxhr )
	 		{
	 				document.getElementById('roll_no').value = "";
					document.getElementById('kgs').value = "";
					document.getElementById('length').value = "";
					document.getElementById('pallet_no').value = "";
					document.getElementById('type').value = "";
					document.getElementById('grade').value = "";

					var trim_data = data.trim();
					//alert(trim_data);

	 				if ( trim_data == 'No') 
	 				{
	 					alert('Already Exist');
	 				}

	 				else if ( trim_data == 'Enter valid length, grade and kgs') 
	 				{
	 					alert('Enter valid length, grade and kgs');
	 				}

	 				else
	 				{
	 					//alert('Barcode Create and barcode code is: ' + data );
	 					window.open('barcode/pdf_show.php?barcode_code='+data, '_blank');
	 					//alert(data);
	 				}
	 				//document.getElementById('details_info').innerHTML=data;

					
	 		},
	 		error: function( jqXhr, textStatus, errorThrown )
	 		{
	 				//console.log( errorThrown );
	 				alert(errorThrown);
	 		}
	 	}); // End of $.ajax({
	}
	else
	{
		alert('Enter length, grade and kg');
		return false;
	}	
 }

$('.for_auto_complete').chosen();

</script>
<div id="pdf">
<div class="col-sm-12 col-md-12 col-lg-12">
	<div id='element'>

		<div class="panel panel-default"> <!-- This div will create a block/panel for FORM -->

				<div class="panel-heading" style="color:#191970;"><b>Barcode Generation</b></div> <!-- This will create a upper block for FORM (Just Beautification) -->

				<form class="form-horizontal row" action="barcode/pdf_file_for_barcode_create.php" target="_blank" method="post" style="margin-top:10px;">

					<div class="col-md-12">

						<div class="form-group form-group-sm" id="form-group_for_manufacturer">
							<label class="control-label col-sm-2" for="work_order_number" style="color:#00008B;">Work Order Number:</label>
							<div class="col-sm-5" style="padding-right:4px;">
								<select class="form-control for_auto_complete" id="work_order_number" name="work_order_number" onchange="details_information()">
								  <option >Select Work Order Number</option>

								  <?php
								  	$sql = "SELECT DISTINCT work_order_number
												FROM   packing_list";
									$result = mysqli_query($con, $sql) or die(mysqli_error($con));
									while($row = mysqli_fetch_array($result))
									{		
										  $work_order_number = $row['work_order_number'];
										  echo '<option value="'.$work_order_number.'">'.$work_order_number.'</option>';
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




