

<?php
//session_start();

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$barcode_code = $_POST['barcode_code'];






	?>
		


         <div class="form-group form-group-sm text-center" id="datewise_transaction_details">
         <div><b><h3>Barcode : <?php echo $barcode_code?></h3></b></div><br>
             <div><h3>Barcode Details Item Receiving</h3></div><br>

         <table id="datatable-buttons" class="table table-striped table-bordered">
		  <thead>
			  <tr>
				  
				 
				  <th>Date Of Receipt</th>
				  <th>Received By</th>
				  <th>Receiving Location</th>
				  <th>Work Order Number</th>
				  <th>GD Number</th>
				  <th>Length</th>
                  <th>Pallet Number</th>
				  <th>Grade</th>
                  <th>Type</th>
				  <th>Cubic Position</th>
                  <th>Active Status</th>
				  <th>Recording Person Name</th>
                  <th>Recording Time</th>


				 
				  
			  </tr>
		 </thead>
		 <tbody>
		 <?php 



				 // $sql = "SELECT total_receiving,total_issuing 
				 //         from item_receiving inner join datewise_transaction_smmary 
				 // 		on item_receiving.work_order_id = datewise_transaction_summary.work_order_id
				 // 		where item_receiving.barcode_code = '$barcode_code";


			   
				 $sql = "SELECT * FROM item_receiving WHERE barcode_code = '$barcode_code'";

				 $result = mysqli_query($con, $sql) or die(mysqli_error($con));
				 
				$s1 = 1;
			 while ($row = mysqli_fetch_array($result)) 
			 {
				 
				
				 
				 $date_of_receipt = $row['date_of_receipt'];
				 $received_by = $row['received_by'];
				 $receiving_location = $row['receiving_location'];
				 $work_order_number = $row['work_order_number'];
				 $gd_number = $row['gd_number'];
				 $length = $row['length'];

                 $pallet_no = $row['pallet_no'];
				 $grade = $row['grade'];
                 $type = $row['type'];
				 $cubic_number = $row['cubic_number'];
				 $active = $row['active'];
				 $recording_person_name = $row['recording_person_name'];
				 $recording_time = $row['recording_time'];
				
			 ?>	
			  <tr>
				 
				
				 <td><?php echo $date_of_receipt; ?></td>
				 <td><?php echo $received_by; ?></td>
				 <td><?php echo $receiving_location; ?></td>
				 <td><?php echo $work_order_number; ?></td>
				 <td><?php echo $gd_number; ?></td>
				 <td><?php echo $length; ?></td>
                 <td><?php echo $pallet_no; ?></td>
				 <td><?php echo $grade; ?></td>
                 <td><?php echo $type; ?></td>
				 <td><?php echo $cubic_number; ?></td>
				 <td><?php echo $active; ?></td>
				 <td><?php echo $recording_person_name; ?></td>
				 <td><?php echo $recording_time; ?></td>
                 

				 <?php
							   
				 $s1++;
			 }
		  ?>
		  </tr>
	   </tbody>
	  </table>

    <br><br>
      <div><h3>Barcode Details Item Issuing</h3></div><br>

         <table id="datatable-buttons" class="table table-striped table-bordered">
		  <thead>
			  <tr>
				  
				  
				  <th>Issued By</th>
				  <th>Recording Person Name</th>
				  <th>Recording Time</th>
				 
				  
				  
			  </tr>
		 </thead>
		 <tbody>
		 <?php 



				 // $sql = "SELECT total_receiving,total_issuing 
				 //         from item_receiving inner join datewise_transaction_smmary 
				 // 		on item_receiving.work_order_id = datewise_transaction_summary.work_order_id
				 // 		where item_receiving.barcode_code = '$barcode_code";


			   
				 $sql = "SELECT * FROM item_issuing WHERE barcode_code = '$barcode_code'";

				 $result = mysqli_query($con, $sql) or die(mysqli_error($con));
				 
				$s1 = 1;
			 while ($row = mysqli_fetch_array($result)) 
			 {
				 
				 $issued_by = $row['issued_by'];
				 
				 $recording_person_name = $row['recording_person_name'];
				 $recording_time = $row['recording_time'];
			
				
			 ?>	
			  <tr>
				 
				 <td><?php echo $issued_by; ?></td>
				 <td><?php echo $recording_person_name; ?></td>
				 <td><?php echo $recording_time; ?></td>
				 
                 

				 <?php
							   
				 $s1++;
			 }
		  ?>
		  </tr>
	   </tbody>
	  </table>
      <br><br>

      <div><h3>Barcode Details Move Item</h3></div><br>

         <table id="datatable-buttons" class="table table-striped table-bordered">
		  <thead>
			  <tr>
				  
				
				  <th>Recording Person Name</th>
				  <th>Recording Yime</th>
				  <th>Old Cubic Number</th>
				  <th>New Cubic Number</th>
				  <th>Old Pallet Number</th>
				  <th>New Pallet Number</th>
				  
				  
			  </tr>
		 </thead>
		 <tbody>
		 <?php 



				 // $sql = "SELECT total_receiving,total_issuing 
				 //         from item_receiving inner join datewise_transaction_smmary 
				 // 		on item_receiving.work_order_id = datewise_transaction_summary.work_order_id
				 // 		where item_receiving.barcode_code = '$barcode_code";


			   
				 $sql = "SELECT * FROM move_item WHERE barcode_code = '$barcode_code'";

				 $result = mysqli_query($con, $sql) or die(mysqli_error($con));
				 
				$s1 = 1;
			 while ($row = mysqli_fetch_array($result)) 
			 {


                $recording_person_name = $row['recording_person_name'];

				
				 $recording_time = $row['recording_time'];
				 $old_cubic_number = $row['old_cubic_number'];
				 $new_cubic_number = $row['new_cubic_number'];
				 $old_pallet_number = $row['old_pallet_number'];
				 $new_pallet_number = $row['new_pallet_number'];
				
			 ?>	
			  <tr>
				
				 
				 <td><?php echo $recording_person_name; ?></td>
				 <td><?php echo $recording_time; ?></td>
				 <td><?php echo $old_cubic_number; ?></td>
				 <td><?php echo $new_cubic_number; ?></td>
				 <td><?php echo $old_pallet_number; ?></td>
				 <td><?php echo $new_pallet_number; ?></td>
                 

				 <?php
							   
				 $s1++;
			 }
		  ?>
		  </tr>
	   </tbody>
	  </table>

     </div>