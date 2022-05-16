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

        <div id="details_info2">

        <div class="panel panel-default">

            <h3>Stock Report</h3>

<div class="form-group form-group-sm table-responsive" id="datewise_transaction_details">

     <table id="datatable-buttons" class="table table-striped table-bordered" style="overflow: auto;">
         <thead>
             <tr>
                 <th style="border: 2px solid black;">SI</th>
                 <th style=" border: 2px solid black;">Customer Name</th>
                 <th style="border: 2px solid black;">Work Order Number</th>

                 <th style="border: 2px solid black;">Receving Length</th>
                 <th style="border: 2px solid black;">Issuing Length</th>
                 <th style="border: 2px solid black;">On Hand Length</th>

                 <th style="border: 2px solid black;">Receving Quantity</th>
                 <th style="border: 2px solid black;">Issuing Quantity</th>
                 <th style="border: 2px solid black;">On Hand Quantity</th>

                 <th style="border: 2px solid black;">Unit Of Measurement</th>
                 
                 <th style="border: 2px solid black; text-align:center;"> Receiving Barcode</th>
                 <th style="border: 2px solid black; "> Issuing Barcode</th>
                 <th style="border: 2px solid black; ">Available Stock Barcode</th>

                 <th style="border: 2px solid black; text-align:center;"> Receiving Cubic</th>
                 <th style="border: 2px solid black; "> Issuing Cubic</th>
                 
                 
                
                 
            
             </tr>
        </thead>
        <tbody>
        <?php 



$sql1 = "SELECT 
work_order_number, GROUP_CONCAT(barcode_code SEPARATOR ', ') as barcode_code_ir,
SUM(length) AS receiving_length,customer_name,uom,
COUNT(quantiy) AS receiving_quantity, cubic_number
FROM item_receiving
GROUP BY work_order_number";
$result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));



$response = "<table border='2' width='100%'>";


$counter = 1;

