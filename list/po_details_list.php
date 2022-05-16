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


<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js"></script> -->



<script>

	


  function sending_data_for_delete_po_details(po_details_id)
 {
       var div=$('#table_load').html();
       var url_encoded_form_data = 'po_details_id='+po_details_id;
       
		  	 $.ajax({
			 		url: 'list/po_details_deleting.php',
			 		dataType: 'text',
			 		type: 'post',
			 		contentType: 'application/x-www-form-urlencoded',
			 		data: url_encoded_form_data,
			 		success: function( data, textStatus, jQxhr )
			 		{
			 				alert(data);

			 				if(data=='Color is successfully Deleted.')
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
					     <li class="breadcrumb-item"><a onclick="load_page('list/po_details_list.php')">PO Details List</a></li>
					  </ol>
					</nav>

		</div> <!-- End of <div class="panel panel-default"> -->
        






   <div class="panel panel-default" id="table_load">

        

   
       <div class="form-group form-group-sm">
	         <label class="control-label " for="search" >PO Details List</label>
	   </div> <!-- End of <div class="form-group form-group-sm" -->


        <div class="form-group form-group-sm" >
          <table id="po_details_table" class="table table-striped table-bordered" >
         	<thead >
                 <tr>
                 <th style="text-align: center;">SI</th>
                 <th style="text-align: center;">PO Number</th>
                 <th style="text-align: center;">Measurement of Cartoon Length</th>
                 <th style="text-align: center;">Measurement of Cartoon Width</th>
                 <th style="text-align: center;">Measurement of Cartoon Height</th>
                 <th style="text-align: center;">Measurement of Cartoon Ply</th>
                 <th style="text-align: center;">Flute Type</th>
                 <th style="text-align: center;">Printing Status</th>
                 <th style="text-align: center;">Action</th>
                 </tr>
            </thead>
            <tbody>
            <?php 
                            $s1 = 1;
                            $sql_for_color = "SELECT * FROM po_details ORDER BY row_id ASC";

                            $res_for_color = mysqli_query($con, $sql_for_color);

                            while ($row = mysqli_fetch_assoc($res_for_color)) 
                            {
             ?>

             <tr>
                <td><?php echo $s1; ?></td>
                <td style="display: none;"><?php echo $row['po_details_id']; ?></td>
                <td><?php echo $row['po_number']; ?></td>
                <td><?php echo $row['measurement_of_carton_length']; ?></td>
                <td><?php echo $row['measurement_of_carton_width']; ?></td>
                <td><?php echo $row['measurement_of_cartoon_height']; ?></td>
                <td><?php echo $row['measurement_of_cartoon_ply']; ?></td>
                <td><?php echo $row['flute_type']; ?></td>
                <td><?php echo $row['printing_status']; ?></td>
                <td>
                      
                        
                        <button type="submit" id="edit_po_details" name="edit_po_details"  class="btn btn-primary btn-xs" onclick="load_page('list/edit_po_details.php?po_details_id=<?php echo $row['po_details_id'] ?>')"> Edit </button>
                       <span>  </span>
              
                      

                        <button type="submit" id="delete_po_details" name="delete_po_details"  class="btn btn-danger btn-xs" onclick="sending_data_for_delete_po_details('<?php echo $row['po_details_id'] ?>')"> Delete </button>
                 </td>
                <?php
                              
                $s1++;
                                 }
                 ?> 
             </tr>
          </tbody>
         </table>
 
        </div> <!-- End of <div class="form-group form-group-sm" -->
        
         	<!-- <script>
	              $(document).ready(function() {
					    $('#po_details_table').DataTable( {
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

	<!-- <script>
    $(document).ready(function() {
      $('#po_details_table').DataTable();
       } );
  </script> -->





