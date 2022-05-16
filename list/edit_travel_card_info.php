<?php
session_start();
include('../login/db_connection_class.php');
$obj = new DB_Connection_Class();
$obj->connection();

  $travel_card_id=$_GET['travel_card_id'];
 $sql = "select * from `travel_card_details` tcdft 
      Left JOIN po_creation pc on tcdft.po_id= pc.po_id
      Left JOIN po_details pd on tcdft.po_details_id= pd.po_details_id
       WHERE `travel_card_id`='$travel_card_id'";
 $result= mysqli_query($con,$sql) or die(mysqli_error($con));
 $row_for_travel_card = mysqli_fetch_array( $result);

?>
<!-- <script type='text/javascript' src='process/edit_travel_card_form_validation.js'></script> -->

<style>

.form-group		/* This is for reducing Gap among Form's Fields */
{

	margin-bottom: 5px;

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
</script>

<script>


function po_number_change()
 {
 	 var po_number = document.getElementById("po_number").value;
 	 $.ajax({
	 		url: 'process/returning_po_details_info.php',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: {po_number: po_number},
	 		success: function( data, textStatus, jQxhr )
	 		{      /*document.getElementById("form-group_for_po_number").innerHTML=data;*/
	 				//alert(data);
	 				document.getElementById("po_details_info").innerHTML=data;
	 				$('.for_auto_complete').chosen();
	 		},
	 		error: function( jqXhr, textStatus, errorThrown )
	 		{
	 				//console.log( errorThrown );
	 				alert(errorThrown);
	 		}
	 }); // End of $.ajax({	
 }


function get_po_details(po_details_id)
{
   
			var po_details_id = po_details_id;
			var po_number = document.getElementById("po_number").value;

            $.ajax({
			 		url: 'process/returning_po_details.php',
			 		dataType: 'text',
			 		type: 'post',
			 		contentType: 'application/x-www-form-urlencoded',
			 		data: {po_details_id: po_details_id, po_number: po_number},
			 		      
			 		success: function( data, textStatus, jQxhr )
			 		{    
			 				
		 				var splitted_data_for_po = data.split('?fs?');
		 				document.getElementById('customer_id').value=splitted_data_for_po[0];			 				
		 				document.getElementById('customer_name').value=splitted_data_for_po[1];			 				
		 				document.getElementById('buyer_id').value=splitted_data_for_po[2];			 				
		 				document.getElementById('buyer_name').value=splitted_data_for_po[3];			 				
		 				document.getElementById('po_quantity').value=splitted_data_for_po[4];			 				
		 				document.getElementById('product_delivery_date').value=splitted_data_for_po[5];			 				
		 				document.getElementById('responsible_person').value=splitted_data_for_po[6];			 				
		 				document.getElementById('product_category').value=splitted_data_for_po[7];			 				
		 				document.getElementById('order_type').value=splitted_data_for_po[8];

		 				
		 				document.getElementById('product_delivery_date').value=splitted_data_for_po[9];
		 				document.getElementById('po_order_received_date').value=splitted_data_for_po[10];	


		 				document.getElementById('measurement_of_carton_length').value=splitted_data_for_po[11];	
		 				document.getElementById('measurement_of_carton_width').value=splitted_data_for_po[12];	
		 				document.getElementById('measurement_of_cartoon_height').value=splitted_data_for_po[13];	
		 				document.getElementById('measurement_of_cartoon_ply').innerHTML=splitted_data_for_po[14];	
		 				document.getElementById('paper_type_linear').value=splitted_data_for_po[15];	
		 				document.getElementById('paper_type_medium').value=splitted_data_for_po[16];	
		 				document.getElementById('paper_type_linear_1').value=splitted_data_for_po[17];

		 				document.getElementById('flute_type').innerHTML=splitted_data_for_po[18];

		 				// var flute_type = splitted_data_for_po[18];
		 				// var res = flute_type.split(",");
		 				// for (var i = 0; i <= res.length; i++) 
		 				// {
		 				// 	alert(res[i]);
		 				// 	document.getElementById(res[i]).checked = true;
		 				// 	//document.querySelector('.messageCheckbox:checked').checked = true;
		 				// }

		 				document.getElementById('flute_type').value=splitted_data_for_po[18];

		 				document.getElementById('printing_status').innerHTML=splitted_data_for_po[19];	
		 				document.getElementById('dye_cutting').innerHTML=splitted_data_for_po[20];	
		 				document.getElementById('carton_quantity').value=splitted_data_for_po[21];	
		 				document.getElementById('ratio').value=splitted_data_for_po[22];	
		 				document.getElementById('board_quantity').value=splitted_data_for_po[23];	
		 				document.getElementById('roll_size').value=splitted_data_for_po[24];	
		 				document.getElementById('score_or_creez_size').value=splitted_data_for_po[25];	
		 				document.getElementById('slotting_size').value=splitted_data_for_po[26];

		 					
		 				document.getElementById('cutter_size').innerHTML=splitted_data_for_po[28];	
		 				document.getElementById('po_details_id').value=splitted_data_for_po[29];	



							
			 		},
			 		error: function( jqXhr, textStatus, errorThrown )
			 		{       
			 				//console.log( errorThrown );
			 				alert(errorThrown);
			 		}
			}); 
}   



 function sending_data_of_edit_travel_card_form_for_saving_in_database()
 {


      /* var validate = PO_Form_Validation();*/
       var url_encoded_form_data = $("#edit_travel_card_form").serialize(); //This will read all control elements value of the form	
       /*if(validate != false)
	   {*/


		  	 $.ajax({
			 		url: 'list/edit_travel_card_info_saving.php',
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
			 				//console.log( errorThrown );
			 				alert(errorThrown);
			 		}
			 }); // End of $.ajax({

       /*}*///End of if(validate != false)

 }//End of function sending_data_of_edit_travel_card_form_for_saving_in_database()



 function sending_data_for_delete(po_id)
 {
      
       var url_encoded_form_data = 'po_id='+po_id;
       
		  	 $.ajax({
			 		url: 'list/po_creation_deleting.php',
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
			 				//console.log( errorThrown );
			 				alert(errorThrown);
			 		}
			 }); // End of $.ajax({



 }//End of function sending_data_of_color_form_for_delete_from_database()


 /******************************************For Auto Complete*****************************************/

 $(".for_auto_complete").chosen()/**/

 /******************************************For Auto Complete*****************************************/

 

