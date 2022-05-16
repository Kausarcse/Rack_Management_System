

<?php
//session_start();
//error_reporting(0);

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$id = $_POST['id'];
$work_order_number = $_POST['work_order_number'];
$length = $_POST['length'];
$date_of_delivery = $_POST['date_of_delivery'];
$new_delivery_date = $_POST['new_delivery_date'];




$sql_delivery_plan_edit =  "SELECT * FROM unloading_plan
       WHERE work_order_number = '$work_order_number'
         and active = '1' AND id = '$id'";
$result_delivery_plan_edit= mysqli_query($con, $sql_delivery_plan_edit) or die(mysqli_error($con));
$row_delivery_plan_edit = mysqli_fetch_assoc($result_delivery_plan_edit);


$delivery_quantity = $row_delivery_plan_edit['delivery_quantity'];
         $garments = $row_delivery_plan_edit['garments'];
        $ac_holder = $row_delivery_plan_edit['ac_holder'];
            $buyer = $row_delivery_plan_edit['buyer'];
         $garments = $row_delivery_plan_edit['garments'];
        $ac_holder = $row_delivery_plan_edit['ac_holder'];
      $fabrication = $row_delivery_plan_edit['fabrication'];
      $composition = $row_delivery_plan_edit['composition'];
            $weave = $row_delivery_plan_edit['weave'];
            $width = $row_delivery_plan_edit['width'];
     $process_name = $row_delivery_plan_edit['process_name'];
        $gd_number = $row_delivery_plan_edit['gd_number'];
        $pi_number = $row_delivery_plan_edit['pi_number'];
        $pp_number = $row_delivery_plan_edit['pp_number'];
  $color_or_design = $row_delivery_plan_edit['color_or_design'];
        $order_qty = $row_delivery_plan_edit['order_qty'];
          $grade_a = $row_delivery_plan_edit['grade_a'];
          $grade_b = $row_delivery_plan_edit['grade_b'];
      $total_stock = $row_delivery_plan_edit['total_stock'];
   $number_of_roll = $row_delivery_plan_edit['order_qty'];
 $date_of_delivery = $row_delivery_plan_edit['date_of_delivery'];
           $active = $row_delivery_plan_edit['active'];

           $recording_person_id = $row_delivery_plan_edit['recording_person_id'];
         $recording_person_name = $row_delivery_plan_edit['recording_person_name'];
                $recording_time = $row_delivery_plan_edit['recording_time'];







//total length counting
$sql_total_length = "SELECT 
        sum(length) total_length
        FROM item_receiving
        WHERE work_order_number = '$work_order_number'
        and active = '1'
        ";
$result_total_length = mysqli_query($con, $sql_total_length) or die(mysqli_error($con));
$row_total_length = mysqli_fetch_assoc($result_total_length);
$grade_total_length =  $row_total_length['total_length'];

if ($grade_total_length < $length) 
{
    echo "Given quantity is more than stock qunatity";
    exit();
}

$barcode_codes = array();
$cubics = array();
$lengths = 0;


$sql1 = "SELECT 
        *
        FROM item_receiving
        WHERE work_order_number = '$work_order_number'
        and active = '1'
        ORDER BY date_of_receipt DESC
        ";
$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));

$counter = 1;
$s1 = 1;

$total_length = 0;

while($row1 = mysqli_fetch_assoc($result1))
{  

    ${"barcode_code" . $s1} = $row1['barcode_code'];
    ${"length" . $s1} = $row1['length'];
    ${"cubic_number" . $s1} = $row1['cubic_number'];
    ${"pallet_no" . $s1} = $row1['pallet_no'];
    ${"type" . $s1} = $row1['type'];
    ${"grade" . $s1} = $row1['grade'];

    // $customer_name = $row1['customer_name'];
    // $roll_no = $row1['roll_no'];
    // $pp_number = $row1['pp_number'];
    // $gd_number = $row1['gd_number'];
    // $shade = $row1['shade'];
    // $construction = $row1['construction'];
    // $composition = $row1['composition'];
    // $weave = $row1['weave'];
    // $finished_width = $row1['finished_width'];
    // $finished_type = $row1['finished_type'];
    // $type = $row1['type'];
    // $grade = $row1['grade'];

    ++$s1;
}


