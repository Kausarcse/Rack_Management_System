<?php
session_start();
include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$date_of_delivery = $_POST['date_of_delivery'];
$work_order_number = $_POST['work_order_number'];

//all barcode in a session
unset($_SESSION['session_barcodes']);
$_SESSION['session_barcodes'] = array();

$splitted_date_of_indent= explode("/",$date_of_delivery);
$date_of_delivery= $splitted_date_of_indent[1]."/".$splitted_date_of_indent[0]."/".$splitted_date_of_indent[2];

$barcode_codes = array();
$cubics = array();
$lengths = 0;


$sql1 = "SELECT 
        *
        FROM unloading_plan
        WHERE date_of_delivery = '$date_of_delivery'
        and work_order_number = '$work_order_number'
        AND active = '1'
        ";
$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));

$counter = 1;
$s1 = 1;

?>


<div class="panel panel-default" >

        <div class="form-group form-group-sm table-responsive" id="datewise_transaction_details">

             <table id="datatable-buttons" class="table table-striped table-bordered" style="overflow: auto;">
                 <thead>
                     <tr>
                         <th style="border: 1px solid black;">SI</th>
                         <th style=" border: 1px solid black;">Buyer</th>
                         <th style="border: 1px solid black;">Garments</th>

                         <th style="border: 1px solid black;">A\C Holder</th>
                         <th style="border: 1px solid black;">Fabrication</th>
                         <th style="border: 1px solid black;">Composition</th>

                         <th style="border: 1px solid black;">Weave</th>
                         <th style="border: 1px solid black;">Width</th>
                         <th style="border: 1px solid black;">Process</th>

                         <th style="border: 1px solid black;">GD Number</th>
                         
                         <th style="border: 1px solid black; text-align:center;">PI Number</th>
                         <th style="border: 1px solid black; "> PP number</th>
                         <th style="border: 1px solid black; ">Work Order Number</th>

                         <th style="border: 1px solid black; text-align:center;"> Color/Design </th>
                         <th style="border: 1px solid black; "> Order Qty</th>
                         <th style="border: 1px solid black; "> A-Grade</th>
                         <th style="border: 1px solid black; "> B-Grade</th>
                         <th style="border: 1px solid black; "> Total Stock</th>
                         <th style="border: 1px solid black; "> Number of Roll</th>

                         <th style="border: 1px solid black; "> Delivery Plan Amount</th>

                         <th style="border: 1px solid black; "> Delivery Plan</th>

                         <th style="border: 1px solid black; "> Cubic Number</th>
                         <th style="border: 1px solid black; "> Barcode</th>
                        
                         
                    
                     </tr>
                </thead>
                <tbody>

<?php

