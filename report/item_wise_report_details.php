

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
                        <th style="border: 2px solid black;">SI</th>
                        <th style="border: 2px solid black;">Date</th>
                        <th style="border: 2px solid black;">Construction</th>
                        <th style="border: 2px solid black;">Composition</th>
                        <th style="border: 2px solid black;">Finished Width</th>
                        <th style="border: 2px solid black;">Finished Type</th>
                        <th style="border: 2px solid black;">Shade</th>
                        <th style="border: 2px solid black;">Weave</th>
                        <th style="border: 2px solid black;">Total Receiving</th>
                        <th style="border: 2px solid black;">Total Issuing</th>
                    </tr>
            </thead>
            <tbody>
            <?php 



                    // $sql = "SELECT total_receiving,total_issuing 
                    //         from item_receiving inner join datewise_transaction_smmary 
                    // 		on item_receiving.work_order_id = datewise_transaction_summary.work_order_id
                    // 		where item_receiving.barcode_code = '$barcode_code";


                    
                    $sql = "SELECT *
                    FROM datewise_transaction_summary where `work_order_number` = '$work_order_number'
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
                    <td style="border: 2px solid black;"><?php echo $s1; ?></td>
                    <td style="border: 2px solid black;"><?php echo $transaction_date; ?></td>
                    <td style="border: 2px solid black;"><?php echo $construction; ?></td>
                    <td style="border: 2px solid black;"><?php echo $composition; ?></td>
                    <td style="border: 2px solid black;"><?php echo $finished_width; ?></td>
                    <td style="border: 2px solid black;"><?php echo $finished_type; ?></td>
                    <td style="border: 2px solid black;"><?php echo $shade; ?></td>
                    <td style="border: 2px solid black;"><?php echo $weave; ?></td>
                    <td style="border: 2px solid black;"><?php echo $total_receiving; ?></td>
                    <td style="border: 2px solid black;"><?php echo $total_issuing; ?></td>

                    <?php
                                    
                    $s1++;
                }
                ?>
                </tr>
            </tbody>
            </table>

     </div>

