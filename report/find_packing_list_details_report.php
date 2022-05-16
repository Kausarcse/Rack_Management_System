<?php
session_start();
include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$date_of_packing = $_POST['date_of_packing'];
$work_order_numbers = $_POST['work_order_number'];

$splitted_date_of_indent= explode("/",$date_of_packing);
$date_of_packing= $splitted_date_of_indent[2]."-".$splitted_date_of_indent[1]."-".$splitted_date_of_indent[0];

$barcode_codes = array();
$cubics = array();
$lengths = 0;


$sql1 = "SELECT 
        *
        FROM packing_list
        WHERE work_order_number = '$work_order_numbers'
        and date(recording_time) = '$date_of_packing'
        ";

$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));

$counter = 1;
$s1 = 0;
$total_length = 0;

$row = mysqli_fetch_assoc($result1);

$buyer = '';
$garments = '';
$work_order_number = '';
$gd_number = '';
$pp_number = '';
$customer_name = '';
$color = '';
$order_quantity = '';
$style = '';
$date = '';
$construction = '';
$composition = '';
$fabrics_type = '';
$finished_type = '';
$finished_width = '';
$cuttable_width = '';
$roll_no = '';
$length = '';
$grade = '';


// $buyer = '';
// $garments = '';
$work_order_number = $row['work_order_number'];
$gd_number = $row['gd_number'];
$pp_number = '';
$customer_name = $row['customer_name'];
$color = '';
$order_quantity = $row['order_quantity'];
$style = '';
$date = '';
$construction = $row['construction'];
$composition = $row['composition'];
$fabrics_type = '';
$finished_type = '';
$finished_width = $row['finish_width_in_inch'];
$cuttable_width = '';


?>


