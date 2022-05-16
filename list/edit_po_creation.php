<?php
// session_start();
include('../login/db_connection_class.php');
$obj = new DB_Connection_Class();
$obj->connection();
/*
$user_id = $_SESSION['user_id'];
$password = $_SESSION['password'];

$sql="select * from hrm_info.user_login where user_id='$user_id' and `password`='$password'";

$result=mysql_query($sql) or die(mysqli_error());
if(mysql_num_rows($result)<1)
{

	header('Location:logout.php');

}
*/
/*    $user_name ="Iftekhar";
    $user_id ="Iftekhar";
    $password ="1234";*/

    $po_id = $_GET['po_id'];
    $sql = "select * from `po_creation` WHERE `po_id`='$po_id'";
    $result= mysqli_query($con,$sql) or die(mysqli_error($con));
    $row1 = mysqli_fetch_array( $result);



?>
<!-- <script type='text/javascript' src='ccustomerr_form_validation.js'></script> -->

<style>

.form-group		/* This is for reducing Gap among Form's Fields */
{

	margin-bottom: 5px;

}

</style>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
</script>

<script>
 function sending_data_of_edit_po_creation_form_for_saving_in_database()
 {


    //    var validate = Form_Validation();
       var validate = true;
       var url_encoded_form_data = $("#po_creation_form").serialize(); //This will read all control elements value of the form	
       if(validate != false)
	   {


		  	 $.ajax({
			 		url: 'list/edit_po_creation_saving.php',
			 		dataType: 'text',
			 		type: 'post',
			 		contentType: 'application/x-www-form-urlencoded',
			 		data: url_encoded_form_data,
			 		success: function( data, textStatus, jQxhr )
			 		{
			 				alert(data);
			 				/*window.location = "settings/color.php";*/

			 		},
			 		error: function( jqXhr, textStatus, errorThrown )
			 		{
			 				//console.log( errorThrown );
			 				alert(errorThrown);
			 		}
			 }); // End of $.ajax({

       }//End of if(validate != false)

 }//End of function sending_data_of_color_form_for_saving_in_database()

</script>
<div class="col-sm-12 col-md-12 col-lg-12">

