<?php
 session_start();
include('../login/db_connection_class.php');
$obj = new DB_Connection_Class();
$obj->connection();

 $user_access =$_SESSION['user_access'];
  $user_name=$_SESSION['user_name'];

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

     $row_id = $_GET['row_id'];
    $row_id_travel_card_id = explode("?fs?",$row_id);
    $row_id = $row_id_travel_card_id[0];
    $travel_card_id = $row_id_travel_card_id[1];

    // $sql = "select * from `travel_card_details_for_transactions` WHERE `row_id`='$row_id'";
    // $result= mysqli_query($con,$sql) or die(mysqli_error($con));
    // $row = mysqli_fetch_array( $result);
    
    $sql1="SELECT  *  FROM travel_card_details_for_transactions tcdft
    Left join  po_creation pc on tcdft.po_id=pc.po_id
    Left join  po_details pd on tcdft.po_details_id=pd.po_details_id
   where tcdft.travel_card_id = '$travel_card_id'";

//     $sql1 = " SELECT po_creation.*, po_details.*, travel_card_details_for_transactions.*
//     FROM po_creation, po_details, travel_card_details_for_transactions
//    where travel_card_details_for_transactions.travel_card_id = '$travel_card_id'
//      AND po_creation.po_id = travel_card_details_for_transactions.po_id
//      AND po_details.po_details_id = travel_card_details_for_transactions.po_details_id";

     $result1 = mysqli_query($con,$sql1) or die(mysqli_error($con));
     $row1 = mysqli_fetch_array( $result1);

     


