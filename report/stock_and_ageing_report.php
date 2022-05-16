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




// $sql="select * from user_login where user_id='$user_id' and `password`='$password'";

// $result=mysqli_query($con,$sql) or die(mysqli_error($con));

// $row = mysqli_fetch_assoc($result);

// if(mysqli_num_rows($result)<1)
// {

// 	header('Location: ../../logout.php');

// }

// else
// {
// 	$created_by = $row['user_id'];
// 	$creator_full_name = $row['user_name'];
// 	$creator_division = $row['organization_name'];
// 	$creator_dept = $row['user_type'];
// 	$location = $row['organization_location'];
// }

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

 function sending_data_of_for_report()
 {
 	var date_form=document.getElementById('date_form').value;
 	var date_to=document.getElementById('date_to').value;

    //$('#element').load('barcode/barcode_create.php?'+total;
    //$('#element').load('barcode/barcode_create.php?pp_number'+encodeURIComponent(pp_number);
    //$('#element').load('report/datewise_transection_details.php?date_form='+encodeURIComponent(date_form)+'&date_to='+encodeURIComponent(date_to));

    if ( (date_form == '') ) 
 	{
 		alert("Please provide date form");
 		document.getElementById("date_form").value = '';
 		document.getElementById("date_form").focus();
 	}

 	else if( (date_to == '') )
 	{
 		alert("Please provide date to");
 		document.getElementById("date_to").value = '';
 		document.getElementById("date_to").focus();
 	}

 	else
 	{
 		$.ajax({
	 		url: 'report/datewise_transection_details.php',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: {date_form: date_form, date_to: date_to},
	 		success: function( data, textStatus, jQxhr )
	 		{
	 				//alert(data);
	 				document.getElementById('details_info').innerHTML=data;
	 				datatable_script();
	 		},
	 		error: function( jqXhr, textStatus, errorThrown )
	 		{
	 				//console.log( errorThrown );
	 				alert(errorThrown);
	 		}
	 	}); // End of $.ajax({
 	}

 }

 function datatable_script()
 {
 	var table = $('#datatable-buttons').DataTable( {
       scrollY:        "500px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: '0%', targets: 0 }
        ],
        dom: 'Bfrtip',
        buttons: [
        	{
                extend: 'pdf',
                title: 'Date Wise Transaction Details',
                footer: true
            },
            {
                extend: 'print',
                title: 'Date Wise Transaction Details',
                footer: true
            },
            {
                extend: 'excel',
                title: 'Date Wise Transaction Details',
                footer: true
            }
        ],
        fixedColumns:   {
                            leftColumns: 2,
                            rightColumns: 1
                        }

    } );
 }

$('.for_auto_complete').chosen();

