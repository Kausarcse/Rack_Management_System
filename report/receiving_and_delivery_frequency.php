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

				<div class="panel-heading" style="color:#191970;"><h3>Receiving And Delivery Frequency Report</h3></div> <!-- This will create a upper block for FORM (Just Beautification) -->



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
								<th colspan="2" style="border: 2px solid black;">Number of Receiving Frequency</th>
								<th colspan="2" style="border: 2px solid black;">Number of Delivery Frequency</th>
                                <th colspan="2" style="border: 2px solid black;">Order Status (Closed/Running)</th>
						
							</tr>


							<tr style="border: 2px solid black;">
								<th style="border: 2px solid black;">SI</th> 
								<th style="border: 2px solid black;">Work Order Number</th>
                                <th style="border: 2px solid black;">Buyer</th>
								<th style="border: 2px solid black;">Garments</th>
								<th style="border: 2px solid black;">Order Quantity</th>
								<th style="border: 2px solid black;">Delivery Yds</th>
								<th style="border: 2px solid black;">Delivery Balance</th>
								<th style="border: 2px solid black;">Times</th>
								<th style="border: 2px solid black;">Avg./Time</th>
								<th style="border: 2px solid black;">Times</th>
								<th style="border: 2px solid black;">Avg./Time</th>
								<th style="border: 2px solid black;">Status</th>
								<th style="border: 2px solid black;">Closing Date</th>	
								
							</tr>
						</thead>
						<tbody>
						<?php 

                        $sql_receiving_frequency = "SELECT work_order_number,`order_qty`,buyer,customer_name,count(DISTINCT(date_of_receipt)) AS receiving_frequency  FROM `item_receiving` GROUP BY `work_order_number`";
                        $result_receiving_frequency = mysqli_query($con,$sql_receiving_frequency) or die(mysqli_error($con));

						

								//if(grade = 'A') then set sum(grade)  as grade_a,if(grade = 'B') then set sum(grade) as grade_b,IF(grade = A, sum(grade) as grade_a, sum(grade) as grade_b)
						
						$s1 = 1;

						while ($row_receiving_frequency=mysqli_fetch_array($result_receiving_frequency))
						{
							

							$work_order_number = $row_receiving_frequency['work_order_number'];
                            $order_quantity = $row_receiving_frequency['order_qty'];
                            $buyer = $row_receiving_frequency['buyer'];
							$customer_name = $row_receiving_frequency['customer_name'];
                            $receiving_frequency = $row_receiving_frequency['receiving_frequency'];

                            $sql_issuing_frequency = "SELECT SUM(length) AS delivery_quantity,count(DISTINCT(date_of_receipt)) AS `delivery_frequency`,MAX(date_of_receipt) AS closing_date  FROM `item_issuing` WHERE `work_order_number`= '$work_order_number'";
                            $result_issuing_frequency = mysqli_query($con, $sql_issuing_frequency) or die(mysqli_error($con));
                            $row_issuing_frequency = mysqli_fetch_assoc( $result_issuing_frequency);

                            $delivery_frequency = $row_issuing_frequency['delivery_frequency'];
                            $delivery_quantity = $row_issuing_frequency['delivery_quantity'];
                           

                            $delivery_balance = $order_quantity - $delivery_quantity;

                            if(isset($delivery_frequency) && $delivery_frequency>0 )
                            {
                                $delivery_average_time = $order_quantity / $delivery_frequency;

                            }
                            else{
                                $delivery_average_time = $order_quantity;
                            }

                            if(isset($receiving_frequency) && $receiving_frequency > 0)
                            {
                                $receiving_average_time = $order_quantity / $receiving_frequency;
                            }
                            else{
                                $receiving_average_time = $order_quantity;
                            }

                            if($order_quantity === $delivery_quantity || $delivery_quantity > $order_quantity)
                            {
                                $status = "Closed";
                                $closing_date = $row_issuing_frequency['closing_date'];
                            }
                            else{
                                $status = "Active";
                                $closing_date = "";
                            }
                            


								
							
							
							
						  ?>	
							<tr>
							<td style="border: 2px solid black;"><?php echo $s1; ?></td>
							<td style="border: 2px solid black;"><?php echo $work_order_number;?></td>
							<td style="border: 2px solid black;"><?php echo $buyer ?></td>
							<td style="border: 2px solid black;"><?php echo $customer_name?></td>
							<td style="border: 2px solid black;"><?php echo $order_quantity ?></td>
							<td style="border: 2px solid black;"><?php echo $delivery_quantity ?></td>
							<td style="border: 2px solid black;"><?php echo  $delivery_balance ?></td>
							<td style="border: 2px solid black;"><?php echo $receiving_frequency?></td>
							<td style="border: 2px solid black;"><?php echo $receiving_average_time ?></td>
							<td style="border: 2px solid black;"><?php echo $delivery_frequency?></td>
							<td style="border: 2px solid black;"><?php echo $delivery_average_time ?></td>
							<td style="border: 2px solid black;"><?php echo $status ?></td>
							<td style="border: 2px solid black;"><?php echo $closing_date ?></td>

							<?php
											
							$s1++;

							

							
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
    elem.setAttribute("download", "receiving_and_delivery_frequency_report.xls"); // Choose the file name
    return false;
}

</script>