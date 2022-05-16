

<?php
//session_start();

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$work_order_number = $_POST['work_order_number'];


// $sql = "SELECT  *
//         FROM  item_receiving
//         where `barcode_code` = '$barcode_code'";

// $result = mysqli_query($con, $sql) or die(mysqli_error($con));




// while($row = mysqli_fetch_array($result))
// {		
//         $customer_name = $row['customer_name'];
//         $gd_number = $row['gd_number'];
//         $work_order_number = $row['work_order_number'];
//         $shade = $row['shade'];
//         $sql2 = "SELECT *
//         FROM datewise_transaction_summary
//         where customer_name = '$customer_name'
//         and   gd_number = '$gd_number'
//         and   work_order_number = '$work_order_number'
//         and   shade = '$shade' ";

//         $result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
//         $row2 = mysqli_fetch_row($result2);

        
    
// }


	?>
		<div class="panel panel-default">

		       <!-- <div class="form-group form-group-sm">
			        <label class="control-label col-sm-5" for="search">Datewise Transaction Details</label>
			   </div> End of <div class="form-group form-group-sm" -->

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
				                 <th>Total Receiving</th>
				                 <th>Total Issuing</th>
			                 </tr>
			            </thead>
			            <tbody>
			            <?php 



                                // $sql = "SELECT total_receiving,total_issuing 
								//         from item_receiving inner join datewise_transaction_smmary 
								// 		on item_receiving.work_order_id = datewise_transaction_summary.work_order_id
								// 		where item_receiving.barcode_code = '$barcode_code";


                              
                                $sql = "SELECT * FROM datewise_transaction_summary
                                WHERE work_order_number = '$work_order_number'
                                ";

                                $result = mysqli_query($con, $sql) or die(mysqli_error($con));
								
							   $s1 = 1;
							while ($row = mysqli_fetch_array($result)) 
							{
                                
								$transaction_date = $row['transaction_date'];
                                
								$construction = $row['construction'];
								$composition = $row['composition'];
								$finished_width = $row['finished_width'];
								$finished_type = $row['finished_type'];
								$shade = $row['shade'];
								$weave = $row['weave'];
								$total_receiving = $row['total_receiving'];
								$total_issuing = $row['total_issuing'];
				            ?>	
				             <tr>
				                <td><?php echo $s1; ?></td>
				                <td><?php echo $transaction_date; ?></td>
				                <td><?php echo $construction; ?></td>
				                <td><?php echo $composition; ?></td>
				                <td><?php echo $finished_width; ?></td>
				                <td><?php echo $finished_type; ?></td>
				                <td><?php echo $shade; ?></td>
				                <td><?php echo $weave; ?></td>
				                <td><?php echo $total_receiving; ?></td>
				                <td><?php echo $total_issuing; ?></td>

				                <?php
				                              
				                $s1++;
	                        }
			             ?>
			             </tr>
			          </tbody>
			         </table>

			    </div> <!-- End of <div class="form-group form-group-sm" -->

        </div>  <!-- end of <div class="panel panel-default"> -->