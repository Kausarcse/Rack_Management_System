<?php
session_start();
error_reporting(0);

// include('../db_znzqc_connection_class.php');
// $obj2 = new DB_Connection_Class();
// $obj2->connection();

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$id = $_GET['id'];



$sql_for_update_plan = "SELECT * FROM  `unloading_plan` WHERE `id`='$id'";
$result_for_update_plan = mysqli_query($con,$sql_for_update_plan) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($result_for_update_plan);

$date_of_delivery = $row['date_of_delivery']; 

$date_of_delivery_split = explode("/",$date_of_delivery);

$date_of_delivery = $date_of_delivery_split[1]."/".$date_of_delivery_split[0]."/".$date_of_delivery_split[2];

$work_order_number = $row['work_order_number'];


//$user_id = $_SESSION['user_id'];
//$password = $_SESSION['password'];




// $sql="select * from user_login where user_id='$user_id' and `password`='$password'";

// $result=mysqli_query($con,$sql) or die(mysqli_error($con));

// $row = mysqli_fetch_assoc($result);

// if(mysqli_num_rows($result)<1)
// {

//  header('Location: ../../logout.php');

// }

// else
// {
//  $created_by = $row['user_id'];
//  $creator_full_name = $row['user_name'];
//  $creator_division = $row['organization_name'];
//  $creator_dept = $row['user_type'];
//  $location = $row['organization_location'];
// }

?>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>


<style>

.form-group     /* This is for reducing Gap among Form's Fields */
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

