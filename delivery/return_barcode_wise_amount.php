<?php
session_start();

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$recording_person_id = 'hriday';
$recording_person_name = 'Hriday';

$barcode_code = $_POST['barcode_code'];
$work_order_number = $_POST['work_order_number'];
$count = $_POST['count'];
$count_plus = $count + 1;

$length = $_POST['total_length'];


//all barcode in a session
array_push($_SESSION['session_barcodes'],$barcode_code);

$session_barcodes = $_SESSION['session_barcodes'];

//$session_barcodes = implode(",",$session_barcodes);


$sql = "SELECT `gd_number`,`length`,`cubic_number`,`work_order_number`, `kgs` FROM `item_receiving` WHERE `barcode_code` = '$barcode_code'";
$result= mysqli_query($con,$sql) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);

$total_length = $row['length'] + $length;



?>
        
        <div class="form-group row" id="details_amount<?php echo $count;?>" style="margin-left: 0px;">
            <div class="col-md-3 col-sm-3 field_container" style="margin-left: 0px; width: 290px;">
								<select  class="form-control for_auto_complete" id="barcode_code<?php echo $count;?>" name="barcode_code<?php echo $count;?>" onchange="barcode_change(this.value, <?php echo $count;?>)" disabled>
											<option selected="selected" value="select">Select Barcode</option>
											<?php 

                                                $sql2 = "SELECT `all_barcodes` FROM `unloading_plan` WHERE `work_order_number` = '$work_order_number' AND active='1'";
                        						$result2 = mysqli_query($con,$sql2) or die(mysqli_error($con));
                                                $row2 = mysqli_fetch_array($result2);
                                                $barcodes = explode(", ",$row2['all_barcodes']);


                                                foreach($barcodes as $barcode)
                                                {
                                                    if($barcode_code == $barcode)
                                                    {
                                                        $barcode = strval($barcode);
                                                        echo '<option selected value="'.$barcode.'">'.$barcode.'</option>';
                                                    }
                                                    else{
                                                        $barcode = strval($barcode);
                                                        echo '<option value="'.$barcode.'">'.$barcode.'</option>';
                                                    }
                                                    
                                                   
                                                } 

											?>
								</select>
						</div>

                        <!-- class="name_class form-control   " -->
            <!-- <div style="margin-left: 0px;"> -->
            <input type="hidden" id="barcode_code_main_<?php echo $count ?>" name="barcode_code_main_<?php echo $count ?>" value="<?php echo $barcode_code?>">

            <input type="hidden" id="total_length_<?php echo $count ?>" name="total_length_<?php echo $count ?>" value="<?php echo $total_length?>">

            <div class="col-md-3 col-sm-3" style="margin-left: 0px; width: 290px;">
                <input type="text" class="text-center" id="work_order_number<?php echo $count;?>"  name="work_order_number<?php echo $count;?>"  value="<?php echo $row['work_order_number'] ?>" class="name_class form-control" >
            </div>
            <div class="col-md-2 col-sm-2" class="text-center" style="margin-left: 0px; width: 200px;">
                <input type="text" class="text-center" id="gd_number<?php echo $count;?>" name="gd_number<?php echo $count;?>"  value="<?php echo $row['gd_number'] ?>" class="name_class form-control   ">
            </div>

            <div class="col-md-2 col-sm-2"  style="margin-left: 0px; width: 200px;">
                <input type="text" class="text-center" id="cubic_number<?php echo $count;?>" name="cubic_number<?php echo $count;?>"  value="<?php echo $row['cubic_number'] ?>" class="name_class form-control   ">
            </div>

            <div class="col-md-2 col-sm-2"  style="margin-left: 0px; width: 200px;">
                 <input type="text" class="text-center" id="length<?php echo $count;?>" name="length<?php echo $count;?>"  value="<?php echo $row['length'] ?>" class="name_class form-control   ">

                 <input type="hidden" class="text-center" id="kgs<?php echo $count;?>" name="kgs<?php echo $count;?>"  value="<?php echo $row['kgs'] ?>" class="name_class form-control">
            </div>

            <!-- </div> -->

        </div>




        <div class="form-group row" id="details_amount<?php echo $count_plus;?>" style="margin-left: 0px;">
            <div class="col-md-3 col-sm-3 field_container" style="margin-left: 0px; width: 290px;">
								<select  class="form-control for_auto_complete" id="barcode_code<?php echo $count_plus;?>" name="barcode_code<?php echo $count_plus;?>" onchange="barcode_change(this.value, <?php echo $count_plus;?>)">
											<option selected="selected" value="select">Select Barcode</option>
											<?php 

                                                $sql = "SELECT `all_barcodes` FROM `unloading_plan` WHERE `work_order_number` = '$work_order_number' AND active='1'";
                                                $result= mysqli_query($con,$sql) or die(mysqli_error($con));
                                                $row = mysqli_fetch_array($result);
                                                $barcodes = explode(", ",$row['all_barcodes']);

                                                //echo $session_barcode = explode(",",$session_barcodes);

                                                // foreach($barcodes as $barcode)
                                                // {
                                                //     foreach($session_barcode as $session_one_barcode)
                                                //     {

                                                //         if ($session_one_barcode != $barcode) 
                                                //         {
                                                            
                                                //             $barcode = strval($barcode);
                                                //             echo '<option value="'.$barcode.'">'.$barcode.'</option>';
                                                //         }

                                                //     }
                                                // }

                                                foreach($barcodes as $barcode)
                                                {
                                                    if (in_array($barcode , $session_barcodes))
                                                    {
                                                            //echo "Match found";
                                                    }
                                                    else
                                                    {
                                                            $barcode = strval($barcode);
                                                            echo '<option value="'.$barcode.'">'.$barcode.'</option>';
                                                    }
                                                }

											?>
								</select>
						</div>


            <!-- <div id="details_amount" style="margin-left: 0px;"> -->

             <div class="col-md-3 col-sm-3" style="margin-left: 0px; width: 290px;">
                  <input type="text" class="text-center" id="work_order_number<?php echo $count_plus;?>" name="work_order_number<?php echo $count_plus;?>" class="work_order_number<?php echo $count_plus;?> form-control">
              </div>

              <div class="col-md-2 col-sm-2" style="margin-left: 0px; width: 200px;">
                  <input type="text" class="text-center" id="gd_number<?php echo $count_plus;?>"  name="gd_number<?php echo $count_plus;?>" class="gd_number<?php echo $count_plus;?> form-control">
              </div>

              <div class="col-md-2 col-sm-2" style="margin-left: 0px; width: 200px;">
                  <input type="text" class="text-center" id="cubic_number<?php echo $count_plus;?>"  name="cubic_number<?php echo $count_plus;?>" class="cubic_number<?php echo $count_plus;?> form-control">
              </div>

              <div class="col-md-2 col-sm-2"  class="text-center" style="margin-left: 0px; width: 200px;">
                  <input type="text" class="text-center" id="length<?php echo $count_plus;?>" name="length<?php echo $count_plus;?>" class="length<?php echo $count_plus;?> form-control   ">
              </div>

              <input type="hidden" class="text-center" id="count" name="count"  value="<?php echo $count ?>" class=" form-control">

            <!-- </div> -->

        </div>