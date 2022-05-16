<?php
session_start();

// include('../db_znzqc_connection_class.php');
// $obj2 = new DB_Connection_Class();
// $obj2->connection();
error_reporting(0);
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
.test{
    height: 60px !important;
    width: 60px !important;
    margin: 4px;
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

 function cubic_details(cubic_number)
 {
     
	 $.ajax({
	 		url: 'report/find_cubic_position_details.php',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: { cubic_number: cubic_number},
	 		success: function( data, textStatus, jQxhr)
	 		{


				    $('.modal-body').html(data);
					$('#myModal').modal('show');
				    
	 				//alert(data);
	 				//document.getElementById('details_info_2').innerHTML=data;
	 				// datatable_script();
	 		},
	 		error: function( jqXhr, textStatus, errorThrown )
	 		{
	 				//console.log( errorThrown );
	 				alert(errorThrown);
	 		}
	 	});
 }

 function return_cubic_position()
 {
	 var rack_number = document.getElementById('rack_number').value;
	 $.ajax({
	 		url: 'report/find_cubic_position_by_rack_number.php',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: { rack_number: rack_number},
	 		success: function( data, textStatus, jQxhr )
	 		{
	 				//alert(data);
	 				document.getElementById('details_info').innerHTML=data;
	 				datatable_script();
	 		},
	 		error: function( jqXhr, textStatus, errorThrown )
	 		{
	 				//console.log( errorThrown );
	 				alert(errorThrown);
	 		}
	 	});
	
 }

 function sending_data_of_for_report()
 {
 	var date_form=document.getElementById('date_form').value;
 	var date_to=document.getElementById('date_to').value;
 	var work_order_number=document.getElementById('work_order_number').value;
 	var customer_name=document.getElementById('customer_name').value;
 	// var construction=document.getElementById('construction').value;
 	// var composition=document.getElementById('composition').value;
 	// var shade=document.getElementById('shade').value;
 	// var weave=document.getElementById('weave').value;

 	if ( (date_form == '') ) 
 	{
 		alert("Please provide date form");
 		document.getElementById("date_form").value = '';
 		document.getElementById("date_form").focus();
 	}

 	else if( (date_to == '') )
 	{
 		alert("Please provide date to");
 		document.getElementById("date_to").value = '';
 		document.getElementById("date_to").focus();
 	}

 	else
 	{
 		$.ajax({
	 		url: 'report/multi_category_report_details.php',
	 		dataType: 'text',
	 		type: 'post',
	 		contentType: 'application/x-www-form-urlencoded',
	 		data: {date_form: date_form, date_to: date_to, work_order_number:work_order_number, customer_name:customer_name},
	 		success: function( data, textStatus, jQxhr )
	 		{
	 				//alert(data);
	 				document.getElementById('details_info').innerHTML=data;
	 				datatable_script();
	 		},
	 		error: function( jqXhr, textStatus, errorThrown )
	 		{
	 				//console.log( errorThrown );
	 				alert(errorThrown);
	 		}
	 	}); // End of $.ajax({
 	}

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

				<div class="panel-heading" style="color:#191970;"><b>All Cubic Position Report</b></div> <!-- This will create a upper block for FORM (Just Beautification) -->

				<form class="form-horizontal row" action="" style="margin-top:10px;" method="post" name="attendance_management_device_information_form" id="attendance_management_device_information_form">

					<div class="col-md-12">

						<div class="form-group form-group-md" id="form-group_for_rack_number">
							<label class="control-label col-md-3" for="customer_name" style="margin-right:0px; color:#00008B;">Rack Number:</label>
								<div class="col-md-5 field_container">
									<select  class="form-control for_auto_complete" id="rack_number" name="rack_number" onchange="return_cubic_position()">
												<option select="selected" value="select">Select Rack Number</option>
												<?php
												  	$sql = "SELECT distinct rack_number
																FROM   cubic_number_position
                                                                order by rack_number";
													$result = mysqli_query($con, $sql) or die(mysqli_error($con));
													while($row = mysqli_fetch_array($result))
													{		
														  $rack_number = $row['rack_number'];
														  echo '<option value="'.$rack_number.'">'.$rack_number.'</option>';
													}

											    ?>
									</select>
								</div>
						</div>

						<div id="details_info">

                        <div class="form-group form-group-md" id="form-group_for_cubic_number_position">
							<div><h1>Cubic Positions</h1></div>
							<!-- <label class="control-label col-md-3" for="" style="margin-right:0px; color:#00008B;">Cubic Positions:</label> -->
								<div class="col-md-12 field_container">
									          <?php
												  	

													$sql = "SELECT  `cubic_number`, `rack_number`
																FROM  cubic_number_position
																where `rack_number` = 'A'
                                                                order by id asc";

													$result = mysqli_query($con, $sql) or die(mysqli_error($con));
											

													while($row = mysqli_fetch_array($result))
													{		
														  
                                                                $cubic_number = $row['cubic_number'];
																$rack_number = $row['rack_number'];
																$sql2 = "SELECT *
																FROM item_receiving
																where cubic_number = '$cubic_number'";                                                              

																$result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
																$row2 = mysqli_fetch_row($result2);
																if($row2 >= 1)
																{
																	echo '<button type="button" class="btn btn-danger btn-lg test"  value="'.$cubic_number.'" onClick="cubic_details(this.value)">'.$cubic_number.'</button>';
																}
																else
																{
																	echo '<button type="button" class="btn btn-success btn-lg test"  value="'.$cubic_number.'">'.$cubic_number.'</button>';
																}
                                                          
                                                          
													}

													if($rack_number == "A")
													{
														
														echo "<br>";
														echo "<br>";
														echo "<br>";

													}

													$sql = "SELECT  `cubic_number`, `rack_number`
																FROM  cubic_number_position
																where `rack_number` = 'B'
                                                                order by id asc";

													$result = mysqli_query($con, $sql) or die(mysqli_error($con));

													while($row = mysqli_fetch_array($result))
													{		
														  
														$cubic_number = $row['cubic_number'];
														$rack_number = $row['rack_number'];
														$sql2 = "SELECT *
														FROM item_receiving
														where cubic_number = '$cubic_number' ";

														$result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
														$row2 = mysqli_fetch_row($result2);
														if($row2 >= 1)
														{
															echo '<button type="button" class="btn btn-danger btn-lg test"  value="'.$cubic_number.'" onClick="cubic_details(this.value)">'.$cubic_number.'</button>';
														}
														else
														{
															echo '<button type="button" class="btn btn-success btn-lg test"  value="'.$cubic_number.'">'.$cubic_number.'</button>';
														}
                                                          
                                                          
													}

													if($rack_number == "B")
													{
														
														echo "<br>";
														echo "<br>";
														echo "<br>";

													}

													$sql = "SELECT  `cubic_number`, `rack_number`
																FROM  cubic_number_position
																where `rack_number` = 'C'
                                                                order by id asc";

													$result = mysqli_query($con, $sql) or die(mysqli_error($con));

													while($row = mysqli_fetch_array($result))
													{		
														  
														$cubic_number = $row['cubic_number'];
														$rack_number = $row['rack_number'];
														$sql2 = "SELECT *
														FROM item_receiving
														where cubic_number = '$cubic_number' ";

														$result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
														$row2 = mysqli_fetch_row($result2);
														if($row2 >= 1)
														{
															echo '<button type="button" class="btn btn-danger btn-lg test"  value="'.$cubic_number.'" onClick="cubic_details(this.value)">'.$cubic_number.'</button>';
														}
														else
														{
															echo '<button type="button" class="btn btn-success btn-lg test"  value="'.$cubic_number.'">'.$cubic_number.'</button>';
														}
                                                          
                                                          
													}

													if($rack_number == "C")
													{
														
														echo "<br>";
														echo "<br>";
														echo "<br>";

													}

													$sql = "SELECT  `cubic_number`, `rack_number`
																FROM  cubic_number_position
																where `rack_number` = 'D'
                                                                order by id asc";

													$result = mysqli_query($con, $sql) or die(mysqli_error($con));

													while($row = mysqli_fetch_array($result))
													{		
														  
														$cubic_number = $row['cubic_number'];
														$rack_number = $row['rack_number'];
														$sql2 = "SELECT *
														FROM item_receiving
														where cubic_number = '$cubic_number' ";

														$result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
														$row2 = mysqli_fetch_row($result2);
														if($row2 >= 1)
														{
															echo '<button type="button" class="btn btn-danger btn-lg test"  value="'.$cubic_number.'" onClick="cubic_details(this.value)">'.$cubic_number.'</button>';
														}
														else
														{
															echo '<button type="button" class="btn btn-success btn-lg test"  value="'.$cubic_number.'" >'.$cubic_number.'</button>';
														}
                                                          
                                                          
													}

													if($rack_number == "D")
													{
														
														echo "<br>";
														echo "<br>";
														echo "<br>";

													}

													$sql = "SELECT  `cubic_number`, `rack_number`
																FROM  cubic_number_position
																where `rack_number` = 'E'
                                                                order by id asc";

													$result = mysqli_query($con, $sql) or die(mysqli_error($con));

													while($row = mysqli_fetch_array($result))
													{		
														  
														$cubic_number = $row['cubic_number'];
														$rack_number = $row['rack_number'];
														$sql2 = "SELECT *
														FROM item_receiving
														where cubic_number = '$cubic_number' ";

														$result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
														$row2 = mysqli_fetch_row($result2);
														if($row2 >= 1)
														{
															echo '<button type="button" class="btn btn-danger btn-lg test"  value="'.$cubic_number.'" onClick="cubic_details(this.value)">'.$cubic_number.'</button>';
														}
														else
														{
															echo '<button type="button" class="btn btn-success btn-lg test"  value="'.$cubic_number.'" >'.$cubic_number.'</button>';
														}
                                                          
                                                          
													}

													if($rack_number == "E")
													{
														
														echo "<br>";
														echo "<br>";
														echo "<br>";

													}

													$sql = "SELECT  `cubic_number`, `rack_number`
																FROM  cubic_number_position
																where `rack_number` = 'F'
                                                                order by id asc";

													$result = mysqli_query($con, $sql) or die(mysqli_error($con));

													while($row = mysqli_fetch_array($result))
													{		
														  
														$cubic_number = $row['cubic_number'];
														$rack_number = $row['rack_number'];
														$sql2 = "SELECT *
														FROM item_receiving
														where cubic_number = '$cubic_number' ";

														$result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
														$row2 = mysqli_fetch_row($result2);
														if($row2 >= 1)
														{
															echo '<button type="button" class="btn btn-danger btn-lg test"  value="'.$cubic_number.'" onClick="cubic_details(this.value)">'.$cubic_number.'</button>';
														}
														else
														{
															echo '<button type="button" class="btn btn-success btn-lg test"  value="'.$cubic_number.'">'.$cubic_number.'</button>';
														}
                                                          
                                                          
													}

													if($rack_number == "F")
													{
														
														echo "<br>";
														echo "<br>";
														echo "<br>";

													}

													$sql = "SELECT  `cubic_number`, `rack_number`
																FROM  cubic_number_position
																where `rack_number` = 'G'
                                                                order by id asc";

													$result = mysqli_query($con, $sql) or die(mysqli_error($con));

													

														while($row = mysqli_fetch_array($result))
														{		
															
															$cubic_number = $row['cubic_number'];
															$rack_number = $row['rack_number'];
															$sql2 = "SELECT *
															FROM item_receiving
															where cubic_number = '$cubic_number' ";

															$result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
															$row2 = mysqli_fetch_row($result2);
															if($row2 >= 1)
															{
																echo '<button type="button" class="btn btn-danger btn-lg test"  value="'.$cubic_number.'" onClick="cubic_details(this.value)">'.$cubic_number.'</button>';
															}
															else
															{
																echo '<button type="button" class="btn btn-success btn-lg test"  value="'.$cubic_number.'">'.$cubic_number.'</button>';
															}
															
															
														}
												 if($rack_number == "G")
													{
														
														echo "<br>";
														echo "<br>";
														echo "<br>";

													}

													

													$sql = "SELECT  `cubic_number`, `rack_number`
																FROM  cubic_number_position
																where `rack_number` = 'H'
                                                                order by id asc";

													$result = mysqli_query($con, $sql) or die(mysqli_error($con));
													if($result)
													{

														while($row = mysqli_fetch_array($result))
														{		
															
															$cubic_number = $row['cubic_number'];
															$rack_number = $row['rack_number'];
															$sql2 = "SELECT *
															FROM item_receiving
															where cubic_number = '$cubic_number' ";

															$result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
															$row2 = mysqli_fetch_row($result2);
															if($row2 >= 1)
															{
																echo '<button type="button" class="btn btn-danger btn-lg test"  value="'.$cubic_number.'" onClick="cubic_details(this.value)">'.$cubic_number.'</button>';
															}
															else
															{
																echo '<button type="button" class="btn btn-success btn-lg test"  value="'.$cubic_number.'" onClick="cubic_details()">'.$cubic_number.'</button>';
															}
															
															
														}


														if($rack_number == "H")
														{
															
															echo "<br>";
															echo "<br>";
															echo "<br>";

														}


													}

													
													$sql = "SELECT  `cubic_number`, `rack_number`
																FROM  cubic_number_position
																where `rack_number` = 'I'
                                                                order by id asc";

													$result = mysqli_query($con, $sql) or die(mysqli_error($con));

													if($result)
													{
														while($row = mysqli_fetch_array($result))
														{		
															
															$cubic_number = $row['cubic_number'];
															$rack_number = $row['rack_number'];
															$sql2 = "SELECT *
															FROM item_receiving
															where cubic_number = '$cubic_number' ";

															$result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
															$row2 = mysqli_fetch_row($result2);
															if($row2 >= 1)
															{
																echo '<button type="button" class="btn btn-danger btn-lg test"  value="'.$cubic_number.'" onClick="cubic_details()">'.$cubic_number.'</button>';
															}
															else
															{
																echo '<button type="button" class="btn btn-success btn-lg test"  value="'.$cubic_number.'" onClick="cubic_details()">'.$cubic_number.'</button>';
															}
															
															
														}

														if($rack_number == "G")
														{
															
															echo "<br>";
															echo "<br>";
															echo "<br>";

														}

													}

													

													$sql = "SELECT  `cubic_number`, `rack_number`
																FROM  cubic_number_position
																where `rack_number` = 'J'
                                                                order by id asc";

													$result = mysqli_query($con, $sql) or die(mysqli_error($con));

													while($row = mysqli_fetch_array($result))
													{		
														  
														$cubic_number = $row['cubic_number'];
														$sql2 = "SELECT *
														FROM item_receiving
														where cubic_number = '$cubic_number' ";

														$result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
														$row2 = mysqli_fetch_row($result2);
														if($row2 >= 1)
														{
															echo '<button type="button" class="btn btn-danger btn-lg test"  value="'.$cubic_number.'" onClick="cubic_details()">'.$cubic_number.'</button>';
														}
														else
														{
															echo '<button type="button" class="btn btn-success btn-lg test"  value="'.$cubic_number.'" onClick="cubic_details()">'.$cubic_number.'</button>';
														}
                                                          
                                                          
													}


											    ?>
									
								</div>
						</div>
						
						</div>
						<!-- <div class="form-group form-group-sm">
							<div class="col-sm-offset-1 col-sm-5">
								<button type="button" class="btn btn-primary" onClick="sending_data_of_for_report()">Submit</button>
								<button type="reset" class="btn btn-success">Reset</button>
							</div>
						</div> -->

					</div>

				</form>

		</div> <!-- End of <div class="panel panel-default"> -->

    </div> <!-- end of </div> -->
   <div id="details_info_2"></div>


			<div class="container">

			<!-- The Modal -->
			<div class="modal fade" id="myModal">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
				
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Cubic Details</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				
				<!-- Modal body -->
				<div class="modal-body">
				
				</div>
				
				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
				
				</div>
			</div>
			</div>

			</div>


</div> <!-- End of <div class="col-sm-12 col-md-12 col-lg-12"> -->