?>

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
function change_acutal_roll_size(ratio)
{  
     var score_or_creez_size=document.getElementById("score_or_creez_size").value;
     var score_or_creez_size_1=document.getElementById("score_or_creez_size_1").value;
     var score_or_creez_size_2=document.getElementById("score_or_creez_size").value;

    var roll_size=((parseInt(score_or_creez_size)+parseInt(score_or_creez_size_1)+parseInt(score_or_creez_size_2))*parseInt(ratio))/25.4;

                

                document.getElementById("actual_roll_size").value=roll_size;
}
 function sending_data_of_edit_travel_card_with_process_form_for_update_in_database()
 {


    //    var validate = Form_Validation();
       var validate = true;
       var url_encoded_form_data = $("#travel_card_edit_form").serialize(); //This will read all control elements value of the form	
       if(validate != false)
	   {


		  	 $.ajax({
			 		url: 'list/edit_process_wise_travel_card_saving.php',
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

<div class="panel-heading" style="color:#191970;"><b>Travel Card Info</b></div> <!-- This will create a upper block for FORM (Just Beautification) -->

<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Home</li>
         <li class="breadcrumb-item"><a onclick="load_page('process_wise_travel_card.php')">Add Travel Card Info</a></li>
      </ol>
 </nav>

<form class="form-horizontal" action="" style="margin-top:10px;" name="travel_card_edit_form" id="travel_card_edit_form">
    
    <div class="panel-heading" style="color:#191970;"><b>Order Description</b></div>
    <input type="hidden" id="row_id" name="row_id" value="<?php echo $row_id ?>">

    <div class="form-group form-group-sm" id="form-group_for_to_date" style="margin-right:0px; color:#00008B;">
            <label class="control-label col-sm-3 " for="travel_card_creation_date">Travel Card Creation Date :</label>
            <div class="col-sm-5" style="padding-right: 0">

                <input type="text" id="travel_card_creation_date" class="form-control" name="travel_card_creation_date" value="<?php echo $row1['travel_card_creation_date']?>">

                
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


     <div class="form-group form-group-sm" id="form-group_for_travel_card_id">
                <label class="control-label col-sm-3" for="travel_card_id" style="color:#00008B;">Travel Card No:</label>
                <div class="col-sm-5">
                           <?php //onchange="travel_card_id_change(this.value)"?>
                    <select  class="form-control for_auto_complete" id="travel_card_id" name="travel_card_id" readonly> 
                                    <option select="selected" value="<?php echo $row1['travel_card_id']?>"><?php echo $row1['travel_card_id']?></option>
                                    <?php 
                                         $sql = 'select * from `travel_card_details`';
                                         $result= mysqli_query($con,$sql) or die(mysqli_error($con));
                                         while( $row = mysqli_fetch_array( $result))
                                         {

                                            echo '<option value="'.$row['travel_card_id'].'">'.$row['travel_card_id'].'</option>';

                                         }

                                    ?>
                    </select>

                    
                    
                </div>
                <i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('travel_card_id')"></i>
    </div>  <!--  end of <div class="form-group form-group-sm" id="form-group_for_travel_card_id"> -->




        <div class="form-group form-group-sm" id="form-group_for_po_number">
                <label class="control-label col-sm-3" for="po_number" style="color:#00008B;">PO No:</label>
                <?php  //onchange="po_number_change()" ?>
                <div class="col-sm-5">
                 <select  class="form-control" id="po_number" name="po_number" readonly> 
                                    <option select="selected" value="<?php echo $row1['po_number'].'?fs?'.$row['po_id']?>"><?php echo $row1['po_number']?></option>
                                    <?php 
                                         $sql = 'select * from `po_creation` order by `customer_name`';
                                         $result= mysqli_query($con,$sql) or die(mysqli_error($con));
                                         while( $row = mysqli_fetch_array( $result))
                                         {

                                             echo '<option value="'.$row['po_number'].'?fs?'.$row['po_id'].'">'.$row['po_number'].'</option>';

                                         }

                                     ?>
                    </select>

                    <!-- <input type="text" class="form-control" id="po_number" name="po_number" value="<?php echo $row1['po_number'] ?>" readonly> -->
                    <input type="hidden" class="form-control" id="po_id" name="po_id" value="<?php echo $row1['po_id'] ?>" readonly>

                    
                    
                </div>
                <i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('po_number')"></i>
        </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_creation"> -->


        <div id="po_details_info">
            <div class="form-group form-group-sm" id="form-group_for_po_number">

                <label><span id="show"></span></label>
                    
                     <?php //onchange="get_po_details(this.value)" ?>
                    <label class="control-label col-sm-3" for="po_details" style="color:#00008B;">PO Details:</label>
                    <div class="col-sm-5">
                         <select  class="form-control" id="po_details" name="po_details" readonly>
                                <option  value="<?php echo $row1['po_details_id'].'"Height: '.$row1['measurement_of_cartoon_height'].', Width: '.$row1['measurement_of_carton_width'].', Length: '.$row1['measurement_of_carton_length'].', Ply: '.$row1['measurement_of_cartoon_ply']; ?>"><?php echo '"Height: '.$row1['measurement_of_cartoon_height'].', Width: '.$row1['measurement_of_carton_width'].', Length: '.$row1['measurement_of_carton_length'].', Ply: '.$row1['measurement_of_cartoon_ply']; ?></option>
                                <?php 
                                     $sql = 'select * from `po_details` order by `row_id`';
                                     $result= mysqli_query($con,$sql) or die(mysqli_error($con));
                                     while( $row = mysqli_fetch_array( $result))
                                     {

                                        echo '<option value="'.$row['po_details_id'].'">Height: '.$row['measurement_of_cartoon_height'].', Width: '.$row['measurement_of_carton_width'].', Length: '.$row['measurement_of_carton_length'].', Ply: '.$row['measurement_of_cartoon_ply'].'</option>';

                                     }

                                 ?>
                        </select>

                        <!-- <input type="text" class="form-control" id="po_details" name="po_details" value="" readonly> -->

                    
                    </div>
            </div>
        </div>


        <input type="hidden" class="form-control" name="po_details_id" id="po_details_id">


       <div class="form-group form-group-sm" id="form-group_for_customer_name">
                <label class="control-label col-sm-3" for="customer_name" style="margin-right:0px; color:#00008B;">Customer Name:<span style="color:red"> *</span></label>

                    <div class="col-sm-5">
                        

                        <input type="text" class="form-control" id="customer_name" name="customer_name" value="<?php echo $row1['customer_name']?>" readonly>
                        <input type="hidden" class="form-control" id="customer_id" name="customer_id" value="" readonly>
                    </div>
        </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_customer_name"> -->





        <div class="form-group form-group-sm" id="form-group_for_buyer_name">
            <label class="control-label col-sm-3" for="buyer_name" style="margin-right:0px; color:#00008B;">Buyer Name:<span style="color:red"> *</span></label>
            
              <div class="col-sm-5">
                <input type="text" class="form-control" id="buyer_name" name="buyer_name" value="<?php echo $row1['buyer_name']?>" readonly>
                <input type="hidden" class="form-control" id="buyer_id" name="buyer_id" value="" readonly>
              </div>
        </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_buyer_name"> -->



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
                    <input class="form-control input-sm" type="text" id="responsible_person" name="responsible_person" value="<?php echo $row1['responsible_person']?>" readonly>
                   

                    
                    
                </div>
                <i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('responsible_person')"></i>
        </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_creation"> -->

        <div class="form-group form-group-sm" id="form-group_for_po_quantity">
            <label class="control-label col-sm-3" for="po_quantity" style="color:#00008B;">Quantity:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="po_quantity" name="po_quantity" value="<?php echo $row1['po_quantity']?>" readonly>
              
            </div>
            <i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('po_quantity')"></i>
        </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_creation"> -->




        <div class="form-group form-group-sm" id="form-group_for_product_category">
            <label class="control-label col-sm-3" for="product_category" style="color:#00008B;">Product Category:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="product_category" name="product_category" value="<?php echo $row1['product_category']?>" readonly>
              
            </div>
            <i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('product_category')"></i>
        </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_creation"> -->



        <div class="form-group form-group-sm" id="form-group_for_order_type">
            <label class="control-label col-sm-3" for="order_type" style="color:#00008B;">Order Type:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="order_type" name="order_type" value="<?php echo $row1['order_type']?>" readonly>
              
            </div>
            <i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('order_type')"></i>
        </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_creation"> -->







    

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
                   
                    <input class="form-control input-sm" type="text" id="measurement_of_carton_length" name="measurement_of_carton_length" value="<?php echo $row1['measurement_of_carton_length']?>" readonly>

               </div>

           

               <div class="col-sm-1 text-center">
                    <input class="form-control input-sm" type="text" id="measurement_of_carton_width" name="measurement_of_carton_width" value="<?php echo $row1['measurement_of_carton_width']?>" readonly>
                 
             </div>
                
                 
              <div class="col-sm-1 text-center">
                   <input class="form-control input-sm" type="text" id="measurement_of_cartoon_height" name="measurement_of_cartoon_height" value="<?php echo $row1['measurement_of_cartoon_height']?>" readonly>
                  
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





        <div id="div_flute_type" >


                <div class="form-group form-group-sm" >
              

                  <div class="col-sm-3 text-center">
                     <label class="control-label"  style="color:#00008B;"><span id="for_flute_type">Flute Type</span> </label>
                  </div>
                   
                  <!-- <div class="col-sm-9 text-left" id="flute_type">
                 
                  </div> -->
                   
                  <div class="col-sm-9 text-left">
                      <input class="form-control input-sm" type="text" id="flute_type" name="flute_type" value="<?php echo $row1['flute_type']?>" readonly>
                  </div>
                   
                    
                   

               
               </div><!-- End of <div class="form-group form-group-sm" flute_type-->

            </div> <!--  End of <div id="div_flute_type" style="display: none">  -->




         <div id="div_printing_status" >


            <div class="form-group form-group-sm" >
          

              <div class="col-sm-3 text-center">
                 <label class="control-label"  style="color:#00008B;"><span id="for_printing_status">Printing Status</span> </label>
              </div>

              <!-- <div class="col-sm-9 text-left" id="printing_status">
                 
              </div> -->

              <div class="col-sm-9 text-left">
                      <input class="form-control input-sm" type="text" id="printing_status" name="printing_status" value="<?php echo $row1['printing_status']?>" readonly>
              </div>
               
                


           
           </div><!-- End of <div class="form-group form-group-sm" printing_status-->

     </div> <!--  End of <div id="div_printing_status" style="display: none">  -->




        <div id="div_dye_cutting" >


                <div class="form-group form-group-sm" >
              

                  <div class="col-sm-3 text-center">
                     <label class="control-label"  style="color:#00008B;"><span id="for_dye_cutting">Dye Cutting</span> </label>
                  </div>

                  <!-- <div class="col-sm-9 text-left" id="dye_cutting">
                 
                  </div> -->
                  <div class="col-sm-9 text-left">
                      <input class="form-control input-sm" type="text" id="dye_cutting" name="dye_cutting" value="<?php echo $row1['flute_type']?>" readonly>
                  </div>
                   
                    <!--  <div class="col-sm-1 text-center">
                           
                            <input type="radio" id="dye_cutting" name="dye_cutting" value="Dye Cutting">
                            <label for="Dye Cutting">Dye Cutting</label>

                    </div>


                    <div class="col-sm-1 text-center">
                               <input type="radio" id="dye_cutting" name="dye_cutting" value="Non Dye Cutting">
                                 <label for="Non Dye Cutting">Non Dye Cutting</label> 

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
                                   
                                    <input class="form-control input-sm" type="text" id="carton_quantity" name="carton_quantity" value="<?php echo $row1['carton_quantity']?>" readonly>

                            </div>


                            <div class="col-sm-2 text-center">
                                     <label  class="control-label"  style="color:#00008B;"><span id="for_ratio">Ratio :</span> </label>

                            </div>

                            <div class="col-sm-1 text-center">
                                   
                                    <input class="form-control input-sm" type="text" id="ratio" name="ratio" value="<?php echo $row1['ratio']?>" readonly>

                            </div>


                            <div class="col-sm-2 text-center">
                                     <label  class="control-label"  style="color:#00008B;"><span id="for_board_quantity">Board Quantity :</span> </label>

                            </div>

                            <div class="col-sm-1 text-center">
                                   
                                    <input class="form-control input-sm" type="text" id="board_quantity" name="board_quantity" value="<?php echo $row1['board_quantity']?>" readonly>

                            </div>



                   
                   </div><!-- End of <div class="form-group form-group-sm" product_description-->



                     <div class="form-group form-group-sm" >
      

                            <div class="col-sm-3 text-center">
                             <label class="control-label"  style="color:#00008B;"><span id="for_cutter_size">Cutter Size:</span> </label>
                            </div>
                           
                             <div class="col-sm-1 text-center">
                                   
                                    <input class="form-control input-sm" type="text" id="cutter_size" name="cutter_size" value="<?php echo $row1['cutter_size']?>" readonly>

                            </div>



                            <div class="col-sm-2 text-center">
                                     <label class="control-label"  style="color:#00008B;"><span id="for_roll_size">Roll Size :</span> </label>

                            </div>

                            <div class="col-sm-1 text-center">
                                   
                                    <input class="form-control input-sm" type="text" id="roll_size" name="roll_size" value="<?php echo $row1['roll_size']?>" readonly>

                            </div>




                            <div class="col-sm-2 text-center">
                                     <label class="control-label"  style="color:#00008B;"><span id="for_requirted_time">Required Time (hr.) :</span> </label>

                            </div>

                            <div class="col-sm-1 text-center">
                                   
                                    <input class="form-control input-sm" type="text" id="required_time" name="required_time" value="<?php echo $row1['required_time']?>" readonly>

                            </div>



                   
                   </div><!-- End of <div class="form-group form-group-sm" >-->



          
           <div class="form-group form-group-sm">
		     
            


                   <div class="col-sm-3 text-center">
                       <label for="test_name_and_method" style="font-size:12px; color:#008000;"></label>
                       
                       
                   </div>
               
                   <div class="col-sm-1 text-center">
                       <label for="papaer_type_linear" style="font-size:12px; color:#008000;">Liner</label>
                       
                   </div>

                   <div class="col-sm-1 text-center">
                       <label for="paper_type_medium" style="font-size:12px; color:#008000;">Medium</label>
                   </div>


                   <div class="col-sm-1 text-center">
                       <label for="paper_type_medium" style="font-size:12px; color:#008000;">Medium 1</label>
                   </div>

                   <div class="col-sm-1 text-center">
                       <label for="paper_type_medium" style="font-size:12px; color:#008000;">Medium 2</label>
                   </div>
                   
                   <div class="col-sm-1 text-center">
                       <label for="papeer_type_linear_1" style="font-size:12px; color:#008000;">Liner 1</label>
                       
                   </div>
               
                       <!--Add Input/Select Field Here No Dive Only Input/Select/Radio Button/Checkbox/Textarea -->				
                   

       </div><!-- End of <div class="form-group form-group-sm"  -->

         <div id="div_paper_type" >


                <div class="form-group form-group-sm" >


                <div class="col-sm-3 text-center">
                    <label class="control-label"  style="color:#00008B;"><span id="for_paper_type">Paper Type</span> </label>
                </div>
                
                <div class="col-sm-1 text-center">
                        
                            <input class="form-control input-sm" type="text" id="paper_type_linear" name="paper_type_linear" value="<?php echo $row1['paper_type_linear']?>" readonly>

                    </div>

                

                <div class="col-sm-1 text-center">
                            <input class="form-control input-sm" type="text" id="paper_type_medium" name="paper_type_medium" value="<?php echo $row1['paper_type_medium']?>" readonly>
                        
                </div>

                    <div class="col-sm-1 text-center">
                            <input class="form-control input-sm" type="text" id="paper_type_medium_1" name="paper_type_medium_1" value="<?php echo $row1['paper_type_medium_1']?>" readonly>
                        
                </div>

                    <div class="col-sm-1 text-center">
                            <input class="form-control input-sm" type="text" id="paper_type_medium_2" name="paper_type_medium_2" value="<?php echo $row1['paper_type_medium_2']?>" readonly>
                        
                </div>
                        
                        
                <div class="col-sm-1 text-center">
                        <input class="form-control input-sm" type="text" id="paper_type_linear_1" name="paper_type_linear_1" value="<?php echo $row1['paper_type_linear_1']?>" readonly>
                        
                </div>
                        
                        

                </div><!-- End of <div class="form-group form-group-sm" paper_type-->

</div> <!--  End of <div id="div_paper_type" style="display: none">  -->



           
          <div class="form-group form-group-sm" >
 

                       <div class="col-sm-3 text-center">
                           <label class="control-label"  style="color:#00008B;"><span id="for_score_or_creez_size">Score/Creez Size (mm):</span> </label>
                       </div>
                       
                       <div class="col-sm-1 text-center">
                               
                               <input class="form-control input-sm" type="text" id="score_or_creez_size" name="score_or_creez_size" value="<?php echo $row1['score_or_creez_size']?>" readonly>

                       </div>

                       <div class="col-sm-1 text-center">
                               
                               <input class="form-control input-sm" type="text" id="score_or_creez_size_1" name="score_or_creez_size_1" value="<?php echo $row1['score_or_creez_size_1']?>" readonly>

                       </div>

                       <div class="col-sm-1 text-center">
                               
                               <input class="form-control input-sm" type="text" id="score_or_creez_size_2" name="score_or_creez_size_2" value="<?php echo $row1['score_or_creez_size_2']?>" readonly>

                       </div>




           </div><!-- End of <div class="form-group form-group-sm" product_description-->



            <div class="form-group form-group-sm" >
 

                       <div class="col-sm-3 text-center">
                          <label class="control-label"  style="color:#00008B;"><span id="for_slotting_size">Slotting Size (MM):</span> </label>
                       </div>
                      
                        <div class="col-sm-1 text-center">
                              
                               <input class="form-control input-sm" type="text" id="slotting_size" name="slotting_size" value="<?php echo $row1['slotting_size']?>" readonly>

                       </div>

                       <div class="col-sm-1 text-center">
                              
                               <input class="form-control input-sm" type="text" id="slotting_size_1" name="slotting_size_1" value="<?php echo $row1['slotting_size_1']?>" readonly>

                       </div>
                       <div class="col-sm-1 text-center">
                              
                               <input class="form-control input-sm" type="text" id="slotting_size_2" name="slotting_size_2" value="<?php echo $row1['slotting_size_2']?>" readonly>

                       </div>


                       <div class="col-sm-1 text-center">
                              
                               <input class="form-control input-sm" type="text" id="slotting_size_3" name="slotting_size_3" value="<?php echo $row1['slotting_size_3']?>" readonly>

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
                   
                    <input class="form-control input-sm" type="text" id="liner_consumption_calc" name="liner_consumption_calc" value="<?php echo $row1['liner_consumption_calc']?>" readonly>

                </div>

           

                <div class="col-sm-1 text-center">

                    <input class="form-control input-sm" type="text" id="media_consumption_calc" name="media_consumption_calc" value="<?php echo $row1['media_consumption_calc']?>" readonly>
                 
                </div>
                
                 
                <div class="col-sm-1 text-center">

                   <input class="form-control input-sm" type="text" id="sqm_consumption_calc" name="sqm_consumption_calc" value="<?php echo $row1['sqm_consumption_calc']?>" readonly>
                  
                </div>
                
                     <!--Add Input/Select Field Here No Dive Only Input/Select/Radio Button/Checkbox/Textarea -->
                  
                <div class="col-sm-1" for="total_consumption">
                    
                     <input class="form-control input-sm" type="text" id="total_consumption" name="total_consumption" value="<?php echo $row1['total_consumption']?>" readonly>
                      
                </div>

       
            </div><!-- End of <div class="form-group form-group-sm" measurement_of_carton-->

       </div> <!--  End of <div id="div_measurement_of_carton" style="display: none">  -->



      <div><label class="form-control">Process Information</label> </div>

         <div class="form-group form-group-sm" id="form-group_for_process_name">
                <label class="control-label col-sm-3" for="process_name" style="color:#00008B;">Process Name:</label>

                <div class="col-sm-5">
                          <?php //onchange="returning_before_quantity_for_travel_card(this.value)"
                              $sql_for_process = "select * from `travel_card_details_for_transactions` where row_id='$row_id'";

                             
                              $result= mysqli_query($con,$sql_for_process) or die(mysqli_error($con));
                              $process_info = mysqli_fetch_assoc( $result);
                              

                          ?>
                    <select  class="form-control" id="process_name" name="process_name" >
                                <option select="selected" value="<?php echo $process_info['process_name']."?fs?".$process_info['process_id']?>"><?php echo $process_info['process_name']?></option>
                                <?php 
                                        $sql = "select distinct pc.process_name,pc.process_id from `process_name` pc Inner join travel_card_details_for_transactions tcdft on tcdft.process_id=pc.process_id where tcdft.travel_card_id='$travel_card_id'";
                                        $result= mysqli_query($con,$sql) or die(mysqli_error($con));
                                        while( $row = mysqli_fetch_array( $result))
                                        {

                                            echo '<option value="'.$row['process_name'].'?fs?'.$row['process_id'].'">'.$row['process_name'].'</option>';

                                        }

                                ?>
                    </select>

                    
                    
                </div>
                <i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('process_name')"></i>
        </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_creation"> -->

        
        <div class="form-group form-group-sm" id="form-group_for_before_process_quantity">
                <label class="control-label col-sm-3" for="before_process_quantity" style="color:#00008B;">Before Process Quantity:</label>
                <div class="col-sm-5">
                          
                          <input type="text" class="form-control" id="before_process_quantity" name="before_process_quantity" value="<?php echo $process_info['before_process_quantity']?>" >
                    
                </div>
                <i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('before_process_quantity')"></i>
        </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_creation"> -->	

        

        <div class="form-group form-group-sm" id="form-group_for_process_quantity">
                <label class="control-label col-sm-3" for="process_quantity" style="color:#00008B;"> Process Quantity:</label>
                <div class="col-sm-5">
                          
                          <input type="text" class="form-control" id="process_quantity" name="process_quantity" value="<?php echo $process_info['process_quantity']?>" >
                    
                </div>
                <i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('process_quantity')"></i>
        </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_creation"> -->   


        

        <?php

                  if($user_name=='mijan' || $user_name=='rejowan' || $user_name=='admin')
                 {



           ?>        

                      

                        
           <?php

                 }

                 else {

                       

                
           ?>            


            <?php 



             }
            ?>


                
                       



               
                <?php

                 if($user_access=='proc_1' || $user_access=='N/A')
                 {


                ?>     

                   <div class="form-group form-group-sm" id="form-group_for_actual_ratio">
                          <label class="control-label col-sm-3" for="actual_ratio" style="color:#00008B;"> Actual Ratio</label>
                          <div class="col-sm-5">
                                           
                                <input type="text" class="form-control" id="actual_ratio" name="actual_ratio" value="<?php echo $process_info['actual_ratio']?>" onchange="change_acutal_roll_size(this.value)">
                             
                          </div>
                
                        </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_actual_ratio"> --> 

                        <div class="form-group form-group-sm" id="form-group_for_actual_roll_size">
                          <label class="control-label col-sm-3" for="actual_roll_size" style="color:#00008B;"> Actual Roll Size</label>
                          <div class="col-sm-5">
                                           
                                           <input type="text" class="form-control" id="actual_roll_size" name="actual_roll_size" value="<?php echo $process_info['actual_roll_size']?>" >
                             
                   </div>



                <?php

                   }

                   else {


                ?>  

                    <div class="form-group form-group-sm" id="form-group_for_actual_ratio">
                         
                          <div class="col-sm-5">
                                           
                                <input type="hidden" class="form-control" id="actual_ratio" name="actual_ratio" value="<?php echo $process_info['actual_ratio']?>" onchange="change_acutal_roll_size(this.value)">
                             
                          </div>
                
                        </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_actual_ratio"> --> 

                        <div class="form-group form-group-sm" id="form-group_for_actual_roll_size">
                         
                          <div class="col-sm-5">
                                           
                                           <input type="hidden" class="form-control" id="actual_roll_size" name="actual_roll_size" value="<?php echo $process_info['actual_roll_size']?>" >
                             
                   </div>

                <?php

                        }



                 if($user_name=='mijan' || $user_name=='rejowan' || $user_name=='admin')
                 {



                ?>      
                       


                        <div class="form-group form-group-sm" id="form-group_for_process_wastage">
                            
                            <div class="col-sm-5">
                                             
                                             <input type="hidden" class="form-control" id="process_wastage" name="process_wastage" value="<?php echo $process_info['process_wastage']?>" >
                                            
                               
                            </div>
                           
                        </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_creation"> -->   

                        <div class="form-group form-group-sm" id="form-group_for_actual_used_linear">
                          <label class="control-label col-sm-3" for="actual_used_linear" style="color:#00008B;"> Actual Used Linear (kg)</label>
                          <div class="col-sm-5">
                                           
                                           <input type="text" class="form-control" id="actual_used_linear" name="actual_used_linear" value="<?php echo $process_info['actual_used_linear']?>" >
                             
                          </div>
                
                        </div> 

 

                        <div class="form-group form-group-sm" id="form-group_for_actual_used_medium">
                            <label class="control-label col-sm-3" for="actual_used_medium" style="color:#00008B;"> Actual Used Medium (kg)</label>
                            <div class="col-sm-5">
                                             
                                             <input type="text" class="form-control" id="actual_used_medium" name="actual_used_medium" value="<?php echo $process_info['actual_used_medium']?>" >
                                            
                               
                            </div>
                           
                        </div>
                 <?php

                 }
                 else
                 {

                         
                 ?>      

                       

                         <div class="form-group form-group-sm" id="form-group_for_process_wastage">
                            
                            <div class="col-sm-5">
                                             
                                             <input type="hidden" class="form-control" id="process_wastage" name="process_wastage" value="<?php echo $process_info['process_wastage']?>" >
                                            
                               
                            </div>
                           
                        </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_creation"> -->   


                        <div class="form-group form-group-sm" id="form-group_for_actual_used_linear">
                           
                          <div class="col-sm-5">
                                           
                                           <input type="hidden" class="form-control" id="actual_used_linear" name="actual_used_linear" value="<?php echo $process_info['actual_used_linear']?>" >
                             
                          </div>
                
                        </div> 

 

                        <div class="form-group form-group-sm" id="form-group_for_actual_used_medium">
                           
                            <div class="col-sm-5">
                                             
                                             <input type="hidden" class="form-control" id="actual_used_medium" name="actual_used_medium" value="<?php echo $process_info['actual_used_medium']?>" >
                                            
                               
                            </div>
                           
                        </div>

                 <?php
                          }

                 ?>

                         <input type="hidden" class="form-control" id="user_access" name="user_access" value="<?php echo $user_access ?>" >





         <div class="form-group form-group-sm">
                <div class="col-sm-offset-3 col-sm-5">
                    <button type="button" class="btn btn-primary" onClick="sending_data_of_edit_travel_card_with_process_form_for_update_in_database()">Update</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                </div>
           </div>

        </form>


</div> <!-- Panel -->

</div> <!-- End of <div class="col-sm-12 col-md-12 col-lg-12"> -->