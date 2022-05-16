<?php
session_start();
include('../login/db_connection_class.php');
$obj = new DB_Connection_Class();
$obj->connection();

?>
<!-- <script type='text/javascript' src='process/travel_card_creation_form_validation.js'></script> -->

<style>

.form-group		/* This is for reducing Gap among Form's Fields */
{

	margin-bottom: 5px;

}

</style>

<script>

$(document).ready(function() 
{
    $('#datatable-buttons').DataTable();
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
		for(var i=0;i<checkbox_element.length;i++)
		{

				checkbox_element[i].checked = false;

		}
}


 /******************************************For Auto Complete*****************************************/

 $(".for_auto_complete").chosen()/**/

 /******************************************For Auto Complete*****************************************/

 

</script>
<div class="col-sm-12 col-md-12 col-lg-12">


			    <div class="panel panel-default" id="travel_card_list">
                       <div><label class="form-control">Barcode List</label> </div>
        	
                      <div class="form-group form-group-sm" id="form-group_for_travel_card">

					         <table id="datatable-buttons" class="table table-striped table-bordered">
					         	<thead>
					                 <tr>
					                 <th style="text-align: center;">SI</th>
					                 <th style="text-align: center;">Barcode No</th>
					                 <th style="text-align: center;">Action</th>
					                 </tr>
					            </thead>
					            <tbody>
					            <?php 
					                            $s1 = 1;
					                            $sql_for_process_route = "SELECT * FROM roll_information_barcode ORDER BY id DESC";

					                            $res_for_process_route = mysqli_query($con, $sql_for_process_route);

					                            while ($row = mysqli_fetch_assoc($res_for_process_route)) 
					                            { 

                                                
 

					             ?>

					             <tr>
					                <td><?php echo $s1; ?></td>
					                <td><?php echo $row['barcode_code']; ?></td>
					                <td>
					                	<a  target="_blank" href="barcode/pdf_show.php?barcode_code=<?php echo $row['barcode_code']; ?>"><button class="btn btn-warning btn-xs" id="travel_card_pdf_generation" id="travel_card_pdf_generation">  Generate Barcode</button></a>  
					                </td>
					               
					                      

					                <?php
					                              
					                $s1++;
					                   }
					                 ?> 
					             </tr>
					          </tbody>
					         </table>

					     </div>  <!--  End of <div class="form-group form-group-sm" id="form-group_for_travel_card"> -->




					     </div> <!-- end of <div class="panel-heading" style="color:#191970;"><b>Process Description</b></div> -->

						
					</div> <!-- end of <div class="panel-heading" style="color:#191970;"><b>Order Description</b></div> -->



					














					