</script>
<div class="col-sm-12 col-md-12 col-lg-12">

		<div class="panel panel-default"> <!-- This div will create a block/panel for FORM -->

				<!-- <div class="panel-heading" style="color:#191970;"><b>Travel Card Info</b></div>  --><!-- This will create a upper block for FORM (Just Beautification) -->

				<!-- <nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item active" aria-current="page">Home</li>
					     <li class="breadcrumb-item"><a onclick="load_page('process/travel_card_info.php')">Add Travel Card Info</a></li>
					  </ol>
				 </nav> -->

				<form class="form-horizontal" action="" style="margin-top:10px;" name="edit_travel_card_form" id="edit_travel_card_form">
                    
                    <div class="panel-heading" style="color:#191970;"><b>Order Description</b></div>

					    <div class="form-group form-group-sm" id="form-group_for_to_date" style="margin-right:0px; color:#00008B;">
                            <label class="control-label col-sm-3 " for="travel_card_creation_date">Travel Card Creation Date :</label>
							<div class="col-sm-5" style="padding-right: 0">
								 <input  type="text" id="travel_card_creation_date" name="travel_card_creation_date" class="form-control" value="<?php echo $row_for_travel_card['travel_card_creation_date'];?>">


								  <input type="hidden" id="travel_card_id" name="travel_card_id"  class="form-control" value="<?php echo $travel_card_id;?>">

								
							</div>

							<div class="col-sm-1" style="padding-left: 0px">
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
							
                        </div>

						  <script>
							  $( function() {
							    //$( "#from_date" ).datepicker({ dateFormat: 'dd-mm-yy' });
							    $( "#travel_card_creation_date" ).datepicker({ dateFormat: 'dd-mm-yy' });
							    
							  } );

							 
						   </script>

						<div class="form-group form-group-sm" id="form-group_for_po_number">
								<label class="control-label col-sm-3" for="po_number" style="color:#00008B;">PO No:</label>
								<div class="col-sm-5">

									<select  class="form-control for_auto_complete" id="po_number" name="po_number" onchange="po_number_change()"> 
													<option select="selected" value="<?php echo  $row_for_travel_card['po_number'].'?fs?'.$row_for_travel_card['po_id']; ?>"><?php echo $row_for_travel_card['po_number'] ?></option>
													<?php 
														 $sql = 'select * from `po_creation` order by `customer_name`';
														 $result= mysqli_query($con,$sql) or die(mysqli_error());
														 while( $row = mysqli_fetch_array( $result))
														 {

															 echo '<option value="'.$row['po_number'].'?fs?'.$row['po_id'].'">'.$row['po_number'].'</option>';

														 }

													 ?>

													 
									</select>

									
									
								</div>
								<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('po_number')"></i>
						</div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_creation"> -->


						<div id="po_details_info">
							<div class="form-group form-group-sm" id="form-group_for_po_number">

								<label><span id="show"></span></label>
	                                
								  
									<label class="control-label col-sm-3" for="po_details" style="color:#00008B;">PO Details:</label>
									<div class="col-sm-5">
										<select  class="form-control for_auto_complete" id="po_details" name="po_details" onchange="get_po_details(this.value)">


												<option select="selected" value="<?php echo $row_for_travel_card['row_id'].'"Height: '.$row_for_travel_card['measurement_of_cartoon_height'].', Width: '.$row_for_travel_card['measurement_of_carton_width'].', Length: '.$row_for_travel_card['measurement_of_carton_length'].', Ply: '.$row_for_travel_card['measurement_of_cartoon_ply']; ?>">
													<?php echo 'Height: '.$row_for_travel_card['measurement_of_cartoon_height'].', Width: '.$row_for_travel_card['measurement_of_carton_width'].', Length: '.$row_for_travel_card['measurement_of_carton_length'].', Ply: '.$row_for_travel_card['measurement_of_cartoon_ply']; ?>
												</option>


												
												<?php  

												     $po_details_id=$row_for_travel_card['po_details_id'];
													 $sql = "select * from `po_details` where po_details_id='$po_details_id' order by `row_id`";
													 $result= mysqli_query($con,$sql) or die(mysqli_error());
													 while( $row = mysqli_fetch_array( $result))
													 {

														 echo '<option value="'.$row['row_id'].'">Height: '.$row['measurement_of_cartoon_height'].', Width: '.$row['measurement_of_carton_width'].', Length: '.$row['measurement_of_carton_length'].', Ply: '.$row['measurement_of_cartoon_ply'].'</option>';

													 }

												 ?>
										</select>

									
									</div>
							</div>
						</div>


						<input type="hidden" class="form-control" name="po_details_id" id="po_details_id" value="<?php echo $row_for_travel_card['po_details_id']?>">


					   <div class="form-group form-group-sm" id="form-group_for_customer_name">
								<label class="control-label col-sm-3" for="customer_name" style="margin-right:0px; color:#00008B;">Customer Name:<span style="color:red"> *</span></label>

									<div class="col-sm-5">
										

										<input type="text" class="form-control" id="customer_name" name="customer_name" value="<?php echo $row_for_travel_card['customer_name']?>" readonly>
										<input type="hidden" class="form-control" id="customer_id" name="customer_id" value="<?php echo $row_for_travel_card['customer_id']?>" readonly>
									</div>
						</div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_customer_name"> -->





						<div class="form-group form-group-sm" id="form-group_for_buyer_name">
			                <label class="control-label col-sm-3" for="buyer_name" style="margin-right:0px; color:#00008B;">Buyer Name:<span style="color:red"> *</span></label>
			                
			                  <div class="col-sm-5">
			                    <input type="text" class="form-control" id="buyer_name" name="buyer_name" value="<?php echo $row_for_travel_card['buyer_name']?>" readonly>

			                    <input type="hidden" class="form-control" id="buyer_id" name="buyer_id" value="<?php echo $row_for_travel_card['buyer_name']?>" readonly>
			                  </div>
			            </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_buyer_name"> -->



			            <div class="form-group form-group-sm" id="form-group_for_to_date" style="margin-right:0px; color:#00008B;">
                            <label class="control-label col-sm-3 " for="po_order_received_date">Order Received Date :</label>
							<div class="col-sm-5" style="padding-right: 0">
								 <input type="text" id="po_order_received_date" class="form-control" name="po_order_received_date" value="<?php echo $row_for_travel_card['po_order_received_date']?>">

								
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
								 <input type="text" id="product_delivery_date" class="form-control" name="product_delivery_date" value="<?php echo $row_for_travel_card['product_delivery_date']?>">

								
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

									 <input class="form-control input-sm" type="text" id="responsible_person" name="responsible_person" value="<?php echo $row_for_travel_card['responsible_person']?>" readonly>
                   
									
									
								</div>
								<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('responsible_person')"></i>
						</div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_creation"> -->

			            <div class="form-group form-group-sm" id="form-group_for_po_quantity">
			                <label class="control-label col-sm-3" for="po_quantity" style="color:#00008B;">Quantity:</label>
			                <div class="col-sm-5">
			                  <input type="text" class="form-control" id="po_quantity" name="po_quantity" value="<?php echo $row_for_travel_card['po_quantity']?>" readonly>
			                  
			                </div>
			                <i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('po_quantity')"></i>
			            </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_creation"> -->




			            <div class="form-group form-group-sm" id="form-group_for_product_category">
			                <label class="control-label col-sm-3" for="product_category" style="color:#00008B;">Product Category:</label>
			                <div class="col-sm-5">
			                  <input type="text" class="form-control" id="product_category" name="product_category" value="<?php echo $row_for_travel_card['product_category']?>" readonly>
			                  
			                </div>
			                <i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('product_category')"></i>
			            </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_creation"> -->



			            <div class="form-group form-group-sm" id="form-group_for_order_type">
			                <label class="control-label col-sm-3" for="order_type" style="color:#00008B;">Order Type:</label>
			                <div class="col-sm-5">
			                  <input type="text" class="form-control" id="order_type" name="order_type"  value="<?php echo $row_for_travel_card['order_type']?>" readonly>
			                  
			                </div>
			                <i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('order_type')"></i>
			            </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_creation"> -->









		            	<!-- <div class="form-group form-group-sm" id="form-group_for_process_name">
							<label class="control-label col-sm-3" for="process_name" style="color:#00008B;">Process Name:</label>
							<div class="col-sm-5">

								<select  class="form-control" id="process_name" name="process_name" >
												<option select="selected" value="select">Select Process Name</option>
												<?php 
													 $sql = "select * from `process_name`";
													 $result= mysqli_query($con,$sql) or die(mysqli_error());
													 while( $row = mysqli_fetch_array( $result))
													 {

														 echo '<option value="'.$row['process_name']."?fs?".$row['process_id'].'">'.$row['process_name'].'</option>';

													 }

												 ?>
								</select>

								
								
							</div>
							<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('process_name')"></i>
					</div> 

					
					<div class="form-group form-group-sm" id="form-group_for_before_process_quantity">
							<label class="control-label col-sm-3" for="before_process_quantity" style="color:#00008B;">Before Process Quantity:</label>
							<div class="col-sm-5">
                                      
                                      <input type="text" class="form-control" id="before_process_quantity" name="before_process_quantity" value="" >
								
							</div>
							<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('before_process_quantity')"></i>
					</div> 	



					<div class="form-group form-group-sm" id="form-group_for_after_process_quantity">
							<label class="control-label col-sm-3" for="after_process_quantity" style="color:#00008B;">After Process Quantity</label>
							<div class="col-sm-5">
                                      
                                      <input type="text" class="form-control" id="after_process_quantity" name="after_process_quantity" value="" >
								
							</div>
							<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('after_process_quantity')"></i>
					</div>  -->








                    

				       <div><label class="form-control">Product Description</label> </div>

                       <div class="form-group form-group-sm">
		     
									    <!-- <div class="col-sm-1 text-center">
											
										</div> -->


										<div class="col-sm-3 text-center">
											<label for="test_name_and_method" style="font-size:12px; color:#008000;"></label>
											
									          
										</div>
									 
										 <div class="col-sm-1 text-center">
								              <label for="description_or_type" style="font-size:12px; color:#008000;">Length</label>
								              
								         </div>

							           <div class="col-sm-1 text-center">
								            <label for="value" style="font-size:12px; color:#008000;">Width</label>
								       </div>
								         
								        <div class="col-sm-1 text-center">
								              <label for="value" style="font-size:12px; color:#008000;">Height</label>
								              
								        </div>
							          
							               <!--Add Input/Select Field Here No Dive Only Input/Select/Radio Button/Checkbox/Textarea -->
								         
									   <div class="col-sm-1 text-center">
									         <label for="math_op_value" style="font-size:12px; color:#008000;">Ply</label>
									            
									   </div>
								            
								               
								        

					     </div><!-- End of <div class="form-group form-group-sm"  -->


					<div id="div_measurement_of_carton" >


						<div class="form-group form-group-sm" >
				      

					      <div class="col-sm-3 text-center">
					         <label class="control-label"  style="color:#00008B;"><span id="for_measurement_of_carton">Measurement of Carton</span> </label>
					      </div>
					       
					       <div class="col-sm-1 text-center">
					               
					                <input class="form-control input-sm" type="text" id="measurement_of_carton_length" name="measurement_of_carton_length" value="<?php echo $row_for_travel_card['measurement_of_carton_length']?>" readonly>

					           </div>

					       

					           <div class="col-sm-1 text-center">
					                <input class="form-control input-sm" type="text" id="measurement_of_carton_width" name="measurement_of_carton_width" value="<?php echo $row_for_travel_card['measurement_of_carton_width']?>" readonly>
					             
					         </div>
					            
					             
					          <div class="col-sm-1 text-center">
					               <input class="form-control input-sm" type="text" id="measurement_of_cartoon_height" name="measurement_of_cartoon_height" value="<?php echo $row_for_travel_card['measurement_of_cartoon_height']?>" readonly>
					              
					           </div>
					            
					                 <!--Add Input/Select Field Here No Dive Only Input/Select/Radio Button/Checkbox/Textarea -->
					              
					          <div class="col-sm-1" for="measurement_of_cartoon_ply">

					          	<div id="measurement_of_cartoon_ply"></div>

						          	<!-- <select  class="form-control" id="measurement_of_cartoon_ply" name="measurement_of_cartoon_ply">
												<option select="selected" value="select">Select No of Ply</option>
												<option value="3">3</option>
												<option value="5">5</option>
												<option value="7">7</option>
									</select> -->

					            
					          </div>

					         
				                
				       
				       </div><!-- End of <div class="form-group form-group-sm" measurement_of_carton-->

				    </div> <!--  End of <div id="div_measurement_of_carton" style="display: none">  -->



				               <div class="form-group form-group-sm">
		     
									    <!-- <div class="col-sm-1 text-center">
											
										</div> -->


										<div class="col-sm-3 text-center">
											<label for="test_name_and_method" style="font-size:12px; color:#008000;"></label>
											
									          
										</div>
									 
										 <div class="col-sm-1 text-center">
								              <label for="papaer_type_linear" style="font-size:12px; color:#008000;">Linear</label>
								              
								         </div>

							           <div class="col-sm-1 text-center">
								            <label for="paper_type_medium" style="font-size:12px; color:#008000;">Meidum</label>
								       </div>


								        <div class="col-sm-1 text-center">
								            <label for="paper_type_medium" style="font-size:12px; color:#008000;">Meidum 1</label>
								       </div>

								        <div class="col-sm-1 text-center">
								            <label for="paper_type_medium" style="font-size:12px; color:#008000;">Meidum 2</label>
								       </div>
								         
								        <div class="col-sm-1 text-center">
								              <label for="papeer_type_linear_1" style="font-size:12px; color:#008000;">Linear 1</label>
								              
								        </div>
							          
							               <!--Add Input/Select Field Here No Dive Only Input/Select/Radio Button/Checkbox/Textarea -->
								         
									  
								            
								               
								        

								</div><!-- End of <div class="form-group form-group-sm"  -->



				     <div id="div_paper_type" >


							<div class="form-group form-group-sm" >
					      

						       <div class="col-sm-3 text-center">
						         <label class="control-label"  style="color:#00008B;"><span id="for_paper_type">Paper Type</span> </label>
						       </div>
						       
						       <div class="col-sm-1 text-center">
						               
						                <input class="form-control input-sm" type="text" id="paper_type_linear" name="paper_type_linear" value="<?php echo $row_for_travel_card['paper_type_linear']?>" readonly>

						           </div>

						       

						       <div class="col-sm-1 text-center">
						                <input class="form-control input-sm" type="text" id="paper_type_medium" name="paper_type_medium" value="<?php echo $row_for_travel_card['paper_type_medium']?>" readonly>
						             
						       </div>

						        <div class="col-sm-1 text-center">
						                <input class="form-control input-sm" type="text" id="paper_type_medium_1" name="paper_type_medium_1" value="<?php echo $row_for_travel_card['paper_type_medium_1']?>" readonly>
						             
						       </div>

						        <div class="col-sm-1 text-center">
						                <input class="form-control input-sm" type="text" id="paper_type_medium_2" name="paper_type_medium_2" value="<?php echo $row_for_travel_card['paper_type_medium_2']?>" readonly>
						             
						       </div>
						            
						             
						       <div class="col-sm-1 text-center">
						               <input class="form-control input-sm" type="text" id="paper_type_linear_1" name="paper_type_linear_1" value="<?php echo $row_for_travel_card['paper_type_linear_1']?>" readonly>
						              
						       </div>
						            
						               
					       
					      </div><!-- End of <div class="form-group form-group-sm" paper_type-->

										 


					 </div> <!--  End of <div id="div_paper_type" style="display: none">  -->





						<div id="div_flute_type" >


								<div class="form-group form-group-sm" >
						      

							      <div class="col-sm-3 text-center">
							         <label class="control-label"  style="color:#00008B;"><span id="for_flute_type">Flute Type</span> </label>
							      </div>


							      <div class="col-sm-9 text-left" id="flute_type">
							      	 
							      </div>
							       
							         <!-- <div class="col-sm-1 text-center">
							               
							                <label class="control-label checkbox-inline" for="flute_type" >   

								               <input type="checkbox" id="flute_type" name="flute_type[]" value="A Flute">
								               <strong>A Flute</strong>
								               </label> 

		                            </div>


		                            <div class="col-sm-1 text-center">
								               <label class="control-label checkbox-inline" for="flute_type" >   
							                         
								               <input type="checkbox" id="flute_type" name="flute_type[]" value="B Flute">
								               <strong>B Flute</strong>
								               </label>  

		                            </div>


		                            <div class="col-sm-1 text-center">

								               <label class="control-label checkbox-inline" for="flute_type" >   
							                         
								               <input type="checkbox" id="flute_type" name="flute_type[]" value="C Flute">
								               <strong>C Flute</strong>
								               </label> 
								    </div>

								    <div class="col-sm-1 text-center">

								               <label class="control-label checkbox-inline" for="flute_type" >   
							                         
								               <input type="checkbox" id="flute_type" name="flute_type[]" value="E Flute">
								               <strong>E Flute</strong>
								               </label> 
								    </div>


								    <div class="col-sm-1 text-center">

								               <label class="control-label checkbox-inline" for="flute_type" >   
							                         
								               <input type="checkbox" id="flute_type" name="flute_type[]" value="F Flute">
								               <strong>F Flute</strong>
								               </label>  

								    </div> -->

							       

						       
						       </div><!-- End of <div class="form-group form-group-sm" flute_type-->

						    </div> <!--  End of <div id="div_flute_type" style="display: none">  -->




					     <div id="div_printing_status" >


							<div class="form-group form-group-sm" >
					      

						      <div class="col-sm-3 text-center">
						         <label class="control-label"  style="color:#00008B;"><span id="for_printing_status">Printing Status</span> </label>
						      </div>

						      <div class="col-sm-9 text-left" id="printing_status">
						         
						      </div>
						       
						         <!-- <div class="col-sm-1 text-center">
						               
						                <input type="radio" id="printing_status" name="printing_status" value="Printed">
										<label for="Printed">Printed</label>

	                            </div>


	                            <div class="col-sm-2 text-center">
							               <input type="radio" id="printing_status" name="printing_status" value="Non Printed">
										     <label for="Non Printed">Non Printed</label> 

	                            </div> -->



					       
					       </div><!-- End of <div class="form-group form-group-sm" printing_status-->

					 </div> <!--  End of <div id="div_printing_status" style="display: none">  -->




						<div id="div_dye_cutting" >


								<div class="form-group form-group-sm" >
						      

							      <div class="col-sm-3 text-center">
							         <label class="control-label"  style="color:#00008B;"><span id="for_dye_cutting">Die Cutting</span> </label>
							      </div>

							      <div class="col-sm-9 text-left" id="dye_cutting">
						         
						          </div>
							       
							        <!--  <div class="col-sm-1 text-center">
							               
							                <input type="radio" id="dye_cutting" name="dye_cutting" value="Die Cutting">
											<label for="Die Cutting">Die Cutting</label>

		                            </div>


		                            <div class="col-sm-1 text-center">
								               <input type="radio" id="dye_cutting" name="dye_cutting" value="Non Die Cutting">
											     <label for="Non Die Cutting">Non Die Cutting</label> 

		                            </div> -->



						       
						       </div><!-- End of <div class="form-group form-group-sm" dye_cutting-->

					    </div> <!--  End of <div id="div_dye_cutting" style="display: none">  -->
 
             

             <div><label class="form-control">Process Description</label> </div>





			             <div id="div_product_description" >


									<div class="form-group form-group-sm" >
							      

									        <div class="col-sm-3 text-center">
									         <label class="control-label"  style="color:#00008B;"><span id="for_carton_quantity">Carton Quantity :</span> </label>
									        </div>
									       
									         <div class="col-sm-1 text-center">
									               
									                <input class="form-control input-sm" type="text" id="carton_quantity" name="carton_quantity" value="<?php echo $row_for_travel_card['carton_quantity']?>" readonly>

				                            </div>


				                            <div class="col-sm-2 text-center">
										             <label  class="control-label"  style="color:#00008B;"><span id="for_ratio">Ratio :</span> </label>

				                            </div>

				                            <div class="col-sm-1 text-center">
									               
									                <input class="form-control input-sm" type="text" id="ratio" name="ratio"  value="<?php echo $row_for_travel_card['ratio']?>" readonly>

				                            </div>


				                            <div class="col-sm-2 text-center">
										             <label  class="control-label"  style="color:#00008B;"><span id="for_board_quantity">Board Quantity :</span> </label>

				                            </div>

				                            <div class="col-sm-1 text-center">
									               
									                <input class="form-control input-sm" type="text" id="board_quantity" name="board_quantity"  value="<?php echo $row_for_travel_card['board_quantity']?>" readonly>

				                            </div>



							       
							       </div><!-- End of <div class="form-group form-group-sm" product_description-->



							         <div class="form-group form-group-sm" >
				      

									        <div class="col-sm-3 text-center">
									         <label class="control-label"  style="color:#00008B;"><span id="for_cutter_size">Cutter Size:</span> </label>
									        </div>
									       
									         <div class="col-sm-1 text-center">
									               
									                <input class="form-control input-sm" type="text" id="cutter_size" name="cutter_size" value="<?php echo $row_for_travel_card['cutter_size']?>" readonly>

				                            </div>



				                            <div class="col-sm-2 text-center">
										             <label class="control-label"  style="color:#00008B;"><span id="for_roll_size">Roll Size :</span> </label>

				                            </div>

				                            <div class="col-sm-1 text-center">
									               
									                <input class="form-control input-sm" type="text" id="roll_size" name="roll_size" value="<?php echo $row_for_travel_card['roll_size']?>" readonly>

				                            </div>



							       
							       </div><!-- End of <div class="form-group form-group-sm" >-->




							    							    <div class="form-group form-group-sm" >
				      

						                    <div class="col-sm-3 text-center">
									           <label class="control-label"  style="color:#00008B;"><span id="for_score_or_creez_size">Score/Creez Size (mm):</span> </label>
									        </div>
									       
									         <div class="col-sm-1 text-center">
									               
									                <input class="form-control input-sm" type="text" id="score_or_creez_size" name="score_or_creez_size" value="<?php echo $row_for_travel_card['score_or_creez_size']?>" readonly>

				                            </div>

				                             <div class="col-sm-1 text-center">
									               
									                <input class="form-control input-sm" type="text" id="score_or_creez_size_1" name="score_or_creez_size_1" value="<?php echo $row_for_travel_card['score_or_creez_size_1']?>" readonly>

				                            </div>

				                             <div class="col-sm-1 text-center">
									               
									                <input class="form-control input-sm" type="text" id="score_or_creez_size_2" name="score_or_creez_size_2" value="<?php echo $row_for_travel_card['score_or_creez_size_2']?>" readonly>

				                            </div>



				       
				                 </div><!-- End of <div class="form-group form-group-sm" product_description-->



				                 <div class="form-group form-group-sm" >
				      

						                    <div class="col-sm-3 text-center">
									           <label class="control-label"  style="color:#00008B;"><span id="for_slotting_size">Slotting Size (MM):</span> </label>
									        </div>
									       
									         <div class="col-sm-1 text-center">
									               
									                <input class="form-control input-sm" type="text" id="slotting_size" name="slotting_size" value="<?php echo $row_for_travel_card['slotting_size']?>" readonly>

				                            </div>

				                            <div class="col-sm-1 text-center">
									               
									                <input class="form-control input-sm" type="text" id="slotting_size_1" name="slotting_size_1" value="<?php echo $row_for_travel_card['slotting_size_1']?>" readonly>

				                            </div>
				                            <div class="col-sm-1 text-center">
									               
									                <input class="form-control input-sm" type="text" id="slotting_size_2" name="slotting_size_2" value="<?php echo $row_for_travel_card['slotting_size_2']?>" readonly>

				                            </div>


				                            <div class="col-sm-1 text-center">
									               
									                <input class="form-control input-sm" type="text" id="slotting_size_3" name="slotting_size_3" value="<?php echo $row_for_travel_card['slotting_size_3']?>" readonly>

				                            </div>



				       
				                 </div><!-- End of <div class="form-group form-group-sm" product_description-->



				       
				          </div><!-- End of <div class="form-group form-group-sm" product_description-->








				         



				<div><label class="form-control">Raw Material</label> </div>

                                 <div class="form-group form-group-sm">
		     
									    <!-- <div class="col-sm-1 text-center">
											
										</div> -->


										<div class="col-sm-3 text-center">
											<label for="test_name_and_method" style="font-size:12px; color:#008000;"></label>
											
									          
										</div>
									 
										 <div class="col-sm-1 text-center">
								              <label for="description_or_type" style="font-size:12px; color:#008000;">Liner</label>
								              
								         </div>

							           <div class="col-sm-1 text-center">
								            <label for="value" style="font-size:12px; color:#008000;">Media</label>
								       </div>
								         
								        <div class="col-sm-1 text-center">
								              <label for="value" style="font-size:12px; color:#008000;">SQM</label>
								              
								        </div>
							          
							               <!--Add Input/Select Field Here No Dive Only Input/Select/Radio Button/Checkbox/Textarea -->
								         
									   <div class="col-sm-1 text-center">
									         <label for="math_op_value" style="font-size:12px; color:#008000;">Total Consumption</label>
									            
									   </div>
								            
								               
								        

					 </div><!-- End of <div class="form-group form-group-sm"  -->


			        <div id="div_measurement_of_carton" >


						<div class="form-group form-group-sm" >
				      

					      <div class="col-sm-3 text-center">
					         <label class="control-label"  style="color:#00008B;"><span id="for_consumption">Consumtion</span> </label>
					      </div>
					       
					       <div class="col-sm-1 text-center">
					               
					                <input class="form-control input-sm" type="text" id="liner_consumption_calc" name="liner_consumption_calc" value="<?php echo $row_for_travel_card['liner_consumption_calc']?>" readonly>

					           </div>

					       

					           <div class="col-sm-1 text-center">
					                <input class="form-control input-sm" type="text" id="media_consumption_calc" name="media_consumption_calc" value="<?php echo $row_for_travel_card['media_consumption_calc']?>" readonly>
					             
					         </div>
					            
					             
					          <div class="col-sm-1 text-center">
					               <input class="form-control input-sm" type="text" id="sqm_consumption_calc" name="sqm_consumption_calc" value="<?php echo $row_for_travel_card['sqm_consumption_calc']?>" readonly>
					              
					           </div>
					            
					                 <!--Add Input/Select Field Here No Dive Only Input/Select/Radio Button/Checkbox/Textarea -->
					              
					          <div class="col-sm-1" for="total_consumption">
                                    

                                     <input class="form-control input-sm" type="text" id="total_consumption" name="total_consumption" value="<?php echo $row_for_travel_card['total_consumption']?>" readonly>
						          	
					          </div>

					         
				                
				       
				            </div><!-- End of <div class="form-group form-group-sm" measurement_of_carton-->

				         </div> <!--  End of <div id="div_measurement_of_carton" style="display: none">  -->





						 <div class="form-group form-group-sm">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="button" class="btn btn-primary" onClick="sending_data_of_edit_travel_card_form_for_saving_in_database()">Submit</button>
									<button type="reset" class="btn btn-success">Reset</button>
								</div>
						   </div>

						</form>



		     

		</div> 


			   
</form>
</div>
</div>



					



					