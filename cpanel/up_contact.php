<?php
include('dbcon.php');
			
									  
				                      $emer=$_POST['emer'];
	                                  $email=$_POST['email'];
	                                  $mesazh=$_POST['mesazh'];
									  
			
			$save=mysql_query("insert into kontakt (emer,email,mesazh) values ('$emer','$email','$mesazh')")or die (mysql_error());


				?> <script>
	 window.location='../contact.php';
	 </script>
		<?php					
	exit();	
?>
