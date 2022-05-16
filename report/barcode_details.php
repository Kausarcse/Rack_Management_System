<?php
session_start();

// include('../db_znzqc_connection_class.php');
// $obj2 = new DB_Connection_Class();
// $obj2->connection();

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();



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



 function return_work_order_wise_barcode()
 {
 	var work_order_number=document.getElementById('work_order_number').value;
 

 	
 		$.ajax({
	 		url: 'report/return_work_order_wise_barcode.php',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: {work_order_number:work_order_number},
	 		success: function( data, textStatus, jQxhr )
	 		{
	 				// alert(data);
	 				document.getElementById('work_order_wise_details').innerHTML=data;
	 				//datatable_script();
	 		},
	 		error: function( jqXhr, textStatus, errorThrown )
	 		{
	 				//console.log( errorThrown );
	 				alert(errorThrown);
	 		}
	 	}); // End of $.ajax({
 	

 }



 function barcode_details(serial)
 {
	
	var barcode_code = document.getElementById('barcode_code_'+serial).value;
 


 	
 		$.ajax({
	 		url: 'report/return_single_barcode_details.php',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: {barcode_code:barcode_code},
	 		success: function( data, textStatus, jQxhr )
	 		{
	 				//alert(data);
	 				document.getElementById('work_order_wise_details').innerHTML=data;
	 				//datatable_script();
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

				<div class="panel-heading" style="color:#191970;"><b>Barcode Details Report</b></div> <!-- This will create a upper block for FORM (Just Beautification) -->

				<form class="form-horizontal row" action="" style="margin-top:10px;" method="post" name="date_wise_work_order_transaction" id="date_wise_work_order_transaction">

					<div class="col-md-12">

						

						<div class="form-group form-group-md" id="form-group_work_order_number">
							<label class="control-label col-md-3" for="work_order_number" style="color:#00008B;">Work Order Number:</label>
							<div class="col-md-5" style="padding-right:4px;">
								<select class="form-control for_auto_complete" id="work_order_number" name="work_order_number" onchange="return_work_order_wise_barcode()">
								  <option >Select Work Order Number</option>

								  <?php
								  		$sql = "SELECT DISTINCT work_order_number
                                                                FROM  item_receiving";
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
						
						

						<!-- <div class="form-group form-group-sm">
							<div class="col-sm-offset-1 col-sm-5">
								<button type="button" class="btn btn-primary" onClick="date_wise_barcode_transaction_report()">Submit</button>
								<button type="reset" class="btn btn-success">Reset</button> 
							</div>
						</div> -->

					</div>

				

		</div> <!-- End of <div class="panel panel-default"> -->

    </div> <!-- end of </div> -->

    <div id="details_info">
		 
	<div class="panel panel-default">

<!-- <div class="form-group form-group-sm">
	 <label class="control-label col-sm-5" for="search">Datewise Transaction Details</label>
</div> End of <div class="form-group form-group-sm" -->
<div id="work_order_wise_details">
 <div class="form-group form-group-sm" id="datewise_transaction_details">

	  <table id="datatable-buttons" class="table table-striped table-bordered">
		  <thead>
			  <tr>
				  <th>SI</th>
				  <th>Barcodes</th>
				  <th>Construction</th>
				  <th>Composition</th>
				  <th>Finished Width</th>
				  <th>Finished Type</th>
				  <th>Shade</th>
				  <th>Weave</th>
				  <th>Details</th>
				  
			  </tr>
		 </thead>
		 <tbody>
		 <?php 



				 // $sql = "SELECT total_receiving,total_issuing 
				 //         from item_receiving inner join datewise_transaction_smmary 
				 // 		on item_receiving.work_order_id = datewise_transaction_summary.work_order_id
				 // 		where item_receiving.barcode_code = '$barcode_code";


			   
				 $sql = "SELECT * FROM item_receiving";

				 $result = mysqli_query($con, $sql) or die(mysqli_error($con));
				 
				$s1 = 1;
			 while ($row = mysqli_fetch_array($result)) 
			 {
				 
				 $barcode_code = $row['barcode_code'];
				 
				 $construction = $row['construction'];
				 $composition = $row['composition'];
				 $finished_width = $row['finished_width'];
				 $finished_type = $row['finished_type'];
				 $shade = $row['shade'];
				 $weave = $row['weave'];
				
			 ?>	
			  <tr>
				 <td><?php echo $s1; ?></td>
				 <td><?php echo $barcode_code; ?></td>
				 <td><?php echo $construction; ?></td>
				 <td><?php echo $composition; ?></td>
				 <td><?php echo $finished_width; ?></td>
				 <td><?php echo $finished_type; ?></td>
				 <td><?php echo $shade; ?></td>
				 <td><?php echo $weave; ?></td>
				 
				 <input type="hidden" id="serial_<?php echo $s1?>" name="serial_<?php echo $s1?>" value="<?php echo $barcode_code?>">
				 <input type="hidden" id="barcode_code_<?php echo $s1?>" name="barcode_code_<?php echo $s1?>" value="<?php echo $barcode_code?>">
				 <td><button type="button" id="barcode_details_button_<?php echo $s1?>" name="barcode_details_button_<?php echo $s1?>" value="<?php echo $s1?>" class="btn btn-success" onclick="barcode_details(this.value)">Details</button></td>

				 <?php
							   
				 $s1++;
			 }
		  ?>
		  </tr>
	   </tbody>
	  </table>

 </div> <!-- End of <div class="form-group form-group-sm" -->

</div>  <!-- end of <div class="panel panel-default"> -->
</form>
	</div>	

							
	</div>

</div> <!-- End of <div class="col-sm-12 col-md-12 col-lg-12"> -->




