<?php
session_start();
error_reporting(0);

// include('../db_znzqc_connection_class.php');
// $obj2 = new DB_Connection_Class();
// $obj2->connection();

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();






//$user_id = $_SESSION['user_id'];
//$password = $_SESSION['password'];




// $sql="select * from user_login where user_id='$user_id' and `password`='$password'";

// $result=mysqli_query($con,$sql) or die(mysqli_error($con));

// $row = mysqli_fetch_assoc($result);

// if(mysqli_num_rows($result)<1)
// {

// 	header('Location: ../../logout.php');

// }

// else
// {
// 	$created_by = $row['user_id'];
// 	$creator_full_name = $row['user_name'];
// 	$creator_division = $row['organization_name'];
// 	$creator_dept = $row['user_type'];
// 	$location = $row['organization_location'];
// }

?>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>


<style>

.form-group		/* This is for reducing Gap among Form's Fields */
{

	margin-bottom: 5px;

}

</style>

<script>

$(document).ready(function()
{
	

});

function Remove_Value_Of_This_Element(element_name)
{

	 document.getElementById(element_name).value='';
	 var alternate_field_of_date = "alternate_"+element_name;

	 if(typeof(alternate_field_of_date) != 'undefined' && alternate_field_of_date != null) // This is for deleting Alternative Field of Date if exists
	 {
		document.getElementById(alternate_field_of_date).value='';
	 }

}

function Reset_Radio_Button(radio_element)
{

		var radio_btn = document.getElementsByName(radio_element);
		for(var i=0;i<radio_btn.length;i++) 
		{
				radio_btn[i].checked = false;
		}


}

function Reset_Checkbox(checkbox_element)
{
	    var checkbox_btn = document.getElementsByName(checkbox_element+'[]');
	 	for(var i=0;i<checkbox_btn.length;i++)
		{

				checkbox_btn[i].checked = false;

		}
}

function reset_dropdown(select_element)
{

	  document.getElementById(select_element).selectedIndex = 0;

}

function find_work_order_within_customer()
{
    var customer_name=document.getElementById('customer_name').value;
    $.ajax({
	 		url: 'report/find_work_order_within_customer.php',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: {customer_name:customer_name},
	 		success: function( data, textStatus, jQxhr )
	 		{
	 				//alert(data);
	 				document.getElementById('details_info').innerHTML=data;
	 				// datatable_script();
	 		},
	 		error: function( jqXhr, textStatus, errorThrown )
	 		{
	 				//console.log( errorThrown );
	 				alert(errorThrown);
	 		}
	 	}); // End of $.ajax({
    
}

 function sending_data_of_for_report()
 {
 	
 	var work_order_number=document.getElementById('work_order_number').value;
 	var customer_name=document.getElementById('customer_name').value;
 	

 	
 		$.ajax({
	 		url: 'report/customer_and_work_order_wise_stock_report_details.php',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: { work_order_number:work_order_number, customer_name:customer_name},
	 		success: function( data, textStatus, jQxhr )
	 		{
	 				//alert(data);
	 				document.getElementById('details_info2').innerHTML=data;
	 				// datatable_script();
	 		},
	 		error: function( jqXhr, textStatus, errorThrown )
	 		{
	 				//console.log( errorThrown );
	 				alert(errorThrown);
	 		}
	 	}); // End of $.ajax({
 	

 }

//  function datatable_script()
//  {
//  	var table = $('#datatable-buttons').DataTable( {
//        scrollY:        "500px",
//         scrollX:        true,
//         scrollCollapse: true,
//         paging:         false,
//         columnDefs: [
//             { width: '0%', targets: 0 }
//         ],
//         dom: 'Bfrtip',
//         buttons: [
//         	{
//                 extend: 'pdf',
//                 title: 'Date Wise Transaction Details',
//                 footer: true
//             },
//             {
//                 extend: 'print',
//                 title: 'Date Wise Transaction Details',
//                 footer: true
//             },
//             {
//                 extend: 'excel',
//                 title: 'Date Wise Transaction Details',
//                 footer: true
//             }
//         ],
//         fixedColumns:   {
//                             leftColumns: 2,
//                             rightColumns: 1
//                         }

//     } );
//  }

$('.for_auto_complete').chosen();

