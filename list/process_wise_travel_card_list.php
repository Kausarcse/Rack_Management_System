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


  function sending_data_for_delete_travel_card(travel_card_id)
 {
       var div=$('#table_load').html();
       var url_encoded_form_data = 'travel_card_id='+travel_card_id;
       
		  	 $.ajax({
			 		url: 'list/travel_card_deleting.php',
			 		dataType: 'text',
			 		type: 'travel_cardst',
			 		contentType: 'application/x-www-form-urlencoded',
			 		data: url_encoded_form_data,
			 		success: function( data, textStatus, jQxhr )
			 		{
			 				alert(data);

			 				if(data=='travel_card is successfully Deleted.')
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

				<div class="panel-heading" style="color:#191970;"><b>travel_card List</b></div> <!-- This will create a upper block for FORM (Just Beautification) -->

				   <nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item active" aria-current="page">Home</li>
					     <li class="breadcrumb-item"><a onclick="load_page('list/travel_card_list.php')">Travel Card List</a></li>
					  </ol>
					</nav>

		</div> <!-- End of <div class="panel panel-default"> -->
        






   <div class="panel panel-default" id="table_load">

        

   
       <div class="form-group form-group-sm">
	         <label class="control-label " for="search" >travel_card List</label>
	   </div> <!-- End of <div class="form-group form-group-sm" -->


        <div class="form-group form-group-sm" >
          <table id="table_for_transactions" class="table table-striped table-bordered" >
         	<thead >
                 <tr>
                 <th style="text-align: center;">SI</th>
                 <th style="text-align: center;">Travel Card Number</th>
                 <th style="text-align: center;">PO No.</th>
                 <th style="text-align: center;">Process Name</th>
                 <th style="text-align: center;">Action</th>
                 </tr>
            </thead>
            <tbody>
            <?php 
                            $s1 = 1;
                            $sql_for_row_id= "SELECT tcdft.row_id,tcdft.travel_card_id,pc.po_number,tcdft.process_name FROM travel_card_details_for_transactions tcdft inner join po_creation pc on pc.po_id=tcdft.po_id ORDER BY tcdft.row_id ASC";
                             

                            
                            $res_for_row_id = mysqli_query($con, $sql_for_row_id);

                            while ($row = mysqli_fetch_assoc($res_for_row_id)) 
                            {
             ?>

             <tr>
                <td><?php echo $s1; ?></td>
                <td style="display: none;"><?php echo $row['row_id']; ?></td>
                <td><?php echo $row['travel_card_id']; ?></td>
                <td><?php echo $row['po_number']; ?></td>
                <td><?php echo $row['process_name']; ?></td>
                <td>
                      
                        
                        <button type="submit" id="edit_travel_card_info" name="edit_process_wise_travel_card_info"  class="btn btn-primary btn-xs" onclick="load_page('list/edit_process_wise_travel_card.php?row_id=<?php echo $row['row_id']."?fs?".$row['travel_card_id'] ?>')"> Edit </button>
                       <span>  </span>
              
                      

                       <!--  <button type="submit" id="delete_travel_card" name="delete_travel_card"  class="btn btn-danger btn-xs" onclick="sending_data_for_delete_travel_card('<?php echo $row['row_id']."?fs?".$row['travel_card_id'] ?>')"> Delete </button> -->
                 </td>
                <?php
                              
                $s1++;
                                 }
                 ?> 
             </tr>
          </tbody>
         </table>
 
        </div> <!-- End of <div class="form-group form-group-sm" -->
        
        <!--  	<script>
	              $(document).ready(function() {
					    $('#table_for_transactions').DataTable( {
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
		   </script>
 -->
      </div>  <!-- End of <div class="panel panel-default"> -->
    </div>  <!-- End of <div id="for_all_page_load"> -->
</div> <!-- End of <div class="col-sm-12 col-md-12 col-lg-12"> -->





