<?php
session_start();
require_once("../login/session.php");
include('../login/db_connection_class.php');
$obj = new DB_Connection_Class();
$obj->connection();

?>


<style>

.form-group		/* This is for reducing Gap among Form's Fields */
{

	margin-bottom: 5px;

}

</style>




<script>


  function sending_data_for_delete_po(po_id)
 {
       var div=$('#table_load').html();
       var url_encoded_form_data = 'po_id='+po_id;
       
		  	 $.ajax({
			 		url: 'list/po_creation_deleting.php',
			 		dataType: 'text',
			 		type: 'post',
			 		contentType: 'application/x-www-form-urlencoded',
			 		data: url_encoded_form_data,
			 		success: function( data, textStatus, jQxhr )
			 		{
			 				alert(data);

			 				if(data=='PO is successfully Deleted.')
			 				{
			 					/*alert("ok");*/
                              
			 					
                              
                              /*$('#table_load').html(div);*/
                              /*$('#datatable-buttons').DataTable().ajax.reload();*/

			 					
			 				}
			 		},
			 		error: function( jqXhr, textStatus, errorThrown )
			 		{
			 				//console.log( errorThrown );
			 				alert(errorThrown);
			 		}
			 }); // End of $.ajax({



 }//End of function sending_data_of_color_form_for_delete_from_database()


 

</script>
<div class="col-sm-12 col-md-12 col-lg-12">
    <div id="for_all_page_load">
		<div class="panel panel-default"> <!-- This div will create a block/panel for FORM -->

				<div class="panel-heading" style="color:#191970;"><b>PO List</b></div> <!-- This will create a upper block for FORM (Just Beautification) -->

				   <nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item active" aria-current="page">Home</li>
					     <li class="breadcrumb-item"><a onclick="load_page('list/po_list.php')">PO List</a></li>
					  </ol>
					</nav>

		</div> <!-- End of <div class="panel panel-default"> -->
        






   <div class="panel panel-default" id="table_load">

        

   
       <div class="form-group form-group-sm">
	         <label class="control-label " for="search" >PO List</label>
	   </div> <!-- End of <div class="form-group form-group-sm" -->


        <div class="form-group form-group-sm" >
          <table id="datatable-buttons" class="table table-striped table-bordered" >
         	<thead >
                 <tr>
                 <th style="text-align: center;">SI</th>
                 <th style="text-align: center;">PO Number</th>
                 <th style="text-align: center;">Customer Name</th>
                 <th style="text-align: center;">Buyer Name</th>
                 <th style="text-align: center;">PO Order Date</th>
                 <th style="text-align: center;">PO Delivery Date</th>
                 <th style="text-align: center;">Responsible Person</th>
                 <th style="text-align: center;">Product Category</th>
                 <th style="text-align: center;">Order type</th>
                 <th style="text-align: center;">PO Quantity</th>
                 <th style="text-align: center;">Action</th>
                 </tr>
            </thead>
            <tbody>
            <?php 
                            $s1 = 1;
                            $sql_for_color = "SELECT * FROM po_creation ORDER BY row_id ASC";

                            $res_for_color = mysqli_query($con, $sql_for_color);

                            while ($row = mysqli_fetch_assoc($res_for_color)) 
                            {
             ?>

             <tr>
                <td><?php echo $s1; ?></td>
                <td style="display: none;"><?php echo $row['po_id']; ?></td>
                <td><?php echo $row['po_number']; ?></td>
                <td><?php echo $row['customer_name']; ?></td>
                <td><?php echo $row['buyer_name']; ?></td>
                <td><?php echo $row['po_order_received_date']; ?></td>
                <td><?php echo $row['product_delivery_date']; ?></td>
                <td><?php echo $row['responsible_person']; ?></td>
                <td><?php echo $row['product_category']; ?></td>
                <td><?php echo $row['order_type']; ?></td>
                <td><?php echo $row['po_quantity']; ?></td>
                <td>
                      
                        
                        <button type="submit" id="edit_po" name="edit_po"  class="btn btn-primary btn-xs" onclick="load_page('list/edit_po_creation.php?po_id=<?php echo $row['po_id'] ?>')"> Edit </button>
                       <span>  </span>
              
                      

                        <button type="submit" id="delete_po" name="delete_po"  class="btn btn-danger btn-xs" onclick="sending_data_for_delete_po('<?php echo $row['po_id'] ?>')"> Delete </button>
                 </td>
                <?php
                              
                $s1++;
                                 }
                 ?> 
             </tr>
          </tbody>
         </table>
 
        </div> <!-- End of <div class="form-group form-group-sm" -->
        
         <!-- 	<script>
	              $(document).ready(function() {
					    $('#datatable-buttons').DataTable( {
					        initComplete: function () {
					            this.api().columns().every( function () {
					                var column = this;
					                var select = $('<select><option value=""></option></select>')
					                    .appendTo( $(column.footer()).empty() )
					                    .on( 'change', function () {
					                        var val = $.fn.dataTable.util.escapeRegex(
					                            $(this).val()
					                        );
					 
					                        column
					                            .search( val ? '^'+val+'$' : '', true, false )
					                            .draw();
					                    } );
					 
					                column.data().unique().sort().each( function ( d, j ) {
					                    select.append( '<option value="'+d+'">'+d+'</option>' )
					                } );
					            } );
					        }
					     } );
					  } );
		   </script> -->

      </div>  <!-- End of <div class="panel panel-default"> -->
    </div>  <!-- End of <div id="for_all_page_load"> -->
</div> <!-- End of <div class="col-sm-12 col-md-12 col-lg-12"> -->





