<?php include ('dbcon.php');
$id=$_GET['id'];
 mysql_query("delete from blog where blog_id='$id'")or die (mysql_error());
?>
 <script>
	 window.location='blog.php';
 </script>
 
 