<?php

class DB_Connection_Class{

	 function connection()
	 {
		   global $con;
	
		  $con = mysqli_connect("localhost","root","","zzfl_rack_management");
		  //$con = mysqli_connect("localhost","root","O@s@t708s\$H\$a461","zzfl_rack_management");
		   /*$con = mysqli_connect("localhost","root","O@s@t708s\$H\$a461","zzfl_rack_management");*/
		
		  if (!$con)
		  {			
				die('Could not connect: ' . mysqli_error());	
		  }
		  
/*		  mysql_select_db("inventory_final_development", $con);
*/	  
	 }
 
 
   function disconnection()
   {
		global $con;
		mysqli_close($con);
   }
}

class DB_Connection_Class_Main{

	 function connection()
	 {
		   global $con;
	
		  $con = mysqli_connect("localhost","root","","zzfl_rack_management");
		  //$con = mysqli_connect("localhost","root","O@s@t708s\$H\$a461","zzfl_rack_management");
		   /*$con = mysqli_connect("localhost","root","O@s@t708s\$H\$a461","zzfl_rack_management");*/
		
		  if (!$con)
		  {			
				die('Could not connect: ' . mysqli_error());	
		  }
		  
/*		  mysql_select_db("inventory_final_development", $con);
*/	  
	 }
 
 
   function disconnection()
   {
		global $con;
		mysqli_close($con);
   }
}


?>
