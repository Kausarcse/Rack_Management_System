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

    $po_details_id = $_GET['po_details_id'];

    $sql = "select * from `po_details` WHERE `po_details_id`='$po_details_id'";
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
 function sending_data_of_po_details_form_for_saving_in_database()
 {


    //    var validate = Form_Validation();
       var validate = true;
       var url_encoded_form_data = $("#po_details_form").serialize(); //This will read all control elements value of the form	
       if(validate != false)
	   {


		  	 $.ajax({
			 		url: 'list/edit_po_details_saving.php',
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
         <li class="breadcrumb-item"><a onclick="load_page('process/po_details.php')">Add PO Details</a></li>
      </ol>
 </nav>

<form class="form-horizontal" action="" style="margin-top:10px;" name="po_details_form" id="po_details_form">

    
    
    <div><label class="form-control">Order Description</label> </div>
         <input type="hidden" id="po_details_id" name="po_details_id" value="<?php echo $po_details_id?>">
        <div class="form-group form-group-sm" id="form-group_for_po_number">

            <label><span id="show"></span></label>
                
              
                <label class="control-label col-sm-3" for="po_number" style="color:#00008B;">PO Number:</label>
                <div class="col-sm-5">
                    <select  class="form-control for_auto_complete" id="po_number" name="po_number">
                            <option select="selected" value="<?php echo $row1['po_number'].'?fs?'.$row1['po_id'] ?>"><?php echo $row1['po_number'] ?></option>
                            <?php 
                                 $sql = 'select distinct `po_number`,`po_id` from `po_details` order by `row_id`';
                                 $result= mysqli_query($con,$sql) or die(mysqli_error($con));
                                 while( $row = mysqli_fetch_array( $result))
                                 {

                                     echo '<option value="'.$row['po_number'].'?fs?'.$row['po_id'].'">'.$row['po_number'].'</option>';

                                 }

                             ?>
                    </select>
                </div>
        </div> <!-- End of <div class="form-group form-group-sm" id="form-group_for_po_number"> -->


  <!--    <div class="panel-heading" style="color:#191970;"><b>Product Description</b></div> -->


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
                   
                    <input class="form-control input-sm" type="text" id="measurement_of_carton_length" name="measurement_of_carton_length" value="<?php echo $row1['measurement_of_carton_length'] ?>">

               </div>

           

               <div class="col-sm-1 text-center">
                    <input class="form-control input-sm" type="text" id="measurement_of_carton_width" name="measurement_of_carton_width" value="<?php echo $row1['measurement_of_carton_width'] ?>" onchange="calculate_width_wise_data(this.value)">
                 
             </div>
                
                 
              <div class="col-sm-1 text-center">
                   <input class="form-control input-sm" type="text" id="measurement_of_cartoon_height" name="measurement_of_cartoon_height" value="<?php echo $row1['measurement_of_cartoon_height'] ?>" onChange="calculate_height_wise_data()">
                  
               </div>
                
                     <!--Add Input/Select Field Here No Dive Only Input/Select/Radio Button/Checkbox/Textarea -->
                  
              <div class="col-sm-1" for="measurement_of_cartoon_ply">

                      <select  class="form-control" id="measurement_of_cartoon_ply" name="measurement_of_cartoon_ply">
                                <option select="selected" value="<?php echo $row1['measurement_of_cartoon_ply'] ?>"><?php echo $row1['measurement_of_cartoon_ply'] ?></option>
                                <option value="3">3</option>
                                <option value="5">5</option>
                                <option value="7">7</option>
                    </select>

                
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
                                            <label for="paper_type_medium_1" style="font-size:12px; color:#008000;">Meidum</label>
                                       </div>

                                       <div class="col-sm-1 text-center">
                                            <label for="paper_type_medium_2" style="font-size:12px; color:#008000;">Meidum</label>
                                       </div>
                                         
                                        <div class="col-sm-1 text-center">
                                              <label for="papeer_type_linear_1" style="font-size:12px; color:#008000;">Linear</label>
                                              
                                        </div>
                                      
                                           <!--Add Input/Select Field Here No Dive Only Input/Select/Radio Button/Checkbox/Textarea -->
                                         
                                      
                                            
                                               
                                        

                 </div><!-- End of <div class="form-group form-group-sm"  -->



                 <div id="div_paper_type" >


                        <div class="form-group form-group-sm" >
                      

                           <div class="col-sm-3 text-center">
                             <label class="control-label"  style="color:#00008B;"><span id="for_paper_type">Paper Type</span> </label>
                           </div>
                           
                           <div class="col-sm-1 text-center">
                                   
                                    <input class="form-control input-sm" type="text" id="paper_type_linear" name="paper_type_linear" value="<?php echo $row1['paper_type_linear'] ?>">

                               </div>

                           

                           <div class="col-sm-1 text-center">
                                    <input class="form-control input-sm" type="text" id="paper_type_medium" name="paper_type_medium" value="<?php echo $row1['paper_type_medium'] ?>">
                                 
                           </div>

                           <div class="col-sm-1 text-center">
                                    <input class="form-control input-sm" type="text" id="paper_type_medium_1" name="paper_type_medium_1" value="<?php echo $row1['paper_type_medium_1'] ?>">
                                 
                           </div>

                           <div class="col-sm-1 text-center">
                                    <input class="form-control input-sm" type="text" id="paper_type_medium_2" name="paper_type_medium_2" value="<?php echo $row1['paper_type_medium_2'] ?>">
                                 
                           </div>
                                
                                 
                           <div class="col-sm-1 text-center">
                                   <input class="form-control input-sm" type="text" id="paper_type_linear_1" name="paper_type_linear_1" value="<?php echo $row1['paper_type_linear_1'] ?>">
                                  
                           </div>
                                
                                   
                       
                       </div><!-- End of <div class="form-group form-group-sm" paper_type-->

 </div> <!--  End of <div id="div_paper_type" style="display: none">  -->





        <div id="div_flute_type" >
             <?php 

                 $splitted_flute_type_array = explode(",",$row1['flute_type']);
                 /*<?php if (in_array("A Flute",  $splitted_flute_type_array)) echo "checked";?>*/

             ?>

                <div class="form-group form-group-sm" >
                  

                  <div class="col-sm-3 text-center">
                     <label class="control-label"  style="color:#00008B;"><span id="for_flute_type">Flute Type</span> </label>
                  </div>
                   
                     <div class="col-sm-1 text-center">
                           
                            <label class="control-label checkbox-inline" for="flute_type" >   

                               <input type="checkbox" id="flute_type" name="flute_type[]" value="A Flute" <?php if (in_array("A Flute",  $splitted_flute_type_array)) echo "checked";?>>
                               <strong>A Flute</strong>
                               </label> 

                    </div>


                    <div class="col-sm-1 text-center">
                               <label class="control-label checkbox-inline" for="flute_type" >   
                                     
                               <input type="checkbox" id="flute_type" name="flute_type[]" value="B Flute" <?php if (in_array("B Flute",  $splitted_flute_type_array)) echo "checked";?>>
                               <strong>B Flute</strong>
                               </label>  

                    </div>


                    <div class="col-sm-1 text-center">

                               <label class="control-label checkbox-inline" for="flute_type" >   
                                     
                               <input type="checkbox" id="flute_type" name="flute_type[]" value="C Flute" <?php if (in_array("C Flute",  $splitted_flute_type_array)) echo "checked";?>>
                               <strong>C Flute</strong>
                               </label> 
                    </div>

                    <div class="col-sm-1 text-center">

                               <label class="control-label checkbox-inline" for="flute_type" >   
                                     
                               <input type="checkbox" id="flute_type" name="flute_type[]" value="E Flute" <?php if (in_array("E Flute",  $splitted_flute_type_array)) echo "checked";?>>
                               <strong>E Flute</strong>
                               </label> 
                    </div>


                    <div class="col-sm-1 text-center">

                               <label class="control-label checkbox-inline" for="flute_type" >   
                                     
                               <input type="checkbox" id="flute_type" name="flute_type[]" value="F Flute" <?php if (in_array("F Flute",  $splitted_flute_type_array)) echo "checked";?>>
                               <strong>F Flute</strong>
                               </label>  

                    </div>

                   

               
               </div><!-- End of <div class="form-group form-group-sm" flute_type-->

            </div> <!--  End of <div id="div_flute_type" style="display: none">  -->




         <div id="div_printing_status" >
                  
              <?php
                  $printing_status = $row1['printing_status'];
              ?>

            <div class="form-group form-group-sm" >
          

              <div class="col-sm-3 text-center">
                 <label class="control-label"  style="color:#00008B;"><span id="for_printing_status">Printing Status</span> </label>
              </div>
               
                 <div class="col-sm-1 text-center">
                       
                        <input type="radio" id="printing_status" name="printing_status" value="Printed" <?php if($printing_status == "Printed") echo "checked"?>>
                        <label for="Printed">Printed</label>

                </div>


                <div class="col-sm-2 text-center">
                           <input type="radio" id="printing_status" name="printing_status" value="Non Printed" <?php if($printing_status == "Non Printed") echo "checked"?>>
                             <label for="Non Printed">Non Printed</label> 

                </div>



           
           </div><!-- End of <div class="form-group form-group-sm" printing_status-->

     </div> <!--  End of <div id="div_printing_status" style="display: none">  -->




        <div id="div_dye_cutting" >

              <?php
                  $dye_cutting = $row1['dye_cutting'];
              ?>
                <div class="form-group form-group-sm" >
              

                  <div class="col-sm-3 text-center">
                     <label class="control-label"  style="color:#00008B;"><span id="for_dye_cutting">Die Cutting</span> </label>
                  </div>
                   
                     <div class="col-sm-1 text-center">
                           
                            <input type="radio" id="dye_cutting" name="dye_cutting" value="Die Cutting" <?php if($dye_cutting == "Die Cutting") echo "checked"?>>
                            <label for="Die Cutting">Die Cutting</label>

                    </div>


                    <div class="col-sm-1 text-center">
                              <input type="radio" id="dye_cutting" name="dye_cutting" value="Non Die Cutting" <?php if($dye_cutting == "Non Die Cutting") echo "checked"?>>
                              <label for="Non Die Cutting">Non Die Cutting</label> 

                    </div>



               
               </div><!-- End of <div class="form-group form-group-sm" dye_cutting-->

        </div> <!--  End of <div id="div_dye_cutting" style="display: none">  -->



<div><label class="form-control">Process Description</label> </div>





         <div id="div_product_description" >


                    <div class="form-group form-group-sm" >
                  

                            <div class="col-sm-3 text-center">
                             <label class="control-label"  style="color:#00008B;"><span id="for_carton_quantity">Carton Quantity :</span> </label>
                            </div>
                           
                             <div class="col-sm-1 text-center">
                                   
                                    <input class="form-control input-sm" type="text" id="carton_quantity" name="carton_quantity"  value="<?php echo $row1['carton_quantity']?>" onchange="total_board_Quantity()">

                            </div>


                            <div class="col-sm-2 text-center">
                                     <label  class="control-label"  style="color:#00008B;"><span id="for_ratio">Ratio :</span> </label>

                            </div>

                            <div class="col-sm-1 text-center">
                                   
                                    <input class="form-control input-sm" type="text" id="ratio" name="ratio" value="<?php echo $row1['ratio']?>" >

                            </div>


                            <div class="col-sm-2 text-center">
                                     <label  class="control-label"  style="color:#00008B;"><span id="for_board_quantity">Board Quantity :</span> </label>

                            </div>

                            <div class="col-sm-1 text-center">
                                   
                                    <input class="form-control input-sm" type="text" id="board_quantity" name="board_quantity" value="<?php echo $row1['board_quantity']?>">

                            </div>



                   
                   </div><!-- End of <div class="form-group form-group-sm" product_description-->



                     <div class="form-group form-group-sm" >
      

                            <div class="col-sm-3 text-center">
                             <label class="control-label"  style="color:#00008B;"><span id="for_cutter_size">Cutter Size:</span> </label>
                            </div>
                           
                             <div class="col-sm-1 text-center">
                                   
                                    <input class="form-control input-sm" type="text" id="cutter_size" name="cutter_size" value="<?php echo $row1['cutter_size']?>">

                            </div>



                            <div class="col-sm-2 text-center">
                                     <label class="control-label"  style="color:#00008B;"><span id="for_roll_size">Roll Size :</span> </label>

                            </div>

                            <div class="col-sm-1 text-center">
                                   
                                    <input class="form-control input-sm" type="text" id="roll_size" name="roll_size" value="<?php echo $row1['roll_size']?>">

                            </div>



                            


                   
                   </div><!-- End of <div class="form-group form-group-sm" >-->




                <div class="form-group form-group-sm" >
                      

                                            <div class="col-sm-3 text-center">
                                               <label class="control-label"  style="color:#00008B;"><span id="for_score_or_creez_size">Score/Creez Size (mm):</span> </label>
                                            </div>
                                           
                                             <div class="col-sm-1 text-center">
                                                   
                                                    <input class="form-control input-sm" type="text" id="score_or_creez_size" name="score_or_creez_size" value="<?php echo $row1['score_or_creez_size'] ?>">

                                            </div>

                                             <div class="col-sm-1 text-center">
                                                   
                                                    <input class="form-control input-sm" type="text" id="score_or_creez_size_1" name="score_or_creez_size_1" value="<?php echo $row1['score_or_creez_size_1'] ?>">

                                            </div>

                                             <div class="col-sm-1 text-center">
                                                   
                                                    <input class="form-control input-sm" type="text" id="score_or_creez_size_2" name="score_or_creez_size_2" value="<?php echo $row1['score_or_creez_size_2'] ?>">

                                            </div>



                       
                                 </div><!-- End of <div class="form-group form-group-sm" product_description-->



                                 <div class="form-group form-group-sm" >
                      

                                            <div class="col-sm-3 text-center">
                                               <label class="control-label"  style="color:#00008B;"><span id="for_slotting_size">Slotting Size (MM):</span> </label>
                                            </div>
                                           
                                             <div class="col-sm-1 text-center">
                                                   
                                                    <input class="form-control input-sm" type="text" id="slotting_size" name="slotting_size" value="<?php echo $row1['slotting_size'] ?>">

                                            </div>

                                             <div class="col-sm-1 text-center">
                                                   
                                                    <input class="form-control input-sm" type="text" id="slotting_size_1" name="slotting_size_1" value="<?php echo $row1['slotting_size_1'] ?>">

                                            </div>


                                             <div class="col-sm-1 text-center">
                                                   
                                                    <input class="form-control input-sm" type="text" id="slotting_size_2" name="slotting_size_2" value="<?php echo $row1['slotting_size_2'] ?>">

                                            </div>
                                             <div class="col-sm-1 text-center">
                                                   
                                                    <input class="form-control input-sm" type="text" id="slotting_size_3" name="slotting_size_3" value="<?php echo $row1['slotting_size_3'] ?>">

                                            </div>



                       
                                 </div><!-- End of <div class="form-group form-group-sm" product_description-->



       
          </div><!-- End of <div class="form-group form-group-sm" product_description-->








         



                     <div class="form-group form-group-sm">
                         
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="button" class="btn btn-primary" onClick="sending_data_of_po_details_form_for_saving_in_database()">Update</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </div>
                     </div>
    </div>  <!-- End of <div class="panel-heading" style="color:#191970;"><b>Order Description</b></div> -->

</form>

</div> <!-- End of <div class="panel panel-default"> -->


<!-- ---------------------------------All  Calculative script---------------------------- -->

     <!-- ---------------------------------All  Calculative script---------------------------- -->
       <!-- ---------------------------------All  Calculative script---------------------------- -->
      <script>
        
        function calculate_width_wise_data(measurement_of_carton_width)
        {
               

               var measurement_of_carton_length=document.getElementById('measurement_of_carton_length').value;
               var measurement_of_carton_width=document.getElementById('measurement_of_carton_width').value;

               var cutter_size_first_step=(parseFloat(measurement_of_carton_length)+parseFloat(measurement_of_carton_width))*2;
               
               
               var cutter_size=(cutter_size_first_step+4)* 10;

              // alert(cutter_size);

               



               var slotting_size=(measurement_of_carton_length*10)-2;
               var slotting_size_1=(measurement_of_carton_width*10)-2;

               document.getElementById("cutter_size").value=cutter_size;

              


               document.getElementById("slotting_size").value=slotting_size;

               document.getElementById("slotting_size_1").value=slotting_size_1;

               document.getElementById("slotting_size_2").value=slotting_size;
               document.getElementById("slotting_size_3").value=slotting_size_1;
        }


          function calculate_height_wise_data()
          {
           var measurement_of_cartoon_height=document.getElementById('measurement_of_cartoon_height').value;

           var measurement_of_carton_width=document.getElementById('measurement_of_carton_width').value;

              
            //calculating Score or Creez size
              var score_or_creez_size=((measurement_of_carton_width*10)/2);
               var score_or_creez_size_1=((measurement_of_cartoon_height*10)-2);
               var score_or_creez_size_2=((measurement_of_carton_width*10)/2);


              

      
               document.getElementById("score_or_creez_size").value=score_or_creez_size;


               document.getElementById("score_or_creez_size_1").value=score_or_creez_size_1;


               document.getElementById("score_or_creez_size_2").value=document.getElementById("score_or_creez_size").value;

            //calculating Ratio

            // var cal_0=(parseFloat(measurement_of_carton_width)+parseFloat(measurement_of_cartoon_height))*4;

            // alert(cal_0);

            // var cal=(cal_0+4)/2.55;
            // alert(cal);


            if(((((parseFloat(measurement_of_carton_width)+parseFloat(measurement_of_cartoon_height))*4)+4)/2.55) < 68)
            {
            

              document.getElementById("ratio").value=4;
              var ratio=4;

              //roll size

              var roll_size=((parseFloat(score_or_creez_size)+parseFloat(score_or_creez_size_1)+parseFloat(score_or_creez_size_2))* ratio)/25.4;

                var calc_roll_size=parseInt(roll_size)+2;

              

                 if ( calc_roll_size % 2 == 0) {
                  document.getElementById("roll_size").value=calc_roll_size;
                }else{
                  document.getElementById("roll_size").value=calc_roll_size+1;
                }

            }

            else if(((((parseFloat(measurement_of_carton_width)+parseFloat(measurement_of_cartoon_height))*3)+4)/2.55) < 68)
            {
            
                 
              document.getElementById("ratio").value=3;
              var ratio=3;
               
              //roll size

              var roll_size=((parseFloat(score_or_creez_size)+parseFloat(score_or_creez_size_1)+parseFloat(score_or_creez_size_2))* ratio)/25.4;



                var calc_roll_size=parseInt(roll_size)+2;

              

                if ( calc_roll_size % 2 == 0) {
                  document.getElementById("roll_size").value=calc_roll_size;
                }else{
                  document.getElementById("roll_size").value=calc_roll_size+1;
                }

            }

            else if(((((parseFloat(measurement_of_carton_width)+parseFloat(measurement_of_cartoon_height))*2)+4)/2.55) < 68)
            {
            

              document.getElementById("ratio").value=2;
                var ratio=2;
              //roll size

              var roll_size=((parseFloat(score_or_creez_size)+parseFloat(score_or_creez_size_1)+parseFloat(score_or_creez_size_2))* ratio)/25.4;

              var calc_roll_size=parseInt(roll_size)+2;

              

                if ( calc_roll_size % 2 == 0) {
                  document.getElementById("roll_size").value=calc_roll_size;
                }else{
                  document.getElementById("roll_size").value=calc_roll_size+1;
                }

                

            }
           else 
            {
            

              document.getElementById("ratio").value=1;
              var ratio=1;

              //roll size

              var roll_size=((parseFloat(score_or_creez_size)+parseFloat(score_or_creez_size_1)+parseFloat(score_or_creez_size_2))*parseFloat(ratio))/25.4;

              

                var calc_roll_size=parseInt(roll_size)+2;

              

                 if ( calc_roll_size % 2 == 0) {
                  document.getElementById("roll_size").value=calc_roll_size;
                }else{
                  document.getElementById("roll_size").value=calc_roll_size+1;
                }

            }

           //End of calculating Ratio     
      



        }

  
        function total_board_Quantity(carton_quantity){
          var carton_quantity= carton_quantity;
          var ratio= document.getElementById("ratio").value;



          board_quantity= (carton_quantity/ratio);

          //document.getElementById("board_quantity").value=parseFloat(board_quantity)+1;
          document.getElementById("board_quantity").value=board_quantity;

          // var score_or_creez_size=document.getElementById("score_or_creez_size").value;
          // var score_or_creez_size_1=document.getElementById("score_or_creez_size_1").value;
          // var score_or_creez_size_2=document.getElementById("score_or_creez_size_2").value;

        //        var ratio= document.getElementById("ratio").value;

          


               
        }
      </script>
                   