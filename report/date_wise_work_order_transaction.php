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



 function date_wise_work_order_transaction_report()
 {
 	var work_order_number=document.getElementById('work_order_number').value;
 

 	
 		$.ajax({
	 		url: 'report/date_wise_work_order_transaction_details.php',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: {work_order_number:work_order_number},
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

				<div class="panel-heading" style="color:#191970;"><b>Date Wise Barcode Transaction Report</b></div> <!-- This will create a upper block for FORM (Just Beautification) -->

				<form class="form-horizontal row" action="" style="margin-top:10px;" method="post" name="date_wise_work_order_transaction" id="date_wise_work_order_transaction">

					<div class="col-md-12">

						

						<div class="form-group form-group-md" id="form-group_work_order_number">
							<label class="control-label col-md-3" for="work_order_number" style="color:#00008B;">Work Order Number:</label>
							<div class="col-md-5" style="padding-right:4px;">
								<select class="form-control for_auto_complete" id="work_order_number" name="work_order_number" onchange="date_wise_work_order_transaction_report()">
								  <option >Select Work Order Number</option>

								  <?php
								  		$sql = "SELECT work_order_number
                                                                FROM  item_info";
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

				</form>

		</div> <!-- End of <div class="panel panel-default"> -->

    </div> <!-- end of </div> -->

    <div id="details_info">
		 
	<div class="panel panel-default">

<!-- <div class="form-group form-group-sm">
	 <label class="control-label col-sm-5" for="search">Datewise Transaction Details</label>
</div> End of <div class="form-group form-group-sm" -->

 <div class="form-group form-group-sm" id="datewise_transaction_details">

	  <table id="datatable-buttons" class="table table-striped table-bordered">
		  <thead>
			  <tr>
				  <th  style="border: 2px solid black;">SI</th>
				  <th  style="border: 2px solid black;">Date</th>
				  <th  style="border: 2px solid black;">Construction</th>
				  <th  style="border: 2px solid black;">Composition</th>
				  <th  style="border: 2px solid black;">Finished Width</th>
				  <th  style="border: 2px solid black;">Finished Type</th>
				  <th  style="border: 2px solid black;">Shade</th>
				  <th  style="border: 2px solid black;">Weave</th>
				  <th  style="border: 2px solid black;">Total Receiving</th>
				  <th  style="border: 2px solid black;">Total Issuing</th>
			  </tr>
		 </thead>
		 <tbody>
		 <?php 



				 // $sql = "SELECT total_receiving,total_issuing 
				 //         from item_receiving inner join datewise_transaction_smmary 
				 // 		on item_receiving.work_order_id = datewise_transaction_summary.work_order_id
				 // 		where item_receiving.barcode_code = '$barcode_code";


			   
				 $sql = "SELECT * FROM datewise_transaction_summary
				 ";

				 $result = mysqli_query($con, $sql) or die(mysqli_error($con));
				 
				$s1 = 1;
			 while ($row = mysqli_fetch_array($result)) 
			 {
				 
				 $transaction_date = $row['transaction_date'];
				 
				 $construction = $row['construction'];
				 $composition = $row['composition'];
				 $finished_width = $row['finished_width'];
				 $finished_type = $row['finished_type'];
				 $shade = $row['shade'];
				 $weave = $row['weave'];
				 $total_receiving = $row['total_receiving'];
				 $total_issuing = $row['total_issuing'];
			 ?>	
			  <tr>
				 <td  style="border: 2px solid black;"><?php echo $s1; ?></td>
				 <td  style="border: 2px solid black;"><?php echo $transaction_date; ?></td>
				 <td  style="border: 2px solid black;"><?php echo $construction; ?></td>
				 <td  style="border: 2px solid black;"><?php echo $composition; ?></td>
				 <td  style="border: 2px solid black;"><?php echo $finished_width; ?></td>
				 <td  style="border: 2px solid black;"><?php echo $finished_type; ?></td>
				 <td  style="border: 2px solid black;"><?php echo $shade; ?></td>
				 <td  style="border: 2px solid black;"><?php echo $weave; ?></td>
				 <td  style="border: 2px solid black;"><?php echo $total_receiving; ?></td>
				 <td  style="border: 2px solid black;"><?php echo $total_issuing; ?></td>

				 <?php
							   
				 $s1++;
			 }
		  ?>
		  </tr>
	   </tbody>
	  </table>

 </div> <!-- End of <div class="form-group form-group-sm" -->

</div>  <!-- end of <div class="panel panel-default"> -->
							
	</div>

	<div>
		<button id="excel_button" class="btn btn-success"><a id="downloadLink" onclick="exportF(this)" style="color: white;">Export to excel</a>
		</button>
	</div>

</div> <!-- End of <div class="col-sm-12 col-md-12 col-lg-12"> -->




<script>

  function exportF(elem) 
  {
    var table = document.getElementById("datewise_transaction_details");
    var html = table.innerHTML;
    var url = 'data:application/vnd.ms-excel,' + escape(html); // Set your html table into url 
    elem.setAttribute("href", url);
    elem.setAttribute("download", "work_order_transection.xls"); // Choose the file name
    return false;
  }

function generate_pdf_for_po_wise_production_summary(){
    
     let nbPages = 1;
    let sourceHtml = $('#element');

    
    html2pdf(sourceHtml[0], {
      margin: 1,
      filename: 'machine_wise_production_summary.pdf',
      image: { type: 'jpeg', quality: 0.98 },
     
      html2canvas: { dpi: 600, letterRendering: true, width: 2000, height: 3000  },
      jsPDF: { unit: 'pt', format: 'a4', orientation: 'portrait' }
    });  
}
</script>