for ($i=1; $i <= $s1; $i++) 
{ 
    if ( isset(${"barcode_code" . $i})) 
    {
        if ($total_length <  $length) 
        {
            $total_length = $total_length + ${"length" . $i};
            ${"barcode_code" . $i};
            ${"cubic_number" . $i};

            $lengths = $lengths + $total_length;

            if (in_array(${"barcode_code" . $i}, $cubics))
            {
                
            }
            else
            {
                array_push($barcode_codes, ${"barcode_code" . $i});
            }            

            //$barcode_codes = ($barcode_codes.' ') . ${"barcode_code" . $i};

            if (in_array(${"cubic_number" . $i}, $cubics))
            {
                
            }
            else
            {
                array_push($cubics, ${"cubic_number" . $i});
            }
           
        }
        
    }
}

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

                         <th style="border: 1px solid black; "> Delivery Quantity</th>

                         <th style="border: 1px solid black; "> Cubic Number</th>
                         <th style="border: 1px solid black; "> Barcode</th>
                        
                         
                    
                     </tr>
                </thead>
                <tbody>

                     <tr>
                        <td style="border: 1px solid black;">
                            <?php echo $s1; ?>
                        </td>
                        <td style="border: 1px solid black;">
                            <?php echo $buyer; ?>
                            <input type="hidden" id="buyer" name="buyer" value="<?php echo $buyer; ?>">
                            <input type="hidden" id="new_delivery_date" name="new_delivery_date" value="<?php echo $new_delivery_date; ?>">
                        </td>
                        
                        <td style="border: 1px solid black;">
                            <?php echo $garments; ?>
                            <input type="hidden" id="garments" value="<?php echo $garments; ?>">
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $ac_holder; ?>
                            <input type="hidden" id="ac_holder" value="<?php echo $ac_holder; ?>">
                        </td>
                        <td style="border: 1px solid black;">
                            <?php echo $fabrication; ?>
                            <input type="hidden" id="fabrication" value="<?php echo $fabrication; ?>">
                        </td>  
                        <td style="border: 1px solid black;">
                            <?php echo $composition; ?>
                            <input type="hidden" id="composition" value="<?php echo $composition; ?>">
                        </td> 

                        <td style="border: 1px solid black;">
                            <?php echo $weave; ?>
                            <input type="hidden" id="weave" value="<?php echo $weave; ?>">
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $width; ?>
                            <input type="hidden" id="width" value="<?php echo $width; ?>">
                        </td>  

                        <td style="border: 1px solid black;">
                            <?php echo $process_name; ?> 
                             <input type="hidden" id="process" value="<?php echo $process_name; ?>">
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $gd_number; ?> 
                            <input type="hidden" id="gd_number" value="<?php echo $gd_number; ?>"> 
                        </td>
                        <td style="border: 1px solid black;">
                            <?php echo $pi_number; ?> 
                            <input type="hidden" id="pi_number" value="<?php echo $pi_number; ?>"> 
                        </td>
                        <td style="border: 1px solid black;">
                            <?php echo $pp_number; ?>
                            <input type="hidden" id="pp_number" value="<?php echo $pp_number; ?>">
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $work_order_number; ?>
                            <input type="hidden" id="work_order_number" value="<?php echo $work_order_number; ?>">
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo ''; ?>
                            <input type="hidden" id="color_or_design" value="">
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $order_qty; ?>
                            <input type="hidden" id="order_qty" value="<?php echo $order_qty; ?>">
                        </td> 

                        <td style="border: 1px solid black;">
                            <?php 
                                $sql_grade_a = "SELECT 
                                        sum(length) a_shade_length
                                        FROM item_receiving
                                        WHERE work_order_number = '$work_order_number'
                                        and active = '1'
                                        and grade = 'A'
                                        ";
                                $result_grade_a = mysqli_query($con, $sql_grade_a) or die(mysqli_error($con));
                                $row_grade_a = mysqli_fetch_assoc($result_grade_a);
                                echo $grade_a = $row_grade_a['a_shade_length'];
                            ?>
                            <input type="hidden" id="grade_a" value="<?php echo$grade_a; ?>">
                        </td>

                        <td style="border: 1px solid black;">
                            <?php 
                                $sql_grade_b = "SELECT 
                                        sum(length) b_shade_length
                                        FROM item_receiving
                                        WHERE work_order_number = '$work_order_number'
                                        and active = '1'
                                        and grade = 'B'
                                        ";
                                $result_grade_b = mysqli_query($con, $sql_grade_b) or die(mysqli_error($con));
                                $row_grade_b = mysqli_fetch_assoc($result_grade_b);
                                echo $grade_b =  $row_grade_b['b_shade_length'];
                            ?>
                            <input type="hidden" id="grade_b" value="<?php echo$grade_b; ?>">
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $total_stock = $grade_a + $grade_b; ?>
                            <input type="hidden" id="total_stock" value="<?php echo $total_stock; ?>">
                        </td>

                        <td style="border: 1px solid black;">
                            <?php 
                                $sql_grade_b = "SELECT 
                                        count(length) roll_number
                                        FROM item_receiving
                                        WHERE work_order_number = '$work_order_number'
                                        and active = '1'
                                        ";
                                $result_grade_b = mysqli_query($con, $sql_grade_b) or die(mysqli_error($con));
                                $row_grade_b = mysqli_fetch_assoc($result_grade_b);
                                echo $number_of_roll =  $row_grade_b['roll_number'];
                            ?>
                            <input type="hidden" id="number_of_roll" value="<?php echo $number_of_roll; ?>">
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $date_of_delivery; ?>
                            <input type="hidden" id="date_of_delivery" value="<?php echo $date_of_delivery; ?>">
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $delivery_quantity; ?>
                            <input type="hidden" id="delivery_quantity" value="<?php echo $delivery_quantity; ?>">
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $all_cubics = implode(",",$cubics); ?>
                            <input type="hidden" id="all_cubics" value="<?php echo $all_cubics; ?>">
                        </td>

                        <td style="border: 1px solid black;">
                            <?php echo $all_barcodes = implode(", ",$barcode_codes); ?>
                            <input type="hidden" id="all_barcodes" value="<?php echo $all_barcodes; ?>">
                        </td>                    
                        
                     </tr>
              </tbody>
             </table>


             <div class="form-group form-group-sm">
                <div class="col-sm-offset-1 col-sm-5">
                    <button type="button" class="btn btn-primary" onClick="date_wise_unloading_maping_report_updating()">Report Update</button>
                </div>
            </div>

        </div> <!-- End of <div class="form-group form-group-sm" -->

        </div>  <!-- end of <div class="panel panel-default"> -->
    
        