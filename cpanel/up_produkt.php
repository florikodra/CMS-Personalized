<?php
include('dbcon.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"images/produkte/" . $_FILES["image"]["name"]);
			
									  $location="images/produkte/" . $_FILES["image"]["name"];
				                      $emer=$_POST['emer'];									  
									  $vendodhje=$_POST['vendodhje'];
									  $pershkrim=$_POST['pershkrim'];
									  $cmim=$_POST['cmim'];
									  $kategori=$_POST['kategori'];
									  $data=$_POST['data'];
									  $prodhuesi=$_POST['prodhuesi'];
									  $gjendja=$_POST['gjendja'];
			
			$save=	 mysql_query("insert into produkt (location,emer,vendodhje,pershkrim,cmim,kategori,data,prodhuesi,gjendja) VALUES ('$location','$emer','$vendodhje','$pershkrim','$cmim','$kategori','$data','$prodhuesi','$gjendja')");

				?> <script>
	 window.location='produkte.php';
	 </script>
		<?php					
	}exit();	
?>
