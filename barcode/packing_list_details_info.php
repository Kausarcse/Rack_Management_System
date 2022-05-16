<?php
session_start();

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$roll_no = $_POST['roll_no'];
$work_order_number = $_POST['work_order_number'];
$grade = '';
$length = '';
$kg = '';
$message = '';

$sql = "SELECT * FROM packing_list WHERE roll_no = '$roll_no' and work_order_number = '$work_order_number' ";
$result = mysqli_query($con, $sql) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);

if (isset($row['grade'])) 
{
	$grade = $row['grade'];
}
else
{
	$message = 'No Data';
}

if (isset($row['length'])) 
{
	$length = $row['length'];
}
else
{
	$message = 'No Data';
}

if (isset($row['kg'])) 
{
	$kg = $row['kg'];
}
else
{
	$message = 'No Data';
}

$result = $grade.' '.$length.' '.$kg;

if ($message == 'No Data') 
{
	$result = 'No_Data';
}

echo $result;

?>
