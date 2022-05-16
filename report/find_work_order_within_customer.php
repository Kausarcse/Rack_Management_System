<?php
session_start();

// include('../db_znzqc_connection_class.php');
// $obj2 = new DB_Connection_Class();
// $obj2->connection();

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$customer_name = $_POST['customer_name'];


//$user_id = $_SESSION['user_id'];
//$password = $_SESSION['password'];



?>

    <div class="form-group form-group-md" id="form-group_for_work_order_number">
        <label class="control-label col-md-3" for="work_order_number" style="color:#00008B;">Work Order Number:</label>
        <div class="col-md-5" style="padding-right:4px;">
            <select class="form-control for_auto_complete" id="work_order_number" name="work_order_number">
                <option >Select Work Order Number</option>

                <?php
                    $sql = "SELECT work_order
                            FROM   proxima_software_data WHERE customer = '$customer_name'";
                    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
                while($row = mysqli_fetch_array($result))
                {		
                        $work_order_number = $row['work_order'];
                        echo '<option value="'.$work_order_number.'">'.$work_order_number.'</option>';
                }

                ?>
            </select>
        </div>
    </div> 





    <div class="form-group form-group-sm">
        <div class="col-sm-offset-1 col-sm-9">
            <button type="button" class="btn btn-primary" onClick="sending_data_of_for_report()">Search</button>
        </div>
    </div>