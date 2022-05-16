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

 function date_wise_unloading_maping_report_save()
 {
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
    var grade_a =document.getElementById('grade_a').value;
    var grade_b =document.getElementById('grade_b').value;
    var total_stock =document.getElementById('total_stock').value;
    var number_of_roll =document.getElementById('number_of_roll').value;
    var date_of_delivery =document.getElementById('date_of_delivery').value;
    var all_cubics =document.getElementById('all_cubics').value;
    var all_barcodes =document.getElementById('all_barcodes').value;

    var delivery_quantity =document.getElementById('length').value;
    var work_order_number =document.getElementById('work_order').value;

    var order_qty=document.getElementById('order_qty').value;
    var allownce=document.getElementById('allownce').value;
    var rate=document.getElementById('rate').value;
    var process =document.getElementById('process').value;
    var pi_no=document.getElementById('pi_no').value;
    var cut_width=document.getElementById('cut_width').value;
    var style_no=document.getElementById('style_no').value;

    $.ajax({
            url: 'report/unloading_maping_report_saving.php',
            dataType: 'text',
            type: 'post',
            contentType: 'application/x-www-form-urlencoded',
            data: {work_order_number:work_order_number, delivery_quantity:delivery_quantity, buyer:buyer, garments:garments, ac_holder:ac_holder, fabrication:fabrication, composition: composition, weave:weave, width:width, process_name:process_name, gd_number:gd_number, pi_number:pi_number, pp_number:pp_number, color_or_design:color_or_design, grade_a:grade_a, grade_b:grade_b, total_stock:total_stock, number_of_roll:number_of_roll, date_of_delivery:date_of_delivery, all_cubics:all_cubics, all_barcodes:all_barcodes, order_qty:order_qty, allownce:allownce, rate:rate, process:process, pi_no:pi_no, cut_width:cut_width, style_no:style_no},
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

                <div class="panel-heading" style="color:#191970;"><b>Work Order Wise Stock Report</b></div> <!-- This will create a upper block for FORM (Just Beautification) -->

                <form class="form-horizontal row" action="" style="margin-top:10px;" method="post" name="attendance_management_device_information_form" id="attendance_management_device_information_form">

                    <div class="col-md-12">

                      <div class="form-group form-group-md" id="form-group_for_date_of_receipt">
                                <label class="control-label col-md-3" for="date_of_delivery" style="color:#00008B;">Date :</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="date_of_delivery" name="date_of_delivery" placeholder="Enter Date Of Delivery" autocomplete="off" required>
                                </div>
                        </div> 
                                <script>
                                    $( function()
                                    {
                                        $( "#date_of_delivery" ).datepicker(
                                        {
                                            showWeek: true, // This is for Showing Week in Datepicker Calender.
                                            altField: "#alternate_date_of_receipt", // This is for Descriptive Date Showing in Alternative Field.
                                            altFormat: "DD, d MM, yy" // This is for Descriptive Date Format in Alternative Field.
                                        }
                                        ); 

                                        $( "#date_of_delivery" ).datepicker( "option", "dateFormat", "mm/dd/yy" ); // This is for Date Format in Actual Date Field.
                                        $( "#date_of_delivery" ).datepicker( "option", "showAnim", "drop" ); // This is for Datepicker Calender Animation in Actual Date Field.
                                    }
                                    ); // End of $( function()
                                </script>

                        
                      <div class="form-group form-group-md" id="form-group_for_received_by">

                            <label class="control-label col-md-3" for="work_order" style="margin-right:0px; color:#00008B;">Work Order:</label>
                                <div class="col-md-5 field_container">
                                    <select  class="form-control for_auto_complete" id="work_order" name="work_order" onchange="find_work_order_wise_report()">
                                                <option>Select Work Order</option>
                                                <?php
                                                    $sql = "SELECT work_order_number
                                                                FROM  item_info";
                                                    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
                                                    while($row = mysqli_fetch_array($result))
                                                    {       
                                                          $work_order = $row['work_order_number'];
                                                          echo '<option value="'.$work_order.'">'.$work_order.'</option>';
                                                    }

                                                ?>
                                    </select>
                                </div>
                        </div>

                        <div class="form-group form-group-md" id="form-group_for_received_by">
                        
                            <label class="control-label col-md-3" for="length" style="margin-right:0px; color:#00008B;">Length (YDS):</label>
                                <div class="col-md-5 ">

                                    <input type="number" class="form-control" id="length" name="length" onchange="find_work_order_wise_report()">
                                    
                                </div>
                        </div>

                        


                    </div>


                </form>

        </div> <!-- End of <div class="panel panel-default"> -->


        <div id="details_info"></div>

    </div> <!-- end of </div> -->

    
</div> <!-- End of <div class="col-sm-12 col-md-12 col-lg-12"> -->