</script>
<div class="col-sm-12 col-md-12 col-lg-12">
	<div id='element'>

		<div class="panel panel-default"> <!-- This div will create a block/panel for FORM -->

				<div class="panel-heading" style="color:#191970;"><marquee><h3>Stock and Ageing Report</h3></marquee></div> <!-- This will create a upper block for FORM (Just Beautification) -->



        		<div class="form-group form-group-sm" id="datewise_transaction_details" style="overflow: auto;">

			         <table id="datatable-buttons" class="table table-striped table-bordered" style="border: 2px solid black">
					 <thead>


						<tr style="border: 2px solid black;">
								<th  style="border: 2px solid black;"></th> 
								<th  style="border: 2px solid black;"></th>
								<th  style="border: 2px solid black;"></th>
								<th  style="border: 2px solid black;"></th>
								<th  style="border: 2px solid black;"></th>
								<th  style="border: 2px solid black;"></th>
								<th  style="border: 2px solid black;"></th>
								<th  style="border: 2px solid black;"></th>
								<th  style="border: 2px solid black;"></th>
								<th  style="border: 2px solid black;"></th>
								<th  style="border: 2px solid black;"></th>
								<th  style="border: 2px solid black;"></th>
								<th  style="border: 2px solid black;"></th>
								<th  style="border: 2px solid black;"></th>
								<th  style="border: 2px solid black;"></th>
								<th colspan="2" style="border: 2px solid black;">Total Store Recived Qty</th>
								<th colspan="2" style="border: 2px solid black;">Reciving Balance (Yds)</th>
								<th colspan="3" style="border: 2px solid black;">Total Delivery Qty</th>
								<th colspan="2" style="border: 2px solid black;">Delivery Balance (Yds)</th>
								<th colspan="4" style="border: 2px solid black;">Stock Position (Real Time)</th> 
								<th style="border: 2px solid black;"></th>
								<th style="border: 2px solid black;"></th>
								<th colspan="2" style="border: 2px solid black;">Ageing of Stock (Rcv Starting date to Current day)</th>
							</tr>


							<tr style="border: 2px solid black;">
								<th style="border: 2px solid black;">SI</th> 
								<th style="border: 2px solid black;">Buyer</th>
								<th style="border: 2px solid black;">Garments</th>
								<th style="border: 2px solid black;">A/C Holder</th>
								<th style="border: 2px solid black;">Fabrication</th>
								<th style="border: 2px solid black;">Composition</th>
								<th style="border: 2px solid black;">Weave</th>
								<th style="border: 2px solid black;">Width</th>
								<th style="border: 2px solid black;">Process</th>
								<th style="border: 2px solid black;">GD Number</th>
								<th style="border: 2px solid black;">PI Number</th>
								<th style="border: 2px solid black;">PP Number</th>
								<th style="border: 2px solid black;">Work Order Number</th>
								<th style="border: 2px solid black;">Color/Design</th>
								<th style="border: 2px solid black;">Rate/Yds</th>
								<th style="border: 2px solid black;">Order Qty (Yds)</th>
								<th style="border: 2px solid black;">Roll</th>
								<th style="border: 2px solid black;">Yds.</th>
								<th style="border: 2px solid black;">Yds</th>
								<th style="border: 2px solid black;">%(from Order Qty)</th>
								<th style="border: 2px solid black;">Roll</th>
								<th style="border: 2px solid black;">Yds</th>
								<th style="border: 2px solid black;">value</th>
								<th style="border: 2px solid black;">Yds</th>
								<th style="border: 2px solid black;">%(from Order Qty)</th>
								<th style="border: 2px solid black;">A-Grade Yds</th>
								<th style="border: 2px solid black;">B-Grade Yds</th>
								<th style="border: 2px solid black;">TTL</th>
								<th style="border: 2px solid black;">Value</th>
								<th style="border: 2px solid black;">Type</th>
								<th style="border: 2px solid black;">Rack info (Row & Cubic Number)</th>
								<th style="border: 2px solid black;">Reciving Start date</th>
								<th style="border: 2px solid black;">Age (In Day's)</th>
								
							</tr>
						</thead>
						<tbody>
						<?php 

						

								//if(grade = 'A') then set sum(grade)  as grade_a,if(grade = 'B') then set sum(grade) as grade_b,IF(grade = A, sum(grade) as grade_a, sum(grade) as grade_b)
						   $sql_item_receiving = "SELECT customer_name,
							construction,
							composition,
							weave,
							customer_name,
							buyer,
							rate,
							finished_width,
							pi_no,
							order_qty,
							ac_holder,
							process,
							gd_number,
							work_order_number,
							pp_number,
							date_of_receipt,
							sum(length) as total_length_receiving,
							count(quantiy) as total_roll_receiving,type,
							GROUP_CONCAT(cubic_number SEPARATOR ', ') as cubic_number,
							-- GORUP_CONCAT(DISTINCT(cubic_number) SEPARATOR ', ') as cubic_number,
							DATEDIFF(date(NOW()),min(date_of_receipt)) as ageing,
							SUM(case when grade = 'A' then length ELSE 0 END ) as grade_a,
							SUM(case when grade = 'B' then length ELSE 0 END ) as grade_b
							FROM item_receiving 
							group by work_order_number";

						$result_item_receiving = mysqli_query($con, $sql_item_receiving) or die(mysqli_error($con));
						$s1 = 1;

						while ($row1 = mysqli_fetch_array($result_item_receiving)) 
						{
							$work_order_number = $row1['work_order_number'];
							$sql_active_length = "SELECT SUM(length) AS `active_length` FROM `item_receiving`  WHERE `work_order_number` = '$work_order_number' AND `active` = '1'";
							$result_active_length = mysqli_query($con,$sql_active_length);
							$row_active_length = mysqli_fetch_assoc($result_active_length);

							if($row_active_length['active_length'] > 0)
							{
								$order_quantity = $row1['order_qty'];
							$rate = $row1['rate'];
							$account_holder = $row1['ac_holder'];
							$customer_name = $row1['customer_name'];
							$buyer = $row1['buyer'];
							$process = $row1['process'];
							$width = $row1['finished_width'];
							

							$color_array = explode("-",$work_order_number);
							$color_array1 = explode("-",$work_order_number);

							if(isset($color_array[1]) )
							{
                                $color = $color_array[1];
							}
							else{
								$color = "";
							}
							
							
							$sql_item_issuing = "SELECT customer_name,
							construction,
							composition,
							weave,
							gd_number,
							work_order_number,
							pp_number,
							date_of_receipt,
							sum(length) as total_length_issuing,
							count(quantiy) as total_roll_issuing,type,
							-- GROUP_CONCAT(cubic_number SEPARATOR ', ') as cubic_number1,
							DATEDIFF(date(NOW()),min(date_of_receipt)) as ageing,
							SUM(case when grade = 'A' then length ELSE 0 END ) as grade_a,
							SUM(case when grade = 'B' then length ELSE 0 END ) as grade_b
							FROM item_issuing
							WHERE work_order_number = '$work_order_number'
							group by work_order_number";

							$result_item_issuing = mysqli_query($con, $sql_item_issuing) or die(mysqli_error($con));
							$row2 = mysqli_fetch_assoc($result_item_issuing);


							$sql_stock_cubic_number = "SELECT  GROUP_CONCAT(DISTINCT(cubic_number) SEPARATOR ', ') as `cubic_number` FROM `item_receiving` WHERE active='1' AND `work_order_number`='$work_order_number' GROUP BY `work_order_number`";
							$result_stock_cubic_number = mysqli_query($con, $sql_stock_cubic_number) or die(mysqli_error($con));
							$row_cubic_number = mysqli_fetch_assoc($result_stock_cubic_number);




							
							$construction = $row1['construction'];
							$composition = $row1['composition'];
							$weave = $row1['weave'];
							
							$gd_number = $row1['gd_number'];
							$pi_no = $row1['pi_no'];
							$work_order_number = $row1['work_order_number'];
							
							$pp_number = $row1['pp_number'];

							$total_roll_receiving = $row1['total_roll_receiving'];
							$total_store_receive = $row1['total_length_receiving'];
							$total_receive_balance = $order_quantity - $row1['total_length_receiving'];
							$percent_from_order_quantity_receiving = ($total_receive_balance/$order_quantity)*100;

							if(isset($row2['total_roll_issuing']))
							{
								$total_roll_issuing = $row2['total_roll_issuing'];

							}
							else{
								$total_roll_issuing = 0;
							}

							if(isset($row2['total_length_issuing']))
							{
								$total_store_issue = $row2['total_length_issuing'];
							}
							else{

								$total_store_issue = 0;

							}

							
							
							$total_issue_balance = $order_quantity - $total_store_issue;
							$percent_from_order_quantity_issuing = ($total_issue_balance/$order_quantity)*100;

							if(isset($row1['grade_a']))
							{
								$row1_grade_a = $row1['grade_a'];
							}
							else{
								$row1_grade_a = 0;
							}
                            if(isset($row1['grade_2']))
							{
								$row2_grade_a = $row1['grade_a'];
							}
							else{
								$row2_grade_a = 0;
							}
							if(isset($row1['grade_b']))
							{
								$row1_grade_b = $row1['grade_b'];
							}
							else{
								$row1_grade_b = 0;
							}
                            if(isset($row1['grade_2']))
							{
								$row2_grade_b = $row1['grade_a'];
							}
							else{
								$row2_grade_b = 0;
							}

							$grade_a_stock = $row1_grade_a - $row2_grade_a;
							$grade_b_stock = $row1_grade_b - $row2_grade_b;
							
							$type = $row1['type'];
							// $cubic_number = $row1['cubic_number'];
							$date_of_receipt = $row1['date_of_receipt'];
							$ageing = $row1['ageing'];

							$stock_cubic = $row_cubic_number['cubic_number'];
							
						  ?>	
							<tr>
							<td style="border: 2px solid black;"><?php echo $s1; ?></td>
							<td style="border: 2px solid black;"><?php echo $buyer;?></td>
							<td style="border: 2px solid black;"><?php echo $customer_name; ?></td>
							<td style="border: 2px solid black;"><?php echo $account_holder?></td>
							<td style="border: 2px solid black;"><?php echo $construction; ?></td>
							<td style="border: 2px solid black;"><?php echo $composition; ?></td>
							<td style="border: 2px solid black;"><?php echo $weave; ?></td>
							<td style="border: 2px solid black;"><?php echo $width; ?></td>
							<td style="border: 2px solid black;"><?php echo $process; ?></td>
							<td style="border: 2px solid black;"><?php echo $gd_number; ?></td>
							<td style="border: 2px solid black;"><?php echo $pi_no?></td>
							<td style="border: 2px solid black;"><?php echo $pp_number; ?></td>
							<td style="border: 2px solid black;"><?php echo $work_order_number; ?></td>
							<td style="border: 2px solid black;"><?php echo $color?></td>
							<td style="border: 2px solid black;"><?php echo $rate?></td>
							<td style="border: 2px solid black;"><?php echo $order_quantity?></td>
							<td style="border: 2px solid black;"><?php echo $total_roll_receiving; ?></td>
							<td style="border: 2px solid black;"><?php echo $total_store_receive; ?></td>
							<td style="border: 2px solid black;"><?php echo $total_receive_balance ?></td> 
							<td style="border: 2px solid black;"><?php echo $percent_from_order_quantity_receiving."%"?></td>
							<td style="border: 2px solid black;"><?php echo $total_roll_issuing;?></td>
							<td style="border: 2px solid black;"><?php echo $total_store_issue;?></td>
							<td style="border: 2px solid black;"><?php echo"$ ".$total_store_issue * $rate;?></td>
							<td style="border: 2px solid black;"><?php echo $total_issue_balance ?></td>
							<td style="border: 2px solid black;"><?php echo $percent_from_order_quantity_issuing."%"?></td>
							<td style="border: 2px solid black;"><?php echo $grade_a_stock?></td>
							<td style="border: 2px solid black;"><?php echo $grade_b_stock?></td>
							<td style="border: 2px solid black;"><?php echo ($total_store_receive - $total_store_issue); ?></td>
							<td style="border: 2px solid black;"><?php echo "$ ".($total_store_receive - $total_store_issue)*$rate; ?></td>
							<td style="border: 2px solid black;"><?php echo $type; ?></td>
							<td style="border: 2px solid black;"><?php echo $stock_cubic; ?></td>
							<td style="border: 2px solid black;"><?php echo $date_of_receipt?></td>
							<td style="border: 2px solid black;"><?php echo $ageing?></td>
							
							

							<?php
											
							$s1++;

							}

							
						}
						?>
						</tr>
						</tbody>
			         
			         </table>

			    </div> <!-- End of <div class="form-group form-group-sm" -->


		</div> <!-- End of <div class="panel panel-default"> -->

    </div> <!-- end of </div> -->
	<button id="excel_button" class="btn btn-success"><a id="downloadLink" onclick="exportF(this)" style="color: white;">Export to excel</a></button> 

</div> <!-- End of <div class="col-sm-12 col-md-12 col-lg-12"> -->

<script>

  function exportF(elem) {
    var table = document.getElementById("element");
    var html = table.innerHTML;
    var url = 'data:application/vnd.ms-excel,' + escape(html); // Set your html table into url 
    elem.setAttribute("href", url);
    elem.setAttribute("download", "stock_and_ageing_report.xls"); // Choose the file name
    return false;
}

</script>