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


<!-- <script type='text/javascript' src='all_it_asset_forms/issuing/item_issuing_form_validation.js'></script> -->

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


 


function barcode_change(barcode_code, count)
{
  var borcode_previous;
  
  var work_order_number=document.getElementById('work_order_number').value;

  var total_length = 0;
  
  for(var i = 1; i < count; i++)
  {
    var length  = document.getElementById('length'+i).value;
    borcode_previous = document.getElementById('barcode_code'+i).value;
    total_length = parseInt(length) + total_length;

    if(barcode_code == borcode_previous)
    {
        alert("This Barcode already taken");
        return false;
    }
  }

  report_all_barcodes = document.getElementById('all_barcodes').value;
  var barcodes_array = report_all_barcodes.split(", ");


 	$.ajax({
	 		url: 'delivery/return_barcode_wise_amount.php',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: {barcode_code: barcode_code, count:count, work_order_number: work_order_number, length: length, total_length: total_length},
	 		success: function( data, textStatus, jQxhr )
	 		{
	 				
	 				document.getElementById('details_amount'+count).innerHTML=data;
           
           var total_length = document.getElementById('total_length_'+count).value;
           document.getElementById('tot_length').value =total_length;
    
	 				$('.for_auto_complete').chosen();
	 		},
	 		error: function( jqXhr, textStatus, errorThrown )
	 		{
	 				
	 				alert(errorThrown);
	 		}
	 }); // End of $.ajax({
}
 
function date_wise_unloading_report()
{
    var date_of_delivery=document.getElementById('date_of_delivery').value;
    var work_order_number=document.getElementById('work_order_number').value;
    
    $.ajax({
      url: 'delivery/find_date_and_work_order_wise_unloading_plan_report.php',
      dataType: 'text',
      type: 'post',
      contentType: 'application/x-www-form-urlencoded',
      data: {date_of_delivery:date_of_delivery, work_order_number: work_order_number},
      success: function( data, textStatus, jQxhr )
      {
          // alert(data);
          document.getElementById('details_info').innerHTML=data;
          $('#total_length_show').show();
          //datatable_script();
      },
      error: function( jqXhr, textStatus, errorThrown )
      {
          //console.log( errorThrown );
          alert(errorThrown);
      }
    }); // End of $.ajax({
}

function sending_issue_data_in_database()
{
    //var count = document.getElementById('count').value;
    var url_encoded_form_data = $("#dynamically_allocated_form").serialize(); 
    //alert(url_encoded_form_data);

    $.ajax({
			 		url: 'issuing/all_item_issuing_saving.php',
			 		dataType: 'text',
			 		type: 'post',
			 		contentType: 'application/x-www-form-urlencoded',
			 		data: url_encoded_form_data,
			 		success: function( data, textStatus, jQxhr )
			 		{
			 				alert(data);
			 		},
			 		error: function( jqXhr, textStatus, errorThrown )
			 		{
			 				alert(errorThrown);
			 		}
			 });
}


</script>

<!-- <div class="col-sm-12 col-md-12 col-lg-12"> -->
  <div id='element'>

    <div class="panel panel-default"> <!-- This div will create a block/panel for FORM -->

        <div class="panel-heading" style="color:#191970;"><b>Date Wise Unloading Report</b></div> <!-- This will create a upper block for FORM (Just Beautification) -->

        <form class="form-horizontal row" action="" style="margin-top:10px;" method="post" name="date_wise_barcode_transaction" id="date_wise_barcode_transaction">

          <div class="col-md-12">

            <div class="form-group form-group-md" id="form-group_for_date_of_receipt">
                <label class="control-label col-md-3" for="date_of_delivery" style="color:#00008B;">Date Of Delivery:</label>
                <div class="col-md-2">
                  <input type="text" class="form-control" id="date_of_delivery" name="date_of_delivery" placeholder="Enter Date Of Delivery" autocomplete="off" required>
                </div>
                <div class="col-md-3"  >
                  <input type="text" class="form-control" id="alternate_date_of_receipt" name="alternate_date_of_receipt" readonly>
                </div>
                <i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('date_of_delivery')" style="margin-top:6px;"></i>
            </div> 
                <script>
                  $( function()
                  {
                    $( "#date_of_delivery" ).datepicker(
                    {
                      showWeek: true, // This is for Showing Week in Datepicker Calender.
                      altField: "#alternate_date_of_receipt", // This is for Descriptive Date Showing in Alternative Field.
                      altFormat: "DD, d MM, yy" // This is for Descriptive Date Format in Alternative Field.
                    }
                    ); 

                    $( "#date_of_delivery" ).datepicker( "option", "dateFormat", "dd/mm/yy" ); // This is for Date Format in Actual Date Field.
                    $( "#date_of_delivery" ).datepicker( "option", "showAnim", "drop" ); // This is for Datepicker Calender Animation in Actual Date Field.
                  }
                  ); // End of $( function()
                </script>

                <div class="form-group form-group-md" id="form-group_for_received_by">

                <label class="control-label col-md-3" for="work_order_number" style="margin-right:0px; color:#00008B;">Work Order:</label>
                    <div class="col-md-5 field_container">
                        <select  class="form-control for_auto_complete" id="work_order_number" name="work_order_number" onchange="date_wise_unloading_report()">
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

          </div>

        <!--form tag-->


       

    </div> 

    <div class="panel panel-default">
          <div id="details_info"></div>
    </div>

  </div> 
                                      

    
  </form>
</div>





