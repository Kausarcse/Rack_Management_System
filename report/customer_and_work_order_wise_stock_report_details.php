

<?php
//session_start();

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$customer_name = $_POST['customer_name'];
$work_order_number = $_POST['work_order_number'];

	?>
		<div class="panel panel-default">


        		<div class="form-group form-group-sm" id="datewise_transaction_details">

			         <table id="datatable-buttons" class="table table-striped table-bordered" style="overflow: auto;">
			         	<thead>
			                 <tr>
				                 <th style="border: 1px solid black;">SI</th>
				                 
				                 
				                
                                 <th style=" border: 1px solid black;">Customer Name</th>
                                 <th style="border: 1px solid black;">Work Order Number</th>
                                 <th style="border: 1px solid black;">On Hand Stock</th>

				                 <th style="border: 1px solid black;">Unit Of Measurement</th>
				                 <th style="border: 1px solid black;">Total Roll</th>
				                 <th style="border: 1px solid black;">Cubic Number</th>
				                
                                 
				            
			                 </tr>
			            </thead>
			            <tbody>
			            <?php 


                              
                            $sql = "SELECT ii.customer_name,
                                           ii.work_order_number,
                                           ii.on_hand_stock,
                                           ii.uom,
                                           ii.total_roll,
                                           GROUP_CONCAT(ir.cubic_number SEPARATOR ',') as cubic_number 
                                    FROM item_info ii
                                    INNER JOIN item_receiving ir
                                    ON ii.work_order_number = ir.work_order_number
                                    where ii.customer_name = '$customer_name'
                                    AND ii.work_order_number = '$work_order_number'
                                    ";

                            $result = mysqli_query($con, $sql) or die(mysqli_error($con));
							$s1 = 1;
							while ($row = mysqli_fetch_array($result)) 
							{
                                
							

                                $customer_name = $row['customer_name'];
                                $work_order_number = $row['work_order_number'];
                                $on_hand_stock = $row['on_hand_stock'];
                                $uom = $row['uom'];
                                $total_roll = $row['total_roll'];                              
                                $cubic_number = $row['cubic_number'];
								
				            ?>	
				             <tr>
				                <td style="border: 1px solid black;"><?php echo $s1; ?></td>
                                <td style="border: 1px solid black;"><?php echo $customer_name; ?></td>
				                
				                <td style="border: 1px solid black;"><?php echo $work_order_number; ?></td> 
                                <td style="border: 1px solid black;"><?php echo $on_hand_stock;?></td> 

                                <td style="border: 1px solid black;"><?php echo $uom; ?></td>

                                <td style="border: 1px solid black;"><?php echo $total_roll; ?></td>
                                <td style="border: 1px solid black;"><?php echo $cubic_number; ?></td>
                                		                
				                
				                <?php
				                              
				                $s1++;
	                        }
			             ?>
			             </tr>
			          </tbody>
			         </table>

			    </div> <!-- End of <div class="form-group form-group-sm" -->

        </div>  <!-- end of <div class="panel panel-default"> -->