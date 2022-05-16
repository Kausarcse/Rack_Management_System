<?php
session_start();

// include('../db_znzqc_connection_class.php');
// $obj2 = new DB_Connection_Class();
// $obj2->connection();

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();





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



//  function item_info_report()
//  {
 	
 

 	
//  		$.ajax({
// 	 		url: 'report/item_info_details_report.php',
// 	 		dataType: 'text',
// 	 		type: 'post',
// 	 		contentType: 'application/x-www-form-urlencoded',
// 	 		data: {},
// 	 		success: function( data, textStatus, jQxhr )
// 	 		{
// 	 				//  alert(data);
// 	 				document.getElementById('details_info').innerHTML=data;
// 	 				datatable_script();
// 	 		},
// 	 		error: function( jqXhr, textStatus, errorThrown )
// 	 		{
// 	 				//console.log( errorThrown );
// 	 				alert(errorThrown);
// 	 		}
// 	 	}); // End of $.ajax({
 	

//  }



$('.for_auto_complete').chosen();

</script>
<div class="col-sm-12 col-md-12 col-lg-12">
	<div id='element'>

		<div class="panel panel-default"> <!-- This div will create a block/panel for FORM -->

				<div class="panel-heading" style="color:#191970;"><b>Item Info Report</b></div> <!-- This will create a upper block for FORM (Just Beautification) -->

				<div class="form-group form-group-sm" id="datewise_transaction_details" style="overflow: auto;">

			         <table id="datatable-buttons" class="table table-striped table-bordered" >
			         	<thead>
			                 <tr>
				                 <th style="border: 2px solid black;">SI</th>
				                 <th style="border: 2px solid black;">Customer Name</th>
                                 <th style="border: 2px solid black;">GD Number</th>
                                 <th style="border: 2px solid black;">Work Order Number</th>
                                 <th style="border: 2px solid black;">Shade</th>
                                 <th style="border: 2px solid black;">Composition</th>
                                 <th style="border: 2px solid black;">Weave</th>
                                 <th style="border: 2px solid black;">Construction</th>
                                 <th style="border: 2px solid black;">Finished Width</th> 
                                 <th style="border: 2px solid black;">Finished Type</th>
                                 <th style="border: 2px solid black;">On Hand Stock</th>
                                 <th style="border: 2px solid black;">Unit Of Measurement</th>
                                 <th style="border: 2px solid black;">Total Roll</th>
				                     
				            
			                 </tr>
			            </thead>
			            <tbody>
			            <?php 


                              
                            $sql = "SELECT  *
                            FROM  item_info";

                            $result = mysqli_query($con, $sql) or die(mysqli_error($con));
							   $s1 = 1;
							while ($row = mysqli_fetch_array($result)) 
							{
                                
								$customer_name = $row['customer_name'];
                                $gd_number = $row['gd_number'];
                                $work_order_number = $row['work_order_number'];
                                $shade = $row['shade'];
                                $composition = $row['composition'];
                                $weave = $row['weave'];
                                $construction = $row['construction'];
                                $finished_width = $row['finished_width'];
                                $finished_type = $row['finished_type'];
                                $on_hand_stock = $row['on_hand_stock'];
                                $uom = $row['uom'];
                                $total_roll = $row['total_roll'];
                                
	
				            ?>	
				             <tr>
				                <td style="border: 2px solid black;"><?php echo $s1; ?></td>
                                <td style="border: 2px solid black;"><?php echo $customer_name; ?></td>
                                <td style="border: 2px solid black;"><?php echo $gd_number; ?></td>
                                <td style="border: 2px solid black;"><?php echo $work_order_number; ?></td>
                                <td style="border: 2px solid black;"><?php echo $shade; ?></td>
                                <td style="border: 2px solid black;"><?php echo $composition; ?></td>
                                <td style="border: 2px solid black;"><?php echo $weave; ?></td>
                                <td style="border: 2px solid black;"><?php echo $construction; ?></td>
                                <td style="border: 2px solid black;"><?php echo $finished_width; ?></td>
                                <td style="border: 2px solid black;"><?php echo $finished_type; ?></td>
                                <td style="border: 2px solid black;"><?php echo $on_hand_stock; ?></td>
                                <td style="border: 2px solid black;"><?php echo $uom; ?></td>
                                <td style="border: 2px solid black;"><?php echo $total_roll; ?></td>

                                
				                <?php
				                              
				                $s1++;
	                        }
			             ?>
			             </tr>
			          </tbody>
			         </table>

			    </div> <!-- End of <div class="form-group form-group-sm" -->

				 

		</div> <!-- End of <div class="panel panel-default"> -->

    </div> <!-- end of </div> -->

    <div id="details_info">
							
	</div>

    <div>
        <button id="excel_button" class="btn btn-success"><a id="downloadLink" onclick="exportF(this)" style="color: white;">Export to excel</a>
        </button>
    </div>

</div> <!-- End of <div class="col-sm-12 col-md-12 col-lg-12"> -->

<script>

  function exportF(elem) 
  {
    var table = document.getElementById("datewise_transaction_details");
    var html = table.innerHTML;
    var url = 'data:application/vnd.ms-excel,' + escape(html); // Set your html table into url 
    elem.setAttribute("href", url);
    elem.setAttribute("download", "item_info_report.xls"); // Choose the file name
    return false;
  }

function generate_pdf_for_po_wise_production_summary(){
    
     let nbPages = 1;
    let sourceHtml = $('#element');

    
    html2pdf(sourceHtml[0], {
      margin: 1,
      filename: 'item_info_report.pdf',
      image: { type: 'jpeg', quality: 0.98 },
     
      html2canvas: { dpi: 600, letterRendering: true, width: 2000, height: 3000  },
      jsPDF: { unit: 'pt', format: 'a4', orientation: 'portrait' }
    });  
}
</script>


