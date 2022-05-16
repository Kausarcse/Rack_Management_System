<?php
session_start();
include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

 $rack_number = $_POST['rack_number'];
 

?>




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


<div class="form-group form-group-md" id="form-group_for_row_number">
  <label class="control-label col-md-3" for="row_number" style="margin-right:0px; color:#00008B;">Row Number:</label>
    <div class="col-md-5 field_container">
        <select  class="form-control for_auto_complete" id="row_number" name="row_number" onchange="rack_number_and_row_number_for_cubic_number_generation()">
                    <option selected="selected" value="select">Select Row Number</option>
                    <?php 
                        $sql = "select row_number from `cubic_number_position` where `rack_number` = '$rack_number'";
                        $result= mysqli_query($con,$sql) or die(mysqli_error($con));
                        while( $row = mysqli_fetch_array($result))
                        {

                            echo '<option value="'.$row['row_number'].'">'.$row['row_number'].'</option>';

                        }

                    ?>
        </select>
    </div>
</div> <!-- End of <div class="form-group form-group-md" id="form-group_for_received_by"> -->