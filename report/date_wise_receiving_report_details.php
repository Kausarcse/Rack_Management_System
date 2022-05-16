

<?php
//session_start();

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$date_of_receipt = $_POST['date_of_receipt'];
$date = explode('/',$date_of_receipt);

$date_of_receipt = $date[2]."-".$date[1]."-".$date[0];





	?>
		<div class="panel panel-default">


        		<div class="form-group form-group-sm" id="datewise_transaction_details" style="overflow: auto;">

			         <table id="datatable-buttons" class="table table-striped table-bordered" >
			         	<thead>
			                 <tr>
				                 <th style="border: 1px solid black;">SI</th>
				                 
				                 
				                
                                 <th style=" border: 1px solid black;">Receiving Location</th>
                                 <th style="border: 1px solid black;">Received By</th>
                                 <th style="border: 1px solid black;">Date Of Receipt</th>

				                 <th style="border: 1px solid black;">Roll No</th>
				                 <th style="border: 1px solid black;">PP Number</th>
				                 <th style="border: 1px solid black;">Work Order Number</th>

				                 <th style="border: 1px solid black;">GD Number</th>
                                 <th style="border: 1px solid black;">Customer Name</th>

                                 <th style="border: 1px solid black;">Construction</th>
                                 <th style="border: 1px solid black;">Composition</th>

                                 <th style="border: 1px solid black;">Finished Width</th>
                                 <th style="border: 1px solid black;">Finished Type</th>
                                 <th style="border: 1px solid black;">Shade</th>   
				                 <th style="border: 1px solid black;">Weave</th>
                                 <th style="border: 1px solid black;">Length</th>
                                 <th style="border: 1px solid black;">Cubic Number</th>

                                 <th style="border: 1px solid black;">Quantity</th>
				                 <th style="border: 1px solid black;">Unit Of Measurement</th>
				                
                                 
				            
			                 </tr>
			            </thead>
			            <tbody>
			            <?php 


                              
                                $sql = "SELECT *
                                FROM item_receiving
                                where date_of_receipt = '$date_of_receipt'
                                ";

                                $result = mysqli_query($con, $sql) or die(mysqli_error($con));
							   $s1 = 1;
							while ($row = mysqli_fetch_array($result)) 
							{
								
								$receiving_location = $row['receiving_location'];
                                $received_by = $row['received_by'];
                                $date_of_receipt = $row['date_of_receipt'];
                                $roll_no = $row['roll_no'];
                                $pp_number = $row['pp_number'];
                                $work_order_number = $row['work_order_number'];

                                $gd_number = $row['gd_number'];
                                $customer_name = $row['customer_name'];
                                
                                $construction = $row['construction'];
                                $composition = $row['composition'];

								$finished_width = $row['finished_width'];
								$finished_type = $row['finished_type'];

								$shade = $row['shade'];
								$weave = $row['weave'];
                                $length = $row['length'];
                                $cubic_number = $row['cubic_number'];
                                $quantity = $row['quantiy'];
                                $uom = $row['uom'];

								
				            ?>	
				             <tr>
				                <td style="border: 1px solid black;"><?php echo $s1; ?></td>
                                <td style="border: 1px solid black;"><?php echo $receiving_location; ?></td>
				                
				                <td style="border: 1px solid black;"><?php echo $received_by; ?></td> 
                                <td style="border: 1px solid black;"><?php echo $date_of_receipt;?></td> 

                                <td style="border: 1px solid black;"><?php echo $roll_no; ?></td>

                                <td style="border: 1px solid black;"><?php echo $pp_number; ?></td>
                                <td style="border: 1px solid black;"><?php echo $work_order_number; ?></td>
                                <td style="border: 1px solid black;"><?php echo $gd_number; ?></td>
                                <td style="border: 1px solid black;"><?php echo $customer_name; ?></td>
                                
                                
                                <td style="border: 1px solid black;"><?php echo $construction; ?></td>
                                <td style="border: 1px solid black;"><?php echo $composition; ?></td>
                                <td style="border: 1px solid black;"><?php echo $finished_width; ?></td>
				                <td style="border: 1px solid black;"><?php echo $finished_type; ?></td>
                                <td style="border: 1px solid black;"><?php echo $shade; ?></td>
                                <td style="border: 1px solid black;"><?php echo $weave; ?></td>
                                <td style="border: 1px solid black;"><?php echo $length; ?></td>
                                <td style="border: 1px solid black;"><?php echo $cubic_number; ?></td>
                                <td style="border: 1px solid black;"><?php echo $quantity; ?></td>
                                <td style="border: 1px solid black;"><?php echo $uom; ?></td>			                
				                
				                
				                
				                

				                <?php
				                              
				                $s1++;
	                        }
			             ?>
			             </tr>
			          </tbody>
			         </table>

			    </div> <!-- End of <div class="form-group form-group-sm" -->

        </div>  <!-- end of <div class="panel panel-default"> -->