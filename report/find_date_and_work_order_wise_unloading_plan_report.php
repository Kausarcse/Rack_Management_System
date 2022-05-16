<?php

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$date_of_delivery = $_POST['date_of_delivery'];
$work_order_number = $_POST['work_order_number'];

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
    $order_qty=$row1['order_qty'];
    $grade_a=$row1['grade_a'];
    $grade_b=$row1['grade_b'];
    $total_stock=$row1['total_stock'];
    $number_of_roll=$row1['number_of_roll'];
    $date_of_delivery=$row1['date_of_delivery'];
    $all_cubics=$row1['all_cubics'];
    $all_barcodes=$row1['all_barcodes'];

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
                            <?php echo $date_of_delivery; ?>
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $all_cubics; ?>
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $all_barcodes; ?>
                            <input type="hidden" name="all_barcodes" id="all_barcodes" value="<?php echo $all_barcodes; ?>">
                        </td>                    
                        
                     </tr>





    <?php
    ++$s1;
}

?>


    

                     
              </tbody>
             </table>

        </div> <!-- End of <div class="form-group form-group-sm" -->

        </div>  <!-- end of <div class="panel panel-default"> -->