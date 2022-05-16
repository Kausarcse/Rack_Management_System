<?php
session_start();

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



 function packing_list_report()
 {
 	var date_of_packing=document.getElementById('date_of_packing').value;
 	var work_order_number =document.getElementById('work_order_number').value;
 	
 		$.ajax({
	 		url: 'report/find_packing_list_details_report.php',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: {date_of_packing:date_of_packing, work_order_number: work_order_number},
	 		success: function( data, textStatus, jQxhr )
	 		{
	 				// alert(data);
	 				document.getElementById('form_details_info').innerHTML=data;
	 				$("#excel_button").show();  
					 $("#pdf_id_for_packing_list_report").show();
	 				datatable_script();
	 		},
	 		error: function( jqXhr, textStatus, errorThrown )
	 		{
	 				//console.log( errorThrown );
	 				alert(errorThrown);
	 		}
	 	}); // End of $.ajax({
 	

 }

$('.for_auto_complete').chosen();

</script>

<div class="col-sm-12 col-md-12 col-lg-12">
	<div id='element'>

		<div class="panel panel-default"> <!-- This div will create a block/panel for FORM -->

				<div class="panel-heading" style="color:#191970;"><b>Date Wise Packing List Report</b></div> <!-- This will create a upper block for FORM (Just Beautification) -->

				<form class="form-horizontal row" action="" style="margin-top:10px;" method="post" name="date_wise_barcode_transaction" id="date_wise_barcode_transaction">

					<div class="col-md-12">

						

                    <div class="form-group form-group-md" id="form-group_for_date_of_receipt">
								<label class="control-label col-md-3" for="date_of_packing" style="color:#00008B;">Date :</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="date_of_packing" name="date_of_packing" placeholder="Enter Date Of Receipt" autocomplete="off" required>
								</div>
								<div class="col-md-3"  >
									<input type="text" class="form-control" id="alternate_date_of_receipt" name="alternate_date_of_receipt" readonly>
								</div>
								<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('date_of_packing')" style="margin-top:6px;"></i>
						</div> 
								<script>
									$( function()
									{
										$( "#date_of_packing" ).datepicker(
										{
											showWeek: true, // This is for Showing Week in Datepicker Calender.
											altField: "#alternate_date_of_receipt", // This is for Descriptive Date Showing in Alternative Field.
											altFormat: "DD, d MM, yy" // This is for Descriptive Date Format in Alternative Field.
										}
										); 

										$( "#date_of_packing" ).datepicker( "option", "dateFormat", "dd/mm/yy" ); // This is for Date Format in Actual Date Field.
										$( "#date_of_packing" ).datepicker( "option", "showAnim", "drop" ); // This is for Datepicker Calender Animation in Actual Date Field.
									}
									); // End of $( function()
								</script>


							<div class="form-group form-group-md" id="form-group_for_received_by">

	                            <label class="control-label col-md-3" for="work_order_number" style="margin-right:0px; color:#00008B;">Work Order:</label>
	                                <div class="col-md-5 field_container">
	                                    <select  class="form-control for_auto_complete" id="work_order_number" name="work_order_number">
	                                                <option>Select Work Order</option>
	                                                <?php
	                                                    $sql = "SELECT work_order_number
	                                                                FROM  item_info";
	                                                    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
	                                                    while($row = mysqli_fetch_array($result))
	                                                    {       
	                                                          $work_order = $row['work_order_number'];
	                                                          echo '<option value="'.$work_order.'">'.$work_order.'</option>';
	                                                    }

	                                                ?>
	                                    </select>
	                                </div>
	                        </div>
						
						

						<div class="form-group form-group-sm">
							<div class="col-sm-offset-1 col-sm-5">
								<button type="button" class="btn btn-primary" onClick="packing_list_report()">Submit</button>
								<!-- <button type="reset" class="btn btn-success">Reset</button> -->
							</div>
						</div>

					</div>

				</form>

		</div> <!-- End of <div class="panel panel-default"> -->

    </div> <!-- end of </div> -->

    <div id="form_details_info">

    
							
	</div>

	<!-- <table class="table">
        <thead>
            <tr>
                <td style="text-align: center; font-size: 15px; color: red; font-weight: bold; padding: 0;"> -->
                <button id="excel_button" class="btn btn-success" style="display: none;"><a id="downloadLink" onclick="exportF(this)" style="color: white;">Export to excel</a></button>
                <!-- </td>
            </tr>
        </thead>
	</table> -->
	<?php
		//echo $all_data = $work_order_number.'?fs?'.$date_of_packing;
	?>
				<a href="report/pdf_file_for_packing_list_report.php?all_data=<?php echo $work_order_number.'?fs?'.$date_of_packing; ?>" target="_blank">
                    <button type="button" id="pdf_id_for_packing_list_report" name="pdf_id_for_packing_list_report" style="display: none;"  class="btn btn-primary btn-xs">Generate pdf file</button>
              	</a>
</div> <!-- End of <div class="col-sm-12 col-md-12 col-lg-12"> -->

			

<script>

  function exportF(elem) 
  {
    var table = document.getElementById("packing_list_details_report_form");
    var html = table.innerHTML;
    var url = 'data:application/vnd.ms-excel,' + escape(html); // Set your html table into url 
    elem.setAttribute("href", url);
    elem.setAttribute("download", "packing_list_report.xls"); // Choose the file name
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




