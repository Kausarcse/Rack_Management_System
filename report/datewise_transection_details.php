

<!-- <link rel="stylesheet" href="bs-css/dataTables.bootstrap.css">
<link rel="stylesheet" href="bs-css/datatable.min.css">

<script src="bs-js/datatable.min.js"></script> 
<script src="bs-js/datatable.fixedHeader.min.js"></script>
<script src="bs-js/ddtf.js"></script>  -->

<?php
//session_start();

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$date_form = $_POST['date_form'];
$splitted_pp_creation_date= explode("/",$date_form);
$date_form= $splitted_pp_creation_date[2]."-".$splitted_pp_creation_date[1]."-".$splitted_pp_creation_date[0];

$date_to = $_POST['date_to'];
$splitted_pp_creation_date= explode("/",$date_to);
$date_to= $splitted_pp_creation_date[2]."-".$splitted_pp_creation_date[1]."-".$splitted_pp_creation_date[0];

	?>
		<div class="panel panel-default">

		       <div class="form-group form-group-sm">
			        <label class="control-label col-sm-5" for="search">Datewise Transaction Details</label>
			   </div> <!-- End of <div class="form-group form-group-sm" -->

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
                            $sql = "SELECT * 
									  FROM datewise_transaction_summary 
									  WHERE transaction_date BETWEEN '$date_form' AND '$date_to'  
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





