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

 function sending_data_for_saving()
 {
 	//var form_validate=form_validation();
    var form_validate = 1;
	var rack_number = document.getElementById('rack_number').value;
 	var end = document.getElementById('end').value;
    
	
	 if(form_validate != false)
	 {

		$.ajax({
	 		url: 'cubic_number/add_cubic_number_with_end_position_saving.php.',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: {rack_number: rack_number, end: end},
	 		success: function( data, textStatus, jQxhr )
	 		{
	 				alert(data);
	 				
	 		},
	 		error: function( jqXhr, textStatus, errorThrown )
	 		{
	 				//console.log( errorThrown );
	 				alert(errorThrown);
	 		}
	 }); // End of $.ajax({

	 }
 	
}

function check_cubic_number_already_exist_or_not(e)
{
     //alert(e.value);
}

</script>

<script type='text/javascript' src='binholenumber/bin_hole_number_validation.js'></script>

<div class="col-sm-12 col-md-12 col-lg-12">
	<div id='element'>

		<div class="panel panel-default"> <!-- This div will create a block/panel for FORM -->

			 <div class="panel-heading" style="color:#191970;"><b>Cubic Number Generation</b></div> <!-- This will create a upper block for FORM (Just Beautification) -->

				<form class="form-horizontal row" action="" style="margin-top:10px;" method="post" name="cubic_number_saving_database" id="cubic_hole_number_saving_database">

					<div class="col-md-12">

                    <div class="form-group form-group-md" id="form-group_for_number">
                        <label class="control-label col-md-3" for="rack" style="margin-right:0px; color:#00008B;">Rack Number :</label>
                            <div class="col-md-5 field_container">
                                <select  class="form-control for_auto_complete" id="rack_number" name="rack_number">
                                            <option selected="selected" value="select">Select Rack</option>
                                           <?php 
                                                $rack = array('A','B','C','D','E','F','G','F','G','H','I','J');

                                                foreach($rack as $rack_number)
                                                {
                                                    echo '<option value="'.$rack_number.'">'.$rack_number.'</option>';
                                                }

                                            ?> 
                                </select>
                            </div>
                        </div> <!-- End of <div class="form-group form-group-md" id="form-group_for_received_by"> -->

                    

                       <!-- <div class="form-group form-group-md" id="form-group_for_rack_number">
								<label class="control-label col-md-3" for="roll_no" style="color:#00008B;">Rack Number :</label>
								<div class="col-md-5 field_container">
									<input type="text" class="form-control" id="rack_number" name="rack_number" placeholder="Enter rack Number" onkeyup="check_cubic_number_already_exist_or_not(this)">
								</div>
						</div> -->

                        <div class="form-group form-group-md" id="form-group_for_end">
								<label class="control-label col-md-3" for="end" style="color:#00008B;">End :</label>
								<div class="col-md-5 field_container">
									<input type="text" class="form-control" id="end" name="end" placeholder="Enter End position" >
								</div>
						</div>

                        <div class="form-group form-group-md">
							<div class="col-sm-offset-3 col-md-5">
								<button type="button" class="btn btn-primary" onClick="sending_data_for_saving()">Submit</button>
								<button type="reset" class="btn btn-success">Reset</button>
							</div>
					   </div>


					</div>

				</form>

		</div> <!-- End of <div class="panel panel-default"> -->

    </div> <!-- end of </div> -->

</div> <!-- End of <div class="col-sm-12 col-md-12 col-lg-12"> -->