<?php
include('dbcon.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"images/blog/" . $_FILES["image"]["name"]);
			
									  $location="images/blog/" . $_FILES["image"]["name"];
				                      $titulli=$_POST['titulli'];									  
									  $pershkrimi=$_POST['pershkrimi'];
									  $autor=$_POST['autor'];
									  $data=$_POST['data'];
									  $link=$_POST['link'];
			
			$save=	 mysql_query("insert into blog (location,titulli,pershkrimi,autor,data,link) VALUES ('$location','$titulli','$pershkrimi','$autor','$data','$link')");

				?> <script>
	 window.location='blog.php';
	 </script>
		<?php					
	}exit();	
?>
