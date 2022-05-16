<?php
session_start();
require_once("login/db_session_chk.php");

$user_name=$_SESSION['user_name'];
$user_id=$_SESSION['user_id'];
$user_type=$_SESSION['user_type'];
$select_sql_for_user="SELECT `profile_picture` FROM `user_login` WHERE `user_name`='$user_name'";
$result= mysqli_query($con, $select_sql_for_user) or die(mysqli_error($con));
$row=mysqli_fetch_assoc($result);
?>


<aside class="main-sidebar">
		  <!-- sidebar: style can be found in sidebar.less -->
		  <section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					  <div class="pull-left image">
						<img src="img/<?php echo $row['profile_picture'] ?>" class="img-circle" alt="User Image">
					  </div>
					  <div class="pull-left info">
						<p><?php echo $user_name?></p>
						<a><i class="fa fa-circle text-success"></i> Online</a>
					  </div>
				</div>
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu" data-widget="tree">
				
					 
					  <li class="treeview" id="settings_menu">

					  			<a href="#">
								  <i class="fa fa-barcode"></i>
								  <span>Settings</span>
								  <span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
								  </span>
								</a>     
								<ul class="treeview-menu">

								  <li><a onClick="load_page('settings/customer.php')"><i class="fa fa-circle-o"></i>Add Customer</a></li>

								  <li><a onClick="load_page('settings/buyer.php')"><i class="fa fa-circle-o"></i>Add Buyer</a></li>

								 
								</ul> <!-- End of <ul class="treeview-menu"> -->
								
					  </li> <!-- End of <li class="treeview" id="main_product_menu"> -->



					   <li class="treeview" id="main_process_menu">

					  			<a href="#">
								  <i class="fa fa-barcode"></i>
								  <span>Process</span>
								  <span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
								  </span>
								</a>     
								<ul class="treeview-menu">

								  <li><a onClick="load_page('process/po_creation.php')"><i class="fa fa-circle-o"></i>PO Creation</a></li>
								  <li><a onClick="load_page('process/po_details.php')"><i class="fa fa-circle-o"></i>PO Details</a></li>
								  <li><a onClick="load_page('process/adding_process_route_for_po.php')"><i class="fa fa-circle-o"></i>Adding Process Route for PO</a></li>
								  <li><a onClick="load_page('process/travel_card_info.php')"><i class="fa fa-circle-o"></i>Travel Card Info</a></li>
								  <li><a onClick="load_page('process/process_wise_travel_card.php')"><i class="fa fa-circle-o"></i>Process Wise Travel Card</a></li> 
								  
								</ul> <!-- End of <ul class="treeview-menu"> -->
								
					  </li> <!-- End of <li class="treeview" id="main_product_menu"> -->	



					 

					  <li class="treeview" id="report_menu">

					  			<a href="#">
								  <i class="fa fa-barcode"></i>
								  <span>Report</span>
								  <span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
								  </span>
								</a>     
								<ul class="treeview-menu">
                                  
                                  <li><a onClick="load_page('travel_card_report/over_all_travel_card_info.php')"><i class="fa fa-circle-o"></i>Over All Travel Card Report</a></li> 
								  <li><a onClick="load_page('travel_card_report/travel_card_report.php')"><i class="fa fa-circle-o"></i>Travel Card Report</a></li>  
								  <li><a onClick="load_page('travel_card_report/po_wise_travel_card_report.php')"><i class="fa fa-circle-o"></i>PO Wise Report</a></li> 
								   
								  
								</ul> <!-- End of <ul class="treeview-menu"> -->
								
					  </li> <!-- End of <li class="treeview" id="main_product_menu"> -->			  
					  
				</ul> <!-- End of <ul class="sidebar-menu" data-widget="tree"> -->
				
		  </section>
		  <!-- /.sidebar -->
</aside> <!-- End of <aside class="main-sidebar"> -->
                
		