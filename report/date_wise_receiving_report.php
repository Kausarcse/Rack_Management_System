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



 function date_wise_receiving_report()
 {
 	var date_of_receipt=document.getElementById('date_of_receipt').value;
 

 	
 		$.ajax({
	 		url: 'report/date_wise_receiving_report_details.php',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: {date_of_receipt:date_of_receipt},
	 		success: function( data, textStatus, jQxhr )
	 		{
	 				// alert(data);
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

//  function datatable_script()
//  {
//  	var table = $('#datatable-buttons').DataTable( {
//        scrollY:        "500px",
//         scrollX:        true,
//         scrollCollapse: true,
//         paging:         false,
//         columnDefs: [
//             { width: '0%', targets: 0 }
//         ],
//         dom: 'Bfrtip',
//         buttons: [
//         	{
//                 extend: 'pdf',
//                 title: 'Date Wise Transaction Details',
//                 footer: true
//             },
//             {
//                 extend: 'print',
//                 title: 'Date Wise Transaction Details',
//                 footer: true
//             },
//             {
//                 extend: 'excel',
//                 title: 'Date Wise Transaction Details',
//                 footer: true
//             }
//         ],
//         fixedColumns:   {
//                             leftColumns: 2,
//                             rightColumns: 1
//                         }

//     } );
//  }

$('.for_auto_complete').chosen();

</script>
<div class="col-sm-12 col-md-12 col-lg-12">
	<div id='element'>

		<div class="panel panel-default"> <!-- This div will create a block/panel for FORM -->

				<div class="panel-heading" style="color:#191970;"><b>Date Wise Receive Report</b></div> <!-- This will create a upper block for FORM (Just Beautification) -->

				<form class="form-horizontal row" action="" style="margin-top:10px;" method="post" name="date_wise_barcode_transaction" id="date_wise_barcode_transaction">

					<div class="col-md-12">

						

                    <div class="form-group form-group-md" id="form-group_for_date_of_receipt">
								<label class="control-label col-md-3" for="date_of_receipt" style="color:#00008B;">Date :</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="date_of_receipt" name="date_of_receipt" placeholder="Enter Date Of Receipt" autocomplete="off" required>
								</div>
								<div class="col-md-3"  >
									<input type="text" class="form-control" id="alternate_date_of_receipt" name="alternate_date_of_receipt" readonly>
								</div>
								<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('date_of_receipt')" style="margin-top:6px;"></i>
						</div> 
								<script>
									$( function()
									{
										$( "#date_of_receipt" ).datepicker(
										{
											showWeek: true, // This is for Showing Week in Datepicker Calender.
											altField: "#alternate_date_of_receipt", // This is for Descriptive Date Showing in Alternative Field.
											altFormat: "DD, d MM, yy" // This is for Descriptive Date Format in Alternative Field.
										}
										); 

										$( "#date_of_receipt" ).datepicker( "option", "dateFormat", "dd/mm/yy" ); // This is for Date Format in Actual Date Field.
										$( "#date_of_receipt" ).datepicker( "option", "showAnim", "drop" ); // This is for Datepicker Calender Animation in Actual Date Field.
									}
									); // End of $( function()
								</script>

						

						
						

						<div class="form-group form-group-sm">
							<div class="col-sm-offset-1 col-sm-5">
								<button type="button" class="btn btn-primary" onClick="date_wise_receiving_report()">Submit</button>
								<!-- <button type="reset" class="btn btn-success">Reset</button> -->
							</div>
						</div>

					</div>

				</form>

		</div> <!-- End of <div class="panel panel-default"> -->

    </div> <!-- end of </div> -->

    <div id="details_info">
							
	</div>

</div> <!-- End of <div class="col-sm-12 col-md-12 col-lg-12"> -->




