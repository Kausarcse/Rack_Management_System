<?php 
	include('../login/db_connection_class.php');
	$obj = new DB_Connection_Class_Main();
	$obj->connection();

	$sql1 = "SELECT 
	work_order_number, GROUP_CONCAT(barcode_code SEPARATOR ', ') as barcode_code_ir,
	SUM(length) AS receiving_length,customer_name,uom,
	COUNT(quantiy) AS receiving_quantity, cubic_number
	FROM item_receiving
	GROUP BY work_order_number";
	$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));

	$response = "<table border='2' width='100%'>";


	$counter = 1;
	$cubic_receiving = array();
	
	$s1 = 1;
	while($row1 = mysqli_fetch_assoc($result1))
	{	
		//$row1['cubic_number'];
	    //cubic number add using array push and check for receiving
	    
	    if (in_array($row1['cubic_number'], $cubic_receiving))
	    {
	       
	    }
	    else
	    {
	        array_push($cubic_receiving, $row1['cubic_number']);
	        var_dump($cubic_receiving);
	    }

	    $implode_cubic_receiving = implode(", ",$cubic_receiving);
	}

?>