$s1 = 1;
while($row1 = mysqli_fetch_assoc($result1))
{	

    //cubic number add using array push and check for receiving
    
    // if (in_array($row1['cubic_number'], $cubic_receiving))
    // {
       
    // }
    // else
    // {
    //     array_push($cubic_receiving, $row1['cubic_number']);
    // }

    // $implode_cubic_receiving = implode(", ",$cubic_receiving);

														  
    $work_order_number = $row1['work_order_number'];
    $sql2 = "SELECT 
    work_order_number,
    SUM(length) AS issuing_length,
    COUNT(quantiy) AS issuing_quantity,
    GROUP_CONCAT(barcode_code SEPARATOR ', ') as barcode_code_is, cubic_number

    FROM item_issuing
    WHERE work_order_number = '$work_order_number'
    GROUP BY work_order_number";

    $result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
    $row2 = mysqli_fetch_assoc($result2);


    //cubic number add using array push and check for issueing
    
    // if (in_array($row2['cubic_number'], $cubic_issueing))
    // {
       
    // }
    // else
    // {
    //     array_push($cubic_issueing, $row2['cubic_number']);
    // }

    // $implode_cubic_issueing = implode(", ",$cubic_issueing);

    //sql for receiving cubic 
    $sql_receiving_cubic = "SELECT 
    GROUP_CONCAT( DISTINCT cubic_number SEPARATOR ', ') as cubic_number_ir
    FROM item_receiving
    WHERE work_order_number = '$work_order_number'
    GROUP BY work_order_number";
    $result_receiving_cubic = mysqli_query($con, $sql_receiving_cubic) or die(mysqli_error($con));
    $row_receiving_cubic = mysqli_fetch_assoc($result_receiving_cubic);
    $cubic_number_ir = $row_receiving_cubic['cubic_number_ir'];

    //sql for issuing cubic 
    $sql_issuing_cubic = "SELECT 
    GROUP_CONCAT(DISTINCT cubic_number SEPARATOR ', ') as cubic_number_is
    FROM item_issuing
    WHERE work_order_number = '$work_order_number'
    GROUP BY work_order_number";
    $result_issuing_cubic = mysqli_query($con, $sql_issuing_cubic) or die(mysqli_error($con));
    $row_issuing_cubic = mysqli_fetch_assoc($result_issuing_cubic);
    $cubic_number_is = $row_issuing_cubic['cubic_number_is'];

   

        
        
        $customer_name = $row1['customer_name'];
        
        $barcode_code_ir = $row1['barcode_code_ir'];
        $barcode_code_is = $row2['barcode_code_is'];
        $uom = $row1['uom'];
        $receiving_length = $row1['receiving_length'];
        $issuing_length = $row2['issuing_length'];

        $length = $row1['receiving_length']-$row2['issuing_length'];

        $receiving_quantity = $row1['receiving_quantity'];
        $issuing_quantity = $row2['issuing_quantity'];
        $quantity = $row1['receiving_quantity']-$row2['issuing_quantity'];
        
        $explode_barcode_for_receive = explode(", ",$barcode_code_ir);
        //asort($explode_barcode_for_receive);

        $explode_barcode_for_issue = explode(", ",$barcode_code_is);
        //asort($explode_barcode_for_issue);

        //var_dump($explode_barcode_for_receive);
        $available_stock = array_diff($explode_barcode_for_receive, $explode_barcode_for_issue);
        $available_stock = implode(", ",$available_stock);

        // $clength = count($available_stock);
        // for($x = 0; $x < $clength; $x++) 
        // {
        //     $available_stock[$x];
        // }

        //$available_stock = str_replace($barcode_code_is, '' ,$barcode_code_ir,$i)
                
            ?>	
             <tr>
                <td style="border: 2px solid black;"><?php echo $s1; ?></td>
                <td style="border: 2px solid black;"><?php echo $customer_name; ?></td>
                
                <td style="border: 2px solid black;"><?php echo $work_order_number; ?></td>

                <td style="border: 2px solid black;"><?php echo $receiving_length;?></td>
                <td style="border: 2px solid black;"><?php echo $issuing_length;?></td>  
                <td style="border: 2px solid black;"><?php echo $length;?></td> 

                

                <td style="border: 2px solid black;"><?php echo $receiving_quantity;?></td>
                <td style="border: 2px solid black;"><?php echo $issuing_quantity;?></td>  

                <td style="border: 2px solid black;"><?php echo $quantity; ?></td>

                <td style="border: 2px solid black;"><?php echo $uom; ?></td>
                <td style="border: 2px solid black;">
                    <?php 
                        echo $barcode_code_ir; 
                        // var_dump($explode_barcode_for_receive);
                    ?>
                </td>
                <td style="border: 2px solid black;">
                    <?php 
                        echo $barcode_code_is; 
                        // var_dump($explode_barcode_for_issue);
                    ?>
                </td>

                <td style="border: 2px solid black;">
                    <?php  
                        // var_dump($available_stock); 
                        echo $available_stock;
                    ?>
                </td>

                <td style="border: 2px solid black;">
                    <?php  
                        echo $cubic_number_ir;
                    ?>
                </td>

                <td style="border: 2px solid black;">
                    <?php  
                        echo $cubic_number_is;
                    ?>
                </td>
                                        
                
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

    <div>
        <button id="excel_button" class="btn btn-success">
            <a id="downloadLink" onclick="exportF(this)" style="color: white;">Export to excel</a>
        </button> 
    </div>
    
</div> <!-- End of <div class="col-sm-12 col-md-12 col-lg-12"> -->


<script>

function exportF(elem) {
    var table = document.getElementById("element");
    var html = table.innerHTML;
    var url = 'data:application/vnd.ms-excel,' + escape(html); // Set your html table into url 
    elem.setAttribute("href", url);
    elem.setAttribute("download", "stock_report_with_barcode.xls"); // Choose the file name
    return false;
}

</script>