</script>
<div class="col-sm-12 col-md-12 col-lg-12">
	<div id='element'>

       

           <div class="panel panel-default">

              

                <div class="form-group form-group-sm table-responsive" id="datewise_transaction_details">
                <form class="form-horizontal" action="" name="packing_list_details_report_form" id="packing_list_details_report_form">
                <table class="table" style="border: none;" id='table_packing_list_details'>
                    <thead>
                        <tr>
                            <td colspan="12"
                                style="text-align: center; font-size: 25px; color: black; font-weight: bold;">
                                Account Wise Stock Report</td>
                        </tr>
                    </thead>
                </table>
                    

                    <table id="datatable-buttons" class="table table-striped table-bordered text-center" style="overflow: auto;">
                        <thead>


                            <tr style="border: 2px solid black;">
                                <th  style="border: 2px solid black;"></th> 
                                <th  style="border: 2px solid black;"></th>
                                <th colspan="4" style="border: 2px solid black;">TTL Stock Status</th>
                                <th  colspan="3" style="border: 2px solid black;">Below 30 Days</th>
                                <th  colspan="3" style="border: 2px solid black;">31 to 60 Days</th>
                                <th  colspan="3" style="border: 2px solid black;">61 to 90 Days</th>
                                <th  colspan="3" style="border: 2px solid black;">90 Days Up</th>

                            </tr>


                            <tr style="border: 2px solid black;">
                                <th style="border: 2px solid black;">SI</th> 
                                <th style="border: 2px solid black;">A/C Holder</th>

                                <th style="border: 2px solid black;">No of WO</th>
                                <th style="border: 2px solid black;">Yds</th>
                                <th style="border: 2px solid black;">Value</th>

                                <th style="border: 2px solid black;">%</th>
                                
                            
                                <th style="border: 2px solid black;">Yds</th>
                                <th style="border: 2px solid black;">Value</th>
                                <th style="border: 2px solid black;">%</th>
                            
                                <th style="border: 2px solid black;">Yds</th>
                                <th style="border: 2px solid black;">Value</th>
                                <th style="border: 2px solid black;">%</th>
                                
                                <th style="border: 2px solid black;">Yds</th>
                                <th style="border: 2px solid black;">Value</th>
                                <th style="border: 2px solid black;">%</th>
                                
                                <th style="border: 2px solid black;">Yds</th>
                                <th style="border: 2px solid black;">Value</th>
                                <th style="border: 2px solid black;">%</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 



                            $sql_account_wise_stock = "SELECT 
                            gd_number,work_order_number,customer_name,ac_holder,rate,
                            count(distinct(work_order_number)) as number_of_work_order,
                            sum(length) as stock_length,
                            DATEDIFF(date(NOW()),min(date_of_receipt)) as ageing
                            FROM item_receiving 
                            where active = '1' 
                            GROUP BY ac_holder";
                            $result_account_wise_stock = mysqli_query($con, $sql_account_wise_stock) or die(mysqli_error($con));
                            $s1 = 1;
                            $total_stock_length = 0;
                            $total_work_order_number = 0;
                            $total_value_of_length = 0;

                            $total_stock_length_percent= 0;
                            $total_stock_length_below_30_percent = 0;
                            $total_stock_length_between_31_60_percent = 0;
                            $total_stock_length_between_61_90_percent = 0;
                            $total_stock_length_for_up_90_percent = 0;

                            while ($row_account_wise_stock = mysqli_fetch_array($result_account_wise_stock)) 
                            {

                                $customer_name = $row_account_wise_stock['customer_name']; 
                                $account_holder = $row_account_wise_stock['ac_holder'];
                                $work_order_number = $row_account_wise_stock['number_of_work_order'];
                                $rate = $row_account_wise_stock['rate'];
                                
                                //Calculation for total amount
                                    $stock_length = $row_account_wise_stock['stock_length'];
                                
                                
                                    $stock_length_value = $stock_length*$rate;
                                    $total_work_order_number =  $total_work_order_number + $work_order_number;
                                    
                                    

                                    $sql_total_length_receiving = "SELECT sum(length) as total_stock_length from item_receiving WHERE active = '1'";
                                    $result_item_receiving_length = mysqli_query($con, $sql_total_length_receiving) or die(mysqli_error($con));
                                    $row_for_receiving_length = mysqli_fetch_assoc($result_item_receiving_length);

                                    $total_stock_length = $row_for_receiving_length['total_stock_length'];
                                    $total_stock_length_value = $total_stock_length*$rate;


                                    if(($stock_length == 0) || ($stock_length == "") ||($total_stock_length == 0) || ($total_stock_length == NULL))
                                    {
                                        $stock_length_percent = '0';
                                        $total_stock_length_value = '0';
                                        $total_stock_length_percent = '0';

                                    }
                                    else{

                                        $stock_length_percent = (($stock_length/$total_stock_length)*100);

                                    }

                                    
                                    

                                    $total_stock_length_percent =$total_stock_length_percent + $stock_length_percent;

                                


                                //Calculation below 30 days
                                $receiving_length_for_below_30 ="SELECT SUM(length) AS stock_length_below_30 FROM item_receiving WHERE ac_holder = '$account_holder' AND active = '1' AND DATE_FORMAT(date_of_receipt, '%Y-%m-%d')
                                BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()";
                                $result_receiving_length_for_below_30 = mysqli_query($con, $receiving_length_for_below_30) or die(mysqli_error($con));
                                $row_receiving_length_for_below_30 =  mysqli_fetch_assoc($result_receiving_length_for_below_30);

                                $stock_length_below_30 = $row_receiving_length_for_below_30['stock_length_below_30'];

                                $stock_length_value_below_30 = $stock_length_below_30*$rate;

                                $sql_total_length_receiving_below_30 = "SELECT sum(length) total_length_receiving_below_30 from item_receiving WHERE active='1' AND DATE_FORMAT(date_of_receipt, '%Y-%m-%d')
                                BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()";
                                $result_total_length_receiving_below_30 = mysqli_query($con, $sql_total_length_receiving_below_30) or die(mysqli_error($con));
                                $row_for_receiving_total_length_below_30 = mysqli_fetch_assoc($result_total_length_receiving_below_30);

                                $total_stock_length_below_30 = $row_for_receiving_total_length_below_30['total_length_receiving_below_30'];

                                $total_stock_length_value_below_30 = $total_stock_length_below_30*$rate;

                                if(($stock_length_below_30 == 0) || ($total_stock_length_below_30==0))
                                {
                                    $stock_length_below_30_percent = '0';
                                }
                                else{

                                    $stock_length_below_30_percent = (($stock_length_below_30/$total_stock_length_below_30)*100);

                                }


                                $total_stock_length_below_30_percent = $total_stock_length_below_30_percent + $stock_length_below_30_percent;



                                //calculation between 31 to 60 days
                                $receiving_length_for_between_31_60 ="SELECT SUM(length) AS stock_length_between_31_60 FROM item_receiving WHERE ac_holder = '$account_holder' AND active = '1' AND DATE_FORMAT(date_of_receipt, '%Y-%m-%d')
                                BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 60 DAY ) AND DATE_SUB( CURDATE() ,INTERVAL 31 DAY )";
                                $result_receiving_length_for_between_31_60 = mysqli_query($con, $receiving_length_for_between_31_60) or die(mysqli_error($con));
                                $row_receiving_length_for_between_31_60 =  mysqli_fetch_assoc($result_receiving_length_for_between_31_60);

                                $stock_length_between_31_60 = $row_receiving_length_for_between_31_60['stock_length_between_31_60'];

                                $stock_length_value_between_31_60 = $stock_length_between_31_60*$rate;

                                
                                

                                $sql_total_length_receiving_between_31_60 = "SELECT sum(length) total_length_receiving_between_31_60 from item_receiving WHERE active='1' AND DATE_FORMAT(date_of_receipt, '%Y-%m-%d')
                                BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 60 DAY ) AND DATE_SUB( CURDATE() ,INTERVAL 31 DAY )";
                                $result_total_length_receiving_between_31_60 = mysqli_query($con, $sql_total_length_receiving_between_31_60) or die(mysqli_error($con));
                                $row_for_receiving_total_length_between_31_60 = mysqli_fetch_assoc($result_total_length_receiving_between_31_60);

                                $total_stock_length_between_31_60 = $row_for_receiving_total_length_between_31_60['total_length_receiving_between_31_60'];

                                $total_stock_length_value_between_31_60 = $total_stock_length_between_31_60*$rate;


                                if(($stock_length_between_31_60 == 0) || ($total_stock_length_between_31_60 ==0 ))
                                {
                                    $stock_length_between_31_60_percent = '0';
                                }
                                else{

                                    $stock_length_between_31_60_percent = (($stock_length_between_31_60/$total_stock_length_between_31_60)*100);

                                }
                                
                                $total_stock_length_between_31_60_percent = $total_stock_length_between_31_60_percent + $stock_length_between_31_60_percent;


                                //calculation between 61 to 90 days
                                $receiving_length_for_between_61_90 ="SELECT SUM(length) AS stock_length_between_61_90 FROM item_receiving WHERE ac_holder = '$account_holder' AND active = '1' AND DATE_FORMAT(date_of_receipt, '%Y-%m-%d')
                                BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 90 DAY ) AND DATE_SUB( CURDATE() ,INTERVAL 61 DAY )";
                                $result_receiving_length_for_between_61_90 = mysqli_query($con, $receiving_length_for_between_61_90) or die(mysqli_error($con));
                                $row_receiving_length_for_between_61_90 =  mysqli_fetch_assoc($result_receiving_length_for_between_61_90);

                                $stock_length_between_61_90 = $row_receiving_length_for_between_61_90['stock_length_between_61_90'];

                                $stock_length_value_between_61_90 = $stock_length_between_61_90*$rate;

                                
                                

                                $sql_total_length_receiving_between_61_90 = "SELECT sum(length) total_length_receiving_between_61_90 from item_receiving WHERE active='1' AND DATE_FORMAT(date_of_receipt, '%Y-%m-%d')
                                BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 90 DAY ) AND DATE_SUB( CURDATE() ,INTERVAL 61 DAY )";
                                $result_total_length_receiving_between_61_90 = mysqli_query($con, $sql_total_length_receiving_between_61_90) or die(mysqli_error($con));
                                $row_for_receiving_total_length_between_61_90 = mysqli_fetch_assoc($result_total_length_receiving_between_61_90);

                                $total_stock_length_between_61_90 = $row_for_receiving_total_length_between_61_90['total_length_receiving_between_61_90'];

                                $total_stock_length_value_between_61_90 = $total_stock_length_between_61_90*$rate;

                                if(($stock_length_between_61_90 == 0) || ($total_stock_length_between_61_90==0))
                                {
                                    $stock_length_between_61_90_percent = '0';
                                }
                                else{

                                    $stock_length_between_61_90_percent = (($stock_length_between_61_90/$total_stock_length_between_61_90)*100);

                                }

                                
                                $total_stock_length_between_61_90_percent = $total_stock_length_between_61_90_percent + $stock_length_between_61_90_percent;



                                //Calculation up 90 days
                                $receiving_length_for_up_90 ="SELECT SUM(length) AS stock_length_for_up_90 FROM item_receiving WHERE ac_holder = '$account_holder' AND active = '1' AND DATE_FORMAT(date_of_receipt, '%Y-%m-%d')
                                < DATE_SUB(NOW(), INTERVAL 90 DAY)";
                                $result_receiving_length_for_up_90 = mysqli_query($con, $receiving_length_for_up_90) or die(mysqli_error($con));
                                $row_receiving_length_for_up_90 =  mysqli_fetch_assoc($result_receiving_length_for_up_90);

                                $stock_length_for_up_90 = $row_receiving_length_for_up_90['stock_length_for_up_90'];

                                $stock_length_value_for_up_90 = $stock_length_for_up_90*$rate;

                                $sql_total_length_receiving_for_up_90 = "SELECT sum(length) total_length_receiving_for_up_90 from item_receiving WHERE active='1' AND DATE_FORMAT(date_of_receipt, '%Y-%m-%d')
                                < DATE_SUB(NOW(), INTERVAL 90 DAY)";
                                $result_total_length_receiving_for_up_90 = mysqli_query($con, $sql_total_length_receiving_for_up_90) or die(mysqli_error($con));
                                $row_for_receiving_total_length_for_up_90 = mysqli_fetch_assoc($result_total_length_receiving_for_up_90);

                                $total_stock_length_for_up_90 = $row_for_receiving_total_length_for_up_90['total_length_receiving_for_up_90'];

                                $total_stock_length_value_for_up_90 = $total_stock_length_for_up_90*$rate;

                                if(($stock_length_for_up_90 == 0) || ($total_stock_length_for_up_90==0))
                                {
                                    $stock_length_for_up_90_percent = '0';
                                }
                                else{

                                    $stock_length_for_up_90_percent = (($stock_length_for_up_90/$total_stock_length_for_up_90)*100);

                                }


                                $total_stock_length_for_up_90_percent = $total_stock_length_for_up_90_percent + $stock_length_for_up_90_percent;

                                

                                
                                
                            ?>	
                            <tr>
                                <td style="border: 2px solid black;"><?php echo $s1; ?></td>
                                <td style="border: 2px solid black;"><?php echo $account_holder ?></td>
                                <td style="border: 2px solid black;"><?php echo $work_order_number?></td>
                                <td style="border: 2px solid black;">
                                    <?php

                                        if($stock_length==NULL)
                                        {
                                            echo '0';
                                        }
                                        echo $stock_length
                                    ?>
                                </td>

                                <td style="border: 2px solid black;"><?php echo "$ ".$stock_length_value;?></td>
                                <td style="border: 2px solid black;"><?php echo $stock_length_percent?>%</td>
                                <td style="border: 2px solid black;">
                                    <?php
                                        if($stock_length_below_30==NULL)
                                        {
                                            echo '0';
                                        }
                                        echo $stock_length_below_30;
                                    ?>
                                </td>

                                <td style="border: 2px solid black;"><?php echo "$ ".$stock_length_value_below_30?></td>
                                <td style="border: 2px solid black;"><?php echo $stock_length_below_30_percent?>%</td>

                                <td style="border: 2px solid black;">
                                    <?php
                                        if($stock_length_between_31_60 == NULL)
                                        {
                                            echo '0';
                                        }
                                        echo $stock_length_between_31_60;
                                    ?>
                                </td>
                                <td style="border: 2px solid black;"><?php echo "$ ". $stock_length_value_between_31_60?></td>
                                <td style="border: 2px solid black;"><?php echo $stock_length_between_31_60_percent ?></td>

                                <td style="border: 2px solid black;">
                                    <?php
                                        if($stock_length_between_61_90 == NULL)
                                        {
                                            echo '0';
                                        }
                                        echo $stock_length_between_61_90;
                                    ?>
                                </td>

                                <td style="border: 2px solid black;"><?php echo "$ ". $stock_length_value_between_61_90?></td>
                                <td style="border: 2px solid black;"> <?php echo $stock_length_between_61_90_percent ?> </td>

                                <td style="border: 2px solid black;">
                                    <?php
                                        if($stock_length_for_up_90 == NULL) 
                                        {
                                            echo '0';
                                        }
                                        echo $stock_length_for_up_90;
                                    ?>
                                </td>

                                <td style="border: 2px solid black;"><?php echo "$ ".$stock_length_value_for_up_90 ?></td>
                                <td style="border: 2px solid black;"><?php  echo $stock_length_for_up_90_percent ?></td> 
                                

                                <?php
                                            
                                $s1++;
                            }
                            ?>
                            </tr>
                            <tr>

                            <th style="border: 2px solid black;"></th> 
                            <th style="border: 2px solid black;"></th>

                            <th style="border: 2px solid black;" class="text-center">
                                <?php
                                    if(isset($total_work_order_number))
                                    {
                                        echo $total_work_order_number;
                                    }
                                    else{
                                        echo "";
                                    }
                                
                                ?>
                            </th>
                            <th style="border: 2px solid black;">
                                <?php 
                                    if(isset($total_stock_length))
                                    {
                                    echo $total_stock_length; 
                                    }
                                    else{
                                    echo "";
                                }
                                    
                                ?> 
                            </th>
                            <th style="border: 2px solid black;">
                                <?php
                                    if(isset($total_stock_length_value))
                                    {
                                        echo "$ ".$total_stock_length_value;
                                    }
                                    else{
                                        echo "";
                                    }
                                
                                ?>
                            </th>
                            <th style="border: 2px solid black;">
                                <?php
                                    if(isset($total_stock_length_percent))
                                    {
                                        echo $total_stock_length_percent;
                                    }
                                    else{
                                        echo "";
                                    }
                                    
                                ?>%</th>
                            

                            <th style="border: 2px solid black;">
                                <?php
                                    if(isset($total_stock_length_below_30))
                                    {
                                        echo $total_stock_length_below_30;
                                    }
                                    else
                                    {
                                        echo "";
                                    }
                                    
                                ?>
                            </th>
                            <th style="border: 2px solid black;">
                                <?php
                                    if(isset($total_stock_length_value_below_30))
                                    {
                                        echo "$ ".$total_stock_length_value_below_30;

                                    }
                                    else{
                                        echo "";
                                    }
                                    
                                ?>
                            </th>
                            <th style="border: 2px solid black;">
                            <?php 
                                if(isset($total_stock_length_below_30_percent))
                                {
                                    echo $total_stock_length_below_30_percent; 
                                }
                                else{
                                    echo "";
                                }
                                
                            ?>%</th>

                            <th style="border: 2px solid black;">
                                <?php
                                    if(isset($total_stock_length_between_31_60))
                                    {
                                        echo $total_stock_length_between_31_60;
                                    }
                                    else{
                                        echo "";
                                    }
                                    
                                ?>
                            </th>
                            <th style="border: 2px solid black;">
                                <?php
                                    if(isset($total_stock_length_value_between_31_60))
                                    {
                                        echo "$ ".$total_stock_length_value_between_31_60;
                                    }
                                    else{
                                        echo "";
                                    }
                                
                                ?>
                            </th>
                            <th style="border: 2px solid black;">
                                <?php
                                    if(isset($total_stock_length_between_31_60_percent))
                                    {
                                        echo $total_stock_length_between_31_60_percent;
                                    }
                                    else{
                                        echo "";
                                    }
                                
                                ?>%</th>

                            <th style="border: 2px solid black;">
                                <?php
                                    if(isset($total_stock_length_between_61_90))
                                    {
                                        echo $total_stock_length_between_61_90;
                                    }
                                    else{
                                        echo "";
                                    }
                                    
                                ?>
                            </th>
                            <th style="border: 2px solid black;">
                                <?php
                                    if(isset($total_stock_length_value_between_61_90))
                                    {
                                        echo "$ ".$total_stock_length_value_between_61_90;

                                    }
                                    else{
                                        echo "";
                                    }
                                    
                                    
                                ?>
                            </th>
                            <th style="border: 2px solid black;">
                                <?php
                                    if(isset($total_stock_length_between_61_90_percent))
                                    {
                                        echo $total_stock_length_between_61_90_percent;
                                    }
                                    else{
                                        echo "";
                                    }
                                
                                ?>
                            </th>
                            
                            <th style="border: 2px solid black;">
                                <?php
                                    if(isset($total_stock_length_for_up_90))
                                    {
                                        echo $total_stock_length_for_up_90;

                                    }
                                    else{
                                        echo "";
                                    }
                                    
                                ?>
                            </th>
                            <th style="border: 2px solid black;">
                                <?php
                                    if(isset($total_stock_length_value_for_up_90))
                                    {
                                        echo "$ ".$total_stock_length_value_for_up_90;
                                    }
                                    else{
                                        echo "";
                                    }
                                
                                ?>
                            </th>
                            <th style="border: 2px solid black;">
                                <?php
                                if(isset($total_stock_length_for_up_90_percent))
                                {
                                    echo  $total_stock_length_for_up_90_percent;

                                }
                                else{
                                    echo "";
                                }
                                
                                ?>
                            </th>

                            </tr>
                    </tbody>
                    </table>
                </form>

                </div> <!-- End of <div class="form-group form-group-sm" -->

           </div>  <!-- end of <div class="panel panel-default"> -->
							
	    

          
    </div> <!-- end of </div> -->

    <button id="excel_button" class="btn btn-success"><a id="downloadLink" onclick="exportF(this)" style="color: white;">Export to excel</a></button>  
</div> <!-- End of <div class="col-sm-12 col-md-12 col-lg-12"> -->

<script>

  function exportF(elem) {
    var table = document.getElementById("element");
    var html = table.innerHTML;
    var url = 'data:application/vnd.ms-excel,' + escape(html); // Set your html table into url 
    elem.setAttribute("href", url);
    elem.setAttribute("download", "account_wise_stock_report.xls"); // Choose the file name
    return false;
}

</script>