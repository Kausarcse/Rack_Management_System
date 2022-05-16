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
     form_validate = 1;
	var rack = document.getElementById('rack').value;
 	var number = document.getElementById('number').value;
     var cubic_number = document.getElementById('cubic_number').value;
    
	
	 if(form_validate != false)
	 {

		$.ajax({
	 		url: 'cubic_number/add_cubic_number_with_position_saving.php.',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: {rack: rack, number: number, cubic_number: cubic_number},
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

function check_this_cubic_number_existance()
{
    //var form_validate=form_validation();
    var form_validate = 1;
	var rack = document.getElementById('rack').value;
 	var number = document.getElementById('number').value;
    var cubic_number = rack + number;

    
	
	 if(form_validate != false)
	 {

		$.ajax({
	 		url: 'cubic_number/merge_rack_number.php.',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: {cubic_number : cubic_number},
	 		success: function( data, textStatus, jQxhr )
	 		{
	 				//alert(data);
                    // document.getElementById('cubic_number').innerHTML.value=cubic_number;
                    document.getElementById('cubic_number_id').innerHTML=data;
	 				
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

			 <div class="panel-heading" style="color:#191970;"><b>Row Number Generation</b></div> <!-- This will create a upper block for FORM (Just Beautification) -->

				<form class="form-horizontal row" action="" style="margin-top:10px;" method="post" name="cubic_number_saving_database" id="cubic_hole_number_saving_database">

					<div class="col-md-12">

                        <div class="form-group form-group-md" id="form-group_for_rack">
                        <label class="control-label col-md-3" for="rack" style="margin-right:0px; color:#00008B;">Rack :</label>
                            <div class="col-md-5 field_container">
                                <select  class="form-control for_auto_complete" id="rack" name="rack">
                                            <option selected="selected" value="select">Select Rack</option>
                                            <?php 
                                                $sql = 'select rack_number from `cubic_number` order by `rack_number`';
                                                $result= mysqli_query($con,$sql) or die(mysqli_error($con));
                                                while( $row = mysqli_fetch_array($result))
                                                {

                                                    echo '<option value="'.$row['rack_number'].'">'.$row['rack_number'].'</option>';

                                                }

                                            ?>
                                </select>
                            </div>
                        </div> <!-- End of <div class="form-group form-group-md" id="form-group_for_received_by"> -->

                        <div class="form-group form-group-md" id="form-group_for_number">
                        <label class="control-label col-md-3" for="rack" style="margin-right:0px; color:#00008B;">Number :</label>
                            <div class="col-md-5 field_container">
                                <select  class="form-control for_auto_complete" id="number" name="number" onchange="check_this_cubic_number_existance()">
                                            <option selected="selected" value="select">Select Number</option>
                                            <?php 
                                                $sql = 'select end from `cubic_number`';
                                                $result= mysqli_query($con,$sql) or die(mysqli_error($con));
                                                $row = mysqli_fetch_array($result);
                                                for($i=1; $i<= $row['end']; $i++)
                                                {
                                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                                }

                                            ?>
                                </select>
                            </div>
                        </div> <!-- End of <div class="form-group form-group-md" id="form-group_for_received_by"> -->

                        <div id="cubic_number_id">
                            <div class="form-group form-group-md" id="form-group_for_cubic_number">
                                    <label class="control-label col-md-3" for="cubic_number" style="color:#00008B;">Cubic Number :</label>
                                    <div class="col-md-5 field_container">
                                        <input type="text" class="form-control" id="cubic_number" name="cubic_number">
                                    </div>
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