






<?php



// // $work_order = $_POST['work_order_number'];

// $work_order = "1-Lt.blue-Whtite Strip";

// echo $work_order = str_replace(' ', '%20', $work_order);

// //cURL start


    $work_order  = '';

	

	$url = "https://119.148.37.238/workorderall.php?api_key=Wm56d29hbGxBcEky";

	
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$html = curl_exec($ch);
	curl_close($ch);

	$values = json_decode($html);





?>

<div class="form-group form-group-sm" id="form-group_for_manufacturer">
	<label class="control-label col-sm-2" for="work_order_number" style="color:#00008B;">Work Order Number:</label>
	<div class="col-sm-5" style="padding-right:4px;">
		<select class="form-control for_auto_complete" id="work_order_number" name="work_order_number" onchange="details_information()">
		  <option >Select Work Order Number</option>

		  <?php
		  foreach ($values as $work_order) {
			
			echo '<option value="'.$work_order->work_order.'">'.$work_order->work_order.'</option>';
		   
		}
			

	      ?>
		</select>
	</div>
</div>

<div class="form-group form-group-sm" id="datewise_transaction_details">

     <table id="datatable-buttons" class="table table-striped table-bordered" style="overflow: auto;">
         <thead>
             <tr>
                 <th style="border: 1px solid black;">SI</th>
                 <th style=" border: 1px solid black;">Work Order Number</th>
                        
            
             </tr>
        </thead>
        <tbody>
        <?php 





$response = "<table border='2' width='100%'>";


$counter = 1;

$s1 = 1;
// $work_orders = array_unique($values);
foreach($values as $work_order)
    {		
														  
           
                
            ?>	
             <tr>
                <td style="border: 1px solid black;"><?php echo $s1; ?></td>
                <td style="border: 1px solid black;"><?php echo $work_order->work_order; ?></td>
                
                                        
                
                <?php
                              
                $s1++;
            }
         ?>
         </tr>
      </tbody>
     </table>

</div> <!-- End of <div class="form-group form-group-sm" -->

</div>  <!-- end of <div class="panel panel-default"> -->
							
	    </div>


    </div> <!-- end of </div> -->

    
</div> <!-- End of <div class="col-sm-12 col-md-12 col-lg-12"> -->

	