while($row1 = mysqli_fetch_assoc($result1))
{  

    $work_order_number=$row1['work_order_number'];
    $delivery_quantity=$row1['delivery_quantity'];
    $buyer=$row1['buyer'];
    $garments=$row1['garments'];
    $ac_holder=$row1['ac_holder'];
    $fabrication=$row1['fabrication'];
    $composition=$row1['composition'];
    $weave=$row1['weave'];
    $width=$row1['width'];
    $process_name=$row1['process_name'];
    $gd_number=$row1['gd_number'];
    $pi_number=$row1['pi_number'];
    $pp_number=$row1['pp_number'];
    $color_or_design=$row1['color_or_design'];
    $grade_a=$row1['grade_a'];
    $grade_b=$row1['grade_b'];
    $total_stock=$row1['total_stock'];
    $number_of_roll=$row1['number_of_roll'];
    $date_of_delivery=$row1['date_of_delivery'];
    $all_cubics=$row1['all_cubics'];
    $all_barcodes=$row1['all_barcodes'];

    $order_qty=$row1['order_qty'];
    $allownce= $row1['allownce'];
    $rate= $row1['rate'];
    $process= $row1['process'];
    $pi_no= $row1['pi_no'];
    $cut_width= $row1['cut_width'];
    $style_no= $row1['style_no'];

    ?>


                    <tr>
                        <td style="border: 1px solid black;">
                            <?php echo $s1; ?>
                        </td>
                        <td style="border: 1px solid black;">
                            <?php echo $buyer; ?>
                            <input type="hidden" id="buyer" name="buyer" value="<?php echo $customer_name; ?>">
                        </td>
                        
                        <td style="border: 1px solid black;">
                            <?php echo $garments; ?>
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $ac_holder; ?>
                        </td>
                        <td style="border: 1px solid black;">
                            <?php echo $fabrication; ?>
                        </td>  
                        <td style="border: 1px solid black;">
                            <?php echo $composition; ?>
                        </td> 

                        <td style="border: 1px solid black;">
                            <?php echo $weave; ?>
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $width; ?>
                        </td>  

                        <td style="border: 1px solid black;">
                            <?php echo ''; ?> 
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $gd_number; ?> 
                        </td>
                        <td style="border: 1px solid black;">
                            <?php echo $pi_number; ?>  
                        </td>
                        <td style="border: 1px solid black;">
                            <?php echo $pp_number; ?>
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $work_order_number; ?>
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $color_or_design; ?>
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $order_qty; ?>
                        </td> 

                        <td style="border: 1px solid black;">
                            <?php 
                                echo $grade_a;
                            ?>
                        </td>

                        <td style="border: 1px solid black;">
                            <?php 
                                echo $grade_b;
                            ?>
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $total_stock; ?>
                        </td>

                        <td style="border: 1px solid black;">
                            <?php 
                                echo $number_of_roll;
                            ?>
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $delivery_quantity; ?>
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $date_of_delivery; ?>
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $all_cubics; ?>
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $all_barcodes; ?>
                            <input type="hidden" name="all_barcodes" id="all_barcodes" value="<?php echo $all_barcodes; ?>">
                        </td> 

                        <!-- extra information -->
                          <input type="hidden" class="form-control" id="allownce" name="allownce" value="<?php echo $allownce; ?>">
                          <input type="hidden" class="form-control" id="rate" name="rate" value="<?php echo $rate; ?>">
                          <input type="hidden" class="form-control" id="process" name="process" value="<?php echo $process; ?>">
                          <input type="hidden" class="form-control" id="pi_no" name="pi_no" value="<?php echo $pi_no; ?>">
                          <input type="hidden" class="form-control" id="cut_width" name="cut_width" value="<?php echo $cut_width; ?>">
                          <input type="hidden" class="form-control" id="style_no" name="style_no" value="<?php echo $style_no; ?>">                   
                        
                     </tr>





    <?php
    ++$s1;
}

?>


    

                     
              </tbody>
             </table>

        </div> <!-- End of <div class="form-group form-group-sm" -->

        </div>  <!-- end of <div class="panel panel-default"> -->