<div class="panel panel-default"> <!-- This div will create a block/panel for FORM -->

				<div class="panel-heading" style="color:#191970;"><b>PO</b></div> <!-- This will create a upper block for FORM (Just Beautification) -->

				<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item active" aria-current="page">Home</li>
					     <li class="breadcrumb-item"><a onclick="load_page('po_creation.php')">Add PO</a></li>
					  </ol>
				 </nav>

				<form class="form-horizontal" action="" style="margin-top:10px;" name="po_creation_form" id="po_creation_form">

                    
                    
                    <div><label class="form-control">Order Description</label> </div>



					    <div class="form-group form-group-sm" id="form-group_for_to_date" style="margin-right:0px; color:#00008B;">
                            <label class="control-label col-sm-3 " for="po_creation_date"> Date :</label>
							<div class="col-sm-5" style="padding-right: 0">
								 <input type="text" id="po_creation_date" class="form-control" name="po_creation_date" value="<?php echo $row1['po_creation_date']?>">
                                 
                                 <input type="hidden" id="po_number" class="form-control" name="po_number" value="<?php echo $row1['po_number']?>">
								
							</div>

							<div class="col-sm-1" style="padding-left: 0px">
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
							
                         </div>

					  <script>
						  $( function() {
						    //$( "#from_date" ).datepicker({ dateFormat: 'dd-mm-yy' });
						    $( "#po_creation_date" ).datepicker({ dateFormat: 'dd-mm-yy' });
						    
						  } );

						 
					   </script>

						<div class="form-group form-group-sm" id="form-group_for_po_number">
								<label class="control-label col-sm-3" for="po_number" style="color:#00008B;">PO No:</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="po_number" name="po_number" value="<?php echo $row1['po_number']?>" required>
									
								</div>
								<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('po_number')"></i>
						</div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_creation"> -->

					   <div class="form-group form-group-sm" id="form-group_for_customer_name">
								<label class="control-label col-sm-3" for="customer_name" style="margin-right:0px; color:#00008B;">Customer Name:<span style="color:red"> *</span></label>

									<div class="col-sm-5">
										<select  class="form-control for_auto_complete" id="customer_name" name="customer_name">
													<option select="selected" value="<?php echo $row1['customer_name'].'?fs?'.$row1['customer_id']?>"><?php echo $row1['customer_name']?></option>
													<?php 
														 $sql = 'select * from `customer` order by `customer_name`';
														 $result= mysqli_query($con,$sql) or die(mysqli_error($con));
														 while( $row = mysqli_fetch_array( $result))
														 {

															 echo '<option value="'.$row['customer_name'].'?fs?'.$row['customer_id'].'">'.$row['customer_name'].'</option>';

														 }

													 ?>
										</select>
									</div>
						</div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_customer_name"> -->

                        <div class="form-group form-group-sm" id="form-group_for_buyer_name">
								<label class="control-label col-sm-3" for="customer_name" style="margin-right:0px; color:#00008B;">Buyer Name:<span style="color:red"> *</span></label>

									<div class="col-sm-5">
										<select  class="form-control for_auto_complete" id="buyer_name" name="buyer_name">
													<option select="selected" value="<?php echo $row1['buyer_name'].'?fs?'.$row1['buyer_id']?>"><?php echo $row1['buyer_name']?></option>
													<?php 
														 $sql = 'select * from `buyer` order by `buyer_name`';
														 $result= mysqli_query($con,$sql) or die(mysqli_error($con));
														 while( $row = mysqli_fetch_array( $result))
														 {

															 echo '<option value="'.$row['buyer_name'].'?fs?'.$row['buyer_id'].'">'.$row['buyer_name'].'</option>';

														 }

													 ?>
										</select>
									</div>
						</div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_customer_name"> -->




			            <div class="form-group form-group-sm" id="form-group_for_to_date" style="margin-right:0px; color:#00008B;">
                            <label class="control-label col-sm-3 " for="po_order_received_date">Order Received Date :</label>
							<div class="col-sm-5" style="padding-right: 0">
								 <input type="text" id="po_order_received_date" class="form-control" name="po_order_received_date" value="<?php echo $row1['po_order_received_date']?>">

								
							</div>

							<div class="col-sm-1" style="padding-left: 0px">
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
							
                        </div>

                        <script>
							  $( function() {
							    //$( "#from_date" ).datepicker({ dateFormat: 'dd-mm-yy' });
							    $( "#po_order_received_date" ).datepicker({ dateFormat: 'dd-mm-yy' });
							    
							  } );

							 
						   </script>


                        <div class="form-group form-group-sm" id="form-group_for_to_date" style="margin-right:0px; color:#00008B;">
                            <label class="control-label col-sm-3 " for="product_delivery_date">Delivery Date Date :</label>
							<div class="col-sm-5" style="padding-right: 0">
								 <input type="text" id="product_delivery_date" class="form-control" name="product_delivery_date" value="<?php echo $row1['product_delivery_date']?>">

								
							</div>

							<div class="col-sm-1" style="padding-left: 0px">
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
							
                        </div>

                        <script>
							  $( function() {
							    //$( "#from_date" ).datepicker({ dateFormat: 'dd-mm-yy' });
							    $( "#product_delivery_date" ).datepicker({ dateFormat: 'dd-mm-yy' });
							    
							  } );

							 
						   </script>

						<div class="form-group form-group-sm" id="form-group_for_responsible_person">
								<label class="control-label col-sm-3" for="responsible_person" style="color:#00008B;">Responsible Person:</label>
								<div class="col-sm-5">

									<select  class="form-control for_auto_complete" id="responsible_person" name="responsible_person" >
													<option select="selected" value="<?php echo $row1['responsible_person']?>"><?php echo $row1['responsible_person']?></option>
													<?php 
														 $sql = "select employee_name from `user_info`";
														 $result= mysqli_query($con,$sql) or die(mysqli_error($con));
														 while( $row = mysqli_fetch_array( $result))
														 {

															 echo '<option value="'.$row['employee_name'].'">'.$row['employee_name'].'</option>';

														 }

													 ?>
									</select>

									
									
								</div>
								<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('responsible_person')"></i>
						</div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_creation"> -->




			            <div class="form-group form-group-sm" id="form-group_for_po_quantity">
			                <label class="control-label col-sm-3" for="po_quantity" style="color:#00008B;">Quantity:</label>
			                <div class="col-sm-5">
			                  <input type="text" class="form-control" id="po_quantity" name="po_quantity" value="<?php echo $row1['po_quantity']?>" required>
			                  
			                </div>
			                <i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('po_quantity')"></i>
			            </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_creation"> -->



			            <div class="form-group form-group-sm" id="form-group_for_product_category">
			                <label class="control-label col-sm-3" for="product_category" style="color:#00008B;">Product Category:</label>
			                <div class="col-sm-5">
			                  <input type="text" class="form-control" id="product_category" name="product_category" value="<?php echo $row1['product_category']?>" >
			                  
			                </div>
			                <i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('product_category')"></i>
			            </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_creation"> -->



			            <div class="form-group form-group-sm" id="form-group_for_order_type">
			                <label class="control-label col-sm-3" for="order_type" style="color:#00008B;">Order Type:</label>
			                <div class="col-sm-5">
			                  <input type="text" class="form-control" id="order_type" name="order_type" value="<?php echo $row1['order_type']?>" >
			                  
			                </div>
			                <i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('order_type')"></i>
			            </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_creation"> -->

			            <div class="form-group form-group-sm">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="button" class="btn btn-primary" onClick="sending_data_of_edit_po_creation_form_for_saving_in_database()">Update</button>
									
								</div>
						</div>



					</form>
				</div>  

</div> <!-- End of <div class="col-sm-12 col-md-12 col-lg-12"> -->