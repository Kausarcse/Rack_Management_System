<?php
session_start();

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

 function datatable_script()
 {
 	var table = $('#datatable-buttons').DataTable( {
       scrollY:        "500px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
        columnDefs: [
            { width: '0%', targets: 0 }
        ],
        dom: 'Bfrtip',
        buttons: [
        	{
                extend: 'pdf',
                title: 'Date Wise Transaction Details',
                footer: true
            },
            {
                extend: 'print',
                title: 'Date Wise Transaction Details',
                footer: true
            },
            {
                extend: 'excel',
                title: 'Date Wise Transaction Details',
                footer: true
            }
        ],
        fixedColumns:   {
                            leftColumns: 2,
                            rightColumns: 1
                        }

    } );
 }

$('.for_auto_complete').chosen();

</script>
<div class="col-sm-12 col-md-12 col-lg-12">
	<div id='element'>

		<div class="panel panel-default"> <!-- This div will create a block/panel for FORM -->

				<div class="panel-heading" style="color:#191970;"><b>Customer And Work Order Wise Stock Report</b></div> <!-- This will create a upper block for FORM (Just Beautification) -->

				<form class="form-horizontal row" action="" style="margin-top:10px;" method="post" name="attendance_management_device_information_form" id="attendance_management_device_information_form">

					<div class="col-md-12">



					 	
                      <div class="form-group form-group-md" id="form-group_for_received_by">
							<label class="control-label col-md-3" for="customer_name" style="margin-right:0px; color:#00008B;">Customer Name:</label>
								<div class="col-md-5 field_container">
									<select  class="form-control for_auto_complete" id="customer_name" name="customer_name" onchange="find_work_order_within_customer()">
												<option>Select Customer Name</option>
												<?php
												  	$sql = "SELECT distinct customer
																FROM   proxima_software_data";
													$result = mysqli_query($con, $sql) or die(mysqli_error($con));
													while($row = mysqli_fetch_array($result))
													{		
														  $customer_name = $row['customer'];
														  echo '<option value="'.$customer_name.'">'.$customer_name.'</option>';
													}

											    ?>
									</select>
								</div>
						</div>
						

						<div id="details_info">
							
	                    </div>


					</div>

				</form>

		</div> <!-- End of <div class="panel panel-default"> -->

        <div id="details_info2">

        <div class="panel panel-default">


<div class="form-group form-group-sm" id="datewise_transaction_details">

     <table id="datatable-buttons" class="table table-striped table-bordered" style="overflow: auto;">
         <thead>
             <tr>
                 <th style="border: 1px solid black;">SI</th>
                 <th style=" border: 1px solid black;">Customer Name</th>
                 <th style="border: 1px solid black;">Work Order Number</th>

                 <th style="border: 1px solid black;">Receving Length</th>
                 <th style="border: 1px solid black;">Issuing Length</th>
                 <th style="border: 1px solid black;">On Hand Length</th>

                 <th style="border: 1px solid black;">Receving Quantity</th>
                 <th style="border: 1px solid black;">Issuing Quantity</th>
                 <th style="border: 1px solid black;">On Hand Quantity</th>

                 <th style="border: 1px solid black;">Unit Of Measurement</th>
                 
                 <th style="border: 1px solid black; text-align:center;">Cubic Receiving</th>
                 <th style="border: 1px solid black; ">Cubic Issuing</th>
                 
                 
                
                 
            
             </tr>
        </thead>
        <tbody>
        <?php 



$sql1 = "SELECT 
work_order_number,GROUP_CONCAT(cubic_number SEPARATOR ', ') as cubic_number_ir,
SUM(length) AS receiving_length,customer_name,uom,
COUNT(quantiy) AS receiving_quantity
FROM item_receiving
GROUP BY work_order_number";
$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));

$response = "<table border='2' width='100%'>";


$counter = 1;

$s1 = 1;
while($row1 = mysqli_fetch_assoc($result1))
    {		
														  
    $work_order_number = $row1['work_order_number'];
    $sql2 = "SELECT 
    work_order_number,
    SUM(length) AS issuing_length,
    COUNT(quantiy) AS issuing_quantity,
    GROUP_CONCAT(cubic_number SEPARATOR ', ') as cubic_number_is
    FROM item_issuing
    WHERE work_order_number = '$work_order_number'
    GROUP BY work_order_number";

    $result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
    $row2 = mysqli_fetch_assoc($result2);
   

        
        
        $customer_name = $row1['customer_name'];
        
        $cubic_number_ir = $row1['cubic_number_ir'];
        $cubic_number_is = $row2['cubic_number_is'];
        $uom = $row1['uom'];
        $receiving_length = $row1['receiving_length'];
        $issuing_length = $row2['issuing_length'];

        $length = $row1['receiving_length']-$row2['issuing_length'];

        $receiving_quantity = $row1['receiving_quantity'];
        $issuing_quantity = $row2['issuing_quantity'];
        $quantity = $row1['receiving_quantity']-$row2['issuing_quantity'];


// }

              
            // $sql = "SELECT ii.customer_name,
            //                ii.work_order_number,
            //                ii.on_hand_stock,
            //                ii.uom,
            //                ii.total_roll,
            //                GROUP_CONCAT(ir.cubic_number SEPARATOR ',') as cubic_number
                               
            //         FROM item_info ii
            //         INNER JOIN item_receiving ir
            //         ON ii.work_order_number = ir.work_order_number
            //         GROUP BY ii.work_order_number
            //         ";

            // $result = mysqli_query($con, $sql) or die(mysqli_error($con));
            // $s1 = 1;
            // while ($row = mysqli_fetch_array($result)) 
            // {
                
            

            //     $customer_name = $row['customer_name'];
            //     $work_order_number = $row['work_order_number'];
            //     $on_hand_stock = $row['on_hand_stock'];
            //     $uom = $row['uom'];
            //     $total_roll = $row['total_roll'];                              
            //     $cubic_number = $row['cubic_number'];
                
            ?>	
             <tr>
                <td style="border: 1px solid black;"><?php echo $s1; ?></td>
                <td style="border: 1px solid black;"><?php echo $customer_name; ?></td>
                
                <td style="border: 1px solid black;"><?php echo $work_order_number; ?></td>

                <td style="border: 1px solid black;"><?php echo $receiving_length;?></td>
                <td style="border: 1px solid black;"><?php echo $issuing_length;?></td>  
                <td style="border: 1px solid black;"><?php echo $length;?></td> 

                

                <td style="border: 1px solid black;"><?php echo $receiving_quantity;?></td>
                <td style="border: 1px solid black;"><?php echo $issuing_quantity;?></td>  

                <td style="border: 1px solid black;"><?php echo $quantity; ?></td>

                <td style="border: 1px solid black;"><?php echo $uom; ?></td>
                <td style="border: 1px solid black;"><?php echo $cubic_number_ir; ?></td>
                <td style="border: 1px solid black;"><?php echo $cubic_number_is; ?></td>
                                        
                
                <?php
                              
                $s1++;
            }
         ?>
         </tr>
      </tbody>
     </table>

</div> <!-- End of <div class="form-group form-group-sm" -->

</div>  <!-- end of <div class="panel panel-default"> -->
							
	    </div>


    </div> <!-- end of </div> -->

    
</div> <!-- End of <div class="col-sm-12 col-md-12 col-lg-12"> -->