<?php
include('dbcon.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"images/home/" . $_FILES["image"]["name"]);
			
									  $location="images/home/" . $_FILES["image"]["name"];
				                      $titulli=$_POST['titulli'];									  
									  $pershkrim=$_POST['pershkrim'];
									  $numri=$_POST['numri'];
									  
			
			$save=	 mysql_query("insert into home (location,titulli,pershkrim,numri) VALUES ('$location','$titulli','$pershkrim','$numri')");

				?> <script>
	 window.location='home.php';
	 </script>
		<?php					
	}exit();	
?>
