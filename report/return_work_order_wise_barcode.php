

<?php
//session_start();

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$work_order_number = $_POST['work_order_number'];



	?>
		


         <div class="form-group form-group-sm" id="datewise_transaction_details">

         <table id="datatable-buttons" class="table table-striped table-bordered">
		  <thead>
			  <tr>
				  <th>SI</th>
				  <th>Date</th>
				  <th>Construction</th>
				  <th>Composition</th>
				  <th>Finished Width</th>
				  <th>Finished Type</th>
				  <th>Shade</th>
				  <th>Weave</th>
				  <th>Details</th>
				  
			  </tr>
		 </thead>
		 <tbody>
		 <?php 



				 // $sql = "SELECT total_receiving,total_issuing 
				 //         from item_receiving inner join datewise_transaction_smmary 
				 // 		on item_receiving.work_order_id = datewise_transaction_summary.work_order_id
				 // 		where item_receiving.barcode_code = '$barcode_code";


			   
				 $sql = "SELECT * FROM item_receiving WHERE work_order_number = '$work_order_number'";

				 $result = mysqli_query($con, $sql) or die(mysqli_error($con));
				 
				$s1 = 1;
			 while ($row = mysqli_fetch_array($result)) 
			 {
				 
				 $barcode_code = $row['barcode_code'];
				 
				 $construction = $row['construction'];
				 $composition = $row['composition'];
				 $finished_width = $row['finished_width'];
				 $finished_type = $row['finished_type'];
				 $shade = $row['shade'];
				 $weave = $row['weave'];
				
			 ?>	
			  <tr>
				 <td><?php echo $s1; ?></td>
				 <td><?php echo $barcode_code; ?></td>
				 <td><?php echo $construction; ?></td>
				 <td><?php echo $composition; ?></td>
				 <td><?php echo $finished_width; ?></td>
				 <td><?php echo $finished_type; ?></td>
				 <td><?php echo $shade; ?></td>
				 <td><?php echo $weave; ?></td>
                 
                 <input type="hidden" id="serial_<?php echo $s1?>" name="serial_<?php echo $s1?>" value="<?php echo $barcode_code?>">
                 <input type="hidden" id="barcode_code_<?php echo $s1?>" name="barcode_code_<?php echo $s1?>" value="<?php echo $barcode_code?>">
				 <td><button type="button" id="barcode_code_<?php echo $s1?>" name="barcode_code_<?php echo $s1?>" value="<?php echo $s1?>" class="btn btn-success" onclick="barcode_details(this.value)">Details</button></td>

				 <?php
							   
				 $s1++;
			 }
		  ?>
		  </tr>
	   </tbody>
	  </table>

     </div>