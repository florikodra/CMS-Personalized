<?php
include('dbcon.php');

			
									  
				                      $kl_emr=$_POST['kl_emr'];
	                                  $kl_nr=$_POST['kl_nr'];
	                                  $kl_adr=$_POST['kl_adr'];
									  $kl_sasi=$_POST['kl_sasi'];
									  $data=$_POST['data'];
									  $id=$_GET['id'];
									  
									  
									  
			
			$save=mysql_query("insert into porosi (kl_emr,kl_nr,kl_adr,kl_sasi,data,produkt_id) values ('$kl_emr','$kl_nr','$kl_adr','$kl_sasi','$data','$id')")or die (mysql_error());


				?> <script>
	 window.location='../success.php';
	 </script>
		<?php					
	exit();	
?>
