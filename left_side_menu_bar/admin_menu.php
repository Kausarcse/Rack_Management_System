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
				
					  <li class="header"> REPORTS </li>

					  <li class="treeview" id="main_product_menu">

								<a href="#">
								  <i class="fa fa-barcode"></i>
								  <span>Settings</span>
								  <span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
								  </span>
								</a>

								<ul class="treeview-menu">

								  <li><a onClick="load_page('cubic_number/add_cubic_number_with_end_position.php')"><i class="fa fa-circle-o"></i>Add Rack Number</a></li>
								  
								</ul> <!-- End of <ul class="treeview-menu for bin hole number"> -->

								<!-- start of packing list -->
								<a href="#">
								  <i class="fa fa-barcode"></i>
								  <span>Packing List</span>
								  <span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
								  </span>
								</a>
								<ul class="treeview-menu">

								  <li><a onClick="load_page('packing_list/entry_packing_list_data.php')"><i class="fa fa-circle-o"></i>Packing List Entry</a></li>
								  
								</ul> <!-- End of <ul class="treeview-menu"> -->

								<!-- end of packing list -->

					  
								<a href="#">
								  <i class="fa fa-barcode"></i>
								  <span>Barcode</span>
								  <span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
								  </span>
								</a>
								<ul class="treeview-menu">

								  <li><a onClick="load_page('barcode/barcode_using_search.php')"><i class="fa fa-circle-o"></i>Barcode Generate</a></li>

								  <li><a onClick="load_page('barcode/barcode_pdf.php')"><i class="fa fa-circle-o"></i>Barcode Pdf</a></li>
								  
								</ul> <!-- End of <ul class="treeview-menu"> -->

								<a href="#">
								  <i class="fa fa-barcode"></i>
								  <span>Receiving</span>
								  <span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
								  </span>
								</a>
								<ul class="treeview-menu">

								  <li><a onClick="load_page('receiving/item_receiving.php')"><i class="fa fa-circle-o"></i>Item Receiving</a></li>
								  
								</ul> <!-- End of <ul class="treeview-menu"> -->

								<a href="#">
								  <i class="fa fa-barcode"></i>
								  <span>Issuing</span>
								  <span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
								  </span>
								</a>
								<ul class="treeview-menu">

								  <li><a onClick="load_page('issuing/item_issuing.php')"><i class="fa fa-circle-o"></i>Item Issuing</a></li>
								  
								</ul> <!-- End of <ul class="treeview-menu"> -->

								<a href="#">
								  <i class="fa fa-barcode"></i>
								  <span>Move Access Roll</span>
								  <span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
								  </span>
								</a>
								<ul class="treeview-menu">

								  <li><a onClick="load_page('move_roll/item_receiving_for_moving_roll.php')"><i class="fa fa-circle-o"></i>Move Roll</a></li>
								</ul> 
								<!-- </ul> End of<ul class="tre eview-menu"> -->

								<a href="#">
								  <i class="fa fa-barcode"></i>
								  <span>Delivery</span>
								  <span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
								  </span>
								</a>
								<ul class="treeview-menu">

								  <li><a onClick="load_page('delivery/allocate_delivery_amount.php')"><i class="fa fa-circle-o"></i>Delivery Amount</a></li>
								</ul> 

								<a href="#">
								  <i class="fa fa-barcode"></i>
								  <span>Report</span>
								  <span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
								  </span>
								</a>
								<ul class="treeview-menu">

								  <!-- <li><a onClick="load_page('report/datewise_transection.php')"><i class="fa fa-circle-o"></i>Date Wise Transactiont</a></li> -->

								  <!-- <li><a onClick="load_page('report/multi_category_report.php')"><i class="fa fa-circle-o"></i>Report</a></li> -->
								  <li><a onClick="load_page('report/cubic_and_position_report.php')"><i class="fa fa-circle-o"></i>Cubic And Position</a></li>
								  <li><a onClick="load_page('report/cubic_and_position_report_new.php')"><i class="fa fa-circle-o"></i>New Cubic And Position</a></li>
								  <li><a onClick="load_page('report/date_wise_work_order_transaction.php')"><i class="fa fa-circle-o"></i>Date Wise Transaction</a></li>
								  <li><a onClick="load_page('report/date_wise_receiving_report.php')"><i class="fa fa-circle-o"></i>Date Wise Receiving</a></li>
								  <li><a onClick="load_page('report/item_info_report.php')"><i class="fa fa-circle-o"></i>Item Info</a></li>
								  <li><a onClick="load_page('report/item_wise_report.php')"><i class="fa fa-circle-o"></i>Item Wise Details</a></li>
								  <li><a onClick="load_page('report/stock_and_ageing_report.php')"><i class="fa fa-circle-o"></i>Stock and Ageing Report</a></li>
								  
								  <li><a onClick="load_page('report/work_order_wise_stock_report.php')"><i class="fa fa-circle-o"></i>Stock Report</a></li>
								  <li><a onClick="load_page('report/specefic_work_order_wise_stock_report.php')"><i class="fa fa-circle-o"></i>Work Order Wise Stock Report</a></li>
								  <li><a onClick="load_page('report/unloading_maping_report.php')"><i class="fa fa-circle-o"></i>Unloading Maping Report</a></li>	  
								  <li><a onClick="load_page('report/datewise_unloading_maping_report.php')"><i class="fa fa-circle-o"></i>Datewise Unloading Maping Report</a></li>
								  <li><a onClick="load_page('report/date_wise_unloading_mapping_report_edit.php')"><i class="fa fa-circle-o"></i>Unloading Maping Report Edit</a></li>
								  <li><a onClick="load_page('report/account_wise_stock_report.php')"><i class="fa fa-circle-o"></i>Account Wise Stock</a></li>
								  <li><a onClick="load_page('report/barcode_details.php')"><i class="fa fa-circle-o"></i>Barcode Information</a></li>
								  <li><a onClick="load_page('report/receiving_and_delivery_frequency.php')"><i class="fa fa-circle-o"></i>Receiving And Issuing Frequency</a></li>
								  <li><a onClick="load_page('report/packing_list_report.php')"><i class="fa fa-circle-o"></i>Packing List Report</a></li>
								  
								</ul> <!-- End of <ul class="treeview-menu"> -->
								
					  </li> <!-- End of <li class="treeview" id="main_product_menu"> -->				  
					  
				</ul> <!-- End of <ul class="sidebar-menu" data-widget="tree"> -->
				
		  </section>
		  <!-- /.sidebar -->
</aside> <!-- End of <aside class="main-sidebar"> -->
                
		