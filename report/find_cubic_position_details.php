<?php
session_start();

// include('../db_znzqc_connection_class.php');
// $obj2 = new DB_Connection_Class();
// $obj2->connection();
error_reporting(0);
include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$cubic_number = $_POST['cubic_number'];

// $sql = "SELECT * 
// FROM   item_receiving
// where `cubic_number` = '$cubic_number'";



$sql1 = "SELECT 
work_order_number,gd_number,customer_name,
SUM(length) AS receiving_length,
SUM(kgs) AS receiving_kgs,
COUNT(quantiy) AS receiving_quantity 
FROM item_receiving
WHERE cubic_number = '$cubic_number'
GROUP BY work_order_number";
$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));

$response = "<table border='2' width='100%'>";

$total_roll = 0;
$total_length = 0;
$total_kgs = 0;
$counter = 1;


while($row1 = mysqli_fetch_assoc($result1))
{		
														  
    $work_order_number = $row1['work_order_number'];
    $sql2 = " SELECT 
    work_order_number,customer_name,
    SUM(length) AS issuing_length,
    SUM(kgs) AS issuing_kgs,
    COUNT(quantiy) AS issuing_quantity 
    FROM item_issuing
    WHERE cubic_number = '$cubic_number' 
    AND work_order_number = '$work_order_number'
    GROUP BY work_order_number";

    $result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
    $row2 = mysqli_fetch_assoc($result2);
   

        
        $gd_number = $row1['gd_number'];
        $receiving_location = $row1['receiving_location'];
        $customer_name = $row1['customer_name'];
        

         
        $length = $row1['receiving_length']-$row2['issuing_length'];
        $kgs = $row1['receiving_kgs']-$row2['issuing_kgs'];
        $quantity = $row1['receiving_quantity']-$row2['issuing_quantity'];



        if($quantity>0)
        {

            $response .= '<tr style="background-color: #5ea898;">';
            $response .= '<td colspan="2"><strong>'.$counter.'</strong></td>';
            $response .= "</tr>";

            $response .= '<tr>';
            $response .= '<td style="border:1px solid black;">Gd Number : </td><td>'.$gd_number.'</td>';
            $response .= "</tr>";

            $response .= "<tr>";
            $response .= '<td style="border:1px solid black;">Work Order number : </td><td>'.$work_order_number."</td>";
            $response .= "</tr>";

            $response .= "<tr>";
            $response .= '<td style="border:1px solid black;">Customer Name : </td><td>'.$customer_name."</td>";
            $response .= "</tr>";

            $response .= '<tr>';
            $response .= '<td style="border:1px solid black;">Garments Name : </td><td></td>';
            $response .= "</tr>";


            $response .= "<tr>"; 
            $response .= '<td style="border:1px solid black;">Total Cubic Length : </td><td>'.$length."</td>"; 
            $response .= "</tr>";

            $response .= "<tr>"; 
            $response .= '<td style="border:1px solid black;">Total KG : </td><td>'.$kgs."</td>"; 
            $response .= "</tr>";

            $response .= "<tr>"; 
            $response .= '<td style="border:1px solid black;">Total Cubic Quantity : </td><td>'.$quantity."</td>"; 
            $response .= "</tr>";

            $total_length = $total_length + $length;
            $total_kgs = $total_kgs + $kgs;
            $total_roll = $total_roll + $quantity;

            $counter++;

        }
        

}

$response .= "</table>";

$response .= "<h4> Total Number of Rolls:<strong>".$total_roll."</strong></h4>";
$response .= "<h4> Total Stock Quantity(Yds):<strong>".$total_length."</strong></h4>";
$response .= "<h4> Total KG:<strong>".$total_kgs."</strong></h4>";
$response .= "<h4> Total Number of Work Order:<strong>".($counter - 1)."</strong></h4>";

if ( ($total_kgs > 1) && ($total_kgs < 1200) ) 
{
    $response .= "<h4><strong>Partially Occupied</strong></h4>";
}
else if ($total_kgs >= 1200) 
{
    $response .= "<h4><strong>Fully Occupied</strong></h4>";
}

echo $response;
     

?>



