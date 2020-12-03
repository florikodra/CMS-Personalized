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
				                   
			
			$save=	 mysql_query("UPDATE blog SET location='$location' WHERE blog_id='$id'");              

				?> <script>
	 window.location='blog.php';
	 </script>
		<?php					
	}exit();	
?>