function find_work_order_wise_report()
{
    var work_order=document.getElementById('work_order').value;
    var length=document.getElementById('length').value;
    var date_of_delivery=document.getElementById('date_of_delivery').value;

    $.ajax({
            url: 'report/find_work_order_and_quantity_wise_unloading_report.php',
            dataType: 'text',
            type: 'post',
            contentType: 'application/x-www-form-urlencoded',
            data: {work_order:work_order, length:length, date_of_delivery:date_of_delivery},
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

function find_work_order_wise_report_update()
{
    var id = document.getElementById('id').value;
    var work_order_number=document.getElementById('work_order_number').value;
    var length=document.getElementById('length').value;
    var date_of_delivery=document.getElementById('date_of_delivery').value;
    var new_delivery_date=document.getElementById('new_delivery_date').value;

   



    $.ajax({
            url: 'report/find_work_order_and_quantity_wise_unloading_report_update.php',
            dataType: 'text',
            type: 'post',
            contentType: 'application/x-www-form-urlencoded',
            data: {id:id, work_order_number:work_order_number, length:length, date_of_delivery:date_of_delivery, new_delivery_date: new_delivery_date},
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

 function date_wise_unloading_maping_report_updating()
 {

    var id = document.getElementById('id').value; 
    var buyer=document.getElementById('buyer').value;
    var garments=document.getElementById('garments').value;
    var ac_holder=document.getElementById('ac_holder').value;
    var fabrication=document.getElementById('fabrication').value;
    var composition=document.getElementById('composition').value;
    var weave=document.getElementById('weave').value;
    var width=document.getElementById('width').value;
    var process_name =document.getElementById('process').value;
    var gd_number =document.getElementById('gd_number').value;
    var pi_number =document.getElementById('pi_number').value;
    var pp_number =document.getElementById('pp_number').value;
    var work_order_number =document.getElementById('work_order_number').value;
    var color_or_design =document.getElementById('color_or_design').value;
    var order_qty =document.getElementById('order_qty').value;
    var grade_a =document.getElementById('grade_a').value;
    var grade_b =document.getElementById('grade_b').value;
    var total_stock =document.getElementById('total_stock').value;
    var number_of_roll =document.getElementById('number_of_roll').value;
    var date_of_delivery =document.getElementById('date_of_delivery').value;
    var new_delivery_date =document.getElementById('new_delivery_date').value;
    var all_cubics =document.getElementById('all_cubics').value;
    var all_barcodes =document.getElementById('all_barcodes').value;
    var delivery_quantity =document.getElementById('length').value;




    $.ajax({
            url: 'report/unloading_maping_report_updating.php',
            dataType: 'text',
            type: 'post',
            contentType: 'application/x-www-form-urlencoded',
            data: {id:id, work_order_number:work_order_number, delivery_quantity:delivery_quantity, buyer:buyer, garments:garments, ac_holder:ac_holder, fabrication:fabrication, composition: composition, weave:weave, width:width, process_name:process_name, gd_number:gd_number, pi_number:pi_number, pp_number:pp_number, color_or_design:color_or_design, order_qty:order_qty, grade_a:grade_a, grade_b:grade_b, total_stock:total_stock, number_of_roll:number_of_roll, date_of_delivery:date_of_delivery, new_delivery_date: new_delivery_date, all_cubics:all_cubics, all_barcodes:all_barcodes},
            success: function( data, textStatus, jQxhr )
            {
                    alert(data);
                    //document.getElementById('details_info').innerHTML=data;
                    // datatable_script();
            },
            error: function( jqXhr, textStatus, errorThrown )
            {
                    //console.log( errorThrown );
                    alert(errorThrown);
            }
        }); // End of $.ajax({
 }

$('.for_auto_complete').chosen();

</script>
<div class="col-sm-12 col-md-12 col-lg-12">
    <div id='element'>

        <div class="panel panel-default" > <!-- This div will create a block/panel for FORM -->

                <div class="panel-heading" style="color:#191970;"><b>Update delivery plan report</b></div> <!-- This will create a upper block for FORM (Just Beautification) -->

                <form class="form-horizontal row" action="" style="margin-top:10px;" method="post" name="attendance_management_device_information_form" id="attendance_management_device_information_form">

                    <div class="col-md-12">

                        <input type="hidden" name="id" id="id" value="<?php echo $id?>">


                       <div class="form-group form-group-md" id="form-group_for_date_of_delivery">
								<label class="control-label col-md-3" for="date_of_delivery" style="color:#00008B;">Existing Delivery Date :</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="date_of_delivery" name="date_of_delivery" value="<?php echo $date_of_delivery;?>" readonly>
								</div>
				
								
						</div> 

                        
                      <div class="form-group form-group-md" id="form-group_for_received_by">

                            <label class="control-label col-md-3" for="work_order" style="margin-right:0px; color:#00008B;">Work Order:</label>
                                <div class="col-md-5 field_container">
                                    <input type="text" class="form-control" id="work_order_number" name="work_order_number" value="<?php echo $work_order_number;?>" readonly>
                                </div>
                        </div>



                        <div class="form-group form-group-md" id="form-group_for_new_delivery_date">
								<label class="control-label col-md-3" for="new_delivery_date" style="color:#00008B;">Change Delivery Plan Date :</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="new_delivery_date" name="new_delivery_date" placeholder="Enter new delivery date" autocomplete="off" required>
								</div>
								<div class="col-md-3"  >
									<input type="text" class="form-control" id="alternate_new_delivery_date" name="alternate_new_delivery_date" readonly>
								</div>
								<i class="glyphicon glyphicon-remove" onclick="Remove_Value_Of_This_Element('new_delivery_date')" style="margin-top:6px;"></i>
						</div> 
								<script>
									$( function()
									{
										$( "#new_delivery_date" ).datepicker(
										{
											showWeek: true, // This is for Showing Week in Datepicker Calender.
											altField: "#alternate_new_delivery_date", // This is for Descriptive Date Showing in Alternative Field.
											altFormat: "DD, d MM, yy" // This is for Descriptive Date Format in Alternative Field.
										}
										); 

										$( "#new_delivery_date" ).datepicker( "option", "dateFormat", "dd/mm/yy" ); // This is for Date Format in Actual Date Field.
										$( "#new_delivery_date" ).datepicker( "option", "showAnim", "drop" ); // This is for Datepicker Calender Animation in Actual Date Field.
									}
									); // End of $( function()
								</script>

                        <div class="form-group form-group-md" id="form-group_for_received_by">
                        
                            <label class="control-label col-md-3" for="length" style="margin-right:0px; color:#00008B;">Length (YDS):</label>
                                <div class="col-md-5">

                                    <input type="number" class="form-control" id="length" name="length" onchange="find_work_order_wise_report_update()"> 
                                    
                                </div>
                        </div>  
                        

                    </div>


                </form>

        </div> <!-- End of <div class="panel panel-default"> -->


        <div id="details_info">
            
        </div>

        </div> <!-- end of </div> -->

    
</div> <!-- End of <div class="col-sm-12 col-md-12 col-lg-12"> -->