<div class="container-fluid">
  <h2 class="text-center">Allocate Delivery Quantity</h2>

  <form id="dynamically_allocated_form" name="dynamically_allocated_form" data-parsley-validate class="form-horizontal form-label-left">
    
    <!-- count row counter and total row name counter -->
    <input type="hidden" value="1" id="row-counter" name="row-counter" class="form-control">
    <input type="hidden"  id="work_order_number" name="work_order_number" class="form-control">
    <input type="hidden" value="1" id="row-name-counter" name="row-name-counter" class="form-control">


    <div class="row container" style="margin-left: 0px;">
        
             <div style="text-align: center;" class="control-label col-md-3 col-sm-3 bg-primary" style="width: 290px; margin-left: 0px;">
                <label for="work_order_number"> Barcode</label>
            </div>

            <div style="text-align: center;" class="control-label col-md-3 col-sm-3 bg-primary" style="width: 290px; margin-left: 0px;">
                <label for="barcode">Work Order No</label>
            </div>
            
            <div style="text-align: center;" class="control-label col-md-2 col-sm-2 bg-primary" style="width: 200px; margin-left: 0px;">
                <label for="gd_number"> GD Number</label>
            </div>
            <div style="text-align: center;" class="control-label col-md-2 col-sm-2 bg-primary" style="width: 200px; margin-left: 0px;">
                <label for="cubic_number"> Cubic</label>
            </div>
            <div style="text-align: center; " class="control-label col-md-2 col-sm-2 bg-primary" style="width: 200px; margin-left: 0px;">
                <label for="length"> Length</label>
            </div>

        </div>
    

    <!-- <div id="first_portion" class="row" > -->
         <div class="form-group row" id="details_amount1" style="margin-left: 0px;">
            <div class="col-md-3 col-sm-3 field_container" style="margin-left: 0px; width: 290px;">
								<select  class="form-control for_auto_complete" id="barcode_code1" name="barcode_code1" onchange="barcode_change(this.value, 1)">
											<option selected="selected" value="select">Select Barcode</option>
											<?php 

                                                $sql = "SELECT `all_barcodes` FROM `unloading_plan` WHERE `work_order_number` = '$work_order_number' AND active='1'";
                                                $result= mysqli_query($con,$sql) or die(mysqli_error($con));
                                                $row = mysqli_fetch_array($result);
                                                $barcodes = explode(", ",$row['all_barcodes']);

                                                foreach($barcodes as $barcode)
                                                {
                                                    $barcode = strval($barcode);
                                                    echo '<option value="'.$barcode.'">'.$barcode.'</option>';
                                                } 

											?>
								</select>
						</div>


            <div style="margin-left: 0px;">

             <div class="col-md-3 col-sm-3" style="margin-left: 0px; width: 290px;">
                  <input type="text" id="work_order_number1" name="work_order_number1" class="work_order_number1 form-control   ">
              </div>


              <div class="col-md-2 col-sm-2" style="margin-left: 0px; width: 200px;">
                  <input type="text" id="gd_number1" name="gd_number1" class="gd_number1 form-control   ">
              </div>

              <div class="col-md-2 col-sm-2   " style="margin-left: 0px; width: 200px;">
                  <input type="text" id="cubic_number1" name="cubic_number1" class="cubic_number1 form-control   ">
              </div>

              <div class="col-md-2 col-sm-2   " style="margin-left: 0px; width: 200px;">
                  <input type="text" id="length1" name="length1"  class="length1 form-control">
              </div>

            </div>

         </div>
         
      <!-- </div> -->

      <div id="dynamically_allocated" style="margin-bottom: 20px;">
        </div>
        

        <div id="total_length_show" style="display: none;">

                <div class="col-md-3 col-sm-3" style="margin-left: 0px; width: 200px;"></div>
                <div class="col-md-3 col-sm-3" style="margin-left: 0px; width: 200px;"></div>

                <div class="col-md-2 col-sm-2" style="margin-left: 0px; width: 200px;"></div>

                <div class="col-md-2 col-sm-2 text-right" style="margin-left: 0px; width: 200px;">
                    <label for="work_order_number" class="bg-warning"> Total Amount : </label>   
                </div>

                <div class="col-md-2 col-sm-2  text-right" style="margin-left: 0px; width: 200px;">
                    <!-- <strong id="total_length" class="bg-success">0</strong> -->
                    <input type="text" id="tot_length" class="bg-warning text-center" name="tot_length" value="">

                </div>



                <br><br>

                <div class="col-md-3 col-sm-3" style="margin-left: 0px; width: 200px;"></div>
                <div class="col-md-3 col-sm-3" style="margin-left: 0px; width: 200px;"></div>

                <div class="col-md-2 col-sm-2" style="margin-left: 0px; width: 200px;"></div>

                <div class="col-md-2 col-sm-2 text-right" style="margin-left: 0px; width: 200px;">
                    <label for="work_order_number" class="bg-warning"> Delivery Plan Amount : </label>   
                </div>

                <div class="col-md-2 col-sm-2  text-right" style="margin-left: 0px; width: 200px;">
                    <!-- <strong id="total_length" class="bg-success">0</strong> -->
                    <input type="text" id="delivery_plan_amount" class="bg-warning text-center" name="delivery_plan_amount" value="<?php
                    if(isset($delivery_quantity))
                    {
                        echo $delivery_quantity;
                    }
                    ?>">

                </div>
                <input type="hidden" id="date_of_delivery" name="date_of_delivery" value="<?php
                if(isset($date_of_delivery))
                {
                    echo $date_of_delivery;
                }
                
                 ?>">

                <!-- <button type='button' style="margin-left: 50px; margin-bottom: 20px;" class="btn-xs btn-warning" id='add_row' value='' style="margin-top: 3px;" onclick=''>Add +</button> -->

                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <button type="button" onClick="sending_issue_data_in_database()" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>





        
    </div>