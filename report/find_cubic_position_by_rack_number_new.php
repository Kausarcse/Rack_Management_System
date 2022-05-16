<?php

session_start();

// include('../db_znzqc_connection_class.php');
// $obj2 = new DB_Connection_Class();
// $obj2->connection();

include('../login/db_connection_class.php');
$obj = new DB_Connection_Class_Main();
$obj->connection();

$rack_number = $_POST['rack_number'];


?>

<div class="form-group form-group-md" id="form-group_for_cubic_number_position">
							<div><h1>Cubic Positions</h1></div>
								<div class="col-md-12 field_container">
									          <?php
												  	$sql = "SELECT  `cubic_number`, `rack_number`
																FROM  cubic_number_position
                                                                where `rack_number` = '$rack_number'
                                                                order by id asc";

																

													$result = mysqli_query($con, $sql) or die(mysqli_error($con));
													

													// while($row = mysqli_fetch_array($result))
													// {
													
													// 	$cubic_number = $row['cubic_number'];
													// 	echo '<button type="button" class="btn btn-success btn-lg test"  value="'.$cubic_number.'" onClick="cubic_details()">'.$cubic_number.'</button>';
														
												
													// }
													while($row = mysqli_fetch_array($result))
													{		

													$cubic_number = $row['cubic_number'];
													$rack_number = $row['rack_number'];

													$sql2 = "SELECT SUM(`length`) as length_ir FROM `item_receiving` WHERE  `cubic_number` = '$cubic_number' AND `active` = '1'";

													$result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
													$row2 = mysqli_fetch_assoc($result2);




													if(($row2['length_ir'] ) > 0 && ($row2['length_ir'] ) < 2200)
													{
													echo '<button type="button" class="btn btn-warning btn-lg test"  value="'.$cubic_number.'" onClick="cubic_details(this.value)">'.$cubic_number.'</button>';
													}
													else if($row2['length_ir'] >= 2200)
													{
													echo '<button type="button" class="btn btn-danger btn-lg test"  value="'.$cubic_number.'" onClick="cubic_details(this.value)">'.$cubic_number.'</button>';
													}
													else
													{
													echo '<button type="button" class="btn btn-success btn-lg test"  value="'.$cubic_number.'">'.$cubic_number.'</button>';
													}


													}

											    ?>
									
								</div>
						</div>