<div class="panel panel-default" >

        <div class="form-group form-group-sm table-responsive">

        <div id="datewise_transaction_details">
            <form class="form-horizontal" action="" name="packing_list_details_report_form" id="packing_list_details_report_form">
                <table class="table" style="border: none;" id='table_packing_list_details'>
                    <thead>
                        <tr>
                            <td colspan="9"
                                style="text-align: center; font-size: 25px; color: black; font-weight: bold;">
                                Packing List Report</td>
                        </tr>
                    </thead>
                </table>
                <table  class="table" style="border: none;">
                    <tbody>
                            <tr>
                                    <td style="font-size: 16px; text-align:right; width: 25%; padding: 0%;">Work Order No :</td>
                                    <td style="font-size: 16px; text-align:left; width: 25%; padding: 0%;"><?php echo $work_order_number;?></td>
                                    <td style=" font-size: 16px; text-align:right; width: 25%; padding: 0%;">Packing Date :</td>
                                    <td style=" font-size: 16px; text-align:left; width: 25%; padding: 0%;"><?php echo $date_of_packing;?></td>
                            </tr>
                            <tr>
                                    <td style="font-size: 16px; text-align:right; width: 25% ; padding: 0%;">PP No :</td>
                                    <td style="font-size: 16px; text-align:left; width: 25% ; padding: 0%;"><?php echo $pp_number;?></td>
                                    <td style=" font-size: 16px;text-align:right; width: 25% ; padding: 0%;">Contruction :</td>
                                    <td style=" font-size: 16px; text-align:left; width: 25% ; padding: 0%;"><?php echo $construction;?></td>
                            </tr>
                            <tr>
                                    <td style="font-size: 16px; text-align:right; width: 25% ; padding: 0%;">Customer :</td>
                                    <td style="font-size: 16px; text-align:left; width: 25% ; padding: 0%;"><?php echo $customer_name;?></td>
                                    <td style=" font-size: 16px;text-align:right; width: 25% ; padding: 0%;">Composition :</td>
                                    <td style=" font-size: 16px; text-align:left; width: 25% ; padding: 0%;"><?php echo $composition;?></td>
                            </tr>
                            <tr>
                                    <td style="font-size: 16px; text-align:right; width: 25% ; padding: 0%;">Garments :</td>
                                    <td style="font-size: 16px; text-align:left; width: 25% ; padding: 0%;"><?php echo $garments;?></td>
                                    <td style=" font-size: 16px;text-align:right; width: 25% ; padding: 0%;">Fabrics Type :</td>
                                    <td style=" font-size: 16px; text-align:left; width: 25% ; padding: 0%;"><?php echo $fabrics_type;?></td>
                            </tr>
                            <tr>
                                    <td style="font-size: 16px; text-align:right; width: 25% ; padding: 0%;">Color :</td>
                                    <td style="font-size: 16px; text-align:left; width: 25% ; padding: 0%;"><?php echo $color;?></td>
                                    <td style=" font-size: 16px;text-align:right; width: 25% ; padding: 0%;">Finished Type :</td>
                                    <td style=" font-size: 16px; text-align:left; width: 25% ; padding: 0%;"><?php echo $finished_type;?></td>
                            </tr>
                            <tr>
                                    <td style="font-size: 16px; text-align:right; width: 25% ; padding: 0%;">Order quantity :</td>
                                    <td style="font-size: 16px; text-align:left; width: 25% ; padding: 0%;"><?php echo $order_quantity;?></td>
                                    <td style=" font-size: 16px;text-align:right; width: 25% ; padding: 0%;">Finished Width :</td>
                                    <td style=" font-size: 16px; text-align:left; width: 25% ; padding: 0%;"><?php echo $finished_width;?></td>
                            </tr>
                            <tr>
                                    <td style="font-size: 16px; text-align:right; width: 25% ; padding: 0%;">Style No :</td>
                                    <td style="font-size: 16px; text-align:left; width: 25% ; padding: 0%;"><?php echo $style;?></td>
                                    <td style=" font-size: 16px;text-align:right; width: 25% ; padding: 0%;">Cuttable Width :</td>
                                    <td style=" font-size: 16px; text-align:left; width: 25% ; padding: 0%;"><?php echo $cuttable_width;?></td>
                            </tr>
                    </tbody>
                </table>

             <div class="row">
                 <table >
                        <tr>
                            <td>
                                <table>
                                        <tr>
                                            <td>
                                                <!-- first table start -->

                                                <table class="table table-striped table-bordered" style="overflow: auto;">

                                                     <thead>
                                                         <tr>
                                                             <th style="border: 1px solid black;">SL No</th>
                                                             <th style=" border: 1px solid black;">Roll No</th>
                                                             <th style="border: 1px solid black;">Quantity</th>

                                                             <th style="border: 1px solid black;">Grade No</th>
                                                             <th style="border: 1px solid black;">Finish Width</th>
                                                             <th style="border: 1px solid black;">Cuttable Width</th>

                                                             <th style="border: 1px solid black;">100sq points </th>
                                                             <th style="border: 1px solid black;">Pass/Fail</th>
                                                             
                                                         </tr>
                                                    </thead>
                                                    <tbody>

                                                            <?php

                                                            $res = mysqli_query($con, $sql1) or die(mysqli_error($con));

                                                            $total_counter = mysqli_num_rows($res);
                                                            $counter = 1;

                                                            while( ($row1 = mysqli_fetch_assoc($res)) and ($counter < 41) )
                                                            { 
                                                                $s1++;
                                                                $roll_no = '';
                                                                $length = '';
                                                                $grade = '';
                                                                $actual_finished_width = '';
                                                                $actual_cuttable_width = '';
                                                                $points_per_100_sqm = '';
                                                                $pass_fail = ''; 


                                                                $roll_no = $row1['roll_no'];
                                                                $length = $row1['length'];
                                                                $total_length = $total_length + $length;
                                                                $grade = $row1['grade'];
                                                                $actual_finished_width = $row1['actual_finished_width'];
                                                                $actual_cuttable_width = $row1['actual_cuttable_width'];
                                                                $points_per_100_sqm = $row1['points_per_yds'];
                                                                $pass_fail = $row1['pass_fail'];
                                                                   
                                                                ?>

                                                                    <tr>
                                                                        <td style="border: 1px solid black;">
                                                                            <?php echo $s1; ?>
                                                                        </td>
                                                                        <td style="border: 1px solid black;">
                                                                            <?php echo $roll_no; ?>
                                                                        </td>
                                                                        
                                                                        <td style="border: 1px solid black;">
                                                                            <?php echo $length; ?>
                                                                        </td>

                                                                        <td style="border: 1px solid black;">
                                                                            <?php echo $grade; ?>
                                                                        </td>
                                                                        <td style="border: 1px solid black;">
                                                                            <?php echo $actual_finished_width; ?>
                                                                        </td>  
                                                                        <td style="border: 1px solid black;">
                                                                            <?php echo $actual_cuttable_width; ?>
                                                                        </td> 

                                                                        <td style="border: 1px solid black;">
                                                                            <?php echo number_format((float)$points_per_100_sqm, 2, '.', ''); ?>
                                                                        </td>

                                                                        <td style="border: 1px solid black;">
                                                                            <?php echo $pass_fail; ?>
                                                                        </td>  
                                                                        
                                                                     </tr>

                                                              <?php

                                                              ++$counter;

                                                            }

                                                            if ($counter < 40 ) 
                                                            {
                                                                for ($i= $counter; $i <= 40; $i++) 
                                                                { 
                                                                    ?>
                                                                      <tr>
                                                                        <td style="border: 1px solid black;">
                                                                            <?php echo $i; ?>
                                                                        </td>
                                                                        <td style="border: 1px solid black;">
                                                                            
                                                                        </td>
                                                                        
                                                                        <td style="border: 1px solid black;">
                                                                            
                                                                        </td>

                                                                        <td style="border: 1px solid black;">
                                                                            
                                                                        </td>
                                                                        <td style="border: 1px solid black;">
                                                                            
                                                                        </td>  
                                                                        <td style="border: 1px solid black;">
                                                                            
                                                                        </td> 

                                                                        <td style="border: 1px solid black;">
                                                                           
                                                                        </td>

                                                                        <td style="border: 1px solid black;">
                                                                           
                                                                        </td>  
                                                                        
                                                                     </tr>
                                                                    <?php
                                                                }
                                                            }


                                                          ?>
                                          
                                                      </tbody>

                                                  </table>

                                                  <!-- first table end -->
                                            </td>
                                        </tr>
                                 </table>
                            </td>
                            <td>
                                <table >
                                        <tr>
                                            <td>
                                                <!-- second table start -->
                                                <?php

                                                    if ($total_counter > 40) 
                                                    {
                                                        ?>

                                                          <table class="table table-striped table-bordered" style="overflow: auto;">

                                                             <thead>
                                                                 <tr>
                                                                     <th style="border: 1px solid black;">SL No</th>
                                                                     <th style=" border: 1px solid black;">Roll No</th>
                                                                     <th style="border: 1px solid black;">Quantity</th>

                                                                     <th style="border: 1px solid black;">Grade No</th>
                                                                     <th style="border: 1px solid black;">Finish Width</th>
                                                                     <th style="border: 1px solid black;">Cuttable Width</th>

                                                                     <th style="border: 1px solid black;">100sq points </th>
                                                                     <th style="border: 1px solid black;">Pass/Fail</th>

                                                                     <th style="border: 1px solid black;">SL No</th>
                                                                     <th style=" border: 1px solid black;">Roll No</th>
                                                                     <th style="border: 1px solid black;">Quantity</th>

                                                                     <th style="border: 1px solid black;">Grade No</th>
                                                                     <th style="border: 1px solid black;">Finish Width</th>
                                                                     <th style="border: 1px solid black;">Cuttable Width</th>

                                                                     <th style="border: 1px solid black;">100sq points </th>
                                                                     <th style="border: 1px solid black;">Pass/Fail</th>
                                                                     
                                                                 </tr>
                                                            </thead>
                                                            <tbody>

                                                        <?php

                                                            $res = mysqli_query($con, $sql1) or die(mysqli_error($con));

                                                            //$total_counter = mysqli_num_rows($res);
                                                            //$counter = 41;

                                                            while(($row1 = mysqli_fetch_assoc($res)) and ($counter < 81) )
                                                            { 
                                                                $s1++;
                                                                $roll_no = '';
                                                                $length = '';
                                                                $grade = '';
                                                                $actual_finished_width = '';
                                                                $actual_cuttable_width = '';
                                                                $points_per_100_sqm = '';
                                                                $pass_fail = ''; 


                                                                $roll_no = $row1['roll_no'];
                                                                $length = $row1['length'];
                                                                $total_length = $total_length + $length;
                                                                $grade = $row1['grade'];
                                                                $actual_finished_width = $row1['actual_finished_width'];
                                                                $actual_cuttable_width = $row1['actual_cuttable_width'];
                                                                $points_per_100_sqm = $row1['points_per_yds'];
                                                                $pass_fail = $row1['pass_fail'];
                                                                   
                                                                ?>

                                                                    <tr>
                                                                        <td style="border: 1px solid black;">
                                                                            <?php echo $s1; ?>
                                                                        </td>
                                                                        <td style="border: 1px solid black;">
                                                                            <?php echo $roll_no; ?>
                                                                        </td>
                                                                        
                                                                        <td style="border: 1px solid black;">
                                                                            <?php echo $length; ?>
                                                                        </td>

                                                                        <td style="border: 1px solid black;">
                                                                            <?php echo $grade; ?>
                                                                        </td>
                                                                        <td style="border: 1px solid black;">
                                                                            <?php echo $actual_finished_width; ?>
                                                                        </td>  
                                                                        <td style="border: 1px solid black;">
                                                                            <?php echo $actual_cuttable_width; ?>
                                                                        </td> 

                                                                        <td style="border: 1px solid black;">
                                                                            <?php echo number_format((float)$points_per_100_sqm, 2, '.', ''); ?>
                                                                        </td>

                                                                        <td style="border: 1px solid black;">
                                                                            <?php echo $pass_fail; ?>
                                                                        </td>  
                                                                        
                                                                     </tr>

                                                                  <?php

                                                                  ++$counter;

                                                            }

                                                            if ($counter < 81 ) 
                                                            {
                                                                for ($i= $counter; $i <= 80; $i++) 
                                                                { 
                                                                    ?>
                                                                      <tr>
                                                                        <td style="border: 1px solid black;">
                                                                            <?php echo $i; ?>
                                                                        </td>
                                                                        <td style="border: 1px solid black;">
                                                                            
                                                                        </td>
                                                                        
                                                                        <td style="border: 1px solid black;">
                                                                            
                                                                        </td>

                                                                        <td style="border: 1px solid black;">
                                                                            
                                                                        </td>
                                                                        <td style="border: 1px solid black;">
                                                                            
                                                                        </td>  
                                                                        <td style="border: 1px solid black;">
                                                                            
                                                                        </td> 

                                                                        <td style="border: 1px solid black;">
                                                                           
                                                                        </td>

                                                                        <td style="border: 1px solid black;">
                                                                           
                                                                        </td>  
                                                                        
                                                                     </tr>
                                                                    <?php
                                                                }
                                                            }

                                                          ?>
                                                            </tbody>

                                                        </table>
                                                          <?php

                                                    }
                                                    else
                                                    {
                                                        ?>

                                                          <table class="table table-striped table-bordered" style="overflow: auto;">

                                                             <thead>
                                                                 <tr>
                                                                     <th style="border: 1px solid black;">SL No</th>
                                                                     <th style=" border: 1px solid black;">Roll No</th>
                                                                     <th style="border: 1px solid black;">Quantity</th>

                                                                     <th style="border: 1px solid black;">Grade No</th>
                                                                     <th style="border: 1px solid black;">Finish Width</th>
                                                                     <th style="border: 1px solid black;">Cuttable Width</th>

                                                                     <th style="border: 1px solid black;">100sq points </th>
                                                                     <th style="border: 1px solid black;">Pass/Fail</th>
                                                                     
                                                                 </tr>
                                                            </thead>
                                                          <tbody>

                                                        <?php
                                                        for ($i; $i <= 80; $i++) 
                                                        { 
                                                            ?>
                                                              <tr>
                                                                <td style="border: 1px solid black;">
                                                                    <?php echo $i; ?>
                                                                </td>
                                                                <td style="border: 1px solid black;">
                                                                    
                                                                </td>
                                                                
                                                                <td style="border: 1px solid black;">
                                                                    
                                                                </td>

                                                                <td style="border: 1px solid black;">
                                                                    
                                                                </td>
                                                                <td style="border: 1px solid black;">
                                                                    
                                                                </td>  
                                                                <td style="border: 1px solid black;">
                                                                    
                                                                </td> 

                                                                <td style="border: 1px solid black;">
                                                                   
                                                                </td>

                                                                <td style="border: 1px solid black;">
                                                                   
                                                                </td>  
                                                                
                                                             </tr>
                                                            <?php
                                                        }

                                                        ?>
                                          
                                                          </tbody>

                                                        </table>
                                                        <?php
                                                    }

                                                ?>
                                                <!-- second table end -->
                                            </td>
                                        </tr>
                                 </table>
                            </td>
                        </tr>
                 </table>
             </div>   

             <!-- <div class="row">
                <div class="col-md-6" style="padding:0px !important;">
                    
                </div>

                <div class="col-md-6" style="padding:0px !important;">
                    
                </div>
             </div> -->

            <div class="text-left">
                  <p>Goods once cut will not be taken back. Pls. Cut the fabrics according to the Batch No.</p>
                  <p>NB.ALL ROLL are inspected on four point system</p>

                  <!-- <div class="text-center">
                      <strong>
                                 G.TOTAL= 
                                 <b><?php //echo $total_length; ?> YDS</b>

                                 <b>Rolls = <?php //echo ($s1-1); ?></b>
                      </strong>
                  </div> -->

            </div>
           <div>
                <table class="table" style="border: none;">
                            <tbody>
                                <tr style="width: 100%;">
                                    <td style="width: 50%; text-align:right"><strong>G. TOTAL =  <?php echo $total_length; ?> YDS</strong></td>
                                    <td style="width: 50%; text-align:left"><strong>Rolls =  <?php echo ($s1); ?></strong></td>
                                </tr>
                                <br>
                                <br>
                                <br>
                                <br>
                                <tr style="width: 100%;">
                                    <td style="width: 50%; text-align:left"><u>Prepared By</u></td>
                                    <td style="width: 50%; text-align:right">  <u>QC Singnature</u></td>
                                </tr>
                            </tbody>
                    </table>
           </div>
            

        </div> <!-- End of <div class="form-group form-group-sm" -->

        <?php
		 $all_data = $work_order_numbers.'?fs?'.$date_of_packing.'?fs?'.$gd_number.'?fs?'.$pp_number.'?fs?'.$customer_name.'?fs?'.$color.'?fs?'.$order_quantity.'?fs?'.$style.'?fs?'.$construction.'?fs?'.$composition.'?fs?'.$fabrics_type.'?fs?'.$finished_type.'?fs?'.$finished_width.'?fs?'.$cuttable_width.'?fs?'.$garments;
	?>
				<a href="report/pdf_file_for_packing_list_report.php?all_data=<?php echo $all_data ?>" target="_blank">
                    <button type="button" id="pdf_id_for_packing_list_report" name="pdf_id_for_packing_list_report" style="display: none;"  class="btn btn-primary btn-xs">Generate pdf file</button>
              	</a>

        </div>  <!-- end of <div class="panel panel-default"> -->


        